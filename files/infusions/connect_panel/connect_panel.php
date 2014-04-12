<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_info_panel.php
| Author: Nick Jones (Digitanium)
| Modifications: Brandon Davis (NetriX)
| -- http://phpfusionmods.com/
| --- Facebook Connect Infusion
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
    die("Access Denied");
}

include INFUSIONS . "connect/infusion_db.php";

if (iMEMBER) {
    $msg_count = dbcount("(message_id)", DB_MESSAGES, "message_to='" . $userdata['user_id'] .
        "' AND message_read='0' AND message_folder='0'");

    openside($userdata['user_name']);

    if ($userdata['user_avatar'] && file_exists(IMAGES . "avatars/{$userdata['user_avatar']}")) {
        echo "<img src='" . IMAGES . "avatars/{$userdata['user_avatar']}' alt='' /><br /><br />\n";
    }

    if ($userdata['user_oauth_uid'] == 0) {
        echo THEME_BULLET . " <a href='" . INFUSIONS . "connect/index.php'>".$locale['connectacc']."</a><br />\n";
    }

    echo THEME_BULLET . " <a href='" . BASEDIR . "edit_profile.php' class='side'>" .
        $locale['global_120'] . "</a><br />\n";
    echo THEME_BULLET . " <a href='" . BASEDIR . "messages.php' class='side'>" . $locale['global_121'] .
        "</a><br />\n";
    echo THEME_BULLET . " <a href='" . BASEDIR . "members.php' class='side'>" . $locale['global_122'] .
        "</a><br />\n";

    if (!empty($userdata['user_oauth_uid'])) {
        echo THEME_BULLET . " <a href='" . INFUSIONS .
            "connect/index.php?unlink' class='side'>{$locale['unlink']}</a><br />\n";
    }

    if (iADMIN && (iUSER_RIGHTS != "" || iUSER_RIGHTS != "C")) {
        echo THEME_BULLET . " <a href='" . ADMIN . "index.php" . $aidlink .
            "' class='side'>" . $locale['global_123'] . "</a><br />\n";
    }

    echo THEME_BULLET . " <a href='" . INFUSIONS .
        "connect/logout.php' class='side'>" . $locale['global_124'] . "</a>\n";

    if ($msg_count) {
        echo "<div style='text-align:center;margin-top:15px;'>\n";
        echo "<strong><a href='" . BASEDIR . "messages.php' class='side'>" . sprintf($locale['global_125'],
            $msg_count);
        echo ($msg_count == 1 ? $locale['global_126'] : $locale['global_127']) .
            "</a></strong>\n";
        echo "</div>\n";
    }

    if (iADMIN && checkrights("SU")) {
        $subm_count = dbcount("(submit_id)", DB_SUBMISSIONS);

        if ($subm_count) {
            echo "<div style='text-align:center;margin-top:15px;'>\n";
            echo "<strong><a href='" . ADMIN . "submissions.php" . $aidlink .
                "' class='side'>" . sprintf($locale['global_125'], $subm_count);
            echo ($subm_count == 1 ? $locale['global_128'] : $locale['global_129']) .
                "</a></strong>\n";
            echo "</div>\n";
        }
    }
    closeside();
} else {
    if (!preg_match('/login.php/i', FUSION_SELF)) {
        $action_url = FUSION_SELF . (FUSION_QUERY ? "?" . FUSION_QUERY : "");
        if (isset($_GET['redirect']) && strstr($_GET['redirect'], "/")) {
            $action_url = cleanurl(urldecode($_GET['redirect']));
        }

        openside($locale['global_100']);
        echo "<div style='text-align:center'>\n";
        echo "<form name='loginform' method='post' action='" . $action_url . "'>\n";
        echo $locale['global_101'] . "<br />\n<input type='text' name='user_name' class='textbox' style='width:100px' /><br />\n";
        echo $locale['global_102'] . "<br />\n<input type='password' name='user_pass' class='textbox' style='width:100px' /><br />\n";
        echo "<label><input type='checkbox' name='remember_me' value='y' title='" . $locale['global_103'] .
            "' style='vertical-align:middle;' /></label>\n";
        echo "<input type='submit' name='login' value='" . $locale['global_104'] .
            "' class='button' /><br />\n";
        echo "</form>\n<br />\n\n";

$appid = "";
$secret2 = "";
$scope = "email";
$id = 0;
$admin = $settings['admin_activation'];

$query = dbquery("SELECT * FROM " . DB_FACEBOOK . " LIMIT 0,1");
while ($d = dbarray($query))
{
    $appid = $d['id'];
    $secret2 = $d['secret'];
}

require_once INFUSIONS."connect/src/facebook.php";

$facebook = new Facebook(array(
    'appId' => $appid,
    'secret' => $secret2,
    ));

$user = $facebook->getUser();

if ($user)
{
    try
    {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
    }
    catch (FacebookApiException $e)
    {
        //echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
        $user = null;
    }
}

if ($user)
{

    /**
     * The un-commented line below provides additional Facebook information pulled from
     * the users account. If you know what your doing, you can obtain the information provided
     * and use it to your own free will.
     */

    // echo htmlspecialchars(print_r($user_profile, true)); // Show Facebook Fields

    @$id = preg_replace('/[^0-9 ]/i', '', $user_profile['id']);
    
    if (iGUEST)
    {
        $result = dbquery("SELECT user_id, user_salt, user_algo, user_oauth_uid FROM " . DB_USERS . "
WHERE user_oauth_uid='" . $id . "'  AND user_status='0' AND user_actiontime='0'
LIMIT 1");
        $result2 = dbquery("SELECT user_id, user_salt, user_algo, user_oauth_uid FROM " . DB_USERS . "
WHERE user_oauth_uid='" . $id . "'  AND user_status='2' AND user_actiontime='0'
LIMIT 1");
        if (dbrows($result) == 1)
        {
            $user = dbarray($result);
            Authenticate::setUserCookie($user['user_id'], $user['user_salt'], "sha256", $remember, true);
            redirect(BASEDIR . $settings['opening_page']);
        } else {
            if (!preg_match('/connect\/index.php/i', $_SERVER['PHP_SELF'])) {                
            redirect(INFUSIONS."connect/index.php#show");
            }            
                    
        }
    }        

    /**
     * Having errors? Such as but not limited to the Redirect Loop? Un-comment the lines below.
     * Copy and paste all array information into the forums that your seeking support with.
     */

    //echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>'; // Shows Errors (Redirect Loop Solution)
    //die();


} else { ?>
<div style="text-align: center;">
<div id="fb-root"></div>
<fb:login-button size="medium" onlogin="Log.info('onlogin callback')" data-scope="email">
<?php
         $locale['login2']

?>
</fb:login-button>
</div>
<script>
window.fbAsyncInit = function() {
FB.init({
appId: '<?php

    echo $facebook->getAppID()

?>',
cookie: true,
xfbml: true,
oauth: true
});
FB.Event.subscribe('auth.login', function(response) {
window.location.reload();
});
FB.Event.subscribe('auth.logout', function(response) {
window.location.reload();
});
};
(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol +
'//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>
<br />
<?php

}


        if ($settings['enable_registration']) {
            echo $locale['global_105'] . "<br /><br />\n";
        }
        echo $locale['global_106'] . "\n</div>\n";
        closeside();
    }
}
?>