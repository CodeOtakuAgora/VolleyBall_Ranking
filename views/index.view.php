<style>
  body {
    background: none;
  }
</style>

<div class="homepage">
    <img src="ressources/volley-home.png" width="1519" height="722" 
      alt="page d'accueil">
  </div>

<a href="resultats.php" class="btn btn-primary res-access">
  Accéder aux résultats
</a>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script>
  $( document ).ready(function() {
    $('.homepage img').first().hide();

    $(function() {
      setTimeout(function() {
        $('.homepage img').first().show('slow', function showNextOne() {
          $(this).next('.homepage img').show('slow', showNextOne);
        });    
      }), (3000);
    });
  });
</script>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>