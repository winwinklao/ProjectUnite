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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Product Group</title>
</head>
<body>
    <div class="container">
        <div class= "row" style="margin-top:20px">
            <div class="col-9">
                <h1>กลุ่มสินค้า</h1>
            </div>
            <div class="col" style="margin-top:25px">
                <h7 style="font-size:120%">
                    <img src="coins.png" alt="history" style="width:25px; height:25px;">
                    ราคารวมของเดือนที่เเล้ว 226200
                </h7>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-top:40px">
            <div class="accordion-item">
                <h2 class="accordion-header accordion" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h6>กลุ่มA</h6>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered" style="border:10px; border-color: #d6d4cf;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="mi.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>WO0001</td>
                                    <td>ไม้อัด</td>
                                    <td>800</td>
                                    <td>150</td>
                                    <td>123000</td>
                                    <td>54.5%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td scope="row">2</td>
                                    <td><img src="mison.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>IC0001</td>
                                    <td>ไม้สนเเผ่น</td>
                                    <td>600</td>
                                    <td>150</td>
                                    <td>54000</td>
                                    <td>23.9%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 78.4%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <h6>กลุ่มB</h6>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered" style="border:10px; border-color: #d6d4cf;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="ทีโอเอ-แลคเกอร์เงา-T-5000.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>RE0001</td>
                                    <td>เเลกเกอร์เงา</td>
                                    <td>450</td>
                                    <td>150</td>
                                    <td>15000</td>
                                    <td>13%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 13%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <h6>กลุ่มC</h6>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered" style="border:10px; border-color: #d6d4cf;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="85fdcd50956ea8862427916f7ae68aad.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>RE0002</td>
                                    <td>กระดาษทราย</td>
                                    <td>600</td>
                                    <td>5</td>
                                    <td>9000</td>
                                    <td>8.6%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 8.6%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>







<!--<div style="margin-top:70px; ">
            <div class="w3-container" style="margin-top:35px; ">
                <h4>กลุ่มA</h4>
                <div class="w3-dropdown-hover"><img src="https://www.flaticon.com/svg/vstatic/svg/56/56809.svg?token=exp=1613683109~hmac=de32c0989754aa2401d1c8e3870a472d" alt="Monterosso" style="width:15px; height:15px;">
                    <div class="w3-dropdown-content" >
                        {{--<img src="img_snowtops.jpg" alt="Norway" style="width:100%">
                        <a href="#" class="w3-border">Visit Norway »</a>--}}
                        <table class="table table-bordered" style="margin-left:20px; border:10px; border-color: #d6d4cf; width:230%;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="mi.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>WO0001</td>
                                    <td>ไม้อัด</td>
                                    <td>800</td>
                                    <td>150</td>
                                    <td>123000</td>
                                    <td>54.5%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td scope="row">2</td>
                                    <td><img src="mison.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>IC0001</td>
                                    <td>ไม้สนเเผ่น</td>
                                    <td>600</td>
                                    <td>150</td>
                                    <td>54000</td>
                                    <td>23.9%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 78.4%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w3-container" style="margin-top:35px; ">
                <h4>กลุ่มB</h4>
                <div class="w3-dropdown-hover"><img src="https://www.flaticon.com/svg/vstatic/svg/56/56809.svg?token=exp=1613683109~hmac=de32c0989754aa2401d1c8e3870a472d" alt="Monterosso" style="width:15px; height:15px;">
                    <div class="w3-dropdown-content" >
                        {{--<img src="img_snowtops.jpg" alt="Norway" style="width:100%">
                        <a href="#" class="w3-border">Visit Norway »</a>--}}
                        <table class="table table-bordered" style="margin-left:20px; border:10px; border-color: #d6d4cf; width:230%;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="ทีโอเอ-แลคเกอร์เงา-T-5000.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>RE0001</td>
                                    <td>เเลกเกอร์เงา</td>
                                    <td>450</td>
                                    <td>150</td>
                                    <td>15000</td>
                                    <td>13%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w3-container" style="margin-top:35px;">
                <h4>กลุ่มC</h4>
                <div class="w3-dropdown-hover"><img src="https://www.flaticon.com/svg/vstatic/svg/56/56809.svg?token=exp=1613683109~hmac=de32c0989754aa2401d1c8e3870a472d" alt="Monterosso" style="width:15px; height:15px;">
                    <div class="w3-dropdown-content" >
                        {{--<img src="img_snowtops.jpg" alt="Norway" style="width:100%">
                        <a href="#" class="w3-border">Visit Norway »</a>--}}
                        <table class="table table-bordered" style="margin-left:20px; border:10px; border-color: #d6d4cf; width:230%;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="85fdcd50956ea8862427916f7ae68aad.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>RE0002</td>
                                    <td>กระดาษทราย</td>
                                    <td>600</td>
                                    <td>5</td>
                                    <td>9000</td>
                                    <td>8.6%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>-->