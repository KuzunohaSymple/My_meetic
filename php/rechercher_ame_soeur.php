<?php

require "connexion.php";

class rechercher
{
    private $genre;
    private $age;
    private $localisation;

    public function __construct($genre, $age, $localisation)
    {
        $this->genre = strip_tags($genre);
        $this->age = strip_tags($age);
        $this->localisation = strip_tags($localisation);
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getLocalisation()
    {
        return $this->localisation;
    }

    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    }

    public function search()
    {
        $sql = ('SELECT * FROM membre WHERE 1');
        if ($this->genre != "tous") {
            $sql .= ' AND sexe=:genre';
        }
        if ($this->age != "tous") {
            $sql .= ' AND YEAR(CURDATE())-YEAR(date_naissance)';
            if ($this->age == "1") {
                $sql .= ' between 18 and 25';
            }
            if ($this->age == "2") {
                $sql .= ' between 25 and 35';
            }
            if ($this->age == "3") {
                $sql .= ' between 35 and 45';
            }
            if ($this->age == "4") {
                $sql .= ' between 45 and 200';
            }
        }
        if ($this->localisation != null) {
            $sql.= ' AND ville=:ville';
        }
        $query = $GLOBALS['bdd']->prepare($sql);
        if ($this->genre != "tous") {
            $query->bindParam(":genre", $this->genre, PDO::PARAM_STR);
        }
        if ($this->localisation != null) {
            $query->bindParam(":ville", $this->localisation, PDO::PARAM_STR);
        }
        $query->execute();
        $recup = $query->fetchAll();
        $query->closeCursor();
        return $recup;
    }
}