<?php
require_once "./model/Entreprise.php";
require_once "./model/EntrepriseDAO.php";
class EntrepriseController
{
    public function ajouter()
    {
        // function verifchamp()
        // {
        //     if (
        //         !empty($_POST['nomEntreprise']) &&
        //         !empty($_POST['conrdonneeGPS']) &&
        //         !empty($_POST['siegeSociale']) &&
        //         !empty($_POST['dateCreation']) &&
        //         !empty($_POST['registreCommerce']) &&
        //         !empty($_POST['NINEA']) &&
        //         !empty($_POST['pageWeb']) &&
        //         !empty($_POST['nombreEmployer']) &&
        //         !empty($_POST['contratFormel']) &&
        //         !empty($_POST['organigrammeRespecter']) &&
        //         !empty($_POST['dispositifFormation']) &&
        //         !empty($_POST['questionSociale']) &&
        //         !empty($_POST['fk_idQuartier']) &&
        //         // !empty($_POST['fk_idRepondant']) &&
        //         !empty($_POST['fk_idDomaine'])
        //         // !empty($_POST['fk_idRegimeJuridique'])
        //     ) {
        //         true;
        //     } else {
        //         false;
        //     }
        // }
        $entreprise = new Entreprise();
        $entrepriseDAO = new EntrepriseDAO();

        if (!empty($_POST)) {
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
            if ($entrepriseDAO) {
                echo "<script>alert('Enregistrement effectuer avec success');
                document.location.href='./?route=Organisation&module=list'</script>";
            } else {
                echo "<script>alert('Echec de enregistrement');
                document.location.href='./?route=Organisation&module=add'</script>";
            }
        } else if(!empty($_POST) && !empty($_POST['idEntreprise'])){
            echo "<script>alert('Echec de enregistrement');
                document.location.href='./?route=Organisation&module=add'</script>";
        }
        // else if (verifchamp() && !!empty($_POST['idEntreprise'])) {
        //     $entreprise->setNomEntreprise($_POST['idEntreprise']);
        // }
    }
    public function allReponse()
    {
        $entrepriseDAO = new EntrepriseDAO();
        $data = $entrepriseDAO->getAll()->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
