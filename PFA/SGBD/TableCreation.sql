CREATE TABLE Client(
    Client_ID INTEGER PRIMARY KEY,
    Client_firstname CHARACTER(20),
    Client_lastname CHARACTER(20),
    Client_Adresse CHARACTER(40),
    Email CHARACTER(1),
    Tel INT(8),
    Login CHARACTER(40),
    PWD CHARACTER (40)
);
CREATE TABLE  Administrateur (
   Admin_ID INTEGER PRIMARY KEY,
   Admin_firstname CHARACTER(20),
   Admin_Lastname CHARACTER(20),
   Fonction VARCHAR(25),
   Salary DECIMAL(13),
   Admin_Hire_Date DATE,
   Login CHARACTER(40),
   PWD CHARACTER (40)
);
CREATE TABLE  Responsable_Stock(
   Responsable_ID INTEGER PRIMARY KEY,
   Responsable_firstname CHARACTER(20),
   Responsable_Lastname CHARACTER(20),
   Salary DECIMAL(13),
   Admin_Hire_Date DATE,
   Login CHARACTER(40),
   PWD CHARACTER (40),
   Grade  CHARACTER (10)
);
CREATE TABLE Product_Stock(
   Product_Stock_ID INT PRIMARY KEY,
   Product_Name CHARACTER(45),
   Product_Quantity INT,
   Stock_Min INT,
   Date_Mise_A_Jour DATE
);
CREATE TABLE Product_Test(
   Product_Test_ID INT PRIMARY KEY,
   Product_Name CHARACTER(45),
   Date_Test Date,
   Medcin_Responsable_Name CHARACTER(30),
   Resultat  CHARACTER (10)
);
CREATE TABLE Commande(
    Commande_ID INTEGER PRIMARY KEY,
    Product_Name CHARACTER(45),
    Quantite INTEGER ,
    Adresse CHARACTER(40),
    Email CHARACTER(1),
    Tel NUMBER(8),
    Paiment_Mode CHARACTER(30),
    Date_Livraison DATE,
    Client_ID INTEGER FOREIGN KEY);