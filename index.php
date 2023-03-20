
SELECT * FROM employees;

SELECT name, salary FROM employees WHERE salary > 50000;

SELECT AVG(salary) FROM employees;

SELECT COUNT(*) FROM employees WHERE department = 'Marketing';

UPDATE employees SET salary = 60000 WHERE id = 1001;

DELETE FROM employees WHERE salary < 30000;


//.........................

SELECT * FROM departments;

SELECT name, manager FROM departments WHERE name = 'Finance';

SELECT department, COUNT(*) AS total_employees FROM employees GROUP BY department;

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');

//........................................

Answers for the employees table

Select all columns and rows from the employees table
SELECT * FROM employees;

Select only the name and salary columns of all employees with a salary greater than 50000
SELECT name, salary FROM employees WHERE salary > 50000;

Calculate the average salary of all employees
SELECT AVG(salary) FROM employees;

Count the number of employees who work in the "Marketing" department
SELECT COUNT(*) FROM employees WHERE department = 'Marketing';

Update the salary column of the employee with an id of 1001 to 60000
UPDATE employees SET salary = 60000 WHERE id = 1001;

Delete all employees whose salary is less than 30000
DELETE FROM employees WHERE salary < 30000;


Answers for the departments table

Select all columns and rows from the departments table
SELECT * FROM departments;

Select only the name and manager columns of the "Finance" department
SELECT name, manager FROM departments WHERE name = 'Finance';

Calculate the total number of employees in each department
SELECT department, COUNT(*) AS total_employees FROM employees GROUP BY department;

Insert a new department called "Research" with a manager named "John Doe"
INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');






