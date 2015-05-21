<?php

namespace Upmc\SuiviStagiaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DossierSuiviPrestationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('typePrestation')
                ->add('typeFC')
                ->add('commentaires')
                ->add('enseignant')
                ->add('valider', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Upmc\SuiviStagiaireBundle\Entity\DossierSuiviPrestation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'upmc_suivistagiairebundle_dossiersuiviprestation';
    }

}
