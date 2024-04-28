# Use a imagem oficial do PHP com o Apache
FROM php:8.0-apache

# Defina o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Copie os arquivos da sua aplicação para o diretório do Apache
COPY . .

# Exponha a porta 80 para o tráfego da web
EXPOSE 80