CREATE SEQUENCE business;
alter session set current_schema = lab4;


CREATE TABLE bidrates2017 (
typeof varchar(30),
rate integer,
CONSTRAINT bidrates2017_pk PRIMARY KEY (typeof)
);

CREATE TABLE bidrates2018 (
typeof varchar(30),
rate integer,
CONSTRAINT bidrates2018_pk PRIMARY KEY (typeof)
);

CREATE TABLE proposals2017 (
task varchar(30),
proposal integer,
CONSTRAINT proposals2017_pk PRIMARY KEY (task)
);

CREATE TABLE proposals2018 (
task varchar(30),
proposal integer,
CONSTRAINT proposals2018_pk PRIMARY KEY (task)
);




CREATE USER contractor1 IDENTIFIED BY cpass1;
GRANT CONNECT TO contractor1;
GRANT SELECT, ALTER on lab4.business to contractor1;
GRANT SELECT, INSERT, UPDATE, DELETE on proposals2018 to contractor1;
GRANT SELECT, INSERT, UPDATE, DELETE on proposals2017 to contractor1;
GRANT SELECT ON bidrates2017 to contractor1;
GRANT SELECT ON bidrates2018 to contractor1;



CREATE USER employee1 IDENTIFIED BY emp1;
GRANT CONNECT TO employee1;
GRANT SELECT, ALTER on business to employee1;
GRANT SELECT, INSERT, UPDATE, DELETE on bidrates2017 to employee1;
GRANT SELECT, INSERT, UPDATE, DELETE on bidrates2018 to employee1;
GRANT SELECT ON proposals2017 to employee1;
GRANT SELECT ON proposals2018 to employee1;




CREATE USER employee2 IDENTIFIED BY emp2;
GRANT CONNECT, CREATE SESSION TO employee2;
GRANT SELECT, ALTER on lab4.business to employee2;
GRANT SELECT, INSERT, UPDATE, DELETE on bidrates2017 to employee2;
GRANT SELECT, INSERT, UPDATE, DELETE on bidrates2018 to employee2;
GRANT SELECT ON proposals2017 to employee2;
GRANT SELECT ON proposals2018 to employee2;

--AUDIT;
--ALTER SYSTEM SET AUDIT_TRAIL = DB;
--show parameter audit_trail;
--dba_audit_trail;
--select * from v$database;
--select instance_name from v$instance;

--SELECT * FROM bidrates2017;


DROP TABLE bidrates2017;
DROP TABLE bidrates2018;
DROP TABLE proposals2017;
DROP TABLE proposals2018;
DROP USER contractor1;
DROP USER employee1;
DROP USER employee2;
DROP SEQUENCE business;

select dbusername, EVENT_TIMESTAMP,SQL_TEXT from unified_audit_trail;

