-- Declare database name

CREATE DATABASE IF NOT EXISTS tp8_mvc25;
USE tp8_mvc25;

-- Tables below

CREATE TABLE lecturers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128) NOT NULL,
    nidn VARCHAR(16) NOT NULL UNIQUE,
    phone VARCHAR(32) NOT NULL,
    join_date DATE NOT NULL
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128) NOT NULL,
    nim VARCHAR(16) NOT NULL UNIQUE,
    phone VARCHAR(32) NOT NULL,
    join_date DATE NOT NULL,
    lecturer_id INT NOT NULL,
    FOREIGN KEY (lecturer_id) REFERENCES lecturers(id)
);

CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(128) NOT NULL,
    description MEDIUMTEXT,
    doi VARCHAR(255) NOT NULL UNIQUE,
    creator_id INT NOT NULL,
    lecturer_id INT NOT NULL,
    creation_date DATE NOT NULL,
    FOREIGN KEY (creator_id) REFERENCES students(id),
    FOREIGN KEY (lecturer_id) REFERENCES lecturers(id)
);

-- Dummy data below

INSERT INTO lecturers (name, nidn, phone, join_date) VALUES
('Dr. Andi Saputra',      '00123456', '081212345678', '2016-02-10'),
('Dr. Maria Santoso',     '00987654', '081298765432', '2015-03-22'),
('Prof. Budi Hartono',    '00111222', '081311122233', '2017-07-15'),
('Dr. Rina Wijaya',       '00098765', '081309876543', '2019-01-05'),
('Prof. Setiawan Putra',  '00012345', '081201234567', '2013-11-30');

-- NIM rule: first 2 digits = last 2 digits of the year from join_date
-- Example: join_date 2022-08-20 -> NIM starts with "22"

INSERT INTO students (name, nim, phone, join_date, lecturer_id) VALUES
('Andrew Pratama',     '21123456', '082112345678', '2021-08-20', 1),
('Cindy Lestari',      '22198765', '082198765432', '2022-02-14', 2),
('Rama Kusuma',        '20111222', '082111122233', '2020-09-05', 3),
('Siti Rahmawati',     '18123498', '082312349876', '2018-07-11', 4),
('Jonathan Halim',     '19100988', '082210098877', '2019-01-27', 5);

INSERT INTO articles (title, description, doi, creator_id, lecturer_id, creation_date) VALUES
('AI in Education', 'Exploration of AI usage in Indonesian universities.',
 '10.1234/edu.ai.001', 1, 1, '2023-05-10'),

('Data Mining Trends', 'Study on new methods in data mining.',
 '10.5678/datamine.202', 2, 2, '2024-01-15'),

('Cloud Computing Security', 'Survey on Indonesian cloud adoption.',
 '10.7890/cloud.sec.303', 3, 3, '2022-11-02'),

('Robotics in Agriculture', 'Application of robotics to modern farming.',
 '10.2468/robot.agri.404', 4, 4, '2021-09-22'),

('Distributed Systems Overview', 'Overview of distributed architectures.',
 '10.1357/dist.sys.505', 5, 5, '2020-03-30');