<style>    td {        padding: 10px;    }    a:hover {        text-decoration: none;    }    .collapse-year {        color: black;    }</style><div class="content" style="padding: 0 50px 50px;">    <form name="frmUser" method="post">        <div style="width:1150px; margin: 0 auto">            <div class="message"><?php if (isset($message)) {                    echo $message;                } ?></div>            <div style="text-align: center;">                <a data-toggle="collapse" class="collapse-year btn btn-primary"                     href="#collapse-res2020"                     role="button" aria-expanded="false" aria-controls="collapse-res2020">                        Résultats Année 2020                </a>                <a data-toggle="collapse" class="collapse-year btn btn-primary"                     href="#collapse-res2019"                     role="button" aria-expanded="false" aria-controls="collapse-res2019">                        Résultats Année 2019                </a>                            <a data-toggle="collapse" class="collapse-year btn btn-primary"                     href="#collapse-res2018"                     role="button" aria-expanded="false" aria-controls="collapse-res2018">                        Résultats Année 2018                </a>            </div>             <div style="text-align: right; padding-bottom:5px;">                <a href="add.php" class="link">                    <img alt='Add' title='Ajouter' src='../ressources/crud/add.png'                         width='25px' height='25px'>Ajouter                </a>            </div>            <table style="width: 1150px" border="0"                   aria-describedby="listes résultats" class="tblListForm">                <tr style="display: none;">                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                </tr>                <tr class="listheader">                    <td></td>                    <td>Année</td>                    <td>Équipes</td>                    <td>Id</td>                    <td>Victoires</td>                    <td>Défaites</td>                    <td>Sets Gagnés</td>                    <td>Points Total</td>                    <td>Id Équipe</td>                    <td>Actions</td>                </tr>                <!-- ##### Annee 2019 #####-->                <?php                $i = 0;                foreach ($classementList2019 as $row) {                    if ($i % 2 == 0) {                        $classname = "evenRow";                    } else {                        $classname = "oddRow";                    }                    ?>                    <!-- on affiche toutes les infos des utilisateurs -->                    <tr style="<?php if($i == 0) { ?>                         border-top: 5px solid black !important; <?php } ?>                        transition: all 0.15s ease-in-out;"                         class="<?php if (isset($classname)) {                            echo $classname;                        } ?> collapse" id="collapse-res2019"                    >                        <td></td>                        <td><?php echo $row["annee"] ?></td>                        <td><?php echo $row["nom"] ?></td>                        <td><?php echo $row["theId"] ?></td>                        <td>                            <?php echo $row["victoires"]; ?> /                             <?php echo $row["nb_matchs"]; ?>                        </td>                        <td><?php echo $row["defaites"]; ?></td>                        <td><?php echo $row["nb_sets_gagnes"]; ?></td>                        <td><?php echo $row["nb_points_total"]; ?></td>                        <td><?php echo $row["id_equipe"]; ?></td>                        <td>                            <a href="edit.php?year=<?php echo $row["annee"] ?>&id=<?php echo $row["theId"]; ?>" class="link">                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'                                     src='../ressources/crud/edit.png'                                     width='15px' height='15px'/>                            </a>                        </td>                    </tr>                    <?php                    $i++;                }                ?>                <!-- ##### Annee 2018 #####-->                <?php                $i = 0;                foreach ($classementList2018 as $row) {                    if ($i % 2 == 0) {                        $classname = "evenRow";                    } else {                        $classname = "oddRow";                    }                    ?>                    <!-- on affiche toutes les infos des utilisateurs -->                    <tr style="<?php if($i == 0) { ?>                         border-top: 5px solid black !important; <?php } ?>                        transition: all 0.15s ease-in-out;"                         class="<?php if (isset($classname)) {                            echo $classname;                        } ?> collapse" id="collapse-res2018"                    >                        <td></td>                        <td><?php echo $row["annee"] ?></td>                        <td><?php echo $row["nom"] ?></td>                        <td><?php echo $row["theId"] ?></td>                        <td>                            <?php echo $row["victoires"]; ?> /                             <?php echo $row["nb_matchs"]; ?>                        </td>                        <td><?php echo $row["defaites"]; ?></td>                        <td><?php echo $row["nb_sets_gagnes"]; ?></td>                        <td><?php echo $row["nb_points_total"]; ?></td>                        <td><?php echo $row["id_equipe"]; ?></td>                        <td>                            <a href="edit.php?year=<?php echo $row["annee"] ?>&id=<?php echo $row["theId"]; ?>" class="link">                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'                                     src='../ressources/crud/edit.png'                                     width='15px' height='15px'/>                            </a>                        </td>                    </tr>                    <?php                    $i++;                }                ?>                <!-- ##### Annee 2020 #####-->                <?php                $i = 0;                foreach ($classementList2020 as $row) {                    if ($i % 2 == 0) {                        $classname = "evenRow";                    } else {                        $classname = "oddRow";                    }                    ?>                    <!-- on affiche toutes les infos des utilisateurs -->                    <tr style="<?php if($i == 0) { ?>                         border-top: 5px solid black !important; <?php } ?>                        transition: all 0.15s ease-in-out;"                         class="<?php if (isset($classname)) {                            echo $classname;                        } ?> collapse" id="collapse-res2020"                    >                        <td></td>                        <td><?php echo $row["annee"] ?></td>                        <td><?php echo $row["nom"] ?></td>                        <td><?php echo $row["theId"] ?></td>                        <td>                            <?php echo $row["victoires"]; ?> /                             <?php echo $row["nb_matchs"]; ?>                        </td>                        <td><?php echo $row["defaites"]; ?></td>                        <td><?php echo $row["nb_sets_gagnes"]; ?></td>                        <td><?php echo $row["nb_points_total"]; ?></td>                        <td><?php echo $row["id_equipe"]; ?></td>                        <td>                            <a href="edit.php?year=<?php echo $row["annee"] ?>&id=<?php echo $row["theId"]; ?>" class="link">                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'                                     src='../ressources/crud/edit.png'                                     width='15px' height='15px'/>                            </a>                        </td>                    </tr>                    <?php                    $i++;                }                ?>            </table>        </div>                <div style="width:1250px; margin: 50px auto 0">            <div class="message"><?php if (isset($message)) {                    echo $message;                } ?></div>            <div style="text-align: center;">                <a data-toggle="collapse" class="collapse-year btn btn-primary" href="#collapse-mat2020"                     role="button" aria-expanded="false" aria-controls="collapse-mat2020">                        Matchs Année 2020                </a>                <a data-toggle="collapse" class="collapse-year btn btn-primary" href="#collapse-mat2019"                     role="button" aria-expanded="false" aria-controls="collapse-mat2019">                        Matchs Année 2019                </a>                            <a data-toggle="collapse" class="collapse-year btn btn-primary" href="#collapse-mat2018"                     role="button" aria-expanded="false" aria-controls="collapse-mat2018">                        Matchs Année 2018                </a>            </div>             <div style="text-align: right; padding-bottom:5px;">                <a href="addM.php" class="link">                    <img alt='Add' title='Ajouter' src='../ressources/crud/add.png'                         width='25px' height='25px'>Ajouter                </a>            </div>            <table style="width: 1250px" border="0"                   aria-describedby="listes matchs" class="tblListForm">                <tr style="display: none;">                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                    <th scope="col"></th>                </tr>                <tr class="listheader">                    <td></td>                    <td>Année</td>                    <td>Équipes</td>                    <td>Id</td>                    <td>Équipes Adverses</td>                    <td>Résultats</td>                    <td>Sets</td>                    <td>Scores</td>                    <td>Points</td>                    <td>Pénalités</td>                    <td>Actions</td>                </tr>                <!-- ##### Annee 2019 #####-->                <?php                $i = 0;                foreach ($matchList2019 as $row) {                    if ($i % 2 == 0) {                        $classname = "evenRow";                    } else {                        $classname = "oddRow";                    }                    ?>                    <!-- on affiche toutes les infos des utilisateurs -->                    <tr style="<?php if($i == 5*0 || $i == 5*1 || $i == 5*2 || $i == 5*3 || $i == 5*4                        || $i == 5*5 || $i == 5*6 || $i == 5*7 || $i == 5*8 || $i == 5*9 || $i == 5*10) { ?>                         border-top: 5px solid black !important <?php } ?>"                         class="<?php if (isset($classname)) {                            echo $classname;                        } ?> collapse" id="collapse-mat2019"                    >                        <td></td>                        <td><?php echo $row["annee"] ?></td>                        <td><?php echo $row["nom"] ?></td>                        <td><?php echo $row["theId"] ?></td>                        <td><?php echo $row["id_equipe2"] ?></td>                        <td><?php echo $row["resultat"]; ?></td>                        <td><?php echo $row["sets"]; ?></td>                        <td><?php echo $row["scores"]; ?></td>                        <td><?php echo $row["points"]; ?></td>                        <td><?php echo $row["penalites"]; ?></td>                        <td>                            <a href="editM.php?year=<?php echo $row["annee"] ?>&id=<?php echo $row["myId"]; ?>" class="link">                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'                                     src='../ressources/crud/edit.png'                                     width='15px' height='15px'/>                            </a>                        </td>                    </tr>                    <?php                    $i++;                }                ?>                <!-- ##### Annee 2018 #####-->                <?php                $i = 0;                foreach ($matchList2018 as $row) {                    if ($i % 2 == 0) {                        $classname = "evenRow";                    } else {                        $classname = "oddRow";                    }                    ?>                    <!-- on affiche toutes les infos des utilisateurs -->                    <tr style="<?php if($i == 8*0 || $i == 8*1 || $i == 8*2 || $i == 8*3 || $i == 8*4                        || $i == 8*5 || $i == 8*6 || $i == 8*7 || $i == 8*8 || $i == 8*9 || $i == 8*10) { ?>                         border-top: 5px solid black !important <?php } ?>"                         class="<?php if (isset($classname)) {                            echo $classname;                        } ?> collapse" id="collapse-mat2018"                    >                        <td></td>                        <td><?php echo $row["annee"] ?></td>                        <td><?php echo $row["nom"] ?></td>                        <td><?php echo $row["theId"] ?></td>                        <td><?php echo $row["id_equipe2"] ?></td>                        <td><?php echo $row["resultat"]; ?></td>                        <td><?php echo $row["sets"]; ?></td>                        <td><?php echo $row["scores"]; ?></td>                        <td><?php echo $row["points"]; ?></td>                        <td><?php echo $row["penalites"]; ?></td>                        <td>                            <a href="editM.php?year=<?php echo $row["annee"] ?>&id=<?php echo $row["myId"]; ?>" class="link">                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'                                     src='../ressources/crud/edit.png'                                     width='15px' height='15px'/>                            </a>                        </td>                    </tr>                    <?php                    $i++;                }                ?>                <!-- ##### Annee 2020 #####-->                <?php                $i = 0;                foreach ($matchList2020 as $row) {                    if ($i % 2 == 0) {                        $classname = "evenRow";                    } else {                        $classname = "oddRow";                    }                    ?>                    <!-- on affiche toutes les infos des utilisateurs -->                    <tr style="<?php if($i == 8*0 || $i == 8*1 || $i == 8*2 || $i == 8*3 || $i == 8*4                        || $i == 8*5 || $i == 8*6 || $i == 8*7 || $i == 8*8 || $i == 8*9 || $i == 8*10) { ?>                         border-top: 5px solid black !important <?php } ?>"                         class="<?php if (isset($classname)) {                            echo $classname;                        } ?> collapse" id="collapse-mat2020"                    >                        <td></td>                        <td><?php echo $row["annee"] ?></td>                        <td><?php echo $row["nom"] ?></td>                        <td><?php echo $row["theId"] ?></td>                        <td><?php echo $row["id_equipe2"] ?></td>                        <td><?php echo $row["resultat"]; ?></td>                        <td><?php echo $row["sets"]; ?></td>                        <td><?php echo $row["scores"]; ?></td>                        <td><?php echo $row["points"]; ?></td>                        <td><?php echo $row["penalites"]; ?></td>                        <td>                            <a href="editM.php?year=<?php echo $row["annee"] ?>&id=<?php echo $row["myId"]; ?>" class="link">                                <img style="margin: 0 auto;" alt='Edit' title='Modifier'                                     src='../ressources/crud/edit.png'                                     width='15px' height='15px'/>                            </a>                        </td>                    </tr>                    <?php                    $i++;                }                ?>            </table>        </div>        <a style="display: flex; justify-content: center; width: 250px; margin: 100px auto 0;"             class="btn btn-primary" href="../resultats.php?year=<?php echo date('Y'); ?>">            Retour au classement        </a>    </form></div>