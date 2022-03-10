<?php
class Entreprise
{
    private $idEntreprise;
    private $nomEntreprise;
    private $conrdonneeGPS;
    private $siegeSociale;
    private $dateCreation;
    private $registreCommerce;
    private $NINEA;
    private $pageWeb;
    private $nombreEmployer;
    private $contratFormel;
    private $organigrammeRespecter;
    private $dispositifFormation;
    private $questionSociale;
    private $fk_idQuartier;
    private $fk_idRepondant;
    private $fk_idDomaine;
    private $fk_idRegimeJuridique;

    /**
     * Get the value of idEntreprise
     */ 
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set the value of idEntreprise
     *
     * @return  self
     */ 
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get the value of nomEntreprise
     */ 
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * Set the value of nomEntreprise
     *
     * @return  self
     */ 
    public function setNomEntreprise($nomEntreprise)
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Get the value of conrdonneeGPS
     */ 
    public function getConrdonneeGPS()
    {
        return $this->conrdonneeGPS;
    }

    /**
     * Set the value of conrdonneeGPS
     *
     * @return  self
     */ 
    public function setConrdonneeGPS($conrdonneeGPS)
    {
        $this->conrdonneeGPS = $conrdonneeGPS;

        return $this;
    }

    /**
     * Get the value of siegeSociale
     */ 
    public function getSiegeSociale()
    {
        return $this->siegeSociale;
    }

    /**
     * Set the value of siegeSociale
     *
     * @return  self
     */ 
    public function setSiegeSociale($siegeSociale)
    {
        $this->siegeSociale = $siegeSociale;

        return $this;
    }

    /**
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of registreCommerce
     */ 
    public function getRegistreCommerce()
    {
        return $this->registreCommerce;
    }

    /**
     * Set the value of registreCommerce
     *
     * @return  self
     */ 
    public function setRegistreCommerce($registreCommerce)
    {
        $this->registreCommerce = $registreCommerce;

        return $this;
    }

    /**
     * Get the value of NINEA
     */ 
    public function getNINEA()
    {
        return $this->NINEA;
    }

    /**
     * Set the value of NINEA
     *
     * @return  self
     */ 
    public function setNINEA($NINEA)
    {
        $this->NINEA = $NINEA;

        return $this;
    }

    /**
     * Get the value of pageWeb
     */ 
    public function getPageWeb()
    {
        return $this->pageWeb;
    }

    /**
     * Set the value of pageWeb
     *
     * @return  self
     */ 
    public function setPageWeb($pageWeb)
    {
        $this->pageWeb = $pageWeb;

        return $this;
    }

    /**
     * Get the value of nombreEmployer
     */ 
    public function getNombreEmployer()
    {
        return $this->nombreEmployer;
    }

    /**
     * Set the value of nombreEmployer
     *
     * @return  self
     */ 
    public function setNombreEmployer($nombreEmployer)
    {
        $this->nombreEmployer = $nombreEmployer;

        return $this;
    }

    /**
     * Get the value of contratFormel
     */ 
    public function getContratFormel()
    {
        return $this->contratFormel;
    }

    /**
     * Set the value of contratFormel
     *
     * @return  self
     */ 
    public function setContratFormel($contratFormel)
    {
        $this->contratFormel = $contratFormel;

        return $this;
    }

    /**
     * Get the value of organigrammeRespecter
     */ 
    public function getOrganigrammeRespecter()
    {
        return $this->organigrammeRespecter;
    }

    /**
     * Set the value of organigrammeRespecter
     *
     * @return  self
     */ 
    public function setOrganigrammeRespecter($organigrammeRespecter)
    {
        $this->organigrammeRespecter = $organigrammeRespecter;

        return $this;
    }

    /**
     * Get the value of dispositifFormation
     */ 
    public function getDispositifFormation()
    {
        return $this->dispositifFormation;
    }

    /**
     * Set the value of dispositifFormation
     *
     * @return  self
     */ 
    public function setDispositifFormation($dispositifFormation)
    {
        $this->dispositifFormation = $dispositifFormation;

        return $this;
    }

    /**
     * Get the value of questionSociale
     */ 
    public function getQuestionSociale()
    {
        return $this->questionSociale;
    }

    /**
     * Set the value of questionSociale
     *
     * @return  self
     */ 
    public function setQuestionSociale($questionSociale)
    {
        $this->questionSociale = $questionSociale;

        return $this;
    }

    /**
     * Get the value of fk_idQuartier
     */ 
    public function getFk_idQuartier()
    {
        return $this->fk_idQuartier;
    }

    /**
     * Set the value of fk_idQuartier
     *
     * @return  self
     */ 
    public function setFk_idQuartier($fk_idQuartier)
    {
        $this->fk_idQuartier = $fk_idQuartier;

        return $this;
    }

    /**
     * Get the value of fk_idRepondant
     */ 
    public function getFk_idRepondant()
    {
        return $this->fk_idRepondant;
    }

    /**
     * Set the value of fk_idRepondant
     *
     * @return  self
     */ 
    public function setFk_idRepondant($fk_idRepondant)
    {
        $this->fk_idRepondant = $fk_idRepondant;

        return $this;
    }

    /**
     * Get the value of fk_idDomaine
     */ 
    public function getFk_idDomaine()
    {
        return $this->fk_idDomaine;
    }

    /**
     * Set the value of fk_idDomaine
     *
     * @return  self
     */ 
    public function setFk_idDomaine($fk_idDomaine)
    {
        $this->fk_idDomaine = $fk_idDomaine;

        return $this;
    }

    /**
     * Get the value of fk_idRegimeJuridique
     */ 
    public function getFk_idRegimeJuridique()
    {
        return $this->fk_idRegimeJuridique;
    }

    /**
     * Set the value of fk_idRegimeJuridique
     *
     * @return  self
     */ 
    public function setFk_idRegimeJuridique($fk_idRegimeJuridique)
    {
        $this->fk_idRegimeJuridique = $fk_idRegimeJuridique;

        return $this;
    }
}
