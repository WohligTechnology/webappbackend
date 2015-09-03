<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blazen |
        <?php echo $title; ?>
    </title>
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico'); ?>" type="image/x-icon" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/nifty.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-table.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/bootstrap-select/bootstrap-select.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/pace/pace.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>" type="text/javascript"></script>
    
   
    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.css'); ?>" type="text/css" />

    <script src="<?php echo base_url('assets/js/chintantable.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/masonry.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.min.js'); ?>"></script>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
        newbase_url = base_url;
    </script>
    <script>
        $("#select1").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select2").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select3").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select4").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select5").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select10").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select6").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select7").select2({

            allowClear: true,
            //minimumInputLength: 3,

        });
        $("#select8").select2({

        allowClear: true,
        //minimumInputLength: 3,

        });
    </script>

</head>
<body>
    <div id="container" class="effect mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="<?php echo site_url();?>" class="navbar-brand">
<!--						<img src="<?php echo base_url('assets/img/camp_logo.png'); ?>" alt="Nifty Logo" class="brand-icon">-->
						<div class="brand-title">
							<span class="brand-text"><u><b>Blazen</b></u></span>
						</div>
					</a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="fa fa-navicon fa-lg"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->


                        <!--Messages Dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown" style="display:none;">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-envelope fa-lg"></i>
                                <span class="badge badge-header badge-warning">9</span>
                            </a>

                            <!--Message dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md with-arrow">
                                <div class="pad-all bord-btm">
                                    <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url('assets/img/av2.png'); ?>" alt="Profile Picture" class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Andy sent you a message</div>
                                                        <small class="text-muted">15 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url('assets/img/av4.png'); ?>" alt="Profile Picture" class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">30 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url('assets/img/av3.png'); ?>" alt="Profile Picture" class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">40 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url('assets/img/av6.png'); ?>" alt="Profile Picture" class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Donna sent you a message</div>
                                                        <small class="text-muted">5 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url('assets/img/av4.png'); ?>" alt="Profile Picture" class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Lucy sent you a message</div>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <img src="<?php echo base_url('assets/img/av3.png'); ?>" alt="Profile Picture" class="img-circle img-sm">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Jackson sent you a message</div>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End message dropdown-->




                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown" style="display:none;">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-bell fa-lg"></i>
                                <span class="badge badge-header badge-danger">5</span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md with-arrow">
                                <div class="pad-all bord-btm">
                                    <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Database Repair</p>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Upgrade Progress</p>
                                                        <p class="pull-right">10%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                            <span class="sr-only">10% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <span class="icon-wrap icon-circle bg-primary">
															<i class="fa fa-comment fa-lg"></i>
														</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New comments waiting approval</div>
                                                        <small class="text-muted">15 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <span class="icon-wrap icon-circle bg-danger">
															<i class="fa fa-hdd-o fa-lg"></i>
														</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">HDD is full</div>
                                                        <small class="text-muted">50 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <span class="icon-wrap bg-info">
															<i class="fa fa-file-word-o fa-lg"></i>
														</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Write a news article</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <span class="label label-danger pull-right">New</span>
                                                    <div class="media-left">
                                                        <span class="icon-wrap bg-purple">
															<i class="fa fa-comment fa-lg"></i>
														</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">Comment Sorting</div>
                                                        <small class="text-muted">Last Update 8 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <span class="icon-wrap bg-success">
															<i class="fa fa-user fa-lg"></i>
														</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="text-nowrap">New User Registered</div>
                                                        <small class="text-muted">4 minutes ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown" style="display:none;">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="fa fa-th-large fa-lg"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="clearfix">
                                    <div class="col-sm-12 col-md-3">

                                        <!--Mega menu widget-->
                                        <div class="text-center bg-purple pad-all">
                                            <h3 class="text-thin mar-no">Weekend shopping</h3>
                                            <div class="pad-ver box-inline">
                                                <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
													<i class="fa fa-shopping-cart fa-4x"></i>
												</span>
                                            </div>
                                            <p class="pad-btm">
                                                Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                            </p>
                                            <a href="#" class="btn btn-purple">Learn More...</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Pages</li>
                                            <li><a href="#">Profile</a>
                                            </li>
                                            <li><a href="#">Search Result</a>
                                            </li>
                                            <li><a href="#">FAQ</a>
                                            </li>
                                            <li><a href="#">Sreen Lock</a>
                                            </li>
                                            <li><a href="#" class="disabled">Disabled</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Icons</li>
                                            <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a>
                                            </li>
                                            <li><a href="#">Skycons</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Mailbox</li>
                                            <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a>
                                            </li>
                                            <li><a href="#">Read Message</a>
                                            </li>
                                            <li><a href="#">Compose</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Featured</li>
                                            <li><a href="#">Smart navigation</a>
                                            </li>
                                            <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a>
                                            </li>
                                            <li><a href="#">Lot of themes</a>
                                            </li>
                                            <li><a href="#">Transition effects</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
                                            <li class="dropdown-header">Components</li>
                                            <li><a href="#">Tables</a>
                                            </li>
                                            <li><a href="#">Charts</a>
                                            </li>
                                            <li><a href="#">Forms</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <form role="form" class="form">
                                                    <div class="form-group">
                                                        <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                        <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--Language selector-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
<!--                            <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">-->
                            <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#">
                                <span class="lang-selected">
									<img class="lang-flag" src="<?php echo base_url('assets/img/flags/united-kingdom.png'); ?>" alt="English">
									<span class="lang-id">EN</span>
                                <span class="lang-name">English</span>
                                </span>
                            </a>

                            <!--Language selector menu-->
                            <ul class="head-list dropdown-menu with-arrow">
                                <li>
                                    <!--English-->
                                    <a href="#" class="active">
										<img class="lang-flag" src="<?php echo base_url('assets/img/flags/united-kingdom.png'); ?>" alt="English">
										<span class="lang-id">EN</span>
										<span class="lang-name">English</span>
									</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End language selector-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
									<img class="img-circle img-user media-object" src="<?php echo base_url('assets/img/av1.png'); ?>" alt="Profile Picture">
								</span>
                                <div class="username hidden-xs">
                                    <?php echo $this->session->userdata( 'name' ); ?></div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm" style="display:none;">
                                    <p class="text-lg text-muted text-thin mar-btm">750Gb of 1,000Gb Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- User dropdown menu -->
                                <ul class="head-list" style="display:none;">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user fa-fw fa-lg"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="fa fa-envelope fa-fw fa-lg"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">New</span>
                                            <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-question-circle fa-fw fa-lg"></i> Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
                                        </a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-primary">
                                        <i class="fa fa-sign-out fa-fw"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">
            <!--===================================================-->
            <div id="content-container">
