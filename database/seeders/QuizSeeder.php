<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    public function run()
    {
        // Quiz para o curso de Cooperativismo (ID 1)
        $quiz1 = Quiz::create([
            'curso_id' => 1,
            'titulo' => 'Quiz de Cooperativismo',
            'descricao' => 'Teste seus conhecimentos sobre os princípios e práticas do cooperativismo',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions1 = [
            [
                'question_text' => 'O que é cooperativismo?',
                'option_a' => 'Um sistema econômico focado no lucro individual',
                'option_b' => 'Uma forma de organização onde pessoas se unem para objetivos comuns',
                'option_c' => 'Um tipo de empresa estatal',
                'option_d' => 'Um modelo de negócio familiar',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Em que ano surgiu a primeira cooperativa no mundo?',
                'option_a' => '1776',
                'option_b' => '1844',
                'option_c' => '1901',
                'option_d' => '1929',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes NÃO é um princípio do cooperativismo?',
                'option_a' => 'Adesão livre e voluntária',
                'option_b' => 'Controle democrático',
                'option_c' => 'Maximização do lucro dos acionistas',
                'option_d' => 'Participação econômica dos membros',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual é o órgão máximo de decisão em uma cooperativa?',
                'option_a' => 'Conselho de Administração',
                'option_b' => 'Assembleia Geral',
                'option_c' => 'Diretoria Executiva',
                'option_d' => 'Conselho Fiscal',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um exemplo de cooperativa de crédito no Brasil?',
                'option_a' => 'Sicoob',
                'option_b' => 'Banco do Brasil',
                'option_c' => 'Itaú',
                'option_d' => 'Bradesco',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa a sigla FGCoop?',
                'option_a' => 'Fundo Garantidor do Cooperativismo',
                'option_b' => 'Fundo Geral de Cooperativas',
                'option_c' => 'Fiscalização Geral de Cooperativas',
                'option_d' => 'Federação Geral de Cooperativas',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual é o valor máximo garantido pelo FGCoop por CPF?',
                'option_a' => 'R$ 100.000',
                'option_b' => 'R$ 250.000',
                'option_c' => 'R$ 500.000',
                'option_d' => 'R$ 1.000.000',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes NÃO é um tipo de cooperativa?',
                'option_a' => 'Cooperativa de crédito',
                'option_b' => 'Cooperativa de consumo',
                'option_c' => 'Cooperativa de especulação',
                'option_d' => 'Cooperativa agroindustrial',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é o Dia C?',
                'option_a' => 'Dia do Cooperativismo',
                'option_b' => 'Dia de Cooperar, com ações voluntárias',
                'option_c' => 'Dia do Crédito Cooperativo',
                'option_d' => 'Dia do Consumidor Cooperado',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Quantos princípios formam a base do cooperativismo?',
                'option_a' => '5',
                'option_b' => '7',
                'option_c' => '10',
                'option_d' => '12',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions1 as $question) {
            $quiz1->questions()->create($question);
        }

        // Quiz para o curso de Introdução à Educação Financeira (ID 2)
        $quiz2 = Quiz::create([
            'curso_id' => 2,
            'titulo' => 'Quiz de Educação Financeira',
            'descricao' => 'Teste seus conhecimentos sobre conceitos básicos de finanças pessoais',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions2 = [
            [
                'question_text' => 'Qual a principal vantagem de se criar um orçamento pessoal?',
                'option_a' => 'Gastar mais dinheiro',
                'option_b' => 'Controlar melhor suas finanças',
                'option_c' => 'Evitar receber salário',
                'option_d' => 'Nenhuma das alternativas',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é uma receita?',
                'option_a' => 'Todo dinheiro que entra',
                'option_b' => 'Todo dinheiro que sai',
                'option_c' => 'A diferença entre entradas e saídas',
                'option_d' => 'O valor guardado na poupança',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é uma despesa fixa?',
                'option_a' => 'Gasto que varia todo mês',
                'option_b' => 'Gasto que ocorre todo mês com valor similar',
                'option_c' => 'Gasto apenas com lazer',
                'option_d' => 'Gasto que ocorre uma vez por ano',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual é o tamanho ideal de uma reserva de emergência?',
                'option_a' => '1-2 meses de despesas',
                'option_b' => '3-6 meses de despesas',
                'option_c' => '6-12 meses de despesas',
                'option_d' => 'Mais de 1 ano de despesas',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa a sigla CDB?',
                'option_a' => 'Conta Digital Bancária',
                'option_b' => 'Certificado de Depósito Bancário',
                'option_c' => 'Crédito Direto Bancário',
                'option_d' => 'Contrato de Débito Bancário',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é considerado um ativo?',
                'option_a' => 'Dívida do cartão de crédito',
                'option_b' => 'Financiamento do carro',
                'option_c' => 'Investimento em ações',
                'option_d' => 'Conta de luz a pagar',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é um passivo?',
                'option_a' => 'Dinheiro guardado',
                'option_b' => 'Dívida ou obrigação financeira',
                'option_c' => 'Investimento em imóveis',
                'option_d' => 'Salário recebido',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes NÃO é um beneficio do planejamento financeiro?',
                'option_a' => 'Evitar dívidas',
                'option_b' => 'Economizar para o futuro',
                'option_c' => 'Criar reserva de emergência',
                'option_d' => 'Aumentar gastos desnecessários',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a melhor estratégia para evitar gastos por impulso?',
                'option_a' => 'Fazer lista de compras',
                'option_b' => 'Usar sempre cartão de crédito',
                'option_c' => 'Comprar tudo que estiver em promoção',
                'option_d' => 'Não planejar as compras',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destas ferramentas pode ajudar no controle financeiro?',
                'option_a' => 'Planilhas',
                'option_b' => 'Aplicativos de gestão financeira',
                'option_c' => 'Anotações em caderno',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions2 as $question) {
            $quiz2->questions()->create($question);
        }

        // Quiz para o curso de Planejamento Financeiro para Metas (ID 3)
        $quiz3 = Quiz::create([
            'curso_id' => 3,
            'titulo' => 'Quiz de Planejamento Financeiro',
            'descricao' => 'Teste seus conhecimentos sobre como planejar metas financeiras',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions3 = [
            [
                'question_text' => 'O que é uma meta financeira de curto prazo?',
                'option_a' => 'Meta a ser alcançada em até 1 ano',
                'option_b' => 'Meta a ser alcançada em 1 a 5 anos',
                'option_c' => 'Meta a ser alcançada em mais de 5 anos',
                'option_d' => 'Meta que nunca será alcançada',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um exemplo de meta SMART?',
                'option_a' => "Quero juntar dinheiro",
                'option_b' => "Quero economizar R$ 5.000 em 12 meses para uma viagem",
                'option_c' => "Vou pensar em economizar",
                'option_d' => "Talvez eu compre um carro algum dia",
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa a letra S no método SMART?',
                'option_a' => 'Sustentável',
                'option_b' => 'Simples',
                'option_c' => 'Específico',
                'option_d' => 'Satisfatório',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um investimento adequado para metas de longo prazo?',
                'option_a' => 'Poupança',
                'option_b' => 'Tesouro Selic',
                'option_c' => 'Ações',
                'option_d' => 'Dinheiro embaixo do colchão',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Por que é importante começar a planejar a aposentadoria cedo?',
                'option_a' => 'Para aproveitar os juros compostos',
                'option_b' => 'Para precisar poupar menos por mês',
                'option_c' => 'Para ter mais segurança no futuro',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um investimento comum para aposentadoria?',
                'option_a' => 'Tesouro IPCA+',
                'option_b' => 'Previdência privada',
                'option_c' => 'Fundos de investimento',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a técnica de pagamento de dívidas que foca nas menores primeiro?',
                'option_a' => 'Bola de neve',
                'option_b' => 'Avalanche',
                'option_c' => 'Tsunami',
                'option_d' => 'Terremoto',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Como calcular quanto você precisará para se aposentar?',
                'option_a' => 'Estimando gastos mensais x meses de aposentadoria',
                'option_b' => 'Chutando um valor alto',
                'option_c' => 'Perguntando para um amigo',
                'option_d' => 'Não é possível calcular',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes NÃO é um benefício da diversificação de investimentos?',
                'option_a' => 'Redução de riscos',
                'option_b' => 'Maior potencial de retorno',
                'option_c' => 'Proteção contra volatilidade',
                'option_d' => 'Garantia de lucro',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destas é uma estratégia para poupar eficientemente?',
                'option_a' => 'Automatizar a poupança',
                'option_b' => 'Reduzir gastos desnecessários',
                'option_c' => 'Criar um orçamento',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions3 as $question) {
            $quiz3->questions()->create($question);
        }

        // Quiz para o curso de Investimentos em Renda Variável (ID 4)
        $quiz4 = Quiz::create([
            'curso_id' => 4,
            'titulo' => 'Quiz de Renda Variável',
            'descricao' => 'Teste seus conhecimentos sobre ações, ETFs e fundos imobiliários',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions4 = [
            [
                'question_text' => 'O que é uma ação?',
                'option_a' => 'Parte do capital de uma empresa',
                'option_b' => 'Um tipo de título público',
                'option_c' => 'Um empréstimo para bancos',
                'option_d' => 'Um contrato de aluguel',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa ETF?',
                'option_a' => 'Exchange Traded Fund',
                'option_b' => 'Extra Tax Free',
                'option_c' => 'Economic Trade Finance',
                'option_d' => 'Export Transfer Fee',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a principal vantagem dos ETFs?',
                'option_a' => 'Diversificação automática',
                'option_b' => 'Garantia de retorno',
                'option_c' => 'Isenção de impostos',
                'option_d' => 'Liquidez imediata',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que são FIIs?',
                'option_a' => 'Fundos de Investimento Imobiliário',
                'option_b' => 'Fundos de Índice Internacional',
                'option_c' => 'Ferramentas de Inflação Indexada',
                'option_d' => 'Fatores de Interesse Interno',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um risco da renda variável?',
                'option_a' => 'Volatilidade',
                'option_b' => 'Perda do capital investido',
                'option_c' => 'Mudanças no mercado',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é análise fundamentalista?',
                'option_a' => 'Avaliação de uma empresa com base em seus fundamentos',
                'option_b' => 'Estudo dos gráficos de preços',
                'option_c' => 'Análise do comportamento do mercado',
                'option_d' => 'Previsão do futuro com base no passado',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um indicador fundamentalista?',
                'option_a' => 'P/L (Preço sobre Lucro)',
                'option_b' => 'Média móvel de 200 dias',
                'option_c' => 'Índice de força relativa',
                'option_d' => 'Bandas de Bollinger',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a vantagem de diversificar a carteira?',
                'option_a' => 'Reduzir riscos',
                'option_b' => 'Aumentar potencial de retorno',
                'option_c' => 'Proteger contra volatilidade',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes NÃO é um tipo de análise de investimentos?',
                'option_a' => 'Análise fundamentalista',
                'option_b' => 'Análise técnica',
                'option_c' => 'Análise sentimental',
                'option_d' => 'Análise meteorológica',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Para que serve o dividend yield?',
                'option_a' => 'Medir o retorno em dividendos',
                'option_b' => 'Avaliar o crescimento da empresa',
                'option_c' => 'Calcular o valor patrimonial',
                'option_d' => 'Prever o preço das ações',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions4 as $question) {
            $quiz4->questions()->create($question);
        }

        // Quiz para o curso de Investimentos em Renda Fixa (ID 5)
        $quiz5 = Quiz::create([
            'curso_id' => 5,
            'titulo' => 'Quiz de Renda Fixa',
            'descricao' => 'Teste seus conhecimentos sobre Tesouro Direto, CDBs e outros investimentos de renda fixa',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions5 = [
            [
                'question_text' => 'O que é Tesouro Direto?',
                'option_a' => 'Títulos públicos federais',
                'option_b' => 'Ações de empresas estatais',
                'option_c' => 'Fundos imobiliários',
                'option_d' => 'Empréstimos entre pessoas',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um título pós-fixado?',
                'option_a' => 'Tesouro Selic',
                'option_b' => 'Tesouro Prefixado',
                'option_c' => 'Tesouro IPCA+',
                'option_d' => 'Tesouro IGPM+',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa CDB?',
                'option_a' => 'Certificado de Depósito Bancário',
                'option_b' => 'Conta Digital Bancária',
                'option_c' => 'Crédito Direto Bancário',
                'option_d' => 'Contrato de Débito Bancário',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a vantagem das LCIs e LCAs?',
                'option_a' => 'Isenção de imposto de renda',
                'option_b' => 'Maior liquidez',
                'option_c' => 'Maior rentabilidade',
                'option_d' => 'Garantia do FGC',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual o valor máximo garantido pelo FGC?',
                'option_a' => 'R$ 100.000 por CPF',
                'option_b' => 'R$ 250.000 por CPF',
                'option_c' => 'R$ 500.000 por CPF',
                'option_d' => 'R$ 1.000.000 por CPF',
                'correct_option' => 'b',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes títulos é isento de imposto de renda?',
                'option_a' => 'LCI',
                'option_b' => 'CDB',
                'option_c' => 'Debênture',
                'option_d' => 'Tesouro Direto',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Como calcular a rentabilidade de um investimento prefixado?',
                'option_a' => 'VF = VP x (1 + i)^n',
                'option_b' => 'VF = VP + (i x n)',
                'option_c' => 'VF = VP / (1 + i)^n',
                'option_d' => 'VF = VP - (i x n)',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um risco da renda fixa?',
                'option_a' => 'Risco de crédito',
                'option_b' => 'Risco de liquidez',
                'option_c' => 'Risco de mercado',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa a sigla LCA?',
                'option_a' => 'Letra de Crédito do Agronegócio',
                'option_b' => 'Letra de Crédito Ambiental',
                'option_c' => 'Letra de Câmbio Agropecuária',
                'option_d' => 'Licença de Crédito Agrícola',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a principal vantagem do Tesouro IPCA+?',
                'option_a' => 'Proteção contra a inflação',
                'option_b' => 'Maior liquidez',
                'option_c' => 'Maior rentabilidade',
                'option_d' => 'Isenção de impostos',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions5 as $question) {
            $quiz5->questions()->create($question);
        }

        // Quiz para o curso de Fundamentos de Investimentos (ID 6)
        $quiz6 = Quiz::create([
            'curso_id' => 6,
            'titulo' => 'Quiz de Fundamentos de Investimentos',
            'descricao' => 'Teste seus conhecimentos sobre conceitos básicos de investimentos',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions6 = [
            [
                'question_text' => 'Qual a principal razão para investir?',
                'option_a' => 'Fazer o dinheiro trabalhar por você',
                'option_b' => 'Proteger contra a inflação',
                'option_c' => 'Aumentar o patrimônio',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a relação entre risco e retorno?',
                'option_a' => 'Quanto maior o risco, maior o potencial de retorno',
                'option_b' => 'Quanto menor o risco, maior o potencial de retorno',
                'option_c' => 'Não há relação entre risco e retorno',
                'option_d' => 'O risco não afeta o retorno',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é diversificação?',
                'option_a' => 'Distribuir investimentos em diferentes ativos',
                'option_b' => 'Investir tudo em um único ativo',
                'option_c' => 'Comprar apenas ações',
                'option_d' => 'Manter todo dinheiro na poupança',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um investimento de renda fixa?',
                'option_a' => 'Tesouro Direto',
                'option_b' => 'Ações',
                'option_c' => 'Fundos Imobiliários',
                'option_d' => 'Criptomoedas',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes é um investimento de renda variável?',
                'option_a' => 'Poupança',
                'option_b' => 'CDB',
                'option_c' => 'Ações',
                'option_d' => 'LCI',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é um perfil de investidor conservador?',
                'option_a' => 'Prefere segurança e liquidez',
                'option_b' => 'Aceita riscos por retornos maiores',
                'option_c' => 'Investe apenas em criptomoedas',
                'option_d' => 'Não se preocupa com riscos',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual o valor mínimo para começar a investir no Tesouro Direto?',
                'option_a' => 'R$ 10,00',
                'option_b' => 'R$ 100,00',
                'option_c' => 'R$ 1.000,00',
                'option_d' => 'R$ 10.000,00',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que significa a sigla CDI?',
                'option_a' => 'Certificado de Depósito Interbancário',
                'option_b' => 'Conta de Depósito Internacional',
                'option_c' => 'Crédito Direto Interbancário',
                'option_d' => 'Certificado de Depósito Imobiliário',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destes NÃO é um tipo de investimento?',
                'option_a' => 'Fundos de investimento',
                'option_b' => 'Criptomoedas',
                'option_c' => 'Empréstimos pessoais',
                'option_d' => 'ETFs',
                'correct_option' => 'c',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a melhor estratégia para começar a investir?',
                'option_a' => 'Definir objetivos e perfil de risco',
                'option_b' => 'Investir sem planejamento',
                'option_c' => 'Seguir dicas de redes sociais',
                'option_d' => 'Investir tudo em um único ativo',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions6 as $question) {
            $quiz6->questions()->create($question);
        }

        // Quiz para o curso de Gestão de Dívidas (ID 7)
        $quiz7 = Quiz::create([
            'curso_id' => 7,
            'titulo' => 'Quiz de Gestão de Dívidas',
            'descricao' => 'Teste seus conhecimentos sobre como lidar com dívidas',
            'total_questions' => 10,
            'xp_per_question' => 10,
        ]);

        $questions7 = [
            [
                'question_text' => 'Qual o primeiro passo para sair das dívidas?',
                'option_a' => 'Identificar todas as dívidas',
                'option_b' => 'Contrair mais dívidas',
                'option_c' => 'Ignorar as dívidas',
                'option_d' => 'Fechar os olhos e torcer',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é a técnica da bola de neve?',
                'option_a' => 'Pagar primeiro as dívidas menores',
                'option_b' => 'Pagar primeiro as dívidas com juros mais altos',
                'option_c' => 'Não pagar nenhuma dívida',
                'option_d' => 'Pagar todas as dívidas de uma vez',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destas é uma dívida "boa"?',
                'option_a' => 'Financiamento imobiliário',
                'option_b' => 'Cartão de crédito',
                'option_c' => 'Cheque especial',
                'option_d' => 'Empréstimo pessoal',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual destas é uma dívida "ruim"?',
                'option_a' => 'Cartão de crédito com juros altos',
                'option_b' => 'Financiamento estudantil',
                'option_c' => 'Empréstimo para negócio próprio',
                'option_d' => 'Financiamento imobiliário',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Como negociar dívidas com credores?',
                'option_a' => 'Pedir descontos para quitação à vista',
                'option_b' => 'Solicitar parcelamento com juros reduzidos',
                'option_c' => 'Buscar ajuda de órgãos de defesa do consumidor',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que é o Serasa Limpa Nome?',
                'option_a' => 'Programa de negociação de dívidas',
                'option_b' => 'Serviço de consulta ao CPF',
                'option_c' => 'Cartão de crédito',
                'option_d' => 'Tipo de investimento',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a melhor forma de evitar dívidas ruins?',
                'option_a' => 'Manter uma reserva de emergência',
                'option_b' => 'Planejar compras',
                'option_c' => 'Evitar compras por impulso',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a taxa de juros média do cartão de crédito?',
                'option_a' => 'Mais de 300% ao ano',
                'option_b' => 'Cerca de 100% ao ano',
                'option_c' => 'Menos de 50% ao ano',
                'option_d' => 'Não tem juros',
                'correct_option' => 'a',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'O que fazer se estiver com muitas dívidas?',
                'option_a' => 'Procurar ajuda de um especialista em finanças',
                'option_b' => 'Fazer um planejamento financeiro',
                'option_c' => 'Negociar com credores',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
            [
                'question_text' => 'Qual a importância do planejamento financeiro?',
                'option_a' => 'Evitar novas dívidas',
                'option_b' => 'Organizar as finanças',
                'option_c' => 'Melhorar qualidade de vida',
                'option_d' => 'Todas as alternativas',
                'correct_option' => 'd',
                'xp_value' => 10,
            ],
        ];

        foreach ($questions7 as $question) {
            $quiz7->questions()->create($question);
        }
    }
}