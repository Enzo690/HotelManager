<?php


namespace HotelManager\Models;


class Bar extends Model
{

    private $id_bar;
    private $name;

    /**
     * @return mixed
     */
    public function getIdBar()
    {
        return $this->id_bar;
    }

    /**
     * @param mixed $id_bar
     */
    public function setIdBar($id_bar)
    {
        $this->id_bar = $id_bar;
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