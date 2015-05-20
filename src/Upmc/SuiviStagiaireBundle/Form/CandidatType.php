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
                ->add('civilite', 'choice', array(
                    'label' => 'Civilité',
                    'choices' => array(
                        'M' => 'Monsieur',
                        'F' => 'Madame'
                    )
                   
                ))
                ->add('nomUsage', 'text', array(
                    'label' => "Nom d'usage",
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[a-zA-Z\d][\s\da-zA-Zéêèùàçïöäë]{1,39}$/',
                            "message" => "Le nom doit contenir au minimum 2 caractères. Les caractères spéciaux sont interdit. ")),
                    )
                ))
                ->add('nomPatronymique', 'text', array(
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[a-zA-Z\d][\s\da-zA-Zéêèùàçïöäë]{0,39}$/',
                            "message" => "Les caractères spéciaux sont interdit. ")),
                    )
                ))
                ->add('prenom', 'text', array(
                    'label' => 'Prénom',
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[a-zA-Z\d][\s\da-zA-Zéêèùàçïöäë]{1,39}$/',
                            "message" => "Le prénom doit contenir au minimum 2 caractères. Les caractères spéciaux sont interdit. ")),
                    )
                ))
                ->add('dateNaissance', 'date', array(
                    'label' => 'Date de naissance',
                    'years' => range(date('Y'), date('Y') - 95),
                    'format' => 'dd MM yyyy'
                ))
                ->add('departementNaissance', 'text', array(
                    'label' => 'Département de naissance',
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[\d]{2}$/',
                            "message" => "Le Département est un numéro de 2 chiffres"
                                ))
                    )
                ))
                ->add('situationFamilliale', 'choice', array(
                    'label' => 'Situation familliale',
                    'choices' => array(
                        'Divorcé' => 'Divorcé',
                        'Célibataire' => 'Célibataire',
                        'Marié' => 'Marié(e)',
                        'Paxé' => 'Paxé(e)'
                    ),
                    'constraints' => array(
                        new Regex(array('pattern' => '/^[a-zA-Z\d][\s\da-zA-Zéêèùàçïöäë]{1,39}$/')),
                    )
                ))
                ->add('nationalite', 'text', array(
                    'label' => 'Nationalité',
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[a-zA-Z\d][\s\da-zA-Zéêèùàçïöäë]{1,39}$/',
                            'message' => "Le nom doit contenir au minimum 2 caractères. Les caractères spéciaux sont interdit."
                                ))
                    )
                ))
                ->add('email', 'email', array(
                    'constraints' => array(
                        new Email(array('message' => '{{ value }}'))
                    )
                ))
                ->add('telephone', 'text', array(
                    'label' => 'Téléphone',
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[\d]{8,10}$/',
                            'message' => 'Le numéro de téléphone est constituer de 10 chiffres maximum'
                                )),
                    )
                ))
                ->add('adresse', 'text', array(
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[\d]{1,3}[\sa-zA-Zéêèùàçïöäë]{1,50}$/',
                            "message" => "l'addresse ne comporte pas de caractère spéciaux"
                                ))
                    )
                ))
                ->add('codePostal', 'text', array(
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[\d]{5}$/',
                            "message" => "Le code postal doit contenir au 5 chiffres")),
                    )
                ))
                ->add('ville', 'text', array(
                    'constraints' => array(
                        new Regex(array(
                            'pattern' => '/^[\sa-zA-Zéêèùàçïöäë]{1,50}$/',
                            "message" => "la ville ne comporte pas de caractère spéciaux"
                                ))
                    )
                ))
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
