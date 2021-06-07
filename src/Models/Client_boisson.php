<?php


namespace HotelManager\Models;


class Client_boisson extends Model
{

    private $id_client;
    private $id_boisson;
    private $id_bar;
    private $id_com;
    private $quantite;
    private $date;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }

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
    public function getIdCom()
    {
        return $this->id_com;
    }

    /**
     * @param mixed $id_com
     */
    public function setIdCom($id_com)
    {
        $this->id_com = $id_com;
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

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}