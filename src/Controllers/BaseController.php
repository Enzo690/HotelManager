<?php
namespace HotelManager\Controllers;
use Helper;
use HotelManager\Managers\GlobalManager;
use HotelManager\Validator;

class BaseController  {
    use Helper;
    protected $manager;
    protected $validator;

    public function __construct()
    {
        $this->manager = new GlobalManager();
        $this->validator = new Validator();
    }

}