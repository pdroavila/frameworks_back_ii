# Agendador de Tarefas Laravel

Este é um aplicativo de gerenciamento de tarefas construído com Laravel. Ele permite aos usuários criar, editar, excluir e visualizar suas tarefas diárias.

## Requisitos

Certifique-se de ter os seguintes requisitos instalados em sua máquina:

- PHP >= 8.1
- Composer
- MySQL ou outro banco de dados compatível
- Node.js e NPM (para compilação de assets)

## Instalação

Siga estes passos para configurar o projeto em sua máquina local:

1. Clone o repositório
   ```
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   ```

2. Instale as dependências do PHP
   ```
   composer install
   ```

3. Instale as dependências do JavaScript
   ```
   npm install
   ```

4. Crie um arquivo .env
   ```
   cp .env.example .env
   ```

5. Gere uma chave para a aplicação
   ```
   php artisan key:generate
   ```

6. Configure o arquivo .env com suas credenciais de banco de dados
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_seu_banco
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

7. Execute as migrações do banco de dados
   ```
   php artisan migrate
   ```

8. [Opcional] Popule o banco de dados com dados de exemplo
   ```
   php artisan db:seed
   ```

9. Compile os assets
   ```
   npm run dev
   ```

10. Inicie o servidor de desenvolvimento
    ```
    php artisan serve
    ```

Agora você deve ser capaz de acessar o aplicativo em `http://localhost:8000`.

## Uso

Após a instalação, você pode:

1. Registrar uma nova conta ou fazer login.
2. Criar novas tarefas fornecendo um título, descrição e prazo.
3. Visualizar todas as suas tarefas na página principal.
4. Editar ou excluir tarefas existentes.
5. Marcar tarefas como concluídas.

## Recursos

- Autenticação de usuários
- CRUD completo para tarefas
- Interface responsiva
- Validação de formulários
