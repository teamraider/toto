<?php

//on remplace par la class Annonce
//Annonce 1
/* $annonce1 = new Annonce();
  //$annonce1->setiID(1);
  $annonce1->setsTitle('Bateau 540m');
  $annonce1->setiPrice(20);
  $annonce1->setsImage('images/annonce1.png');
  $annonce1->setsDescription('mon annonce est la meilleure de toute les annonnces.mon annonce est la meilleure de toute les annonnces.mon annonce est la meilleure de toute les annonnces.mon annonce est la meilleure de toute les annonnces.mon annonce est la meilleure de toute les annonnces.mon annonce est la meilleure de toute les annonnces');
  $annonce1->setoDate('12/12/15');

  //annonce 2
  $annonce2 = new Annonce();
  //$annonce2->setiID(2);
  $annonce2->setsTitle('velo electrique');
  $annonce2->setiPrice(120);
  $annonce2->setsImage('images/annonce2.png');
  $annonce2->setsDescription('Soyez ecolo');
  $annonce2->setoDate('01/01/16');

  //annonce 3
  $annonce3 = new Annonce();
  //$annonce3->setiID(3);
  $annonce3->setsTitle('portail solaire');
  $annonce3->setiPrice(1200);
  $annonce3->setsImage('images/annonce3.png');
  $annonce3->setsDescription('Somfy ref9999');
  $annonce3->setoDate('01/02/16');

  // Avec une base sql modifier le load
  //$dataAnnonces = array();
  //$dataAnnonces = Annonce::load(); */
//Permet de séparer la structure du stockage
//retourne les annonces
$dataAnnonces = $oAnManager->getList($oPDO);



//$dataAnnonces[]=$annonce1;
//$dataAnnonces[]=$annonce2;
//$dataAnnonces[]=$annonce3;
//Serialiser les annonces
//var_dump(serialize($annonce1));
//pour la premiere fois
//file_put_contents('annonce001.txt', serialize($annonce1), FILE_APPEND);
//file_put_contents('annonce002.txt', serialize($annonce2), FILE_APPEND);
//file_put_contents('annonce003.txt', serialize($annonce3), FILE_APPEND );
//verifier le repertoire data et désérialiser.
//on récupère notre objet annonce.

/* $tab=glob("data/annonce*");
  //print_r($tab);
  foreach ($tab as $file) {
  $dataAnnonces[]=unserialize(file_get_contents($file));
  //print_r($tab);
  }
 */


/*
  //mes annonces aside
  $dataAside = array();
  $dataAside[] = $annonce1;
  $dataAside[] = array(
  'titre' => 'Citroen',
  'prix' => '1200',
  'photo' => 'images/annoncep2.png',
  'detail' => '',
  );
  $dataAside[] = array(
  'titre' => 'Honda',
  'prix' => '900',
  'photo' => 'images/annoncep3.png',
  'detail' => '',
  );

 */
