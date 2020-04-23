
<?php $__env->startSection('title'); ?> Data Training <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="<?php echo e(asset('css/style-admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>DATA TRAINING</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">                            
                            <div class="preloader pl-size-xs" id="preloader-data">
                                <div class="spinner-layer pl-red-grey">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-danger waves-effect" id="retrain-model" onClick="retrainModel()">Training Ulang</button>
                        </div>
                    </div>                            
                </div>
                <div class="body">
                    <div class="alert alert-warning" id="alert-retrain-model">
                        <strong>Data training baru ditemukan!</strong><br> Training ulang sistem diperlukan untuk menerapkan pembaruan data. <span href="#" class="alert-link" onClick="retrainModel()" style="cursor:pointer;">Training ulang sistem sekarang</span>.
                    </div>                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width: 800px;">Tweet</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Provinsi</th>
                                    <th>Label</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 800px;">Tweet</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Provinsi</th>
                                    <th>Label</th>                                    
                                </tr>
                            </tfoot>
                            <tbody id="table-tbody">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-success alert-dismissible" role="alert" id="alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Training ulang selesai.
    </div>
    <div class="alert alert-warning" role="alert" id="alert-retrain">
        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <div class="alert-text">
            Training ulang sistem...
        </div>
        <div class="preloader pl-size-xs" id="preloader-retrain">
            <div class="spinner-layer pl-white">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/tables/jquery-datatable.js')); ?>"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js'></script>
    <script src="<?php echo e(asset('js/scripts-admin.js')); ?>"></script>
    <script>
        $('.menu-item').removeClass('active')
        $('#data-training').addClass('active')
        $(document).ready(function() {            
            getDataTraining()
        })
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminbsb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\myproject\SKRIPSI\zonalytics\resources\views/admin/training.blade.php ENDPATH**/ ?>