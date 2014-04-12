<?php
// Member Management Options
$locale['400'] = "Membres";
$locale['401'] = "Usuari";
$locale['402'] = "Afegeix Membre";
$locale['403'] = "Tipus d'Usuari";
$locale['404'] = "Opcions";
$locale['405'] = "Mostrar";
$locale['406'] = "Editar";
$locale['407'] = "Activar";
$locale['408'] = "Readmet";
$locale['409'] = "Expulsar";
$locale['410'] = "Esborrar";
$locale['411'] = "No hi ha membres %s";
$locale['412'] = " que comencin per ";
$locale['413'] = " coincidint amb ";
$locale['414'] = "Mostra'ls Tots";
$locale['415'] = "Cerca:";
$locale['416'] = "Cerca";
$locale['417'] = "Membres";
$locale['418'] = "No Activats";
$locale['419'] = "Expulsats";
// Ban/Unban/Delete Member
$locale['420'] = "Expulsi� imposada";
$locale['421'] = "Expulsi� eliminada";
$locale['422'] = "Membre esborrat";
$locale['423'] = "Vols esborrar aquest membre?";
$locale['424'] = "Membre activat";
$locale['425'] = "<h2> Advert�ncia </h2> <br />
Est� a punt d'eliminar l'usuari <strong>%s </ strong>! <br />
La seg�ent <u> continguts publicats per aquest usuari </u> en aquest lloc s'esborrar� si continua: <br />
- Articles <br />
- Not�cies <br />
- Temes del f�rum. Tingueu en compte que els missatges d'altres usuaris en aquests temes, tamb� s'eliminen, juntament amb els vots electorals i attachemets existents en aquests temes. <br />
- Missatges <br />
- F�rum attachements <br />
- Comentaris <br />
- Els missatges privats enviats o rebuts per aquest usuari <br />
- Tema Opinions <br />
- Qualificacions atorgades <br />
Llevat que es tracta d'un emissor d'spam per exemple. es recomana per a la Prohibici�, suspendre, cancel � lar o Anomymize aquest usuari. <br />
<br />
Est� segur que desitja eliminar aquest usuari? <br /> ";
$locale['426'] = "Si";
$locale['427'] = "No";
// Edit Member Details
$locale['430'] = "Editar Membre";
$locale['431'] = "Dades actualitzades";
$locale['432'] = "Torna a l'Administraci� de Membres";
$locale['433'] = "Torna a l'Administraci�";
$locale['434'] = "No s'ha pogut actualitzar les dades del membre:";
// Extra Edit Member Details form options
$locale['440'] = "Guardar";
// Update Profile Errors
$locale['450'] = "No s'ha pogut editar l'administrador principal.";
$locale['451'] = "Has d'indicar un nom d'usuari i uncorreu electr�nic.";
$locale['452'] = "El nom d'usuari cont� car�cters inv�lids.";
$locale['453'] = "El nom d'usuari ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." est� en �s.";
$locale['454'] = "El correu electr�nic no �s v�lid.";
$locale['455'] = "El correu electr�nic ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." est� en �s.";
$locale['456'] = "Les noves contrasenyas no coincideixen.";
$locale['457'] = "Contrasenya inv�lida. Utilitza nom�s car�cters alfanum�rics.<br />
La contrasenya ha de tenir, com a m�nim, 6 car�cters.";
$locale['458'] = "<strong>ATENCIO:</strong> Execuci� inesperada del programa.";
// View Member Profile
$locale['470'] = "Perfil de Membre";
$locale['472'] = "Estad�stiques";
$locale['473'] = "Grups d'Usuaris";
// Add Member Errors
$locale['480'] = "Afegeix Membre";
$locale['481'] = "El compe del membre ha estat creat.";
$locale['482'] = "No s'ha pogut crear el compte del membre.";
// Suspension Log
$locale['510s'] = "Registre de Suspensi� per ";
$locale['511s'] = "En el registre de suspensions no hi ha dades d'aquest membre.";
$locale['512s'] = "Suspensiones anteriores de ";
$locale['513'] = "N�."; // as in number
$locale['514'] = "Data";
$locale['515'] = "Motiu";
$locale['516'] = "Suspensi� de l'Administrador";
$locale['517'] = "Acci� del Sistema";
$locale['518'] = "Tornar al Perfil de l'usuari";
$locale['519'] = "Registre de Suspensi� per aquest usuari ";
$locale['520'] = "Cancel � lada: ";
$locale['521'] = "IP: ";
$locale['522'] = "Encara no rehabilitat";
$locale['540'] = "Error";
$locale['541'] = "Error: Has d'indicar un motiu per a la Suspensi�.";
$locale['542'] = "Error: Has d'indicar un motiu per a la Expulsi� de Seguretat.";
// User Management Admin
$locale['550'] = "Suspendre Usuari: ";
$locale['551'] = "Durada en dies:";
$locale['552'] = "Motiu:";
$locale['553'] = "Suspendre";
$locale['554'] = "En el registre de suspensions no hi ha dades d'aquest membre.";
$locale['555'] = "Si decideixes que aquest usuari hauria de ser expulsat, prem Expulsar";
$locale['556'] = "Cancel Suspensi� de l'Usuari: ";
$locale['557'] = "Cancel � Suspensi�";
$locale['558'] = "Cancel � Expulsi� de l'Usuari: ";
$locale['559'] = "Cancel � Expulsi�";
$locale['560'] = "Cancel � Expulsi� de seguretat de l'Usuari: ";
$locale['561'] = "Cancel � Expulsi� de Seguretat";
$locale['562'] = "Expulsar a l'Usuari: ";
$locale['563'] = "Expulsar per seguretat a l'Usuari: ";
$locale['585a'] = "Explica el motiu pel qual est�s expulsant o readmetent ";

$locale['566'] = "Expulsi� cancel � lada";
$locale['568'] = "Expulsi� de seguretat imposada";
$locale['569'] = "Expulsi� de seguretat cancel � lada";
$locale['572'] = "Membre susp�s";
$locale['573'] = "Suspensi� cancel � lada";
$locale['574'] = "Membre desactivat";
$locale['575'] = "Membre reactivat";
$locale['576'] = "Compte cancel � lada";
$locale['577'] = "Cancel � laci� de compte anul � lada";
$locale['578'] = "Compte cancel � lada i anonimitzada";
$locale['579'] = "Anonimitzaci� compte anul � lada";
$locale['580'] = "Desactivar Membres Inactius";
$locale['581'] = "Tens m�s de 50 usuaris inactius i el proc�s de desactivaci� s'ha d'executar <b>%d vegades </b>.";
$locale['582'] = "Reactivar";
$locale['583'] = "Rehabilitar";
$locale['584'] = "Selecciona nou estat";
$locale['585'] = "Aquest membre va ser inicialment expulsat per raons de seguretat. Segur que vols readmetre ara a aquest membre?";

$locale['590'] = "Suspendre";
$locale['591'] = "Rehabilitar";
$locale['592'] = "suspenent";
$locale['593'] = "rehabilitant";
$locale['594'] = "Indica el motiu pel qual est�s ";
$locale['595'] = " a l'usuari ";
$locale['596'] = "Duraci�:";

$locale['600'] = "Expulsar per seguretat";
$locale['601'] = "expulsant per seguretat";
$locale['602'] = "Readmetre";
$locale['603'] = "readmetent";
$locale['604'] = "Motiu:";
// Deactivation System
$locale['610'] = "Hi ha <b>%d usuaris </b> que no han iniciat sessi� durant <b>%d dies </b> i han estat marcats com inactius. Si es desactiven, disposaran de <b>%d dies </b> abans que siguin %s.";
$locale['611'] = "Tingues en compte que alguns usuaris han enviat continguts al lloc, com ara missatges del f�rum, comentaris, fotos, etc., I aquests seran eliminats quan els usuaris desactivats siguin esborrats.";
$locale['612'] = "usuari";
$locale['613'] = "usuaris";
$locale['614'] = "Desactivar";
$locale['615'] = "esborrat permanentment";
$locale['616'] = "anonimitzar";
$locale['617'] = "<b>Av�s:</b>";
$locale['618'] = "�s molt recomanable canviar l'acci� de desactivaci� per la de anonimitzaci� per evitar l'esborrat i la p�rdua de dades.";
$locale['619'] = "Pots fer-ho aqu�.";
$locale['620'] = "anonimitzar";
$locale['621'] = "Desactivaci� autom�tica dels usuaris inactius.";
?>
