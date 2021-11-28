<?php

class PopUp
{
    public function __construct(){}

    public function tutoStylisationTexte(){
        ?>
        <!--Tuto Stylisation de texte-->
        <div class="modal fade" id="useSymbols">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Comment Styliser le texte des réponses ?</h3>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Souligner, mettre en gras/italique ... C'est possible de le faire ici pour le rendre plus vivant !</li>
                        </ul>
                        <p>Mais Comment ? C'est ce que nous allons voir maintenant.</p>
                        <h4><ins>Styliser le texte</ins></h4>
                        <p>
                            Tout d'abord, il n'est pas possible de styliser la question/titre, cela ne fonctionne qu'avec le contenu. <br>
                            Il est ensuite possible de styliser le texte de 5 manières différentes:<br>
                            <b>Gras</b>, <ins>Soulignement</ins>, <i>Italique</i>, <del>Barré</del>, et <mark class='bg-danger'>Mise en Valeur</mark>. <br> <br>
                        </p>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    **Texte** → <b>Texte</b> <br>
                                    <br>
                                    _Texte_ → <ins>Texte</ins>
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    *Texte* → <i>Texte</i> <br>
                                    <br>
                                    --Texte-- → <del>Texte</del>
                                </p>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4">
                                <p>
                                    [Texte] => <mark class='bg-danger'>Texte</mark>
                                </p>
                            </div>
                        </div>
                        <p>
                            On peux également fusionner des styles entre eux, par exemple faire un texte en italique et en gras: <br>
                            ***Texte*** → <b><i>Texte</i></b> <br>
                            Ou encore souligné et mettre en gras : <br>
                            _**Texte**_ → <b><ins>Texte</ins></b> <br>
                            Ou même appliquer du style à l'intérieur d'un autre style: <br>
                            *Texte d'exemple, [texte] d'exemple* → <i>Texte d'exemple, <mark class='bg-danger'>texte</mark> d'exemple</i><br>
                            <br>
                            Il n'y a pas vraiment de limite au nombre de style que vous pouvez mettre dans votre document, alors testez par vous même ! <br>
                            <br>
                            Pour finir, en mode Edition, le style choisit ne s'affichera pas, il ne sera montré qu'après avoir validé les nouveaux changements.
                        </p>
                        <h4><ins>Liens Hypertextes</ins></h4>
                        <p>
                            Pour créer des liens cliquables dans votre texte, rien de plus simple, vous avez juste à mettre votre liens où vous le voulez. Et comme pour la stylisation, il sera transformé en liens cliquable apres validation des changements. <br>
                            https://www.exemple_de_liens.fr => <a href="">https://www.exemple_de_liens.fr</a> <br> (<i>Lien d'exemple. Ne fonctionne pas</i>)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public function addUserAccessPopUp(){
        $formId = "newAccess";
        ?>
        <div class="modal fade" id="addAccessUser">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" id="<?php echo $formId?>"></form>
                    <div class="modal-header">
                        <h3>Ajouter un accès Utilisateur</h3>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label for="nameAccess">Identifiant</label>
                            <input type="text" class="inputData form-control" form="<?php echo $formId?>" name="nameAccess" id="nameAccess" required>
                        </div>
                        <div>
                            <label for="nameAccess">Mot de passe *</label>
                            <input type="text" class="inputData form-control" form="<?php echo $formId?>" name="passwordAccess" id="passwordAccess" required>
                        </div>
                        <div>
                            <label for="nameAccess">Degré de permissions (1-10)</label>
                            <input type="number" class="inputData form-control" min=1 max=10 form="<?php echo $formId?>" name="permission" id="permission" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" form="<?php echo $formId?>">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    public function modifyPasswordPopUp(){
        $formId = "modifyPwd";
        ?>
        <div class="modal fade" id="modifyPwdPopUp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" id="<?php echo $formId?>"></form>
                    <div class="modal-header">
                        <h3 id="titleModifyPassword">Modifier le mot de passe de :user</h3>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="inputData form-control" form="<?php echo $formId?>" name="newPassword" id="newPassword" placeholder="Nouveau mot de passe">
                        <input type="text" class="hide" form="<?php echo $formId?>" name="idAccess" id="idAccess">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="confirm" form="<?php echo $formId?>">Modifier Mot de passe</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            initTitle = document.getElementById("titleModifyPassword").innerHTML;
            function getAccessIdForModify(id, name){
                document.getElementById("idAccess").value = id;
                document.getElementById("titleModifyPassword").innerHTML = initTitle.replace(":user", name);
            }
        </script>
        <?php
    }
    public function deleteAccessPopUp(){
        $formId = "deleteAccess";?>
        <div class="modal fade" id="delAccessPopUp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="post" id="<?php echo $formId?>"></form>
                    <div class="modal-header">
                        <h3 id="titleDeletePassword">Supprimer l'accès ':user'</h3>
                    </div>
                    <div class="modal-footer">
                        <input type="text" class="hide" form="<?php echo $formId?>" name="idAccess" id="idAccessDelete">
                        <input type="text" class="hide" form="<?php echo $formId?>" value="here" name="deleteAccessInput" id="deleteAccessInput">
                        <button type="submit" class="undo" form="<?php echo $formId?>">Supprimer l'accès</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            initTitle = document.getElementById("titleDeletePassword").innerHTML;
            function getAccessIdForDelete(id, name){
                console.log(id);
                document.getElementById("idAccessDelete").value = id;
                document.getElementById("titleDeletePassword").innerHTML = initTitle.replace(":user", name);
            }
        </script>
        <?php
    }
}