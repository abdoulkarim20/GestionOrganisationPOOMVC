<?php
class Repondant{
    private $idRepondant;
    private $nomCompletRepondant;
    private $fonctionRepondant;
    private $telephoneRepondant;
    private $emailRepondant;

    /**
     * Get the value of idRepondant
     */ 
    public function getIdRepondant()
    {
        return $this->idRepondant;
    }

    /**
     * Set the value of idRepondant
     *
     * @return  self
     */ 
    public function setIdRepondant($idRepondant)
    {
        $this->idRepondant = $idRepondant;

        return $this;
    }

    /**
     * Get the value of nomCompletRepondant
     */ 
    public function getNomCompletRepondant()
    {
        return $this->nomCompletRepondant;
    }

    /**
     * Set the value of nomCompletRepondant
     *
     * @return  self
     */ 
    public function setNomCompletRepondant($nomCompletRepondant)
    {
        $this->nomCompletRepondant = $nomCompletRepondant;

        return $this;
    }

    /**
     * Get the value of fonctionRepondant
     */ 
    public function getFonctionRepondant()
    {
        return $this->fonctionRepondant;
    }

    /**
     * Set the value of fonctionRepondant
     *
     * @return  self
     */ 
    public function setFonctionRepondant($fonctionRepondant)
    {
        $this->fonctionRepondant = $fonctionRepondant;

        return $this;
    }

    /**
     * Get the value of telephoneRepondant
     */ 
    public function getTelephoneRepondant()
    {
        return $this->telephoneRepondant;
    }

    /**
     * Set the value of telephoneRepondant
     *
     * @return  self
     */ 
    public function setTelephoneRepondant($telephoneRepondant)
    {
        $this->telephoneRepondant = $telephoneRepondant;

        return $this;
    }

    /**
     * Get the value of emailRepondant
     */ 
    public function getEmailRepondant()
    {
        return $this->emailRepondant;
    }

    /**
     * Set the value of emailRepondant
     *
     * @return  self
     */ 
    public function setEmailRepondant($emailRepondant)
    {
        $this->emailRepondant = $emailRepondant;

        return $this;
    }
}