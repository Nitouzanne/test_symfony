<?php
namespace AppBundle\Entity;

class ExpPro
{
    private $title;
    private $dateDeb;
    private $dateFin;
    private $mission;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($titre){
        $this->title = $titre;
        return $this->title;
    }

    public function getDateDeb(){
        return $this->dateDeb;
    }
    public function setDateDeb($date){
        $this->dateDeb = $date;
        return $this->dateDeb;
    }

    public function getDateFin(){
        return $this->dateFin;
    }
    public function setDateFin ($dateF){
        $this->dateFin = $dateF;
        return $this->dateFin;
    }

    public function getMission(){
        return $this->mission;
    }
    public function setMission($mission){
        $this->mission = $mission;
        return $this->mission;
    }

}