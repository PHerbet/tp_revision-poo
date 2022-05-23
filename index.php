<?php
/*---------------------------------------------
                INCLUDE
--------------------------------------------*/
include './utils/connect_bdd.php';
include './model/model_article.php';
include './view/view_show_all_articles.php';

//instancier un nouvel objet
$article = new Article(null, null);
$obj = $article->show_all_article($bdd);

foreach($obj as $data){
    echo "On a $data->nom_art, est c'est un(e) $data->content_art ";
}
?>
