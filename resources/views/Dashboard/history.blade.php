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

   

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>--}}



    <title>History</title>
</head>
<body>
    <div class="container">
        <div class= "row" style="margin-top:20px">
            <div class="col">
                <h1>ประวัติทั้งหมด</h1>
            </div>
            <div class="col-4" style="margin-top:20px">
                <div class="row">
                    <div class="col-3" style="text-align:center;"> 
                        <h7 style="font-size:100%; margin-left:5px;">เลือกวันที่:</h7>
                    </div>
                    <div class="col-6">
                        <form style="text-align:center;">
                            <input type="month" name="bdaymonth">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-8"></div>
            <div class="col">
                <div class="row">
                    <div class="col" style="margin-left:10px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ประวัติทั้งหมด</option>
                            <option value="1">ประวัตินำสินค้าเข้า</option>
                            <option value="2">ประวัตินำออกสินค้า</option>
                            <option value="3">ประวัติรายการสินค้าเสียเปล่า</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <button class="btn btn-square btn-dark" type="button" style="background-color:black;">ค้นหา</button>
            </div>
        </div>
        <table id="tech-companies-1-clone" class="table table-striped table-hover" style="margin-top:20px; hight:400%;">
            <thead style="text-align:center; text-size:10px"> 
                <th>วัน/เดือน/ปี</th>
                <th>เวลา</th>
                <th>รหัสสินค้า</th>
                <th>บริษัท</th>
                <th>พนักงาน</th>
                <th>สถานะ</th>
                <th >จำนวนเงิน</th>
            </thead>
            <tbody>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>12.30 น.</td>
                    <td>RE0001</td>
                    <td>TOA</td>
                    <td>Username</td>
                    <td>สินค้าหมดอายุ</td>
                    <td>250</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>12.30 น.</td>
                    <td>EOR0003</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>การจัดส่งสมบูรณ์</td>
                    <td>250</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>12.30 น.</td>
                    <td>IOP0002</td>
                    <td>TOA</td>
                    <td>Username</td>
                    <td>ส่งตรงเวลา</td>
                    <td>250</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>08.31 น.</td>
                    <td>EOR0002</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>การจัดส่งผิดพลาด</td>
                    <td>150</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>08.31 น.</td>
                    <td>IOP0001</td>
                    <td>TOA</td>
                    <td>Username</td>
                    <td>ส่งไม่ตรงเวลา</td>
                    <td>150</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>08.31 น.</td>
                    <td>WO0001</td>
                    <td>TOA</td>
                    <td>Username</td>
                    <td>สินค้าหมดอายุ</td>
                    <td>150</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>08.31 น.</td>
                    <td>WO0001</td>
                    <td>TOA</td>
                    <td>Username</td>
                    <td>สินค้าสูญหาย</td>
                    <td>1500</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">02/01/2021</td>
                    <td>08.31 น.</td>
                    <td>BR0001</td>
                    <td>TOA</td>
                    <td>Username</td>
                    <td>สินค้าสูญหาย</td>
                    <td>150</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>14.30 น.</td>
                    <td>EOR0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>การจัดส่งไม่สมบูรณ์</td>
                    <td>2500</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>13.30 น.</td>
                    <td>WO0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>ยกเลิก</td>
                    <td>1500</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>13.30 น.</td>
                    <td>RC0002</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>1500</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">01/01/2021</td>
                    <td>08.31 น.</td>
                    <td>RC0001</td>
                    <td>-</td>
                    <td>Username</td>
                    <td>คืนสินค้า</td>
                    <td>750</td>
                </tr>
                
            </tbody>
        </table>
        {{--<div class="row" style="margin-left:20px;">
            <div class="col">
                <p>หน้า: </p>
            </div>
            <div class="col">
                <a href="">1</a>
            </div>
            <div class="col">
                <a href="" style="color:black;">2</a>
            </div>
            <div class="col">
                <a href="" style="color:black;">3</a>
            </div>
            <div class="col">
                <a href="" style="color:black;">4</a>
            </div>
            <div class="col">
                <a href="" style="color:black;">5</a>
            </div>
            <div class="col">
                <a href="" style="color:black;">6</a>
            </div>
            <div class="col">
                <a href="" style="color:black;">>></a>
            </div>
            <div class="col-9"></div>
        </div>--}}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#" style="color:black">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">1</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">2</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">3</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">4</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">5</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">Next</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>







<!--<div class="container">
    <div class= "row" style="margin-top:20px">
            <div class="col">
                <h1>ประวัติทั้งหมด</h1>
            </div>
            <div class="col-4" style="margin-top:20px">
                <div class="row">
                    <div class="col-3" style="text-align:center;"> 
                        <h7 style="font-size:100%; margin-left:5px;">เลือกวันที่:</h7>
                    </div>
                    <div class="col-6">
                        <form style="text-align:center;">
                            <input type="month" name="bdaymonth">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-8"></div>
            <div class="col">
                <div class="row">
                    <div class="col" style="margin-left:10px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ประวัติทั้งหมด</option>
                            <option value="1">ประวัตินำสินค้าเข้า</option>
                            <option value="2">ประวัตินำออกสินค้า</option>
                            <option value="3">ประวัติรายการสินค้าเสียเปล่า</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <button class="btn btn-square btn-dark" type="button" style="background-color:black;">ค้นหา</button>
            </div>
        </div>
        <div style="margin-top: 30px;">
            <div style="width:100%; height:40px; text-align:center;">
                <table id="myfixtable"  class="table table-stroped" style="margin-bottom:0px; text-align:center; text-size:10px;">
                    <thead></thead>
                    <tbody style="visibility:hidden;"></tbody>
                </table>
            </div>    
            <div class="bodytable"  style="width:100%;overflow:auto;height:480px;">
                <table id="mytable" class="table table-striped table-hover">
                    <thead style="display:none;"> 
                        <th>วัน/เดือน/ปี</th>
                        <th>เวลา</th>
                        <th>รหัสสินค้า</th>
                        <th>บริษัท</th>
                        <th>พนักงาน</th>
                        <th>สถานะ</th>
                        <th>จำนวนเงิน</th>
                    </thead>
                    <tbody>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>12.30 น.</td>
                            <td>RE0001</td>
                            <td>TOA</td>
                            <td>Username</td>
                            <td>สินค้าหมดอายุ</td>
                            <td>250</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>12.30 น.</td>
                            <td>EOR0003</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>การจัดส่งสมบูรณ์</td>
                            <td>250</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>12.30 น.</td>
                            <td>IOP0002</td>
                            <td>TOA</td>
                            <td>Username</td>
                            <td>ส่งตรงเวลา</td>
                            <td>250</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>08.31 น.</td>
                            <td>EOR0002</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>การจัดส่งผิดพลาด</td>
                            <td>150</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>08.31 น.</td>
                            <td>IOP0001</td>
                            <td>TOA</td>
                            <td>Username</td>
                            <td>ส่งไม่ตรงเวลา</td>
                            <td>150</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>08.31 น.</td>
                            <td>WO0001</td>
                            <td>TOA</td>
                            <td>Username</td>
                            <td>สินค้าหมดอายุ</td>
                            <td>150</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>08.31 น.</td>
                            <td>WO0001</td>
                            <td>TOA</td>
                            <td>Username</td>
                            <td>สินค้าสูญหาย</td>
                            <td>1500</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">02/01/2021</td>
                            <td>08.31 น.</td>
                            <td>BR0001</td>
                            <td>TOA</td>
                            <td>Username</td>
                            <td>สินค้าสูญหาย</td>
                            <td>150</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>14.30 น.</td>
                            <td>EOR0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>การจัดส่งไม่สมบูรณ์</td>
                            <td>2500</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>13.30 น.</td>
                            <td>WO0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>ยกเลิก</td>
                            <td>1500</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>13.30 น.</td>
                            <td>RC0002</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>1500</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td scope="row">01/01/2021</td>
                            <td>08.31 น.</td>
                            <td>RC0001</td>
                            <td>-</td>
                            <td>Username</td>
                            <td>คืนสินค้า</td>
                            <td>750</td>
                        </tr>
                    </tbody>        
                </table>
            </div>
        </div>
        <nav aria-label="Page navigation example" style="margin-top:16px;">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#" style="color:black">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">1</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">2</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">3</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">4</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">5</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color:black">Next</a></li>
            </ul>
        </nav>
    </div>
    <script src="https://unpkg.com/jquery@3.2.1"></script>
    <script type="text/javascript">
        $(function(){
            $("#myfixtable thead").html($("#mytable thead tr:eq(0)").clone());
            $("#myfixtable tbody").html($("#mytable tbody tr:eq(0)").clone());
        });
    </script>-->