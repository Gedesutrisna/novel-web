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
                            <div class="icon black rounded-circle">
                                <img src="/assets/visitor-i.svg" alt="">
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
                        <canvas id="productChart" class="w-100" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="box h-100 d-flex flex-column">
                <div class="">
                    <h1 class="box-title">Top Sales</h1>  
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <div class="icon second rounded-circle"><img src="/assets/product-i.svg" alt=""></div>
                            <div class="">
                                <p class="inbox-name custom">Hoodie Black</p>
                                <div class="d-flex gap-1">
                                    <p class="sale">+243 Sales</p>
                                    <img src="/assets/dot.svg" alt="">
                                    <img src="/assets/star.svg" alt="">
                                    <p class="sale black">5</p>
                                </div>
                            </div>
                        </div>
                        <p class="amount">+$123.000</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <div class="icon second rounded-circle"><img src="/assets/product-i.svg" alt=""></div>
                            <div class="">
                                <p class="inbox-name custom">Hoodie Green</p>
                                <div class="d-flex gap-1">
                                    <p class="sale">+222 Sales</p>
                                    <img src="/assets/dot.svg" alt="">
                                    <img src="/assets/star.svg" alt="">
                                    <p class="sale black">5</p>
                                </div>
                            </div>
                        </div>
                        <p class="amount">+$121.000</p>
                    </div>
                </div>
                <hr class="dash">
                <div class="">
                    <h1 class="box-title">History</h1>  
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <img src="/assets/profile1.svg" alt="">
                            <div class="">
                                <p class="inbox-name custom">Jhon Doe</p>
                                <p class="sale">1 Minutes Ago</p>
                            </div>
                        </div>
                        <p class="amount">+$123.000</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <img src="/assets/profile2.svg" alt="">
                            <div class="">
                                <p class="inbox-name custom">Jane Smith</p>
                                <p class="sale">2 Minutes Ago</p>
                            </div>
                        </div>
                        <p class="amount">+$123.000</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <img src="/assets/profile3.svg" alt="">
                            <div class="">
                                <p class="inbox-name custom">Mei Mei</p>
                                <p class="sale">4 Minutes Ago</p>
                            </div>
                        </div>
                        <p class="amount">+$123.000</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <img src="/assets/profile4.svg" alt="">
                            <div class="">
                                <p class="inbox-name custom">Michael Lee</p>
                                <p class="sale">8 Minutes Ago</p>
                            </div>
                        </div>
                        <p class="amount">+$123.000</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex gap-2">
                            <img src="/assets/profile5.svg" alt="">
                            <div class="">
                                <p class="inbox-name custom">Sarah</p>
                                <p class="sale">1 Hour Ago</p>
                            </div>
                        </div>
                        <p class="amount">+$123.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection