/*
	Task 1: 
	Write a SQL query to retrieve all the customer information along with the total number of orders placed by each customer. Display the result in descending order of the number of orders.
*/

SELECT 
    COUNT(`orders`.id) AS TotalOrders, 
    customers.name AS Name, 
    customers.email AS Email, 
    customers.phone AS Phone,
FROM 
    `orders`
LEFT JOIN 
    customers 
ON 
    `orders`.customer_id = customers.id 
GROUP BY 
    customers.id
ORDER BY 
    TotalOrders DESC;
