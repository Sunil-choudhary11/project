CREATE DATABASE sms_project;
USE sms_project;

CREATE TABLE admin (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
email VARCHAR(100),
password VARCHAR(255)
);

CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(15),
course VARCHAR(50),
class VARCHAR(20),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE marks (
id INT AUTO_INCREMENT PRIMARY KEY,
student_id INT,
subject1 INT,
subject2 INT,
subject3 INT,
total INT,
average FLOAT,
percentage FLOAT,
grade VARCHAR(5),
FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
);