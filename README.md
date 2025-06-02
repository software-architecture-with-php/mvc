# mvc

### ✅ O que é MVC?

MVC é um padrão de arquitetura de software que organiza a aplicação em três partes principais:

* Parte	Responsabilidade
* Model	Gerenciar os dados e a regra de negócio
* View	Exibir a interface para o usuário
* Controller	Fazer a ponte entre o usuário, o Model e a View

### ✅ Como funciona o fluxo?

* Usuário faz uma requisição (ex.: envia um formulário).

* Controller recebe e decide o que fazer:

* Chama o Model para manipular dados.

* Chama a View para mostrar o resultado.

* Model faz a lógica (ex.: consulta ou salva no banco).

* View gera o HTML e exibe para o usuário.

### ✅ Analogia simples: Restaurante

MVC	Restaurante
Controller	Garçom → recebe pedido e entrega prato
Model	Cozinha → prepara o prato
View	Prato → entregue ao cliente

---

### ✅ O que você ganha com MVC?

| ✅ Vantagens                              | ❌ Desvantagens                                   |
|-------------------------------------------|--------------------------------------------------|
| Separação de responsabilidades            | Mais arquivos e organização                      |
| Código mais limpo e fácil de manter       | Pode ser overkill para sistemas muito simples    |
| Mais fácil de testar e evoluir            | Requer disciplina de estrutura                   |


### ✅ Quando usar MVC?

* Projetos pequenos: pode simplificar, mas depende.

* Projetos médios e grandes: recomendado.

* Trabalhos em equipe: essencial para manter organização.

### ✅ Dica profissional:

Mesmo em projetos pequenos, vale começar com uma estrutura simples de MVC, porque facilita a evolução sem precisar "refazer tudo" depois.
