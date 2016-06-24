<?php 

namespace AppBundle\Form;

use AppBundle\Entity\Sujet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SujetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujet', TextType::class)
            ->add('message', MessageType::class)
            ->add('save', SubmitType::class, array('label' => 'valider'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Sujet::class,
            'empty_data' => function (FormInterface $form) {
                return new Sujet(
                    $form->get('sujet')->getData(),
                    $form->get('message')->getData()
                );
            }
        ));
    }
}