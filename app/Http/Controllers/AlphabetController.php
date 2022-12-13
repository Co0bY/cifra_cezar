<?php

namespace App\Http\Controllers;

use App\Models\Alphabet;
use App\Models\Frequency;
use Illuminate\Http\Request;

class AlphabetController extends Controller
{
    public function cifraCezar7View(Request $request){
        $cifra = '';

        return view('cifra_cesar_7', ['cifra' => $cifra]);
    }

    public function cifraCezar7(Request $request){
        $frase =  $request->frase;
        $fraseCesar = "";
        $indice = $request->number;
        $contador = strlen($frase);
        for ($i = 1; $i <= $contador; $i++) {
            $letter = strtoupper(substr($frase, 0, 1));
            $frase = substr($frase, 1);

            $plusletter = Alphabet::where('letter', $letter)->first();
            if(isset($plusletter)){
                $plusletter->id = $plusletter->id + $indice;
                if($plusletter->id > 26){
                    $plusletter->id = $plusletter->id - 26;
                }
                $plusletter = Alphabet::where('id', $plusletter->id)->first();
                $fraseCesar = $fraseCesar . $plusletter->letter;
            }else{
                $fraseCesar = $fraseCesar . ' ';
            }
        }

        return view('cifra_cesar_7', ['cifra' => $fraseCesar]);
    }

    public function cifraCesarModView(){

        $cifra = '';

        return view('cifra_cesar_mod', ['cifra' => $cifra]);
    }

    public function cifraCesarMod(Request $request){
        $frase = $request->frase;
        $senha = $request->senha;
        $guardarSenha = $senha;
        $fraseCesar = "";
        $contador = strlen($frase);
            for ($i = 1; $i <= $contador; $i++) {
                if($senha == "" || empty($senha) || !isset($senha) || $senha == null){
                    $senha = $guardarSenha;
                }
                $letter = strtoupper(substr($frase, 0, 1));
                $letter2 = strtoupper(substr($senha, 0, 1));
                $frase = substr($frase, 1);
                $senha = substr($senha, 1);
                $plusletter = Alphabet::where('letter', $letter)->first();
                $plussenha = Alphabet::where('letter', $letter2)->first();
                if(isset($plusletter)){
                    $plusletter->id = (($plusletter->id + $plussenha->id) % 26);
                    if($plusletter->id == 0){
                        $plusletter->id = 26;
                    }
                    if($plusletter->id == 27){
                        $plusletter->id = 1;
                    }
                    $plusletter = Alphabet::where('id', $plusletter->id)->first();
                    $fraseCesar = $fraseCesar . $plusletter->letter;
                }else{
                    $fraseCesar = $fraseCesar . ' ';
                }
            }
        return view('cifra_cesar_mod', ['cifra' => $fraseCesar]);
    }

    public function quebrandoCifraView(Request $request){
        $cifra = "";
        $chute = Frequency::first();
        $frase = "UVCBGRFR URHEVFGVPN R NDHRYN DHR PBZB ZRGBQB QR GENONYUB R NQBGNQN N GVGHYB CEBIVFBEVB PBZB VQRVN QVERGEVMAN CRFDHVFN QBF SNGBF FRZ N CERBPHCNPNB VAVPVNY QR FHN IREQNQR BH SNYFVQNQR";

        return view('quebrando-cifra', ['cifra' => $cifra, 'chute' => $chute, 'frase' => $frase]);
    }

    public function quebrandoCifra(Request $request){
        $frase = $request->frase;
        $guardarfrase = $frase;
        $cifra = "";
        $number= $request->number;
        $contador = strlen($frase);
        $frequency = 0;
        $mostletter = "";
        $frasev = $frase;
        for ($i = 1; $i <= $contador; $i++) {
            $letter = strtoupper(substr($frasev, 0, 1));
            $frequencyv = strlen(preg_replace("/$letter/", '', $frase));
            $frasev = substr($frasev, 1);
            if($frequencyv > $frequency){
                $frequency = $frequencyv;
                $mostletter = $letter;
            }
            $i++;
        }
        $mostletter = Alphabet::where('letter', $mostletter)->first();
        $diferenece = $mostletter->id - $number;
        if($diferenece < 1){
            $diferenece = $diferenece + 26;
        }
        for ($i = 1; $i <= $contador; $i++) {
            $letter = strtoupper(substr($frase, 0, 1));
            $frase = substr($frase, 1);

            $plusletter = Alphabet::where('letter', $letter)->first();

            if(isset($plusletter)){
                $plusletter->id = $plusletter->id - $diferenece;
                if($plusletter->id < 1){
                    $plusletter->id = $plusletter->id + 26;
                }
                $plusletter = Alphabet::where('id', $plusletter->id)->first();
                $cifra = $cifra . $plusletter->letter;
            }else{
                $cifra = $cifra . ' ';
            }
        }
        $number++;
        $chute = Frequency::where('id', $number)->first();
        if(isset($chute)){
            return view('quebrando-cifra', ['cifra' => $cifra, 'chute' => $chute, 'frase' => $guardarfrase]);
        }else{
            $chute = Frequency::first();
            return view('quebrando-cifra', ['cifra' => $cifra, 'chute' => $chute, 'frase' => $guardarfrase]);
        }

    }
}
