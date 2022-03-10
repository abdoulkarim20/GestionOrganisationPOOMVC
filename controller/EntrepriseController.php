<?php
require_once "./model/Entreprise.php";
require_once "./model/EntrepriseDAO.php";
class EntrepriseController
{
    public function ajouter()
    {
        $entreprise = new Entreprise();
        $entrepriseDAO = new EntrepriseDAO();
        if (!empty($_POST)) {
            extract($_POST);
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
            $entreprise->setFk_idRepondant(1);
            $entreprise->setFk_idDomaine(1);
            $entreprise->setFk_idRegimeJuridique(1);
            $entrepriseDAO->add($entreprise);
            if ($entrepriseDAO) {
                echo "<script>alert('ajout ok')</script>";
            } else {
                echo "<script>alert('pas ok')</script>";
                //     
                // $entreprise->setNomEntreprise($_POST['fk_idRepondant']);
                // $entreprise->setNomEntreprise($_POST['fk_idDomaine']);
                // $entreprise->setNomEntreprise($_POST['fk_idRegimeJuridique']);

            }
        }
    }
    public function allReponse(){
        $entrepriseDAO = new EntrepriseDAO();
        $data=$entrepriseDAO->getAll()->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
