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
							<h3 class="panel-title">KASUS COVID-19 INDONESIA</h3>
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
											<span class="number"><?= $data1 ?></span>
											<span class="title">Sembuh</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-frown-o fa-3x"></i></span>
										<p>
											<span class="number"><?= $data2 ?></span>
											<span class="title">Meninggal</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number"><?= $data3 ?></span>
											<span class="title">Positif Corona</span>
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
										<th>Provinsi</th>
										<th>Sembuh</th>
										<th>Meninggal</th>
										<th>Positif</th>
									</thead>
									<tbody>

										<?php $nomer = 1; ?>
										
										<?php foreach($profileprov as $pecah) : ?>
											<tr>
												
												<td><?= $nomer; ?></td>
												<td><?= $pecah['attributes']['Provinsi']; ?></td>
												<td><?= $pecah['attributes']['Kasus_Semb']; ?></td>
												<td><?= $pecah['attributes']['Kasus_Meni']; ?></td>
												<td><?= $pecah['attributes']['Kasus_Posi']; ?></td>
												
												
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