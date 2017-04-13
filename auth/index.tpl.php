<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="http://localhost/controleUser/css/style.css" rel="stylesheet">
	<link href="http://wesellco.com/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body class="align">
	
    <div class="grid">
	<?php 
	if(isset($erro))
		echo "<p class='text--center' style='color: red;font-weight: 500; padding: 10px; border: 1px solid grey; border-radius: 3px;'> $erro </p>";
	if(isset($sucesso))
		echo "<p class='text--center' style='color: green; font-weight: 700;padding: 10px; border: 1px solid grey; border-radius: 3px;'> $sucesso </p>";
	?>
      <form method="POST" class="form login">

        <div class="form__field">
          <label for="login__username"><i class="fa fa-user fa-1x"></i></label>
          <input id="login__username" type="text" name="username" class="form__input" placeholder="LOGIN" required>
        </div>

        <div class="form__field">
          <label for="login__password"><i class="fa fa-unlock-alt fa-1x"></i></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="SENHA" required>
        </div>

        <div class="form__field">
          <input type="submit" value="ENTRAR">
        </div>

      </form>
      <p class="text--center"> Não é usuário? <a href="#">Cadastre-se agora! </a></p>
    </div>
    
  
  </body>

</html>