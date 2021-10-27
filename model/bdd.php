<?php

function dbConnect()  // Connexion à la base de données
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getbdd()
{

    $db = dbConnect();
    $sqlQuery = 'SELECT *  FROM information_pc';
    $req = $db->prepare($sqlQuery);
    $req->execute();
    
    return $req;

    //     $req = $db->query('SELECT *  FROM information_pc');
    //     return $req;
}

// function getPost($postId)
// {
//     $db = dbConnect();

//     $req = $db->prepare('SELECT * FROM information_pc');
//     $req->execute(array($postId));
//     $post = $req->fetch();

//     return $post;
// }

// function getComments($postId)
// {
//     $db = dbConnect();
//     $comments = $db->prepare('SELECT * FROM information_pc');
//     $comments->execute(array($postId));

//     return $comments;
// }
