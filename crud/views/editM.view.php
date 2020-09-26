<style>
    label {
        display: block;
        padding: 0 100px 0 0;
        font-size: 18px;
    }

    td {
        padding: 10px;
    }

    input[type="number"] {
        background-color: #CBCBCB;
        color: white;
        border-style: none;
        padding: 10px;
    }
    input[type="text"], input[type="number"] {
        width: calc(100% - 10px);
    }
</style>

<div class="content">
    <form name="frmUser" method="post" action="">
        <div style="width:500px;">
            <div class="message"><?php if (isset($message)) {
                    echo $message;
                } ?></div>
            <div style="padding-bottom:5px;">
                <a style="display: flex; justify-content: flex-end; align-items: center;" href="index.php" class="link">
                    <img style="display: block; margin-right: 5px;" alt='List' title='List'
                         src='../ressources/crud/list.png' width='15px' height='15px'/>
                    Liste des Matchs
                </a>
            </div>

            <table border="0" style="width: 500px; text-align: center;"
                   aria-describedby="édition résultats" class="tblSaveForm">
                <tr style="display: none;">
                    <th scope="col"></th>
                </tr>
                <tr class="tableheader">
                    <td colspan="2">Edition Matchs</td>
                </tr>
                <?php foreach ($user as $value) { ?>
                    
                    <tr>
                        <td><label>Equipe1</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="id_equipe1" min="1" max="9999" 
                                value="<?php echo $value['id_equipe1']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Equipe2</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="id_equipe2" min="1" max="9999" 
                                value="<?php echo $value['id_equipe2']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Résultat</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Moyenne E4" name="resultat" 
                                value="<?php echo $value['resultat']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Sets</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Moyenne E4" name="sets" 
                                value="<?php echo $value['sets']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Score</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Moyenne E4" name="scores" 
                                value="<?php echo $value['scores']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Points</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Moyenne E4" name="points" 
                                value="<?php echo $value['points']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label>Pénalités</label></td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="text" placeholder="Moyenne E4" name="penalites" 
                                value="<?php echo $value['penalites']; ?>"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td><label style="width: inherit; padding: 0 40px 0 0;">Année</label>
                        </td>
                        <td>
                            <input class="form-control txtField" id="validationServer01" 
                                type="number" placeholder="Moyenne E4" step="1" 
                                name="annee" min="2000" max="9999" 
                                value="<?php echo $value['annee']; ?>"
                            >
                        </td>
                    </tr>

            <?php } ?>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit" class="btnSubmit">
                    </td>
                </tr>

            </table>
        </div>
    </form>

</div>