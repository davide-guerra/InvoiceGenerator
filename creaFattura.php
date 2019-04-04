<?php
require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

ob_start();

$totale_provvisorio = array_sum($_POST['importo']);
$calcolo_iva = $totale_provvisorio / 100 *22;
$totale_reale = $totale_provvisorio + $calcolo_iva;
$html ='
<!DOCTYPE html>
<html>
<head>
	<title>La tua fattura</title>
	<style>
		*
		{
			margin:0;
			padding:0;
			font-family:Arial;
			font-size:10pt;
			color:#000;
		}
		body
		{
			width:100%;
			font-family:Arial;
			font-size:10pt;
			margin:0;
			padding:0;
		}
		
		p
		{
			margin:0;
			padding:0;
		}
		
		#wrapper
		{
			width:180mm;
			margin:0 15mm;
		}
		
		.page
		{
			height:297mm;
			width:210mm;
			page-break-after:always;
		}

		table
		{
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			border-spacing:0;
			border-collapse: collapse; 
			
		}
		
		table td 
		{
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding: 2mm;
		}
		
		table.heading
		{
			height:50mm;
		}
		
		h1.heading
		{
			font-size:14pt;
			color:#000;
			font-weight:normal;
		}
		
		h2.heading
		{
			font-size:9pt;
			color:#000;
			font-weight:normal;
		}
		
		hr
		{
			color:#ccc;
			background:#ccc;
		}
		
		#invoice_body
		{
			height: 149mm;
		}
		
		#invoice_body , #invoice_total
		{	
			width:100%;
		}
		#invoice_body table , #invoice_total table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
	
			border-spacing:0;
			border-collapse: collapse; 
			
			margin-top:5mm;
		}
		
		#invoice_body table td , #invoice_total table td
		{
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding:2mm 0;
		}
		
		#invoice_body table td.mono  , #invoice_total table td.mono
		{
			font-family:monospace;
			text-align:right;
			padding-right:3mm;
			font-size:10pt;
		}
		
		#footer
		{	
			width:180mm;
			margin:0 15mm;
			padding-bottom:3mm;
		}
		#footer table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			background:#eee;
			
			border-spacing:0;
			border-collapse: collapse; 
		}
		#footer table td
		{
			width:25%;
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
		}
	</style>
</head>
<body>
<div id="wrapper">
    
    <p style="text-align:center; font-weight:bold; padding-top:5mm;">Fattura</p>
    <br />
    <table class="heading" style="width:100%;">
    	<tr>
    		<td style="width:80mm;">
    			<h1 class="heading">' .$_POST['azienda']. '</h1>
				<h2 class="heading">
					P. IVA: ' .$_POST['iva']. '<br />
					' .$_POST['via']. ', ' .$_POST['civico']. '<br />'
					 .$_POST['cap']. ' - ' .$_POST['citta']. '<br />
					E-mail: ' .$_POST['mail']. '<br />
					Telefono: ' .$_POST['telefono']. '
				</h2>
			</td>
			<td rowspan="2" valign="top" align="right" style="padding:3mm;">
				<table>
					<tr><td>Fattura n: </td><td>' .$_POST['numero_fattura']. '</td></tr>
					<tr><td>Data : </td><td>' .$_POST['data_fattura']. '</td></tr>
				</table>
			</td>
		</tr>
    	<tr>
    		<td>
    			<b>Cliente:</b> :<br />
					' .$_POST['azienda_cliente']. '<br />
					P. IVA: ' .$_POST['iva_cliente']. '<br />'
					.$_POST['via_cliente']. ', ' .$_POST['civico_cliente']. '<br />'
					 .$_POST['cap_cliente']. ' - ' .$_POST['citta_cliente']. '<br />
					E-mail: ' .$_POST['mail_cliente']. '<br />
					Telefono: ' .$_POST['telefono_cliente']. '
    		</td>
    	</tr>
    </table>
		
		
	<div id="content">
		
		<div id="invoice_body">
			<table>
			<tr style="background:#eee;">
				<td><b>Descrizione</b></td>
				<td style="width:15%;"><b>Costo</b></td>
				<td style="width:15%;"><b>Totale</b></td>
			</tr>
			</table>
			
			<table>';

			echo $html;

			$descrizione = $_POST['lavoro'];
        $euro = $_POST['importo'];      
        foreach( $descrizione as $key => $n ) {
					echo '<tr>
					<td style="text-align:left; padding-left:10px;">' .$n. ':</td>
					<td style="width:15%;" class="mono">' .number_format((float)$euro[$key], 2, '.', ''). ' €</td>
					<td style="width:15%;" class="mono">' .number_format((float)$euro[$key], 2, '.', ''). ' €</td>
					</tr>';
				}

		$html2 = '
			
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		
		<tr>
			<td></td>
			<td>Totale provvisorio:</td>
			<td class="mono">' .number_format((float)$totale_provvisorio, 2, '.', ''). ' €</td>
		</tr>
		<tr>
			<td></td>
			<td>Iva 22%:</td>
			<td class="mono">' .number_format((float)$calcolo_iva, 2, '.', ''). ' €</td>
			</tr>
		<tr>
			<td></td>
			<td><b>Tot dovuto</b></td>
			<td class="mono">' .number_format((float)$totale_reale, 2, '.', ''). ' €</td>
		</tr>
	</table>
	</div>
	
	<br />
	
	<table style="width:100%; height:35mm;">
		<tr>
			<td style="width:65%;" valign="top">
				Informazioni per il pagamento:<br />
				Bonifico bancario<br />
				Intestatario: <b>' .$_POST['intestatario']. '</b><br />
				Iban: <b>' .$_POST['iban']. '</b><br />
				BIC/SWIFT: <b>' .$_POST['bic']. '</b><br />
			</td>
			<td>
			<div id="box">
				Causale:<br />'
				.$_POST['causale']. '
			</div>
			</td>
		</tr>
	</table>
</div>

<br />

</div>



</body>
</html>
';
echo $html2;
$html_totale = ob_get_contents();
ob_end_clean();			
    
    
    

$mpdf->WriteHTML($html_totale);
$fileName = 'fattura-' . $_POST['numero_fattura'] . '.pdf';
$mpdf->Output($fileName, 'D');

session_unset(); 

// destroy the session 
session_destroy(); 
?>
