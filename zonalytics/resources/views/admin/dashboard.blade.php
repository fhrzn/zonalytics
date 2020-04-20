@extends('layouts.adminbsb')
@section('title') Dashboard @endsection

@section('style')
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{asset('css/style-admin.css')}}">
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>PETA PERSEBARAN</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">                                    
                            <button type="button" class="btn btn-primary waves-effect" id="back-to-center">Tengahkan</button>
                        </div>
                    </div>                            
                </div>
                <div class="body">                            
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>                     

    <div class="row clearfix">                
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2>Pie Chart</h2>                            
                </div>
                <div class="body">                            
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2>Bar Chart</h2>                            
                </div>
                <div class="body">                            
                    <canvas id="bar-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Bar Chart</h2>                            
                </div>
                <div class="body">                            
                    <canvas id="line-chart"></canvas>
                </div>
            </div>
        </div>                
    </div>
@endsection

@section('script')
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js'></script>
    <script src="{{asset('js/scripts-admin.js')}}"></script>
    <script>
        $('.menu-item').removeClass('active')
        $('#dashboard').addClass('active')
        $(document).ready(function() {        
            allData()
            settingMapbox()
            setTimeout(() => {
                requestIntervally()            
            }, 3000);
        })
    </script>
@endsection