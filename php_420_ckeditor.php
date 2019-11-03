<?php 
	/////ckeditor///////
	<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

	
	//comprobar si se ha pulsado enviar
	if (isset($_REQUEST['enviar'])){
		$texto = $_REQUEST['mensaje'];
		require('fpdf/fpdf.php');
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->MultiCell(185, 10, $texto, 1, 'C', false);
		$pdf->Cell(100,50,'Bye bye world!');
		$pdf->Output();
	}
	

/////////////////////////////////////////////////////////////////////////////////////



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		label {
			width: 120px;
			display: inline-block;
			
			
		}
		form {
			background-color: lightgrey;
			border: 2px solid yellow;
			box-shadow: 1px 3px black;
			width: 400px;
			height: 200px;
		}
	</style>
</head>
<body>
	<form method="post" name="formulario" enctype="multipart/form-data">
		<textarea  name="mensaje"></textarea>
		<input type="submit" name="enviar">
	</form>
</body>
</html>