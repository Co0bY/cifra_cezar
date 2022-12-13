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
                            <form id="login-form" class="form" action="{{route('quebrando-cifra-tentativa')}}" method="post">
                                @csrf
                                <div class="card justify-content-center align-items-center">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">Quebrando a cifra</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text">Tente quebrar o seguinte código:</p>
                                                {{-- <p class="card-text">UVCBGRFR URHEVFGVPN R NDHRYN DHR PBZB ZRGBQB QR GENONYUB R NQBGNQN N GVGHYB CEBIVFBEVB PBZB VQRVN QVERGEVMAN CRFDHVFN QBF SNGBF FRZ N CERBPHCNPNB VAVPVNY QR FHN IREQNQR BH SNYFVQNQR:</p>
                                                 --}}
                                                <p>
                                                <input type="text" class="form-control" placeholder="Digite a frase aqui" required name="frase" id="frase" @if(isset($frase)) value="{{$frase}}" @endif>
                                                </p>
                                                <p class="card-text">Para isso digite o número do indice que você acredtia que esteja sendo utilizado para criptografar</p>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-12">
                                                <h5 class="card-title">Próximo a Chute</h5>
                                                <table class=" table table-primary table-striped-columns">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Letra</th>
                                                        <th scope="col">Frequência na Lingua Portuguesa</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td scope="col">{{$chute->id}}</td>
                                                        <td scope="col">{{$chute->letter}}</td>
                                                        <td scope="col">{{$chute->frequency}} %</td>
                                                    </tbody>
                                                  </table>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <input type="hidden" name="number" id="number" value="{{$chute->id}}">
                                                <button type=" submit" class=" col-12 btn btn-success uppercase">Tentar</button>
                                        </div>
                                        <div class="row">
                                            <p class="card-text">Chutar:</p>
                                            <p class="card-text">{{$cifra}}</p>
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
        </div>
    </body>
