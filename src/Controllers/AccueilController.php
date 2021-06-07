<?php


namespace HotelManager\Controllers;

use HotelManager\Managers\GlobalManager;
use HotelManager\Validator;

/** Class UserController **/
class AccueilController extends BaseController
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

        require VIEWS . '/index.php';
    }

}
