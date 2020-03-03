create database newdb;
use newdb;

create table Customer(
    CustomerID int(4) AUTO_INCREMENT PRIMARY KEY, 
    CustomerName varchar(30) NOT NULL,
    Purpose ENUM('School Work', 'Work', 'Chill'),
    RateCode varchar(6),
    Time_In varchar(6) NOT NULL,
    Time_Out varchar(6),
    Curr_Date char(8)
    FOREIGN KEY (RateCode) REFERENCES StandardRates(RateCode)
);

create table Sales_Transaction(
    TransactionID char(8) PRIMARY KEY,
    CustomerID int(4),
    EmployeeID int(8),
    NoOfProducts int(3), 
    CurrentTime varchar(6) NOT NULL,
    PaymentID varchar(4),
    PaymentAmount decimal.
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    FOREIGN KEY (EmployeeID) REFERENCES Employee(EmployeeID),
    FOREIGN KEY (PaymentID) REFERENCES RefPaymentMethod(PaymentID)
);

create table ProductID(
    ProductID char(8) PRIMARY KEY,
    ProductTypeID int(4),
    ManufacturerID int(8),
    SerialNumber int(3),
    Price decimal,
    QuantityStock int,
     ENUM('In-Stock', 'Out-of-Stock'),
    ExpiryDate char(8),
    FOREIGN KEY(ProductTypeID) REFERENCES Product_Type(ProductTypeID),
    FOREIGN KEY(ManufacturerID) REFERENCES Manufacturer(ManufacturerID)

);

create table Manufacturer(
    ManufacturerID char(15) PRIMARY KEY,
    ManufacturerName varchar(30),
    ContactNumber Integer(11)
);

create table Product_Type(
    ProductTypeID varchar(6) PRIMARY KEY,
    ProductTypeName char(30),
    CategoryID varchar(11),
    FOREIGN KEY(CategoryID) REFERENCES Category(CategoryID)
);

create table Employee(
    EmployeeID int(9) PRIMARY KEY,
    EmployeeName varchar(30) NOT NULL,
    EmployeeAddress varchar(100),
    EmployeeEmail varchar(255),
    ContactNumber int(11)
);

create table StandardRates(
    RateCode varchar(9) PRIMARY KEY,
    RateName char(30),
    Price decimal,
    RateType char(8)
);

create table PromoRates(
    PromoCode int(6) PRIMARY KEY,
    RateCode varchar(9),
    Discount varchar(8),
    PromoStart char(8),
    PromoEnd char(8),
    FOREIGN KEY (RateCode) REFERENCES StandardRates(RateCode)
);

create table Category(
    CategoryID int(3) PRIMARY KEY,
    CategoryName varchar(30)
);

create table RefPaymentMethod(
    PaymentID int(4) PRIMARY KEY,
    PaymentMethodName varchar(25)
);