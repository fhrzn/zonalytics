let dataset = []
let provinsi = []
let map;
let totalData;
let sentiment;
let koordinat = [
    {
      "id": "11",
      "name": "ACEH",
      "alt_name": "ACEH",
      "latitude": 4.36855,
      "longitude": 97.0253
    },
    {
      "id": "12",
      "name": "SUMATERA UTARA",
      "alt_name": "SUMATERA UTARA",
      "latitude": 2.19235,
      "longitude": 99.38122
    },
    {
      "id": "13",
      "name": "SUMATERA BARAT",
      "alt_name": "SUMATERA BARAT",
      "latitude": -1.34225,
      "longitude": 100.0761
    },
    {
      "id": "14",
      "name": "RIAU",
      "alt_name": "RIAU",
      "latitude": 0.50041,
      "longitude": 101.54758
    },
    {
      "id": "15",
      "name": "JAMBI",
      "alt_name": "JAMBI",
      "latitude": -1.61157,
      "longitude": 102.7797
    },
    {
      "id": "16",
      "name": "SUMATERA SELATAN",
      "alt_name": "SUMATERA SELATAN",
      "latitude": -3.12668,
      "longitude": 104.09306
    },
    {
      "id": "17",
      "name": "BENGKULU",
      "alt_name": "BENGKULU",
      "latitude": -3.51868,
      "longitude": 102.53598
    },
    {
      "id": "18",
      "name": "LAMPUNG",
      "alt_name": "LAMPUNG",
      "latitude": -4.8555,
      "longitude": 105.0273
    },
    {
      "id": "19",
      "name": "KEPULAUAN BANGKA BELITUNG",
      "alt_name": "KEPULAUAN BANGKA BELITUNG",
      "latitude": -2.75775,
      "longitude": 107.58394
    },
    {
      "id": "21",
      "name": "KEPULAUAN RIAU",
      "alt_name": "KEPULAUAN RIAU",
      "latitude": -0.15478,
      "longitude": 104.58037
    },
    {
      "id": "31",
      "name": "DKI JAKARTA",
      "alt_name": "DKI JAKARTA",
      "latitude": -6.1745,
      "longitude": 106.8227
    },
    {
      "id": "32",
      "name": "JAWA BARAT",
      "alt_name": "JAWA BARAT",
      "latitude": -6.88917,
      "longitude": 107.64047
    },
    {
      "id": "33",
      "name": "JAWA TENGAH",
      "alt_name": "JAWA TENGAH",
      "latitude": -7.30324,
      "longitude": 110.00441
    },
    {
      "id": "34",
      "name": "DI YOGYAKARTA",
      "alt_name": "DI YOGYAKARTA",
      "latitude": -7.7956,
      "longitude": 110.3695
    },
    {
      "id": "35",
      "name": "JAWA TIMUR",
      "alt_name": "JAWA TIMUR",
      "latitude": -6.96851,
      "longitude": 113.98005
    },
    {
      "id": "36",
      "name": "BANTEN",
      "alt_name": "BANTEN",
      "latitude": -6.44538,
      "longitude": 106.13756
    },
    {
      "id": "51",
      "name": "BALI",
      "alt_name": "BALI",
      "latitude": -8.23566,
      "longitude": 115.12239
    },
    {
      "id": "52",
      "name": "NUSA TENGGARA BARAT",
      "alt_name": "NUSA TENGGARA BARAT",
      "latitude": -8.12179,
      "longitude": 117.63696
    },
    {
      "id": "53",
      "name": "NUSA TENGGARA TIMUR",
      "alt_name": "NUSA TENGGARA TIMUR",
      "latitude": -8.56568,
      "longitude": 120.69786
    },
    {
      "id": "61",
      "name": "KALIMANTAN BARAT",
      "alt_name": "KALIMANTAN BARAT",
      "latitude": -0.13224,
      "longitude": 111.09689
    },
    {
      "id": "62",
      "name": "KALIMANTAN TENGAH",
      "alt_name": "KALIMANTAN TENGAH",
      "latitude": -1.49958,
      "longitude": 113.29033
    },
    {
      "id": "63",
      "name": "KALIMANTAN SELATAN",
      "alt_name": "KALIMANTAN SELATAN",
      "latitude": -2.94348,
      "longitude": 115.37565
    },
    {
      "id": "64",
      "name": "KALIMANTAN TIMUR",
      "alt_name": "KALIMANTAN TIMUR",
      "latitude": 0.78844,
      "longitude": 116.242
    },
    {
      "id": "65",
      "name": "KALIMANTAN UTARA",
      "alt_name": "KALIMANTAN UTARA",
      "latitude": 2.72594,
      "longitude": 116.911
    },
    {
      "id": "71",
      "name": "SULAWESI UTARA",
      "alt_name": "SULAWESI UTARA",
      "latitude": 0.65557,
      "longitude": 124.09015
    },
    {
      "id": "72",
      "name": "SULAWESI TENGAH",
      "alt_name": "SULAWESI TENGAH",
      "latitude": -1.69378,
      "longitude": 120.80886
    },
    {
      "id": "73",
      "name": "SULAWESI SELATAN",
      "alt_name": "SULAWESI SELATAN",
      "latitude": -3.64467,
      "longitude": 119.94719
    },
    {
      "id": "74",
      "name": "SULAWESI TENGGARA",
      "alt_name": "SULAWESI TENGGARA",
      "latitude": -3.54912,
      "longitude": 121.72796
    },
    {
      "id": "75",
      "name": "GORONTALO",
      "alt_name": "GORONTALO",
      "latitude": 0.71862,
      "longitude": 122.45559
    },
    {
      "id": "76",
      "name": "SULAWESI BARAT",
      "alt_name": "SULAWESI BARAT",
      "latitude": -2.49745,
      "longitude": 119.3919
    },
    {
      "id": "81",
      "name": "MALUKU",
      "alt_name": "MALUKU",
      "latitude": -3.11884,
      "longitude": 129.42078
    },
    {
      "id": "82",
      "name": "MALUKU UTARA",
      "alt_name": "MALUKU UTARA",
      "latitude": 0.63012,
      "longitude": 127.97202
    },
    {
      "id": "91",
      "name": "PAPUA BARAT",
      "alt_name": "PAPUA BARAT",
      "latitude": -1.38424,
      "longitude": 132.90253
    },
    {
      "id": "94",
      "name": "PAPUA",
      "alt_name": "PAPUA",
      "latitude": -3.98857,
      "longitude": 138.34853
    }
  ]
const popup = new mapboxgl.Popup();
let pieChart, barChart, lineChart;
/** 
 * Request API
 */
const allData = () => {        
    $.get('http://localhost:5000/api/province', (data, status) => {
        provinsi = data.data
        console.log(provinsi)
        let d = new Date()
        let nextCrawl = new Date(`${d.getMonth()+1}/${d.getDate()+1}/${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`);        

        let storage = localStorage.getItem('next-crawl-on')        
        // console.log(storage);
        
        if (storage == null) {
            console.log('set local storage');
            
            localStorage.setItem('next-crawl-on', nextCrawl)
            localStorage.setItem('isCrawling', 0)
        } else {
            let current = new Date(`${d.getMonth()+1}/${d.getDate()}/${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`);
            let toCrawl = new Date(localStorage.getItem('next-crawl-on'))
            console.log(current, toCrawl, current>=toCrawl);
            if (current >= toCrawl) {
                if (localStorage.getItem('isCrawling') == 0) {
                    console.log('crawling data...')
                    crawlData();                    
                } else {
                    console.log('crawling is ongoing!');
                }
            } else {
                console.log('its not time yet to crawl');                               
            }
        }
    }).fail((xhr, e) => {
        alert('Sistem tidak merespon. Harap coba lagi nanti.')
    })

    $.get('http://localhost:5000/api/sentiment', (data, status) => {        
        sentiment = data
        totalData = data.data.length        
        console.log('init');
        console.log(sentiment);
        console.log(totalData);
        $('#total-data').text(totalData)
        // initChart(sentiment)
        initChart(sentiment)
    }).fail((xhr, e) => {
        alert('Sistem tidak merespon. Harap coba lagi nanti.')
    })
}

const dataByProv = (prov) => {
    $.get(`http://localhost:5000/api/sentiment/${prov}`, (data, status) => {
        sentiment = data
        
        console.log('total data', data.data.length);
        
        $('#total-data').text(data.data.length)
        settingChart(sentiment)
    }).fail((xhr, e) => {
        alert('Sistem tidak merespon. Harap coba lagi nanti.')
    })
}

const dataAll = () => {
    $.get('http://localhost:5000/api/sentiment', (data, status) => {
        sentiment = data
        // dataSentiment = {
        //   1: sentiment[0],
        //   2: sentiment[1],
        //   3: sentiment[2]
        // }      
        settingChart(sentiment)
    }).fail((xhr, e) => {
        alert('Sistem tidak merespon. Harap coba lagi nanti.')
    })
}

/**
 * Setting Mapbox
 */
const settingMapbox = () => {
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWZmYW5kMjAiLCJhIjoiY2p0bGIxYWhkMDZldzQzb2pkdnh5OWZmcCJ9.mqau-lAF-9yDP5-FLPejiQ';
    map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [128.8205, -2.2593],
        zoom: 3.65,    
    });

    map.on('load', function() {

        provinsi.forEach( (item, index) => {
            addMap(item)
        })
    })
}

const addMap = (prov) => {
    map.addSource(prov, {
        'type':'geojson',        
        'data': `http://localhost:5000/js/geo/${prov.toLowerCase()}.geojson`
    })        

    map.addLayer({
        'id':prov,
        'type':'fill',
        'source':prov,
        'layout':{},
        'paint': {
            'fill-color': '#088',
            'fill-opacity': 0.8
        }
    })

    map.on('click', prov, (e) => {        
        $('.list_provinsi').removeAttr('selected')
        dataByProv(prov)

        const selector = prov.toLowerCase().split(' ').join('_')
        $(`#${selector}`).attr('selected', 'true')

        provinsi.forEach((value, index) => {
            map.setPaintProperty(value, 'fill-opacity', 0.3)
        })
        
        let latlng = koordinat.filter(id => id.name == prov)
        latlng = [latlng[0].longitude, latlng[0].latitude]

        map.setPaintProperty(prov, 'fill-opacity', 0.8)
        
        map.flyTo({
            center: latlng,
            zoom:5.5,
            speed: 0.2,
            essential: true
        })       
    })

    map.on('mouseenter', prov, (e) => {
        popup.setLngLat(e.lngLat)
            .setHTML(e.features[0].properties.name)
            .addTo(map)

        map.getCanvas().style.cursor = 'pointer'
    })

    map.on('mouseleave', prov, () => {
        popup.remove()

        map.getCanvas().style.cursor = ''
    })
}

/**
 * Init ChartJS
 */
const initChart = (dataSentiment) => {
    var ctx = document.getElementById('myChart');
    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx = $('#myChart');
    var ctx = 'myChart';

    var ctxBar = document.getElementById('barChart');
    var ctxBar = document.getElementById('barChart').getContext('2d');
    var ctxBar = $('#barChart');
    var ctxBar = 'barChart';

    var ctxLine = document.getElementById('lineChart');
    var ctxLine = document.getElementById('lineChart').getContext('2d');
    var ctxLine = $('#lineChart');
    var ctxLine = 'lineChart'     

    var data = {
        datasets: [{
            data: dataSentiment.data.data,
            backgroundColor: [
                '#4CAF50',
                '#FF5252',
                '#455A64'
            ],
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
            'Positif',
            'Negatif',
            'Netral'
        ]
    };

    pieChart = new Chart(ctx, {
        type: 'doughnut',
        data: data,
        options: {
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        let total = 0;                        
                        data.datasets[tooltipItem.datasetIndex].data.forEach((curr) => {                          
                            if (curr!=undefined) {
                                total+=curr                              
                            }
                        })
                        var percentage = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] || '';
                        var label = data.labels[tooltipItem.index]                        
                        
                        if (label) {
                            label += ': ';
                        }
                        label += `${((percentage/total)*100).toFixed(2)}% dari ${total} data`;
                        
                        return label;
                    }
                }
            }
        }
    })

    barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
          labels: ['Positif', 'Negatif', 'Netral'],
          datasets: [{
              label: 'Jumlah Data Sentimen',
              data: dataSentiment.data.data,
              backgroundColor: [
                  // 'rgba(255, 99, 132, 0.2)',
                  // 'rgba(54, 162, 235, 0.2)',
                  // 'rgba(255, 206, 86, 0.2)',                  
                  '#4CAF50',
                  '#FF5252',
                  '#455A64'
              ],
              // borderColor: [
              //     'rgba(255, 99, 132, 1)',
              //     'rgba(54, 162, 235, 1)',
              //     'rgba(255, 206, 86, 1)',
              // ],
              // borderWidth: 1
          }]
        },
        options: {
            // layout: {
            //     padding: {
            //         left: 50,
            //         right:50,
            //         top:0,
            //         bottom:0
            //     }
            // },
            legend: {
              display: false,
              labels: {
                  fontColor: "white",
                  fontSize: 18
              }
            },  
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    })

    lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: dataSentiment.series.tahun,
            datasets: [{
                label: 'Negatif',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                data: dataSentiment.series.negatif,
                fill: false
            }, {
                label: 'Positif',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                data: dataSentiment.series.positif,
                fill: false
            }, {
                label: 'Netral',
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                data: dataSentiment.series.netral,
                fill: false
            }]
        },
        options: {
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            responsive: true,
            scales: {
                x: {
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Tahun'
                    }
                },
                y: {
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Jumlah Data'
                    }
                }
            }
        }

    })
}

const settingChart = (dataSentiment) => {    
    console.log(dataSentiment);
    console.log(typeof(dataSentiment.data.data));

    if (Array.isArray(dataSentiment.data.data)) {
        // sentiment = {
        //     data: {
        //         1: dataSentiment.data[0],
        //         2: dataSentiment.data[1],
        //         3: dataSentiment.data[2]
        //     }
        // }
        // pieChart.data.datasets[0].data = [sentiment.data[1], sentiment.data[2], sentiment.data[3]]    
        pieChart.data.datasets[0].data = dataSentiment.data.data
        pieChart.update();

        // barChart.data.datasets[0].data = [sentiment.data[1], sentiment.data[2], sentiment.data[3]]    
        barChart.data.datasets[0].data = dataSentiment.data.data
        barChart.update();
    } else {
        pieChart.data.datasets[0].data = [dataSentiment.data.data[1], dataSentiment.data.data[2], dataSentiment.data.data[3]]    
        pieChart.update();
    
        barChart.data.datasets[0].data = [dataSentiment.data.data[1], dataSentiment.data.data[2], dataSentiment.data.data[3]]    
        barChart.update();
    }
    

    lineChart.data.datasets[0].data = dataSentiment.series.negatif
    lineChart.data.datasets[1].data = dataSentiment.series.positif
    lineChart.data.datasets[2].data = dataSentiment.series.netral
    lineChart.data.labels = dataSentiment.series.tahun
    lineChart.update()
}

$('#select-provinsi').on('change', function() {
    const prov = $('#select-provinsi option:selected').attr('id').toUpperCase().split('_').join(' ')
    
    if (prov == 'ALL') {
      provinsi.forEach((value, index) => {
        map.setPaintProperty(value, 'fill-opacity', 0.8)
        map.flyTo({
          center: [128.8205, -2.2593],
          zoom: 3.65,    
          seped: 0.2,
          essential: true
        })
      })
      dataAll()
    } else {
      provinsi.forEach((value, index) => {
        map.setPaintProperty(value, 'fill-opacity', 0.3)
        map.flyTo({
          center: [128.8205, -2.2593],
          zoom: 3.65,    
          seped: 0.2,
          essential: true
        })
      })
  
      if (provinsi.indexOf(prov)!=-1) {
          dataByProv(prov)
          let latlng = koordinat.filter(id => id.name == prov)
          console.log(latlng)
          latlng = [latlng[0].longitude, latlng[0].latitude]
  
          map.setPaintProperty(prov, 'fill-opacity', 0.8)
  
          map.flyTo({
              center: latlng,
              zoom:5.5,
              speed: 0.2,
              essential: true
          })
      } else {
          $('.toast').toast('show')        
      }
    }    
})

$('#text-reload').on('click', function() {
    location.reload()
})

const crawlData = (keyword=null, startDate=null, endDate=null) => {
    localStorage.setItem('isCrawling', 1)
    $('#text-crawling').show()
    $('#spinner-crawling').show()

    if (keyword!=null && startDate!=null && endDate!=null) {
        $.ajax({
            'method': 'POST',
            'url': 'http://localhost:5000/api/fetch-data',
            'dataType': 'json',
            'contentType': 'application/json',
            'data': JSON.stringify({
                'keyword': keyword,
                'start_date': startDate,
                'end_date': endDate
            }),
            'success': (data, status) => {
                console.log('status ', status);
                console.log(data);                
                if (status == 'success') { 
                    if (data.status == 'no new data') {
                        localStorage.setItem('isCrawling', 0)
                        $('#text-crawling').hide()
                        $('#spinner-crawling').hide()
                        $('#crawl-empty').show()
                        $('#alert-crawl').show()
                    } else {
                        console.log('fetching done. refresh now');
                        let d = new Date()
                        let nextCrawl = new Date(`${d.getMonth()+1}/${d.getDate()+1}/${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`);
                        localStorage.setItem('next-crawl-on', nextCrawl)
                        localStorage.setItem('isCrawling', 0)
                        $('#text-crawling').hide()
                        $('#spinner-crawling').hide()
                        $('#crawl-success').show()
                        $('#alert-crawl').show()
                    }
                } else {
                    localStorage.setItem('isCrawling', 0)                    
                    $('#text-crawling').hide()
                    $('#spinner-crawling').hide()
                    $('#crawl-failed').show()
                    $('#alert-crawl').show()
                }
            },
            'error': (xhr, status, e) => {
                $('#text-crawling').hide()
                $('#spinner-crawling').hide()
                alert('Terjadi kesalahan pada sistem. Harap coba lagi nanti.')
            }
        })
    } else {
        $.get('http://localhost:5000/api/fetch-data', (data, status) => {
            console.log('status ', status);
            if (status == 'success') {                        
                if (data.status == 'no new data') {
                    localStorage.setItem('isCrawling', 0)
                    $('#text-crawling').hide()
                    $('#spinner-crawling').hide()
                    $('#crawl-empty').show()
                    $('#alert-crawl').show()
                } else {
                    console.log('fetching done. refresh now');
                    let d = new Date()
                    let nextCrawl = new Date(`${d.getMonth()+1}/${d.getDate()+1}/${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`);
                    localStorage.setItem('next-crawl-on', nextCrawl)
                    localStorage.setItem('isCrawling', 0)
                    $('#text-crawling').hide()
                    $('#spinner-crawling').hide()
                    $('#crawl-success').show()
                    $('#alert-crawl').show()
                }
            } else {
                localStorage.setItem('isCrawling', 0)
                $('#text-crawling').hide()
                $('#spinner-crawling').hide()
                $('#crawl-failed').show()
                $('#alert-crawl').show()
            }
        }).fail((xhr, e) => {
            $('#text-crawling').hide()
            $('#spinner-crawling').hide()
            alert('Terjadi kesalahan pada sistem. Harap coba lagi nanti.')
        })
    }

}

const requestIntervally = () => {
    let timeout = 1000 * 60 * 30
    setTimeout(run = () => {              
        console.log('executed');
        let storage = localStorage.getItem('next-crawl-on')
        console.log(storage);        
        if (storage != null) {
            console.log('storage not null, continue checking...');            
            let d = new Date()
            let current = new Date(`${d.getMonth()+1}/${d.getDate()}/${d.getFullYear()} ${d.getHours()}:${d.getMinutes()}:${d.getSeconds()}`);
            let toCrawl = new Date(localStorage.getItem('next-crawl-on'))
            console.log(current, toCrawl);
            if (current >= toCrawl) {
                if (localStorage.getItem('isCrawling') == 0) {
                    console.log('crawling data...')
                    crawlData();                    
                } else {
                    console.log('crawling is ongoing!');
                }
            } else {
                console.log('its not time yet to crawl');
            }
        } else {
            console.log('storage is null, stop here');
            
        }
        setTimeout(run, timeout)
    }, timeout);  
}

const doLogin = () => {
    $('.loader').css('visibility', 'visible')
    let btnSubmit = $('button[type="submit"]')
    btnSubmit.addClass('disabled')  
}

var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
$('#startDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    // minDate: today,
    maxDate: function () {
        return $('#endDate').val();
    }
});
$('#endDate').datepicker({
    uiLibrary: 'bootstrap4',
    iconsLibrary: 'fontawesome',
    minDate: function () {
        return $('#startDate').val();
    }
});

$('.crawl-data').on('click', function() {
    $('#keywords').val("")
    $('#startDate').val("")
    $('#endDate').val("")
})

$('#submit-crawl').on('click', function() {
    if ($('#keywords').val()!="" && $('#startDate').val()!="" && $('#endDate').val() != "") {
        let startDate = new Date($('#startDate').val())
        let endDate = new Date($('#endDate').val())
        startDate = `${startDate.getFullYear()}-${startDate.getMonth()+1}-${startDate.getDate()}`;
        endDate = `${endDate.getFullYear()}-${endDate.getMonth()+1}-${endDate.getDate()}`;
        
        crawlData($('#keywords').val(), startDate, endDate)
        $('#modal-crawl').modal('hide')
    }
    else {
        alert('Lengkapi form terlebih dahulu!')
    }
})