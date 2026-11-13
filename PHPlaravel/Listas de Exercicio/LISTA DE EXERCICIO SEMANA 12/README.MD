LISTA DE EXERCÍCIOS — MVC
Parte A — Questões Teóricas de Fixação
1. O Colapso do Código Espaguete:

Colocar consultas SQL, validações e HTML no mesmo arquivo deixa o código desorganizado e difícil de entender. Isso também dificulta encontrar erros e fazer alterações, principalmente quando o sistema começa a crescer.

2. A Tríade MVC:

O MVC é dividido em três partes:
- Model: responsável pelos dados e pelas regras de negócio.
- View: responsável pela parte visual que o usuário utiliza.
- Controller: recebe as requisições e faz a comunicação entre o Model e a View.
As regras de negócio devem ficar principalmente no Model ou em classes próprias de serviço, e não concentradas no Controller.

3. O Papel do Composer:

O composer.json informa quais bibliotecas o projeto precisa. Já o composer.lock registra as versões exatas que foram instaladas. A pasta vendor/ não deve ser enviada ao Git porque contém bibliotecas que podem ser instaladas novamente pelo Composer.

4. A Especificação PSR-4:

O PSR-4 permite que o PHP encontre automaticamente os arquivos pelas suas namespaces. Assim, quando o código utiliza App\Controllers\ProdutoController, o Autoloader procura o arquivo correspondente ao caminho configurado no Composer, sem precisar fazer vários includes manualmente.

5. Front Controller:

A principal vantagem é aumentar a segurança, pois todas as requisições passam pelo arquivo public/index.php. Dessa forma, os arquivos internos do projeto ficam protegidos e não podem ser acessados diretamente pelos visitantes.

6. Roteador HTTP:

O roteador verifica o método HTTP e o endereço solicitado para identificar qual ação deve executar. Por exemplo, GET /produtos pode listar os produtos, enquanto POST /produtos pode cadastrar um novo produto.

7. Injeção de Dados na View:

A função extract() transforma os elementos de um array em variáveis PHP. Assim, o Controller consegue enviar informações para a View, permitindo utilizar os dados diretamente no arquivo visual.

8. Segurança contra XSS nas Views:

O htmlspecialchars() transforma caracteres especiais em representações seguras, evitando que códigos HTML ou JavaScript maliciosos sejam executados na página. Isso ajuda a proteger o sistema contra ataques XSS.

9. Single Responsibility no Controller:

O Controller não deve conter comandos SQL ou criar conexões diretamente com new PDO() porque sua função é controlar as requisições. Separar essas responsabilidades deixa o código mais organizado, seguro e fácil de manter.

10. Transição para o Framework Laravel:

Os conceitos continuam praticamente os mesmos, como MVC, rotas, Controllers, Models, Views, Composer, Autoload e segurança. A diferença é que o Laravel já oferece ferramentas prontas para facilitar essas tarefas, evitando que precisemos construir tudo manualmente.