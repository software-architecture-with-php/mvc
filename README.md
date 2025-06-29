# 🧩 Desafio: Lista de Tarefas Simples (To-Do List)

**Objetivo:** Criar uma aplicação básica de lista de tarefas que permita adicionar, listar e remover tarefas, seguindo a estrutura MVC.

## 🧱 Estrutura de Pastas

```plaintext
/mvc-tarefas/
├── model/
│   └── Tarefa.php
├── view/
│   ├── listar.php
│   └── adicionar.php
├── controller/
│   └── TarefaController.php
├── index.php
├── .gitignore
```

<details>
<summary>📚 O que é o padrão MVC?</summary>

## MVC — Model, View, Controller

O padrão **MVC** organiza o código de uma aplicação separando responsabilidades em três partes principais:

| Parte        | Responsabilidade                                 |
|--------------|-------------------------------------------------|
| **Model**    | Gerencia os dados e as regras de negócio         |
| **View**     | Exibe a interface para o usuário                 |
| **Controller** | Faz a ponte entre o usuário, o Model e a View   |

---

### Como funciona o fluxo MVC?

1. O usuário faz uma ação (ex: envia um formulário).
2. O **Controller** recebe a ação e decide o que fazer.
3. O **Model** processa os dados e regras de negócio.
4. O **View** mostra o resultado ao usuário.

---

### Analogia: Restaurante

| MVC         | Restaurante                                  |
|-------------|----------------------------------------------|
| Controller  | Garçom: recebe o pedido e entrega o prato    |
| Model       | Cozinha: prepara o prato                     |
| View        | Prato: entregue ao cliente                   |

---

### Vantagens e Desvantagens

| ✅ Vantagens                        | ❌ Desvantagens                              |
|-------------------------------------|----------------------------------------------|
| Separação de responsabilidades      | Mais arquivos e organização                  |
| Código mais limpo e fácil de manter | Pode ser exagero para sistemas muito simples |
| Facilita testes e evolução          | Requer disciplina na estrutura               |

---

### Quando usar MVC?

- Projetos médios e grandes: recomendado.
- Trabalhos em equipe: essencial para organização.
- Projetos pequenos: pode ajudar, mas avalie a complexidade.

---

### Dica

Mesmo em projetos pequenos, começar com uma estrutura simples de MVC pode facilitar futuras melhorias sem precisar reescrever tudo.

</details>
