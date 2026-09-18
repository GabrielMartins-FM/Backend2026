## LISTA DE EXERCÍCIOS: SEGURANÇA E HIGIENIZAÇÃO DE DADOS 

# Parte A: Exercícios Teóricos de Fixação


1- Conceituação OWASP: O que significa a sigla XSS e por que ela é classificada como uma vulnerabilidade no lado do cliente (Client-Side) que deve ser prevenida pelo Back-End?


2- Reflected vs Stored: Qual é a diferença entre um ataque XSS Refletido e um XSS Gravado (Stored)? Qual dos dois apresenta maior potencial de estrago para uma empresa e por quê?


3- Mecanismo de Escapamento: Explique detalhadamente a transformação que a função htmlspecialchars() realiza nos caracteres < e >. Por que o navegador não executa o código após essa transformação?


4- Flags de Proteção: Qual é a função da flag ENT_QUOTES na chamada de htmlspecialchars()? O que pode acontecer se essa flag for omitida em um campo <input value="...">?


5- Anti-Alucinação PHP: Por que não devemos utilizar o filtro FILTER_SANITIZE_STRING em projetos modernos desenvolvidos em PHP 8.3?


6- Validação de E-mail: Qual é a diferença prática entre verificar um e-mail com empty($email) e verificar com filter_var($email, FILTER_VALIDATE_EMAIL)?


7- Roubo de Sessão: Como um atacante pode usar uma brecha XSS para capturar o cookie de sessão de um usuário logado?


8- Segurança em Camadas: Por que sanitizar na entrada (ex: com strip_tags) não elimina a necessidade de codificar na saída com htmlspecialchars()?

## Respostas

### 1. Conceituação OWASP

XSS significa **Cross-Site Scripting**. É um ataque que coloca códigos maliciosos em uma página para serem executados no navegador do usuário.

### 2. Reflected vs Stored

O **Reflected** acontece na hora da requisição e não fica salvo. O **Stored** fica salvo no sistema e pode atingir vários usuários. Por isso, o Stored pode causar mais problemas.

### 3. Mecanismo de Escapamento

A função `htmlspecialchars()` transforma `<` em `&lt;` e `>` em `&gt;`. Assim, o navegador entende como texto e não como código.

### 4. Flags de Proteção

A `ENT_QUOTES` protege as aspas simples e duplas. Sem ela, alguém poderia tentar colocar código dentro de um campo `<input>`.

### 5. Anti-Alucinação PHP

O `FILTER_SANITIZE_STRING` não deve ser usado porque foi descontinuado no PHP 8.1. Em versões atuais, devemos usar outras formas de tratar os dados.

### 6. Validação de E-mail

`empty()` só verifica se o campo está vazio. Já `filter_var()` verifica se o e-mail tem um formato válido.

### 7. Roubo de Sessão

Com uma falha XSS, um atacante pode tentar pegar informações do cookie de sessão e usar a conta da vítima.

### 8. Segurança em Camadas

Usar apenas `strip_tags()` não é suficiente. Também usamos `htmlspecialchars()` na saída para evitar que códigos sejam executados pelo navegador.


