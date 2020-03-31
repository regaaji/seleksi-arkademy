<?php include 'templates/header.php'; ?>


	<?php include 'templates/sidebar.php'; ?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">KASUS COVID-19 DUNIA</h3>
							<p class="panel-subtitle"> 
								
								<?= 
								date('d F Y');
								 ?>
							</p>
						</div>
						<div class="panel-body">
							<div class="row">

								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-smile-o"></i></span>
										<p>
											<span class="number"><?= $duniasembuh['value']; ?></span>
											<span class="title"><?= $duniasembuh['name']; ?></span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-frown-o fa-3x"></i></span>
										<p>
											<span class="number"><?= $duniamati['value']; ?></span>
											<span class="title"><?= $duniamati['name']; ?></span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number"><?= $duniapositif['value']; ?></span>
											<span class="title"><?= $duniapositif['name']; ?></span>
										</p>
									</div>
								</div>

							</div>

						</div>
					</div>
					<!-- END OVERVIEW -->


					<div class="panel panel-default" style="padding: 10px;">
						<div class="panel-body">
							<div class="table-responsive">

								<table class="table table-hover table-bordered" id="tabel1">
									<thead>
										<th>No</th>
										<th>Negara</th>
										<th>Sembuh</th>
										<th>Meninggal</th>
										<th>Positif</th>
									</thead>
									<tbody>

										<?php $nomer = 1; ?>
										
										<?php foreach($dunia as $pecah) : ?>
											<tr>
												
												<td><?= $nomer; ?></td>
												<td><?= $pecah['attributes']['Country_Region']; ?></td>
												<td><?= number_format($pecah['attributes']['Recovered']); ?></td>
												<td><?= number_format($pecah['attributes']['Deaths']); ?></td>
												<td><?= number_format($pecah['attributes']['Confirmed']); ?></td>
												
												
											</tr>
											<?php $nomer++ ?>
										<?php endforeach; ?>

									</tbody>
								</table>
							</div>

							
						</div>
					</div>


				</div>


			</div>
		</div>
		<!-- END MAIN CONTENT -->
	</div>
	<!-- END MAIN -->
	<?php include 'templates/footer.php'; ?>