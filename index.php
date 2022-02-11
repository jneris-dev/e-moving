<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Moving - Desafio Front-End 2022</title>

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php
        $dataSemana = array(
            "1ª Sem." => 2841,
            "2ª Sem." => 3257,
            "3ª Sem." => 2558,
            "4ª Sem." => 3559,
        );
        $dataMes = array(
            "Jan" => 23524,
            "Fev" => 21954,
            "Mar" => 32240,
            "Abr" => 34578,
            "Mai" => 43413,
            "Jun" => 35410,
            "Jul" => 63545,
            "Ago" => 53431,
            "Set" => 54846,
            "Out" => 68782,
            "Nov" => 84512,
            "Dez" => 76549,
        );
    ?>
    <header class="w-100 h-auto sticky-top">
        <nav class="navbar navbar-expand-md navbar-light bg-white py-3 shadow-sm">
            <div class="container">
                <a href="#">
                    <img src="https://e-moving.com.br/wp-content/uploads/2021/01/logo-e-moving-escuro.svg"
                        class="img-fluid" width="180" alt=" E-moving">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto fw-bold">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#semanal">Semanal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#mensal">Mensal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#creditos">Créditos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="banner w-100 position-relative text-light py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-around">
                <div class="col-lg-5 col-12 mb-lg-0 mb-4">
                    <h1 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
                    <p>Vestibulum faucibus justo justo, sed porttitor lectus condimentum bibendum. Duis ullamcorper
                        aliquam urna. Aenean accumsan mauris imperdiet turpis placerat elementum.</p>
                </div>
                <div class="col-lg-auto col-12">
                    <img src="https://mktplace.evolutto.com.br/wp-content/uploads/2019/07/consultoria-hibrida-financeira-capacitar-min.png"
                        class="img-fluid" alt="Illustration" />
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 h-auto position-relative py-5" id="semanal">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="line-title"></span>
                    <h2 class="display-4 fw-normal">Tabela 01</h2>
                    <p class="mb-0 small text-secondary">Dados dos lucros semanais da empresa</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center gap-3">
                <div class="col-lg-4 col-12 mb-4">
                    <table class="table table-striped" id="table01">
                        <thead>
                            <tr>
                                <th scope="col" class="text-capitalize">Semana</th>
                                <th scope="col" class="text-capitalize">Lucro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dataSemana as $semana => $lucro) {
                            echo '<tr><td class="semana">'.$semana.'</td><td class="lucro">'.$lucro.'</td></tr>';
                        };?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-7 col-12">
                    <div id="chart-week"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 h-auto position-relative py-5 bg-light" id="mensal">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="line-title"></span>
                    <h2 class="display-4 fw-normal">Tabela 02</h2>
                    <p class="mb-0 small text-secondary">Dados dos lucros mensais da empresa</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center gap-3">
                <div class="col-lg-4 col-12 mb-4">
                    <table class="table table-striped" id="table02">
                        <thead>
                            <tr>
                                <th scope="col" class="text-capitalize">Mês</th>
                                <th scope="col" class="text-capitalize">Lucro Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($dataMes as $mes => $lucro) {
                            echo '<tr><td class="mes">'.$mes.'</td><td class="lucro-total">'.$lucro.'</td></tr>';
                        };?>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-7 col-12">
                    <div id="chartMonth"></div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-2 bg-default text-light position-relative" id="creditos">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <small>
                        E-Moving - Desafio Front-End 2022 | Por <a href="http://jneris.com.br"><b>João
                                Neris</b></a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="./scripts.js" type="text/javascript"></script>
</body>

</html>