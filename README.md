
Bookstore API (PHP + MySQL)


* Project Overview

This is a simple RESTful API for a Bookstore built using PHP and MySQL.
It allows users to perform full CRUD operations (Create, Read, Update, Delete) on books.

This project was developed as an internship task to understand backend development, APIs, and database integration.


*Features

Add a new book
Get all books
Get a single book by ID
Update book details
Delete a book
JSON based responses
MySQL database integration

*Tech Stack

PHP (Core PHP)
MySQL Database
Apache (XAMPP)
Postman (for API testing)


*Project Structure

bookstore-api/
│
├── Book/
│   ├── create.php
│   ├── getAll.php
│   ├── getOne.php
│   ├── update.php
│   └── delete.php
│
├── db.php
└── README.md



*Database Table Structure

Table: books
Column	Type
id	INT (Auto Increment, Primary Key)
title	VARCHAR
author	VARCHAR
price	INT
isbn	VARCHAR
publishedDate	DATE

Database Table Structure
Table: books
Column	Type
id	INT (Auto Increment, Primary Key)
title	VARCHAR
author	VARCHAR
price	INT
isbn	VARCHAR
publishedDate	DATE


🔗 API Endpoints

➕ Create Book
POST /Book/create.php
📥 Get All Books
GET /Book/getAll.php
📄 Get Single Book
GET /Book/getOne.php?id=1
✏️ Update Book
PUT /Book/update.php?id=1
❌ Delete Book
DELETE /Book/delete.php?id=1


* Example JSON (POST / UPDATE)


{
  "title": "Atomic Habits",
  "author": "James Clear",
  "price": 20,
  "isbn": "1234567890",
  "publishedDate": "2018-10-16"
}

*How to Run Project Locally

Install XAMPP
Start Apache & MySQL
Place project inside:
  (htdocs/bookstore-api)

Import database in phpMyAdmin
Update db.php with DB credentials
Run in browser or Postman
   (http://localhost/bookstore-api/Book/getAll.php)



*Testing Tool

Use Postman to test all APIs:

Set method (GET, POST, PUT, DELETE)
Send JSON in Body (raw → JSON)
Check response


*Learning Outcomes

REST API concepts
PHP backend development
MySQL database handling
CRUD operations
Postman API testing
Backend project structure


*Author

Internship Project – Backend Development Practice
Built using PHP + MySQL

*Status

✔ CRUD Completed
✔ API Working
✔ Ready for Submission
