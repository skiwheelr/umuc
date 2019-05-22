--ADD CONNECT STATEMENTS

--TABLE CREATION STATEMENTS
Create TABLE customer ( 
    customerid integer NOT NULL,
    name varchar2(30),
    birthyear integer,
    phone integer,
    zipcode integer,
    constraint customerid_pk PRIMARY KEY (customerid));
    
    --Insert customer data (10)
    insert into customer values (201,'Greg',1994,83927349,39484);
    insert into customer values (202,'Steven',1984,92384390,83849);
    insert into customer values (203,'Peter',1940,934829043,34839);
    insert into customer values (204,'Mike',1982,394804980,32839);
    insert into customer values (205,'David',1995,348934829,26478);
    insert into customer values (206,'Marvin',2000,487932894,21783);
    insert into customer values (207,'Clarke',1998,374398478,47783);
    insert into customer values (208,'Gavin',1975,298493844,82938);
    insert into customer values (209,'Griffin',1964,74893248,28739);
    insert into customer values (210,'Desmond',1987,84739498,22991);
    
    
create table product (
    serialnumber integer,
    description varchar2(255),
    price integer,
    stock integer,
    constraint serialnumber_pk PRIMARY KEY (serialnumber) );
    
    --Insert product data (5)
    insert into product values (230904,'A nice and proper drain 
unclogger',40,10);
    insert into product values (203940,'A sophisticated towel rack for a 
modern home',55,100);
    insert into product values (340043,'A pet pillow for your dog or 
cat',95,2);
    insert into product values (430434,'A car wiper tool',25,50);
    insert into product values (449080,'A very expensive laptop 
computer',1000,5);
    
    
create table orderr (
    orderid integer,
    orderedon integer,
    typee integer,
    shippingid integer,
    customerid integer,
    constraint orderid_pk primary key (orderid) );
    
    --Insert orders (3)
    insert into orderr values (301,030419,230904,401,201);
    insert into orderr values (306,021519,340043,406,206);
    insert into orderr values (308,012319,449080,408,208);
    

create table shipment (
    shipmentid integer,
    shipstate varchar2(2),
    country varchar2(32),
    carrier varchar2(10),
    quantity integer,
    constraint shipmentid_pk primary key (shipmentid) );
    
    --Insert into shipment (3)
    insert into shipment values (401,'NJ','USA','FedEx',3);
    insert into shipment values (406,'TX','USA','UPS',1);
    insert into shipment values (408,'DE','Europe','DHL',1);

create table orderproduct (
    orderid integer,
    serialnumber integer);
    
    --constraint orderpid_pk primary key (orderid) );
    
    --Insert into orderproduct (3)
    insert into orderproduct values (301,230904);
    insert into orderproduct values (306,340043);
    insert into orderproduct values (308,449080);

--JOIN VIEW STATEMENT

    --create view orderpros as select * from customer where customerid = 
orderr.customerid;
    select * from customer inner join orderr on customer.customerid = 
orderr.customerid;
    
--QUERY STATEMENTS (6)

    select * from customer where customerid > 204;
    select * from product where price >30;
    select * from customer where birthyear > 1980;
    select * from orderproduct where serialnumber = 449080;
    select * from shipment where shipstate != 'PA';
    select * from customer where name = 'Greg';
    Select * from product where price < 30;
    
    
-- DESCRIBE STATEMENTS   
describe shipment;
describe orderr;
describe customer;
describe product;
describe orderproduct;

--CLEAN UP STATEMENTS
drop table orderproduct;
drop table shipment;
drop table orderr;
drop table product;
Drop Table customer;

