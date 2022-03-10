<?php
class Quartier
{
    private $idQuartier;
    private $nomQuartier;
    private $fk_idCommune;

    /**
     * Get the value of idQuartier
     */
    public function getIdQuartier()
    {
        return $this->idQuartier;
    }

    /**
     * Set the value of idQuartier
     *
     * @return  self
     */
    public function setIdQuartier($idQuartier)
    {
        $this->idQuartier = $idQuartier;

        return $this;
    }

    /**
     * Get the value of nomQuartier
     */
    public function getNomQuartier()
    {
        return $this->nomQuartier;
    }

    /**
     * Set the value of nomQuartier
     *
     * @return  self
     */
    public function setNomQuartier($nomQuartier)
    {
        $this->nomQuartier = $nomQuartier;

        return $this;
    }

    /**
     * Get the value of fk_idCommune
     */
    public function getFk_idCommune()
    {
        return $this->fk_idCommune;
    }

    /**
     * Set the value of fk_idCommune
     *
     * @return  self
     */
    public function setFk_idCommune($fk_idCommune)
    {
        $this->fk_idCommune = $fk_idCommune;

        return $this;
    }
}
