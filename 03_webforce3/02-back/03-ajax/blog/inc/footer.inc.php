 <!-- Modal Inscription-->
    <div class="modal fade" id="exampleModalInscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="form_inscription">
              <input type="text" class="form-control" name="pseudo" id="pseudo_inscription" placeholder="Pseudo..."><br>
              <input type="text" class="form-control" name="mdp" id="mdp_inscription" placeholder="Mot de passe..."><br>

              <input type="email" class="form-control" name="email" id="email_inscription" placeholder="Email..."><br>
              <input type="text" class="form-control" name="avatar" id="avatar_inscription" placeholder="avatar...">
              <small class="text-danger">Veuillez inscérer une url valide pour l'avatar</small><br><br>

              <button type="submit" class="btn btn-primary w-100 mt-3" name="validation" id="validation_inscription" >S'inscrire</button>
            </form>
          </div>
          <div class="modal-footer" id="message_inscription">
            <p>Bienvenue</p>
          </div>
        </div>
      </div>
    </div>
 <!-- Modal Connexion-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" id="form">
              <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo..."><br>
              <input type="text" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe..."><br>

              <button type="submit" class="btn btn-info w-100 mt-3" name="validation" id="validation" >Se connecter</button>
            </form>
          </div>
          <div class="modal-footer" id="message">
            <p>Bienvenue</p>
          </div>
        </div>
      </div>
    </div>


 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
