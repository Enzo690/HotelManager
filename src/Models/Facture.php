<?php


namespace HotelManager\Models;


class Facture extends Model
{

    private $id_facture;
    private $id_client;
    private $num_reference;
    private $date;
    private $total_ttc;

    /**
     * @return mixed
     */
    public function getIdFacture()
    {
        return $this->id_facture;
    }

    /**
     * @param mixed $id_facture
     */
    public function setIdFacture($id_facture)
    {
        $this->id_facture = $id_facture;
    }

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
    public function getNumReference()
    {
        return $this->num_reference;
    }

    /**
     * @param mixed $num_reference
     */
    public function setNumReference($num_reference)
    {
        $this->num_reference = $num_reference;
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

    /**
     * @return mixed
     */
    public function getTotalTtc()
    {
        return $this->total_ttc;
    }

    /**
     * @param mixed $total_ttc
     */
    public function setTotalTtc($total_ttc)
    {
        $this->total_ttc = $total_ttc;
    }


}