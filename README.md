## 📌 Desafio

Este desafio consiste na implementação de uma aplicação PHP utilizando o framework Laravel. O objetivo da aplicação é controlar o processo de seleção de candidatos a vagas de emprego.

## 📐 Implementação

- Criar, editar, listar, deletar, buscar vagas; ✅
- Criar, editar, listar, deletar candidatos; ✅
- É preciso haver uma página para exibir a relação de vagas cadastradas e para cada vaga, quais candidatos atendem aos requesitos da vaga; ✅
- Um candidato e uma vaga pode ter no mínimo 3 (três) habilidades; ✅
- Um candidato atende a uma vaga se ele possui pelo menos 3 (três) habilidades exigidas para a vaga; ✅ <br>
Será considerado um diferencial a implementação dos seguintes itens:
- Criar atenticação de usuários usando os recursos do Laravel; ✅
- Utilizar uma biblioteca frontend de sua preferência; ✅
- Inserir o projeto num container docker;

## 📚 Alguns dos materiais utilizados

    CSS (Cascading Style Sheets)
    JS (JavaSctipt)
    Artisan (Auxilia na criação dos model, migrations, etc)
    Blade (Auxilia a manusear as views)
    Eloquent (ORM - Objet-Relational Mapping)
    XAMPP (Apache, MariaDB, PHP, Perl)
    Laravel (https://laravel.com/)
    Bootstrap (https://getbootstrap.com/)
    Composer (https://getcomposer.org/)
    Jetstream (https://jetstream.laravel.com/)
    Livewire (https://laravel-livewire.com/)

## 📁 Projeto
### 📍 Fazendo o clone do repositório:

    git clone https://github.com/brunnuscz/desafio-php-laravel.git

### 📍 Entrando no repositório baixado:

    cd desafio-php-laravel

### 📍 Lembre de ter o XAMPP instalado e inicialize o Apache e MySQL:

    https://www.apachefriends.org/pt_br/index.html

### 📍 Atenção aos comandos necessários para que o projeto funcione corretamente:

    composer install
    php -r "copy('.env.example', '.env');"
    php artisan key:generate
    
### 📍 Edite o arquivo .env com as informações do banco de dados, e depois rode o comando a seguir para criar as tabelas, lembre de já ter criado o banco de dados:

    php artisan migrate 

### 📍 Para que o sistema de login e cadastro funcione, roda os seguintes comando no terminal:

    composer require laravel/jetstream
    php artisan jetstream:install livewire

### 📍 Após isso rode novamente o comando das migrations:

    php artisan migrate

### 📍 É preciso ter o Node.js instalado na máquina. Após instalado rode os seguintes comandos:

    npm install
    npm run dev

### 📍 Após isso basta entrar na pasta /projeto pelo terminal e rodar o comando a seguir para rodar o sistema:

    php artisan serve
