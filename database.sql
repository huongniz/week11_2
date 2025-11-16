CREATE DATABASE users_system;


USE users_system;
CREATE TABLE users (
    user_id INT PRIMARY KEY,
    username VARCHAR(100),
    role_id INT
);

CREATE TABLE roles (
    role_id INT PRIMARY KEY,
    role_name VARCHAR(50)
);

CREATE TABLE permissions (
    permission_id INT PRIMARY KEY,
    permission_name VARCHAR(100)
);

CREATE TABLE role_permissions (
    role_id INT,
    permission_id INT
);

INSERT INTO roles VALUES (1, 'admin'), (2, 'user'), (3, 'guest');

INSERT INTO permissions VALUES
(1, 'view_user'),
(2, 'create_user'),
(3, 'edit_user'),
(4, 'delete_user'),
(5, 'edit_own_profile');

INSERT INTO users VALUES (1, 'huong', 1), (2, 'ly', 2), (3, 'guest', 3);

INSERT INTO role_permissions VALUES
(1,1),(1,2),(1,3),(1,4),   -- admin
(2,1),(2,5),               -- user
(3,1);                     -- guest