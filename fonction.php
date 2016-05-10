<?php

//log IP
function logIP() {
    //on declare une variable pour le chemin
    $sDir = 'log/';
    $sdateLog = date("Y-m-d") . '.log';
    $sline = date('Y-m-d H:i:s') . '#' . $_SERVER['REMOTE_ADDR'] . "\n";

    if (!file_exists($sDir)) {
        mkdir($sDir);
    };
    if (!is_dir($sDir)) {
        mkdir($sDir);
    };

    $h = file_put_contents($sDir . $sdateLog, $sline, FILE_APPEND);
}

;

//seconde solution
//$oH=fopen($sDir.$sdateLog,'a+');
//fwrite($oH,$sline);
//fclose($oH);

function connectDB() {

    $oOption = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"');
    $oPDO = new PDO('mysql:host=localhost;dbname=leboncoin;charset=UTF8', 'root', 'root', $oOption);
    $oPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    return $oPDO;
    /*
      $handle = mysql_connect('localhost', 'root', 'root');
      mysql_select_db('leboncoin');

      mysql_set_charset('UTF-8');
      mysql_query('SET NAMES "UTF8"');
     */

    function closeDB() {
        // Nothing to do with PDO
    }

}
