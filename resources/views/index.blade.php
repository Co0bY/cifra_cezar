<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div id="login">
            <div class="container mt-5">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                                <div class="card justify-content-center align-items-center">
                                    <div class="card-body">
                                        <div class="row justify-center">

                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">Selecione o Exercicio</h5>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <a href="{{route('cifra-7-form')}}" class="btn btn-dark col-12">1 - Cifrando com Cesar</a>
                                        </div>
                                        <div class="row mt-2">
                                            <a href="{{route('cifra-mod-form')}}" class="btn btn-dark col-12">2 - Cifra de Vigener</a>
                                        </div>
                                        <div class="row mt-2">
                                            <a href="{{route('quebrando-cifra-form')}}" class="btn btn-dark col-12">3 - Decifrando</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
