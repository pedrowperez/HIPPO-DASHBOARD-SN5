<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../menu/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	
  </head>

  <body class="align">
	
    <div class="grid">
	<img src="../menu/img/hippo-logo.png" style="width: 280px;">
	<?php 
	if(isset($erro))
		echo "<p class='text--center' style='color: red;font-weight: 500;padding: 10px;text-transform: uppercase;border: 1px solid #ef4949;border-radius: 3px;font-weight: 700;'> $erro </p>";
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
          <button class='btn btn1 btn-lg' type="submit"> ENTRAR </button>
        </div>

      </form>
    </div>
    
  
  </body>

</html>
