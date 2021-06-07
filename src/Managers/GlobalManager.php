<?php

namespace HotelManager\Managers;

/** Class UserManager **/
class GlobalManager
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @param array $id
     * @param string $contionCol
     * @param string $className
     * @param string $table
     * @return array
     */
    // trouver un élément par son if
    public function findById(array $id, string $conditionCol, string $className, string $table)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM $table WHERE $conditionCol");
        $stmt->execute($id);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $className);
        return $stmt->fetchAll();
    }

    /**
     * @param string $table
     * @param string $className
     * @return array
    */

    public function getAll(string $table, string $className)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM $table");
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS,$className);
        return $stmt->fetchAll();
    }
    
    /**
     * @param string $table
     * @param array $col
     * @param array $element
     * @return int
    */

    public function store(string $table, array $col, array $element) {

        $elementTab = [];

        for ($i=0; $i < count($col); $i++) { 
            array_push($elementTab,'?');
        }

        $col = implode(",",$col);
        $toBind = implode(",",$elementTab);

        $stmt = $this->bdd->prepare("INSERT INTO $table($col) VALUES ($toBind)");
        $stmt->execute($element);

        return $this->bdd->lastInsertId();

    }

    /**
     * @param string $table
     * @param string $col
     * @param array $element
     */

    public function delete(string $table, string $col, array $element){
        $stmt = $this->bdd->prepare("DELETE FROM $table WHERE $col");
        $stmt->execute($element);
        return true;
    }

    public function edit(){
        // pas le temp
    }

}

