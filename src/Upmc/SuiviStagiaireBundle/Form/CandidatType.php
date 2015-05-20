<?php

namespace Upmc\SuiviStagiaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('civilite', 'text', array(
                    'label' => 'Civilité',
                    'constraints' => array(
                        new Regex(array('pattern' => '/^[a-zA-Z\d][\s\da-zA-Zéêèùàçïöäë]{1,39}$/', "message" => "Le nom doit contenir au minimum 2 caractères. Les caractères spéciaux sont interdit. ")),
                    )
                ))
                ->add('nomUsage', 'text', array('label' => "Nom d'usage"))
                ->add('nomPatronymique')
                ->add('prenom', 'text', array('label' => 'Prénom'))
                ->add('dateNaissance', 'date', array(
                    'label' => 'Date de naissance',
                    'years' => range(date('Y'), date('Y') - 95),
                    'format' => 'dd MM yyyy'
                ))
                ->add('departementNaissance', 'text', array('label' => 'Département de naissance'))
                ->add('situationFamilliale')
                ->add('nationalite', 'text', array('label' => 'Nationalité'))
                ->add('email', 'email', array(
                    'constraints' => array(
                        new Email(array('message'=>'{{ value }}'))
                    )
                ))
                ->add('telephone', 'text', array('label' => 'Téléphone'))
                ->add('adresse')
                ->add('codePostal', 'text', array(
                    'constraints' => array(
                        new Regex(array('pattern' => '/^[\d]{5}$/', "message" => "Le code postal doit contenir au 5 chiffres")),
                    )
                ))
                ->add('ville')
                ->add('valider', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Upmc\SuiviStagiaireBundle\Entity\Candidat'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'upmc_suivistagiairebundle_candidat';
    }

}
