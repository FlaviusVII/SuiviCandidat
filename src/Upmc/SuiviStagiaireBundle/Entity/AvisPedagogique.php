<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AvisPedagogique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\AvisPedagogiqueRepository")
 */
class AvisPedagogique
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
     * @ORM\Column(name="dossierSuiviPrestation", type="string", length=255)
     */
    private $dossierSuiviPrestation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTransimission", type="date")
     */
    private $dateTransimission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReception", type="date")
     */
    private $dateReception;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="boolean")
     */
    private $avis;


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
     * Set dossierSuiviPrestation
     *
     * @param string $dossierSuiviPrestation
     * @return AvisPedagogique
     */
    public function setDossierSuiviPrestation($dossierSuiviPrestation)
    {
        $this->dossierSuiviPrestation = $dossierSuiviPrestation;

        return $this;
    }

    /**
     * Get dossierSuiviPrestation
     *
     * @return string 
     */
    public function getDossierSuiviPrestation()
    {
        return $this->dossierSuiviPrestation;
    }

    /**
     * Set dateTransimission
     *
     * @param \DateTime $dateTransimission
     * @return AvisPedagogique
     */
    public function setDateTransimission($dateTransimission)
    {
        $this->dateTransimission = $dateTransimission;

        return $this;
    }

    /**
     * Get dateTransimission
     *
     * @return \DateTime 
     */
    public function getDateTransimission()
    {
        return $this->dateTransimission;
    }

    /**
     * Set dateReception
     *
     * @param \DateTime $dateReception
     * @return AvisPedagogique
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime 
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set avis
     *
     * @param string $avis
     * @return AvisPedagogique
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string 
     */
    public function getAvis()
    {
        return $this->avis;
    }
}
