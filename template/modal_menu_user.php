
<?php 
$data_modal_menu = [

	[ "menu" => "Home", "icon" => "fas fa-th-large", "url" => "home.php" ],
	[ "menu" => "Dashboard", "icon" => "fas fa-th-large", "url" => "panelUser_dashboard.php" ],
	[ "menu" => "My Course", "icon" => "fas fa-book", "url" => "panelUser_course.php" ],
	[ "menu" => "Setting", "icon" => "fas fa-cog", "url" => "panelUser_setting.php" ],
	[ "menu" => "Panel Admin", "icon" => "fas fa-users", "url" => "panelAdmin_dashboard.php" ],
	[ "menu" => "Logout", "icon" => "fas fa-sign-out-alt", "url" => "login.php" ],
];
?>


<!-- Modal Menu -->
<div class="modal fade" id="modal_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Mau Ke Mana ? </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid container_modal_menu">
					<div class="row justify-content-center">

						<?php for ($i=0; $i < count($data_modal_menu) ; $i++) { ?>
							<?php $row_modal_menu = $data_modal_menu[$i] ?>

							<!-- Col Modal Menu -->
							<div class="col-sm-5 col_modal_menu">
								<a href="<?= $row_modal_menu['url'] ?>">
									<div class="container-fluid">
										<div class="row row_modal_menu">
											<div class="col_logo col-3">
												<i class="<?= $row_modal_menu['icon'] ?>"></i>
											</div>
											<div class="col">
												<?= $row_modal_menu['menu'] ?>
											</div>
										</div>
									</div>
								</a>
							</div>
							<!-- End Of Col Modal Menu -->
						<?php } ?>



					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<!-- End Of Modal Menu -->
