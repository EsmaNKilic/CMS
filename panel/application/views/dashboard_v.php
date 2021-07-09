<!DOCTYPE html>
<html lang="tr">
<head>
<?php $this->load->view("includes/head"); ?>
</head>
	
<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">
  
  <!-- navbar header -->
  <div class="navbar-header">
    <button type="button" id="menubar-toggle-btn" class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
      <span class="sr-only">Toggle navigation</span>
      <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-more"></span>
    </button>

    <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="zmdi zmdi-hc-lg zmdi-search"></span>
    </button>

    <a href="index.html" class="navbar-brand">
      <span class="brand-icon"><i class="fa fa-gg"></i></span>
      <span class="brand-name">Infinity</span>
    </a>
  </div><!-- .navbar-header -->
  
  <div class="navbar-container container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
        <li class="hidden-float hidden-menubar-top">
          <a href="javascript:void(0)" role="button" id="menubar-fold-btn" class="hamburger hamburger--arrowalt is-active js-hamburger">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
          </a>
        </li>
        <li>
          <h5 class="page-title hidden-menubar-top hidden-float">Dashboard</h5>
        </li>
      </ul>

      <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
        <li class="nav-item dropdown hidden-float">
          <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
          </a>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
          <div class="media-group dropdown-menu animated flipInY">
            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="<?php echo base_url("assets");?>/assets/images/221.jpg" alt="">
                    <i class="status status-online"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">Active now</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="<?php echo base_url("assets");?>/assets/images/205.jpg" alt="">
                    <i class="status status-offline"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">John Doe</h5>
                  <small class="media-meta">2 hours ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="<?php echo base_url("assets");?>/assets/images/207.jpg" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Sara Smith</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->

            <a href="javascript:void(0)" class="media-group-item">
              <div class="media">
                <div class="media-left">
                  <div class="avatar avatar-xs avatar-circle">
                    <img src="<?php echo base_url("assets");?>/assets/images/211.jpg" alt="">
                    <i class="status status-away"></i>
                  </div>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Donia Dyab</h5>
                  <small class="media-meta">idle 5 min ago</small>
                </div>
              </div>
            </a><!-- .media-group-item -->
          </div>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
          <ul class="dropdown-menu animated flipInY">
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span class="label label-primary">3</span></a></li>
            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class" data-target="#side-panel" data-class="open" role="button"><i class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
        </li>
      </ul>
    </div>
  </div><!-- navbar-container -->
</nav>
<!--========== END app navbar -->

<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo base_url("assets");?>/assets/images/221.jpg" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>Web Developer</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="/index.html">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Home</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="profile.html">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="settings.html">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Settings</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="logout.html">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Home</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            <span class="menu-text">Dashboards</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="index.html"><span class="menu-text">Dashboard 1</span></a></li>
            <li><a href="dashboard.2.html"><span class="menu-text">Dashboard 2</span></a></li>
            <li><a href="dashboard.3.html"><span class="menu-text">Dashboard 3</span></a></li>
          </ul>
        </li>
        
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
            <span class="menu-text">Layouts</span>
            <span class="label label-warning menu-label">2</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="<?php echo base_url("assets");?>/default/index.html"><span class="menu-text">Default</span></a></li>
            <li><a href="<?php echo base_url("assets");?>/topbar/index.html"><span class="menu-text">Topbar</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
            <span class="menu-text">UI Kit</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="buttons.html"><span class="menu-text">Buttons</span></a></li>
            <li><a href="alerts.html"><span class="menu-text">Alerts</span></a></li>
            <li><a href="panels.html"><span class="menu-text">Panels</span></a></li>
            <li><a href="lists.html"><span class="menu-text">Lists</span></a></li>
            <li><a href="icons.html"><span class="menu-text">Icons</span></a></li>
            <li><a href="media.html"><span class="menu-text">Media</span></a></li>
            <li><a href="widgets.html"><span class="menu-text">Widgets</span></a></li>
            <li><a href="tabs.html"><span class="menu-text">Tabs &amp; Accordions</span></a></li>
            <li><a href="progress.html"><span class="menu-text">Progress</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i>
            <span class="menu-text">Mail Box</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li>
              <a href="inbox.html">
                <span class="menu-text">Inbox</span>
                <span class="label label-primary menu-label">12</span>
              </a>
            </li>
            <li><a href="compose.html"><span class="menu-text">Compose</span></a></li>
          </ul>
        </li>
        
        <li>
          <a href="search.web.html">
            <i class="menu-icon zmdi zmdi-search zmdi-hc-lg"></i>
            <span class="menu-text">Search</span>
          </a>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
            <span class="menu-text">Pages</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
            <li><a href="price.html"><span class="menu-text">Prices</span></a></li>
            <li><a href="invoice.html"><span class="menu-text">Invoice</span></a></li>
            <li><a href="gallery.1.html"><span class="menu-text">Gallery</span></a></li>
            <li><a href="gallery.2.html"><span class="menu-text">Gallery 2</span></a></li>
            <li><a href="support.html"><span class="menu-text">FAQ</span></a></li>
            <li class="has-submenu">
              <a href="javascript:void(0)" class="submenu-toggle">
                <i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
                <span class="menu-text">Misc Pages</span>
                <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
              </a>
              <ul class="submenu">
                <li><a href="login.html"><span class="menu-text">Login</span></a></li>
                <li><a href="signup.html"><span class="menu-text">Sign Up</span></a></li>
                <li><a href="password-forget.html"><span class="menu-text">Reset Password</span></a></li>
                <li><a href="unlock.html"><span class="menu-text">Unlock Screen</span></a></li>
                <li><a href="404.html"><span class="menu-text">404 Error</span></a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
            <span class="menu-text">Forms</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="form.layouts.html"><span class="menu-text">Form Layouts</span></a></li>
            <li><a href="form.elements.html"><span class="menu-text">Form Elements</span></a></li>
            <li><a href="form.custom.html"><span class="menu-text">Customized Elements</span></a></li>
            <li><a href="form.plugins.html"><span class="menu-text">Form Plugins</span></a></li>
            <li><a href="file-upload.html"><span class="menu-text">File Upload</span></a></li>
            <li><a href="form.datetime.html"><span class="menu-text">DateTime Pickers</span></a></li>
            <li><a href="editors.html"><span class="menu-text">Editors</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i>
            <span class="menu-text">Tables</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="tables.basic.html"><span class="menu-text">Basic Tables</span></a></li>
            <li><a href="datatables.html"><span class="menu-text">DataTables</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-chart zmdi-hc-lg"></i>
            <span class="menu-text">Charts</span>
            <span class="label label-success menu-label">7</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="charts.flot.html"><span class="menu-text">Flot Charts</span></a></li>
            <li><a href="echarts.bar.html"><span class="menu-text">Bar echarts</span></a></li>
            <li><a href="echarts.pie.html"><span class="menu-text">Pie echarts</span></a></li>
            <li><a href="echarts.line.html"><span class="menu-text">Line echarts</span></a></li>
            <li><a href="echarts.map.html"><span class="menu-text">Map echarts</span></a></li>
            <li><a href="echarts.scatter.html"><span class="menu-text">Scatter echarts</span></a></li>
            <li><a href="echarts.custom.html"><span class="menu-text">Custom echarts</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
            <span class="menu-text">Maps</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="map-google.html"><span class="menu-text">Google Maps</span></a></li>
            <li><a href="map-vector.html"><span class="menu-text">Vector Maps</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
            <span class="menu-text">Apps</span>
            <span class="label label-info menu-label">2</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="calendar.html"><span class="menu-text">Calendar</span></a></li>
            <li><a href="contacts.html"><span class="menu-text">Contacts</span></a></li>
          </ul>
        </li>

        <li class="menu-separator"><hr></li>

        <li>
          <a href="documentation.html">
            <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
            <span class="menu-text">Documentation</span>
          </a>
        </li>

        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
            <span class="menu-text">Settings</span>
          </a>
        </li>
        
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
            <span class="menu-text">Angular Version</span>
          </a>
        </li>
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->

<!-- navbar search -->
<div id="navbar-search" class="navbar-search collapse">
  <div class="navbar-search-inner">
    <form action="#">
      <span class="search-icon"><i class="fa fa-search"></i></span>
      <input class="search-field" type="search" placeholder="search..."/>
    </form>
    <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false">
      <i class="fa fa-close"></i>
    </button>
  </div>
  <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search" aria-expanded="false"></div>
</div><!-- .navbar-search -->

<!-- APP MAIN ==========-->
<main id="app-main" class="app-main">
  <div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="widget p-md clearfix">
					<div class="pull-left">
						<h3 class="widget-title">Welcome to Infinity</h3>
						<small class="text-color">Number of views</small>
					</div>
					<span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp">102</span>
				</div><!-- .widget -->
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="widget p-md clearfix">
					<div class="pull-left">
						<h3 class="widget-title">Active</h3>
						<small class="text-color">Loads / contact</small>
					</div>
					<span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp">325</span>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-primary"><span class="counter" data-plugin="counterUp">66.136</span>k</h3>
							<small class="text-color">Total loads</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-paperclip"></i></span>
					</div>
					<footer class="widget-footer bg-primary">
						<small>% charge</small>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[4,3,5,2,1], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-danger"><span class="counter" data-plugin="counterUp">3.490</span>k</h3>
							<small class="text-color">Total Pending</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-ban"></i></span>
					</div>
					<footer class="widget-footer bg-danger">
						<small>% charge</small>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[1,2,3,5,4], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-success"><span class="counter" data-plugin="counterUp">8.378</span>k</h3>
							<small class="text-color">Case Close</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-unlock-alt"></i></span>
					</div>
					<footer class="widget-footer bg-success">
						<small>% charge</small>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[2,4,3,4,3], { type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>

			<div class="col-md-3 col-sm-6">
				<div class="widget stats-widget">
					<div class="widget-body clearfix">
						<div class="pull-left">
							<h3 class="widget-title text-warning"><span class="counter" data-plugin="counterUp">3.490</span>k</h3>
							<small class="text-color">Total Pending</small>
						</div>
						<span class="pull-right big-icon watermark"><i class="fa fa-file-text-o"></i></span>
					</div>
					<footer class="widget-footer bg-warning">
						<small>% charge</small>
						<span class="small-chart pull-right" data-plugin="sparkline" data-options="[5,4,3,5,2],{ type: 'bar', barColor: '#ffffff', barWidth: 5, barSpacing: 2 }"></span>
					</footer>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-12">
				<div class="widget row no-gutter p-lg">						
					<div class="col-md-5 col-sm-5">
						<div>
							<h3 class="widget-title fz-lg text-primary m-b-lg">Sales in 2014</h3>
							<p class="m-b-lg">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits</p>
							<p class="fs-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eum alias est vitae, obcaecati?</p>
						</div>
					</div>

					<div class="col-md-7 col-sm-7">
						<div>
							<div id="lineChart" data-plugin="plot" data-options="
								[
									{
										data: [[1,3.6],[2,3.5],[3,6],[4,4],[5,4.3],[6,3.5],[7,3.6]],
										color: '#ffa000',
										lines: { show: true, lineWidth: 6 },
										curvedLines: { apply: true }
									},
									{
										data: [[1,3.6],[2,3.5],[3,6],[4,4],[5,4.3],[6,3.5],[7,3.6]],
										color: '#ffa000',
										points: {show: true}
									}
								],
								{
									series: {
										curvedLines: { active: true }
									},
									xaxis: {
										show: true,
										font: { size: 12, lineHeight: 10, style: 'normal', weight: '100',family: 'lato', variant: 'small-caps', color: '#a2a0a0' }
									},
									yaxis: {
										show: true,
										font: { size: 12, lineHeight: 10, style: 'normal', weight: '100',family: 'lato', variant: 'small-caps', color: '#a2a0a0' }
									},
									grid: { color: '#a2a0a0', hoverable: true, margin: 8, labelMargin: 8, borderWidth: 0, backgroundColor: '#fff' },
									tooltip: true,
									tooltipOpts: { content: 'X: %x.0, Y: %y.2',  defaultTheme: false, shifts: { x: 0, y: -40 } },
									legend: { show: false }
								}" style="width: 100%; height: 230px;">
							</div>
						</div>
					</div>
				</div><!-- .widget -->	
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-7">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Active Leads</h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body">
						<div class="table-responsive">							
							<table class="table no-cellborder">
								<thead>
									<tr><th>Type</th><th>Lead Name</th><th>Views</th><th>Favorites</th><th>Last Visit</th><th>Last Action</th></tr>
								</thead>
								<tbody>
									<tr><td class="text-primary">Buyer</td><td>Denise Ann</td><td>150</td><td>150</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-primary">Buyer</td><td>Denise Ann</td><td>150</td><td>202</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-success">Landlord</td><td>Denise Ann</td><td>150</td><td>313</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-primary">Buyer</td><td>Denise Ann</td><td>150</td><td>175</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-danger">Seller</td><td>Denise Ann</td><td>150</td><td>148</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-primary">Buyer</td><td>Denise Ann</td><td>150</td><td>1500</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-primary">Buyer</td><td>Denise Ann</td><td>150</td><td>1270</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
									<tr><td class="text-danger">Buyer</td><td>Denise Ann</td><td>150</td><td>3201</td><td>9:23 AM</td><td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td></tr>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- .widget -->
			</div><!-- END column -->

			<div class="col-md-5">
				<div class="widget todo-widget">
					<header class="widget-header">
						<h4 class="widget-title">Todo List</h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body p-b-0">
						<ul class="todo-list">
							<li class="todo-item">
								<div class="checkbox checkbox-default">
									<input type="checkbox" id="checkbox02"/>
									<label for="checkbox02">Record The First Episode Of HTML Tutorial</label>
								</div>
							</li><!-- .todo-item -->

							<li class="todo-item">
								<div class="checkbox checkbox-pink">
									<input type="checkbox" id="checkbox2"/>
									<label for="checkbox2">Prepare The Conference Schedule</label>
								</div>
							</li><!-- .todo-item -->

							<li class="todo-item">
								<div class="checkbox checkbox-warning">
									<input type="checkbox" id="checkbox4" checked/>
									<label for="checkbox4">Decide The Live Discussion Time</label>
								</div>
							</li><!-- .todo-item -->

							<li class="todo-item">
								<div class="checkbox checkbox-success">
									<input type="checkbox" id="checkbox3" checked/>
									<label for="checkbox3">Prepare For The Next Project</label>
								</div>
							</li><!-- .todo-item -->

							<li class="todo-item">
								<div class="checkbox checkbox-danger">
									<input type="checkbox" id="checkbox5" checked/>
									<label for="checkbox5">Finish Up AngularJs Tutorial</label>
								</div>
							</li><!-- .todo-item -->

							<li class="todo-item">
								<div class="checkbox checkbox-purple">
									<input type="checkbox" id="checkbox1" checked/>
									<label for="checkbox1">Finish Infinity Project</label>
								</div>
							</li><!-- .todo-item -->
						</ul><!-- .todo-list -->
					</div>
					<div class="new-todo">
						<input type="text" placeholder="add new task"/>
					</div>
					<footer class="widget-footer">
						<a href="javascript:void(0)" class="btn btn-sm btn-success m-r-md">All</a>
						<a href="javascript:void(0)" class="btn btn-sm btn-default">Archive</a>
						<a href="javascript:void(0)" class="btn btn-sm btn-default pull-right">Clear completed</a>
					</footer>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Activities</h4>
					</header>
					<hr class="widget-separator" />
					<div class="widget-body">
						<div class="streamline">
							<div class="sl-item sl-primary">
								<div class="sl-content">
									<small class="text-muted">23 mins ago</small>
									<p>John has just started working on the project</p>
								</div>
							</div><!-- .sl-item -->

							<div class="sl-item sl-danger">
								<div class="sl-content">
									<small class="text-muted">23 mins ago</small>
									<p>Jane sent you invitation to attend the party</p>
								</div>
							</div><!-- .sl-item -->

							<div class="sl-item sl-success">
								<div class="sl-content">
									<small class="text-muted">23 mins ago</small>
									<p>Sally added you to her circles</p>
								</div>
							</div><!-- .sl-item -->

							<div class="sl-item sl-warning">
								<div class="sl-content">
									<small class="text-muted">23 mins ago</small>
									<p>Sara has finished her task</p>
								</div>
							</div><!-- .sl-item -->
						</div><!-- .streamline -->
					</div>
				</div><!-- .widget -->
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="widget google-chart">
					<header class="widget-header">
						<h4 class="widget-title">Analytics</h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body">
						<div id="barChart" data-plugin="plot" data-options="
							[
								{
									label: 'Users',
									data: [[1,200],[2,400],[3,500],[4,700],[5,600],[6,400],[7,500],[8,400], [9, 320], [10, 380], [11, 500], [12, 700]],
									bars: {show: true, fill: 1, fillColor: '#3f51b5', align: 'center', barWidth: .4}
								}
							],
							{
								series: {
									bars: {show:  true}
								},
								xaxis: {
									font: {size: 12, lineHeight: 10, style: 'normal', weight: '100',family: 'lato', variant: 'small-caps', color: '#a2a0a0' }
								},
								yaxis: {
									max: 800,
									font: {size: 12, lineHeight: 10, style: 'normal', weight: '100',family: 'lato', variant: 'small-caps', color: '#a2a0a0' }
								},
								legend: { show: false },
								grid: { color: '#fff', labelMargin: 16, hoverable: true },
								colors: ['#3f51b5'],
								tooltip: {
									show: true,
									content: '<div><span>X: %x, Y: %y</span></div>',
									defaultTheme: false
								}
							}" style="width: 100%; height: 220px;">
						</div>
					</div>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Feeds</h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body">
						<div class="media-group feeds-group">

							<div class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-sm avatar-circle">
											<img src="<?php echo base_url("assets");?>/assets/images/217.jpg" alt="">
										</div>
									</div>
									<div class="media-body">
										<h5><a href="javascript:void(0)" class="text-color">Some of the fantastic things people have had to say about Ooooh</a></h5>
										<small class="text-muted">2 days ago</small>
									</div>
								</div>
							</div><!-- .media-group-item -->

							<div class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-sm avatar-circle">
											<img src="<?php echo base_url("assets");?>/assets/images/218.jpg" alt="">
										</div>
									</div>
									<div class="media-body">
										<h5><a href="javascript:void(0)" class="text-color">Here are just some of the magazine reviews we have had</a></h5>
										<small class="text-muted">1 day ago</small>
									</div>
								</div>
							</div><!-- .media-group-item -->

							<div class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-sm avatar-circle">
											<img src="<?php echo base_url("assets");?>/assets/images/219.jpg" alt="">
										</div>
									</div>
									<div class="media-body">
										<h5><a href="javascript:void(0)" class="text-color">Lorem ipsum dolor amet, consectetur adipisicing elit.</a></h5>
										<small class="text-muted">2 days ago</small>
									</div>
								</div>
							</div><!-- .media-group-item -->

							<div class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-sm avatar-circle">
											<img src="<?php echo base_url("assets");?>/assets/images/215.jpg" alt="">
										</div>
									</div>
									<div class="media-body">
										<h5><a href="javascript:void(0)" class="text-color">“It’s just brilliant. I will recommend it to everyone!”</a></h5>
										<small class="text-muted">2 mins ago</small>
									</div>
								</div>
							</div><!-- .media-group-item -->

							<div class="media-group-item">
								<div class="media">
									<div class="media-left">
										<div class="avatar avatar-sm avatar-circle">
											<img src="<?php echo base_url("assets");?>/assets/images/221.jpg" alt="">
										</div>
									</div>
									<div class="media-body">
										<h5><a href="javascript:void(0)" class="text-color">John has just started working on the project</a></h5>
										<small class="text-muted">right now</small>
									</div>
								</div>
							</div><!-- .media-group-item -->
						</div>
					</div>
				</div><!-- .widget -->
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Streams</h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body">
						<div class="streamline m-l-lg">
							<div class="sl-item p-b-md">
								<div class="sl-avatar avatar avatar-sm avatar-circle">
									<img class="img-responsive" src="<?php echo base_url("assets");?>/assets/images/221.jpg" alt="avatar"/>
								</div><!-- .avatar -->
								<div class="sl-content m-l-xl">
									<h5 class="m-t-0"><a href="javascript:void(0)" class="m-r-xs theme-color">John Doe</a><small class="text-muted fz-sm">last month</small></h5>
									<p>John has just started working on the project</p>
								</div>
							</div><!-- .sl-item -->

							<div class="sl-item p-b-md">
								<div class="sl-avatar avatar avatar-sm avatar-circle">
									<img class="img-responsive" src="<?php echo base_url("assets");?>/assets/images/214.jpg" alt="avatar"/>
								</div><!-- .avatar -->
								<div class="sl-content m-l-xl">
									<h5 class="m-t-0"><a href="javascript:void(0)" class="m-r-xs theme-color">Jane Doe</a><small class="text-muted fz-sm">last month</small></h5>
									<p>Jane sent you invitation to attend the party</p>
								</div>
							</div><!-- .sl-item -->

							<div class="sl-item p-b-md">
								<div class="sl-avatar avatar avatar-sm avatar-circle">
									<img class="img-responsive" src="<?php echo base_url("assets");?>/assets/images/217.jpg" alt="avatar"/>
								</div><!-- .avatar -->
								<div class="sl-content m-l-xl">
									<h5 class="m-t-0"><a href="javascript:void(0)" class="m-r-xs theme-color">Sally Mala</a><small class="text-muted fz-sm">last month</small></h5>
									<p>Sally added you to her circles</p>
								</div>
							</div><!-- .sl-item -->

							<div class="sl-item p-b-md">
								<div class="sl-avatar avatar avatar-sm avatar-circle">
									<img class="img-responsive" src="<?php echo base_url("assets");?>/assets/images/211.jpg" alt="avatar"/>
								</div><!-- .avatar -->
								<div class="sl-content m-l-xl">
									<h5 class="m-t-0"><a href="javascript:void(0)" class="m-r-xs theme-color">Sara Adams</a><small class="text-muted fz-sm">last month</small></h5>
									<p>Sara has finished her task</p>
								</div>
							</div><!-- .sl-item -->
							<div class="sl-item p-b-md">
								<div class="sl-avatar avatar avatar-sm avatar-circle">
									<img class="img-responsive" src="<?php echo base_url("assets");?>/assets/images/214.jpg" alt="avatar"/>
								</div><!-- .avatar -->
								<div class="sl-content m-l-xl">
									<h5 class="m-t-0"><a href="javascript:void(0)" class="m-r-xs theme-color">Sandy Doe</a><small class="text-muted fz-sm">last month</small></h5>
									<p>Sara has finished her task</p>
								</div>
							</div><!-- .sl-item -->
						</div><!-- .streamline -->
					</div>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-12">
				<div class="widget widget-pie-chart">
					<header class="widget-header">
						<h4 class="widget-title">ACTIVITIES</h4>
					</header>
					<hr class="widget-separator"/>
					<div class="widget-body clearfix">
						<div data-plugin="chart" data-options="{
		              tooltip : {
		                  trigger: 'axis'
		              },
		              legend: {
		                  data:['Max','Min']
		              },
		              calculable : true,
		              xAxis : [
		                  {
		                      type : 'category',
		                      boundaryGap : false,
		                      data : ['Mon','Tue','Wed','Thu','Fri','Sat','Sun']
		                  }
		              ],
		              yAxis : [
		                  {
		                      type : 'value',
		                      axisLabel : {
		                          formatter: '{value} °C'
		                      }
		                  }
		              ],
		              series : [
		                  {
		                      name:'Max',
		                      type:'line',
		                      data:[9, 9, 13, 11, 10, 11, 8],
		                      markPoint : {
		                          data : [
		                              {type : 'max', name: 'Max'},
		                              {type : 'min', name: 'Min'}
		                          ]
		                      },
		                      markLine : {
		                          data : [
		                              {type : 'average', name: 'Average'}
		                          ]
		                      }
		                  },
		                  {
		                      name:'Min',
		                      type:'line',
		                      data:[1, -3, 2, 5, 3, 4, 0],
		                      markPoint : {
		                          data : [
		                              {name : 'Min of Week', value : -3, xAxis: 1, yAxis: -1.5}
		                          ]
		                      },
		                      markLine : {
		                          data : [
		                              {type : 'average', name : 'Average'}
		                          ]
		                      }
		                  }
		              ]
		            }" style="height: 300px;">
					</div>
				</div><!-- .widget -->
			</div>
		</div><!-- .row -->
	</section><!-- #dash-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
  <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
      </div>
    </footer>
  </div>
  <!-- /#app-footer -->
</main>
<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<div id="app-customizer" class="app-customizer">
		<a href="javascript:void(0)" 
			class="app-customizer-toggle theme-color" 
			data-toggle="class" 
			data-class="open"
			data-active="false"
			data-target="#app-customizer">
			<i class="fa fa-gear"></i>
		</a>
		<div class="customizer-tabs">
			<!-- tabs list -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#menubar-customizer" aria-controls="menubar-customizer" role="tab" data-toggle="tab">Menubar</a></li>
				<li role="presentation"><a href="#navbar-customizer" aria-controls="navbar-customizer" role="tab" data-toggle="tab">Navbar</a></li>
			</ul><!-- .nav-tabs -->

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane in active fade" id="menubar-customizer">
					<div class="hidden-menubar-top hidden-float">
						<div class="m-b-0">
							<label for="menubar-fold-switch">Fold Menubar</label>
							<div class="pull-right">
								<input id="menubar-fold-switch" type="checkbox" data-switchery data-size="small" />
							</div>
						</div>
						<hr class="m-h-md">
					</div>
					<div class="radio radio-default m-b-md">
						<input type="radio" id="menubar-light-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="light">
						<label for="menubar-light-theme">Light</label>
					</div>

					<div class="radio radio-inverse m-b-md">
						<input type="radio" id="menubar-dark-theme" name="menubar-theme" data-toggle="menubar-theme" data-theme="dark">
						<label for="menubar-dark-theme">Dark</label>
					</div>
				</div><!-- .tab-pane -->
				<div role="tabpanel" class="tab-pane fade" id="navbar-customizer">
					<!-- This Section is populated Automatically By javascript -->
				</div><!-- .tab-pane -->
			</div>
		</div><!-- .customizer-taps -->
		<hr class="m-0">
		<div class="customizer-reset">
			<button id="customizer-reset-btn" class="btn btn-block btn-outline btn-primary">Reset</button>
			<a href="https://themeforest.net/item/infinity-responsive-web-app-kit/16230780" class="m-t-sm btn btn-block btn-danger">Buy Now</a>
		</div>
	</div><!-- #app-customizer -->
	
	<!-- SIDE PANEL -->
	<div id="side-panel" class="side-panel">
		<div class="panel-header">
			<h4 class="panel-title">Friends</h4>
		</div>
		<div class="scrollable-container">
			<div class="media-group">
				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/221.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/205.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">John Doe</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/206.jpg" alt="">
								<i class="status status-online"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Kiti</h5>
							<small class="media-meta">active now</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/207.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/208.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Adams</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/209.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Smith Doe</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/219.jpg" alt="">
								<i class="status status-away"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Dana Dyab</h5>
							<small class="media-meta">away</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/210.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jeffry Way</h5>
							<small class="media-meta">2 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/211.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Jane Doe</h5>
							<small class="media-meta">5 hours ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/212.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Adam Khoury</h5>
							<small class="media-meta">22 minutes ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/207.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Sara Smith</h5>
							<small class="media-meta">2 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->

				<a href="javascript:void(0)" class="media-group-item">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-xs avatar-circle">
								<img src="<?php echo base_url("assets");?>/assets/images/211.jpg" alt="">
								<i class="status status-offline"></i>
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Donia Dyab</h5>
							<small class="media-meta">3 days ago</small>
						</div>
					</div>
				</a><!-- .media-group-item -->
			</div>
		</div><!-- .scrollable-container -->
	</div><!-- /#side-panel -->

<?php $this->load->view("includes/include_script");?>
</body>
</html>