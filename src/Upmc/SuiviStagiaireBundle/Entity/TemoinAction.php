<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemoinAction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\TemoinActionRepository")
 */
class TemoinAction
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
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="stagiaire", type="string", length=255)
     */
    private $stagiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="dossierSuiviPrestation", type="string", length=255)
     */
    private $dossierSuiviPrestation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ok", type="boolean")
     */
    private $ok;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExecution", type="date")
     */
    private $dateExecution;


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
     * Set action
     *
     * @param string $action
     * @return TemoinAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set stagiaire
     *
     * @param string $stagiaire
     * @return TemoinAction
     */
    public function setStagiaire($stagiaire)
    {
        $this->stagiaire = $stagiaire;

        return $this;
    }

    /**
     * Get stagiaire
     *
     * @return string 
     */
    public function getStagiaire()
    {
        return $this->stagiaire;
    }

    /**
     * Set dossierSuiviPrestation
     *
     * @param string $dossierSuiviPrestation
     * @return TemoinAction
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
     * Set ok
     *
     * @param boolean $ok
     * @return TemoinAction
     */
    public function setOk($ok)
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * Get ok
     *
     * @return boolean 
     */
    public function getOk()
    {
        return $this->ok;
    }

    /**
     * Set dateExecution
     *
     * @param \DateTime $dateExecution
     * @return TemoinAction
     */
    public function setDateExecution($dateExecution)
    {
        $this->dateExecution = $dateExecution;

        return $this;
    }

    /**
     * Get dateExecution
     *
     * @return \DateTime 
     */
    public function getDateExecution()
    {
        return $this->dateExecution;
    }
}
