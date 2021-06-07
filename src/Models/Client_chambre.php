<?php


namespace HotelManager\Models;


class Client_chambre extends Model
{

    private $id_client;
    private $id_chambre;
    private $date_d;
    private $date_f;
    private $num_reservation;
    private $status;

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
    public function getDateD()
    {
        return $this->date_d;
    }

    /**
     * @param mixed $date_d
     */
    public function setDateD($date_d)
    {
        $this->date_d = $date_d;
    }

    /**
     * @return mixed
     */
    public function getDateF()
    {
        return $this->date_f;
    }

    /**
     * @param mixed $date_f
     */
    public function setDateF($date_f)
    {
        $this->date_f = $date_f;
    }

    /**
     * @return mixed
     */
    public function getNumReservation()
    {
        return $this->num_reservation;
    }

    /**
     * @param mixed $num_reservation
     */
    public function setNumReservation($num_reservation)
    {
        $this->num_reservation = $num_reservation;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}