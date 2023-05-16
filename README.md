### Plataforma suporte

Desenvolvido em 2022, o [PlataformaSuporte]("https://github.com/ropehapi/PlataformaSuporte") é uma plataforma que visa solucionar demandas de suporte.

### Funcionalidades
- Cadastro de tickets
- Atendimento online
- Base de conhecimento

### Entidades
- HelpDesk
  - Empresa
  - Usuário
    - Três perfis de acesso:
      - Gestor
      - Suporte
      - Cliente
  - Ticket
    - Ticket 
    - Dados do ticket
    - Tabelas de controle
      - Setores
      - Categoria
      - Classificação
      - Status

### Estrutura
- Backend
    - PHP v8.1.2
    - Laravel v9.35.1
    - Conteinerização via [Laradock](https://laradock.io)
- Front-end
    - Bootstrap
    - Jquery
    - [Template AdminLTE3](https://github.com/jeroennoten/Laravel-AdminLTE)

### Instalação
Para instalar e rodar esse projeto na sua máquina, a aplicação foi conteinerizada utilizando o [Laradock](https://laradock.io), visando prover um ambiente de desenvolvimento homogêneo para qualquer pessoa que seja.

Note que nas etapas onde adicionamos a `.env`, é necessário que a parametrizemos de acordo com o projeto, como por exemplo definindo a versão do php para `8.1`, renomeando bancos entre outros.

#### Comandos:
- `$ git clone https://github.com/ropehapi/SistemaSuporte`
- `$ git clone https://github.com/Laradock/laradock.git`
- `$ cd laradock`
- `$ cp .env.example .env` 
- Configure o PHP e o MySQL no arquivo de configuração do Laradock.
- `$ sudo docker-compose up -d nginx mysql phpmyadmin workspace `
- `$ sudo docker exec -it <id_container_workspace> bash`
- `# composer install`
- `# cp .env.example .env` 
- Configure a .env de sua aplicação de acordo com os dados passados na .env do laradock, e informe o IP do container do MySQL. (`docker inspect <mysql_container_id> | grep IP`)
- `# php artisan key:generate`
- `# php artisan migrate`
- `# php artisan db:seed`
- `# chmod -R 777 /var/www/storage/`