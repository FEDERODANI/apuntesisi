<?php

require_once "../../maincore.php";
require_once THEMES . "templates/admin_header_mce.php";

include INFUSIONS . "connect/infusion_db.php";

if (!checkrights("FBC") || !$_GET['aid'] || !defined("iAUTH") || $_GET['aid'] != iAUTH || !iADMIN)
{
    redirect("../../index.php") . die("Access Denied");
}

$id = "";
$secret = "";
$sucess = false;
$count = dbcount("(user_id)", DB_USERS, "user_oauth_uid!='0'");

opentable($locale['i_admin_title']);

$admin = dbquery("SELECT * FROM " . DB_FACEBOOK . " LIMIT 0,1");
while ($d = dbarray($admin))
{
    $id = $d['id'];
    $secret = $d['secret'];
}

if (isset($_POST['update']))
{
    $id = preg_replace('/[^#A-Z0-9 ]/i', '', $_POST['id']);
    $secret = preg_replace('/[^#A-Z0-9 ]/i', '', $_POST['secret']);
    $query = dbquery("UPDATE " . DB_FACEBOOK . " SET id = '{$id}', secret = '{$secret}';");
    $sucess = true;
}

if ($sucess)
{
    echo "<div id='close-message'><div class='admin-message'>{$locale['fb_updated']}</div></div>\n";
}

echo "<form name='form_settings' id='form_settings' method='post' action='" . FUSION_SELF . $aidlink .
    "' enctype='multipart/form-data'>\n";
echo "<table cellpadding='0' cellspacing='1' class='tbl-border center' width='400px;'>\n";
echo "<tr>\n";
echo "<td class='forum-caption'>{$locale['a-set']}</td>\n";
echo "<td class='forum-caption'>{$locale['a-v']}</td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td class='tbl1'>{$locale['fb_id']}</td>\n";
echo "<td class='tbl1'><input type='text' class='textbox' name='id' value='{$id}' /></td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td class='tbl2'>{$locale['fb_secret']}</td>\n";
echo "<td class='tbl2'><input type='text' class='textbox' name='secret' value='{$secret}' /></td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td class='tbl1'></td>\n";
echo "<td class='tbl1'><input type='submit' class='button' value='{$locale['fb_update']}' name='update' /></td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td class='forum-caption' colspan='2' style='text-align:center;'>";
echo $locale['totalconn']." ".$count;
echo "</td></tr>";
echo "<tr>\n";
echo "<td class='forum-caption' colspan='2' style='text-align:center;'><a href='https://developers.facebook.com/apps' target='_blank'>{$locale['fb_app_link']}</a> | <a href='http://phpfusionmods.com/' target='_blank' />{$locale['fb_app_support']}</a></td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td class='tbl1' colspan='2' style='text-align:center;'>";
$link = 'http://phpfusionmods.com/check.php?id=3&version=2.2.2';
echo @file_get_contents($link);
//echo '<iframe width="400" height="100" src="http://phpfusionmods.com/check.php?id=3&amp;version=2.2.1" frameborder="0" allowfullscreen></iframe>';
echo "</td>\n</tr>\n";
echo "<tr>\n";
echo "<td class='tbl2' colspan='2' style='text-align:center;'>";
echo $locale['i_title']." v2.2.2 &copy; <a href='http://phpfusionmods.com/' target='_blank'>NetriX</a>";
echo "</td></tr>";
echo "</table>\n";
echo "</form>";
closetable();

require_once THEMES . "templates/footer.php";

?>