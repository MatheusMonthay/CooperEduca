@extends('layouts.app')

@section('content')
<div class="container">
    <div class="register-container">
        <h1>Registro</h1>
        @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" class="form-control" required
                    autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                    required autocomplete="new-password">
            </div>

            <div class="terms-box">
                <h3>Termos de Uso e Política de Privacidade</h3>
                <div class="terms-content">
                    <h4>Termo de Privacidade</h4>
                    
                    <h5>Dados coletados:</h5>
                    <p>Podemos coletar as seguintes informações:</p>
                    <ul>
                        <li>Dados pessoais (nome, e-mail, telefone, CPF – quando necessário para cadastro ou transações).</li>
                        <li>Dados de navegação (IP, cookies, páginas acessadas, tempo de visita).</li>
                        <li>Informações financeiras básicas.</li>
                        <li>Dados de cadastro em cursos ou eventos (formação profissional, área de interesse).</li>
                    </ul>
                    
                    <h5>Como Usamos Seus Dados</h5>
                    <p>Seus dados podem ser utilizados para:</p>
                    <ul>
                        <li>Fornecer conteúdo educativo sobre finanças e cooperativismo.</li>
                        <li>Personalizar sua experiência no site.</li>
                        <li>Enviar newsletters e comunicações (se autorizado).</li>
                        <li>Melhorar nossos serviços e segurança.</li>
                        <li>Cumprir obrigações legais.</li>
                    </ul>
                    
                    <h5>Compartilhamento de Dados</h5>
                    <p>Seus dados não serão vendidos ou compartilhados com terceiros, exceto em casos como:</p>
                    <ul>
                        <li>Parceiros de serviços essenciais (ex.: plataforma de e-mail marketing, processadores de pagamento).</li>
                        <li>Exigência legal ou autoridades competentes.</li>
                        <li>Com seu consentimento explícito.</li>
                    </ul>
                    
                    <h5>Cookies e Tecnologias Semelhantes</h5>
                    <ul>
                        <li>Utilizamos cookies para melhorar a navegação e personalizar conteúdo.</li>
                        <li>Você pode gerenciar suas preferências de cookies no navegador (Google, FireFox, etc.).</li>
                    </ul>
                    
                    <h5>Direitos do Usuário (LGPD/GDPR)</h5>
                    <p>Você tem o direito de:</p>
                    <ul>
                        <li>Acessar, corrigir ou excluir seus dados.</li>
                        <li>Revogar consentimentos.</li>
                        <li>Solicitar a portabilidade dos dados.</li>
                        <li>Opor-se ao tratamento de dados.</li>
                    </ul>
                    <p>Para exercer esses direitos, entre em contato pelo e-mail: cooperaeduca1@gmail.com.</p>
                    
                    <h5>Armazenamento e Segurança</h5>
                    <ul>
                        <li>Seus dados são protegidos com medidas técnicas e organizacionais.</li>
                        <li>Mantemos os dados apenas pelo tempo necessário ou exigido por lei.</li>
                    </ul>
                    
                    <h5>Alterações nesta Política</h5>
                    <ul>
                        <li>Esta política pode ser atualizada. Alterações serão comunicadas em nosso site. Em caso de não aceitar os termos, o uso e o acesso do site não será disponibilizado.</li>
                    </ul>
                    
                    <h5>Contato</h5>
                    <p>Dúvidas sobre privacidade? Entre em contato:</p>
                    <p>📧 cooperaeduca1@gmail.com</p>
                    
                    <hr>
                    
                    <h4>Aceitação dos Termos de uso</h4>
                    <p>Ao utilizar este site, você confirma que:</p>
                    <ul>
                        <li>Tem capacidade legal para aceitar estes termos.</li>
                        <li>Concorda em cumprir todas as disposições aqui descritas.</li>
                        <li>Reconhece que o site não oferece aconselhamento financeiro personalizado ou recomendações de investimento fraudulenta ou de má conduta.</li>
                    </ul>
                    
                    <h4>Objetivo deste Site</h4>
                    <p>O CooperaEduca tem como objetivo:</p>
                    <ul>
                        <li>Fornecer catalogos de cursos (Gratuitos e pagos) trilha de aprendizado e certificados para estudantes, profissionais em transição de carreira, etc. com sistemas de recomendação personalizado, área de progresso e certificado.</li>
                        <li>Métodos de ensino inovadores com aulas ao vivo, quizzes interativos, projetos praticos e tabelas de desempenho.</li>
                        <li>Você é responsável pela veracidade das informações requisitadas pelo site para criar seu usuario.</li>
                        <li>Mantenha sua senha segura; atividades realizadas em sua conta são de sua responsabilidade.</li>
                    </ul>
                    
                    <h4>Uso Adequado</h4>
                    <p>Você concorda em NÃO:</p>
                    <ul>
                        <li>Utilizar o site para fins ilegais/ fraudulentos.</li>
                        <li>Copiar, distribuir ou modificar conteúdo sem autorização.</li>
                        <li>Enviar spam ou conteúdo ofensivo.</li>
                        <li>Violar direitos de propriedade intelectual.</li>
                    </ul>
                    
                    <h4>Isenção de Responsabilidade</h4>
                    <ul>
                        <li>O conteúdo do site é informativo e não substitui aconselhamento profissional, ajudar estudantes ou profissionais.</li>
                        <li>Não garantimos a precisão ou atualidade das informações fornecidas.</li>
                        <li>Não nos responsabilizamos por perdas financeiras decorrentes do uso dos materiais.</li>
                    </ul>
                    
                    <h4>Propriedade Intelectual</h4>
                    <ul>
                        <li>Todo o conteúdo (textos, imagens, vídeos, logos) é protegido por direitos autorais e marcas registradas. O uso não autorizado pode resultar em ações legais contra quem quebras ou usar de vazamentos quebrado por essa diretriz.</li>
                    </ul>
                    
                    <h4>Links para Terceiros</h4>
                    <ul>
                        <li>Podemos indicar links externos. Não nos responsabilizamos pelo conteúdo ou práticas de privacidade desses sites.</li>
                    </ul>
                    
                    <h4>Modificações nos Termos</h4>
                    <ul>
                        <li>Reservamos o direito de atualizar estes Termos a qualquer momento. Alterações serão comunicadas aos usuários. Caso recuse os termos, averá impedimento para logar no site.</li>
                    </ul>
                    
                    <h4>Lei Aplicável e Foro</h4>
                    <ul>
                        <li>Estes Termos são regidos pelas leis do Brasil/Rondonia. Eventuais disputas serão resolvidas no foro de Pimenta Bueno/Rondonia.</li>
                    </ul>
                    
                    <h4>Contato</h4>
                    <p>Dúvidas sobre estes Termos? Entre em contato: cooperaeduca1@gmail.com</p>
                </div>
                <div class="terms-checkbox">
                    <input type="checkbox" id="terms_accepted" name="terms_accepted" required>
                    <label for="terms_accepted">Eu li e aceito os Termos de Uso e Política de Privacidade</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>

        <div class="mt-3">
            <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login aqui</a>.</p>
        </div>
    </div>
</div>
@endsection