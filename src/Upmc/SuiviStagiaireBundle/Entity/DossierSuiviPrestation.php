<?php

namespace Upmc\SuiviStagiaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierSuiviPrestation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Upmc\SuiviStagiaireBundle\Entity\DossierSuiviPrestationRepository")
 */
class DossierSuiviPrestation
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
     * @ORM\Column(name="typePrestation", type="string", length=255)
     */
    private $typePrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="typeFC", type="string", length=255)
     */
    private $typeFC;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="text")
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="enseignant", type="string", length=255)
     */
    private $enseignant;


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
     * Set typePrestation
     *
     * @param string $typePrestation
     * @return DossierSuiviPrestation
     */
    public function setTypePrestation($typePrestation)
    {
        $this->typePrestation = $typePrestation;

        return $this;
    }

    /**
     * Get typePrestation
     *
     * @return string 
     */
    public function getTypePrestation()
    {
        return $this->typePrestation;
    }

    /**
     * Set typeFC
     *
     * @param string $typeFC
     * @return DossierSuiviPrestation
     */
    public function setTypeFC($typeFC)
    {
        $this->typeFC = $typeFC;

        return $this;
    }

    /**
     * Get typeFC
     *
     * @return string 
     */
    public function getTypeFC()
    {
        return $this->typeFC;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     * @return DossierSuiviPrestation
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set enseignant
     *
     * @param string $enseignant
     * @return DossierSuiviPrestation
     */
    public function setEnseignant($enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return string 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }
}
