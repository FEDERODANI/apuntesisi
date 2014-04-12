<?php
/*
Paquet d'Idioma Català per a PHP-Fusion
Produït per Fernando P. Martínez (Centralsoft - centralsoft@centralsoft.es)
Revisat per Marc Riera (mrc2407 - mrc2407@gmail.com)
Web Oficial de Suport: http://php-fusion.es
*/
// Locale Settings
setlocale(LC_TIME, "ca","ca_ES"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "es";
$locale['tinymce'] = "en";
$locale['phpmailer'] = "es";

// Full & Short Months
$locale['months'] = "&nbsp|Gener|Febrer|Març|Abril|Maig|Juny|Juliol|Agost|Setembre|Octubre|Novembre|Desembre";
$locale['shortmonths'] = "&nbsp|Gen|Feb|Mar|Abr|Maig|Juny|Jul|Ago|Set|Oct|Nov|Des";

// Standard User Levels
$locale['user0'] = "Públic";
$locale['user1'] = "Membre";
$locale['user2'] = "Administrador";
$locale['user3'] = "Súper Administrador";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Usuari Anònim";
// Standard User Status
$locale['status0'] = "Actiu";
$locale['status1'] = "Banned";
$locale['status2'] = "Sense activar";
$locale['status3'] = "Suspès";
$locale['status4'] = "Seguretat Banned";
$locale['status5'] = "Cancel.lat";
$locale['status6'] = "Anònim";
$locale['status7'] = "Desactivat";
$locale['status8'] = "Inactiu";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegació";
$locale['global_002'] = "No s'ha definit cap enllaç\n";
// Users Online
$locale['global_010'] = "Usuaris Connectats";
$locale['global_011'] = "Invitats";
$locale['global_012'] = "Membres";
$locale['global_013'] = "Cap";
$locale['global_014'] = "Total Membres";
$locale['global_015'] = "Membres Sense Activar";
$locale['global_016'] = "Últim Membre";
// Forum Side panel
$locale['global_020'] = "Temes del Fòrum";
$locale['global_021'] = "Últims Temes";
$locale['global_022'] = "Temes Populars";
$locale['global_023'] = "No s'ha creat cap tema";
// Comments Side panel
$locale['global_025'] = "Últims Comentaris";
$locale['global_026'] = "encara Cap comentari";
// Articles Side panel
$locale['global_030'] = "Últims Articles";
$locale['global_031'] = "No hi ha cap article disponible";
// Downloads Side panel
$locale['global_032'] = "Baixades Més Recents";
$locale['global_033'] = "No hi ha descàrregues disponibles";
// Welcome panel
$locale['global_035'] = "Benvingut/da";
// Latest Active Forum Threads panel
$locale['global_040'] = "Últims Temes Actius del Fòrum";
$locale['global_041'] = "Els meus Temes Recents";
$locale['global_042'] = "Els meus Missatges Recents";
$locale['global_043'] = "Nous Missatges";
$locale['global_044'] = "Tema";
$locale['global_045'] = "Visites";
$locale['global_046'] = "Respostes";
$locale['global_047'] = "Últim Missatge";
$locale['global_048'] = "Fòrum";
$locale['global_049'] = "Publicat el";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Enquesta";
$locale['global_052'] = "Mogut";
$locale['global_053'] = "No has iniciat cap tema al Fòrum.";
$locale['global_054'] = "No has publicat cap Missatge al Fòrum.";
$locale['global_055'] = "Nous Missatges des de l'última visita: %u.";
$locale['global_056'] = "Els meus Temes en Seguiment";
$locale['global_057'] = "Opcions";
$locale['global_058'] = "Aturar";
$locale['global_059'] = "No estàs fent el seguiment de cap tema.";
$locale['global_060'] = "Vols aturar el seguiment d'aquest tema?";
// News & Articles
$locale['global_070'] = "Publicat per ";
$locale['global_071'] = "el ";
$locale['global_072'] = "Segueix llegint";
$locale['global_073'] = " Comentaris";
$locale['global_073b'] = " Comentari";
$locale['global_074'] = " Lectures";
$locale['global_075'] = "Imprimeix";
$locale['global_076'] = "Editar";
$locale['global_077'] = "Notícies";
$locale['global_078'] = "No s'ha publicat cap notíca";
$locale['global_079'] = "En ";
$locale['global_080'] = "Sense Categoria";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Següent";
$locale['global_092'] = "Pàgina ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Iniciar Sessió";
$locale['global_101'] = "Nom d'Usuari";
$locale['global_102'] = "Contrasenya";
$locale['global_103'] = "Recorda'm";
$locale['global_104'] = "Iniciar Sessió";
$locale['global_105'] = "¿Encara no ets Membre?<br />Fes clic <a href='".BASEDIR."register.php' class='side'><strong>aquí</strong></a> per a registrar-te.";
$locale['global_106'] = "Ha perdut la contrasenya?<br />Fes clic <a href='".BASEDIR."lostpassword.php' class='side'><strong>aquí</strong></a> per a obtenir una nova contrasenya.";
$locale['global_107'] = "Regístra't";
$locale['global_108'] = "Has perdut la contrasenya?";
// Member User Menu
$locale['global_120'] = "Edita Perfil";
$locale['global_121'] = "Missatges Privats";
$locale['global_122'] = "Llista de Membres";
$locale['global_123'] = "Administració";
$locale['global_124'] = "Surt de la Sessió";
$locale['global_125'] = "Tens %u ";
$locale['global_126'] = "nou Missatge";
$locale['global_127'] = "nous Missatges";
$locale['global_128'] = "submissió";
$locale['global_129'] = "presentacions";
// Poll
$locale['global_130'] = "Enquesta Membres";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Has d'iniciar sessió per a votar.";
$locale['global_133'] = "Vot";
$locale['global_134'] = "Vots";
$locale['global_135'] = "Vots: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalitzada: ";
$locale['global_138'] = "Arxiu d'Enquestes";
$locale['global_139'] = "Selecciona una enquesta de la llista per a mirar-la:";
$locale['global_140'] = "Mira-la";
$locale['global_141'] = "Mira l'Enquesta";
$locale['global_142'] = "No s'ha creat cap enquesta.";

// Captcha
$locale['global_150'] = "Codi de Validació:";
$locale['global_151'] = "Introduïu el codi de validació:";

// Footer Counter
$locale['global_170'] = "Visita única";
$locale['global_171'] = "Visites úniques";
$locale['global_172'] = "Temps de generació: %s segons";
$locale['global_173'] = "Consultes";
// Admin Navigation
$locale['global_180'] = "Inici d'Administració";
$locale['global_181'] = "Tornar a la Web";
$locale['global_182'] = "<strong>Avís:</strong> Contrasenya d'Administració no introduïda o incorrecta.";
// Miscellaneous
$locale['global_190'] = "Mode de mantenimient activat";
$locale['global_191'] = "La teva direcció IP està expulsada.";
$locale['global_192'] = "Sortint de la Sessió de ";
$locale['global_193'] = "Iniciant la Sessió de ";
$locale['global_194'] = "Aquest compte està suspès.";
$locale['global_195'] = "Aquest compte no està activat.";
$locale['global_196'] = "El nom d'usuari o la contrasenya no són vàlids.";
$locale['global_197'] = "Espera mentres ets transferit...<br /><br />
[ <a href='index.php'>o bé fes clic aquí si no vols esperar</a> ]";
$locale['global_198'] = "<strong>ATENCIÓ:</strong> S'ha detectat l'arxiu 'setup.php'. Has d'esborrar-lo immediatament.";
$locale['global_199'] = "<strong>ATENCIÓ:</strong> No està configurada la contrasenya d'administrador. Fes clic a <a href='".BASEDIR."edit_profile.php'>Editar Perfil</a> per a configurar-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cerca";
$locale['global_203'] = $locale['global_200']."PMF";
$locale['global_204'] = $locale['global_200']."Fòrum";
//Themes
$locale['global_210'] = "Saltar al contingut";
// No themes found
$locale['global_300'] = "No s'han trobat Temes";
$locale['global_301'] = "No es pot mostrar aquesta pàgina. Per alguna circumstància no s'ha trobat el Tema de la web. Si ets l'Administrador del lloc web, usa el teu gestor FTP i transfereix al directori <em>themes/</em> qualsevol Tema dissenyat per a <em>PHP-Fusion v7</em>. Després de transferir el Tema, comprova en la <em>Configuració Principal</em> que el Tema seleccionat es troba en el directori <em>themes/</em>. Si és així, comprova que el Tema transferit té el mateix nom (incloent majúscules i minúscules - important en servidors basats en UNIX) que el triat en la pàgina de la <em>Configuració Principal</em>.<br /><br />Si ets un usuari normal d'aquesta web, contacta per email amb l'Administrador (".hide_email($settings['siteemail']).") i informa-li d'aquest problema.";
$locale['global_302'] = "El Tema triat en la Configuració Principal no existeix o està incomplet.";
// JavaScript Not Enabled
$locale['global_303'] = "Oh no! Where's the <strong>JavaScript</strong>?<br />Your Web browser does not have JavaScript enabled or does not support JavaScript. Please <strong>enable JavaScript</strong> on your Web browser to properly view this Web site,<br /> or <strong>upgrade</strong> to a Web browser that does support JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> or a version of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> newer then version 6.";
// User Management
// Member status
$locale['global_400'] = "suspès";
$locale['global_401'] = "banned";
$locale['global_402'] = "desactivat";
$locale['global_403'] = "compte cancel · lat";
$locale['global_404'] = "compte anònima";
$locale['global_405'] = "usuari anònim";
$locale['global_406'] = "Aquest compte ha estat prohibit per la següent raó:";
$locale['global_407'] = "Aquest compte ha estat suspesa fins que ";
$locale['global_408'] = " per les següents raons:";
$locale['global_409'] = "Aquest compte ha estat prohibit per raons de seguretat.";
$locale['global_410'] = "La raó d'això és: ";
$locale['global_411'] = "Aquest compte s'ha cancel · lat.";
$locale['global_412'] = "Aquest compte ha estat anònima, probablement becuase d'inactivitat.";
// Banning due to flooding
$locale['global_440'] = "Ban automàtica per al Control d'Inundacions";
$locale['global_441'] = "El seu compte en ".$settings['sitename']."s'ha prohibit";
$locale['global_442'] = "Hola [USER_NAME],\n
El seu compte en ".$settings['sitename']." va ser capturat publicar massa elements en el sistema en molt poc temps des de la IP ".USER_IP.", i per això han estat prohibits. Això es fa per prevenir els robots de la presentació de missatges d'spam en ràpida successió.\n
Si us plau, poseu-vos en contacte amb l'administrador del lloc en ".$settings['siteemail']." tenir el seu compte de restaurar o informar si això no era el que provoca aquesta prohibició la seguretat.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspensió eleva automàticament pel sistema";
$locale['global_451'] = "La suspensió aixecada al ".$settings['sitename'];
$locale['global_452'] = "Hola USER_NAME,\n
La suspensió del seu compte en ".$settings['siteurl']." s'ha aixecat. Aquí hi ha les seves dades d'accés:\n
nom d'usuari: USER_NAME
contrasenya: Ocult per raons de seguretat\n
Si no recordes la contrasenya, pot restablir a través del següent enllaç: LOST_PASSWORD\n\n
una cordial salutació,\n
".$settings['siteusername'];
$locale['global_453'] = "Hola USER_NAME,\n
La suspensió del seu compte en ".$settings['siteurl']." s'ha aixecat.\n\n
una cordial salutació,\n
".$settings['siteusername'];
$locale['global_454'] = "Compte reactivat en ".$settings['sitename'];
$locale['global_455'] = "Hola USER_NAME,\n
L'última vegada que va iniciar sessió al vostre compte va ser reactivat en ".$settings['siteurl']." i el seu compte no es marca com a inactiva.\n\n
una cordial salutació,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "buit";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Vostè està sent redirigit a% s, per favor esperi. Si la redirecció no, feu clic aquí.";

// Captcha Locales
$locale['global_600'] = "codi de Validació";
$locale['recaptcha'] = "es";

//Miscellaneous
$locale['global_900'] = "No es pot convertir HEX a DEC";
?>
