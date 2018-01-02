-- Tabel Users
CREATE TABLE tb_master_users (
    tmu_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tmu_name varchar(50),
    username varchar(100) NOT NULL UNIQUE,
    password varchar(255),
    email varchar(100) NOT NULL UNIQUE,
	last_login date,
    active tinyint(1),
    phone varchar(20),
	created_date date,
	updated_date date,
	created_by int,
	updated_by int
);