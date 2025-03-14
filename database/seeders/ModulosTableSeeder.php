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

    }
}