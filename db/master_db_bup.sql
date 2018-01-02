-- Tabel Groups
CREATE TABLE groups (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    description varchar(100)
);

-- Tabel Users
CREATE TABLE users (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(50),
    last_name varchar(50),
    ip_address varchar(15),
    username varchar(100) NOT NULL UNIQUE,
    password varchar(255),
    salt varchar(255),
    email varchar(100) NOT NULL UNIQUE,
    activation_code varchar(40),
    forgotten_password_code varchar(40),
    forgotten_password_time int,
    remember_code varchar(40),
    created_on date,
    last_login date,
    active tinyint(1),
    company varchar(100),
    phone varchar(20)
);

-- Tabel User Group
CREATE TABLE users_groups (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id int(11) NOT NULL,
    group_id int(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (group_id) REFERENCES groups(id)
);

-- Tabel roles category
CREATE TABLE roles_category (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category varchar(50) NOT NULL
);

-- Tabel roles
CREATE TABLE roles (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_id int NOT NULL,
    name varchar(50),
    url varchar(100),
    'desc' varchar(100),
    FOREIGN KEY (category_id) REFERENCES roles_category(id)
);

-- Tabel permissions
CREATE TABLE permissions (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    group_id int NOT NULL,
    role_id int NOT NULL,
    rule char(4) NOT NULL DEFAULT '0000',
    FOREIGN KEY (group_id) REFERENCES groups(id),
    FOREIGN KEY (role_id) REFERENCES roles(id)
);


