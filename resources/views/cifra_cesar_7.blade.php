<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
            <div class="container mt-5">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="{{route('cifra-7')}}" method="post">
                                @csrf
                                <div class="card justify-content-center align-items-center">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">

                                            </div>
                                            <div class="col-auto">
                                                <h3 class="card-title">1 - Cifrando com Cesar</h3>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <div class="row">
                                             <p class="card-text col-12">Iremos cifrar a seguinte frase:</p>
                                        </div>
                                        <div class="row">
                                            <input type="text" class="col-12 form-control" placeholder="Digite a frase aqui" required name="frase" id="frase">
                                        </div>
                                        <div class="row">
                                            <p class="card-text col-12">Com o seguinte indice:</p>
                                       </div>
                                       <div class="row">
                                           <input type="number" class="col-12 form-control" placeholder="Digite a frase aqui" required name="number" id="number">
                                       </div>
                                        <div class="row my-3">
                                            <button type=" submit" class=" col-12 btn btn-success uppercase">Cifrar</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto justify-center">
                                                <p class="card-text">Frase Cifrada: </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">{{$cifra}}</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <a href="{{route('index')}}" class="btn btn-dark col-12">Voltar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </body>
