<?php
namespace AppBundle\Entity;
/**
 * Class Formation
 * @author Nicolas Touzanne
 * @package AppBundle\Entity
 */
class Formation
{
    /* Titre de la formation
     *
     * @var string
     */
    private $title;

    /* date de debut de la formation
     *
     * @var \DateTime object.
     */
    private $dateDeb;

    /* date de fin de la formation
     *
     * @var \DateTime object.
     */
    private $dateFin;

    /* Description de la formation
     *
     * @var string
     */
    private $Description;

    /* Resultat de la formation
     *
     * @var string
     */
    private $diplomeObtenu;

    /** Getter pour $title
     *
     * @return string
     */
    public function getTitle(){
        return $this->title;
    }

    /** Setter du Titre de la formation
     * @param $titre
     * @return string
     */
    public function setTitle($titre){
        $this->title = $titre;
        return $this->title;
    }

    /** Getter pour datedeb
     * @return \dateTime object
     */
    public function getDateDeb(){
        return $this->dateDeb;
    }

    /** Setter pour dateDeb
     * @param $date
     * @return \dateTime object
     */
    public function setDateDeb($date){
        $this->dateDeb = $date;
        return $this->dateDeb;
    }

    /** Getter pour datefin
     * @return \datetime object
     */
    public function getDateFin(){
        return $this->dateFin;
    }
    /** Setteer pour date de fin de la formation
     * @param $dateF
     * @return \datetime object
     */
    public function setDateFin ($dateF){
        $this->dateFin = $dateF;
        return $this->dateFin;
    }

    /** Getter pour Description de la formation
     * @return string
     */
    public function getDescription(){
        return $this->Description;
    }

    /**Settern pour la description de la formation
     * @param $descript
     * @return string
     */
    public function setDescription($descript){
        $this->Description = $descript;
        return $this->Description;
    }

    /** Getter pour le resultat de la formation
     * @return string
     */
    public function getDiplomeObtenu(){
        return $this->diplomeObtenu;
    }

    /** Setter pour le resultat de la formation
     * @param $diplobt
     * @return string
     */
    public function setDiplomeObtenu($diplobt){
        $this->diplomeObtenu = $diplobt;
        return $this->diplomeObtenu;
    }


}