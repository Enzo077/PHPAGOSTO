<?php

CREATE TABLE produtos (
    id_produto INT PRIMARY KEY,
    nome VARCHAR(255),
    preco DECIMAL(10, 2)
);

INSERT INTO produtos (id_produto, nome, preco)
VALUES
    (1, 'Produto A', 25.99),
    (2, 'Produto B', 45.50),
    (3, 'Produto C', 12.75),
    (4, 'Produto D', 60.00),
    (5, 'Produto E', 30.25);

    SELECT * FROM produtos
    WHERE preco <= 50;

    ?>