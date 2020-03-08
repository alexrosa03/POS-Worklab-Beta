CREATE DATABASE Worklab;
USE Worklab;

CREATE TABLE employee
(   
    Employee_ID int auto_increment,
    Employee_Name varchar (100) NOT NULL,
    Address varchar (100) NOT NULL,
    Email varchar (100) NOT NULL,
    Contact_Number varchar (11) NOT NULL,

    CONSTRAINT employee_PK PRIMARY KEY (Employee_ID));

CREATE TABLE rates
(
    Rate_Code char (7) NOT NULL,
    Rate_Name varchar (50) NOT NULL,
    Price decimal (5,2) NOT NULL,
    Rate_Type ENUM('Regular','Student','Promo'),
    Discount int (2),
    Start_Date DATE,
    End_Date DATE,

    CONSTRAINT rate_PK PRIMARY KEY (Rate_Code));

CREATE TABLE manufacturer
(
    Manufacturer_ID varchar (15) NOT NULL,
    Manufacturer_Name varchar (30) NOT NULL,
    Contact_Number int (11) NOT NULL,

    CONSTRAINT manufacturer_PK PRIMARY KEY (Manufacturer_ID));

CREATE TABLE product
(
    ProductType_ID varchar (6) NOT NULL,
    Product_Name varchar (30) NOT NULL,
    Category varchar (11),

    CONSTRAINT productType_PK PRIMARY KEY (ProductType_ID));

CREATE TABLE customer
(
    Customer_ID int auto_increment,
    Customer_Name varchar (100) NOT NULL,
    Purpose varchar (50),
    Rate_Code varchar (7) NOT NULL,
    Discount_Status ENUM('Active','Inactive'),
    Time_In TIME,
    Time_Out TIME,
    Date_Today DATE,

    CONSTRAINT customer_PK PRIMARY KEY (Customer_ID),
    CONSTRAINT customRate_FK FOREIGN KEY (Rate_Code) REFERENCES rates(Rate_Code)
);

CREATE TABLE Inventory
(
    Inventory_ID varchar (4) NOT NULL,
    ProductType_ID varchar (6) NOT NULL,
    Manufacturer_ID varchar (15) NOT NULL,
    Serial_Number varchar (6) NOT NULL,
    Price decimal (4,2) NOT NULL,
    Quantity_Stock int,
    Product_Status ENUM('In-Stock','Out-of-Stock'),
    Expiry_Date DATE,

    CONSTRAINT Inventory_PK PRIMARY KEY (Inventory_ID),
    CONSTRAINT prodInventory_FK FOREIGN KEY (ProductType_ID) REFERENCES product(ProductType_ID),
    CONSTRAINT manuInventory_FK FOREIGN KEY (Manufacturer_ID) REFERENCES manufacturer(Manufacturer_ID));

CREATE TABLE sales_Transaction
(
    Transaction_ID varchar (8) NOT NULL,
    Customer_ID int ,
    Employee_ID int ,
    Number_of_Products int (2),
    Inventory_ID varchar (4) NOT NULL,
    CurrentTime TIME,
    Payment ENUM('Cash','Credit','E-commerce'),
    Payment_Amount decimal (4,2) NOT NULL,

    CONSTRAINT transaction_PK PRIMARY KEY (Transaction_ID),
    CONSTRAINT customTransac_FK FOREIGN KEY (Customer_ID) REFERENCES customer(Customer_ID),
    CONSTRAINT employTransac_FK FOREIGN KEY (Employee_ID) REFERENCES employee(Employee_ID),
    CONSTRAINT inventoryTransac_FK FOREIGN KEY (Inventory_ID) REFERENCES Inventory(Inventory_ID)
);

INSERT INTO rates (rate_code, rate_name, price,rate_type)
VALUES('1000001','Normal hourly Rate',12,'Student'),
('1000002','Regular hourly rate',15,'Regular');