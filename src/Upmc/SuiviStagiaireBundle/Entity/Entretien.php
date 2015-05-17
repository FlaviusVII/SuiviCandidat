<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entretien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\EntretienRepository")
 */
class Entretien
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateEntretien", type="date")
     */
    private $dateEntretien;

    /**
     * @var string
     *
     * @ORM\Column(name="heureEntretien", type="string", length=255)
     */
    private $heureEntretien;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;


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
     * Set dateEntretien
     *
     * @param \DateTime $dateEntretien
     * @return Entretien
     */
    public function setDateEntretien($dateEntretien)
    {
        $this->dateEntretien = $dateEntretien;

        return $this;
    }

    /**
     * Get dateEntretien
     *
     * @return \DateTime 
     */
    public function getDateEntretien()
    {
        return $this->dateEntretien;
    }

    /**
     * Set heureEntretien
     *
     * @param string $heureEntretien
     * @return Entretien
     */
    public function setHeureEntretien($heureEntretien)
    {
        $this->heureEntretien = $heureEntretien;

        return $this;
    }

    /**
     * Get heureEntretien
     *
     * @return string 
     */
    public function getHeureEntretien()
    {
        return $this->heureEntretien;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Entretien
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Entretien
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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Entretien
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
