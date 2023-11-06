/*
	Task 4: 
	Write a SQL query to retrieve the top 5 customers who have made the highest total purchase amount. Display the customer name along with the total purchase amount in descending order of the purchase amount.
*/

SELECT 
    c.name AS CustomerName, 
    SUM(o.total_amount) AS TotalPurchaseAmount
FROM 
    customers c
JOIN 
    Orders o ON c.id = o.customer_id
GROUP BY 
    c.name
ORDER BY 
    TotalPurchaseAmount DESC
LIMIT 5;