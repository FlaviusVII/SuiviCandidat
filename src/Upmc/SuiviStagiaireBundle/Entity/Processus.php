<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="reponsable", type="string", length=255)
     */
    private $reponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set reponsable
     *
     * @param string $reponsable
     * @return Processus
     */
    public function setReponsable($reponsable)
    {
        $this->reponsable = $reponsable;

        return $this;
    }

    /**
     * Get reponsable
     *
     * @return string 
     */
    public function getReponsable()
    {
        return $this->reponsable;
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
}
