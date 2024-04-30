# App Aniversariantes

Este é um projeto onde utilizei o PHP 8.3, API do Google Sheets e o Docker Compose. E realizei o deploy em nuvem com a Azure.

## Pré-requisitos

Antes de começar, certifique-se de ter o PHP 8.3 e o Docker Compose instalado em seu sistema. Se você não tiver, você pode baixá-lo do site oficial do PHP(https://www.php.net/downloads.php) e do Docker (https://www.docker.com/get-started/).

## Como instalar

1. Clone este repositório para a sua máquina local usando `git clone https://github.com/FredMagas/AppAniversariantes.git`.

2. Navegue até a pasta do projeto usando `cd AppAniversariantes` ou abra a pasta do projeto com o VS Code.

3. Instale as dependências do projeto usando `composer install`.

## Como executar

1. Inicie o servidor PHP integrado usando `php -S localhost:8000`.

2. Abra o seu navegador e navegue até `http://localhost:8000`.

## Docker

Este projeto pode ser executado dentro de um container Docker usando Docker Compose. Siga as instruções abaixo para criar e executar um container Docker para este projeto.

## Criando o Containêr Docker

1. Navegue até a pasta do projeto usando `cd AppAniversariantes` ou abra a pasta do projeto com o VS Code.

2. Construa e execute o container Docker usando o seguinte comando:

   `docker-compose up --build -d`

3. Agora, a aplicação deve estar disponível em http://localhost:8080

## Acessando o Projeto Final

Para acessar o projeto final com deploy no Azure utilizando o plano gratuito **(pode levar até 2 minutos para que o aplicativo carregue)** clique na seguinte url: 

https://app-aniversario.azurewebsites.net/
