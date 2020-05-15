<style>
    td {
        padding: 10px;
    }
</style>


<div class="content" style="padding: 0 50px;">
    <form name="frmUser" method="post">
        <div style="width:1000px; margin: 0 auto">
            <div class="message"><?php if (isset($message)) {
                    echo $message;
                } ?></div>
            <table style="width: 1150px" border="0" 
                aria-describedby="listes résultats" class="tblListForm">
                <tr style="display: none;">
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                <tr class="listheader">
                    <td></td>
                    <td>Équipes</td>
                    <td>Id</td>
                    <td>Victoires</td>
                    <td>Défaites</td>
                    <td>Sets Gagnés</td>
                    <td>Points Total</td>
                    <td>Id Équipe</td>
                    <td>Actions</td>

                </tr>
                <?php
                    $i = 0;
                    foreach ($classementList as $row) {
                        if ($i % 2 == 0) {
                            $classname = "evenRow";
                        }
                        else {
                            $classname = "oddRow";
                        }
                        ?>
                        <!-- on affiche toutes les infos des utilisateurs -->
                        <tr class="
                        <?php 
                            if (isset($classname)) {
                                echo $classname; 
                            } 
                        ?>"
                        >
                            <td></td>
                            <td><?php echo $row["nom"] ?></td>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["victoires"]; ?></td>
                            <td><?php echo $row["defaites"]; ?></td>
                            <td><?php echo $row["nb_sets_gagnes"]; ?></td>
                            <td><?php echo $row["nb_points_total"]; ?></td>
                            <td><?php echo $row["id_equipe"]; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row["id"]; ?>" class="link">
                                    <img style="margin: 0 auto;" alt='Edit'title='Edit' 
                                        src='../ressources/crud/edit.png' 
                                        width='15px' height='15px'/>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                ?>
            </table></div>

                </form>
</div>