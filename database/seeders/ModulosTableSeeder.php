<?php

namespace Database\Seeders;

use App\Models\Modulo;
use Illuminate\Database\Seeder;

class ModulosTableSeeder extends Seeder
{
    public function run()
    {
        //CURSO COOPERATIVISMO ID:01
        // Módulo 1: O que é Cooperativismo?
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'O que é Cooperativismo?',
            'conteudo' => "## O que é Cooperativismo?\n\nO cooperativismo é uma forma de organização onde um grupo de pessoas se une para alcançar objetivos comuns, como melhorar a vida de todos os membros. O foco é nas pessoas, não no lucro.\n\n### História do Cooperativismo\n\n- Tudo começou em 1844, na Inglaterra, com a primeira cooperativa chamada \"Sociedade dos Probos de Pioneiros de Rochdale\".\n- No Brasil, a primeira cooperativa surgiu em 1889, em Ouro Preto (MG), e era uma cooperativa de consumo.",
            'ordem' => 1,
        ]);

        // Módulo 2: Como Funciona uma Cooperativa?
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'Como Funciona uma Cooperativa?',
            'conteudo' => "## Como Funciona uma Cooperativa?\n\n### Princípios do Cooperativismo\n\n1. **Adesão livre e voluntária:** Qualquer pessoa pode entrar ou sair da cooperativa quando quiser.\n2. **Controle democrático:** Todos os membros têm voz e voto nas decisões.\n3. **Participação econômica:** Todos contribuem com um pouco de dinheiro para manter a cooperativa funcionando.\n4. **Autonomia e independência:** A cooperativa é controlada pelos próprios membros.\n5. **Educação e informação:** A cooperativa ensina os membros sobre como funciona o cooperativismo.\n6. **Intercooperação:** As cooperativas trabalham juntas para se fortalecerem.\n7. **Interesse pela comunidade:** As cooperativas ajudam a melhorar a vida das pessoas ao seu redor.\n\n### Valores do Cooperativismo\n\n- Solidariedade, honestidade, transparência, democracia e igualdade.",
            'ordem' => 2,
        ]);

        // Módulo 3: Tipos de Cooperativas
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'Tipos de Cooperativas',
            'conteudo' => "## Tipos de Cooperativas\n\n- **Cooperativas de crédito:** Oferecem serviços financeiros, como empréstimos e contas bancárias. Exemplo: Sicoob.\n- **Cooperativas de consumo:** Reúnem pessoas para comprar produtos mais baratos e de melhor qualidade.\n- **Cooperativas educacionais:** São formadas por pais e professores para oferecer educação de qualidade. Exemplo: COOPECC.\n- **Cooperativas agroindustriais:** Ajudam agricultores a vender seus produtos de forma mais justa. Exemplo: COAMO.\n- **Outros tipos:** Cooperativas de saúde, transporte, trabalho, etc.",
            'ordem' => 3,
        ]);

        // Módulo 4: Como uma Cooperativa é Organizada?
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'Como uma Cooperativa é Organizada?',
            'conteudo' => "## Como uma Cooperativa é Organizada?\n\n- **Assembleia Geral:** Reunião onde todos os membros decidem o futuro da cooperativa.\n- **Conselho de Administração:** Grupo de pessoas eleitas para cuidar do dia a dia da cooperativa.\n- **Conselho Fiscal:** Grupo que verifica se tudo está sendo feito de forma correta e transparente.\n- **Participação dos membros:** Todo mundo pode votar e ser votado para cargos na cooperativa.",
            'ordem' => 4,
        ]);

        // Módulo 5: O Impacto das Cooperativas na Sociedade
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'O Impacto das Cooperativas na Sociedade',
            'conteudo' => "## O Impacto das Cooperativas na Sociedade\n\n- **Geração de empregos:** Em 2023, as cooperativas empregaram mais de 550 mil pessoas no Brasil.\n- **Desenvolvimento local:** As cooperativas ajudam a melhorar a vida das pessoas nas comunidades onde estão presentes.\n- **Projetos sociais:** Muitas cooperativas investem em projetos para ajudar a comunidade.\n- **Dia de Cooperar (Dia C):** Ações voluntárias para ajudar quem precisa.",
            'ordem' => 5,
        ]);

        // Módulo 6: A Segurança nas Cooperativas
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'A Segurança nas Cooperativas',
            'conteudo' => "## A Segurança nas Cooperativas\n\n- **Fundo Garantidor do Cooperativismo de Crédito (FGCoop):** Protege o dinheiro dos membros em caso de problemas na cooperativa.\n- **Fiscalização:** As cooperativas são fiscalizadas pelo Banco Central do Brasil.\n- **O que acontece se a cooperativa falir?** O dinheiro dos membros é protegido pelo FGCoop.",
            'ordem' => 6,
        ]);

        // Módulo 7: Exemplos Práticos de Cooperativas
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'Exemplos Práticos de Cooperativas',
            'conteudo' => "## Exemplos Práticos de Cooperativas\n\n- **Sicoob:** Uma das maiores cooperativas de crédito do Brasil.\n- **COOPECC:** Cooperativa educacional formada por pais e professores.\n- **COAMO:** Cooperativa agroindustrial que ajuda agricultores a vender seus produtos de forma justa.",
            'ordem' => 7,
        ]);

        // Módulo 8: Como Fazer Parte de uma Cooperativa?
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'Como Fazer Parte de uma Cooperativa?',
            'conteudo' => "## Como Fazer Parte de uma Cooperativa?\n\n- **Como entrar:** Basta procurar uma cooperativa na sua região e se associar.\n- **Como sair:** Você pode sair a qualquer momento, pedindo demissão por escrito.\n- **Direitos e deveres:** Todo membro tem direito a votar e ser votado, mas também deve participar das decisões.",
            'ordem' => 8,
        ]);

        // Módulo 9: O Futuro do Cooperativismo (Conclusão)
        Modulo::create([
            'curso_id' => 1,
            'titulo' => 'O Futuro do Cooperativismo',
            'conteudo' => "## O Futuro do Cooperativismo\n\n- **Crescimento do cooperativismo:** O número de cooperativas no Brasil vem aumentando.\n- **Sustentabilidade:** Muitas cooperativas estão investindo em projetos sustentáveis.\n- **Inclusão financeira:** As cooperativas ajudam a levar serviços financeiros para pessoas que não têm acesso a bancos tradicionais.\n\n### Conclusão\n\nO cooperativismo é uma forma de unir pessoas para alcançar objetivos comuns, melhorando a vida de todos. Ele é baseado em valores como solidariedade, democracia e transparência, e tem um impacto positivo na economia e na sociedade.",
            'ordem' => 9,
        ]);

        // CURSO EDUCAÇÃO FINANCEIRA ID:02
        // Módulo 0: Introdução
        Modulo::create([
            'curso_id' => 2,
            'titulo' => 'Introdução',
            'conteudo' => "## Introdução\n\nEste curso foi criado para ajudar qualquer pessoa a entender os conceitos básicos de finanças pessoais de uma forma simples e prática. O objetivo é que você possa aplicar esse conhecimento no seu dia a dia, tomando decisões financeiras mais conscientes e melhorando sua qualidade de vida. Vamos começar!",
            'ordem' => 1,
        ]);

        // Módulo 1: Conceitos Básicos de Finanças Pessoais
        Modulo::create([
            'curso_id' => 2,
            'titulo' => 'Conceitos Básicos de Finanças Pessoais',
            'conteudo' => "## Conceitos Básicos de Finanças Pessoais\n\nFinanças pessoais são o gerenciamento do dinheiro que você ganha, gasta, economiza e investe. Isso envolve tomar decisões sobre como usar seus recursos para atingir seus objetivos, como comprar uma casa, viajar ou se aposentar com tranquilidade.\n\n### Receitas, Despesas e Saldo\n\n- **Receita:** Todo o dinheiro que você ganha, seja através do salário, rendimentos de investimentos ou outras fontes.\n- **Despesas:** Os gastos que você tem, como contas de luz, água, alimentação, transporte, lazer, etc.\n- **Saldo:** O que sobra depois de subtrair as despesas das receitas. Se o saldo for positivo, você está no azul; se for negativo, está no vermelho.\n\n### Ativos e Passivos\n\n- **Ativos:** Tudo aquilo que gera dinheiro para você, como investimentos, imóveis alugados ou um negócio próprio.\n- **Passivos:** Tudo aquilo que tira dinheiro do seu bolso, como dívidas, empréstimos e despesas fixas.\n\nA ideia é aumentar seus ativos e reduzir seus passivos para ter uma vida financeira mais saudável.",
            'ordem' => 2,
        ]);

        // Módulo 2: Importância do Planejamento Financeiro
        Modulo::create([
            'curso_id' => 2,
            'titulo' => 'Importância do Planejamento Financeiro',
            'conteudo' => "## Importância do Planejamento Financeiro\n\nO planejamento financeiro é o processo de organizar suas finanças para atingir seus objetivos, seja a curto, médio ou longo prazo. Envolve definir metas, analisar sua situação atual e criar um plano para alcançar essas metas.\n\n### Benefícios do Planejamento Financeiro\n\n- **Evitar dívidas:** Ter um plano ajuda a controlar gastos e evitar o endividamento.\n- **Economizar para o futuro:** Permite que você guarde dinheiro para realizar sonhos, como comprar uma casa ou viajar.\n- **Reserva de emergência:** Cobre de 3 a 6 meses de despesas essenciais para situações inesperadas, como problemas de saúde ou perda de emprego.\n\n### Qualidade de Vida\n\nQuando você tem controle sobre suas finanças, o estresse causado por problemas de dinheiro diminui, e você pode viver com mais liberdade e segurança.",
            'ordem' => 3,
        ]);

        // Módulo 3: Como Criar um Orçamento Pessoal
        Modulo::create([
            'curso_id' => 2,
            'titulo' => 'Como Criar um Orçamento Pessoal',
            'conteudo' => "## Como Criar um Orçamento Pessoal\n\nCriar um orçamento pessoal é o primeiro passo para tomar controle das suas finanças. Siga estes passos:\n\n1. **Liste suas receitas:** Anote todo o dinheiro que você recebe mensalmente.\n2. **Liste suas despesas:** Separe suas despesas em categorias, como moradia, transporte, alimentação, lazer, etc.\n3. **Calcule o saldo:** Subtraia as despesas das receitas para ver se você está gastando mais do que ganha.\n4. **Ajuste os gastos:** Identifique onde você pode cortar despesas, especialmente em categorias como lazer ou compras por impulso.\n\n### Ferramentas Úteis\n\n- **Planilhas:** Excel ou Google Sheets para criar orçamentos personalizados.\n- **Aplicativos:** Guiabolso, Mobills e Organizze para facilitar o controle de gastos.\n\n### Dicas para Evitar Gastos Desnecessários\n\n- Pense antes de comprar e pergunte-se se realmente precisa do item.\n- Evite compras por impulso fazendo uma lista de compras.\n- Use dinheiro ou débito em vez de cartão de crédito para compras que você não pode pagar à vista.",
            'ordem' => 4,
        ]);

        // Módulo 4: Conclusão do Curso
        Modulo::create([
            'curso_id' => 2,
            'titulo' => 'Conclusão do Curso',
            'conteudo' => "## Conclusão do Curso\n\nAo final deste curso, você terá uma base sólida para começar a gerenciar suas finanças pessoais de forma mais eficiente. Lembre-se de que a educação financeira é um processo contínuo, e quanto mais você praticar, mais confiante e preparado estará para tomar decisões que impactarão positivamente sua vida.\n\n### Próximos Passos\n\n- Comece a aplicar o que aprendeu hoje, criando seu primeiro orçamento.\n- Acompanhe seus gastos e receitas regularmente.\n- Continue aprendendo sobre investimentos, economia e planejamento financeiro para aprofundar seus conhecimentos.\n\nBoa sorte na sua jornada rumo à independência financeira! 🚀",
            'ordem' => 5,
        ]);
        // CURSO Planejamento Financeiro para Metas de Curto e Longo Prazo ID:03
        // Módulo 0: Introdução
        Modulo::create([
            'curso_id' => 3,
            'titulo' => 'Introdução',
            'conteudo' => "## Introdução\n\nEste curso foi desenvolvido para ajudar você a definir metas financeiras, criar estratégias para alcançá-las e se preparar para o futuro, incluindo a aposentadoria. Vamos abordar tudo de forma prática e acessível, para que você possa organizar suas finanças e realizar seus sonhos.",
            'ordem' => 1,
        ]);

        // Módulo 1: Como Definir Metas Financeiras
        Modulo::create([
            'curso_id' => 3,
            'titulo' => 'Como Definir Metas Financeiras',
            'conteudo' => "## Como Definir Metas Financeiras\n\nDefinir metas financeiras é o primeiro passo para organizar sua vida financeira e direcionar seus esforços. As metas podem ser de **curto prazo** (até 1 ano), **médio prazo** (1 a 5 anos) ou **longo prazo** (acima de 5 anos).\n\n### Exemplos de Metas\n\n- **Metas de curto prazo:**\n  - Comprar um celular novo.\n  - Fazer uma viagem de fim de semana.\n  - Montar uma reserva de emergência.\n\n- **Metas de longo prazo:**\n  - Comprar uma casa ou um carro.\n  - Fazer uma viagem internacional.\n  - Garantir uma aposentadoria tranquila.\n\n### Método SMART\n\nPara definir metas realistas, siga o método **SMART**:\n- **Específicas:** Defina exatamente o que você deseja alcançar.\n- **Mensuráveis:** Estabeleça um valor ou indicador para medir o progresso.\n- **Atingíveis:** Certifique-se de que a meta é possível de ser alcançada.\n- **Relevantes:** A meta deve ser importante para você.\n- **Temporais:** Defina um prazo para alcançar a meta.\n\n### Como Priorizar Metas\n\n- Comece com metas de curto prazo que tragam benefícios imediatos, como a reserva de emergência.\n- Em seguida, foque em metas de médio e longo prazo, como comprar um imóvel ou se aposentar.\n- Avalie o impacto de cada meta na sua vida e ajuste suas prioridades conforme necessário.",
            'ordem' => 2,
        ]);

        // Módulo 2: Estratégias para Poupar e Investir
        Modulo::create([
            'curso_id' => 3,
            'titulo' => 'Estratégias para Poupar e Investir',
            'conteudo' => "## Estratégias para Poupar e Investir\n\nPara alcançar suas metas, é essencial combinar **poupança** e **investimentos**. Aqui estão algumas estratégias para ajudar você nesse processo:\n\n### Como Poupar de Forma Eficiente\n\n- **Crie um orçamento:** Anote suas receitas e despesas para identificar onde pode cortar gastos.\n- **Automatize a poupança:** Transfira uma parte do seu salário para uma conta de poupança ou investimento assim que receber.\n- **Reduza gastos desnecessários:** Corte supérfluos, como assinaturas que não usa ou compras por impulso.\n\n### Investimentos Adequados para Cada Tipo de Meta\n\n- **Metas de curto prazo:** Opte por investimentos seguros e de fácil acesso, como Tesouro Selic, CDBs de liquidez diária ou poupança.\n- **Metas de longo prazo:** Invista em opções com maior potencial de retorno, como ações, fundos imobiliários ou previdência privada.\n- **Diversifique:** Não coloque todo seu dinheiro em um único investimento. Distribua os recursos de acordo com o prazo e o risco de cada meta.\n\n### A Importância da Disciplina Financeira\n\n- Mantenha o foco nas suas metas, mesmo que isso signifique abrir mão de gastos imediatos.\n- Revise seu progresso regularmente e ajuste suas estratégias conforme necessário.\n- Celebre pequenas conquistas para se manter motivado.",
            'ordem' => 3,
        ]);

        // Módulo 3: Planejamento para Aposentadoria
        Modulo::create([
            'curso_id' => 3,
            'titulo' => 'Planejamento para Aposentadoria',
            'conteudo' => "## Planejamento para Aposentadoria\n\nA aposentadoria é uma das metas financeiras mais importantes, e começar a planejar cedo faz toda a diferença. Quanto antes você começar, menos precisará poupar por mês, graças ao poder dos juros compostos.\n\n### Por Que Começar a Planejar Cedo\n\n- O custo de vida tende a aumentar com o tempo, e a aposentadoria pública pode não ser suficiente para manter seu padrão de vida.\n- Começar cedo permite que você aproveite o tempo a seu favor, acumulando mais recursos com menos esforço.\n\n### Tipos de Investimentos para Aposentadoria\n\n- **Previdência privada:** Oferece vantagens fiscais e permite escolher entre planos de renda fixa ou variável.\n- **Tesouro Direto (Tesouro IPCA+):** Protege seu dinheiro da inflação e garante um retorno real.\n- **Fundos de investimento:** Podem ser uma boa opção para quem prefere deixar a gestão nas mãos de profissionais.\n- **Ações e ETFs:** Para quem tem um perfil mais arrojado e busca retornos maiores a longo prazo.\n\n### Como Calcular Quanto Você Precisará para se Aposentar\n\n- Estime seus gastos mensais na aposentadoria, considerando despesas como moradia, saúde, alimentação e lazer.\n- Multiplique esse valor pelo número de meses que você espera viver após se aposentar (por exemplo, 20 anos = 240 meses).\n- Leve em conta a inflação e os rendimentos dos investimentos para ajustar o valor necessário.\n- Use calculadoras de aposentadoria disponíveis em sites de bancos e corretoras para facilitar o planejamento.",
            'ordem' => 4,
        ]);

        // Módulo 4: Conclusão do Curso
        Modulo::create([
            'curso_id' => 3,
            'titulo' => 'Conclusão do Curso',
            'conteudo' => "## Conclusão do Curso\n\nAo final deste curso, você terá as ferramentas necessárias para definir metas financeiras, criar estratégias de poupança e investimento, e se preparar para a aposentadoria. Lembre-se de que o planejamento financeiro é um processo contínuo, e pequenas ações hoje podem fazer uma grande diferença no futuro.\n\n### Próximos Passos\n\n- Defina suas metas financeiras usando o método SMART.\n- Comece a poupar e investir de acordo com seus objetivos.\n- Revise seu planejamento regularmente e ajuste conforme necessário.\n\nCom disciplina e foco, você pode transformar seus sonhos em realidade e garantir um futuro financeiro mais seguro e tranquilo. Boa sorte!",
            'ordem' => 5,
        ]);

        // CURSO Investimentos em Renda Variável ID:04
        // Módulo 0: Introdução
        Modulo::create([
            'curso_id' => 4,
            'titulo' => 'Introdução',
            'conteudo' => "## Introdução\n\nEste curso foi desenvolvido para ajudar você a entender os principais investimentos em renda variável, como ações, ETFs e fundos imobiliários, além de aprender conceitos básicos de análise de investimentos e como montar uma carteira diversificada. Vamos abordar tudo de forma clara e prática, para que você possa investir com confiança.",
            'ordem' => 1,
        ]);

        // Módulo 1: Ações, ETFs e Fundos Imobiliários
        Modulo::create([
            'curso_id' => 4,
            'titulo' => 'Ações, ETFs e Fundos Imobiliários',
            'conteudo' => "## Ações, ETFs e Fundos Imobiliários\n\n### Ações\n\n- **O que são:** Parte do capital de uma empresa.\n- **Vantagens:** Potencial de retorno elevado e dividendos.\n- **Riscos:** Volatilidade do mercado e possibilidade de perdas.\n\n### ETFs (Exchange Traded Funds)\n\n- **O que são:** Fundos que replicam índices do mercado.\n- **Vantagens:** Diversificação automática e custos baixos.\n\n### Fundos Imobiliários (FIIs)\n\n- **O que são:** Fundos que investem em imóveis comerciais.\n- **Vantagens:** Renda passiva através dos aluguéis.",
            'ordem' => 2,
        ]);

        // Módulo 2: Análise Fundamentalista e Técnica (Básico)
        Modulo::create([
            'curso_id' => 4,
            'titulo' => 'Análise Fundamentalista e Técnica (Básico)',
            'conteudo' => "## Análise Fundamentalista e Técnica (Básico)\n\n### Análise Fundamentalista\n\n- **O que é:** Avaliação de uma empresa com base em seus fundamentos.\n- **Indicadores financeiros:** P/L, ROE, Dívida Líquida/EBITDA.\n\n### Análise Técnica\n\n- **O que é:** Estudo dos gráficos e indicadores para prever movimentos futuros.\n- **Gráficos de candlestick:** Mostram a variação de preço.\n- **Médias móveis:** Indicam tendências de alta ou baixa.\n\n### Quando Usar Cada Tipo\n\n- **Fundamentalista:** Para investimentos de longo prazo.\n- **Técnica:** Para operações de curto prazo.",
            'ordem' => 3,
        ]);

        // Módulo 3: Como Montar uma Carteira de Investimentos
        Modulo::create([
            'curso_id' => 4,
            'titulo' => 'Como Montar uma Carteira de Investimentos',
            'conteudo' => "## Como Montar uma Carteira de Investimentos\n\n### Como Escolher Ativos\n\n- **Defina seus objetivos:** Metas de curto, médio ou longo prazo.\n- **Escolha empresas sólidas:** Para ações, prefira empresas com bons fundamentos.\n- **Diversifique:** Inclua diferentes setores e tipos de ativos.\n\n### Acompanhamento e Ajustes\n\n- **Acompanhe regularmente:** Verifique o desempenho dos ativos.\n- **Rebalanceie:** Ajuste a carteira para manter a diversificação.\n\n### Exemplo Prático\n\n- **Carteira diversificada:** Ações de tecnologia, varejo, finanças e FIIs.",
            'ordem' => 4,
        ]);

        // Módulo 4: Conclusão do Curso
        Modulo::create([
            'curso_id' => 4,
            'titulo' => 'Conclusão do Curso',
            'conteudo' => "## Conclusão do Curso\n\nAo final deste curso, você terá uma base sólida para investir em renda variável, entendendo os principais tipos de investimentos, como analisar empresas e mercados, e como montar e gerenciar uma carteira diversificada. Lembre-se de que a renda variável exige paciência, estudo e disciplina, mas pode oferecer retornos significativos a longo prazo.\n\n### Próximos Passos\n\n- Comece com investimentos simples, como ETFs ou FIIs, para ganhar experiência.\n- Estude empresas e setores antes de comprar ações.\n- Acompanhe sua carteira regularmente e ajuste conforme seus objetivos e o mercado.\n\nCom planejamento e conhecimento, você pode aproveitar as oportunidades da renda variável e construir um patrimônio sólido. Boa sorte nos investimentos! 🚀",
            'ordem' => 5,
        ]);

        // CURSO Investimentos em Renda Fixa ID:05
        // Módulo 0: Introdução
        Modulo::create([
            'curso_id' => 5,
            'titulo' => 'Introdução',
            'conteudo' => "## Introdução\n\nEste curso foi criado para ajudar você a entender os principais investimentos em renda fixa, como calcular sua rentabilidade e riscos, e como diversificar sua carteira para reduzir riscos e maximizar retornos. Vamos abordar tudo de forma clara e prática, para que você possa investir com confiança.",
            'ordem' => 1,
        ]);

        // Módulo 1: Tesouro Direto, CDB, LCI, LCA e Outros
        Modulo::create([
            'curso_id' => 5,
            'titulo' => 'Tesouro Direto, CDB, LCI, LCA e Outros',
            'conteudo' => "## Tesouro Direto, CDB, LCI, LCA e Outros\n\nA renda fixa é uma categoria de investimentos em que você empresta dinheiro a uma instituição (como o governo ou um banco) e recebe de volta com juros. É considerada uma opção mais segura e previsível, ideal para quem está começando a investir.\n\n### Tesouro Direto\n\n- **Tesouro Selic:** Vinculado à taxa básica de juros.\n- **Tesouro IPCA+:** Protege contra a inflação.\n- **Tesouro Prefixado:** Taxa fixa de juros.\n\n### CDB (Certificado de Depósito Bancário)\n\n- **Como escolher:** Verifique a taxa de juros, liquidez e segurança do banco.\n- **Vantagens:** Proteção do FGC até R\$ 250 mil por CPF.\n\n### LCI e LCA\n\n- **Vantagens:** Isenção de imposto de renda e proteção do FGC.\n- **Desvantagens:** Prazos mais longos e menor liquidez.",
            'ordem' => 2,
        ]);

        // Módulo 2: Como Calcular Rentabilidade e Riscos
        Modulo::create([
            'curso_id' => 5,
            'titulo' => 'Como Calcular Rentabilidade e Riscos',
            'conteudo' => "## Como Calcular Rentabilidade e Riscos\n\n### Rentabilidade\n\n- **Fórmula de juros compostos:** VF = VP x (1 + i)^n.\n- **Exemplo:** Investir R\$ 1.000 em um CDB que paga 10% ao ano resulta em R\$ 1.100 após um ano.\n\n### Riscos\n\n- **Risco de crédito:** Possibilidade de o emissor não pagar.\n- **Risco de liquidez:** Dificuldade de resgatar antes do vencimento.\n- **Risco de mercado:** Variações nas taxas de juros.\n\n### Diversificação\n\n- **Distribua seus investimentos** em diferentes tipos de ativos e emissores.",
            'ordem' => 3,
        ]);

        // Módulo 3: Estratégias de Diversificação
        Modulo::create([
            'curso_id' => 5,
            'titulo' => 'Estratégias de Diversificação',
            'conteudo' => "## Estratégias de Diversificação\n\n### O que é Diversificação?\n\n- **Prática de distribuir investimentos** em diferentes ativos para reduzir riscos.\n\n### Como Montar uma Carteira Diversificada\n\n- **Defina seus objetivos:** Metas de curto, médio e longo prazo.\n- **Escolha diferentes tipos de ativos:** Tesouro Direto, CDBs, LCIs e LCAs.\n- **Distribua entre emissores:** Invista em títulos de diferentes bancos.\n\n### Exemplos Práticos\n\n- **Carteira conservadora:** 50% Tesouro Selic, 30% CDBs, 20% LCIs.\n- **Carteira moderada:** 40% Tesouro IPCA+, 30% CDBs, 20% LCAs, 10% fundos de renda fixa.\n- **Carteira arrojada:** 30% Tesouro Prefixado, 30% CDBs, 20% LCIs, 20% fundos imobiliários.",
            'ordem' => 4,
        ]);

        // Módulo 4: Conclusão do Curso
        Modulo::create([
            'curso_id' => 5,
            'titulo' => 'Conclusão do Curso',
            'conteudo' => "## Conclusão do Curso\n\nAo final deste curso, você terá uma base sólida para investir em renda fixa, entendendo os principais tipos de investimentos, como calcular rentabilidade e riscos, e como diversificar sua carteira. Lembre-se de que o conhecimento é a chave para tomar decisões financeiras mais seguras e eficientes.\n\n### Próximos Passos\n\n- Escolha um ou dois investimentos em renda fixa para começar, como Tesouro Direto ou CDB.\n- Use calculadoras financeiras para simular rentabilidades e prazos.\n- Revise sua carteira regularmente e ajuste conforme seus objetivos e perfil de risco.\n\nCom planejamento e disciplina, você pode construir um patrimônio sólido e alcançar suas metas financeiras. Boa sorte nos investimentos! 🚀",
            'ordem' => 5,
        ]);


        // CURSO Fundamentos de Investimentos ID:06
        // Módulo 0: Introdução
        Modulo::create([
            'curso_id' => 6,
            'titulo' => 'Introdução',
            'conteudo' => "## Introdução\n\nEste curso foi criado para ajudar você a entender os conceitos básicos de investimentos, conhecer os principais tipos de aplicações financeiras e aprender como começar a investir, mesmo com pouco dinheiro. Vamos abordar tudo de forma simples e prática, para que você possa dar os primeiros passos no mundo dos investimentos com confiança.",
            'ordem' => 1,
        ]);

        // Módulo 1: O que são Investimentos e Por que Investir
        Modulo::create([
            'curso_id' => 6,
            'titulo' => 'O que são Investimentos e Por que Investir',
            'conteudo' => "## O que são Investimentos e Por que Investir\n\nInvestir é alocar dinheiro em ativos ou projetos com o objetivo de gerar retorno financeiro no futuro. Em outras palavras, é usar seu dinheiro para \"trabalhar\" por você, em vez de deixá-lo parado na conta corrente ou gastá-lo sem propósito.\n\n### Benefícios de Investir\n\n- **Proteção contra a inflação.**\n- **Aumento do patrimônio.**\n- **Garantia de uma vida mais tranquila no futuro.**\n\n### Relação entre Risco e Retorno\n\n- **Investimentos de baixo risco:** Retornos menores (ex: poupança).\n- **Investimentos de alto risco:** Retornos maiores (ex: ações).",
            'ordem' => 2,
        ]);

        // Módulo 2: Tipos de Investimentos (Renda Fixa, Renda Variável, etc.)
        Modulo::create([
            'curso_id' => 6,
            'titulo' => 'Tipos de Investimentos (Renda Fixa, Renda Variável, etc.)',
            'conteudo' => "## Tipos de Investimentos (Renda Fixa, Renda Variável, etc.)\n\nExistem diversas opções de investimentos, e elas podem ser divididas em duas grandes categorias: **renda fixa** e **renda variável**.\n\n### Renda Fixa\n\n- **Tesouro Direto:** Títulos públicos emitidos pelo governo federal.\n- **CDB (Certificado de Depósito Bancário):** Títulos emitidos por bancos.\n- **LCI e LCA:** Títulos isentos de imposto de renda.\n\n### Renda Variável\n\n- **Ações:** Parte do capital de uma empresa.\n- **ETFs:** Fundos que replicam índices do mercado.\n- **Fundos Imobiliários:** Investimentos em imóveis comerciais.\n\n### Outros Investimentos\n\n- **Fundos de Investimento:** Carteiras administradas por gestores.\n- **Criptomoedas:** Moedas digitais como Bitcoin e Ethereum.",
            'ordem' => 3,
        ]);

        // Módulo 3: Como Começar a Investir com Pouco Dinheiro
        Modulo::create([
            'curso_id' => 6,
            'titulo' => 'Como Começar a Investir com Pouco Dinheiro',
            'conteudo' => "## Como Começar a Investir com Pouco Dinheiro\n\nMuitas pessoas acham que precisam de muito dinheiro para começar a investir, mas isso não é verdade. Aqui estão algumas dicas:\n\n### Escolha o Investimento Certo\n\n- **Perfil de investidor:** Conservador, moderado ou arrojado.\n- **Objetivos financeiros:** Curto, médio ou longo prazo.\n\n### Plataformas de Investimento\n\n- **Corretoras digitais:** XP, Rico, Clear, NuInvest.\n- **Valores baixos:** Investir a partir de R\$ 50 ou R\$ 100.\n\n### Dicas para Começar\n\n- **Invista regularmente.**\n- **Diversifique seus investimentos.**\n- **Estude e aprenda continuamente.**",
            'ordem' => 4,
        ]);

        // Módulo 4: Conclusão do Curso
        Modulo::create([
            'curso_id' => 6,
            'titulo' => 'Conclusão do Curso',
            'conteudo' => "## Conclusão do Curso\n\nAo final deste curso, você terá uma base sólida para começar a investir, entendendo os conceitos básicos, os principais tipos de investimentos e como dar os primeiros passos, mesmo com pouco dinheiro. Lembre-se de que investir é um processo contínuo, e o aprendizado nunca para.\n\n### Próximos Passos\n\n- Defina seus objetivos financeiros e descubra seu perfil de investidor.\n- Escolha uma plataforma de investimentos e comece com valores pequenos.\n- Continue estudando e acompanhando o mercado para tomar decisões cada vez mais informadas.\n\nCom paciência, disciplina e conhecimento, você pode transformar seus recursos em um patrimônio sólido e garantir um futuro mais próspero. Boa sorte na sua jornada de investimentos! 🚀",
            'ordem' => 5,
        ]);

        // CURSO Gestão de Dívidas ID:07
        // Módulo 0: Introdução
        Modulo::create([
            'curso_id' => 7,
            'titulo' => 'Introdução',
            'conteudo' => "## Introdução\n\nEste curso foi desenvolvido para ajudar você a entender como lidar com dívidas de forma eficiente, seja para quitá-las, negociar com credores ou evitar cair em dívidas prejudiciais. Vamos abordar estratégias práticas e conceitos importantes para que você possa retomar o controle das suas finanças.",
            'ordem' => 1,
        ]);

        // Módulo 1: Como Sair das Dívidas
        Modulo::create([
            'curso_id' => 7,
            'titulo' => 'Como Sair das Dívidas',
            'conteudo' => "## Como Sair das Dívidas\n\nO primeiro passo para sair das dívidas é **identificá-las**. Faça uma lista detalhada de todas as suas dívidas, incluindo o valor total, a taxa de juros e o valor mínimo da parcela. Isso ajudará você a ter uma visão clara da sua situação financeira.\n\n### Técnica da Bola de Neve\n\n- **O que é:** Pagar primeiro as dívidas menores, enquanto mantém o pagamento mínimo nas outras.\n- **Benefícios:** Traz motivação ao ver as dívidas sendo eliminadas uma a uma.\n\n### Priorizar Dívidas com Juros Altos\n\n- **Por que:** Dívidas como cartão de crédito ou cheque especial crescem rapidamente devido aos juros elevados.\n- **Estratégia:** Negocie taxas de juros mais baixas com os credores.",
            'ordem' => 2,
        ]);

        // Módulo 2: Estratégias para Negociar com Credores
        Modulo::create([
            'curso_id' => 7,
            'titulo' => 'Estratégias para Negociar com Credores',
            'conteudo' => "## Estratégias para Negociar com Credores\n\nNegociar com credores pode ser uma forma eficaz de reduzir o valor das dívidas ou facilitar o pagamento. O primeiro passo é **entrar em contato com os credores**.\n\n### Técnicas de Negociação\n\n- **Descontos:** Peça descontos para quitar a dívida à vista.\n- **Parcelamento:** Solicite parcelamento com juros reduzidos.\n\n### Opções Adicionais\n\n- **Especialistas em finanças:** Busque ajuda de profissionais.\n- **Órgãos de defesa do consumidor:** Recorra ao Procon ou programas como Serasa Limpa Nome.",
            'ordem' => 3,
        ]);

        // Módulo 3: Diferença entre Dívidas Boas e Ruins
        Modulo::create([
            'curso_id' => 7,
            'titulo' => 'Diferença entre Dívidas Boas e Ruins',
            'conteudo' => "## Diferença entre Dívidas Boas e Ruins\n\nNem todas as dívidas são iguais. Algumas podem ser consideradas **dívidas boas**, pois ajudam a construir um patrimônio ou gerar valor no futuro.\n\n### Exemplos de Dívidas Boas\n\n- **Financiamento de imóveis:** Adquire um bem que tende a valorizar.\n- **Empréstimos para educação ou negócios:** Aumentam sua capacidade de ganho.\n\n### Exemplos de Dívidas Ruins\n\n- **Cartão de crédito:** Juros altos e sem benefícios.\n- **Compras por impulso:** Itens que perdem valor rapidamente.\n\n### Como Evitar Dívidas Ruins\n\n- **Planeje suas compras.**\n- **Mantenha uma reserva de emergência.**",
            'ordem' => 4,
        ]);

        // Módulo 4: Conclusão do Curso
        Modulo::create([
            'curso_id' => 7,
            'titulo' => 'Conclusão do Curso',
            'conteudo' => "## Conclusão do Curso\n\nAo final deste curso, você terá ferramentas e conhecimentos para gerenciar suas dívidas de forma eficiente, seja quitando-as, negociando com credores ou evitando dívidas desnecessárias. Lembre-se de que o controle financeiro é um processo contínuo, e pequenas mudanças de hábito podem fazer uma grande diferença a longo prazo.\n\n### Próximos Passos\n\n- Faça uma lista detalhada de suas dívidas e escolha um método para quitá-las.\n- Entre em contato com seus credores para negociar condições mais favoráveis.\n- Reflita sobre suas decisões financeiras e evite contrair dívidas ruins no futuro.\n\nCom disciplina e planejamento, você pode superar as dívidas e alcançar uma vida financeira mais equilibrada. Boa sorte! 🚀",
            'ordem' => 5,
        ]);

    }
}