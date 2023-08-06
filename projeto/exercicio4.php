<?php

CREATE TABLE pedidos (
    id_pedido INT PRIMARY KEY,
    data DATE,
    valor DECIMAL(10, 2),
    status VARCHAR(255)
);

INSERT INTO pedidos (id_pedido, data, valor, status)
VALUES
    (1, '2023-01-15', 150.00, 'Concluído'),
    (2, '2023-02-10', 75.50, 'Em Processo'),
    (3, '2022-12-28', 200.25, 'Concluído'),
    (4, '2023-05-02', 50.00, 'Concluído'),
    (5, '2023-09-20', 300.00, 'Em Processo');

    SELECT * FROM pedidos
WHERE YEAR(data) = 2023;

?>