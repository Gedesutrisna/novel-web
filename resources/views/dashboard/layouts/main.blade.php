<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="/assets/icon.svg" type="image/icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Graduate&family=Inter&family=Original+Surfer&family=Playfair+Display:wght@500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('dashboard.partials.sidebar')
            
            <main class="col-md-9 ms-sm-auto col-lg-10 px-0">
            @include('dashboard.partials.navbar')

            <div class="main custom p-4">
                <section>
                    <div class="row mb-4">
                        <div class="col-lg-9">
                            <div class="row mb-4">
                                <div class="col-lg-4">
                                    <div class="box top black d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h1 class="stats white">Weekly Sales</h1>
                                            <div class="icon white rounded-circle">
                                                <img src="/assets/sale-i.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h1 class="num white">$123.000</h1>
                                            <p class="tren white mb-0">+20%</p>
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
                                            <h1 class="num">64.000</h1>
                                            <p class="tren mb-0">+20%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="box top d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h1 class="stats">Weekly Orders</h1>
                                            <div class="icon black rounded-circle">
                                                <img src="/assets/order-i-active.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h1 class="num">1.200</h1>
                                            <p class="tren mb-0">+20%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="box h-100">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h1 class="box-title mb-0">Sale Stats</h1>   
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box h-100">
                                <h1 class="box-title">New Products</h1>      
                                <table class="table-custom">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>46</td>
                                            <td><p class="label text-center">Available</p></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>46</td>
                                            <td><p class="label text-center">Available</p></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>46</td>
                                            <td><p class="label text-center">Available</p></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>46</td>
                                            <td><p class="label text-center">Available</p></td>
                                        </tr>
                                    </tbody>
                                </table>                       
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box h-100">
                                <h1 class="box-title">New Invoice</h1>
                                <table class="table-custom">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>#4323</td>
                                            <td>Windah</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>17-08-23</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>#4323</td>
                                            <td>Windah</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>17-08-23</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>#4323</td>
                                            <td>Windah</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>17-08-23</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>#4323</td>
                                            <td>Windah</td>
                                            <td>Hoodie Black</td>
                                            <td>$40.00</td>
                                            <td>17-08-23</td>
                                        </tr>
                                    </tbody>
                                </table>  
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>
