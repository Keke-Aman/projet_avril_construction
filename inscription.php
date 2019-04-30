<!DOCTYPE html>
<html>
<head>        
		<title>Tool's Keke</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                
        <link class="icon" rel="shortcut icon" href="images/couv3.jpg" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
</head>
<style type="text/css">		
body
{
	margin: 0;
	padding: 0;
	font-family:sans-serif;
	background:url(../img/un.jpg);
	background-size:cover;
}
.box
{
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 40px;
	background: rgba(0,0,0,.8);
	box-sizing: border-box;
	box-shadow: 0 15px 25px	rgba(0,0,0,.8) ;
	border-radius: 10px;
}

.box h2
{
	margin: 0 0 30px;
	padding: 0;
	color: #ffff;
	text-align: center; 

}

.box .Boxright{
	margin-left: 438px;
	width: 100%;
	margin-top: -276px;
}

.box .inputBox
{
	position: relative;
}
.box .inputBox input
{
	width: 100%;
	padding: 10px 0;
	letter-spacing: 1px;
	font-size: 15px;
	color: #fff;
	margin-bottom: 30px;
	border: none;
	border-bottom : 1px solid #fff;
	outline: none;
	background: transparent;
}

.box .inputBox label
{
	position: absolute;
	top: -15px;
	left: 0;
	padding: 0px;
	font-size: 15px;
	color: #fff;
	pointer-events: none;
	transition: .5s;
}

.box .inputBox input:focus ~ label
{
	top: -15px;
	left: 0;
	color: #03a9f4;
	font-size: 12px;
}

.box input[type="submit"]
{
	background: transparent;
	border:none;
	color: #fff;
	background: #03a9f4;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}
.box input[type="reset"]
{
	background: transparent;
	border:none;
	color: #fff;
	background: #03a9f4;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
}

		</style>
<body>


	<div class="box">
			<h2>COMMANDER</h2>
			<form method="POST" action="insertbd.php">
				
				<div class="inputBox">
					<input type="text" name="name" required>
					<label>Nom de l'Outil</label>	
				</div>

				<div class="inputBox">
					<input type="text" name="categories" required>
					<label>Catégorie</label>	
				</div>

				<div class="inputBox">
					<input type="number" name="quantite" required>
					<label>Quantité</label>	
				</div>

				<div class="inputBox">
					<input type="text" name="client" required>
					<label>Nom du client</label>	
				</div>

				<div class="inputBox">
					<input type="text" name="contact" required>
					<label>Contact</label>	
				</div>

				
				
				<input type="submit" name="connexion" value="Commander">
				<input type="reset" name="annuler" value="Annuler">
			</form>
		</div>

</body>
</html>