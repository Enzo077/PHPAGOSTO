<?php

CREATE TABLE funcionarios (
    id_funcionario INT PRIMARY KEY,
    nome VARCHAR(255),
    cargo VARCHAR(255)
);

INSERT INTO funcionarios (id_funcionario, nome, cargo)
VALUES
    (1, 'João', 'Gerente'),
    (2, 'Maria', 'Analista'),
    (3, 'Pedro', 'Gerente'),
    (4, 'Ana', 'Assistente'),
    (5, 'Carlos', 'Gerente');

    SELECT * FROM funcionarios
WHERE cargo = 'Gerente';

?>