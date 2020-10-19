<div class="homepage">
    <img class="desk" src="ressources/background.jpg" width="1100" height="619"
      alt="page d'accueil">
    <img class="mob" src="ressources/background-mobile.jpg" width="699" height="618" 
      alt="page d'accueil">
      <div style="position: absolute; left: -9000px;">
        <h2>Bienvenue sur mon site de classement des équipes de Volley-Ball du 78</h2>
        <p>Ici vous pourrez retrouver les classements et les résultats de tous les matchs par saison du championnat loisir du 78</p>
      </div>
</div>

<a href="#redirection" title="voir plus" class="arrow bottom"></a>

<iframe src="views/graph.view.php" frameborder="0" width="100%" height="100%"></iframe>

<a href="resultats.php?year=<?php echo date('Y'); ?>" 
  class="btn btn-primary res-access" id="redirection">
  Accéder aux résultats
</a>

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

  $(function(){
    $(".homepage img").on("click", function(event){
      $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    });
  })
</script>


<!-- on inclut le footer du site tout à la fin car le but est de le charger en dernier-->
<?php require_once('include/footer.php'); ?>