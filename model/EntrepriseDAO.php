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
            $entreprise->getFk_idRegimeJuridique(),
            $entreprise->getIdEntreprise()
        ]);
    }
    public function getAll()
    {
        $sql = $this->dbc->prepare("SELECT * FROM entreprises e, domaines d, repondants r,quartiers q,regimeJuridiques rg where e.fk_idQuartier=q.idQuartier AND e.fk_idRepondant=r.idRepondant AND e.fk_idDomaine=d.idDomaine AND e.fk_idRegimeJuridique=rg.idRegime");
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
        $sql = $this->dbc->prepare("SELECT * FROM entreprises e, domaines d, repondants r,quartiers q,regimeJuridiques rg WHERE e.fk_idQuartier=q.idQuartier AND e.fk_idRepondant=r.idRepondant AND e.fk_idDomaine=d.idDomaine AND e.fk_idRegimeJuridique=rg.idRegime AND " . $coloneName . "=?");
        $sql->execute([$value]);
        return $sql;
    }
    public function getDetail($coloneName, $value)
    {
        $sql = $this->dbc->prepare("SELECT * FROM entreprises ent, regions reg, departements dep, communes com, quartiers quar, domaines dom, regimeJuridiques regJ, repondants repo WHERE dep.fk_regionId=reg.idRegion AND com.fk_idDepartement=dep.idDepartement AND quar.fk_idCommune=com.idCommune AND ent.fk_idQuartier=quar.idQuartier AND ent.fk_idDomaine=dom.idDomaine AND ent.fk_idRegimeJuridique=regJ.idRegime AND ent.fk_idRepondant=repo.idRepondant AND " . $coloneName . "=? ");
        $sql->execute([$value]);
        return $sql;
    }
}
