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
  .arrow {
    border: solid white;
    border-width: 0 3px 3px 0;
    padding: 10px;
    cursor: pointer;
    z-index: 9;
    animation: bounce 1s infinite;
  }
  .bottom {
    transform: rotate(40deg);
    position: absolute;
    left: calc(50% - 15px);
    bottom: 15%;
  }
 
  @keyframes bounce {
    0%, 100% {
      transform: translateY(10px) rotate(40deg);
    }
    25% {
      transform: translateY(50px) rotate(40deg);
    }
  }
</style>

<div class="homepage">
    <img class="desk" src="ressources/background.jpg" width="1100" height="619" 
      alt="page d'accueil">
    <img class="mob" src="ressources/background-mobile.jpg" width="699" height="618" 
      alt="page d'accueil">
  </div>

<a href="#redirection" title="voir plus" class="arrow bottom"></a>

<a href="resultats.php?year=<?php echo date('Y', strtotime('-1 year')); ?>" 
  class="btn btn-primary res-access" id="redirection">
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

  $(function(){
    $(".homepage img").on("click", function(event){
      $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    });
  })
</script>
