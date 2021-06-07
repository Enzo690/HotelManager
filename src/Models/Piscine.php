<?php


namespace HotelManager\Models;


class Piscine extends Model
{

    private $id_piscine;
    private $name;
    private $description;
    private $image;
    private $ouverture;
    private $fermeture;
    private $nettoyage;

    /**
     * @return mixed
     */
    public function getIdPiscine()
    {
        return $this->id_piscine;
    }

    /**
     * @param mixed $id_piscine
     */
    public function setIdPiscine($id_piscine)
    {
        $this->id_piscine = $id_piscine;
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
    public function getOuverture()
    {
        return $this->ouverture;
    }

    /**
     * @param mixed $ouverture
     */
    public function setOuverture($ouverture)
    {
        $this->ouverture = $ouverture;
    }

    /**
     * @return mixed
     */
    public function getFermeture()
    {
        return $this->fermeture;
    }

    /**
     * @param mixed $fermeture
     */
    public function setFermeture($fermeture)
    {
        $this->fermeture = $fermeture;
    }

    /**
     * @return mixed
     */
    public function getNettoyage()
    {
        return $this->nettoyage;
    }

    /**
     * @param mixed $nettoyage
     */
    public function setNettoyage($nettoyage)
    {
        $this->nettoyage = $nettoyage;
    }

}