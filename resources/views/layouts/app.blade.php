<!doctype html>
<html lang="en">

<head>
    <title>Группа Беркут</title>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
    <meta http-equiv="Cache-Control" content ="[no-cache]">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f30db79fe3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/response.css')}}">
</head>
<body class="home">
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/images/berkut_col.svg') }}" width="240" height="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Услуги ЧОП:</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="creating">Создание Службы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="information">Информационная Безопасность</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="economic">Экономическая Безопасность</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="physic">Физическая и Техническая Безопасность</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-4">
                <div class="footer-block footer-telephone">
                    <a href="tel:+7(495)9797158"> <div class="footer-image">
                            <i class="fa fa-duotone fa-phone"></i>
                        </div></a>
                    <a href="tel:+7(495)9797158">+7(495) 979-71-58</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-4">
                <div class="footer-block footer-telegram">
                    <a href="https://t.me/jjjdddgggbpl"  target="_blank"> <div class="footer-image">
                            <i class="fa-brands fa-telegram"></i>
                        </div></a>
                    <a href="https://t.me/jjjdddgggbpl" target="_blank">Telegram...</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-4">
                <div class="footer-block footer-whatsapp">
                    <a href="https://wa.me/+79264796414"  target="_blank"> <div class="footer-image">
                            <i class="fa fa-brands fa-whatsapp"></i>
                        </div></a>
                    <a href="https://wa.me/+79264796414"  target="_blank">WHATSAPP...</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-p">
    <p>&copy; ЧОП «ГРУППА-БЕРКУТ-М»</p>
</div>
<div class="to_top">
    <i class="fa-sharp fa-solid fa-angle-up"></i>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
