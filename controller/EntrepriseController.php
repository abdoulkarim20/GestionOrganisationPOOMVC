<?php
require_once "./model/Entreprise.php";
require_once "./model/EntrepriseDAO.php";
require_once "./utils/Formulaire.php";
$form = new Formulaire();
class EntrepriseController
{
    public function EntrepriseModifier()
    {
        if (!empty($_GET['idEntreprise']));
        $idEntreprise = $_GET['idEntreprise'];
        $entrepriseDAO = new EntrepriseDAO();
        $data = $entrepriseDAO->getOne('idEntreprise', $idEntreprise)->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    public function ajouter()
    {
        $entreprise = new Entreprise();
        $entrepriseDAO = new EntrepriseDAO();
        if (
            !empty($_POST['nomEntreprise']) &&
            !empty($_POST['conrdonneeGPS']) &&
            !empty($_POST['siegeSociale']) &&
            !empty($_POST['dateCreation']) &&
            !empty($_POST['registreCommerce']) &&
            !empty($_POST['NINEA']) &&
            !empty($_POST['pageWeb']) &&
            !empty($_POST['nombreEmployer']) &&
            !empty($_POST['contratFormel']) &&
            !empty($_POST['organigrammeRespecter']) &&
            !empty($_POST['dispositifFormation']) &&
            !empty($_POST['questionSociale']) &&
            !empty($_POST['fk_idQuartier']) &&
            !empty($_POST['fk_idRepondant']) &&
            !empty($_POST['fk_idDomaine']) &&
            !empty($_POST['fk_idRegimeJuridique'])
        ) {
            $entreprise->setNomEntreprise($_POST['nomEntreprise']);
            $entreprise->setConrdonneeGPS($_POST['conrdonneeGPS']);
            $entreprise->setSiegeSociale($_POST['siegeSociale']);
            $entreprise->setDateCreation($_POST['dateCreation']);
            $entreprise->setRegistreCommerce($_POST['registreCommerce']);
            $entreprise->setNINEA($_POST['NINEA']);
            $entreprise->setPageWeb($_POST['pageWeb']);
            $entreprise->setNombreEmployer($_POST['nombreEmployer']);
            $entreprise->setContratFormel($_POST['contratFormel']);
            $entreprise->setOrganigrammeRespecter($_POST['organigrammeRespecter']);
            $entreprise->setDispositifFormation($_POST['dispositifFormation']);
            $entreprise->setQuestionSociale($_POST['questionSociale']);
            $entreprise->setFk_idQuartier($_POST['fk_idQuartier']);
            $entreprise->setFk_idRepondant($_POST['fk_idRepondant']);
            $entreprise->setFk_idDomaine($_POST['fk_idDomaine']);
            $entreprise->setFk_idRegimeJuridique($_POST['fk_idRegimeJuridique']);
            $entrepriseDAO->add($entreprise);
            echo "<script>alert('Enregistrement effectuer avec success');
                document.location.href='./?route=Organisation&module=list'</script>";
        } else {
            echo "<h4>Tous les champs sont oligatoires </h4>";
        }
    }
    public function allReponse()
    {
        $entrepriseDAO = new EntrepriseDAO();
        $data = $entrepriseDAO->getAll()->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function modification()
    {
        $entreprise = new Entreprise();
        $entrepriseDAO = new EntrepriseDAO();
        if (
            !empty($_POST['idEntreprise']) &&
            !empty($_POST['nomEntreprise']) &&
            !empty($_POST['conrdonneeGPS']) &&
            !empty($_POST['siegeSociale']) &&
            !empty($_POST['dateCreation']) &&
            !empty($_POST['registreCommerce']) &&
            !empty($_POST['NINEA']) &&
            !empty($_POST['pageWeb']) &&
            !empty($_POST['nombreEmployer']) &&
            !empty($_POST['contratFormel']) &&
            !empty($_POST['organigrammeRespecter']) &&
            !empty($_POST['dispositifFormation']) &&
            !empty($_POST['questionSociale']) &&
            !empty($_POST['fk_idQuartier']) &&
            !empty($_POST['fk_idRepondant']) &&
            !empty($_POST['fk_idDomaine']) &&
            !empty($_POST['fk_idRegimeJuridique'])
        ) {
            $entreprise->setIdEntreprise($_POST['idEntreprise']);
            $entreprise->setNomEntreprise($_POST['nomEntreprise']);
            $entreprise->setConrdonneeGPS($_POST['conrdonneeGPS']);
            $entreprise->setSiegeSociale($_POST['siegeSociale']);
            $entreprise->setDateCreation($_POST['dateCreation']);
            $entreprise->setRegistreCommerce($_POST['registreCommerce']);
            $entreprise->setNINEA($_POST['NINEA']);
            $entreprise->setPageWeb($_POST['pageWeb']);
            $entreprise->setNombreEmployer($_POST['nombreEmployer']);
            $entreprise->setContratFormel($_POST['contratFormel']);
            $entreprise->setOrganigrammeRespecter($_POST['organigrammeRespecter']);
            $entreprise->setDispositifFormation($_POST['dispositifFormation']);
            $entreprise->setQuestionSociale($_POST['questionSociale']);
            $entreprise->setFk_idQuartier($_POST['fk_idQuartier']);
            $entreprise->setFk_idRepondant($_POST['fk_idRepondant']);
            $entreprise->setFk_idDomaine($_POST['fk_idDomaine']);
            $entreprise->setFk_idRegimeJuridique($_POST['fk_idRegimeJuridique']);
            $entrepriseDAO->update($entreprise);
            echo "<script>alert('Modification effectuer avec success');
                document.location.href='./?route=Organisation&module=list'</script>";
        }
    }
}
