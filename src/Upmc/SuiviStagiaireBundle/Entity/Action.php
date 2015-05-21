<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\ActionRepository")
 */
class Action
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
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="saisie", type="string", length=255)
     */
    private $saisie;


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
     * Set nature
     *
     * @param string $nature
     * @return Action
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Action
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set saisie
     *
     * @param string $saisie
     * @return Action
     */
    public function setSaisie($saisie)
    {
        $this->saisie = $saisie;

        return $this;
    }

    /**
     * Get saisie
     *
     * @return string 
     */
    public function getSaisie()
    {
        return $this->saisie;
    }
}
