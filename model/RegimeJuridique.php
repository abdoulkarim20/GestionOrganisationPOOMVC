<?php
class RegimeJuridique{
    private $idRegime;
    private $libelleRegime;

    /**
     * Get the value of idRegime
     */ 
    public function getIdRegime()
    {
        return $this->idRegime;
    }

    /**
     * Set the value of idRegime
     *
     * @return  self
     */ 
    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;

        return $this;
    }

    /**
     * Get the value of libelleRegime
     */ 
    public function getLibelleRegime()
    {
        return $this->libelleRegime;
    }

    /**
     * Set the value of libelleRegime
     *
     * @return  self
     */ 
    public function setLibelleRegime($libelleRegime)
    {
        $this->libelleRegime = $libelleRegime;

        return $this;
    }
}