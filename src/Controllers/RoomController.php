<?php


namespace HotelManager\Controllers;

use HotelManager\Managers\GlobalManager;
use HotelManager\Validator;

/** Class UserController **/
class RoomController extends BaseController
{

    public function index()
    {

        require VIEWS . '/room.php';
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
        $this->validator->validate([
            "nom" => ["required"],

        ]);
        $_SESSION['old'] = $_POST;

        if (!$this->validator->errors()) {

            header("Location: /");
        }
    }

    // Delete Stagiaire
    public function delete()
    {
        header("Location: /supp");
    }

    // update pas fini (tristesse)
    public function update()
    {

    }


}
