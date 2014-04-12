<?php
// Error messages

$locale['500'] = "S'ha produït un error";

$locale['501'] = "L'enllaç de reactivació que has utilitzat ja no és vàlid.<br /><br />
Contacta amb l'administrador del lloc en <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> si vols sol · licitar la reactivació manual.";

$locale['502'] = "L'enllaç de reactivació que has usat no és vàlid.<br /><br />
Contacta amb l'administrador del lloc en <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> si vols sol · licitar la reactivació manual.";

$locale['503'] = "L'enllaç de reactivació que has utilitzat no ha pogut reactivar el teu compte.<br />
Potser el teu compte ja hagi estat reactivada i, en aquest cas, hauries de poder <a href='".$settings['siteurl']."login.php'>iniciar sessió aquí</a>.<br /><br />
Si ara no podeu iniciar sessió, contacteu amb l'administrador del lloc en <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> si vols sol · licitar la reactivació manual.";
// Send confirmation mail

$locale['504'] = "Compte reactivat en ".$settings['sitename'];

$locale['505'] = "Hola [USER_NAME],\n
El teu compte a ".$settings['sitename']." ha estat reactivat. Esperem poder veure't més sovint en el lloc.\n\n
Salutacions,\n\n
".$settings['siteusername'];

$locale['506'] = "Reactivada per l'usuari.";
?>
