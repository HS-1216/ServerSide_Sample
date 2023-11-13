CREATE TABLE SCORES (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    subject VARCHAR(255),
    score INT
);

INSERT INTO scores (name, subject, score) VALUES ('山田花子', '数学', 50);
