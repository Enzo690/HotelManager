<?php


namespace HotelManager\Controllers;

use HotelManager\Managers\GlobalManager;
use HotelManager\Validator;

/** Class UserController **/
class ClientController extends BaseController
{

    public function index()
    {
        $clients = $this->manager->getAll('client', 'HotelManager\Models\Client');
        require VIEWS . '/client.php';
    }

        public function all(){
            header('Content-Type: application/json');
            $clients = $this->manager->getAll('client', 'HotelManager\Models\Client');
            $tab = [];
            $tab["status"] = "success";
            foreach ($clients as $key => $client){
                $tab["data"][$key]['id'] = $client->getIdClient();
                $tab["data"][$key]['nom'] = $client->getNom();
                $tab["data"][$key]['prenom'] = $client->getPrenom();
                $tab["data"][$key]['email'] = $client->getEmail();
            }
            $json = json_encode($tab);
            echo $json;
            return $json;
     }

    // page insertion POST
    public function store()
    {
        header('Content-Type: application/json');
        $tab = [];

        $this->validator->validate([
            "nom" => ["required","min:2"],
            "prenom" => ["required","min:2"],
            "email" => ["email"]
        ]);
        $_SESSION['old'] = $_POST;

        $check = $this->manager->findById([$_POST['email']], 'email = ?', 'Client', 'client');
        if ($check && strlen($_POST['email']) > 0){
            $tab["status"] = "error";
            $tab["error"] = "Cette personne existe déja" ;
            echo json_encode($tab);
            exit;
        }

        if (!$this->validator->errors()){
            $tab["status"] = "success";
            $this->manager->store('client',
                ['id_client', 'nom', 'prenom', 'email'],
                [uniqid(), $_POST['nom'], $_POST['prenom'], $_POST['email']]
            );
            echo json_encode($tab);
        }else{
            $tab["status"] = "error";
            $tab["error"] = $this->validator->errors()[0];
            echo json_encode($tab);
        }
    }

    // Delete
    public function delete()
    {

    }

    // update
    public function update()
    {

    }


}
