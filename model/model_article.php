<?php
    class Article
    {
        /*---------------------------------------------
                        ATTRIBUTS
        ---------------------------------------------*/
        public $id_art;
        public $nom_art;
        public $content_art;
        /*---------------------------------------------
                        CONSTRUCTOR
        ---------------------------------------------*/
        public function __construct($nom_art, $content_art)
        {
            $this->nom_art = $nom_art;
            $this->content_art = $content_art;
        }
        /*---------------------------------------------
                    GETTER AND SETTER
        ---------------------------------------------*/
        public function get_id_art(): int
        {
            return $this->id_art;
        }
        public function get_nom_art(): string
        {
            return $this->nom_art;
        }
        public function get_content_art(): string
        {
            return $this->content_art;
        }
        public function set_id_art($id_art): void
        {
            $this->id_art = $id_art;
        }
        public function set_nom_art($nom_art): void
        {
            $this->nom_art = $nom_art;
        }
        public function set_content_art($content_art): void
        {
            $this->content_art = $content_art;
        }
        /*---------------------------------------------
                        METHODS
        ---------------------------------------------*/
         //Method pour voir les articles
        public function show_all_article($bdd)
        {
            try
            {//SQL request
                $req = $bdd->prepare('SELECT * FROM article');
                $req -> execute();
                $data = $req -> fetchAll(PDO::FETCH_OBJ);
                return $data;
                    }//Sors les exception
                    catch(Exception $e)
                    {
                        die('Erreur : '.$e->getMessage());
                    }
                }
    }
?>