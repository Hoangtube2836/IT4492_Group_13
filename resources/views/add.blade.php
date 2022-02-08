<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AdminPage</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/truongcss.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span class="lab la-accusoft"></span>SHOP</h1>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Trang chu</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                        <span>Quan ly nguoi dung</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Quan ly dich vu</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shipping-fast"></span>
                        <span>Quan ly giao hang</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                        <span>Quan ly san pham</span></a><br>
                    <ul>
                        <li><a href=""><span class="las la-receipt"></span>
                                <small>Danh sach san pham</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                                <small>Tao san pham moi</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                                <small>Quan ly xuat hang</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                                <small>Quan ly hang tra ve</small></a></li>
                        <li><a href=""><span class="las la-receipt"></span>
                                <small>Quan ly nhap hang</small></a></li>
                    </ul>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Quan ly khuyen mai</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Quan ly quang cao</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Admin Page
            </h1>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search Here" />
            </div>
            <div class="user-wrapper">
                <img src="" width="30px" height="30px" alt="">
                <div>
                    <h4>AdminSystem</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <div class="main">
            
                <div class="help-form">
                    <p class="clearfix"><input type="number" name="id" placeholder="ID San pham" value="" class="half-size" id="idProduct"></p>
                    <p><input type="text" name="name" placeholder="Ten san pham" value="" class="half-size" id="nameProduct"> </p>
                    <p class="clearfix"><input type="number" name="size" placeholder="Size" class="half-size" id="sizeProduct"></p>
                    <p><input type="text" name="quantity" placeholder="So luong" value="" class="half-size" id="quantityProduct"> </p>
                    <p class="clearfix"><input type="number" name="warehouse_id" placeholder="ID kho hang" value="" class="half-size" id="idKhoProduct"></p>
                    <p><input type="text" name="source" placeholder="Nha san xuat" value="" class="half-size" id="formProduct"> </p>
                    <p class="clearfix"><input type="number" name="price" placeholder="Gia ca" value="" class="half-size" id="priceProduct"> </p>
                    <p class="clearfix">
                    <p class="submit-btn"><button id="submit">Submit</button></p>
                </div>
            
        </div>

        <script>
            $('#submit').click(() => {
                $.ajax({
                        url: '{{URL::to("api/add-product")}}',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id_product: $('#idProduct').val(),
                            name: $('#nameProduct').val(),
                            size: $('#sizeProduct').val(),
                            quantity: $('#quantityProduct').val(),
                            id_customer: $('#idKhoProduct').val(),
                            form: $('#formProduct').val(),
                            price: $('#priceProduct').val()
                        }
                    })
                    .done(function(data) {
                        $('#idProduct').val('')
                        $('#nameProduct').val('')
                        $('#sizeProduct').val('')
                        $('#quantityProduct').val('')
                        $('#idKhoProduct').val('')
                        $('#formProduct').val('')
                        $('#priceProduct').val('')
                        alert(data.message);
                    })
                    .fail(function(error) {
                        alert(error.responseJSON.message);
                    })
            })
        </script>
</body>

</html>