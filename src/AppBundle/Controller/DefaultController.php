<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Formation;
use AppBundle\Entity\ExpPro;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction(Request $request)
    {
        return $this->redirectToRoute('homepage',[
        ]);
    }

    /**
     * @Route("/{_locale}", name="homepage")
     */
    public function baseAction(Request $request)
    {
        $date = new \DateTime('now') ;
        return $this->render('default\index.html.twig',[
            'createDate' => $date,

        ]);
    }
    /**
     * @Route("/{_locale}/mon-parcours",name="mppage")
     */
    public function mpAction()
    {
        $birthOf = new \DateTime("05/10/1988");
        $permis = true;

        $adrec = new Formation();
        $adrec->setTitle("forma.1.title");
        $adrec->setDateDeb(new \DateTime("09/25/2017"));
        $adrec->setDateFin(new \DateTime("07/10/2018"));
        $adrec->setDescription("forma.1.description");
        $adrec->setDiplomeObtenu("forma.1.diplomeObt");

        $psycho = new Formation();
        $psycho->setTitle("forma.2.title");
        $psycho->setDateDeb(new \DateTime("09/19/2008"));
        $psycho->setDateFin(new \DateTime("07/10/2012"));
        $psycho->setDescription("forma.2.description");
        $psycho->setDiplomeObtenu("forma.2.diplomeObt");

        $iut = new Formation();
        $iut->setTitle("forma.3.title");
        $iut->setDateDeb(new \DateTime("09/03/2007"));
        $iut->setDateFin(new \DateTime("06/30/2008"));
        $iut->setDescription("forma.3.description");
        $iut->setDiplomeObtenu("forma.3.diplomeObt");

        $bac = new Formation();
        $bac->setTitle("forma.4.title");
        $bac->setDateDeb(new \DateTime("09/06/2006"));
        $bac->setDateFin(new \DateTime("07/03/2007"));
        $bac->setDescription("forma.4.description");
        $bac->setDiplomeObtenu("forma.4.diplomeObt");

        $leclerc = new ExpPro();
        $leclerc->setTitle("expe.1.title");
        $leclerc->setDateDeb(new \DateTime("03/29/2016"));
        $leclerc->setDateFin(new \DateTime("06/10/2017"));
        $leclerc->setMission("expe.1.mission");

        $vc = new ExpPro();
        $vc->setTitle("expe.2.title");
        $vc->setDateDeb(new \DateTime("11/14/2014"));
        $vc->setDateFin(new \DateTime("07/30/2017"));
        $vc->setMission("expe.2.mission");

        $donjon = new ExpPro();
        $donjon->setTitle("expe.3.title");
        $donjon->setDateDeb(new \DateTime("07/03/2014"));
        $donjon->setDateFin(new \DateTime("10/21/2013"));
        $donjon->setMission("expe.3.mission");


        return $this->render('default\mp.html.twig',[
            'birth' => $birthOf,
            'Permis' => $permis,
            'Formation1' => [$adrec,$psycho,$iut,$bac],
            'ExpePro' => [$leclerc,$vc,$donjon]

        ]);
    }
    /**
     * @Route("/{_locale}/contact",name="contactpage")
     */
    public function contactAction(Request $request,$_locale){
        $formBuilder = $this->createFormBuilder();

        $formBuilder
            ->add('lastName',TextType::class,[
                'required' =>true,
                'label' => 'form.Nom',
                'translation_domain' => 'contact',
                 'constraints' => [
                     new NotBlank(),
                     new Length([
                         'min' => 2,
                         'max' => 100,
                     ]),
                 ],
            ])
            ->add('firstName',TextType::class,[
                'required' => true,
                'label' => 'form.Prenom',
                'translation_domain' => 'contact',
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 2,
                        'max' => 100,
                    ]),
                ],
            ])
            ->add('mail',EmailType::class,[
                'required' => true,
                'label' => 'form.Mail',
                'translation_domain' => 'contact',
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                    ]),
                    new Email(),
                ],

            ])
            ->add('objet',choiceType::class,[
                'choices'  => array(
                    'form.objet.contact' => 'contact',
                    'form.objet.information' => 'information',
                    'form.objet.bug' => 'bug',
                    'form.objet.priseRV' => 'priseRV',
                ),
                'required' => true,
                'label' => 'form.objet.label',
                'translation_domain' => 'contact',
                'constraints' => [
                    new NotBlank(),
                ],

            ])
            ->add('Message',TextareaType::class,[
                'required' => true,
                'label' => 'form.text',
                'translation_domain' => 'contact',
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 10,
                        'max' => 300,
                    ]),
                ],
            ]);

            $form = $formBuilder->getForm();

        $form ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $data['lastName'];
            $data['firstName'];
            $data['mail'];
            $data['objet'];
            $data['Message'];

            return $this->redirectToRoute('successcontactpage',[
                '_locale' => $_locale,
            ]);
        }

        return $this->render('default\contact.html.twig',[
            'form' => $form->createView(),
        ]);
    }
    /**
    * @Route("/{_locale}/successContact",name="successcontactpage")
    */
    public function successContact(){
        return $this->render('default\successcontact.html.twig',[
        ]);
    }
}

