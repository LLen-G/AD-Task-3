<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/LLen-G">
    <img src="./assets/img/RyanGosling_BR48-1.jpg" alt="Nyebe" width="130" height="100">
  </a>
  <h3 align="center">AD-Task-3</h3>
</div>
<div align="center">
<p>   Set up docker, postgresql, mongodb. Make a sample table.
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=LLen-G/AD-Task-3)

[![wakatime](https://wakatime.com/badge/user/018ee6e3-e62d-4b82-b389-125233d22d65/project/49fcd959-0596-4bfa-8eb8-6becd5b3929a.svg)](https://wakatime.com/badge/user/018ee6e3-e62d-4b82-b389-125233d22d65/project/49fcd959-0596-4bfa-8eb8-6becd5b3929a)
<br />

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

Set up docker, postgresql, mongodb. Make a sample table.

### Technology

<!-- TODO: List of Technology Used -->

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library

![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

#### Databases

![MySQL](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)

#### Deployment

![Vercel](https://img.shields.io/badge/Vercel-000000?style=for-the-badge&logo=vercel&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code | Example |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal | Utility | Accoun.util.php |
   | Camel | Components and Pages | index.php or footer.component.php |
7. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
8. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
9. File Structure to follow below.

```
AD-ProjectName
├─ .vscode
│  └─ settings.json
├─ assets
│  ├─ css
│  │  └─ example.css
│  ├─ img
│  │  └─ RyanGosling_BR48-1.jpg
│  └─ js
│     └─ example.js
├─ components
│  ├─ componentGroup
│  │  └─ example.component.php
│  ├─ templates
│  │  └─ example.component.php
│  └─ loginForm.component.php
├─ database
│  ├─ nameOfModels.model.sql
│  ├─ project_users.model.sql
│  ├─ projects.model.sql
│  └─ users.model.sql
├─ docs
│  ├─ vsCode
│  │  └─ PHP-CI4-AITS.code-profile
│  ├─ Database VS Code Manual.md
│  ├─ Docker Manual.md
│  ├─ Git Commits.md
│  ├─ Initial Checklist.md
│  ├─ Issues.md
│  ├─ PHP Dev Manual.md
│  ├─ PHP File Structure Manual.md
│  ├─ Request.md
│  └─ VS Code Profile Manual.md
├─ errors
│  └─ 404.error.php
├─ handlers
│  ├─ authLogin.handler.php
│  ├─ example.handler.php
│  ├─ mongodbChecker.handler.php
│  └─ postgreChecker.handler.php
├─ layouts
│  └─ main.layout.php
├─ pages
│  └─ ExamplePage
│     └─ assets
│        ├─ css
│        │  └─ example.css
│        ├─ img
│        │  └─ nyebe_white.png
│        ├─ js
│        │  └─ example.js
│        └─ index.php
│     └─ login.page.php
│     └─ logout.page.php
├─ sql
│  ├─ New Table Auto Increment Script.sql
│  └─ Old Table Auto Increment.sql
├─ staticDatas
│  └─ dummies
│     └─ users.staticData.php
├─ utils
│  ├─ auth.util.php
│  ├─ dbMigratePostgresql.util.php
│  ├─ dbResetPostgresql.util.php
│  ├─ dbSeederPostgresql.util.php
│  ├─ envSetter.util.php
│  └─ htmlEscape.util.php
├─ vendor
│  ├─ composer
│  │  ├─ autoload_classmap.php
│  │  ├─ autoload_files.php
│  │  ├─ autoload_namespaces.php
│  │  ├─ autoload_psr4.php
│  │  ├─ autoload_real.php
│  │  ├─ autoload_static.php
│  │  ├─ ClassLoader.php
│  │  ├─ installed.json
│  │  ├─ installed.php
│  │  ├─ InstalledVersions.php
│  │  ├─ LICENSE
│  │  └─ platform_check.php
│  ├─ graham-campbell
│  │  └─ result-type
│  │     ├─ .github
│  │     │  └─ workflows
│  │     │     └─ tests.yml
│  │     ├─ src
│  │     │  ├─ Error.php
│  │     │  ├─ Result.php
│  │     │  └─ Success.php
│  │     ├─ tests
│  │     │  └─ ResultTest.php
│  │     ├─ CHANGELOG.md
│  │     ├─ composer.json
│  │     ├─ LICENSE
│  │     ├─ phpunit.xml.dist
│  │     └─ README.md
│  ├─ phpoption
│  │  └─ phpoption
│  │     ├─ .github
│  │     │  ├─ workflows
│  │     │  │   ├─ static.yml
│  │     │  │   └─ tests.yml
│  │     │  ├─ CODE_OF_CONDUCT.md
│  │     │  ├─ CODE_OF_CONDUCT.md
│  │     │  ├─ CONTRIBUTING.md
│  │     │  ├─FUNDING.yml
│  │     │  └─SECURITY.md
│  │     ├─ src
│  │     │  └─ PhpOption
│  │     │     ├─ LazyOption.php
│  │     │     ├─ None.php
│  │     │     ├─ Option.php
│  │     │     └─ Some.php
│  │     └─ tests
│  │        ├─ PhpOption
│  │        │  └─ Tests
│  │        │      ├─ EnsureTest.php
│  │        │      ├─ LazyOptionTest.php
│  │        │      ├─ NoneTest.php
│  │        │      ├─ OptionText.php
│  │        │      └─ SomeTest.php
│  │        └─ bootstrap.php
│  ├─ symfony
│  │  ├─ polyfill-ctype/
│  │  ├─ polyfill-mbstring/
│  │  ├─ polyfill-php80/
│  ├─ vlucas
│  └─ autoload.php
├─ .dockerignore
├─ .env
├─ .gitignore
├─ compose.yaml
├─ composer
├─ composer.json
├─ composer.lock
├─ Dockerfile
├─ index.php
├─ README.Docker.md
├─ readme.md
├─ router.php
└─ workbook activity 3 updated.md
```
