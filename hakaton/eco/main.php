<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kazecotech</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand ms-1">Kazecotech</a>
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu"
            aria-controls="navbarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="about.php" class="nav-link">О компании</a>
            </li>
            <li class="nav-item dropdown webkit-transition">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Услуги и продукция
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="main.php#usluga">Услуги</a></li>
                    <li><a class="dropdown-item" href="main.php#product">Продукция</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="tool.php" class="nav-link">Оборудование</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Лицензия</a>
            </li>
            <li class="nav-item">
                <a href="../hakaton.php" class="nav-link">Карта</a>
            </li>

        </ul>
    </div>

</nav>

<div class = "about mb-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <img src="logo.PNG" class="img-fluid" style="max-height: 300px" alt="Kazecotech">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h1>О компании</h1>
                <p>Многопрофильное предприятие ТОО «НТП Kazecotech» образовано в 2011 году.</p>
                <p>В настоящее время предприятие является осуществляет оказание услуг по сбору,
                транспортировке, переработке отходов производства с производством товарной продукции.</p>
                <p>Производственную деятельность осуществляется в соответствии с требованиями
                    всех отраслей законодательства Республики Казахстан.</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button onclick="window.location.href='about.php'" type="button" class="btn btn-dark rounded-pill">Узнать больше</button>
            </div>
        </div>
    </div>
</div>


<div class="usluga" id="usluga">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h1 class="us">Услуги</h1>
            </div>
        </div>
    <section class="dl-blurbs">
        <dl>
            <dt>Демеркуризация</dt>
            <dd>Демеркуризация (переработка) ртутьсодержащих отходов (лампы, приборы и др.).</dd>
            <dt>Утилизация</dt>
            <dd>Утилизация медицинских отходов.</dd>
            <dt>Переработка</dt>
            <dd>Утилизация/переработка отходов производства и потребления.</dd>
        </dl>
        <dl>
            <dt>Изготовление</dt>
            <dd>Изготовление на партнерской основе установок демеркуризации ртутьсодержащих отходов и их модернизация.</dd>
            <dt>Производство</dt>
            <dd>Производство на партнерской основе оборудования по утилизации отходов (инсенераторы) производства и потребления.</dd>
            <dt>Разработка</dt>
            <dd>Разработка национальных стандартов в области экологии.</dd>
        </dl>
    </section>
    </div>
</div>

<div class="container-fluid justify-content-center mt-5 mb-3 p-5 text-center" id="product">
    <h1>Продукция</h1>
    <div class="row align-items-center m-5">
        <div class="col-lg-6 border-left">
            <img src="product.PNG" class="img-fluid rounded-start border-5" style="max-width: 400px; height: auto">
        </div>

        <div class="col-lg-6 p-5 " id="tv">
            Контейнер для сбора, накопления и временного хранения люминесцентных ламп, ртутьсодержащих термометров и химических источников питания: батареек и аккумуляторов изготавливаются для установки в общественных местах, согласно национальному стандарту Республики Казахстан СТ РК 2793-2015 «Контейнер для сбора ламп и химических источников питания. Технические условия».
            Контейнер является объектом интелектуальной собственности. Предприятие является правообладателем по использованию интеллектуальной собственности – контейнера на основе лицензионного договора с патентообладателем.

        </div>
    </div>
</div>
<div class="container text-center">
    <div class="card">
        <h3 class="mb-5">ФУНКЦИОНАЛЬНОСТЬ САЙТА</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="https://i.imgur.com/2tx0muB.png" width="50" height="50" /> </div>
                    <h5 class="mt-3"><a href="../files/clients.php">ЗАДАНИЕ 4</a></h5> <small>Возможность добавлять и изменять сертификаты.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="https://i.imgur.com/6NHM9Xy.png" width="50" height="50" /> </div>
                    <h5 class="mt-3"><a href="../hakaton.php"> ЗАДАНИЕ 7</a></h5> <small>РЕДАКТИРОВАТЬ КАРТУ.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="https://i.imgur.com/9qaHVGj.png" width="50" height="50" /> </div>
                    <h5 class="mt-3"><a href="../files/index.php">ЗАДАНИЕ 4 </a> </h5> <small>теперь только для админов.</small>
                </div>
            </div>
        </div>
        <div class="button mt-5"> <button class="btn btn-primary pro-button">Add a product <i class="fa fa-long-arrow-right ml-2 mt-1"></i></button> </div>
    </div>
</div>



<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="">

    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #1c2331"
    >
        <!-- Section: Social media -->
        <section
                class="d-flex justify-content-between p-4"
                style="background-color: #6351ce"
        >
            <!-- Left -->
            <div class="me-5">
                <span>Свяжитесь с нами через:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-white me-4">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Kazecotech</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 100px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            Многопрофильное предприятие ТОО «НТП Kazecotech» образовано в 2011 году.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Адрес</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                        <p>
                            <a class="text-white">Республика Казахстан, город Нур-Султан, проспект Кабанбай батыра 11,4 секция, ВП 17</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Контакты</h6>
                        <hr
                                class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 90px; background-color: #7c4dff; height: 2px"
                        />
                        <p><i class="fas fa-envelope mr-3"></i> recikling2030@mail.ru</p>
                        <p><i class="fas fa-phone mr-3"></i> +7 708 425 15 88</p>
                        <p><i class="fas fa-print mr-3"></i> +7 7172 25 15 88 </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Footer -->

</div>
<!-- End of .container -->

</body>
</html>
