<style>
  body {
    background: none;
  }

  #loading {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background: gray url('ressources/original.gif') no-repeat center center;
    color: white;
    opacity: 1;
    transition: 0.5s;
    visibility: visible;
  }

  #loading.hidden {
    opacity: 0;
    visibility: hidden;
  }

  #loading .loader {
    align-items: center;
    height: 100vh;
    margin-top: 200px;
  }

  #loading .loader div {
    width: 100px;
    height: 100px;
  }
</style>

<div class="homepage">
    <img class="desk" src="ressources/volley-home.png" width="1519" height="722" 
      alt="page d'accueil">
    <img class="mob" src="ressources/volley-home-mobile.png" width="375" height="812" 
      alt="page d'accueil">
  </div>

<a href="resultats.php?year=<?php echo date("Y"); ?>" class="btn btn-primary res-access">
  Accéder aux résultats
</a>

<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>

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
