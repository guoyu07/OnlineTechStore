# Online-Tech-Store-WPL-Project

Description:
Online Tech Store web application is used to buy electronic gadgets and softwares. Customers can sign up to the application, search for the required gadgets and buy any desired products. Registered users can also add desired items to their shopping cart and save them for future purchases. Customers can even view their purchase history. You can enter any quantity of items as long as the number is within inventory range. Soft delete is implemented on the deletion of products.



Architecture:
1. Client sends service request to the application server through the webpage.
2. Web Server (WAMP) accepts the request through web services and processes it.
3. Application logic (PHP) will then access Data Access Layer to connect to Database and performs the desired operation.
   
   
      
Languages and technologies: javascript, php, jQuery, html/css, bootstrap, ajax Database server: MAMP with MySql, phpMyadmin

Preprocessing steps: Install MAMP/XAMP. create a database named movie_store. From phpMyadmin import the db-store.sql file. Place the downloaded contents from Online-Tech-Store folder in C:/MAMP/htdocs/ Run the servers from MAMP window Open any browser and logon to localhost

Services:
1. ProductSearch:The website provides options to search for products using product name or category name.
2. ProductPurchase:The website allows registered users to purchase any number of desired gadgets within stock.
3. Category Search: The customers can search based on the category name or the product name.
4. ProductCatalogue:Product title,Price and Product description is provided for each product and quantity needed.

Functionalities:
1. Create Account: Customers can create their account by providing their details like name, address, etc. Each customer will need to create a unique username and valid state and phone number.
2. Login: Customers can access their account using their respective username and password.
The passwords are hashed in the database.
3. UserDetails:Customers can view their details in MyAccountpage.
 4. Add/UpdateCart:Customer scan add or update their desired items to the shopping cart.
5. History:Customer scan view their purchase history. 

6. Admin: Add items, update inventory, Delete items.
