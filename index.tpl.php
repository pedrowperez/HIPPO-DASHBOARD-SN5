<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title> TESTE </title>
			<style>
				#fmrLogin {
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-content: center;
					border: 1px solid grey;
					border-radius: 3px;
					padding: 30px;
					
				}
				#fmrLogin input {
					margin-bottom: 5px;
					
					border-radius: 2px;
				}
				#fmrLogin button {
					margin-top: 10px;
				}
				section {
					max-width: 500px;
					margin: 0 auto;
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					
									}
			</style>
		</head>
		<body>
			<section>
			<p> <?php echo $msg; ?> </p>
			<form id="fmrLogin" method="POST">
				<label> LOGIN </label>
				<input name="login" type="text">
				<label> SENHA </label>
				<input name="senha" type="password">
				<button type="submit"> ENTRAR </button>
			</form>
			</section>
		</body>
	</html>