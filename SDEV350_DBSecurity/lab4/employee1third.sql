alter session set current_schema = lab4;
INSERT INTO bidrates2017 (typeof, rate) VALUES ('la689bor','450');
INSERT INTO bidrates2018 (typeof, rate) VALUES ('technical','1270');
SELECT * FROM proposals2017;
SELECT * FROM bidrates2017;
Drop TABLE bidrates2018;
select username, timestamp, action_name,obj_name from dba_audit_trail;