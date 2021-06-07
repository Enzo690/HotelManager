<?php


namespace HotelManager\Models;


class Boisson extends Model
{

    private $id_boisson;
    private $name;
    private $description;
    private $image;
    private $prix_un;

    /**
     * @return mixed
     */
    public function getIdBoisson()
    {
        return $this->id_boisson;
    }

    /**
     * @param mixed $id_boisson
     */
    public function setIdBoisson($id_boisson)
    {
        $this->id_boisson = $id_boisson;
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

}