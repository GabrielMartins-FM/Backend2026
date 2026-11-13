LISTA DE EXERCÍCIOS — CONTROLLERS E ROUTES NO LARAVEL
Parte A — Questões Teóricas de Fixação


1. Semântica RESTful:

O método GET deve ser utilizado apenas para buscar informações, e não para excluir dados. Se uma exclusão fosse feita por GET, robôs de busca poderiam acessar o endereço e acabar apagando informações sem querer.

2. Idempotência:

Idempotência significa que executar uma mesma requisição várias vezes deve produzir o mesmo resultado final. O método PUT é idempotente porque atualiza um recurso para um determinado estado. Já o POST pode criar vários registros diferentes quando executado mais de uma vez.

3. Resource Controllers:

O comando php artisan make:controller --resource cria sete ações principais:
- index: lista os registros.
- create: mostra o formulário de criação.
- store: salva um novo registro.
- show: mostra os detalhes de um registro.
- edit: mostra o formulário de edição.
- update: atualiza um registro existente.
- destroy: exclui um registro.
4. Injeção de Dependências:

O Laravel possui um Service Container que identifica o que o método precisa e entrega automaticamente uma instância de Request. Assim, não precisamos criar o objeto manualmente utilizando new Request().

5. Method Spoofing:

Os formulários HTML convencionais permitem enviar requisições GET e POST, mas não PUT e DELETE diretamente. O Laravel resolve isso utilizando o campo @method, que informa qual método HTTP deve ser utilizado na requisição.

6. Ataques CSRF:

O CSRF acontece quando um site malicioso tenta fazer o usuário executar uma ação sem sua autorização. A diretiva @csrf cria um token de segurança que o Laravel verifica para confirmar se a requisição é válida.

7. Constraints de Rota:

Esses métodos servem para limitar os valores aceitos em uma rota. Por exemplo, whereNumber('id') aceita apenas números. Quando o formato não corresponde à restrição, o Laravel retorna o erro HTTP 404, indicando que a rota não foi encontrada.

8. Rotas Nomeadas:

Utilizar rotas nomeadas facilita a manutenção do projeto, pois podemos alterar o endereço de uma rota sem precisar modificar todos os lugares onde ela é utilizada. Também ajuda a evitar erros na escrita dos endereços.

9. Single Responsibility no Controller:

A validação deve ser organizada para que o Controller não fique cheio de códigos e responsabilidades. Isso facilita a leitura, manutenção e reutilização do código, principalmente quando utilizamos Form Requests para validações maiores.

10. A Ferramenta route:list:

O comando php artisan route:list mostra todas as rotas cadastradas no projeto, incluindo seus métodos HTTP, endereços e Controllers responsáveis. Isso facilita a organização, documentação e identificação de possíveis erros nas rotas.