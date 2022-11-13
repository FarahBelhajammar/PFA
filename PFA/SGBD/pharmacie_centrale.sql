
-- Database: `pharmacie_centrale`

CREATE TABLE administrateur (
  Admin_ID int (11) NOT NULL,
  Admin_firstname char(20) DEFAULT NULL,
  Admin_Lastname char(20) DEFAULT NULL,
  Fonction varchar(25) DEFAULT NULL,
  Salary decimal(13,0) DEFAULT NULL,
  Admin_Hire_Date date DEFAULT NULL,
  Login char(40) DEFAULT NULL,
  PWD char(40) DEFAULT NULL
) ;

CREATE TABLE client (
  Client_ID int(11) NOT NULL,
  Client_firstname char(20) DEFAULT NULL,
  Client_lastname char(20) DEFAULT NULL,
  Client_Adresse char(40) DEFAULT NULL,
  Email char(30) DEFAULT NULL,
  Tel int(8) DEFAULT NULL,
  Login char(40) DEFAULT NULL,
  PWD char(40) DEFAULT NULL
) ;

CREATE TABLE commande (
  Commande_ID int(11) NOT NULL,
  Product_Name char(45) DEFAULT NULL,
  Quantity int(11) DEFAULT NULL,
  Adresse char(40) DEFAULT NULL,
  Email char(30) DEFAULT NULL,
  Tel int(8) DEFAULT NULL,
  Paiment_Mode char(30) DEFAULT NULL,
  Date_Livraison date DEFAULT NULL,
  Client_ID int(11) DEFAULT NULL
) ;
CREATE TABLE product_stock (
  Product_Stock_ID int(11) NOT NULL,
  Product_Name char(45) DEFAULT NULL,
  Product_Quantity int(11) DEFAULT NULL,
  Stock_Min int(11) DEFAULT NULL,
  Date_Mise_A_Jour date DEFAULT NULL
) ;
CREATE TABLE product_test (
  Product_Test_ID int(11) NOT NULL,
  Product_Name char(45) DEFAULT NULL,
  Date_Test date DEFAULT NULL,
  Medcin_Responsable_Name char(30) DEFAULT NULL,
  Resultat char(10) DEFAULT NULL
) ;

CREATE TABLE responsable_stock (
  Responsable_ID int(11) NOT NULL,
  Responsable_firstname char(20) DEFAULT NULL,
  Responsable_Lastname char(20) DEFAULT NULL,
  Salary decimal(13,0) DEFAULT NULL,
  Responsable_Hire_Date date DEFAULT NULL,
  Login char(40) DEFAULT NULL,
  PWD char(40) DEFAULT NULL,
  Grade char(10) DEFAULT NULL
) ;

ALTER TABLE administrateur
  ADD PRIMARY KEY (Admin_ID);
  
ALTER TABLE client
  ADD PRIMARY KEY (Client_ID);

ALTER TABLE commande
  ADD PRIMARY KEY (Commande_ID),
  ADD KEY `FOREIGN` (Client_ID) USING BTREE;

ALTER TABLE product_stock
  ADD PRIMARY KEY (Product_Stock_ID);

ALTER TABLE product_test
  ADD PRIMARY KEY (Product_Test_ID);

ALTER TABLE responsable_stock
  ADD PRIMARY KEY (Responsable_ID);

ALTER TABLE commande
  ADD CONSTRAINT  client FOREIGN KEY (Client_ID) REFERENCES client (Client_ID);
