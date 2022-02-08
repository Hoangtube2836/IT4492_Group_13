<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/truongcss.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> AdminPage</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="{{asset('assets/truongcss.css')}}">
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
            <div id="root"></div>
        </div>
        <script>
            
            const root = document.getElementById('root')
           
            fetch('{{URL::to("api/show-product")}}', {
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {

                    var hihi = '<div class="product">',
                        haha = '<div class="re_product">',
                        i = 0,
                        j = 0
                    var data1 = data.data2
                    var data = data.data
                    data.map(() => {
                        hihi += `
                            <h3> Sản phẩm thứ ` + (i+1) + `
                            <p> Id sản phẩm là: ` + data[i]['id'] + ` </p>
                            //  <p> Product id: ` + data[i].product_id + ` </p>
                            <p> Customer Id: ` + data[i].customer_id + ` </p>
                            <p> Quantity: ` + data[i].quantity + ` </p>
                            <p> Giá sản phẩm: ` + data[i].price + ` </p>
                            <p> Mô tả sản phẩm: ` + data[i].description + ` </p>
                            <p> Ngày tạo: ` + data[i].created + ` </p>
                            <p> Form: ` + data[i].form + ` </p>
                            <p> To: ` + data[i].to + ` </p>
                            <p> State: ` + data[i].state + ` </p>
                            <br>
                        `
                        i++
                    })

                    data1.map(() => {
                        haha += `
                            <h3> Return Product: ` + (j+1) + `
                            <p> Id sản phẩm là: ` + data1[j]['id'] + ` </p>
                            // <p> Product id: ` + data1[j].product_id + ` </p>
                            <p> Customer Id: ` + data1[j].customer_id + ` </p>
                            <p> Quantity: ` + data1[j].quantity + ` </p>
                            <p> Giá sản phẩm: ` + data1[j].price + ` </p>
                            <p> Mô tả sản phẩm: ` + data1[j].description + ` </p>
                            <p> Ngày tạo: ` + data1[j].created + ` </p>
                            <p> Form: ` + data1[j].form + ` </p>
                            <p> To: ` + data1[j].to + ` </p>
                            <p> State: ` + data1[j].state + ` </p>
                            <br>
                        `
                        j++
                    })

                    hihi+='</div>'
                    haha+='</div>'

                    root.innerHTML += hihi
                    root.innerHTML += haha
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            
        </script>
    </body>

    </html>