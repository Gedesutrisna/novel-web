@extends('dashboard.layouts.main')
@section('container')
<section>
    <div class="row mb-4">
        <div class="col-lg-9">
            <div class="row mb-4">
                <div class="col-lg-4">
                    <div class="box top black d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="stats white">Novel</h1>
                            <div class="icon white rounded-circle">
                                <img src="/assets/sale-i.svg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="num white">{{ $novels->count() }}</h1>
                            <p class="tren white mb-0">+20%</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box top d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="stats">Episode</h1>
                            <div class="icon black rounded-circle">
                                <img src="/assets/order-i-active.svg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="num">{{ $episodes->count() }}</h1>
                            <p class="tren mb-0">+20%</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box top d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="stats">Weekly Visitors</h1>
                            <div class="">
                                <div class="icon black rounded-circle">
                                    <img src="/assets/visitor-i-active.svg" alt="">
                                </div>
                            </div>
                            
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="num">{{ $users->count() }}</h1>
                            <p class="tren mb-0">+20%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box h-100">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h1 class="box-title mb-0">Visitiors Stats</h1>   
                            <div class="d-flex gap-2">
                                <button class="main-btn">Day</button>
                                <button class="main-btn">Week</button>
                                <button class="main-btn active">Month</button>
                            </div>                          
                        </div>
                        <canvas id="myChart" class="w-100" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box h-100 d-flex flex-column">
                <div class="">
                    <h1 class="box-title">History</h1>  
                    @foreach ($users as $user)
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <img src="/assets/profile1.svg" alt="">
                            <div class="">
                                <p class="inbox-name custom">{{ $user->name }}</p>
                                <p class="sale">{{ $user->created_at->format('m/d/Y H:i'); }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Novels', 'Episodes', 'Users'],
          datasets: [{
              label: 'Amount',
              data: [{{ $novels->count() }},{{ $episodes->count() }}, {{ $users->count() }}],
              backgroundColor: [
                  '#B9B9B9',
                  '#EEE9DA',
                  '#000000'
              ],
              borderRadius: 50,
          }]
      },
      options: {
          title: {
              display: true,
        text: 'Donate Chart'
    },
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
        }
  });
      // Opsi konfigurasi untuk grafik
      const options = {
        responsive: false,
        maintainAspectRatio: false,
        scales: {
            x: {
                grid: {
                    display: false, // Hapus garis grid vertikal
                },
            },
            y: {
                grid: {
                    display: true, // Tampilkan garis grid horizontal
                },
                ticks: {
                    callback: function(value, index, values) {
                        return '$' + value ; // Tambahkan teks di samping label dataranges
                    },
                },
            }
        },
        plugins: {
            legend: {
                display: false, // Matikan tampilan default legend
            }
        }
    };


  </script>
        @endsection