<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<title>Login</title>
</head>

<body>
<form action="session1.php" method="post">

<h1>Login de Acesso </h1>
<h2>Insira os dados com formato correto!! </h2>

<style>
h1 {
	font-family:Arial;
	font-size:30pt;
	color:blue;
	text-shadow:2px 2px 2px red;	
}
h2 {
	font-family:Arial;
	font-size:15pt;
	color:red;
	text-shadow:2px 2px 2px green;	
}
#blink {
        font-size: 15px;
        font-weight: bold;
        color: black;
        transition: 0.5s;
}
.container {
	display:inline-block;
}
</style>

<p> </p>
<b>Utilizador:* </b><br/>
<input type="text" size ="25" name="utilizador"><br/>
<p> </p>
<b>Password:* </b><br/>
<input type="password" size ="25" name="password"><br/>
<p> </p>
<p id="blink">* Preenchimento obrigatório.</p>
    <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1500);
    </script>


<div class="container">    	
<input type="submit" class="btn btn-success" value="Submeter" >
<input type="reset" class="btn btn-success" value="Limpar"> 
 </div>

</form>
</body>
</html>

