CREATE DATABASE IF NOT EXISTS chat;

CREATE TABLE IF NOT EXISTS chat.user (
    id INT AUTO_INCREMENT,
    user VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_connect TINYINT NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
)  ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS chat.chat (
    id INT AUTO_INCREMENT,
    created_on TIMESTAMP NOT NULL DEFAULT NOW(),
    receveur INT NOT NULL,
    message VARCHAR(500) NOT NULL,
    envoyeur INT NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

ALTER TABLE chat.chat ADD FOREIGN KEY (receveur) references chat.user(id);
ALTER TABLE chat.chat ADD FOREIGN KEY (envoyeur) references chat.user(id);
