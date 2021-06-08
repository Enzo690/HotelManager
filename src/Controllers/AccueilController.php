<?php


namespace HotelManager\Controllers;

use HotelManager\Managers\GlobalManager;
use HotelManager\Validator;

/** Class UserController **/
class AccueilController extends BaseController
{

    public function index()
    {

        require VIEWS . '/index.php';
    }

}
