
<?php $__env->startSection('title'); ?> Data Hasil Klasifikasi <?php $__env->stopSection(); ?>

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
                            <h2>DATA HASIL KLASIFIKASI</h2>
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
                        </div>
                    </div>
                </div>
                <div class="body">                            
                <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width: 800px;">Tweet</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Provinsi</th>
                                    <th>Label</th> 
                                    <th>Aksi</th>                                   
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th style="width: 800px;">Tweet</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Provinsi</th>
                                    <th>Label</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">                    
                    <div class="row clearfix">
                        <div class="col-xs-9 col-sm-9">
                            <h4 class="modal-title" id="defaultModalLabel">Ubah Label Data</h4>
                            <small>Perubahan label akan memindahkan data ke data training.</small>
                        </div>
                        <div class="col-xs-3 col-sm-3 align-right">
                            <div class="preloader pl-size-xs" id="preloader-update-data" style="display:none;">
                                <div class="spinner-layer pl-red-grey">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                        
                    <hr>
                </div>
                <div class="modal-body">                    
                    <h5 id="tweet-text"></h5>
                    <br />
                    <input name="group5" type="radio" id="radio_positif" value="1" class="with-gap radio-label radio-col-green" />
                    <label for="radio_positif">Positif</label>
                    <input name="group5" type="radio" id="radio_negatif" value="2" class="with-gap radio-label radio-col-red" />
                    <label for="radio_negatif">Negatif</label>
                    <input name="group5" type="radio" id="radio_netral" value="3" class="with-gap radio-label radio-col-grey" />
                    <label for="radio_netral">Netral</label>                    
                </div>
                <div class="modal-footer">                        
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success waves-effect" onClick="simpanLabel();tambahData()">Simpan</button>                        
                </div>
            </div>
        </div>
    </div>                     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>    
    <script src="<?php echo e(asset('plugins/jquery-datatable/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/tables/jquery-datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/editable-table/mindmup-editabletable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/tables/editable-table.js')); ?>"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js'></script>
    <script src="<?php echo e(asset('js/scripts-admin.js')); ?>"></script>
    <script>        
        $('.menu-item').removeClass('active')
        $('#hasil-klasifikasi').addClass('active')
        $(document).ready(function() {        
            getHasilKlasifikasi()
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminbsb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\myproject\SKRIPSI\frontend\zonalytics\resources\views/admin/predict.blade.php ENDPATH**/ ?>