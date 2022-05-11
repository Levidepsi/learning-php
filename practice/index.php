	<?php 
	include 'header.php'; 
	include 'classes/Device.php';

	$device = new Device();


	
	
	?>

			<!-- main content -->
			<div class="content">
				<div class="text">
					<h5 class="p1">Calculator</h5>
					<p>
						Measure the amount you will need to make your entire digital project
						live!
					</p>
				</div>

				<div id="main" class="main-body">
					<div class="items">
						<ul id="draggable-list">
							<li class="icons" data-id="1">
								<a href="javascript:void(0);">
									<i class="fa-solid fa-mobile-screen-button phone"></i>
									<span>IPhone</span>
								</a>
							</li>

							<li class="icons" data-id="2">
								<a href="javascript:void(0);">
									<i class="fa-solid fa-tablet-screen-button rotate-icon"></i>
									<span>IPad</span>
								</a>
							</li>

							<li class="icons" data-id="3">
								<a href="javascript:void(0);">
									<i class="fa-solid fa-mobile-screen"></i>
									<span>Android Phone</span>
								</a>
							</li>

							<li class="icons" data-id="4">
								<a href="javascript:void(0);">
									<i class="fa-solid fa-tablet-screen-button rotate-icon"></i>
									<span>Android Tablet</span>
								</a>
							</li>

							<li class="icons" data-id="5">
								<a href="javascript:void(0);">
									<i class="fa-brands fa-windows"></i>
									<span>Windows Phone</span>
								</a>
							</li>

							<li class="icons" data-id="6">
								<a href="javascript:void(0);">
									<i class="fa-solid fa-globe"></i>
									<span>Web</span>
								</a>
							</li>
							<li class="icons" data-id="7">
								<a href="javascript:void(0);">
									<i class="fa-brands fa-react"></i>
									<span>React Native</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="btn">
						<!-- <button id="btn1" type="submit">
							Add New Item
						</button> -->
						<!-- <button id="btn2" type="button">
							Proceed
						</button> -->
					</div>
				</div>
			</div>
		</div>
