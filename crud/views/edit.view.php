<style>

label { display: block;padding: 0 100px 0 0; font-size: 18px; }

td { padding: 10px;  }

</style>





<div class="content">



    <form name="frmUser" method="post" action="">

        <div style="width:500px;">

            <div class="message"><?php if (isset($message)) {

                    echo $message;

                } ?></div>

            <div style="padding-bottom:5px;">

                <a style="display: flex; justify-content: flex-end; align-items: center;"    href="index.php" class="link">

                    <img style="display: block; margin-right: 5px;" alt='List' title='List'

                        src='../ressources/crud/list.png' width='15px' height='15px'/> 

                            List User

                </a>

            </div>

            <table border="0" style="width: 500px; text-align: center;" 

                aria-describedby="édition résultats" class="tblSaveForm">

                <tr style="display: none;">

                    <th scope="col"></th>

                </tr>

                <tr class="tableheader">

                    <td colspan="2">Edit User</td>

                </tr>

                <tr>

                    <td><label>Victoires</label></td>

                    <td>

                        <input type="text" name="victoires" class="txtField" value="<?php echo $user->victoires; ?>">

                    </td>

                </tr>

                <tr>

                    <td><label>Defaites</label></td>

                    <td>

                        <input type="text" name="defaites" class="txtField" value="<?php echo $user->defaites; ?>">

                    </td>

                </tr>

                <tr>

                    <td><label style="width: inherit; padding: 0;">Sets Gagnés</label></td>

                    <td>

                        <input type="text" name="nb_sets_gagnes" class="txtField" 

                            value="<?php echo $user->nb_sets_gagnes; ?>">

                    </td>

                </tr>

                <tr>

                    <td><label style="width: inherit; padding: 0;">Points Total</label></td>

                    <td>

                        <input type="text" name="nb_points_total" class="txtField" 

                            value="<?php echo $user->nb_points_total; ?>">

                    </td>

                </tr>

                <tr>

                    <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>

                </tr>

            </table>

        </div>

    </form>



</div>