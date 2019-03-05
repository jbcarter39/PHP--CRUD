CREATE DATABASE college;

USE college;
CREATE TABLE person
(
  id bigint auto_increment PRIMARY KEY,
  name varchar(50),
  gender char(1),
  dob date
);

INSERT person (name,gender,dob) VALUES('Saad', 'm', '1998-01-10');
INSERT person (name,gender,dob) VALUES('John', 'm', '1999-01-01');
INSERT person (name,gender,dob) VALUES('Allen', 'm', '1998-02-02');
INSERT person (name,gender,dob) VALUES('Alex', 'm', '1999-04-04');
INSERT person (name,gender,dob) VALUES('Quint', 'm', '1998-05-05');
INSERT person (name,gender,dob) VALUES('Garrett', 'm', '1998-06-06');
INSERT person (name,gender,dob) VALUES('Khalid', 'm', '1998-08-08');
INSERT person (name,gender,dob) VALUES('Thomas', 'm', '1998-10-10');
INSERT person (name,gender,dob) VALUES('Clay', 'm', '1998-12-12');
INSERT person (name,gender,dob) VALUES('Jackson', 'm', '1998-02-02');
INSERT person (name,gender,dob) VALUES('Kevin', 'm', '1999-03-03');
INSERT person (name,gender,dob) VALUES('Justin', 'm', '1997-04-04');
INSERT person (name,gender,dob) VALUES('Nasstajjah', 'f', '1998-05-05');
INSERT person (name,gender,dob) VALUES('Breanna', 'f', '1998-06-06');
