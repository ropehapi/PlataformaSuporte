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
- Front-end
    - Bootstrap
    - Jquery
    - [Template AdminLTE3](https://github.com/jeroennoten/Laravel-AdminLTE)

### Instalação
- `$ git clone https://github.com/ropehapi/SistemaSuporte`
<!-- - `$ composer update` -->
<!-- - `$ php artisan migrate` -->
<!-- - `$ php artisan db:seed` -->

- git clone https://github.com/Laradock/laradock.git
- cd laradock
- cp .env.example .env
- sudo docker-compose up -d nginx mysql phpmyadmin workspace 
- sudo docker exec -it 5cc46a bash
- composer install
