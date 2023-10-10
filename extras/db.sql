USE AMBEV;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE,
    is_admin BOOLEAN NOT NULL DEFAULT false
);

CREATE TABLE respostas_formulario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6),
    nome VARCHAR(255),
    empresa VARCHAR(255),
    ltrabalho TEXT,
    codigo VARCHAR(20),
    anofabric VARCHAR(20),
    dt_compra VARCHAR(20),
    prim_uso VARCHAR(20),
    antecedentes_produto TEXT,
    obs_prev VARCHAR(20),
    ins_part_met VARCHAR(20),
    test_func VARCHAR(20),
    verif_conect VARCHAR(20),
    comentarios TEXT,
    estado_result VARCHAR(20),
    nome_insp VARCHAR(255),
    empresa_insp VARCHAR(255),
    ano_insp VARCHAR(20),
    dt_px_insp VARCHAR(20),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Essa senha criptografada corresponde ao valor "a"
INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (1, 'Guilherme', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'guilherme_lou@hotmail.com', '2000-1-1', null, 1);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (2, 'Antonio', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'a@a.com', '2000-1-1', null, 1);