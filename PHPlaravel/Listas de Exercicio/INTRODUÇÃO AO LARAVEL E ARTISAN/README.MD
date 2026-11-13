LISTA DE EXERCÍCIOS — INTRODUÇÃO AO LARAVEL 11.X E ARTISAN CLI
Parte A — Questões Teóricas de Fixação
1. Evolução Arquitetural:

Na Semana 12, aprendemos a organizar um projeto utilizando o padrão MVC, separando as responsabilidades entre Model, View e Controller. Isso ajudou a entender como o Laravel organiza seus arquivos e facilita o desenvolvimento de aplicações.

2. A Nova Arquitetura do Laravel 11:

No Laravel 11, a estrutura do projeto ficou mais simples e com menos arquivos de configuração. O principal ponto de configuração passou a ser o arquivo bootstrap/app.php, onde são configuradas rotas, middlewares e outros recursos da aplicação.

3. Padrão 12-Factor App:

Colocar senhas diretamente no arquivo config/database.php é perigoso porque essas informações podem acabar sendo compartilhadas no GitHub. O arquivo .env é utilizado para guardar essas informações separadamente, evitando expor dados importantes.

4. O Papel da APP_KEY:

Alterar a APP_KEY de uma aplicação que já está em produção pode causar problemas, pois os dados protegidos com a chave antiga podem deixar de funcionar. Isso pode afetar sessões, cookies e informações criptografadas dos usuários.

5. Isolamento de Diretórios:

O servidor deve apontar somente para a pasta public/ porque ela contém os arquivos que podem ser acessados pelos visitantes. Isso ajuda a proteger arquivos internos do Laravel, como configurações, senhas e informações do projeto.

6. Artisan CLI:

O comando php arquivo.php executa diretamente um arquivo PHP. Já o php artisan permite utilizar comandos próprios do Laravel, facilitando tarefas como criar arquivos, limpar caches, executar testes e iniciar o servidor.

7. O Arquivo .env.example:

O arquivo .env.example serve como um modelo das configurações necessárias para executar o projeto. Mantê-lo atualizado ajuda outros desenvolvedores a configurar o ambiente corretamente quando baixam o projeto pelo Git.

8. Motor de Templates Blade:

A diretiva {{ $variavel }} protege o conteúdo, convertendo caracteres especiais para evitar ataques XSS. Já a diretiva {!! $variavel !!} mostra o conteúdo sem essa proteção, podendo permitir a execução de códigos maliciosos.

9. Responsabilidade do Controller:

Um Controller deve ter métodos curtos e organizados para facilitar a leitura e manutenção do código. As consultas ao banco e as regras de negócio devem ficar separadas, evitando que uma única parte do sistema fique responsável por tudo.

10. A Ferramenta Tinker:

O Tinker permite executar comandos PHP diretamente no terminal, dentro do ambiente Laravel. Ele ajuda a testar modelos, consultar informações, criar objetos e verificar configurações sem precisar criar arquivos ou desenvolver uma tela para cada teste.