<?php
session_start();
?>

<html>


<head>
  <meta charset="UTF-8">
  <title>Generatore di fatture</title>
  

	<!-- Import Google Icon Font -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Import materialize.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Let browser know website is optimized for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Custom CSS -->
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

	<section class="multi-step-form">

		<div class="container">
			<div class="row">
			<div class="col s12">
				<form action="creaFattura.php" method="post" enctype="multipart/form-data">
					<fieldset aria-label="Step One" tabindex="-1" id="step-1">
						<h4 class="center">Qualche dato su di te:</h4>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input id="azienda" name="azienda" type="text" class="validate">
								<label for="azienda">La tua azienda</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">business_center</i>
								<input id="iva" name="iva" type="text" class="validate">
								<label for="iva">La tua partita IVA</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">email</i>
								<input id="mail" name="mail" type="text" class="validate">
								<label for="mail">La tua email</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">phone</i>
								<input id="telefono" name="telefono" type="tel" class="validate">
								<label for="telefono">Il tuo telefono</label>
							</div>
							<div class="row center">
								<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-2">Avanti
								<i class="material-icons right">chevron_right</i>
								</button>
							</div>
						</div>
					</fieldset>

					<fieldset aria-label="Step Two" tabindex="-1" id="step-2">
						<h4 class="center">Qualche altro dato su di te:</h4>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">location_on</i>
								<input id="via" name="via" type="text" class="validate">
								<label for="via">Nome della via</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">markunread_mailbox</i>
								<input id="civico" name="civico" type="text" class="validate">
								<label for="civico">Numero civico</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">my_location</i>
								<input id="cap" name="cap" type="text" class="validate">
								<label for="cap">CAP</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">location_city</i>
								<input id="citta" name="citta" type="tel" class="validate">
								<label for="citta">Città</label>
							</div>
							<div class="row center">
							<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-1">Indietro<i class="material-icons left">chevron_left</i>
										</button>
										<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-3">Avanti<i class="material-icons right">chevron_right</i>
										</button>
							</div>
						</div>
					</fieldset>

					<fieldset aria-label="Step Three" tabindex="-1" id="step-3">
							<h4 class="center">Dati della fattura:</h4>
							<div class="row">
									<div class="row center">
								<div class="input-field col col s12 m6 offset-m3">
									<i class="material-icons prefix">receipt</i>
									<input id="numero_fattura" name="numero_fattura" type="text" class="validate">
									<label for="numero_fattura">Numero della fattura</label>
								</div>
								<div class="input-field col col s12 m6 offset-m3">
									<i class="material-icons prefix">date_range</i>
									<input id="data_fattura" name="data_fattura" type="text" class="validate">
									<label for="data_fattura">Data della fattura</label>
								</div>
									</div>
								
								<div class="row center">
										<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-2">Indietro<i class="material-icons left">chevron_left</i>
										</button>
										<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-4">Avanti<i class="material-icons right">chevron_right</i>
										</button>		
								</div>			
							</div>
						</fieldset>

					<fieldset aria-label="Step Four" tabindex="-1" id="step-4">
						<h4 class="center">Il tuo cliente:</h4>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input id="azienda_cliente" name="azienda_cliente" type="text" class="validate">
								<label for="azienda_cliente">Nome dell'azienda</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">business_center</i>
								<input id="iva_cliente" name="iva_cliente" type="text" class="validate">
								<label for="iva_cliente">Partita IVA</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">email</i>
								<input id="mail_cliente" name="mail_cliente" type="text" class="validate">
								<label for="mail_cliente">Email del cliente</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">phone</i>
								<input id="telefono_cliente" name="telefono_cliente" type="tel" class="validate">
								<label for="telefono_cliente">Telefono del cliente</label>
							</div>				
							<div class="row center">
									<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-3">Indietro<i class="material-icons left">chevron_left</i>
									</button>
									<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-5">Avanti<i class="material-icons right">chevron_right</i>
									</button>		
							</div>			
						</div>
					</fieldset>

					<fieldset aria-label="Step Five" tabindex="-1" id="step-5">
						<h4 class="center">Qualche altro dato sul tuo cliente:</h4>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">location_on</i>
								<input id="via_cliente" name="via_cliente" type="text" class="validate">
								<label for="via_cliente">Nome della via</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">markunread_mailbox</i>
								<input id="civico_cliente" name="civico_cliente" type="text" class="validate">
								<label for="civico_cliente">Numero civico</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">my_location</i>
								<input id="cap_cliente" name="cap_cliente" type="text" class="validate">
								<label for="cap_cliente">CAP</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">location_city</i>
								<input id="citta_cliente" name="citta_cliente" type="tel" class="validate">
								<label for="citta_cliente">Città</label>
							</div>
							<div class="row center">
							<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-4">Indietro<i class="material-icons left">chevron_left</i>
										</button>
										<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-6">Avanti<i class="material-icons right">chevron_right</i>
										</button>
							</div>
						</div>
					</fieldset>

					<fieldset aria-label="Step Six" tabindex="-1" id="step-6">
						<h4 class="center">Modalità di pagamento:</h4>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">credit_card</i>
								<input id="iban" name="iban" type="text" class="validate">
								<label for="iban">IBAN</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">account_balance</i>
								<input id="bic" name="bic" type="text" class="validate">
								<label for="bic">BIC/SWIFT</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">assignment_ind</i>
								<input id="intestatario" name="intestatario" type="text" class="validate">
								<label for="intestatario">Intestatario</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">short_text</i>
								<input id="causale" name="causale" type="tel" class="validate">
								<label for="causale">Causale</label>
							</div>
							
							<div class="row center">
									<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-5">Indietro<i class="material-icons left">chevron_left</i>
									</button>
									<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-7">Avanti<i class="material-icons right">chevron_right</i>
									</button>		
							</div>			
						</div>
					</fieldset>

					<fieldset aria-label="Step Seven" tabindex="-1" id="step-7">
							<h4 class="center">Lavori svolti</h4>
							<div class="row">
							<div id="sections">
							<div class="section">
							<!-- Righe da clonare -->
							<fieldset>
								<div class="input-field col s6">
									<i class="material-icons prefix">work</i>
									<input id="lavoro" name="lavoro[]" type="text" class="validate">
									<label for="lavoro">Descrizione</label>
								</div>
								<div class="input-field col s4">
									<i class="material-icons prefix">euro_symbol</i>
									<input id="importo" name="importo[]" type="text" class="validate">
									<label for="importo">Importo</label>
								</div>
								<div class="input-field col s2" style="text-align: center">
										<i class="material-icons prefix remove">cancel</i>
									</div>
							</fieldset>
							</div>
							</div>
							<div class="row center">
								<p><a href="#" class='addsection'>Aggiungi un altro lavoro</a></p>
							</div>
								
								<div class="row center">
										<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-6">Indietro<i class="material-icons left">chevron_left</i>
									</button>
									<button class="btn waves-effect waves-light btn-next" type="button" aria-controls="step-8">Avanti<i class="material-icons right">chevron_right</i>
									</button>			
								</div>			
							</div>
						</fieldset>

						<fieldset aria-label="Step Eight" tabindex="-1" id="step-8">
							<h4 class="center">Ci siamo quasi!</h4>
							<div class="row">
							<div class="col s12">
							<p class="center" style="padding-bottom: 2em">La tua fattura è pronta.</p>		
								<div class="row center">
										<button class="btn waves-effect waves-light btn-prev" type="button" aria-controls="step-7">Indietro<i class="material-icons left">chevron_left</i>
										</button>
										<button class="btn waves-effect waves-light" type="submit" name="submit">Scarica la fattura
										<i class="material-icons right">send</i>
										</button>			
								</div>			
							</div>
							</div>
						</fieldset>

						

				</form>
			</div>
			</div>	
		</div>
	
	</section>
	
	<!--
	<form action="#" method="post">
		
		<fieldset aria-label="Step One" tabindex="-1" id="step-1">
			<h3 class="heading-form">Qualche dato su di te:</h3>
			<p>
				<label for="first-name">Il tuo nome</label>
				<input class="form-control" type="text" name="first-name" id="first-name" required onkeyUp="document.getElementById('printchatbox').innerHTML = this.value">
			</p>
			<p>
				<label for="last-name">Il tuo cognome</label>
				<input class="form-control" type="text" name="last-name" id="last-name" required>
			</p>
			<p>
				<button class="btn btn-default btn-next" type="button" aria-controls="step-2">Avanti</button>
			</p>
		</fieldset>
		
		<fieldset aria-label="Step Two" tabindex="-1" id="step-2">
			<h2>Ciao <span class='printchatbox' id='printchatbox'></span>, è un piacere fare la tua conoscenza!<br/>Prima di continuare, puoi dirmi come posso ricontattarti?</h2>
			<p>
				<label for="email-address">Email Address</label>
				<input class="form-control" type="email" name="email-address" id="email-address" required>
			</p>
			<p>
				<label for="phone-number">Phone Number <span class="optional">(optional)</span></label>
				<input class="form-control" type="tel" name="phone-number" id="phone-number">
			</p>
			<p>
				<button class="btn btn-default btn-prev" type="button" aria-controls="step-1">Previous</button>
				<button class="btn btn-default btn-next" type="button" aria-controls="step-3">Next</button>
			</p>
		</fieldset>
		
		<fieldset aria-label="Step Three" tabindex="-1" id="step-3">
			<h2>Step Three</h2>
			<p>
				<label for="message"></label>
				<textarea class="form-control" rows="3" name="message" id="message" required></textarea>
			</p>
			<p>
				<button class="btn btn-success" type="submit">Submit</button> 
				<button class="btn btn-default btn-edit" type="button">Edit</button> 
				<button class="btn btn-danger" type="reset">Start Over</button>
			</p>
		</fieldset>
		
	</form>
-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_it.js'></script>

  

	<script  src="js/index.js"></script>
	<script src="js/clone_fieldset.js"></script>

<!-- Script per accordion -->
<script>
$(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>




</body>

</html>