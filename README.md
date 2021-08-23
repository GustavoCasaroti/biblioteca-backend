# Back-end

Este projeto foi realizacom com o Laravel 4.2.8.

Essa projeto é o back-end do CRUD básico da biblioteca, que pode ser encontrado em: `https://github.com/GustavoCasaroti/biblioteca-front`

## Instalação 

Execute o download do projeto, defina uma pasta para colocar os arquivos do projeto.

Faça o download do composer em `https://getcomposer.org/download/` e instale-o.

Após abra o PowerShell e execute o comando `composer global require laravel/installer`

## Servidor

Após o fim da instalação do Laravel, abra o projeto, e realize as configurações do seu banco de dados no arquivo `.env`

feito isso, volte ao Powershell e navegue até a pasta do projeto através do comando `cd` e execute o comando `php artisan serve` para executar o servidor Laravel, para que ele funcione junto com o servidor de Angular.

## Xampp

Realize o download do xampp para a o gerenciamento do banco de dados através do PhpMyAdmin. Pode-se realizar o download do xampp através do link `https://www.apachefriends.org/pt_br/download.html`.

Após o download e a instalação do mesmo, abra o aplicativo `XAMPP-CONTROL` e de star nos servidor de APACHE e MySQL.

Após, em seu navegador, acesse a URL `http://localhost/phpmyadmin/` para gerenciar o banco de dados do XAMPP e as informações MySQL diretamente pelo banco.
