<?php
require_once "Entreprise.php";
require_once "./utils/DataBaseHelper.php";
class EntrepriseDAO
{
    private $dbc;
    public function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    public function add(Entreprise $entreprise)
    {
        $sql = $this->dbc->prepare("INSERT INTO entreprises (nomEntreprise,conrdonneeGPS,siegeSociale,dateCreation,registreCommerce,
        NINEA,pageWeb,nombreEmployer,contratFormel,organigrammeRespecter,dispositifFormation,questionSociale,fk_idQuartier,
        fk_idRepondant,fk_idDomaine,fk_idRegimeJuridique) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute([
            $entreprise->getNomEntreprise(),
            $entreprise->getConrdonneeGPS(),
            $entreprise->getSiegeSociale(),
            $entreprise->getDateCreation(),
            $entreprise->getRegistreCommerce(),
            $entreprise->getNINEA(),
            $entreprise->getPageWeb(),
            $entreprise->getNombreEmployer(),
            $entreprise->getContratFormel(),
            $entreprise->getOrganigrammeRespecter(),
            $entreprise->getDispositifFormation(),
            $entreprise->getQuestionSociale(),
            $entreprise->getFk_idQuartier(),
            $entreprise->getFk_idRepondant(),
            $entreprise->getFk_idDomaine(),
            $entreprise->getFk_idRegimeJuridique()
        ]);
    }
}
