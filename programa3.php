<!DOCTYPE html>
<html>
<head>
	<title>Conoce el perú</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"></script>
</head>
<script type="text/javascript">
	function cambiarValor(){
		/*alert("se cambio");*/
		var seleccionado = document.getElementById("cbservicio").value;
		if(seleccionado==1){
			document.getElementById("txtcosto").value=200;
		}else{
			document.getElementById("txtcosto").value=50;
		}
	}
</script>
<body>
  <div class="container">
            <div class="card-body">
            <div style="background: #F2164B">	
				<form style="margin-left: 30% " name="formulario2" method="post" action="">
					<table>
						<tr>
							<td>
								<h1><center>Conoce el Perú</center></h1>
							</td>
						</tr>
						<tr>
							<td>
								<select class="btn btn-primary" name="cbservicio" id="cbservicio" onchange="cambiarValor();">
									<option value="0">Seleccione</option>
									<option value="1">Hospedaje</option>
									<option value="2">Movilidad</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" id="txtcosto" name="txtcosto" value="" placeholder="Costo Unitario" style="margin-top: 30px" required="required">
							</td>
						</tr>	
						<tr>
							<td>
								<input type="text" id="txtnumero" name="txtnumero" value="" placeholder="Cantidad Contratada" style="margin-top: 10px" required="required">
							</td>
						</tr>
						<tr>	
							<td>
								<input style="margin-top: 10px" class="btn btn-primary" type="submit" name="btnprocesar" value="CALCULAR">
							</td>
						</tr>
					</table>
				</form>
			</div>
		<div>
					<?php
						require_once "usaPrograma3.php";
						$ob = new Operacion2();
						$pa = $_POST["txtcosto"];
						$ca = $_POST["txtnumero"];
						$ob->CalcularPasaje($pa,$ca);
					?>
				</div>				
		</div>
	</div>		
</body>
</html>