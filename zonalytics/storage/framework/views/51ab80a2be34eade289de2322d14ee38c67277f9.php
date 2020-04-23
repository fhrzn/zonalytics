<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Zonalytics | <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">        

    <!-- Bootstrap Core Css -->
    <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo e(asset('plugins/node-waves/waves.css')); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo e(asset('plugins/animate-css/animate.css')); ?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo e(asset('plugins/morrisjs/morris.css')); ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo e(asset('css/themes/all-themes.css')); ?>" rel="stylesheet" />

    <?php echo $__env->yieldContent('style'); ?>    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>"><b>Zonalytics</b></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0);" onclick="logout()"><i class="material-icons">exit_to_app</i></a>
                        <form id="form-logout" action="<?php echo e(route('logout')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">                
                    <img src="<?php echo e(asset('images/user.png')); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></div>                    
                    <div class="email"><?php echo e(Auth::user()->email); ?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active menu-item" id="dashboard">
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-item" id="data-training">
                        <a href="<?php echo e(route('admin.data.training')); ?>">
                            <i class="material-icons">data_usage</i>
                            <span>Data Training</span>
                        </a>
                    </li>
                    <li class="menu-item" id="hasil-klasifikasi">
                        <a href="<?php echo e(route('admin.data.predict')); ?>">
                            <i class="material-icons">data_usage</i>
                            <span>Hasil Klasifikasi</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->        
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>                        
        </div>
    </section>        

    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.js')); ?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo e(asset('plugins/bootstrap-select/js/bootstrap-select.js')); ?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo e(asset('plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo e(asset('plugins/node-waves/waves.js')); ?>"></script>
    
    <!-- ChartJs -->
    <script type="text/javascript" src="<?php echo e(asset('js/Chart.bundle.min.js')); ?>"></script>    

    <!-- Custom Js -->
    <script src="<?php echo e(asset('js/admin.js')); ?>"></script>
    <!-- <script src="js/pages/index.js"></script> -->

    <!-- Demo Js -->
    <!-- <script src="<?php echo e(asset('js/demo.js')); ?>"></script> -->

    <?php echo $__env->yieldContent('script'); ?>    
</body>

</html>
<?php /**PATH E:\myproject\SKRIPSI\frontend\zonalytics\resources\views/layouts/adminbsb.blade.php ENDPATH**/ ?>