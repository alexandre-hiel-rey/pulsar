<?php

define('REALPATH', __DIR__);
define('ROOTFOLDER', '/pulsar');
//echo __DIR__;
//echo '<br>';
//echo __FILE__;

/*
 * ======================================================
 * ================ Paramètres de base ==================
 * ======================================================
 */

$env = 'dev'; // 'prod' si un serveur distant

if ($env === 'prod') {

    define('DOMAIN', ROOTFOLDER);

} elseif ($env === 'dev') {

    define('DOMAIN', 'http://localhost' . ROOTFOLDER);

}
/*
 * ======================================================
 * ================== Rendu des vues ====================
 * ======================================================
 */

require (REALPATH . '/includes/function.php');

navigation();









//echo REALPATH;    Erreur car afficher un array en string est impossible
//$dir = scandir(REALPATH);

//echo '<pre>';    inutile avec wamp, permet l'empilement des éléments de l'array
  //var_dump($dir);
  //echo '</pre>';   inutile avec wamp, permet l'empilement des éléments de l'array
  ?>
