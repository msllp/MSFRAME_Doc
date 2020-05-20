# MS Form : To Display Forms

- [Basic Function](#basicfunction)
    - [Display Forms](#df)
    - [Type of Forms & input](#tyfi)
    - [Form Field Connections](#tbfunction)

    
<a name="basicfunction"></a>
## Basic Function

MS Form is inbuilt form driver system to manage form that powered with Vue js.
<a name="df"></a>
### Database Function

This function used to display form from module & configured sub table.

MS Database (MSDB) available on namespace `\MS\Core\Helper`.  

All methods call on new class created `\MS\Core\Helper\MSDB()` with module namespace & table id.

#### Display Normal Form
To display form, call method `displayForm()` & pass just Form ID what you want. 
    
    public function methodName(){
    
        $m = new \MS\Core\Helper\MSDB(String $module_namespcae,String $module_table_id);
        return $m -> displayForm(String $name);
    
    }

This method works when table is well configured & MSDB class properly.
