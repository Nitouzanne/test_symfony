<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Title',TextType::class,[
                    'required' =>true,
                    'label' => 'article.title',
                    'translation_domain' => 'article',
                    'constraints' => [
                        new NotBlank(),
                        new Length([
                            'min' => 2,
                            'max' => 100,
                        ]),
                    ],
            ])
                ->add('Slug',TextType::class,[
                    'required' =>true,
                    'label' => 'article.slug',
                    'translation_domain' => 'article',
                    'constraints' => [
                        new NotBlank(),
                        new Length([
                            'min' => 2,
                            'max' => 100,
                        ]),
                    ],
            ])
                ->add('body',TextAreaType::class,[
                    'required' =>true,
                    'label' => 'article.body',
                    'translation_domain' => 'article',
                    'constraints' => [
                        new NotBlank(),
                        new Length([
                            'min' => 2,
                            'max' => 500,
                        ]),
                    ],
            ])
                ->add('published_at',TextType::class,[
                    'required' =>true,
                    'label' => 'article.datepubli',
                    'translation_domain' => 'article',
                    'constraints' => [
                        new NotBlank(),
                        new Length([
                            'min' => 2,
                            'max' => 100,
                        ]),
                    ],
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_article';
    }


}
