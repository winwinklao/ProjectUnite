<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" 
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:20px">
            <div class="col">
                <h1>เเดชบอร์ด</h1>
            </div>
            <div class="col" style="margin-top:20px; text-align:end;">
                <a href="{{route('History')}}" style="color:black;">
                    <img src="clock.png" alt="history" style="width:30px; height:30px;">
                    </h6>ประวัติทั้งหมด</h6>
                </a>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Customers</h5>
                    <div class="card-body">
                        <h5 class="card-title">345k</h5>
                        <p class="card-text">Feb 1 - Apr 1, United States</p>
                        <p class="card-text text-success">18.2% increase since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Revenue</h5>
                    <div class="card-body">
                        <h5 class="card-title">$2.4k</h5>
                        <p class="card-text">Feb 1 - Apr 1, United States</p>
                        <p class="card-text text-success">4.6% increase since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card" style="border-color: blue">
                    <h5 class="card-header">Purchases</h5>
                    <div class="card-body">
                        <h5 class="card-title">43</h5>
                        <p class="card-text">Feb 1 - Apr 1, United States</p>
                        <p class="card-text text-danger">2.6% decrease since last month</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="card">
                    <h5 class="card-header">Traffic</h5>
                    <div class="card-body">
                        <h5 class="card-title">64k</h5>
                        <p class="card-text">Feb 1 - Apr 1, United States</p>
                        <p class="card-text text-success">2.5% increase since last month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" style="margin-top:40px;">
            <a href="{{route('ProductGroup')}}" style="color:black;">
                <img src="product.png" alt="history" style="width:30px; height:30px;">
                </h6>กลุ่มสินค้า</h6>
            </a>
        </div>
        <div class="col" style="margin-top:20px;">
            <a href="{{route('RankingExport')}}" style="color:black;">
                <img src="search-engine.png" alt="history" style="width:30px; height:30px;">
                </h6>อันดับสินค้าที่ส่งออกมากที่สุด</h6>
            </a>
        </div>
    </div>
</body>
</html>