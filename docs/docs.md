
Grand Total
```mysql
SELECT SUM(dollar_sales) from customer_product_dollarsales;
```

We need this query to get all row headers and also for pagination
Rows
```mysql
(SELECT country, null as city, CONCAT(country) as id, SUM(dollar_sales)
 FROM customer_product_dollarsales
 GROUP BY country)
UNION
(SELECT country, city, CONCAT(country, ' - ', city) as id, SUM(dollar_sales)
 FROM customer_product_dollarsales
 WHERE country IN ('Australia', 'Austria', 'Belgium', 'Canada')
 GROUP BY country, city
 ORDER BY country, city)
ORDER BY country, city
LIMIT 11;
```

This query will give us all column headers
Columns
```mysql
(SELECT productLine, null as productName, SUM(dollar_sales)
 FROM customer_product_dollarsales
 GROUP BY productLine, null)
UNION
(SELECT productLine, productName, SUM(dollar_sales)
 FROM customer_product_dollarsales
 WHERE productLine IN ('Trains')
 GROUP BY productLine, productName)
ORDER BY productLine, productName;
```

Data
```mysql
(select country,
        null as city,
        sum(case when productLine = 'Classic Cars' then dollar_sales end)     as 'Classic Cars',
        sum(case when productLine = 'Motorcycles' then dollar_sales end)      as 'Motorcycles',
        sum(case when productLine = 'Planes' then dollar_sales end)           as 'Planes',
        sum(case when productLine = 'Ships' then dollar_sales end)            as 'Ships',
        sum(case when productLine = 'Trains' then dollar_sales end)           as 'Trains',
        sum(case when productLine = 'Trains' and productName = '1950\'s Chicago Surface Lines Streetcar' then dollar_sales end) as 'Trains - 1950\'s Chicago Surface Lines Streetcar',
        sum(case when productLine = 'Trains' and productName = '1962 City of Detroit Streetcar' then dollar_sales end) as 'Trains - 1962 City of Detroit Streetcar',
        sum(case when productLine = 'Trains' and productName = 'Collectable Wooden Train' then dollar_sales end) as 'Trains - Collectable Wooden Train',
        sum(case when productLine = 'Trucks and Buses' then dollar_sales end) as 'Trucks and Buses',
        sum(case when productLine = 'Vintage Cars' then dollar_sales end)     as 'Vintage Cars'
 from customer_product_dollarsales
 where country in ('Australia', 'Austria', 'Belgium', 'Canada')
 group by country )
UNION
(select country,
        city,
        sum(case when productLine = 'Classic Cars' then dollar_sales  end)     as 'Classic Cars',
        sum(case when productLine = 'Motorcycles' then dollar_sales  end)      as 'Motorcycles',
        sum(case when productLine = 'Planes' then dollar_sales end)           as 'Planes',
        sum(case when productLine = 'Ships' then dollar_sales end)            as 'Ships',
        sum(case when productLine = 'Trains' then dollar_sales end)           as 'Trains',
        sum(case when productLine = 'Trains' and productName = '1950\'s Chicago Surface Lines Streetcar' then dollar_sales end) as 'Trains - 1950\'s Chicago Surface Lines Streetcar',
        sum(case when productLine = 'Trains' and productName = '1962 City of Detroit Streetcar' then dollar_sales end) as 'Trains - 1962 City of Detroit Streetcar',
        sum(case when productLine = 'Trains' and productName = 'Collectable Wooden Train' then dollar_sales end) as 'Trains - Collectable Wooden Train',
        sum(case when productLine = 'Trucks and Buses' then dollar_sales end) as 'Trucks and Buses',
        sum(case when productLine = 'Vintage Cars' then dollar_sales end)     as 'Vintage Cars'
 from customer_product_dollarsales
 where (country = 'Australia' and city = 'Chatswood') or
     (country = 'Australia' and city = 'Glen Waverly') or
     (country = 'Australia' and city = 'Melbourne') or
     (country = 'Australia' and city = 'North Sydney') or
     (country = 'Australia' and city = 'South Brisbane') or
     (country = 'Belgium' and city = 'Bruxelles') or
     (country = 'Belgium' and city = 'Charleroi')
 group by country, city)
order by country is NULL, country, city IS NULL, city # make sure group subtotal is at the end
limit 100;
```

Possible object to save current state

```json
{
  "name": "",
  "children": [
    
  ]
}
```
