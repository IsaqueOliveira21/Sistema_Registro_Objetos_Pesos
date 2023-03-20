<?php

namespace App\Services;

use App\Models\Peso;
use Illuminate\Support\Facades\DB;

class HomeService
{
    public function graficos()
    {
        $graficos = [];
        $meses = [
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro',
        ];
        $queryItensCadastrados = DB::table('pesos')
            ->selectRaw("MONTH(created_at) as mes, COUNT(*) as qtd")
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();
        foreach($queryItensCadastrados as $linha) {
            $graficos['grafico1'][] = $linha->qtd;
        }
        $categorias = [];
        foreach($queryItensCadastrados as $linha) {
            if(!in_array($meses[$linha->mes - 1], $categorias)) {
                $categorias[] = $meses[$linha->mes - 1];
            }
        }
        return [$graficos, $categorias];
    }
}
