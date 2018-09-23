<?php ob_start(); ?>

<?php
// control data sent with validation class !
  if($_POST) {
      require __DIR__ . '/../class/Validation.php';
      $no  = new Validation();

      $rules = array(
          'email' => 'email|required',
          'password' => 'required'
      );
      $validation = new Validation();

      if($validation->validate($_POST, $rules) == true) {
          var_dump($_POST);
      }
      else {
          echo '<ul>';
          foreach ($validation->errors as $error) {
              echo '<li>' . $error . '</li>';
          }
          echo '</ul>';
      }
  }
?>


    <h3>Formulaire d'inscription</h3>

    <div class="row">
        <form method="post" action="#" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <input id="confirmemail" type="email" class="validate" name="confirmemail">
                    <label for="confirmemail">Confirmer email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="pseudo" type="text" class="validate" name="pseudo">
                    <label for="pseudo">Pseudo</label>
                </div>
            </div>

            Votre mot de passe doit contenir minimum 6 caractères avec :
            <ul>
                <li>1 Majuscule</li>
                <li>1 Caractère spécial [?,(,!,),/,$,@,%,...]</li>
                <li>1 Chiffre</li>
            </ul>
            <div class="row">
                <div class="input-field col s6">
                    <input id="pass" type="password" class="validate" name="pass">
                    <label for="pass">Mot de passe</label>
                </div>

                <div class="input-field col s6">
                    <input id="confirmpass" type="password" class="validate" name="confirmpass">
                    <label for="confirmpass">Confirmer mot de passe</label>
                </div>
            </div>
            <input type="submit" value="OK">
        </form>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>