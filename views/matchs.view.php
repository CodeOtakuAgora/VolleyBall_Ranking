<div style="padding: 0 50px;" class="content">
	<?php foreach ($team_matchs1 as $value) { ?>
		<h2 style="
		    text-align: center; font-weight: bold; margin-bottom: 20px;
		    font-size: 2.5rem !important; text-align: center;
		  ">
            <?php echo $value['nom']; ?>
            <?php $nomEquipe = $value['nom'];  ?>
        </h2>
	<?php break; 
    } ?>

    <div class="table-responsive table-responsive-match" style="margin-bottom: 50px">
        <table class="table" aria-describedby="résultat volley78">
            <thead class="thead-dark">
            	 <tr>
                    <th scope="col"></th>
                    <th scope="col">Identifiants</th>
                    <th scope="col">Équipes</th>
                    <th scope="col">Résultats</th>
                    <th scope="col">Sets</th>
                    <th scope="col">Scores</th>
                    <th scope="col">Points</th>
                    <th scope="col">Pénalités</th>
                </tr>
            </thead>
            <tbody>
            	<?php foreach ($team_matchs2 as $key) {  ?>
            	<tr>
            		<td></td>
            		<td><?php echo $key['id_equipe1']; ?></td>
            		<td>
                        <script>
                            var h = document.getElementsByTagName('h2');
                            document.write(h[0].innerText);
                        </script>
                        VS
                        <?php echo $key['nom']; ?> 
                    </td>

                    <?php $resultat = $key['resultat']; ?>
            		
            		<?php if ($resultat == "Victoire") { ?>
            			<td style="background-color: green"><?php echo $resultat ?></td>
            		<?php } ?>
        
            		<?php if ($resultat == "Défaite") { ?>
	            		<td style="background-color: red;"><?php echo $resultat ?></td>
					<?php } ?>

            		<td><?php echo $key['sets']; ?></td>
            		<td><?php echo $key['scores']; ?></td>
            		<td><?php echo $key['points']; ?></td>
            		<td><?php echo $key['penalites']; ?></td>
            	</tr>
            	<?php } ?>
            	
            	    <tr class="hide">
                        <td></td><td></td><td></td><td></td><td></td><td></td>
                        <td></td><td></td>
                    </tr>
                    
            	</tbody>
        </table>
    </div>
</div>



<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>