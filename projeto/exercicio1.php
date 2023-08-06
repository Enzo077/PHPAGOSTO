<?php

CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY,
    nome VARCHAR(255),
    idade INT
);

INSERT INTO clientes (id_cliente, nome, idade)
VALUES
    (1, 'João', 25),
    (2, 'Maria', 32),
    (3, 'Pedro', 28),
    (4, 'Ana', 40),
    (5, 'Carlos', 22);

    SELECT * FROM clientes
WHERE idade > 30;

?>
