<?php

namespace HotelManager\Models;

use HotelManager\Managers\GlobalManager;

/** Class Posts **/
class Model
{

    protected $manager;

    public function __construct()
    {
        $this->manager = new GlobalManager();
    }


}