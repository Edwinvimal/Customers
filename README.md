---
title: Customers (PHP)
parent: Assignments
grand_parent: Coding Interviews
---
# Assignment

## Introduction

This is a Customer's purchase and order details application. The first screen shows the list of customers and their total purchase count. User will be redirected to second screen on click on customer name and in the second screen shows the date of purchase, number of products they purchase and the amount.

## Modules
I have created a small components/functions to servce the individual purpose such as getting the customer id, total purchase, etc.. which are extendable and reusable.

#Assumptions
Not sure why customers in the customer list and customers in the order list are not matching hence i have show customer's id in the first screen.
Due to the same reason, i have shown the amount as 0 in the second screen.

#Unit test
I have written unit test for each and every route and also, for the every functions, which can be found in the tests/Feature folder.

## Open the Cusotmer browser application

To serve the application:
```
php -S localhost:8000 -t public
```

To run the unit tests:
```
./vendor/bin/phpunit
```


