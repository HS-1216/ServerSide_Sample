CREATE TABLE SCORES (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    subject VARCHAR(255),
    score INT
);

INSERT INTO scores (name, subject, score) VALUES ('山田花子', '数学', 50);

-- 修正内容
ALTER TABLE SCORES ADD comment VARCHAR(255);
UPDATE SCORES SET comment = '項目を追加しました';
