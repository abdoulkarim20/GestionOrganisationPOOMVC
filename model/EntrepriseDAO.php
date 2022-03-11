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
    public function update(Entreprise $entreprise)
    {
        $sql = $this->dbc->prepare("UPDATE entreprises SET nomEntreprise=?,conrdonneeGPS=?,siegeSociale=?,dateCreation=?,registreCommerce=?,
        NINEA=?,pageWeb=?,nombreEmployer=?,contratFormel=?,organigrammeRespecter=?,dispositifFormation=?,questionSociale=?,fk_idQuartier=?,
        fk_idRepondant=?,fk_idDomaine=?,fk_idRegimeJuridique=? WHERE idEntreprise=? ");
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
    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT idEntreprise ,nomEntreprise,conrdonneeGPS,nomQuartier,siegeSociale,nomCompletRepondant,fonctionRepondant,telephoneRepondant,emailRepondant,dateCreation,libelleRegime,registreCommerce,NINEA,nomDomaine,pageWeb,nombreEmployer,contratFormel,organigrammeRespecter,dispositifFormation,questionSociale FROM entreprises e, domaines d, repondants r,quartiers q,regimeJuridiques rg where e.fk_idQuartier=q.idQuartier AND e.fk_idRepondant=r.idRepondant AND e.fk_idDomaine=d.idDomaine AND e.fk_idRegimeJuridique=rg.idRegime");
        $sql->execute();
        return $sql;
    }

    public function deleteEntreprise($idEntreprise)
    {
        try {
            $sql = $this->dbc->prepare("DELETE FROM entreprises WHERE idEntreprise=?");
            return $sql->execute([$idEntreprise]);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    public function getOne($coloneName, $value)
    {
        $sql = $this->dbc->prepare("SELECT idEntreprise ,nomEntreprise,conrdonneeGPS,nomQuartier,siegeSociale,nomCompletRepondant,fonctionRepondant,telephoneRepondant,emailRepondant,dateCreation,libelleRegime,registreCommerce,NINEA,nomDomaine,pageWeb,nombreEmployer,contratFormel,organigrammeRespecter,dispositifFormation,questionSociale FROM entreprises e, domaines d, repondants r,quartiers q,regimeJuridiques rg WHERE e.fk_idQuartier=q.idQuartier AND e.fk_idRepondant=r.idRepondant AND e.fk_idDomaine=d.idDomaine AND e.fk_idRegimeJuridique=rg.idRegime AND " . $coloneName . "=?");
        $sql->execute([$value]);
        return $sql;
    }
}
