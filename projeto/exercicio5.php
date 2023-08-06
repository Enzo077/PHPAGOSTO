<?php

CREATE TABLE produtos (
    id_produto INT PRIMARY KEY,
    nome VARCHAR(255),
    quantidade_estoque INT
);

INSERT INTO produtos (id_produto, nome, quantidade_estoque)
VALUES
    (1, 'Produto A', 100),
    (2, 'Produto B', 75),
    (3, 'Produto C', 50),
    (4, 'Produto D', 200),
    (5, 'Produto E', 30);

    UPDATE produtos
SET quantidade_estoque = 50
WHERE id_produto = 1;

?>