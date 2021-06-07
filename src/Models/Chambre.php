<?php


namespace HotelManager\Models;


class Chambre extends Model
{

    private $id_chambre;
    private $name;
    private $description;
    private $image;
    private $option_chambre;
    private $prix;
    private $occupe;
    private $categorie;

    /**
     * @return mixed
     */
    public function getIdChambre()
    {
        return $this->id_chambre;
    }

    /**
     * @param mixed $id_chambre
     */
    public function setIdChambre($id_chambre)
    {
        $this->id_chambre = $id_chambre;
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
    public function getOptionChambre()
    {
        return $this->option_chambre;
    }

    /**
     * @param mixed $option_chambre
     */
    public function setOptionChambre($option_chambre)
    {
        $this->option_chambre = $option_chambre;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getOccupe()
    {
        return $this->occupe;
    }

    /**
     * @param mixed $occupe
     */
    public function setOccupe($occupe)
    {
        $this->occupe = $occupe;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

}