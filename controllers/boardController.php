<?php
require_once('helper.php');

$bdd = dbConnect('splists', 'root', '', 3308);
/* reponse de la bdd non traite */
$res = $bdd->query('SELECT* FROM lists');
/* j'instancie mon tableau qui contiendra la lsite */
$lists = [];
/* tant qiue j'ai des reponses qui vont dans $donnees ( variabnle temporaire de while */
while($donnnes = $res->fetch()) {

    $lists [] = $donnnes;
    
}
/* on prend chaque ligne "donnees" qu'on met dans l'array $list */
$res ->closeCursor  ();

/* cas où je reçois une variable POST de form_list.php : je créée une liste */
if(!empty($_POST['list-title']) ) {

    /*     création d'une nouvelle liste : */

    $res =$bdd ->prepare("INSERT INTO lists(title) VALUES (:title)");

    $res->execute([
        "title" => $_POST['list-title']
    ]);

Header('Location: /splists/view/board.php?List=' . $bdd->lastInsertId());
}

/* lecture d'une liste */

function getList($idList) {

    $bdd = dbConnect('splists', 'root', '', 3308);

    $request = 'select *
    FROM lists 
    WHERE id =' . $idList;

    $response = $bdd->query($request);

// en dessous : nom corrigé
    $liste = $response->fetch();

    return $liste;
}

function getTasks($idList) {

    $bdd = dbConnect('splists', 'root', '', 3308);

    $request = 'select *
    FROM tasks 
    WHERE id =' . $idList;

    $response = $bdd->query($request);

    $tasks = [];

    while($donnees = $response->fetch()) {

        $tasks[] = $donnees;
    }

    return $tasks;

}