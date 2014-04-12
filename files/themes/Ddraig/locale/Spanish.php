<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2012 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: English.php
| Author: JoiNNN
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------+
| This file is part of the PHP-Fusion localization
| standard.
+--------------------------------------------------------+
| Locale: English
+--------------------------------------------------------*/

//footer
$locale['latest_news']				= "Últimas Noticias";
$locale['no_news']					= "No Hay Noticias";
$locale['latest_weblinks']			= "Últimas Weblinks";
$locale['no_links']					= "No Hay WebLinks";
$locale['scroll_top']				= "Desplácese hasta la parte superior";

$locale['tcp_warning']				= "<div class=\'admin-message tcp-warn\'>\n
<span id=\'tcp-warn\'></span><strong>Advertencia:</strong> el Panel de Control de temas no se ha infundido todavía.\n
<br />Para infundir ir a las infusiones ir a: <a href=\'".ADMIN."infusions.php".(isset($aidlink) ? $aidlink : "")."\'>hacer clic aquí</a>.\n
</div>";

//forums
$locale['sticky']					= "Fijado";
$locale['locked']					= "Bloqueado";
$locale['deleted_user']				= "Usuario Eliminado";
?>