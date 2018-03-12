<?php
namespace AppBundle\Entity;
/**
 * Class ExpPro
 * @author Nicolas Touzanne
 * @package AppBundle\Entity
 */
class ExpPro
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var \datetime object
     */
    private $dateDeb;
    /**
     * @var \datetime object
     */
    private $dateFin;
    /**
     * @var string
     */
    private $mission;

    /**Getter pour le titre de l'experience professionnel
     * @return string
     */
    public function getTitle(){
        return $this->title;
    }

    /** Setter pour le titre de l'expereience pro
     * @param $titre
     * @return string
     */
    public function setTitle($titre){
        $this->title = $titre;
        return $this->title;
    }

    /** Getter pour la date de debut d'expe pro
     * @return \datetime
     */
    public function getDateDeb(){
        return $this->dateDeb;
    }

    /** Setter pour la date de debut d'expe pro
     * @param $date
     * @return \datetime
     */
    public function setDateDeb($date){
        $this->dateDeb = $date;
        return $this->dateDeb;
    }

    /** Getter pour la date de debut de fin d'expe pro
     * @return \datetime
     */
    public function getDateFin(){
        return $this->dateFin;
    }

    /** Setter pour la date de fin d'expe pro
     * @param $dateF
     * @return \datetime
     */
    public function setDateFin ($dateF){
        $this->dateFin = $dateF;
        return $this->dateFin;
    }

    /** Getter pour la mission de l'expe pro
     * @return string
     */
    public function getMission(){
        return $this->mission;
    }

    /** Setter pour la mission de l'expe pro
     * @param $mission
     * @return string
     */
    public function setMission($mission){
        $this->mission = $mission;
        return $this->mission;
    }

}