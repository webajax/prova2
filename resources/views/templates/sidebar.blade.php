<div>
	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary">
		<!-- Brand Logo -->
		<a href="{{ config('configCalledVars.env.home_url') }}" class="brand-link">
			<img src="<?php echo URL::to('assets/dist/img/AdminLTELogo.png' ) ?>" alt="AdminLTE Logo" class="brand-image">
			<span class="brand-text font-weight-light"></span>
		</a>
		<button class="btnCloseMenu" id="btnCloseMenu"><i class="fas fa-arrow-left"></i></button>
		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo URL::to('assets/dist/img/user2-160x160.jpg' ) ?>" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">André Luiz</a>
					</div>
			</div>-->
			<?php #dd($resp["menus"]); ?>
			<!-- Sidebar Menu -->
			@foreach ($resp["menus"] as $itens)

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item has-treeview">
							<a href="{{ URL::to($itens['link']) }}" class="nav-link">
								<i class=" livicon iconrigth" data-n="{{$itens['icon_module']}}" data-s="24"
									data-c="{{$itens['color']}}" data-hc="0" data-onparent="true"></i>

								<p style="color: {{$itens['color_text']}}">

									{{$itens['name']}}
									<!--<i class="fas fa-angle-left right"></i>-->
									<!--<span class="badge badge-info right">5</span>-->
								</p>
							</a>

						</li>
					</ul>
				</nav>
			@endforeach
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
</div>