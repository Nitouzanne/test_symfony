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
     * @var string $title.
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
     * @var string $Description.
     */
    private $Description;

    /* Resultat de la formation
     *
     * @var string $diplomeObtenu.
     */
    private $diplomeObtenu;

    /** Getter pour $title
     *
     * @return string
     */
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