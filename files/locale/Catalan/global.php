<?php
/*
Paquet d'Idioma Catal� per a PHP-Fusion
Produ�t per Fernando P. Mart�nez (Centralsoft - centralsoft@centralsoft.es)
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
$locale['months'] = "&nbsp|Gener|Febrer|Mar�|Abril|Maig|Juny|Juliol|Agost|Setembre|Octubre|Novembre|Desembre";
$locale['shortmonths'] = "&nbsp|Gen|Feb|Mar|Abr|Maig|Juny|Jul|Ago|Set|Oct|Nov|Des";

// Standard User Levels
$locale['user0'] = "P�blic";
$locale['user1'] = "Membre";
$locale['user2'] = "Administrador";
$locale['user3'] = "S�per Administrador";
$locale['user_na'] = "N/A";
$locale['user_anonymous'] = "Usuari An�nim";
// Standard User Status
$locale['status0'] = "Actiu";
$locale['status1'] = "Banned";
$locale['status2'] = "Sense activar";
$locale['status3'] = "Susp�s";
$locale['status4'] = "Seguretat Banned";
$locale['status5'] = "Cancel.lat";
$locale['status6'] = "An�nim";
$locale['status7'] = "Desactivat";
$locale['status8'] = "Inactiu";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navegaci�";
$locale['global_002'] = "No s'ha definit cap enlla�\n";
// Users Online
$locale['global_010'] = "Usuaris Connectats";
$locale['global_011'] = "Invitats";
$locale['global_012'] = "Membres";
$locale['global_013'] = "Cap";
$locale['global_014'] = "Total Membres";
$locale['global_015'] = "Membres Sense Activar";
$locale['global_016'] = "�ltim Membre";
// Forum Side panel
$locale['global_020'] = "Temes del F�rum";
$locale['global_021'] = "�ltims Temes";
$locale['global_022'] = "Temes Populars";
$locale['global_023'] = "No s'ha creat cap tema";
// Comments Side panel
$locale['global_025'] = "�ltims Comentaris";
$locale['global_026'] = "encara Cap comentari";
// Articles Side panel
$locale['global_030'] = "�ltims Articles";
$locale['global_031'] = "No hi ha cap article disponible";
// Downloads Side panel
$locale['global_032'] = "Baixades M�s Recents";
$locale['global_033'] = "No hi ha desc�rregues disponibles";
// Welcome panel
$locale['global_035'] = "Benvingut/da";
// Latest Active Forum Threads panel
$locale['global_040'] = "�ltims Temes Actius del F�rum";
$locale['global_041'] = "Els meus Temes Recents";
$locale['global_042'] = "Els meus Missatges Recents";
$locale['global_043'] = "Nous Missatges";
$locale['global_044'] = "Tema";
$locale['global_045'] = "Visites";
$locale['global_046'] = "Respostes";
$locale['global_047'] = "�ltim Missatge";
$locale['global_048'] = "F�rum";
$locale['global_049'] = "Publicat el";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Enquesta";
$locale['global_052'] = "Mogut";
$locale['global_053'] = "No has iniciat cap tema al F�rum.";
$locale['global_054'] = "No has publicat cap Missatge al F�rum.";
$locale['global_055'] = "Nous Missatges des de l'�ltima visita: %u.";
$locale['global_056'] = "Els meus Temes en Seguiment";
$locale['global_057'] = "Opcions";
$locale['global_058'] = "Aturar";
$locale['global_059'] = "No est�s fent el seguiment de cap tema.";
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
$locale['global_077'] = "Not�cies";
$locale['global_078'] = "No s'ha publicat cap not�ca";
$locale['global_079'] = "En ";
$locale['global_080'] = "Sense Categoria";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Seg�ent";
$locale['global_092'] = "P�gina ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Iniciar Sessi�";
$locale['global_101'] = "Nom d'Usuari";
$locale['global_102'] = "Contrasenya";
$locale['global_103'] = "Recorda'm";
$locale['global_104'] = "Iniciar Sessi�";
$locale['global_105'] = "�Encara no ets Membre?<br />Fes clic <a href='".BASEDIR."register.php' class='side'><strong>aqu�</strong></a> per a registrar-te.";
$locale['global_106'] = "Ha perdut la contrasenya?<br />Fes clic <a href='".BASEDIR."lostpassword.php' class='side'><strong>aqu�</strong></a> per a obtenir una nova contrasenya.";
$locale['global_107'] = "Reg�stra't";
$locale['global_108'] = "Has perdut la contrasenya?";
// Member User Menu
$locale['global_120'] = "Edita Perfil";
$locale['global_121'] = "Missatges Privats";
$locale['global_122'] = "Llista de Membres";
$locale['global_123'] = "Administraci�";
$locale['global_124'] = "Surt de la Sessi�";
$locale['global_125'] = "Tens %u ";
$locale['global_126'] = "nou Missatge";
$locale['global_127'] = "nous Missatges";
$locale['global_128'] = "submissi�";
$locale['global_129'] = "presentacions";
// Poll
$locale['global_130'] = "Enquesta Membres";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Has d'iniciar sessi� per a votar.";
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
$locale['global_150'] = "Codi de Validaci�:";
$locale['global_151'] = "Introdu�u el codi de validaci�:";

// Footer Counter
$locale['global_170'] = "Visita �nica";
$locale['global_171'] = "Visites �niques";
$locale['global_172'] = "Temps de generaci�: %s segons";
$locale['global_173'] = "Consultes";
// Admin Navigation
$locale['global_180'] = "Inici d'Administraci�";
$locale['global_181'] = "Tornar a la Web";
$locale['global_182'] = "<strong>Av�s:</strong> Contrasenya d'Administraci� no introdu�da o incorrecta.";
// Miscellaneous
$locale['global_190'] = "Mode de mantenimient activat";
$locale['global_191'] = "La teva direcci� IP est� expulsada.";
$locale['global_192'] = "Sortint de la Sessi� de ";
$locale['global_193'] = "Iniciant la Sessi� de ";
$locale['global_194'] = "Aquest compte est� susp�s.";
$locale['global_195'] = "Aquest compte no est� activat.";
$locale['global_196'] = "El nom d'usuari o la contrasenya no s�n v�lids.";
$locale['global_197'] = "Espera mentres ets transferit...<br /><br />
[ <a href='index.php'>o b� fes clic aqu� si no vols esperar</a> ]";
$locale['global_198'] = "<strong>ATENCI�:</strong> S'ha detectat l'arxiu 'setup.php'. Has d'esborrar-lo immediatament.";
$locale['global_199'] = "<strong>ATENCI�:</strong> No est� configurada la contrasenya d'administrador. Fes clic a <a href='".BASEDIR."edit_profile.php'>Editar Perfil</a> per a configurar-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Cerca";
$locale['global_203'] = $locale['global_200']."PMF";
$locale['global_204'] = $locale['global_200']."F�rum";
//Themes
$locale['global_210'] = "Saltar al contingut";
// No themes found
$locale['global_300'] = "No s'han trobat Temes";
$locale['global_301'] = "No es pot mostrar aquesta p�gina. Per alguna circumst�ncia no s'ha trobat el Tema de la web. Si ets l'Administrador del lloc web, usa el teu gestor FTP i transfereix al directori <em>themes/</em> qualsevol Tema dissenyat per a <em>PHP-Fusion v7</em>. Despr�s de transferir el Tema, comprova en la <em>Configuraci� Principal</em> que el Tema seleccionat es troba en el directori <em>themes/</em>. Si �s aix�, comprova que el Tema transferit t� el mateix nom (incloent maj�scules i min�scules - important en servidors basats en UNIX) que el triat en la p�gina de la <em>Configuraci� Principal</em>.<br /><br />Si ets un usuari normal d'aquesta web, contacta per email amb l'Administrador (".hide_email($settings['siteemail']).") i informa-li d'aquest problema.";
$locale['global_302'] = "El Tema triat en la Configuraci� Principal no existeix o est� incomplet.";
// JavaScript Not Enabled
$locale['global_303'] = "Oh no! Where's the <strong>JavaScript</strong>?<br />Your Web browser does not have JavaScript enabled or does not support JavaScript. Please <strong>enable JavaScript</strong> on your Web browser to properly view this Web site,<br /> or <strong>upgrade</strong> to a Web browser that does support JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Opera Web Browser'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> or a version of <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> newer then version 6.";
// User Management
// Member status
$locale['global_400'] = "susp�s";
$locale['global_401'] = "banned";
$locale['global_402'] = "desactivat";
$locale['global_403'] = "compte cancel � lat";
$locale['global_404'] = "compte an�nima";
$locale['global_405'] = "usuari an�nim";
$locale['global_406'] = "Aquest compte ha estat prohibit per la seg�ent ra�:";
$locale['global_407'] = "Aquest compte ha estat suspesa fins que ";
$locale['global_408'] = " per les seg�ents raons:";
$locale['global_409'] = "Aquest compte ha estat prohibit per raons de seguretat.";
$locale['global_410'] = "La ra� d'aix� �s: ";
$locale['global_411'] = "Aquest compte s'ha cancel � lat.";
$locale['global_412'] = "Aquest compte ha estat an�nima, probablement becuase d'inactivitat.";
// Banning due to flooding
$locale['global_440'] = "Ban autom�tica per al Control d'Inundacions";
$locale['global_441'] = "El seu compte en ".$settings['sitename']."s'ha prohibit";
$locale['global_442'] = "Hola [USER_NAME],\n
El seu compte en ".$settings['sitename']." va ser capturat publicar massa elements en el sistema en molt poc temps des de la IP ".USER_IP.", i per aix� han estat prohibits. Aix� es fa per prevenir els robots de la presentaci� de missatges d'spam en r�pida successi�.\n
Si us plau, poseu-vos en contacte amb l'administrador del lloc en ".$settings['siteemail']." tenir el seu compte de restaurar o informar si aix� no era el que provoca aquesta prohibici� la seguretat.\n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspensi� eleva autom�ticament pel sistema";
$locale['global_451'] = "La suspensi� aixecada al ".$settings['sitename'];
$locale['global_452'] = "Hola USER_NAME,\n
La suspensi� del seu compte en ".$settings['siteurl']." s'ha aixecat. Aqu� hi ha les seves dades d'acc�s:\n
nom d'usuari: USER_NAME
contrasenya: Ocult per raons de seguretat\n
Si no recordes la contrasenya, pot restablir a trav�s del seg�ent enlla�: LOST_PASSWORD\n\n
una cordial salutaci�,\n
".$settings['siteusername'];
$locale['global_453'] = "Hola USER_NAME,\n
La suspensi� del seu compte en ".$settings['siteurl']." s'ha aixecat.\n\n
una cordial salutaci�,\n
".$settings['siteusername'];
$locale['global_454'] = "Compte reactivat en ".$settings['sitename'];
$locale['global_455'] = "Hola USER_NAME,\n
L'�ltima vegada que va iniciar sessi� al vostre compte va ser reactivat en ".$settings['siteurl']." i el seu compte no es marca com a inactiva.\n\n
una cordial salutaci�,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "buit";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "kB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Vost� est� sent redirigit a% s, per favor esperi. Si la redirecci� no, feu clic aqu�.";

// Captcha Locales
$locale['global_600'] = "codi de Validaci�";
$locale['recaptcha'] = "es";

//Miscellaneous
$locale['global_900'] = "No es pot convertir HEX a DEC";
?>
