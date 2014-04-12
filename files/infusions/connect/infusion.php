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
if (!defined("IN_FUSION"))
{
    die("Access Denied");
}

include INFUSIONS . "connect/infusion_db.php";

if (isset($_POST['infusion']) && ($_POST['infusion'] == "connect"))
{
    echo "<div id='close-message'><div class='admin-message'>Installed!</div></div>\n";
}

$inf_title = $locale['i_title'];
$inf_description = $locale['i_desc'];
$inf_version = "2.2.2";
$inf_developer = "<img src='http://www.phpfusionmods.com/images/avatars/545.png' width='30px' height='30px' style='vertical-align:middle' border='0'><a href='http://www.phpfusionmods.com/' style='border-bottom:1px dotted #BB6767; font-weight:bold;'>NetriX</a>";
$inf_email = "netrix@phpfusionmods.com";
$inf_weburl = "http://www.phpfusionmods.com";
$inf_folder = "connect";

$inf_newtable[1] = DB_FACEBOOK . " (
id varchar(50) NOT NULL,
secret varchar(50) NOT NULL,
KEY id (id)
) ENGINE=MyISAM;";

// I do not wish to have the following translated for personal reasons.

$message = "Hey " . $userdata['user_name'] . ",

Thanks for installing my infusion. Make sure to stay up-to-date by visiting my website. There we'll be able to offer support and consider your suggestions for future PHP-Fusion addons.

[b]Website:[/b] [url=http://www.phpfusionmods.com]PHPFusionMods.com[/url]
[b]Support Thread:[/b] [url=http://www.phpfusionmods.com/]Support/Feedback[/url]

Thanks,
NetriX
PHPFusionMods.com Webmaster";

// End Comment

$inf_insertdbrow[1] = DB_MESSAGES . " (message_to, message_from, message_subject, message_message, message_smileys, message_read, message_datestamp, message_folder) VALUES('" .
    $userdata['user_id'] . "','" . $userdata['user_id'] . "','About ".$locale['i_title']."','" . stripinput($message) .
    "','0','0','" . time() . "','0')";

$inf_insertdbrow[2] = DB_FACEBOOK . " (id, secret) VALUES ('0', '0')";

$inf_droptable[1] = DB_FACEBOOK;

$inf_deldbrow[1] = DB_SETTINGS_INF . " WHERE settings_inf='" . $inf_folder . "'";

$inf_adminpanel[1] = array(
    "title" => "{$locale['i_title']}",
    "image" => "netrix_facebook.png",
    "panel" => "admin.php",
    "rights" => "FBC");

$inf_sitelink[1] = array(
    "title" => "{$locale['i_title']}",
    "url" => "index.php",
    "visibility" => "0");

?>