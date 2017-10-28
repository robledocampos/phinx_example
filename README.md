# README #

Simple phinx example usage

### Goal ###

Show a database migration using code using Phinx that can create and rollback a database table with these fields:
    
    id | name | email | login | password | conversion_rate | create_at
    

### Libraries and Extensions ###

Here I work with:

* Composer - to manage the project depencies
* Phinx Migrations - to built the database

### Setup Guide ###

1. Connected to your database instance run the following command to create the schema:

        CREATE SCHEMA <database_name> DEFAULT CHARACTER SET utf8 ;
        
2. Update phinx.yml config file with your instance info and database adapter, here Postgre is set up, you can use MySQL 
or other one, just choose the right adapter and port:

          development:
                adapter: pgsql
                host: <database_host>
                name: <database_name>
                user: <user>
                pass: <password>
                port: 5432
                charset: utf8

3. Run the composer at the command line, inside the project folder:
        
        $ cd phinx_example
        $ composer install
        
4. At the command line, inside the project folder, you can see:
        
  * The migration status, if it is UP or DOWN:
                
            $ php vendor/bin/phinx status
  * Run it:
            
            $ php vendor/bin/phinx migrate
  * And roll it back:
  
            $ php vendor/bin/phinx rollback
        

