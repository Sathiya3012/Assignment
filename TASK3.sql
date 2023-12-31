CREATE DATABASE EMPLOYEE;

USE EMPLOYEE;

CREATE TABLE EMP(
ID INT PRIMARY KEY,
NAME VARCHAR(50) NOT NULL,
MANAGER_ID INT,
FOREIGN KEY (MANAGER_ID) REFERENCES EMP(ID)
);

INSERT INTO EMP (ID,NAME,MANAGER_ID) VALUES
(1001,'SATHIYA',NULL),
(1002,'SARA',1001),
(1003,'RAMYA',1001),
(1004,'VINO',1002),
(1005,'ZARA',1002);

SELECT * FROM EMP;

SELECT M.NAME AS MANAGER_NAME,COUNT(E.ID) AS TOTAL_EMPLOYEE
FROM EMP M
LEFT JOIN EMP E
ON M.ID=E.MANAGER_ID
GROUP BY M.NAME;



