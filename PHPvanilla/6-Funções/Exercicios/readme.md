````markdown
### Semana 4 - Modularização com funções

#### 1. Conceito de função

Uma função é como uma máquina: você coloca uma matéria prima (parâmetro), ela processa e devolvde um produto final (return).

---

#### 2. Principio do DRY (Don't repeat yourself)

Se uma lógica foi escrita duas vezes ou mais dentro de um código, essa lógica deve virar uma função.

---

#### 3. Parâmetros e retorno

A forma mais segura e organizada é enviar os dados por **parâmetros**. Assim, a função não precisa acessar diretamento variáveis globais.

Nesse caso, `$nomeCliente` continua no escopo global mas seu valor é enviado para o parâmetro local `$nome`. A função recebe uma informação, processa e retorna o resultado.

> **Resumo:** variáveis protegem os dados internos da função; parâmetros são o caminho recomendado para evitar Erros e enviar Informações, e `return`é usado para devolver um resultado ao código que chamou a função.

---

#### 4. Tipagem

Os tipos mais usados:

* `int`: número inteiro, `10` ou `1024`.

* `float`: número decimal ou ponto flutuante, `10.50`.

* `string`: texto, como `"Maria"`

* `bool`: valor lógico, `true` ou `false`.

O tipo deve ser escrito antes do nome de cada parâmetro e o tipo da função deve ser escrito após os parênteses, precedito por `:`, informando o que a função vai devolver.

> **Resumo: os tipos dos parâmetros documentam as entradas da função, os tipos após `:` documentam a saída da função.

---

#### 5. `VOID`

Se uma função faz um trabalho e **não retorna NADA**, dizemos que o retorno dela é "vazio" (`void`)

Exemplo de função sem `return`:

```php
function registroLog(string $mensagem): void{

    file_put_contents("erro.log",$mensagem);

}
````

A função deve focar em `return`, evitando o uso do `echo`.

---

#### 6. Escopo e Referência (O segredo da memória)

##### O que é Escopo? (Regra de Las Vegas)

**O que acontece dentro da função, fica dentro da função.**

Uma váriavel criada fora da função não existe dentro dela, e uma criada dentro da mesma não existe fora dela.

**Escopo** é o local do programa onde a variável pode ser armazenada/acessada. Em PHP, uma variável criada fora de uma função pertende ao **Escopo global**. uma variável criada dentro de uma função pertence ao **Escopo local**.

**Como enviar dados para uma função?**

A forma mais segura e organizada é enviar os dados por **parâmetros**. Assim, a função não precisa acessar diretamento variáveis globais:

```php
function saudar(string $nome):string{

    return "Olá, $nome!";

}

$nomeCliente = "João";

echo saudar($nomeCliente); // Olá, João!
```

Nesse caso, `$nomeCliente` continua no escopo global mas seu valor é enviado para o parâmetro local `$nome`. A função recebe uma informação, processa e retorna o resultado.

---

#### 7. Referência

Suas anotações não explicam sobre o parâmetro `float &$valor`.

---

#### 8. Funções nativas do PHP

O PHP tem milhares de funções pronta, essa são chamadas de nativas.

| Função         | Categoria | O que faz                                                      | Como usar                          |
| -------------- | --------- | -------------------------------------------------------------- | ---------------------------------- |
| `strlen()`     | Strings   | Retorna a quantidade de caracteres de um texto.                | `$tamanho = strlen($texto);`       |
| `strtoupper()` | Strings   | Converte o texto para letras maiúsculas.                       | `$resultado = strtoupper($texto);` |
| `strtolower()` | Strings   | Converte o texto para letras minúsculas.                       | `$resultado = strtolower($texto);` |
| `ucfirst()`    | Strings   | Converte a primeira letra do texto para maiúscula.             | `$resultado = ucfirst($texto);`    |
| `trim()`       | Strings   | Remove espaços e quebras de linha no início e no fim do texto. | `$limpo = trim($texto);`           |

**Atenção:** algumas funções modificam o array original, como `sort()`, `array_push()` e `array_pop()`. Já outras retornam um novo valor, como `count()`, `explode()` e `str_replace()`. Em caso de dúvida, consulte a documentação oficial do PHP e verifique o retorno da função.

---

#### 9. Previsão de saída

A função deve focar em `return`, evitando o uso do `echo`.

A função `calcularTotal()` pode ser reutilizada em uma página ou teste. O `echo` aparece somente fora da função, no momento de apresentar o resultado final ao usuário.

A função recebe uma informação, processa e retorna o resultado.

---

#### 10. Documentação PHP
`strlen()` | Strings | Retorna a quantidade de caracteres de um texto. | `$tamanho = strlen($texto);`