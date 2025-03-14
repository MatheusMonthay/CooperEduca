<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    public function run()
    {
        // CURSO COOPERATIVISMO ID:01
        Curso::create([
            'nome' => 'Cooperativismo',
            'descricao' => 'Este curso oferece uma visão completa sobre o cooperativismo, desde sua história e princípios até seu impacto na sociedade e exemplos práticos.',
        ]);
        
        // CURSO EDUCAÇÃO FINANCEIRA ID:02
        Curso::create([
            'nome' => 'Introdução à Educação Financeira',
            'descricao' => 'Ensina conceitos básicos como receitas, despesas, saldo, ativos e passivos, além de destacar a importância do planejamento financeiro e da criação de um orçamento pessoal para alcançar objetivos e melhorar a qualidade de vida.',
        ]);

        // CURSO Planejamento Financeiro para Metas de Curto e Longo Prazo ID:03
        Curso::create([
            'nome' => 'Planejamento Financeiro para Metas de Curto e Longo Prazo',
            'descricao' => 'Este curso foi desenvolvido para ajudar você a definir metas financeiras, criar estratégias para alcançá-las e se preparar para o futuro, incluindo a aposentadoria',
        ]);
        
        /*
        Curso::create([
            'nome' => '',
            'descricao' => '',
        ]);*/
    }
}
