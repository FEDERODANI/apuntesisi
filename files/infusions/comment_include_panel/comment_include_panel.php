<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: comment_include_panel.php
| Author: Philip Daly (HobbyMan)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

// ###########  Settings ###############
// App ID
$app_id = "494867990543119";
// User ID
$user_id = "1302906806";
// Number of posts to display
$postnum = "4";
// Comments Width
$panel_width = "600";

// Locale
$locale['cip001'] = "Comments";
$locale['cip002'] = "Tweet";

//############ End Settings ##########

add_to_head("<meta property='fb:admins' content='".$user_id."'/>\n<meta property='fb:app_id' content='".$app_id."'>");
add_to_footer("<script type='text/javascript' src='https://apis.google.com/js/plusone.js'></script>");
echo "<script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script>\n";

// News

if (FUSION_SELF == "news.php" && isset($_GET['readmore'])&& isnum($_GET['readmore'])) {
ob_start();
$get_title = dbarray(dbquery("SELECT news_subject FROM ".DB_NEWS." WHERE news_id = '".$_GET['readmore']."'"));
echo "<div align='center' class='tbl-border'>\n";
echo "<a href='http://twitter.com/share' class='twitter-share-button' data-count='horizontal' data-text='".$get_title['news_subject']."'>".$locale['cip002']."</a>\n";
echo "<script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>\n";
echo "<g:plusone size='medium'></g:plusone>\n";
echo "<fb:like send='false' layout='button_count'></fb:like></div>\n";

opentable($locale['cip001']);
echo "<div align='center' class='tbl'>\n";
echo "<div id='fb-root'></div>\n";
echo "<fb:comments href='".$settings['siteurl'].FUSION_SELF."?readmore=".$_GET['readmore']."' num_posts='".$postnum."' width='600'></fb:comments>\n";
echo "</div>\n";

closetable();

$ob_get_contents = ob_get_contents();
ob_end_clean();
$ob_get_contents = str_replace("'", "\'", $ob_get_contents);
replace_in_output("<!--news_sub_readmore-->", "<!--news_sub_readmore-->\n".$ob_get_contents);

  }
 
// Articles

if (FUSION_SELF == "articles.php" && isset($_GET['article_id'])&& isnum($_GET['article_id'])) {
ob_start();
$get_title = dbarray(dbquery("SELECT article_subject FROM ".DB_ARTICLES." WHERE article_id = '".$_GET['article_id']."'"));
echo "<div align='center' class='tbl-border'>\n";
echo "<a href='http://twitter.com/share' class='twitter-share-button' data-count='horizontal' data-text='".$get_title['article_subject']."'>".$locale['cip002']."</a>\n";
echo "<script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>\n";
echo "<g:plusone size='medium'></g:plusone>\n";
echo "<fb:like send='false' layout='button_count'></fb:like></div>\n";

opentable($locale['cip001']);
echo "<div align='center' class='tbl'>\n";
echo "<div id='fb-root'></div>\n";
echo "<fb:comments href='".$settings['siteurl'].FUSION_SELF."?article_id=".$_GET['article_id']."' num_posts='".$postnum."' width='".$panel_width."'></fb:comments>\n";
echo "</div>\n";
closetable();

$ob_get_contents = ob_get_contents();
ob_end_clean();
$ob_get_contents = str_replace("'", "\'", $ob_get_contents);
replace_in_output("<!--sub_article-->", "<!--sub_article-->\n".$ob_get_contents);
  }
  
// Photos

if (FUSION_SELF == "photogallery.php" && isset($_GET['photo_id']) && isnum($_GET['photo_id'])) {
ob_start();
$get_title = dbarray(dbquery("SELECT photo_title FROM ".DB_PHOTOS." WHERE photo_id = '".$_GET['photo_id']."'"));
echo "<div align='center' class='tbl-border'>\n";
echo "<a href='http://twitter.com/share' class='twitter-share-button' data-count='horizontal' data-text='".$get_title['photo_title']."'>".$locale['cip002']."</a>\n";
echo "<script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>\n";
echo "<g:plusone size='medium'></g:plusone>\n";
echo "<fb:like send='false' layout='button_count'></fb:like></div>\n";

opentable($locale['cip001']);
echo "<div align='center' class='tbl'>\n";
echo "<div id='fb-root'></div>\n";
echo "<fb:comments href='".$settings['siteurl'].FUSION_SELF."?photo_id=".$_GET['photo_id']."' num_posts='".$postnum."' width='".$panel_width."'></fb:comments>\n";
echo "</div>\n";
closetable();

$ob_get_contents = ob_get_contents();
ob_end_clean();
$ob_get_contents = str_replace("'", "\'", $ob_get_contents);
replace_in_output("<!--sub_photo-->", "<!--sub_photo-->\n".$ob_get_contents);
  }
  
// Custom Pages

if (FUSION_SELF == "viewpage.php" && isset($_GET['page_id'])&& isnum($_GET['page_id'])) {
ob_start();
$get_title = dbarray(dbquery("SELECT page_title FROM ".DB_CUSTOM_PAGES." WHERE page_id = '".$_GET['page_id']."'"));
echo "<div align='center' class='tbl-border'>\n";
echo "<a href='http://twitter.com/share' class='twitter-share-button' data-count='horizontal' data-text='".$get_title['page_title']."'>".$locale['cip002']."</a>\n";
echo "<script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>\n";
echo "<g:plusone size='medium'></g:plusone>\n";
echo "<fb:like send='false' layout='button_count'></fb:like></div>\n";

opentable($locale['cip001']);
echo "<div align='center' class='tbl'>\n";
echo "<div id='fb-root'></div>\n";
echo "<fb:comments href='".$settings['siteurl'].FUSION_SELF."?page_id=".$_GET['page_id']."' num_posts='".$postnum."' width='".$panel_width."'></fb:comments>\n";
echo "</div>\n";
closetable();

$ob_get_contents = ob_get_contents();
ob_end_clean();
$ob_get_contents = str_replace("'", "\'", $ob_get_contents);
replace_in_output("<!--custompages-after-content-->", "<!--custompages-after-content-->\n".$ob_get_contents);
  }

 // Downloads

if (FUSION_SELF == "downloads.php" && isset($_GET['download_id']) && isnum($_GET['download_id'])) {
ob_start();
$get_cat = dbarray(dbquery("SELECT download_title, download_cat FROM ".DB_DOWNLOADS." WHERE download_id = '".$_GET['download_id']."'"));
echo "<div align='center' class='tbl-border'>\n";
echo "<a href='http://twitter.com/share' class='twitter-share-button' data-count='horizontal' data-text='".$get_cat['download_title']."'>".$locale['cip002']."</a>\n";
echo "<script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>\n";
echo "<g:plusone size='medium' href='".$settings['siteurl'].FUSION_SELF."?cat_id=".$get_cat['download_cat']."&download_id=".$_GET['download_id']."' num_posts='".$postnum."'></g:plusone>\n";
echo "<fb:like send='false' layout='button_count'></fb:like></div>\n";

opentable($locale['cip001']);
echo "<div align='center' class='tbl'>\n";
echo "<div id='fb-root'></div>\n";
echo "<fb:comments href='".$settings['siteurl'].FUSION_SELF."?cat_id=".$get_cat['download_cat']."&download_id=".$_GET['download_id']."' num_posts='".$postnum."' width='".$panel_width."'></fb:comments>\n";
echo "</div>\n";
closetable();

$ob_get_contents = ob_get_contents();
ob_end_clean();
$ob_get_contents = str_replace("'", "\'", $ob_get_contents);
replace_in_output("<!--pre_download_comments-->", "<!--pre_download_comments-->\n".$ob_get_contents);
  }

?>