# CooperEduca

**CooperEduca** é uma plataforma de educação financeira online com foco em conteúdos sobre **cooperativismo**. Desenvolvido como parte de um projeto educacional, o sistema permite que usuários acessem cursos, assistam aulas, acompanhem seu progresso e concluam formações em um ambiente simples e intuitivo.

## 🚀 Funcionalidades

- Cadastro e autenticação de usuários
- Listagem de cursos disponíveis
- Aulas organizadas por curso
- Salvamento automático do progresso do usuário
- Dashboard com cursos em andamento e concluídos

## 🛠️ Tecnologias utilizadas

- PHP 8.x
- [Laravel 10](https://laravel.com/)
- Blade (engine de templates)
- MySQL
- HTML, CSS, JavaScript

## ✅ Requisitos

Antes de rodar o projeto, certifique-se de ter instalado:

- PHP 8.x
- Composer
- MySQL
- Node.js e NPM (para assets front-end, se necessário)

## ⚙️ Instalação

1. Clone o repositório:

```bash
git clone https://github.com/MatheusMonthay/CooperEduca.git
cd CooperEduca
```

2. Instale as dependências do backend:

```bash
composer install
```

3. Copie o arquivo `.env.example` para `.env` e configure seu ambiente (DB, APP_URL, etc):

```bash
cp .env.example .env
```

4. Gere a key da aplicação:

```bash
php artisan key:generate
```

5. Crie o banco de dados e rode as migrations:

```bash
php artisan migrate
```

6. Rode os seeders para popular o banco de dados com dados de exemplo:

```bash
php artisan db:seed
```

Caso deseje rodar um seeder específico, utilize:

```bash
php artisan db:seed --class=NomeDoSeeder
```

Exemplo:

```bash
php artisan db:seed --class=UserSeeder
```

7. Inicie o servidor:

```bash
php artisan serve
```

## 📁 Organização do Projeto

- `app/Models`: Modelos Eloquent
- `app/Http/Controllers`: Lógica dos controladores
- `resources/views`: Arquivos Blade (frontend)
- `routes/web.php`: Rotas da aplicação
- `database/migrations`: Estrutura do banco de dados
- `database/seeders`: Arquivos de seeders

## 🤝 Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para abrir *issues* e *pull requests*.

1. Fork o projeto
2. Crie sua branch: `git checkout -b minha-feature`
3. Commit suas alterações: `git commit -m 'feat: nova funcionalidade'`
4. Dê push: `git push origin minha-feature`
5. Abra um Pull Request
