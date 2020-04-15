<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zonalytics</title>    
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{asset('css/style-dashboard.css')}}">
    <!-- MDB icon -->
    <link rel="icon" href="{{asset('mdb-favicon.ico')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Chart JS -->
    <link rel="stylesheet" href="{{asset('css/Chart.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">    
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        
    </style>
</head>
<body>
    <div class="custom-container">       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><b>Zonalytics</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        @if (Auth::check())
                            <a class="nav-item nav-link" href="{{route('admin.dashboard')}}" id="menu-login">Dashboard</a>
                        @else
                            <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#exampleModal" id="menu-login">Login</a>
                        @endif
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link crawl-data" href="#" data-toggle="modal" data-target="#modal-crawl">Crawl Data</a>
                    </li>
                </ul>
                <span class="navbar-text" id="text-crawling">
                    Memperbarui data...
                </span>                
                <div class="spinner-border text-light float-right spinner-border-sm" id="spinner-crawling" role="status">                    
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </nav>
        <div id="map"></div>
        <div id="main-content">
            <div class="row justify-content-end">
                <div class="col-4">                                        
                    <div class="align-slef-end card col-12">
                        <div class="card-body">
                            <h5 class="card-title"><a>Pilih Provinsi</a></h5>
                            <select id="select-provinsi" class="custom-select">
                                <option class="list_provinsi" id="all">Semua Provinsi</option>
                                <option class="list_provinsi" id="aceh">Aceh</option>
                                <option class="list_provinsi" id="bali">Bali</option>
                                <option class="list_provinsi" id="banten">Banten</option>
                                <option class="list_provinsi" id="bengkulu">Bengkulu</option>
                                <option class="list_provinsi" id="di_yogyakarta">D.I. Yogyakarta</option>
                                <option class="list_provinsi" id="dki_jakarta">DKI Jakarta</option>
                                <option class="list_provinsi" id="gorontalo">Gorontalo</option>
                                <option class="list_provinsi" id="jambi">Jambi</option>
                                <option class="list_provinsi" id="jawa_barat">Jawa Barat</option>
                                <option class="list_provinsi" id="jawa_tengah">Jawa Tengah</option>
                                <option class="list_provinsi" id="jawa_timur">Jawa Timur</option>
                                <option class="list_provinsi" id="kalimantan_barat">Kalimantan Barat</option>
                                <option class="list_provinsi" id="kalimantan_selatan">Kalimantan Selatan</option>
                                <option class="list_provinsi" id="kalimantan_tengah">Kalimantan Tengah</option>
                                <option class="list_provinsi" id="kalimantan_timur">Kalimantan Timur</option>
                                <option class="list_provinsi" id="kalimantan_utara">Kalimantan Utara</option>
                                <option class="list_provinsi" id="kepulauan_bangka_belitung">Kep. Bangka Belitung</option>
                                <option class="list_provinsi" id="kepulauan_riau">Kep. Riau</option>
                                <option class="list_provinsi" id="lampung">Lampung</option>
                                <option class="list_provinsi" id="maluku_utara">Maluku Utara</option>
                                <option class="list_provinsi" id="maluku">Maluku</option>
                                <option class="list_provinsi" id="nusa_tenggara_barat">Nusa Tenggara Barat</option>
                                <option class="list_provinsi" id="nusa_tenggara_timur">Nusa Tenggara Timur</option>
                                <option class="list_provinsi" id="papua_barat">Papua Barat</option>
                                <option class="list_provinsi" id="papua">Papua</option>
                                <option class="list_provinsi" id="riau">Riau</option>
                                <option class="list_provinsi" id="sulawesi_barat">Sulawesi Barat</option>
                                <option class="list_provinsi" id="sulawesi_selatan">Sulawesi Selatan</option>
                                <option class="list_provinsi" id="sulawesi_tengah">Sulawesi Tengah</option>
                                <option class="list_provinsi" id="sulawesi_tenggara">Sulawesi Tenggara</option>
                                <option class="list_provinsi" id="sulawesi_utara">Sulawesi Utara</option>
                                <option class="list_provinsi" id="sumatera_barat">Sumatera Barat</option>
                                <option class="list_provinsi" id="sumatera_selatan">Sumatera Selatan</option>
                                <option class="list_provinsi" id="sumatera_utara">Sumatera Utara</option>
                            </select>
                        </div>  
                    </div>
                    <div class="align-self-end card col-12">                                                                      
                        <div class="card-body">                            
                            <h5 class="card-title"><a>Analisis Sentimen</a></h5>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="false" data-interval='false'>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">                                        
                                        <canvas id="myChart"></canvas>
                                  </div>
                                  <div class="carousel-item">                                    
                                        <canvas id="barChart"></canvas>
                                  </div>
                                  <div class="carousel-item">
                                      <canvas id="lineChart"></canvas>
                                  </div>
                                </div>                                
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <img src="img/caret-left.svg">                                  
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <img src="img/caret-right.svg">
                                </a>
                            </div>                              
                        </div>            
                    </div>
                    <div class="align-self-end">
                        <div class="alert alert-warning" id="alert-crawl" role="alert">
                            <div id="crawl-success">
                                <a href="http://localhost:8000" class="alert-link">Muat ulang</a> untuk memperbarui data.
                            </div>
                            <div id="crawl-failed">
                                Crawl gagal, coba lagi nanti.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="crawl-empty">
                                Tidak ada data baru ditemukan.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>                            
                        </div>                        
                        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true" data-delay="3000">                            
                            <div class="toast-body bg-warning">
                                <span class="text-black">Data sentimen tidak ditemukan!</span>                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masuk sebagai Pakar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('login')}}" onsubmit="doLogin(event)">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" required id="email" name="email" aria-describedby="emailHelp">                          
                          @if ($errors->has('email'))
                              <small id="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
                          @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" required id="password" name="password">
                            @if ($errors->has('password'))
                                <small id="emailHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="loader d-flex justify-content-center">
                        <div class="spinner-grow text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>                        
                        <div class="spinner-grow text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-crawl" tabindex="-1" role="dialog" aria-labelledby="modal-crawl" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crawl Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="keywords">Kata Kunci</label>
                        <input id="keywords" type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="startDate">Tanggal Mulai</label>
                        <input id="startDate" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="endDate">Tanggal Selesai</label>
                        <input id="endDate" class="form-control" />
                    </div>
                    <button type="submit" id="submit-crawl" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>
        </div>
    </div>

<script src='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js'></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Chart.bundle.min.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script>    
    $(document).ready(function() {        
        allData()
        settingMapbox()
        setTimeout(() => {
            requestIntervally()            
        }, 3000);
    })

</script>
</body>
</html>