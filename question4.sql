CREATE DATABASE evaluation; 
use evaluation; 
  
CREATE TABLE APPX_employee (
    id int primary key not null ,
    firstname varchar (50),
    lastname Varchar (50),
    department_id int,
    salary int,
    educationlevel_id int
);
ALTER TABLE tbl AUTO_INCREMENT;

CREATE TABLE APPX_department (
    id int  primary key not null,
    department_name varchar (50),
    department_city Varchar (50)
);

CREATE TABLE APPX_educationlevel (
    id int  primary key not null,
    description varchar (50)
);

INSERT INTO APPX_employee(firstname, lastname, department_id, salary, educationlevel_id) VALUES ('firstname 1','lastname 1','1','50000','3');
INSERT INTO APPX_department(department_name, department_city) VALUES ('department 1', 'deparment city 1');
INSERT INTO APPX_educationlevel(id, description) VALUES ('1','description 1')

-- SELECT * from 