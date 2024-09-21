--  - Gerar um script SQL que a partir do ID do cliente, retorne todos os representantes que podem atendê-lo
SELECT
    a.id,
    a.nickname
FROM
    laravel.sellers a
JOIN
    laravel.seller_cities c
        ON a.id = c.seller_id
JOIN
    laravel.clients b
        ON c.city_id = b.city_id
WHERE
    b.id = 1;

-- b.id = 1; aqui seleciona qual o id do cliente que você quer


-- - Gerar um script SQL que retorne todos os representantes de uma determinada cidade.

SELECT
    a.id,
    a.nickname
FROM
    laravel.sellers a
JOIN
    laravel.seller_cities c
    ON a.id = c.seller_id
WHERE
    c.city_id = 5;

-- c.city_id = 5; aqui passa o id da cidade que quer ver os vendedores
