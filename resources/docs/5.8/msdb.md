# MS Database : Getting Started

- [Basic Function](#basicfunction)
    - [Database Function](#dbfunction)
    - [Table Function](#tbfunction)
    - [View Function](#tbfunction)
    
<a name="basicfunction"></a>
## Basic Function

MS Database is inbuilt database driver system to manage Database with sqlite.
<a name="basicfunction"></a>
### Database Function

This function used to perform action on Database.

MS Database (MSDB) available on namespace `\MS\Core\Helper`.  

All methods call by `\MS\Core\Helper\MSDB::methodName()`.

Database default path is `projectFolder\MS\DB\Master\`.

#### Create Database  
To create new database, call method `makeDB()` & pass just Name of database what you want. 
 
    \MS\Core\Helper\MSDB::makeDB(String $name)

This method use to make a new blank Database.

#### Check Database
To check database exist or not, call method `checkDB()` & pass just Name of database what you want. 
 
    \MS\Core\Helper\MSDB::checkDB(String $name)

This method use to check Database exist or not on Database directory.

#### Delete Database

To delete database , call method `deleteDB()` & pass just Name of database what you want. 
 
    \MS\Core\Helper\MSDB::deleteDB(String $name)

This method use to delete database.

  

### Table Function 

This function used to perform action on tables.

MS Database (MSDB) available on namespace `\MS\Core\Helper`.  

MS Database class should initialised 

    $msdb=new \MS\Core\Helper\MSDB(String $namespace, String $tableID);


Database default path is `projectFolder\MS\DB\Master\`.

#### Create Table  
To create new Table, call method `migrate()` & pass Name of database what you want. 
 
    $msdb->migrate( String $tableID );

This method use create new Table.

To create all table in available in Module.
    
    \MS\Core\Helper\MSDB::massMigrate(String $namespace, String $tableID);

#### Delete Table
To create new Table, call method `migrate()` & pass Name of database what you want. 
 
    $msdb->delete();

This method use delete Table.


### View Function 

This function used to show forms and tables views.

#### Display Form 
To display specific form with Table ID, call method `displayForm()` & Define ID of Table defined in [MSforms](/docs/{{version}}/msform). 
 
    $msdb->displayForm('formID');

This method display form.

#### Display Table 
To display specific form with Table ID, call method `viewData()` & Define ID of view defined in [MSViews](/docs/{{version}}/module#MSforms). 
 
    $msdb->viewData('viewID');

This method display table.
