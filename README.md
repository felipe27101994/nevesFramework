# Neves Framework

Framework MVC desenvolvido em PHP puro para estudo e construção de uma base reutilizável de sistemas.

---

## 📖 Sobre o projeto

O Neves Framework tem como objetivo entender como frameworks modernos funcionam internamente, construindo cada parte manualmente, sem uso de frameworks prontos.

A ideia é evoluir uma base sólida de arquitetura, aplicando conceitos reais de frameworks como Laravel e Symfony, mas com uma implementação própria e simplificada.

Atualmente o projeto já possui um fluxo MVC funcional básico, com Controller abstrato, sistema de renderização de Views e primeira página renderizada.

---

## 🎯 Objetivos

- Aprender arquitetura MVC na prática
- Evoluir conhecimentos em PHP Orientado a Objetos
- Criar uma base reutilizável para futuros sistemas
- Aplicar boas práticas de desenvolvimento
- Construir componentes próprios (Router, Controller, View)
- Entender na prática a separação de responsabilidades no backend
- Evoluir progressivamente para uma arquitetura de framework completa

---

## 📁 Estrutura do projeto

📦 NevesFramework  
├── 📁 App  
│   ├── 📁 Controllers  
│   │   └── HomeController.php  
│   ├── 📁 Core  
│   │   ├── Controller.php  
│   │   ├── Router.php  
│   │   ├── View.php  
│   │   └── Database.php  
│   ├── 📁 Models  
│   └── 📁 Views  
│       └── home  
│           └── indexView.php  
│  
├── 📁 Public  
│   ├── index.php  
│   └── .htaccess  
│  
├── 📁 vendor  
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

```
CONTROLLER_DEFAULT="home"
NAMESPACE_CONTROLLER="App\\Controllers\\"
METHOD_DEFAULT="index"

DB_HOST="localhost"
DB_NAME="neves_framework"
DB_USER="root"
DB_PASS=""

```

---

## 🚀 Arquitetura atual (MVC funcional)

Atualmente o framework já possui:

- Controller abstrato como base obrigatória (index)
- Sistema centralizado de renderização de Views
- Controllers separados da base do framework
- Router com resolução dinâmica de URLs
- Execução automática de métodos via rota
- Suporte a parâmetros via URL
- Primeira View renderizada com sucesso
- Conexão com banco de dados via PDO (Database Layer)
- Fluxo MVC completo básico funcional (Controller → View → DB)

---

## 🧠 Conceitos aplicados

- MVC (Model View Controller)
- Programação Orientada a Objetos
- Separação de responsabilidades
- Estrutura de frameworks modernos
- PSR-4 autoload
- Organização de camadas (Core vs App)

---

## 🚀 Tecnologias

- PHP 8+
- Composer
- MVC
- PSR-4
- Apache (.htaccess)
- Dotenv (vlucas/phpdotenv)
- PDO (MySQL)
- Git

---

## 🛣️ Roadmap

### Sprint 1 - Fundação (Concluída)

- ✅ Estrutura inicial do projeto (App / Public / Core)
- ✅ Configuração do Composer com PSR-4
- ✅ Configuração de URLs amigáveis via .htaccess
- ✅ Definição do ponto de entrada único (public/index.php)
- ✅ Implementação do Controller base abstrato
- ✅ Sistema inicial de renderização de Views
- ✅ Primeira página renderizada

### Sprint 2 - Sistema de Rotas (Concluída)

- ✅ Criação do Router
- ✅ Parsing de URL dinâmica
- ✅ Resolução automática de Controllers
- ✅ Execução dinâmica de métodos
- ✅ Suporte a parâmetros via URL
- ✅ Integração com .env

### Sprint 3 - Database Layer (Concluída)

- ✅ Criação da classe Database (PDO)
- ✅ Conexão centralizada com MySQL
- ✅ Integração com variáveis de ambiente
- ✅ Estrutura base para Models

---

## 📈 Evolução do Framework

0.1.0 → Estrutura inicial do projeto
0.2.0 → Sistema de rotas
0.3.0 → MVC funcional inicial
0.4.0 → Camada de banco de dados (PDO)

---

## 👨‍💻 Autor

FSN - Felipe Santos das Neves  
Email: felipe27101994@gmail.com  
WhatsApp: (11) 9 7893 - 5365