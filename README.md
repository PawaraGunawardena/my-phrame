## MyPHrame
* MyPHrame is a web development framework and using MyPHrame user applications can develop with MVC (Model View Controller) software archtecture pattern.
* MyPHrame gives Php, MySQL, Bootstrap configurations for development of user applications.

###For use this repository:


#### Setup you own servers for PHP and MySQL
* You can use WAMP, XAMPP or any compatible servers for PHP and MYSQL.
* Here describes assuming completed the WAMP server configurations. 
* Move to the www directory for the WAMP server.

##### Clone
* Clone the source code in to the www directory 

        git clone https://github.com/PawaraGunawardena/myphrame.git
    
#### Re configure
* Change the URL defined in config.php file if needed
* Change DB_HOST, DB_NAME, DB_USER, DB_PASS relevant to yours. 

#### User table 
* To use the user registration and user login functionalities which already implemented, create relevant in 'myphrame' database, then create the table named 'user' using the following MySQL query. 
(Can replace the database name 'myphrame' from your own database name.)

        CREATE TABLE `myphrame`.`user` ( `user_id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(12) NOT NULL , `email` VARCHAR(32) NOT NULL , `password` VARCHAR(32) NOT NULL , PRIMARY KEY (`user_id`), UNIQUE (`username`), UNIQUE (`email`));
