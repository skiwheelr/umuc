create table Customer (
    Namee varchar2(32) NOT NULL UNIQUE,
    Address varchar2(32),
    Telephone varchar2(32),
    AssociatedRentals varchar2(32),
    CustomerID varchar2(4000) constraint customer_pk primary key
);

create table Rental (
    InDate date,
    OutDate date constraint Rental_pk primary key
);

Drop table Rental;

create table Rental (
    InDate date,
    OutDate date,
    RentalID number constraint rental_pk primary key,
    DamageAmount number,
    Rewound varchar2(4000),
    ItemID number,
    AssociatedTaxes number,
    CustomerID varchar2(4000) NOT NULL UNIQUE CONSTRAINT Rental_Customer_fk references Customer (CustomerID) ON DELETE CASCADE

);

create table Charge (
    BillingID number constraint charge_pk primary key,
    LateFee varchar2(32),
    RewindFee varchar2(32),
    RentalID number NOT NULL UNIQUE CONSTRAINT Charge_Rental_fk references Rental(RentalID),
    CustomerID varchar2(32)
);


create table Movie (
    ItemID number constraint movie_pk primary key,
    type1 varchar2(4000),
    MP_sn varchar2(4000),
    MFG_SN number,
    Length1 varchar2(4000),
    Genre varchar2(4000),
    Actors varchar2(4000),
    Rating varchar2(4000),
    Year1 number,
    Director varchar2(4000),
    Awards varchar2(4000),
    RentalID number CONSTRAINT Movie_Charge_fk references Charge (RentalID),
    DistributorSN number,
    MfgId number,
    Title varchar2(4000) UNIQUE
    );

create table OrderBatch (
    Volume varchar2(4000),
    Price number,
    Manufacturer varchar2(4000),
    MovieTitle varchar2(4000) Constraint orderbatch_movie_fk references Movie (Title),
    Typee varchar2(4000),
    Distributor varchar2(4000),
    BatchNumber number,
    DistributorSN varchar2(4000) constraint orderbatch_pk primary key
);

create table Distributor (
    Distributor varchar2(4000) constraint distributor_pk primary key,
    GenreSpecialty varchar2(4000),
    RelatedBatches varchar2(4000),
    DistributorSN varchar2(4000)
);

ALTER TABLE Charge ADD CONSTRAINT isID_Chk CHECK (RentalID IN ('0'));

ALTER TABLE Charge DROP CONSTRAINT isID_Chk;


Insert INTO Customer (Namee,Address,Telephone,AssociatedRentals,CustomerID)
VALUES ('John','2323Albatross','2773837489','otr','2939930');
Insert INTO Customer (Namee,Address,Telephone,AssociatedRentals,CustomerID)
VALUES('Steph','14Carroll','2434444554','gud','4343324');
Insert INTO Customer (Namee,Address,Telephone,AssociatedRentals,CustomerID)
VALUES('Greg','23Promethian','2482094820','ndi','9284908');
Insert INTO Customer (Namee,Address,Telephone,AssociatedRentals,CustomerID)
VALUES ('Wayne','33Brotin','8209483324','dji','248209');
Insert INTO Customer (Namee,Address,Telephone,AssociatedRentals,CustomerID)
VALUES('Carl','2543Goyle','20339','ski','2408234098');
Insert INTO Customer(Namee,Address,Telephone,AssociatedRentals,CustomerID)
VALUES('Major','6Caldwell','34443','kdo','239820');

Insert INTO Rental (InDate, OutDate, RentalID,ItemID,CustomerID)
Values ((TO_DATE('2019/02/01', 'yyyy/mm/dd')),(TO_DATE('2019/02/03', 'yyyy/mm/dd')),2002,100,'2939930');
Insert INTO Rental (InDate, OutDate, RentalID,ItemID,CustomerID)
Values ((TO_DATE('2019/02/05', 'yyyy/mm/dd')),(TO_DATE('2019/02/07', 'yyyy/mm/dd')),2004,104,'2408234098');
Insert INTO Rental (InDate, OutDate, RentalID,ItemID,CustomerID)
Values ((TO_DATE('2019/02/06', 'yyyy/mm/dd')),(TO_DATE('2019/02/08', 'yyyy/mm/dd')),2007,108,'248209');
Insert INTO Rental (InDate, OutDate, RentalID,ItemID,CustomerID)
Values ((TO_DATE('2019/02/04', 'yyyy/mm/dd')),(TO_DATE('2019/02/12', 'yyyy/mm/dd')),2005,101,'4343324');
Insert INTO Rental (InDate, OutDate, RentalID,ItemID,CustomerID)
Values ((TO_DATE('2019/02/14', 'yyyy/mm/dd')),(TO_DATE('2019/02/19', 'yyyy/mm/dd')),2009,109,'9284908');

INSERT INTO Charge (BillingID,RentalID,CustomerID)
VALUES (23894,2002,'2939930');
INSERT INTO Charge (BillingID,RentalID,CustomerID)
VALUES (12244,2004,'2408234098');
INSERT INTO Charge (BillingID,RentalID,CustomerID)
VALUES (84594,2007,'248209');
INSERT INTO Charge (BillingID,RentalID,CustomerID)
VALUES (69894,2005,'4343324');
INSERT INTO Charge (BillingID,RentalID,CustomerID)
VALUES (71894,2009,'9284908');

INSERT INTO MOVIE (RentalID,ItemID,Title)
VALUES (2002,100,'LeSabre');
INSERT INTO MOVIE (RentalID,ItemID,Title)
VALUES (2004,104,'Godfather');
INSERT INTO MOVIE (RentalID,ItemID,Title)
VALUES (2007,108,'BreakingBadSeason5');
INSERT INTO MOVIE (RentalID,ItemID,Title)
VALUES (2005,101,'Slacker');
INSERT INTO MOVIE (RentalID,ItemID,Title)
VALUES (2009,109,'WolfofWallSt');

Insert INTO OrderBatch (MovieTitle, Distributor,DistributorSN,BatchNumber)
Values ('LeSabre','Quickie','23',10);
Insert INTO OrderBatch (MovieTitle, Distributor,DistributorSN,BatchNumber)
Values ('WolfofWallSt','Quickie','63',30);
Insert INTO OrderBatch (MovieTitle, Distributor,DistributorSN,BatchNumber)
Values ('Godfather','BigShot','48',20);
Insert INTO OrderBatch (MovieTitle, Distributor,DistributorSN,BatchNumber)
Values ('BreakingBadSeason5','BigShot','28',60);
Insert INTO OrderBatch (MovieTitle, Distributor,DistributorSN,BatchNumber)
Values ('Slacker','Quickie','93',90);

INSERT INTO Distributor (Distributor,DistributorSN)
VALUES ('Quickie','29');
INSERT INTO Distributor (Distributor,DistributorSN)
VALUES ('BigShot','48');
INSERT INTO Distributor (Distributor,DistributorSN)
VALUES ('Alexa','27');
INSERT INTO Distributor (Distributor,DistributorSN)
VALUES ('BlockBuster','26');
INSERT INTO Distributor (Distributor,DistributorSN)
VALUES ('Hollywood','25');

SELECT Namee,CustomerID,Address FROM Customer ORDER BY CustomerID;
SELECT ItemID from Rental WHERE OutDate >=  (TO_DATE('2019/01/24', 'yyyy/mm/dd')) ORDER BY OutDate;
SELECT * FROM Distributor ORDER BY Distributor;
UPDATE Customer SET Namee = 'Joan' WHERE CustomerID = '2939930';

DELETE FROM Customer WHERE CustomerID = '239820';

/* SQL*PLUS Doesn't work and I have had issues with the
docker container on my mac and will need more time to connect to NOVA.
I did copy everything that WOULD be in the SPOOL File and included the
Following two sets of commands, either of which would
create a spool file if run locally and not on Oracle live.

https://hub.docker.com/r/guywithnose/sqlplus/
https://sqlmaria.com/2017/04/27/oracle-database-12c-now-available-on-docker/
I can make my own db with docker but it is very
 hard because Oracle requires manual license agreement.

SQL> spool /tmp/myfile.lst
spool markWagner.sql

sql> spool <~/name.txt>
select * from tab;
spool off;


Drop Table Customer;
Drop Table Rental;
Drop table Charge;
Drop Table Movie;
Drop table OrderBatch;
Drop table Distributor;

*/
