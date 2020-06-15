<!doctype html>
<html lang="en">

<head>
    <title>Home page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src="/storage/public/logo.png" alt="">
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="nav" style="margin-top:50px">
                    <ul>
                        <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a> </li>
                        <li><a href=""><i class="fa fa-star" aria-hidden="true"></i> Phòng & mức giá</a> </li>
                        <li><a href=""><i class="fa fa-times-circle-o" aria-hidden="true"></i> Đặt phòng</a></li>
                        <li><a href=""><i class="fa fa-image" aria-hidden="true"></i> Hình ảnh</a></li>
                        <li><a href=""> Giới thiệu</a></li>
                        <li><a href=""><i class="fa fa-user"></i> Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($rooms as $room)
            <br>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="room">
                    <div class="card">
                        <a href="">
                            <img class="card-img" src="/storage/{{$room->image}}" alt="Vans">
                        </a>
                    </div>
                    <div class="card-body">
                        <div style="">
                            <h4 style="margin:auto;text-transform: uppercase">{{$room->name}}</h4>
                        </div>
                        <table class="table ">
                            <tbody>
                                <tr>
                                    <td style="text-transform: uppercase;">Phòng: </td>
                                    <td>{{$room->typeroom}}</td>
                                </tr>
                                <tr>
                                    <td style="text-transform: uppercase;">Chỗ nghỉ: </td>
                                    <td>{{$room->number}}</td>
                                </tr>
                                <tr>
                                    <td style="text-transform: uppercase;">Kích thước:</td>
                                    <td>{{$room->area}}</td>
                                </tr>
                                <tr>
                                    <td style="text-transform: uppercase;">Giá phòng:</td>
                                    <td><b> {{$room->getDisplayPrice()}} </b></td>
                                </tr>
                                <tr>
                                    <td style="text-transform: uppercase;">Xem</td>
                                    <td style="color:#e68a00"><b>Đặt phòng</b> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>