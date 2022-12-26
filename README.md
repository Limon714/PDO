# PDO CRUD APPLICATION

CRUD operations descriptions and examples
CREATE – Being a forum, it needs to let our users create new topics. When a user opens the topic creation form, fills it and clicks on the "Create topic" button, it will trigger the forum's CREATE function that will create a new "Topic" record with the "title", "content", "tags", etc values in the forum's database

CRUD CREATE
READ – Once the post is created, anyone will be able to read it when browsing on the forum and clicking on it, or directly accessing its URL. Doing so will call the forum's READ function, that will retrieve the topic including its attributes (title, content, tags, etc) from the database. The READ function doesn't modify any information from this topic.


UPDATE – After a user has created a topic, our forum allows them to edit it. Useful if they made a mistake or forgot something. To do so, users can simply click the edit button and modify the values of the different attributes. After they click "Save Edit", the forum's UPDATE function will be called, and change those values accordingly in the database.

CRUD UPDATE
CRUD UPDATE form
DELETE – If for any reason, the user wants to delete their topic, they can click the "delete topic" button,. The forum's DELETE function will be called, and will delete the topic record and its attributes from the database.

CRUD DELETE
This is a simple explanation of CRUD operations on a single type of records. Even basic applications will involve CRUD operations on various types of records, with different users being authorised to perform different operations on different types of records. In our forums examples, a user can CREATE a topic, UPDATE their account, READ comments in a topic, and DELETE a bookmark, while admins can UPDATE users rights or CREATE new forum sections.

CRUD operations, REST and SQL
Now we know what are CRUD operations at a high level. We saw that essentially, CRUD operations are triggered by users' (or automated) actions, and alter or read the database. Usually, in web applications, those CRUD operations will be triggered by users' actions generating calls to a REST API, and will alter or read the database via SQL queries.

The table below describes how CRUD operations map to HTTP methods from REST APIs called to trigger the operations, and to SQL queries performed to alter or read the database:

HTTP Method

CRUD operation

SQL query

POST

CREATE

CREATE

GET

READ

SELECT

PUT

UPDATE

UPDATE

DELETE

DELETE

DELETE

What is a CRUD app?
A you might have noticed, even for the most basic use case, those CRUD operations aren't enough to achieve any meaningful results by themselves, they interact with other elements. All together, those elements make a CRUD app.

Front-end
The front-end, or User Interface, is what enable users to interact with the application, call the REST API to trigger the CRUD operations and ultimately interact with the database.

Back-end
The back-end is what will translate the REST API calls into SQL queries to perform CRUD operations on your database.

Database
The database is where your data, and where the CRUD operations are ultimately performed via SQL queries.

Role-Based Access Control Activity logs, ...
In addition to the components listed above, that are the essential components of a CRUD app, additional capabilities are required to build a robust app. Indeed, you might want to restrict which users can perform which operations (for instance deleting the entire database), and log every operations performed for debugging or compliance purposes.

Hosting
All the components above have to be hosted somewhere to always be accessible for your and your users.

Now, let's see different options to build a CRUD app.

Building a CRUD app from scratch
An obvious option to build a CRUD app is to build it from scratch. Most likely, if you're thinking about building such an app, it's because you already have a database storing data you want to enable your users to easily visualise or manipulate. So we will assume you already have an up and running database.

While CRUD apps seem fairly basic, developing one requires solid front-end, back-end and database knowledge. In this blog, we won't cover everything in detail but list the main steps to build a CRUD app on top of your database, from scratch, and link to useful resources.

For the sake of the exercise, we'll assume you're using the following popular technologies: React for the front-end, Node.js for the back-end and PostreSQL for your database.

Build your CRUD app front-end
We used this great tutorial "How to Perform CRUD Operations using React, React Hooks, and Axios" as a reference.

Architecture & design
Let's go. As we're starting from an existing database, you already know what data is stored in this database, and how it is structured. So the first you might do is to think about how you want your users to interact with this data, how you want to represent it, and what will the experience look like.
Create your React application
Install the Semantic UI Package for React
This package is an UI library providing pre-built components such as buttons, tables and much more.
Create your app first screen
Create your CREATE, READ and UPDATE files for your CREATE, READ and UPDATE component, no need for a new component for DELETE
Build the CREATE, READ, UPDATE and DELETE elements, buttons and logic
Build the CRUD requests to the API (once you've built the API)
Implement forms validation
Build your CRUD app back-end
Once you're done with the front-end, it's time to build what will be the link between the front-end and the database. We used this "Developing a CRUD Node.js Application with PostgreSQL" guide as a reference.

Create your app architecture in Node.js
Configure your app and its connection to your PostgreSQL database
Create the routes for your CRUD operations, including writing the API endpoints for their respective methods, and their respective logic to query the database
Deploy your CRUD app
As we mentioned previously, you need to host your database, back-end and front-end online if you want you and your users to be able to access it anytime from anywhere.

Bonus points: add Role-Based Access Control
From installing the necessary packages to setting up user authentification (both signup and login) and their front-end manifestations to configuring the rights on the routes, implementing RBAC on your CRUD app adds significant amount of development time.

Useful tools to reduce CRUD app development time
As we've seen, developing a basic CRUD app from scratch can take significant time. Fortunately, there are tools to accelerate this process, especially on the backend part. Tools like Hasura or PostgreSQL, depending on your stack, will automatically create APIs based on your database.

Building a CRUD app with a CRUD app builder
Even with tools like Hasura or PostgreSQL, building a CRUD still takes time. Even more so if you need specific capabilities in addition to CRUD operations. To prevent you from reinventing the wheel every-time you need to enable your users to manipulate and visualise the data stored in your database, tools exist to build CRUD apps in minute and allow you to focus on adding advanced logic and functionalities to your applications. Examples include Django Admin or Laravel Nova depending on your stack.

In this blog, we'll see how to build a CRUD app with Forest Admin. We'll assume you're building a CRUD app for a PostgreSQL database.

Install your CRUD app builder
The first step is to install the tool that will help your generate your CRUD app. Using our example Forest Admin with a PostgreSQL database, it only takes a few steps:

Install Forest Admin CLI

$ npm install -g lumber-cli@latest -s
Login to Forest CLI

$ forest login
Generate the backend application

$ forest projects:create "CRUDapp" --databaseConnectionURL "postgres://root:password@localhost:5432/myDatabase" --databaseSchema "public" --applicationHost "localhost" --applicationPort "3310"  
$ cd "CRUDapp" 
$ npm install -s
Run your backend application

$ npm start
Build your CRUD app
The catch is that with Forest Admin, you get an up and running CRUD app right after installing it on top of your database. It automatically generates visualisations of your tables, CRUD operations and more, as well as the associated front-end.

CRUD app
You also benefit from built-in Role-Based Access Control, Activity logs and more so you can focus on coding your own business logic, adding custom actions to your new app and customising it.

