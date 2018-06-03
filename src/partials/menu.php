<!-- menu-overlay -->

<div class="menu-container animated">
	<div class="menu ">
		<div class="grid">
			<div class="menu__header">
				<div class="grid__row">

					<div class="grid__col md:col--1 md:col-align--bottom lg:col--1 lg:col-align--bottom">
						<div class="sidebar sidebar--hero sidebar--menu"></div>
					</div>
				
					<div class="grid__col md:col--7 lg:col--8">
						<div class="header__text">menu</div>
					</div>
				</div>
			</div> <!-- /menu__header -->

			<div class="menu__body">
				<div class="grid__row">
					<div class="grid__col md:col--2 md:offset--1 lg:col--4 lg:offset--1">
						<div class="menu__spacer">
							<ul class="menu__links-list">  

								<li class="links-list__item">
									<a class="links-list__link <?php echo $add_class; ?>" href="<?php echo $path_to_home; ?>">Home</a>
								</li>

								<!-- <li class="links-list__item">
									<a class="links-list__link" href="about">About</a>
								</li> -->
								
								<li class="links-list__item">
									<a class="links-list__link" href="<?php echo $path_to_resume; ?>" target="_blank">Resumé</a>
								</li>
							</ul>

							<div class="menu__toggle">
								<a class="nav-link js-close-menu" href="#"><div class="icon icon--close"></div>CLOSE</a>
							</div>
							

							<div class="menu__social">
								<div class="social__item">
									<a href="https://github.com/joshsanders" target="_blank">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 32 32">
											<path d="M16,0.4c-8.8,0-16,7.2-16,16c0,7.1,4.6,13.1,10.9,15.2 c0.8,0.1,1.1-0.3,1.1-0.8c0-0.4,0-1.4,0-2.7c-4.5,1-5.4-2.1-5.4-2.1c-0.7-1.8-1.8-2.3-1.8-2.3c-1.5-1,0.1-1,0.1-1 c1.6,0.1,2.5,1.6,2.5,1.6c1.4,2.4,3.7,1.7,4.7,1.3c0.1-1,0.6-1.7,1-2.1c-3.6-0.4-7.3-1.8-7.3-7.9c0-1.7,0.6-3.2,1.6-4.3 c-0.2-0.4-0.7-2,0.2-4.2c0,0,1.3-0.4,4.4,1.6c1.3-0.4,2.6-0.5,4-0.5c1.4,0,2.7,0.2,4,0.5C23.1,6.6,24.4,7,24.4,7 c0.9,2.2,0.3,3.8,0.2,4.2c1,1.1,1.6,2.5,1.6,4.3c0,6.1-3.7,7.5-7.3,7.9c0.6,0.5,1.1,1.5,1.1,3c0,2.1,0,3.9,0,4.4 c0,0.4,0.3,0.9,1.1,0.8C27.4,29.5,32,23.5,32,16.4C32,7.6,24.8,0.4,16,0.4z"/>
										</svg>
									</a>
								</div>
								<div class="social__item">
									<a href="https://codepen.io/kinetic_pixels/" target="_blank">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 32 32">
											<path d="M32,10.9C32,10.9,32,10.9,32,10.9c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1 c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1-0.1-0.1c0,0,0,0-0.1-0.1c0,0-0.1,0-0.1-0.1 c0,0,0,0-0.1,0c0,0,0,0,0,0L16.8,0.2c-0.5-0.3-1.1-0.3-1.5,0L0.6,10c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0.1 c0,0,0,0-0.1,0.1c0,0,0,0,0,0.1c0,0,0,0.1-0.1,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1 c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2v9.7c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1 c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0,0.1c0,0,0,0.1,0.1,0.1c0,0,0,0,0.1,0.1 c0,0,0.1,0,0.1,0.1c0,0,0,0,0.1,0c0,0,0,0,0,0l14.6,9.8c0.2,0.2,0.5,0.2,0.8,0.2c0.3,0,0.5-0.1,0.8-0.2L31.4,22c0,0,0,0,0,0 c0,0,0,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0.1-0.1c0,0,0,0,0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1 c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0,0,0-0.1c0-0.1,0-0.1,0-0.2v-9.7C32,11.1,32,11,32,10.9z M17.4,3.9l10.8,7.2l-4.8,3.2l-6-4V3.9z M14.6,3.9v6.4l-6,4l-4.8-3.2L14.6,3.9z M2.8,13.7L6.2,16l-3.4,2.3V13.7z M14.6,28.1 L3.9,20.9l4.8-3.2l6,4V28.1z M16,19.3L11.1,16l4.9-3.3l4.9,3.3L16,19.3z M17.4,28.1v-6.4l6-4l4.8,3.2L17.4,28.1z M29.2,18.3L25.8,16 l3.4-2.3V18.3z"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="grid__col md:col--5 lg:col--7">
						
						<ol class="menu__proj-list">
							<h4 class="proj-list__label">WORK</h4>

							<li class="proj-list__proj">
								<a class="proj__link" href="<?php echo $path_fix; ?>employee-portal">
									<span class="proj__number">01</span> 
									<span class="proj__name">MUI Employee Portal</span>
								</a>
							</li>

							<li class="proj-list__proj">
								<a class="proj__link" href="<?php echo $path_fix; ?>2600hz-online-experience">
									<span class="proj__number">02</span>  
									<span class="proj__name">2600Hz Online Experience</span>
								</a>
							</li>

							<li class="proj-list__proj">
								<a class="proj__link" href="<?php echo $path_fix; ?>spyder">
									<span class="proj__number">03</span> 
									<span class="proj__name">Spyder</span>
								</a>
							</li>

							<li class="proj-list__proj">
								<a class="proj__link" href="<?php echo $path_fix; ?>cluster-manager">
									<span class="proj__number">04</span> 
									<span class="proj__name">MUI Cluster Manager</span>
								</a>
							</li>

							<li class="proj-list__proj">
								<a class="proj__link" href="<?php echo $path_fix; ?>2600hz-identity">
									<span class="proj__number">05</span>  
									<span class="proj__name">2600Hz Identity</span>
								</a>
							</li>

							<li class="proj-list__proj">
								<a class="proj__link" href="<?php echo $path_fix; ?>telicon">
									<span class="proj__number">06</span> 
									<span class="proj__name">Telicon</span>
								</a>
							</li>

							<!-- <li class="proj-list__proj">
								<a class="proj__link" href="< *** ?php echo $path_fix; ?>mui-app-icons">
									<span class="proj__number">07</span> 
									<span class="proj__name">MUI App Icons</span>
								</a>
							</li> -->

							<li class="proj-list__proj proj-list--disclaimer">
								<a class="proj__link" href="<?php echo $path_fix; ?>mui-callcenter">
									<span class="proj__number">07</span> 
									<span class="proj__name">
										<span class="strike">MUI Enterprise Call Center</span>
										<span class="tag">Coming soon</span>
									</span>
								</a>
							</li>

							<li class="proj-list__proj proj-list--disclaimer">
								<a class="proj__link" href="<?php echo $path_fix; ?>civil-maps-identity">
									<span class="proj__number">08</span> 
									<span class="proj__name">
										<span class="strike">Monster Design System</span>
										<span class="tag">Coming Soon</span>
									</span>
								</a>
							</li>

						</ol>
					</div>
				</div>
			</div>
			
		</div>

	</div> <!-- /menu -->


	<!-- /Menu BG-bar -->

	<div class="grid bg-knockout">
		<div class="grid__row">
			<div class="grid__col md:col--1 md:offset--2 lg:col--2 lg:offset--2">
				<div class="color-bar color-bar--home"></div>
			</div>
		</div>
	</div>

</div>

<!-- /menu-overlay -->