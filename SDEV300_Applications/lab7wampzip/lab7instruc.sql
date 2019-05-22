create database wamp;
GRANT ALL PRIVILEGES ON *.* TO wamp_owner@localhost IDENTIFIED BY PASSWORD
'*D7168872D493E342B59B692FF863431330897967';

use wamp;

CREATE TABLE users (
username varchar(30) primary key,
hashpassword varchar(30)
);

GRANT SELECT ON wamp.users TO wamp_user@localhost IDENTIFIED BY PASSWORD
'*E090926B474658359CB983C65B768047DF3A55BE';

insert into users values (‘testUser’,’hashpass’);


GRANT Insert,Delete,Update ON wamp.users TO wamp_user@localhost IDENTIFIED BY
PASSWORD '*E090926B474658359CB983C65B768047DF3A55BE';
