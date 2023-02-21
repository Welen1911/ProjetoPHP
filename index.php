<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Calcular Imposto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">Bem-vindo!</h1>
                            <h1 class="mb-5">Digite aqui embaixo o seu sálario:</h1>
                            <?php 
                                function calcularImposto($salario) {
                                    if ($salario <= 1903.98) {
                                        return 0;
                                    } else if($salario <= 2826.65) {
                                        $resultado = ( $salario / 100) * 7.5;
                                        return $resultado;
                                    } else if($salario <= 3751.05) {
                                        $resultado = ( $salario / 100) * 15;
                                        return $resultado;
                                    } else if($salario <= 4664.68) {
                                        $resultado = ( $salario / 100) * 22.5;
                                        return $resultado;
                                    } else {
                                        $resultado = ( $salario / 100) * 27.5;
                                        return $resultado;
                                    }
                                }
                            ?>
                            <form class="form-subscribe" id="contactForm" method="post" data-sb-form-api-token="API_TOKEN">
                                <!-- Email address input-->
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" type="text" placeholder="Digite aqui" name="salario"/>
                                    </div>
                                    <div class="col-auto"><input class="btn btn-primary btn-lg" id="submitButton" type="submit" placeholder="calcular" name="calcular"></div>
                                </div>
                                <?php 
                                    if (isset($_POST['calcular'])) {
                                        $salario = (float) $_POST['salario'];
                                        $resultado = calcularImposto($salario);
                                    }
                                ?>
                            </form>
                            <h1 class="mb-5"><?php 
                                echo "Seu salário é de R$salario!<br>Você deverá pagar R$$resultado de imposto de renda!";
                            ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <p class="text-muted small mb-4 mb-lg-0"> Feito com: Bootstrap & php</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/welen1911/"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
