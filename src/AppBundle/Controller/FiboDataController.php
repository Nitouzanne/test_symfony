<?php
namespace AppBundle\Controller;

use AppBundle\Tools\fibonacci;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class FiboDataController
 * @author Nicolas Touzanne
 * @package AppBundle\Controller
 *
 * @Route("/{_locale}/fibonacci")
 */
class FiboDataController extends Controller
{
    /** Suite de Fibonacci
     *
     * @param $request
     * @Route("/", name="fibo")
     *
     * @Method({"GET", "POST"})
     * @return object
     */
    public function fiboAction(Request $request)
    {
        $formBuilder = $this->createFormBuilder();
        $formBuilder
            ->add('chiffre', NumberType::class,[
                'required' =>true,
                'label' => 'Chiffre',
            ]);

        $form = $formBuilder->getForm();
        $form ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            return $this->redirectToRoute('successfibopage',[
                'Fibo' => $fibo = new fibonacci($data),
            ]);
        }

        return $this->render('default\fibonacci.html.twig',[
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/successfibonacci",name="successfibopage")
     * @return $response response
     */
    public function successContact(){

        return $this->render('default\successfibopage.html.twig',[
            'Fibo' => $fibo = new fibonacci( ),
        ]);
    }
}