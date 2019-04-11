<?php require('header.php'); ?>
<div class="section-padding trocar-curso">
	<div class="container">
			<h1>Escolha um curso</h1>
			<p>Você assinante do nosso site tem acesso completo a todos os nossos cursinhos, porém você só pode receber avisos e notificações de apenas um curso.</p>
			<p class="mb-4">Para se inscrever em um curso e receber as notificações basta clicar em qualquer um dos cursos abaixo.</p>
		<div class="row">
			
			<?php for ($i=0; $i < 8; $i++): ?>
				
			
			<article class="col-md-3 mb-4 mt-4">
				<a href="#" class="cursinhos_item">
					<img src="img/extensivo-2018-11.png" alt="" title="">
					<h2 class="py-2 text-center">Extensivo 2018</h2>
					<div class="p-1 cursinhos_item_info d-flex justify-content-between">
						<span><strong>23 Módulos</strong></span>
						<span><strong>93 Aulas</strong></span>
					</div>
				</a>
			</article>

			<?php endfor; ?>
		</div>
	</div>
</div>
<?php require('footer.php'); ?>