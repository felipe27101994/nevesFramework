# Neves Framework

Framework MVC desenvolvido em PHP puro para estudo e construção de uma base reutilizável de sistemas.

---

## 📖 Sobre o projeto

O Neves Framework tem como objetivo entender como frameworks modernos funcionam internamente, construindo cada parte manualmente, sem uso de frameworks prontos.

---

## 🎯 Objetivos

- Aprender arquitetura MVC na prática
- Evoluir conhecimentos em PHP Orientado a Objetos
- Criar uma base reutilizável para futuros sistemas
- Aplicar boas práticas de desenvolvimento
- Construir componentes próprios (Router, Controller, etc)

---

## 📁 Estrutura do projeto

```
App/
├── Controllers/
├── Core/
├── Models/
└── Views/

Public/
├── index.php
└── .htaccess
```

---

## ⚙️ Setup do projeto

Este projeto utiliza **Composer** para autoload seguindo o padrão **PSR-4**.

### Instalação das dependências

```bash
composer install

---

## 🚀 Tecnologias

- PHP 8+
- Composer
- MVC
- PSR-4
- Git

---

## 🛣️ Roadmap

### Sprint 1 - Fundação

Nesta etapa foi estruturada a base do framework, preparando o ambiente para desenvolvimento.

- [x] Estrutura inicial do projeto (App / Public / Core)
- [x] Configuração do Composer com PSR-4 (autoload de classes)
- [x] Configuração de URLs amigáveis via .htaccess
- [x] Definição do ponto de entrada único (public/index.php)

### Sprint 2 - Sistema de Rotas

Implementação do núcleo de execução do framework.

- [x] Criação do Router
- [x] Parsing de URL dinâmica
- [x] Resolução automática de Controllers
- [x] Execução de métodos dinamicamente
- [x] Suporte a parâmetros via URL
- [x] Integração com variáveis de ambiente (.env)

---

## 📈 Evolução do Framework

- 0.1.0 → Infraestrutura base
- 0.2.0 → Sistema de rotas funcional

---

## 👨‍💻 Autor

FSN * Felipe Santos das Neves * felipe27101994@gmail.com * (11) 9 7893 - 5365.