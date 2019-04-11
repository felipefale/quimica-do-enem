<?php require('header.php'); ?>

<section class="section-padding meu-perfil">
	<div class="container">
		<div class="row flex-column">
			<h1>Meu Perfil</h1>
			<p>Sempre que precisar, atualize seus dados.</p>

			<form action="">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Marco Viana">
						</div>
						<div class="form-group">
							<select id="estado" name="estado" class="form-control">
							    <option value="AC">Acre</option>
							    <option value="AL">Alagoas</option>
							    <option value="AP">Amapá</option>
							    <option value="AM">Amazonas</option>
							    <option value="BA">Bahia</option>
							    <option value="CE">Ceará</option>
							    <option value="DF">Distrito Federal</option>
							    <option value="ES">Espírito Santo</option>
							    <option value="GO">Goiás</option>
							    <option value="MA">Maranhão</option>
							    <option value="MT">Mato Grosso</option>
							    <option value="MS">Mato Grosso do Sul</option>
							    <option value="MG">Minas Gerais</option>
							    <option value="PA">Pará</option>
							    <option value="PB">Paraíba</option>
							    <option value="PR">Paraná</option>
							    <option value="PE">Pernambuco</option>
							    <option value="PI">Piauí</option>
							    <option value="RJ">Rio de Janeiro</option>
							    <option value="RN">Rio Grande do Norte</option>
							    <option value="RS">Rio Grande do Sul</option>
							    <option value="RO">Rondônia</option>
							    <option value="RR">Roraima</option>
							    <option value="SC">Santa Catarina</option>
							    <option value="SP">São Paulo</option>
							    <option value="SE">Sergipe</option>
							    <option value="TO">Tocantins</option>
							    <option value="ES">Estrangeiro</option>
							</select>
						</div>

						<div class="form-group">
							<input type="password" placeholder="Nova Senha *" class="form-control">
						</div>
						<p class="alert alert-light" role="alert">*Caso queira alterar sua senha preencha os campos 'Nova Senha' e 'Confirmar Nova Senha'. </p>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" name="cidade" placeholder="João Pessoa" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" placeholder="Confirmar Nova Senha *" class="form-control">
						</div>
					</div>
					<input type="submit" value="Atualizar" class="btn btn-secondary">
				</div>
			</form>
		</div>
	</div>
</section>
<?php require('footer.php'); ?>