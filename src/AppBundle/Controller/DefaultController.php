<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Formation;
use AppBundle\Entity\ExpPro;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function baseAction(Request $request)
    {
        $date = new \DateTime('now') ;
        // replace this example code with whatever you need
        return $this->render('default\index.html.twig',[
            'createDate' => $date,

        ]);
    }
    /**
     * @Route("/mon-parcours",name="mppage")
     */
    public function mpAction()
    {
        $birthOf = new \DateTime("05/10/1988");
        $permis =true;

        $adrec = new Formation();
        $adrec->setTitle("Titre Professionel Niveau III -Développeur Logiciel spécialisé Web");
        $adrec->setDateDeb(new \DateTime("09/25/2017"));
        $adrec->setDateFin(new \DateTime("07/10/2018"));
        $adrec->setDescription("apprentissage des langages: HTML/CSS, C, JAVA,PHP/symfony, JAVASCRIPT ");
        $adrec->setDiplomeObtenu("Diplome En cours");

        $psycho = new Formation();
        $psycho->setTitle("Maitrise en Psychologie");
        $psycho->setDateDeb(new \DateTime("09/19/2008"));
        $psycho->setDateFin(new \DateTime("07/10/2012"));
        $psycho->setDescription("spécialite psychologie sociale et du travail");
        $psycho->setDiplomeObtenu("Diplome Obtenu");

        $iut = new Formation();
        $iut->setTitle("1ere année d'iut Réseaux et Télécommunications");
        $iut->setDateDeb(new \DateTime("09/03/2007"));
        $iut->setDateFin(new \DateTime("06/30/2008"));
        $iut->setDescription("Informatique : apprentissage de langages du C , bash et base de donénes ET Electronique et Traitement des signaux");
        $iut->setDiplomeObtenu("Année Complétée");

        $bac = new Formation();
        $bac->setTitle("BAC S option Sciences de l'ingenieur");
        $bac->setDateDeb(new \DateTime("09/06/2006"));
        $bac->setDateFin(new \DateTime("07/03/2007"));
        $bac->setDescription("");
        $bac->setDiplomeObtenu("Diplome Obtenu");

        $leclerc = new ExpPro();
        $leclerc->setTitle("Vendeur au Rayon Multimédia");
        $leclerc->setDateDeb(new \DateTime("03/29/2016"));
        $leclerc->setDateFin(new \DateTime("06/10/2017"));
        $leclerc->setMission("");

        $vc = new ExpPro();
        $vc->setTitle("Co-Gérant de L'entreprise Votre Concierge 63");
        $vc->setDateDeb(new \DateTime("11/14/2014"));
        $vc->setDateFin(new \DateTime("07/30/2017"));
        $vc->setMission("");

        $donjon = new ExpPro();
        $donjon->setTitle("Vendeur(charcuterie) au Donjon du GAEC");
        $donjon->setDateDeb(new \DateTime("07/03/2014"));
        $donjon->setDateFin(new \DateTime("10/21/2013"));
        $donjon->setMission("");


        return $this->render('default\mp.html.twig',[
            'birth' => $birthOf,
            'Permis' => $permis,
            'Formation1' => [$adrec,$psycho,$iut,$bac],
            'ExpePro' => [$leclerc,$vc,$donjon]

        ]);


    }
}

