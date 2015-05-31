<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Upmc\SuiviStagiaireBundle\Entity\Tache;
use Upmc\SuiviStagiaireBundle\Entity\PersonnelFc;
/**
 * Processus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\ProcessusRepository")
 */
class Processus
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
     * @ORM\OneToOne(targetEntity="PersonnelFc")
     */
    private $reponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="Tache", mappedBy="processus")
     */
    private $taches;
    

 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->taches = new ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     * @return Processus
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
     * Set reponsable
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc $reponsable
     * @return Processus
     */
    public function setReponsable(PersonnelFc $reponsable = null)
    {
        $this->reponsable = $reponsable;

        return $this;
    }

    /**
     * Get reponsable
     *
     * @return \Upmc\SuiviStagiaireBundle\Entity\PersonnelFc 
     */
    public function getReponsable()
    {
        return $this->reponsable;
    }

    /**
     * Add taches
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\Tache $taches
     * @return Processus
     */
    public function addTach(Tache $taches)
    {
        $this->taches[] = $taches;

        return $this;
    }

    /**
     * Remove taches
     *
     * @param \Upmc\SuiviStagiaireBundle\Entity\Tache $taches
     */
    public function removeTach(Tache $taches)
    {
        $this->taches->removeElement($taches);
    }

    /**
     * Get taches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTaches()
    {
        return $this->taches;
    }
}
