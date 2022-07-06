# Wonde DevSupport Technical Exercise

# Task 1
Code can be found in index.php.
Tested the Wonde PHP Client on Github first but only managed to get the school name and not the employees. Moved on to a basic curl request.

![Basic report of all teachers in the Wonde testing school.](https://gyazo.com/082170d82307ee1ba97a6cceb71318af.png)

# Task 2 - Database
My guess is that there is no record of Felipa Hamill belonging to Koss-Brown in the company_user table. I suspect if this is a laravel application then a user has to belong to a company in order to authenticate the user has the right permissions?

![SQL Query](https://gyazo.com/5d0fac37dff1b0917913c7dd0b1c1243.png)

With the user ID:
![User ID](https://gyazo.com/6eefe9248b8f50390801007ba4c96804.png)

And the company ID:
![Company ID](https://gyazo.com/a54f78f5bfbf0c73d6075ef8f6bce643.png)

Could create a simple insert query:
> INSERT INTO company_user VALUES(10, 38, NOW(), NOW());

Could also do a couple subqueries to get that information in the insert statement but would take a little longer to figure out.