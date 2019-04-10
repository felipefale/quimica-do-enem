<?php require('header.php'); ?>
	
	<section class="contato section-padding">
		<div class="container">
			<h2>Contato</h2>
			<div class="row flex-column">
				<p>Antes de entrar em contato conosco, veja antes nossa página de <a href="ajuda.php">AJUDA</a> lá temos as principais dúvidas em relação ao nosso curso online. </p>

				<p>Caso queira enviar sua mensagem basta utilizar o formulário abaixo. </p>

				<p>Contrate o professor Marco Viana para aulões e palestras: </p>
				<p><a href="mailto:contato@quimicadoenem.com.br">contato@quimicadoenem.com.br</a></p>

				<form action="">
					<div class="row">
						<div class="form-group col-md-6">
							<input type="text" class="form-control" name="nome" placeholder="Nome">
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" name="telefone" placeholder="Telefone">
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" name="assunto" placeholder="Assunto">
						</div>
						<div class="form-group col-md-12">
							<textarea name="mensagem" class="form-control" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
						</div>
						<div class="form-group col-md-12">
							<input type="submit" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	

<?php require('footer.php'); ?>