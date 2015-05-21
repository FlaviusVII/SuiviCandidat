<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnelFc
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\PersonnelFcRepository")
 */
class PersonnelFc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUsage", type="string", length=255)
     */
    private $nomUsage;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return PersonnelFc
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nomUsage
     *
     * @param string $nomUsage
     * @return PersonnelFc
     */
    public function setNomUsage($nomUsage)
    {
        $this->nomUsage = $nomUsage;

        return $this;
    }

    /**
     * Get nomUsage
     *
     * @return string 
     */
    public function getNomUsage()
    {
        return $this->nomUsage;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return PersonnelFc
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}
