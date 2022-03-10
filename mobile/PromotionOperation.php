<?php
class PromotionOperation
{
    //Database connection link
    private $con;

    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect.php';

        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();

        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }

    /*
    * The create operation
    * When this method is called a new record is created in the database
    */
    function create( $Type, $title, $description , $scoreMin){


        $stmt = $this->con->prepare("INSERT INTO promotion (type, description , scoreMin, title) VALUES (? , ? ,? ,?)");
        $stmt->bind_param("sssi", $Type, $title, $description , $scoreMin);

        if($stmt->execute())
            return true;
        return false;
    }




    /*
    * The read operation
    * When this method is called it is returning all the existing record of the database
    */
    function getAll(){
        $stmt = $this->con->prepare("SELECT * FROM promotion");
        $stmt->execute();
        $stmt->bind_result($id ,$type, $title, $description , $scoreMin , $title);

        $users = array();

        while($stmt->fetch()){
            $user  = array();
            $user['id'] = $id;
            $user['type'] = $type;
            $user['title'] = $title;
            $user['description'] = $description;
            $user['scoreMin'] = $scoreMin;
            $user['title'] = $title;


            array_push($users, $user);
        }

        return $users;
    }

    /*
    * The update operation
    * When this method is called the record with the given id is updated with the new given values
    */
    /*
    function update( $id , $boutique, $reference, $libelle , $description , $prix , $taille , $couleur , $texture , $poids ,$date_creation ,$quantite ,$path){


        $stmt = $this->con->prepare("UPDATE produit SET boutique = ? , reference = ?, libelle  = ?, description = ? , prix  = ? , taille  = ?, couleur  = ?, texture = ? , poids = ?  , date_creation = ?  , quantite = ?   , path = ? WHERE id = ?");
        $stmt->bind_param("isssisssisisi",  $boutique, $reference, $libelle , $description , $prix , $taille , $couleur , $texture , $poids ,$date_creation ,$quantite ,$path , $id );

        if($stmt->execute())
            return true;
        return false;
    }*/


    /*
    * The delete operation
    * When this method is called record is deleted for the given id
    */
    /*
    function delete($id){
        $stmt = $this->con->prepare("DELETE from produit where id = ? ");
        $stmt->bind_param("i", $id);
        if($stmt->execute())
            return true;

        return false;
    }


    function getEntityById ( $id ){

        $stmt = $this->con->prepare(" SELECT * FROM produit where id = ?  ");
        $stmt->bind_param("i",  $id  );
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    */
}
