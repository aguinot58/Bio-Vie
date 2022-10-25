<?php

    $api_url = "https://opendata.agencebio.org/api/gouv/operateurs/?nb=2000";

    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);

    $artisan_data = $response_data->items;

    $tblInsertCategories = [];
    $tblInsertActivites = [];

    // Ouverture de la connexion à la BDD
    $conn = new PDO("mysql:host=localhost;dbname=biovie;charset=UTF8", "root", "240282");

    // On réalise une première boucle afin de récupérer les catégories et les activités, afin de les injecter avant de
    // reboucler sur les artisans et de faire les insertions dans les tables de jointure, car si les id des tables
    // categories et activites n'existent pas, cela génère une erreur.
    foreach ($artisan_data as $artisan) {

        foreach($artisan->categories as $categorie){
            $cplCategorie = $categorie->id.':'.$categorie->nom;

            if (!in_array($cplCategorie, $tblInsertCategories)) {
                array_push($tblInsertCategories,$cplCategorie);
            }
        }

        foreach($artisan->activites as $activite){
            $cplActivite = $activite->id.':'.$activite->nom;

            if (!in_array($cplActivite, $tblInsertActivites)) {
                array_push($tblInsertActivites,$cplActivite);
            }
        }

    }

    // Tri des tableaux catégories et activités
    array_multisort($tblInsertCategories);
    array_multisort($tblInsertActivites);

    // Injection des catégories
    foreach($tblInsertCategories as $categorie_){

        $tblCategorie_ = explode(":",$categorie_);

        $sth = $conn->prepare("INSERT INTO categories (nom) VALUES (:nom_cat)");
        $sth->bindParam(':nom_cat', $tblCategorie_[1]);    
        $sth->execute();

    }

    // Injection des activités
    foreach($tblInsertActivites as $activite_){

        $tblActivite_ = explode(":",$activite_);

        $sth = $conn->prepare("INSERT INTO activites (nom_activite) VALUES (:nom_activite)");
        $sth->bindParam(':nom_activite', $tblActivite_[1]);    
        $sth->execute();

    }


    // On réalise une 2ème boucle pour faire les insertions dans la table operateurs, ainsi 
    // que dans les tables de jointure.
    foreach ($artisan_data as $artisan) {

        $gerant = $artisan->gerant;
        $raison_sociale = $artisan->raisonSociale;
        $denomination_courante = $artisan->denominationcourante;
        $siret = $artisan->siret;
        $numero_bio = $artisan->numeroBio;
        $code_NAF = $artisan->codeNAF;
        $telephone = $artisan->telephone;
        $telephone_co = $artisan->telephoneCommerciale;
        $email = $artisan->email;
        $date = date("Y-m-d");

        $tblSites = array();
        foreach($artisan->siteWebs as $site){
            array_push($tblSites,$site->url);
        }

        $tblCategories = array();
        foreach($artisan->categories as $categorie){
            $cplCategorie = $categorie->id.':'.$categorie->nom;
            array_push($tblCategories,$cplCategorie);
        }

        $tblActivites = array();
        foreach($artisan->activites as $activite){
            $cplActivite = $activite->id.':'.$activite->nom;
            array_push($tblActivites,$cplActivite);
        }

        if($raison_sociale==""){
            $raison_sociale = $denomination_courante;
        }

        if($raison_sociale!=""){
            if(count($tblActivites)>0){
                if(count($tblCategories)>0){

                    // On vérifie si la raison sociale n'est pas déjà présente sous un autre id
                    $sth = $conn->prepare("Select id from operateurs WHERE raison_sociale = :raison_sociale");
                    $sth->bindParam(':raison_sociale', $raison_sociale);
                    $sth->execute();
                    $checkIdArtisan = $sth->fetchColumn();

                    // le cas échéant, on remplace la raison sociale par la dénomination courante.
                    if ($checkIdArtisan!=""){
                        $raison_sociale = $denomination_courante;
                    }

                    // On vérifie que la dénomination courante n'était pas vide, sinon on passe cette entrée.
                    if($raison_sociale!=""){

                        // On vérifie à nouveau si la raison sociale remplacée n'est pas déjà présente non plus
                        $sth = $conn->prepare("Select id from operateurs WHERE raison_sociale = :raison_sociale");
                        $sth->bindParam(':raison_sociale', $raison_sociale);
                        $sth->execute();
                        $checkIdArtisan = $sth->fetchColumn();

                        // Si on ne trouve rien, alors on peut injecter
                        if ($checkIdArtisan==""){
                            
                            // Si jamais le n° de téléphone n'est pas renseigné, on assigne la valeur du téléphone commerciale.
                            // Si les deux sont vides, la valeur dans la table peut-être null.
                            if($telephone==""){
                                $telephone = $telephone_co;
                            }

                            if ($telephone!=null){
                                $telephone = str_replace("\"", "",str_replace("/", "",str_replace("-", "",preg_replace("/\s+/", "",$telephone))));
                            }

                            // Si au moins un site_web est présent, on prend la première valeur trouvée.
                            if(count($tblSites)>0){
                                $site_web = $tblSites[0];
                            } else {
                                $site_web = null;
                            }

                            // On réalise l'insertion dans la table Operateurs
                            $sth = $conn->prepare("INSERT INTO operateurs (numero_bio, siret, code_naf, gerant, raison_sociale, email, telephone, site_web, date_maj) VALUES
                                    (:numero_bio, :siret, :code_naf, :gerant, :raison_sociale, :email, :telephone, :site_web, :date_maj)");
                            $sth->bindParam(':numero_bio', $numero_bio);    
                            $sth->bindParam(':siret', $siret);
                            $sth->bindParam(':code_naf', $code_NAF); 
                            $sth->bindParam(':gerant', $gerant); 
                            $sth->bindParam(':raison_sociale', $raison_sociale); 
                            $sth->bindParam(':email', $email); 
                            $sth->bindParam(':telephone', $telephone); 
                            $sth->bindParam(':site_web', $site_web); 
                            $sth->bindParam(':date_maj', $date); 
                            $sth->execute();
                            
                            // On récupère l'id opérateur venant d'être créée afin de réaliser les insertions dans les tables de jointures
                            $sth = $conn->prepare("Select id from operateurs WHERE raison_sociale = :raison_sociale");
                            $sth->bindParam(':raison_sociale', $raison_sociale);
                            $sth->execute();
                            $idArtisan = $sth->fetchColumn();

                            // Insertions des id categories et operateurs dans la table de jointure categories_operateurs
                            foreach($tblCategories as $categorieJointure){

                                $tblCategorieJointure = explode(":",$categorieJointure);

                                // On réalise l'insertion dans la table Operateurs
                                $sth = $conn->prepare("INSERT INTO categories_operateurs (categories_id, operateurs_id) VALUES (:categories_id, :operateurs_id)");
                                $sth->bindParam(':categories_id', $tblCategorieJointure[0]);    
                                $sth->bindParam(':operateurs_id', $idArtisan);
                                $sth->execute();

                            }

                            // Insertions des id activites et operateurs dans la table de jointure activites_operateurs
                            foreach($tblActivites as $activiteJointure){

                                $tblActiviteJointure = explode(":",$activiteJointure);

                                // On réalise l'insertion dans la table Operateurs
                                $sth = $conn->prepare("INSERT INTO activites_operateurs (activites_id, operateurs_id) VALUES (:activites_id, :operateurs_id)");
                                $sth->bindParam(':activites_id', $tblActiviteJointure[0]);    
                                $sth->bindParam(':operateurs_id', $idArtisan);
                                $sth->execute();

                            }

                        }

                    }

                }

            }

        }

    }

    echo("fin");

    //Fermeture de la connexion à la base de données
    $sth = null;
    $conn = null;

?>