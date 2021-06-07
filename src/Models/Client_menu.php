<?php


namespace HotelManager\Models;


class Client_menu extends Model
{

    private $id_client;
    private $id_menu;
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