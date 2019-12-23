# MS DataTables: To Display Tables

- [Basic Function](#basicfunction)
    - [Display Tables](#dt)
    - [Type of Tables](#tyt)
    - [Available Options](#tbfunction)

    
<a name="basicfunction"></a>
## Basic Function

MS DataTable is inbuilt data driver system to generate views for frontend that powered with Vue js.
<a name="df"></a>
### Datatable Function

This function used to display data tables from module & configured sub table.

MS Database (MSDB) available on namespace `\MS\Core\Helper`.  

All methods call on new class created `new \MS\Core\Helper\MSDB()` with module namespace & table id.

#### Display Normal Form
To display form, call method `viewData()` & pass just View ID what you want. 
    
    public function methodName(){
    
        $m = new \MS\Core\Helper\MSDB(String $module_namespcae,String $module_table_id);
        return $m -> viewData(String $name);
    
    }

This method works when table is well configured & MSDB class properly.
