UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;



DELETE FROM table_name WHERE condition;

SELECT COUNT(*)
FROM Products;

SELECT SUM(Quantity)
FROM OrderDetails;

SELECT AVG(Price)
FROM Products;

SELECT * FROM Products
WHERE Price BETWEEN 10 AND 20;

SELECT ProductID, ProductName, CategoryName
FROM Products
INNER JOIN Categories ON Products.CategoryID = Categories.CategoryID;