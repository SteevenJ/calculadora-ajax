<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="assets/jQuery/jquery-3.3.1.min.js"></script>

	<script type="text/javascript">
		function sumar() {
			var numero1 = $("#numero1").val();
			var numero2 = $("#numero2").val();

			var valores = {
				'operacion' : 'suma',
				"numero1" : numero1,
				"numero2" : numero2
			};

			$.ajax({
				data: valores,
				url: "calculadora.php",
				type: "post",
				success : function (response){
					$("#resultado").html(response);
				} 
			});
		}	

		function restar() {
			var numero1 = $("#numero1").val();
			var numero2 = $("#numero2").val();

			var valores = {
				'operacion' : 'resta',
				"numero1" : numero1,
				"numero2" : numero2
			};

			$.ajax({
				data: valores,
				url: "calculadora.php",
				type: "post",
				success : function (response){
					$("#resultado").html(response);
				} 
			});
		}	

	</script>
</head>
<body>
	<label for="numero1">Numero 1</label><br>
	<input type="text" name="numero1" id="numero1">
	<br><br>

	<label for="numero2">Numero 2</label><br>
	<input type="text" name="numero2" id="numero2">
	<br><br>

	<button type="" onclick="sumar();">Sumar</button>
	<button type="" onclick="restar();">Restar</button>
	
	<br><br>
	<div id="resultado">

	</div>
</body>
</html>