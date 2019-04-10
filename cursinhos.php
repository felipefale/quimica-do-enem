<?php require('header.php'); ?>

<section class="cursinhos section-padding">
	<div class="container">
		<h1 class="mb-4">Cursinhos</h1>
		<div class="row">

			<?php for ($i=0; $i < 8; $i++): ?>
				
			
			<article class="col-md-3 mb-4">
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
</section>

<?php require('footer.php'); ?>