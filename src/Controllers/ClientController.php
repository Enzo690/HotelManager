<?php


namespace HotelManager\Controllers;

use HotelManager\Managers\GlobalManager;
use HotelManager\Validator;

/** Class UserController **/
class ClientController extends BaseController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new GlobalManager();
        $this->validator = new Validator();
    }

    public function index()
    {
        $clients = $this->manager->getAll('client', 'HotelManager\Models\Client');
        require VIEWS . '/client.php';
    }

        public function all(){
            header('Content-Type: application/json');
            $clients = $this->manager->getAll('client', 'HotelManager\Models\Client');
            $tab = [];
            foreach ($clients as $key => $client){
                $tab[$key]['id'] = $client->getIdClient();
                $tab[$key]['nom'] = $client->getNom();
                $tab[$key]['prenom'] = $client->getPrenom();
                $tab[$key]['email'] = $client->getEmail();
            }
            echo json_encode($tab);
     }

    // page supression
    public function supp()
    {
        require VIEWS . '/supp.php';
    }

    // page modif
    public function modif()
    {

        require VIEWS . '/modif.php';
    }

    // page insertion POST
    public function store()
    {
        /*
        $this->validator->validate([
            "nom" => ["required"],
            "prenom" => ["required"],
            "email" => ["required"]
        ]);*/
        $_SESSION['old'] = $_POST;

        $data = json_decode($_POST);

        $this->manager->store('client',
            ['id_client', 'nom', 'prenom', 'email'],
            [uniqid(), $data['nom'], $data['prenom'], $data['email']]);
/*
        if (!$this->validator->errors()) {
            header("Location: /erreurBG");
        }*/
    }

    // Delete
    public function delete()
    {
        header("Location: /supp");
    }

    // update
    public function update()
    {

    }


}
