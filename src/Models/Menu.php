<?php


namespace HotelManager\Models;


class Menu extends Model
{

    private $id_menu;
    private $name;
    private $description;
    private $image;
    private $prix_un;
    private $id_restaurent;

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->id_menu;
    }

    /**
     * @param mixed $id_menu
     */
    public function setIdMenu($id_menu)
    {
        $this->id_menu = $id_menu;
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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPrixUn()
    {
        return $this->prix_un;
    }

    /**
     * @param mixed $prix_un
     */
    public function setPrixUn($prix_un)
    {
        $this->prix_un = $prix_un;
    }

    /**
     * @return mixed
     */
    public function getIdRestaurent()
    {
        return $this->id_restaurent;
    }

    /**
     * @param mixed $id_restaurent
     */
    public function setIdRestaurent($id_restaurent)
    {
        $this->id_restaurent = $id_restaurent;
    }

}