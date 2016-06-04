<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RestController extends Controller
{
    
    /**
     ************************************** FONCTIONS SELECT
    **/
    
    /**
     * Fonction qui va permettre d'aller récupérer les donnés souhaités depuis la base
     * @Route("/GET")
     * @return JSonResponse
     */
     public function SELECTQuery() 
    {
        $conn = $this->get('database_connection');
        $users = $conn->fetchAll('SELECT * FROM `Table`');
        return new JsonResponse($users);
    }
    
    /**
     FIN FONCTION SELECT ************************************** 
    **/ 
    
    /**
     ************************************** FONCTIONS INSERT INTO
    **/
    
    
    
    /**
      FIN FONCTION INSERT INTO **************************************
    **/
     
    /**
     ************************************** FONCTIONS DELETE
    **/
    
     /**
     * Fonction qui permet de supprimer des valeurs sur la table
     * @Route("/DELETE/{id}")
     * @return JSonResponse
     */
     public function DELETEQuery($id) 
    {
        $conn = $this->get('database_connection');
        $res = $conn->exec("DELETE FROM `Table` WHERE id = ".$id);       
        return new Response($res);
    }
    
    /**
      FIN FONCTION DELETE **************************************
    **/
    
    /**
     ************************************** FONCTIONS UPDATE
    **/
    
    /**
     * Fonction qui permet de mettre à jour des valeurs sur la table
     * @Route("/UPDATE/{id}/{login}/{pwd}")
     * @return JSonResponse
     */
     public function UPDATEQuery($id, $login, $pwd) 
    {
        $conn = $this->get('database_connection');
        $res = $conn->exec("UPDATE `Table` SET login = '".$login."', pwd = '".$pwd."' WHERE id = ".$id);
        return new Response($res);
    }
    
    /**
      FIN FONCTION UPDATE **************************************
    **/
      
    /**
     ************************************** FONCTIONS TEST
    **/
    
     /**
     * Fonction qui permet de tester la connection à la base de donnée
     * @Route("/DatabaseConnectTest")
     * @return JSonResponse
     **/
     public function DatabaseConnectTest() 
    {
        $conn = $this->get('database_connection');
        $users = $conn->fetchAll('SELECT * FROM `Table`');
        return new JsonResponse($users);
    }
    
    /**
      FIN FONCTION TEST **************************************
    **/
}