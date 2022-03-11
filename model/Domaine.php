<?php
class DomaineDAO{
    private $idDomaine;
    private $nomDomaine;

    /**
     * Get the value of idDomaine
     */ 
    public function getIdDomaine()
    {
        return $this->idDomaine;
    }

    /**
     * Set the value of idDomaine
     *
     * @return  self
     */ 
    public function setIdDomaine($idDomaine)
    {
        $this->idDomaine = $idDomaine;

        return $this;
    }

    /**
     * Get the value of nomDomaine
     */ 
    public function getNomDomaine()
    {
        return $this->nomDomaine;
    }

    /**
     * Set the value of nomDomaine
     *
     * @return  self
     */ 
    public function setNomDomaine($nomDomaine)
    {
        $this->nomDomaine = $nomDomaine;

        return $this;
    }
}