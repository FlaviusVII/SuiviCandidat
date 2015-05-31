<?php

namespace Upmc\SuiviStagiaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProcessusType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('reponsable')
                ->add('libelle')
                ->add('valider')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Upmc\SuiviStagiaireBundle\Entity\Processus'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'upmc_suivistagiairebundle_processus';
    }

}
