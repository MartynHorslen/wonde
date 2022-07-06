# Wonde DevSupport Technical Exercise

# Task 1
Code can be found in index.php.
Tested the Wonde PHP Client on Github first but only managed to get the school name and not the employees. Moved on to a basic curl request. Below is a snippet of the results:

![Basic report of all teachers in the Wonde testing school.](https://gyazo.com/082170d82307ee1ba97a6cceb71318af.png)

# Task 2 - Database
My guess is that there is no record of Felipa Hamill belonging to Koss-Brown in the company_user table. I suspect if this is a laravel application then a user has to belong to a company in order to authenticate the user has the right permissions?

![SQL Query](https://gyazo.com/5d0fac37dff1b0917913c7dd0b1c1243.png)

With the user ID:<br />
![User ID](https://gyazo.com/6eefe9248b8f50390801007ba4c96804.png)

And the company ID:<br />
![Company ID](https://gyazo.com/a54f78f5bfbf0c73d6075ef8f6bce643.png)

Could create a simple insert query:
> INSERT INTO company_user VALUES(10, 38, NOW(), NOW());

Could also do a couple subqueries to get that information in the insert statement but would take a little longer to figure out.

# Task 3 - Laravel
- After cloning and installing the project, I first fixed seeding the database by uncommenting the database seeder for the User factory.
- Uncommented the foreach loop in the index blade. The app now displays all the users.
- I fixed the route for the store action from get to post. The 'add new user form' functions again.
![Users](https://gyazo.com/9ab9f12f666e74a1547a09c1092c83ef.png)