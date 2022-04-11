<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions PhP relatives au tableau</title>
</head>
<body>
    

    <?php

    /*
    
    $nombre = 0;
    $fois= 1;
    while($nombre < 10 && $fois++){
        echo' répétition de Bonjour! '.$fois .'<br/>';
        $nombre++;
    }
    */
    $voitures= array(
        "Citroens" =>"DS4",
        "Renault" => "Megane",
        "Toyota" =>"Land Cruisser",
        "Tesla" =>"454", 
        "Tesla1" =>454 
    );

    if(array_key_exists("Tesla",$voitures)){
        echo"la clé existe <br/>";
    }else{
        echo"la clé n'existe pas";
    }

    echo'<br/>';

    echo array_search("454", $voitures, true);



    echo'<pre>';
    print_r(array_keys($voitures, 454, true));
    echo'</pre>';

    echo'<br/>';

    $jeux = array(
        "football" => "Bengy",
        "voyage" => "Brazil",
        "musique" => "salssa"
    );
    echo"<pre>";
    print_r(array_values($jeux));
    echo"</pre>";


    $prenom =array("Benjamin", "Maud", "Samuel");

    if(in_array("Emilienne", $prenom)){
        echo"Prénom dans le tableau <br/>";
    
    }else{
        echo "Prénom à ajouter dans le tableau <br/>";
    }

    // fonction qui retourne le nombre des element dans un tableau
    $sport = array("football", "basketball","tennis");
    echo count($sport);

    echo'<br/>';

    //fonction qui renvoi le nombre des element compter dans un tableau
    $compter= array("B","television","ordinateur","ecouteur","B","television");
    print_r(array_count_values($compter));

    echo'<br/>';

    //
    $compare = array(
        "a"=>"bleu",
        "b"=>"vert",
        "c"=>"jaune"
    );
  
    $comparant = array(
        "a"=>"bleu",
       
        "c"=>"jaune"
    );

    print_r(array_diff_assoc($compare, $comparant));
   
    echo'<br/>';

    $forme = array_fill(0, 4, "rouge");
    print_r($forme);

    echo'<br/>';

    //
    $key = array("a","b","c","d");
    $full = array_fill_keys($key, "green");

    print_r($full);

    echo'<br/>';

    //
    $color =array("blue","green","pink");
    array_push($color, "red","yelloh");
    print_r($color);

    echo'<br/>';

    // 
    array_pop($color);
    print_r($color);

    echo'<br/>';

    // ajouter les element dans le tableau
    array_unshift($color, "gris","violet");
    print_r($color);

    echo'<br/>';

    echo array_shift($color);
    print_r($color);

    echo'<br/>';

    $couleur =array("blue", "vert");

    //
    array_unshift($couleur, "jaune","violet");
    print_r($couleur);

    echo array_shift($couleur);
    print_r($couleur);

    echo'<br/>';
    //
    $color = array(
        "a"=> "blue",
        "b"=> "vert",
        "c"=> "rouge",
        "d"=> "gris",
        "e"=> "jaune",
        
    );

    $color1 = array(
        "a"=> "rouge",
        "b"=> "gris",   
    );

    print_r(array_splice($color, 1));
    print_r($color1);

    echo'<br/>';
    //  combiné les tableaux

    $fit = array("a","b");
    $fit1 = array("c","s");
    $fit2 = array_merge($fit, $fit1);

    print_r($fit2);

    echo'<br/>';

    $fit3=array_combine($fit, $fit1);
    print_r($fit3);

    // supprimer le doublants
    $noms= array("Paul", "Jean","Bijoux", "Paul");
    print_r(array_unique($noms));

    echo'<br/>';

    // ordonnés les valeurs du tableau
    $prenoms =array("Paul", "Chris", "Arnaud");
    sort($prenoms);
    rsort($prenoms);
    print_r($prenoms);

    echo'<br/>';

    //ordre croissant selon les keys
    $age =array("Ben" => 26, "Serge" => 35, "Arnaud" => 40);
    ksort($age);
    print_r($age);

    echo'<br/>';
    //ordre decroissant selon les keys
    krsort($age);
    print_r($age);
    
    echo'<br/>';
    //ordre croissant selon les valeurs
    asort($age);
    print_r($age);
    
    echo'<br/>';
    //ordre decroissant selon les valeurs
    arsort($age);
    print_r($age);
    

    echo'<br/>';


    ?>
</body>
</html>