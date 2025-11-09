# 🛍️ LaraStore: Um E-commerce com Laravel

Um projeto de e-commerce (loja virtual) completo, construído do zero com Laravel 12, Blade e Tailwind CSS. Este projeto foi desenvolvido como parte de um estudo prático focado em dominar os fundamentos e o ecossistema moderno do Laravel.

O projeto está sendo construído em fases, começando com uma simulação de dados (sem banco de dados) para focar no Roteamento, Views (Blade) e no sistema de File Storage, evoluindo para um sistema completo com banco de dados e autenticação.

## 📷 Screenshots (Em Desenvolvimento)

*(Aqui é um ótimo lugar para você colocar um print da página de detalhe do produto que fizemos!)*

![Layout da Página de Detalhe do LaraStore](<img width="1114" height="842" alt="image" src="https://github.com/user-attachments/assets/7df96b03-6912-4639-af01-84c13dac1979" />
)

---

## ✨ Funcionalidades Atuais (Fase 1 e 2 - Simulação)

* **Página de Listagem de Produtos (`/produtos`):** Um grid responsivo de produtos estilizado com Tailwind CSS.
* **Página de Detalhe do Produto (`/produto/{id}`):** Uma rota dinâmica que exibe as informações detalhadas de um produto específico.
* **Layout de E-commerce Moderno:** Design limpo inspirado em grandes lojas (como a Nike), focado em imagens e informações claras.
* **Múltiplas Imagens por Produto:** O sistema de dados suporta um array de imagens para cada produto.
* **Simulação de Banco de Dados:** Para focar no front-end e na arquitetura, os dados dos produtos são carregados de uma função central (`routes/web.php`), simulando a resposta de uma API ou Model.
* **Laravel File Storage:** Uso correto do `storage:link` para servir as imagens dos produtos de forma segura e performática.
* **Ambiente de Desenvolvimento Moderno:** Configurado com **Vite** para Hot Module Replacement (HMR) e compilação de assets (CSS/JS).

---

## 🛠️ Tecnologias Utilizadas

Este projeto utiliza algumas das tecnologias mais modernas no ecossistema PHP:

* **[Laravel 12](https://laravel.com):** O framework PHP principal.
* **[PHP 8.4+](https://www.php.net):** A linguagem base.
* **[Blade](https://laravel.com/docs/12.x/blade):** O motor de templates super poderoso do Laravel.
* **[Tailwind CSS](https://tailwindcss.com):** O framework CSS utility-first para estilização.
* **[Vite](https://vitejs.dev):** O compilador de front-end (assets) de alta velocidade.
* **[Git & GitHub](https://github.com):** Para versionamento de código.

---

## 🚀 Como Rodar o Projeto

Para executar este projeto localmente, siga os passos abaixo:

1.  **Clone o repositório:**
    ```bash
    git clone (https://github.com/LucasArts2020/projeto-ecommerce-laravel.git)
    cd SEU-REPOSITORIO
    ```

2.  **Instale as dependências do PHP (Composer):**
    ```bash
    composer install
    ```

3.  **Instale as dependências do Node.js (NPM):**
    ```bash
    npm install
    ```

4.  **Configure o Ambiente:**
    * Copie o arquivo `.env.example` para `.env`.
        ```bash
        cp .env.example .env
        ```
    * Gere a chave da aplicação:
        ```bash
        php artisan key:generate
        ```

5.  **Crie o Link Simbólico de Armazenamento:**
    * *(Este passo é CRUCIAL para as imagens dos produtos aparecerem!)*
    ```bash
    php artisan storage:link
    ```
    * *(Nota: Você precisará adicionar suas próprias imagens de produto na pasta `storage/app/public/produtos`)*

6.  **Execute os servidores (em dois terminais separados):**

    * **Terminal 1 (Vite):** Compila o Tailwind CSS e o JavaScript.
        ```bash
        npm run dev
        ```
    * **Terminal 2 (Laravel):** Executa o servidor principal.
        ```bash
        php artisan serve
        ```

7.  **Acesse a aplicação:**
    Abra seu navegador e visite `http://localhost:8000`.

---

## 🗺️ Próximos Passos (Roadmap)

Este projeto está em evolução. Os próximos passos planejados são:

* [ ] **Fase 2 (Real):** Migrar a simulação de dados para um banco de dados **MySQL** ou **PostgreSQL** real, usando **Migrations** e **Models Eloquent**.
* [ ] **Fase 3:** Implementar a funcionalidade de "Adicionar ao Carrinho" usando a **Sessão** do Laravel.
* [ ] **Fase 4:** Criar o sistema de **Autenticação de Usuários** (Login/Registro) com o **Laravel Breeze**.
* [ ] **Fase 5:** Implementar o Checkout e o sistema de Pedidos.
