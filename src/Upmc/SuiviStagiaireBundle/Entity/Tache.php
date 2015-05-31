<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Upmc\SuiviStagiaireBundle\Entity\PersonnelFc;
use Upmc\SuiviStagiaireBundle\Entity\Processus;
use Doctrine\Common\Collections\ArrayCollection;

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
     *
     * @ORM\ManyToOne(targetEntity="Processus", inversedBy="taches")
     */
    private $processus;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PersonnelFc")
     * @ORM\JoinTable(name="ResponsablesTaches",
     *      joinColumns={@ORM\JoinColumn(name="tache_id", referencedColumnName="id", unique=true)},
     *      inverseJoinColumns={@ORM\JoinColumn(name="responsable_id", referencedColumnName="id")}
     *      )
     **/
     
    private $responsable;
    
        /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PersonnelFc")
     * @ORM\JoinTable(name="Acteur_Taches",
     *      joinColumns={@ORM\JoinColumn(name="tache_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="acteur_id", referencedColumnName="id")}
     *      )
     **/
    private $acteur;

      /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PersonnelFc")
     * @ORM\JoinTable(name="Suppleant_Taches",
     *      joinColumns={@ORM\JoinColumn(name="tache_id", referencedColumnName="id", unique=true)},
     *      inverseJoinColumns={@ORM\JoinColumn(name="suppleant_id", referencedColumnName="id")}
     *      )
     **/
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
     * Constructor
     */
    public function __construct()
    {
        $this->responsable = new ArrayCollection();
        $this->acteur = new ArrayCollection();
        $this->suppleant = new ArrayCollection();
    }

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

    /**
     * Set processus
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\Processus $processus
     * @return Tache
     */
    public function setProcessus(Processus $processus = null)
    {
        $this->processus = $processus;

        return $this;
    }

    /**
     * Get processus
     *
     * @return \Upmc\SuiviStagiaireBundle\Entity\Processus 
     */
    public function getProcessus()
    {
        return $this->processus;
    }

    /**
     * Add responsable
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $responsable
     * @return Tache
     */
    public function addResponsable(PersonnelFc $responsable)
    {
        $this->responsable[] = $responsable;

        return $this;
    }

    /**
     * Remove responsable
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $responsable
     */
    public function removeResponsable(PersonnelFc $responsable)
    {
        $this->responsable->removeElement($responsable);
    }

    /**
     * Get responsable
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Add acteur
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $acteur
     * @return Tache
     */
    public function addActeur(PersonnelFc $acteur)
    {
        $this->acteur[] = $acteur;

        return $this;
    }

    /**
     * Remove acteur
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $acteur
     */
    public function removeActeur(PersonnelFc $acteur)
    {
        $this->acteur->removeElement($acteur);
    }

    /**
     * Get acteur
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Add suppleant
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $suppleant
     * @return Tache
     */
    public function addSuppleant(PersonnelFc $suppleant)
    {
        $this->suppleant[] = $suppleant;

        return $this;
    }

    /**
     * Remove suppleant
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $suppleant
     */
    public function removeSuppleant(PersonnelFc $suppleant)
    {
        $this->suppleant->removeElement($suppleant);
    }

    /**
     * Get suppleant
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSuppleant()
    {
        return $this->suppleant;
    }
}
