# Projeto CRUD PHP - Laravel
Este é um projeto Laravel que serve como base para desenvolvimento web. Ele inclui configurações iniciais e estrutura básica para ajudar você a começar a desenvolver seu aplicativo web.

## Pré-requisitos
Antes de começar, verifique se o seu ambiente atende aos seguintes requisitos:

PHP (versão 7.4 ou superior)
Composer
Servidor web (por exemplo, Apache ou Nginx)
Banco de dados (por exemplo, MySQL, PostgreSQL)
Instalação
Siga as etapas abaixo para configurar o projeto:

Clone este repositório para o diretório desejado em sua máquina local:
```
git clone https://github.com/seu-usuario/nome-do-projeto.git
```

Navegue até o diretório do projeto:
```
cd nome-do-projeto
```

Instale as dependências do Composer:
```
composer install
```

Copie o arquivo .env.example e renomeie-o para .env:
```
cp .env.example .env
```

Gere a chave de criptografia do Laravel:
```
php artisan key:generate
```

Configure as informações de conexão com o banco de dados no arquivo .env. Por exemplo, defina as variáveis **DB_HOST**, **DB_PORT**, **DB_DATABASE**, **DB_USERNAME** e **DB_PASSWORD** de acordo com as configurações do seu banco de dados.

Execute as migrações do banco de dados para criar as tabelas necessárias:
```
php artisan migrate
```

Inicie o servidor de desenvolvimento:
```
php artisan serve
```


O servidor de desenvolvimento será iniciado em http://localhost:8000.

As views estão localizadas em resources/views/. Você pode criar suas próprias views nesta pasta.
Os controladores estão localizados em app/Http/Controllers/. Crie ou edite os controladores para implementar a lógica de negócios do seu aplicativo.
Os modelos estão localizados em app/Models/. Crie ou edite os modelos para representar as entidades do seu aplicativo.
Os arquivos de migração estão localizados em database/migrations/. Crie ou edite esses arquivos para definir a estrutura do banco de dados.
Os arquivos de seed estão localizados em database/seeders/. Crie ou edite esses arquivos para popular o banco de dados com dados de teste.
Os arquivos de configuração estão localizados em config/. Edite esses arquivos para configurar o comportamento do seu aplicativo.
