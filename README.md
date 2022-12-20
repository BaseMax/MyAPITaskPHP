# MyAPITaskPHP

This is a simple Task Manager API for CRUD operations.

First run your mysql and php on your localhost by this command:

```
php -S 127.0.0.1:2323
```

Now run setup file by openning below route to create database and table:

```
localhost:2323/setup/setup.php
```
If you do not see any error in that page means database and table successfully created.

For checking open an command line environment and run below command to open interactive mysql shell:

```
mysql -h localhost -u root -p
```

And check your database by sql queries.

```
SHOW databases;
```

## Routes

lets go to explain routes in this API
 
### GET tasks

To get all task send a GET request to below route:
```
localhost:2323/get
```

Or

```
localhost:2323/get/index.php
```

To search by a string in tasks use GET method by below route:

```
localhost:2323/get/index.php?q=<search-string>
```

and you can use below route for get task by ID:

```
localhost:2323/get/index.php?id=<task-id>
```

### Add tasks

For add task as usual should use POST method.

Use below route and POST method to add a task.

your request must have two key value (title, description).

send POST request by title and description to below route:
```
localhost:2323/add
```

Or

```
localhost:2323/add/index.php
```

### Edit tasks

For edit and update a task use POST method.

if you want to update title or description or both of a task should have id of your task and send new title or description by POST method to below route:

```
localhost:2323/edit?id=<task-id>
```
or 
```
localhost:2323/edit/index.php?id=<task-id>
```

### Delete tasks

For delete a task use GET method.

If you want to delete all tasks in tasks table send a GET request to below route:
```
localhost:2323/delete
```

or

```
localhost:2323/delete/index.php
```

Add a query string at the end of route to specify your tasks that have this word in title or in description for deletion like this route:
```
localhost:2323/delete/index.php?q=<query-string>
```
or
```
localhost:2323/delete?q=<query-string>
```

Or specify task ID in query string like below:

```
localhost:2323/delete?id=<task-id>
```
or
```
localhost:2323/delete/index.php?id=<task-id>
```

## Contributors

* Ali Ahmadi
* Max Base
