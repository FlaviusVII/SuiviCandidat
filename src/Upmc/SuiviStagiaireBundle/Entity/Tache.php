<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\TacheRepository")
 */
class Tache
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
     * @ORM\Column(name="processus", type="string", length=255)
     */
    private $processus;

    /**
     * @var string
     *
     * @ORM\Column(name="acteur", type="string", length=255)
     */
    private $acteur;

    /**
     * @var string
     *
     * @ORM\Column(name="suppleant", type="string", length=255)
     */
    private $suppleant;

    /**
     * @var string
     *
     * @ORM\Column(name="numDansProcessus", type="string", length=255)
     */
    private $numDansProcessus;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionPrerequise", type="string", length=255)
     */
    private $conditionPrerequise;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionFinExecution", type="string", length=255)
     */
    private $conditionFinExecution;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="string", length=255)
     */
    private $descriptif;


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
     * Set processus
     *
     * @param string $processus
     * @return Tache
     */
    public function setProcessus($processus)
    {
        $this->processus = $processus;

        return $this;
    }

    /**
     * Get processus
     *
     * @return string 
     */
    public function getProcessus()
    {
        return $this->processus;
    }

    /**
     * Set acteur
     *
     * @param string $acteur
     * @return Tache
     */
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get acteur
     *
     * @return string 
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set suppleant
     *
     * @param string $suppleant
     * @return Tache
     */
    public function setSuppleant($suppleant)
    {
        $this->suppleant = $suppleant;

        return $this;
    }

    /**
     * Get suppleant
     *
     * @return string 
     */
    public function getSuppleant()
    {
        return $this->suppleant;
    }

    /**
     * Set numDansProcessus
     *
     * @param string $numDansProcessus
     * @return Tache
     */
    public function setNumDansProcessus($numDansProcessus)
    {
        $this->numDansProcessus = $numDansProcessus;

        return $this;
    }

    /**
     * Get numDansProcessus
     *
     * @return string 
     */
    public function getNumDansProcessus()
    {
        return $this->numDansProcessus;
    }

    /**
     * Set conditionPrerequise
     *
     * @param string $conditionPrerequise
     * @return Tache
     */
    public function setConditionPrerequise($conditionPrerequise)
    {
        $this->conditionPrerequise = $conditionPrerequise;

        return $this;
    }

    /**
     * Get conditionPrerequise
     *
     * @return string 
     */
    public function getConditionPrerequise()
    {
        return $this->conditionPrerequise;
    }

    /**
     * Set conditionFinExecution
     *
     * @param string $conditionFinExecution
     * @return Tache
     */
    public function setConditionFinExecution($conditionFinExecution)
    {
        $this->conditionFinExecution = $conditionFinExecution;

        return $this;
    }

    /**
     * Get conditionFinExecution
     *
     * @return string 
     */
    public function getConditionFinExecution()
    {
        return $this->conditionFinExecution;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Tache
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
     * Set descriptif
     *
     * @param string $descriptif
     * @return Tache
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }
}
