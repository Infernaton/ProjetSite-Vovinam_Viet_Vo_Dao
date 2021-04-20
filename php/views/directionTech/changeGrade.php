<head>
<link rel="stylesheet" href="css/directionTech.css">
</head>

<div class="container">
        <!-- Titre -->
        <div class="text-center mt-5">
            <h2 class="content-title">Passage de grades</h2>
        </div>
        <br>
        <div class="row">
            <!-- Affichage du mannequin -->
            <div id="belt" class="col-sm-7">
                <img style="width: 40%;" id="beltPicture" src="assets/img/ceintures/c_initiation.png">
            </div>
            <!-- Menu déroulant pour afficher n'importe quelle ceinture -->
            <div id="chooseBelt" class="col-sm-5">
                <select name="belt" class="custom-select mb-3" onchange="document.getElementById('beltPicture').src = this.value">
                    <option value="assets/img/ceintures/c_initiation.png" selected>Initiation</option>
                    <option value="assets/img/ceintures/c_bleu_1er_cap.png">C. bleue 1er Cap</option>
                    <option value="assets/img/ceintures/c_bleu_2eme_cap.png">C. bleue 2e Cap</option>
                    <option value="assets/img/ceintures/c_bleu_3eme_cap.png">C. bleue 3e Cap</option>
    
                    <option value="assets/img/ceintures/c_jaune_1er_dang.png">C. jaune 1er Dang</option>
                    <option value="assets/img/ceintures/c_jaune_2eme_dang.png">C. jaune 2e Dang</option>
                    <option value="assets/img/ceintures/c_jaune_3eme_dang.png">C. jaune 3e Dang</option>
    
                    <option value="assets/img/ceintures/c_rouge.png">C. rouge</option>
                    <option value="assets/img/ceintures/c_rouge_1er_degre.png">C. rouge 1er degré</option>
                    <option value="assets/img/ceintures/c_rouge_2eme_degre.png">C. rouge 2e degré</option>
                    <option value="assets/img/ceintures/c_rouge_3eme_degre.png">C. rouge 3e degré</option>
                    <option value="assets/img/ceintures/c_rouge_4eme_degre.png">C. rouge 4e degré</option>
                    <option value="assets/img/ceintures/c_rouge_5eme_degre.png">C. rouge 5e degré</option>
                    <option value="assets/img/ceintures/c_rouge_6eme_degre.png">C. rouge 6e degré</option>
                </select>
                <div class="text-center">
                    <p>Pour toutes informations sur le Passage des différents grades :</p>
                    <a href="assets/download_file/3.2.1_Les_grades_Internationaux.pdf" class="link">Voir "Les_grades_Internationaux.pdf"</a><br>
                    <a href="assets/download_file/3.2.2_Les grades du Vovinam-Viàt Vo Dao.pdf" class="link">Voir "Les grades du Vovinam-Viàt Vo Dao.pdf"</a> <br>
                    <a href="assets/download_file/3.3_Organisation des examens des grades.pdf" class="link">Voir "Organisation des examens des grades.pdf"</a> <br>
                    <a href="assets/download_file/3.4_Programmes d'examens.pdf" class="link">Voir "Programmes d'examens.pdf"</a>
                </div>
                <div>
                    <br>
                    <br>
                    <p class="border pl-3">
                        Formulaire pour passer un grade: <a href="#" class="link">formulaire.pdf</a>
                    </p>
                </div>
            </div>
        </div>
    </div>