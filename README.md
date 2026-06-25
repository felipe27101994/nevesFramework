# Neves Framework

Framework MVC desenvolvido em PHP puro para estudo e construção de uma base reutilizável de sistemas.

---

## 📖 Sobre o projeto

O Neves Framework tem como objetivo entender como frameworks modernos funcionam internamente, construindo cada parte manualmente, sem uso de frameworks prontos.

A ideia é evoluir uma base sólida de arquitetura, aplicando conceitos reais de frameworks como Laravel e Symfony.

---

## 🎯 Objetivos

- Aprender arquitetura MVC na prática
- Evoluir conhecimentos em PHP Orientado a Objetos
- Criar uma base reutilizável para futuros sistemas
- Aplicar boas práticas de desenvolvimento
- Construir componentes próprios (Router, Controller, View)
- Entender funcionamento de autoload e organização de projetos modernos

---

## 📁 Estrutura do projeto

Nevesframework/
├── App/
│   ├── Controllers/
│   ├── Core/
│   ├── Models/
│   └── Views/
├── Public/
│   ├── index.php
│   └── .htaccess
├── vendor/
├── .env
├── .env.example
├── .gitignore
├── composer.json
├── composer.lock
└── README.md

---

## ⚙️ Setup do projeto

Este projeto utiliza Composer para autoload seguindo o padrão PSR-4.

### Instalação das dependências

```bash
composer install
```

---

## 🌐 Configuração de ambiente

O projeto utiliza variáveis de ambiente com `.env` através do `vlucas/phpdotenv`.

Exemplo:

```env
CONTROLLER_DEFAULT="home"
NAMESPACE_CONTROLLER="App\\Controllers\\"
METHOD_DEFAULT="index"
```

---

## 🚀 Tecnologias

- PHP 8+
- Composer
- MVC
- PSR-4
- Apache (.htaccess)
- Dotenv (vlucas/phpdotenv)
- Git

---

## 🛣️ Roadmap

### Sprint 1 - Fundação

- Estrutura inicial do projeto (App / Public / Core)
- Configuração do Composer com PSR-4
- Configuração de URLs amigáveis via .htaccess
- Definição do ponto de entrada único (public/index.php)

### Sprint 2 - Sistema de Rotas

- Criação do Router
- Parsing de URL dinâmica
- Resolução automática de Controllers
- Execução dinâmica de métodos
- Suporte a parâmetros via URL
- Integração com .env

---

## 📈 Evolução do Framework

- 0.1.0 → Estrutura inicial
- 0.2.0 → Sistema de rotas

---

## 👨‍💻 Autor

FSN - Felipe Santos das Neves | felipe27101994@gmail.com | (11) 9 7893 - 5365