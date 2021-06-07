<?php


namespace HotelManager\Models;


class Bar_boisson extends Model
{

    private $id_boisson;
    private $id_bar;
    private $quantite;

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
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }


}