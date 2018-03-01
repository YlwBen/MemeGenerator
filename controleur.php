<?php
    include('login.php');

    function mySqli(){
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=BddMemeGenerator;charset=utf8', getUser(), getMdp());
            return $bdd;
        }
        catch(Exception $e){

            die('Erreur : '.$e->getMessage());
        }

        die('Erreur : '.$e->getMessage());
    }

    function generator($bdd){
        try {
			$reponse = $bdd->prepare(" SELECT * FROM Meme ");
			$reponse->execute();
			$reponse->fetch();
			return $reponse;
		}catch (Exception $e) {
    		die("Oh noes! There's an error in the query!");
		}
    }

    function enregistrerMeme($bdd, $url, $img){
		$req = $bdd->prepare('INSERT INTO Meme (url, image) VALUES(?,?)');
		$req->execute(array($url, $img));
	}




?>
