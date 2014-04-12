<?php

/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Developer: Brandon Davis (NetriX)
| Website: PHPFusionMods.com
|  _   _      _        ___  __
| | \ | | ___| |_ _ __(_) \/ /
| |  \| |/ _ \ __| '__| |\  / 
| | |\  |  __/ |_| |  | |/  \ 
| |_| \_|\___|\__|_|  |_/_/\_\
|
| Do not remove the copyright footer without the developers
| consent. You may request the consent of removal by contacting
| me at the following email address: netrix@phpfusionmods.com
|
| Thank You,
| Brandon (NetriX)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
require_once "../../maincore.php";
include INFUSIONS . "connect/infusion_db.php";

$query = dbquery("SELECT * FROM " . DB_FACEBOOK . " LIMIT 0,1");
while ($d = dbarray($query))
{
    $appid = $d['id'];
    $secret2 = $d['secret'];
}

require_once "src/facebook.php";

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

$logoutUrl = $facebook->getLogoutUrl();
if (iMEMBER)
{
    $userdata = Authenticate::logOut();
    if ($user)
    {
        redirect($logoutUrl);
    } else
    {
        redirect(BASEDIR . "index.php");
    }
} else
{
    redirect(BASEDIR . "index.php");
}

?>