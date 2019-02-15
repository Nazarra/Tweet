use 'tweeter'
CREATE TABLE 'users' (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) unique not null,
username VARCHAR(255) NOT NULL,
hash_pass VARCHAR(60) NOT NULL
);
