<?php

namespace App\Http\Controllers;

use App\Emprego;
use Illuminate\Http\Request;

class PessoaController extends Controller {



    public function realizaCalculo($cpf) {
        $empregos = Emprego::find($cpf);
        $somaSalario = 0.0;

        if(empty($empregos)) {
            return false;

        } else {
            foreach($empregos as $emprego) {
                $somaSalario += $emprego->emp_salario;
            }

            $mediaSalarial = $somaSalario / count($empregos);
            $somaPacialPorcetagem = $mediaSalarial * 0.7;

            $valorComAdicionais = $this->calculoDeTempoExtra($somaPacialPorcetagem);


            $valorFinalAponsentadoria = $this->verificaTetoSalacial($valorComAdicionais);
        }

        return view('mostraValorAposentadoria')->with('valorAposentadoria', $valorFinalAponsentadoria);

    }

    public function calculoDeTempoExtra($valorAtual) {
        $tempoAtual = $this->converteParaAnos();
        $valorCorrente = 0.0;

        if($tempoAtual > 25) {
            $tempoExtra =  $tempoAtual - 25;
            $valorExtra = $tempoExtra * 0.015;

            $valorComPorcentagem =  $valorAtual * $valorExtra;

            $valorCorrente = $valorAtual +  $valorComPorcentagem;
        }

        if($tempoAtual > 30) {
            $tempoExtra =  $tempoAtual - 30;
            $valorExtra = $tempoExtra * 0.002;

            $valorComPorcentagem =  $valorAtual * $valorExtra;

            $valorCorrente = $valorAtual +  $valorComPorcentagem;
        }

        if($tempoAtual > 35) {
            $tempoExtra =  $tempoAtual - 35;
            $valorExtra = $tempoExtra * 0.025;

            $valorComPorcentagem =  $valorAtual * $valorExtra;

            $valorCorrente = $valorAtual +  $valorComPorcentagem;
        }


        return $valorCorrente;


    }

    public function converteParaAnos($totalMeses) {
        $totalAnos = $totalMeses / 12;

        return $totalAnos;
    }

    public function verificaTetoSalacial($valorAposentadoriaAtual) {
        $valorDoTeto = 5531.31;

        if($valorAposentadoriaAtual > $valorDoTeto) {
            return $valorDoTeto;
        }

        return $valorAposentadoriaAtual;
    }
}
