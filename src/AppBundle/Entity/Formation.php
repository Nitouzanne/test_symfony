<?php
namespace AppBundle\Entity;

class Formation
{
    private $title;
    private $dateDeb;
    private $dateFin;
    private $Description;
    private $diplomeObtenu;

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

    public function getDescription(){
        return $this->Description;
    }
    public function setDescription($descript){
        $this->Description = $descript;
        return $this->Description;
    }

    public function getDiplomeObtenu(){
        return $this->diplomeObtenu;
    }
    public function setDiplomeObtenu($diplobt){
        $this->diplomeObtenu = $diplobt;
        return $this->diplomeObtenu;
    }


}