<?php


namespace HotelManager\Models;


class Restaurant extends Model
{

    private $id_restaurant;
    private $name;

    /**
     * @return mixed
     */
    public function getIdRestaurant()
    {
        return $this->id_restaurant;
    }

    /**
     * @param mixed $id_restaurant
     */
    public function setIdRestaurant($id_restaurant)
    {
        $this->id_restaurant = $id_restaurant;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}