

-- Name: Mark Wagner
-- Class Number: SDEV 300-7983
-- Section: Lab 6
-- Date: 4/25/2019

-- SQL Script

--use sdev300;

-- Create Table Faculty

-- Alter Date

ALTER SESSION SET NLS_DATE_FORMAT='YYYY-MM-DD';

CREATE TABLE Faculty (
EMPLID int NOT NULL,
FirstName varchar(30),
LastName varchar(30),
Email varchar(60),
YearOfBirth Integer,
HireDate Date,
PRIMARY KEY (EMPLID)
);



--  Create Table Courses

CREATE TABLE Courses (
CourseID int NOT NULL,
CourseDisc varchar(40),
CourseNum varchar(4),
NumberOfCredits int,
YearOffered int,
CourseTitle varchar(75),
PRIMARY KEY (CourseID)
);



--  Create Table FacultyCourses

CREATE TABLE FacultyCourses (
FacultyCourseID int NOT NULL,
CourseID int,
EMPLID int,
PRIMARY KEY (FacultyCourseID)
);



-- Insert 20 Faculty Records

INSERT into Faculty
VALUES ('1', 'Greg', 'Griffith', '21pantas@gmail.com', '1985', '2017-06-12');

INSERT into Faculty
VALUES ('2', 'Tommy', 'Jones', 'blingodd@yahoo.com', ' 1983', '2017-07-08');

INSERT into Faculty
VALUES ('3', 'Alixis', 'Prinnil', 'yoder99@gmail.com', '1951', '2010-04-17');

INSERT into Faculty
VALUES ('4', 'Craig', 'Newmark', 'yoder8s@gmail.com', '1957', '2009-02-04');

INSERT into Faculty
VALUES ('5', 'Joe', 'Petersen', 'jrpetersen@gmail.com', '1992', '2005-12-03');

INSERT into Faculty
VALUES ('6', 'Dan', 'Migginas', 'byronrice@rush.com', '1973', '2010-07-30');

INSERT into Faculty
VALUES ('7', 'Dede', 'Flemming', 'properca@gmail.com', '1978', '2002-03-04');

INSERT into Faculty
VALUES ('8', 'Paul', 'Allen', 'woodward33@gmail.com', '1974', '2001-02-20');

INSERT into Faculty
VALUES ('9', 'Yobe', 'Nihatzu', '64880broyi@gmail.com', '1988', '1991-09-12');

INSERT into Faculty
VALUES ('10', 'Pert', 'Russel', 'pr232@gmail.com', '1948', '1989-02-03');

INSERT into Faculty
VALUES ('11', 'Mark', 'Griffith', '21pantas@gmail.com', '1993', '2017-06-12');

INSERT into Faculty
VALUES ('12', 'Willard', 'Jones', 'blingodd@yahoo.com', ' 1993', '2017-07-08');

INSERT into Faculty
VALUES ('13', 'Needra', 'Prinnil', 'yoder99@gmail.com', '1958', '2019-04-17');

INSERT into Faculty
VALUES ('14', 'Daya', 'Newmark', 'yoder8s@gmail.com', '1993', '2009-02-04');

INSERT into Faculty
VALUES ('15', 'Bojkr', 'Petersen', 'jrpetersen@gmail.com', '1992', '2005-12-03');

INSERT into Faculty
VALUES ('16', 'Seva', 'Migginas', 'byronrice@rush.com', '1990', '2011-07-30');

INSERT into Faculty
VALUES ('17', 'Ballzes', 'Flemming', 'properca@gmail.com', '1978', '2012-03-04');

INSERT into Faculty
VALUES ('18', 'Chris', 'Allen', 'woodward33@gmail.com', '1971', '2009-02-20');

INSERT into Faculty
VALUES ('19', 'Migao', 'Nihatzu', '64880broyi@gmail.com', '1928', '1981-09-12');

INSERT into Faculty
VALUES ('20', 'Xiohai', 'Russel', 'pr232@gmail.com', '1941', '1988-02-03');

-- Insert 20 Course Records

INSERT into Courses
VALUES ('1', 'SDEV', '300', '3', '1996', 'Building Secure Web Applications');

INSERT into Courses
VALUES ('2', 'CMSC', '495', '3', '1992', 'Puzzles');

INSERT into Courses
VALUES ('3', 'MATH', '301', '3', '1995', 'Calc');

INSERT into Courses
VALUES ('4', 'CMSC', '343', '3', '2001', 'Binary');

INSERT into Courses
VALUES ('5', 'BUSN', '151', '3', '1998', 'Finance');

INSERT into Courses
VALUES ('6', 'SDEV', '360', '3', '2008', 'Servers');

INSERT into Courses
VALUES ('7', 'CMSC', '485', '3', '2013', 'Into to Computer Science');

INSERT into Courses
VALUES ('8', 'MATH', '301', '3', '2017', 'Geometry');

INSERT into Courses
VALUES ('9', 'CMSC', '373', '3', '2007', 'Java');

INSERT into Courses
VALUES ('10', 'BUSN', '191', '3', '2019', 'M&A');

INSERT into Courses
VALUES ('11', 'SDEV', '307', '3', '2010', 'Web Applications II');

INSERT into Courses
VALUES ('12', 'CMSC', '422', '3', '1974', 'C++');

INSERT into Courses
VALUES ('13', 'MATH', '302', '3', '1992', 'Statistics');

INSERT into Courses
VALUES ('14', 'GYMA', '301', '3', '2004', 'Gymnastics Pro');

INSERT into Courses
VALUES ('15', 'MMTT', '111', '3', '2003', 'Money Making Essentials');

INSERT into Courses
VALUES ('16', 'CMIS', '300', '3', '2000', 'MS Dos');

INSERT into Courses
VALUES ('17', 'CMSC', '409', '3', '2012', 'Build A Modem');

INSERT into Courses
VALUES ('18', 'CMIS', '325', '3', '2009', 'Production Teams');

INSERT into Courses
VALUES ('19', 'HLTH', '388', '3', '2004', 'Biologics');

INSERT into Courses
VALUES ('20', 'PRDD', '131', '3', '2003', 'Advanced SAP');

-- Insert 25 FacultyCourses

INSERT into FacultyCourses
VALUES ('1', '15', '1');

INSERT into FacultyCourses
VALUES ('2', '1', '1');

INSERT into FacultyCourses
VALUES ('3', '3', '9');

INSERT into FacultyCourses
VALUES ('4', '14', '2');

INSERT into FacultyCourses
VALUES ('5', '6', '3');

INSERT into FacultyCourses
VALUES ('6', '1', '4');

INSERT into FacultyCourses
VALUES ('7', '6', '5');

INSERT into FacultyCourses
VALUES ('8', '2', '10');

INSERT into FacultyCourses
VALUES ('9', '16', '10');

INSERT into FacultyCourses
VALUES ('10', '8', '16');

INSERT into FacultyCourses
VALUES ('11', '7', '7');

INSERT into FacultyCourses
VALUES ('12', '19', '18');

INSERT into FacultyCourses
VALUES ('13', '12', '19');

INSERT into FacultyCourses
VALUES ('14', '2', '9');

INSERT into FacultyCourses
VALUES ('15', '14', '16');

INSERT into FacultyCourses
VALUES ('16', '3', '3');

INSERT into FacultyCourses
VALUES ('17', '9', '10');

INSERT into FacultyCourses
VALUES ('18', '8', '12');

INSERT into FacultyCourses
VALUES ('19', '14', '17');

INSERT into FacultyCourses
VALUES ('20', '3', '15');

INSERT into FacultyCourses
VALUES ('21', '16', '12');

INSERT into FacultyCourses
VALUES ('22', '4', '3');

INSERT into FacultyCourses
VALUES ('23', '15', '6');

INSERT into FacultyCourses
VALUES ('24', '13', '19');

INSERT into FacultyCourses
VALUES ('25', '10', '1');


-- Update Credits to 6

UPDATE Courses SET NumberOfCredits = 6 WHERE CourseID IS NOT NULL;

-- Update Faculty YearOfBirth

UPDATE Faculty SET YearOfBirth = 1993 WHERE YearOfBirth = 1994;

-- Delete Faculty Starting R/S

DELETE FROM Faculty WHERE LastName LIKE 'R%' OR LastName LIKE 'S%';

-- Delete 2004

DELETE FROM Courses WHERE YearOffered = 2004;

-- Show all records

SELECT * FROM Faculty ORDER BY LastName DESC;

SELECT * FROM Courses ORDER BY CourseTitle ASC;

SELECT * FROM FacultyCourses ORDER BY FacultyCourseID ASC;

-- Faculty < 3 Courses

SELECT FacultyCourses.EMPLID, Faculty.FirstName, COUNT(FacultyCourses.EMPLID) as "courses_taught"
from FacultyCourses, Faculty, Courses
where FacultyCourses.EMPLID=Faculty.EMPLID and FacultyCourses.CourseID=Courses.CourseID
group by FacultyCourses.EMPLID, Faculty.FirstName
order by COUNT(FacultyCourses.EMPLID) DESC;

-- Year of Courses 1999

SELECT * FROM Courses WHERE YearOffered < 1999 ORDER BY CourseTitle ASC;

-- Join 3 Tables

SELECT * from FacultyCourses, Courses, Faculty where FacultyCourses.CourseID = Courses.CourseID and FacultyCourses.EMPLID= Faculty.EMPLID;

DROP TABLE Faculty;
DROP TABLE Courses;
DROP TABLE FacultyCourses;
