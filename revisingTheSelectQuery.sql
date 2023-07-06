-- The CITY table is described as follows:
--========================================
--      CITY TABLE
-- Field        Type
-- ID           NUMBER
-- NAME         VARCHAR(17)
-- COUNTRYCODE  VARCHAR(3)
-- DISTRICT     VARCHAR(20)
-- POPULATION   NUMBER

SELECT * FROM CITY 
    WHERE POPULATION > 100000 AND COUNTRYCODE = 'USA';

-- Permasalahan 1
-- Query all columns for all American cities in the CITY 
-- table with populations larger than 100000. 
-- The CountryCode for America is USA.

SELECT NAME FROM CITY 
    WHERE POPULATION > 120000 AND COUNTRYCODE = 'USA';

-- Permasalahan 2
-- Query the NAME field for all American cities in the 
-- CITY table with populations larger than 120000. 
-- The CountryCode for America is USA.

SELECT * FROM CITY;

-- Permasalahan 3
-- Query all columns (attributes) for every row in the CITY 
-- table.

SELECT * FROM CITY WHERE ID = 1661;

-- Permasalahan 4
-- Query all columns for a city in CITY with the ID 1661.


