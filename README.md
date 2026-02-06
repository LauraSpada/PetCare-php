# PetCare

- Objetivo:

Projeto final da matéria de Desenvolvimento Web e Banco de Dados, o qual a proposta era desenvolver um software com o código modularizado em php, desenvolvido em cima do modelo de entidades do banco de dados.

O projeto recebeu o nome de PetCare, destinado a ser um sistema interno para clínicas veterinárias, consiste tornar o processo de cadastro e agendamento mais fáceis e organizados para os próprios clientes, animais, consultas e para os próprios veterinários.
- Tecnologias Utilizadas:

| PHP -> é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web

| MySQL -> sistema de gerenciamento de banco de dados relacional (RDBMS) open-source, usado para armazenar, organizar e gerenciar grandes volumes de dados de forma estruturada (em tabelas), permitindo que aplicações (como sites e sistemas) consultem, manipulem e recuperem essas informações usando a linguagem SQL

- ### Modelo Lógico
<img width="480" height="220" alt="Image" src="https://github.com/user-attachments/assets/6947e76a-6561-4986-a92f-0e3c9c2989c1" />

- ### Insert para o Banco de Dados

```
CREATE TABLE vet (
    CRMV VARCHAR(20) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    admissionDate DATE,
    salary FLOAT
) ENGINE=InnoDB;

CREATE TABLE client (
    CPF VARCHAR(20) NOT NULL,
    name VARCHAR(100) NOT NULL,
    phone INT,
    PRIMARY KEY (CPF)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE animal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    breed VARCHAR(30) NOT NULL,
    birthDate DATE NOT NULL,
    CPF VARCHAR(20) NOT NULL,

    CONSTRAINT fk_animal_client
        FOREIGN KEY (CPF)
        REFERENCES client(CPF)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE consultations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    CRMV VARCHAR(20) NOT NULL,
    animalId INT NOT NULL,
    hour TIME NOT NULL,
    date DATE NOT NULL,
    reason VARCHAR(255),

    CONSTRAINT fk_consultations_vet
        FOREIGN KEY (CRMV)
        REFERENCES vet(CRMV)
        ON DELETE CASCADE
        ON UPDATE CASCADE,

    CONSTRAINT fk_consultations_animal
        FOREIGN KEY (animalId)
        REFERENCES animal(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

- ### Estrutura do Projeto
```
petcare-php/
|-actions/   -> ações CRUD
|    |-insert
|    |-select
|    |-update
|    |-delete
|-forms/   -> formulários para as entidades
|    |-animalFormInsert
|    |-animalFormUpdate
|    |-clientFormInsert
|    |-clienteFormUpdate
|    |-consultationFormInsert
|    |-consultationFormUpdate
|    |-vetFormInsert
|    |-vetFormUpdate
|-connection     -> arquivo de conexão
|-index
|-menuChoiceRegister   -> menu para select
|-menuChoiceSearch     -> menu para insert
|-test                 -> testar a conexão
```

- ### Rodar o Projeto:
1) php instalado
2) ligar o xampp e adminstrar
3) local do projeto -> c:/xampp/htdocs/petcare-php
4) acessar ->  http://localhost/petcare-php/index.html
