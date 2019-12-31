# Modules

- [Module Structure](#installation)
    - [Folder Structure](#server-requirements)
    - [File Structure](#server-requirements)
- [Console Function for Modules](#installing-laravel)
    - [Create Module](#pretty-urls)
    - [Create Controller](#pretty-urls)
    - [Create Table](#pretty-urls)
    - [Create Request](#pretty-urls)
    - [Create Function](#pretty-urls)
    - [Create View](#pretty-urls)
    - [Delete Module](#pretty-urls)
- [File Template For Module](#file-template)
    - [Base File](#base)
    - [Route File](#route)
    - [Table File](#tatble)
        - [Locked](#locked)
        - [Text](#text)
    - [Model File](#model)
    - [Controller File](#controller)
    - [Table File](#table)
    

<a name="installation"></a>
## Basic Structure od Module Boilerplate

> MS Module have all basic functionality like multidimensional database with all render related function under single module root folder.

   

 

<a name="server-requirements"></a>
### Folder & File Structure

Every Module will be For Frontend or Backend.Frontend & Backend are independent from each other.So,a same named modules can be make diffrently for frontend & backend.

Module folder can have following folders to function with MS-Core Module System.
abl;e
Module location `rootFolder / MS / { B|F } / M /`   

###### `note:` `B : Backend` , `F : Frontend`

#### Structure For Module Folder 

###### Static location : rootFolder / MS / {B|F} /
<div class="content-list" markdown="1">

- View related Files : `rootFolder / MS / {B|F} / {ModuleCode} / V`  
- Javascript related Files : `rootFolder / MS / {B|F} / {ModuleCode} / J`
- Module Defined Function related Files : `rootFolder / MS / {B|F} / {ModuleCode} / F`

</div>

###### `note:` `B : Backend` , `F : Frontend` , `ModuleCode : Code Of Module` 


#### Structure For Module Files 

###### Static location : rootFolder / MS / {B|F} / {ModuleCode}
<div class="content-list" markdown="1">

- Module Base Configure File : `rootFolder / MS / {B|F} / {ModuleCode} / B.php`  
- Module Route File : `rootFolder / MS / {B|F} / {ModuleCode} / R.php`
- Module Controller File  : `rootFolder / MS / {B|F} / {ModuleCode} / C.php`
- Module Model File : `rootFolder / MS / {B|F} / {ModuleCode} / M.php`
- Module Function File : `rootFolder / MS / {B|F} / {ModuleCode} / F.php`

`note:` `All file required to make Module work with MS-Frame`

</div>

###### `note:` `B : Backend` , `F : Frontend` , `ModuleCode : Code Of Module` 



<a name="file-template"></a>
##File Template For Modules

We take sample data for

End: B  `default namespcae for Backend`

Module Code : Foo  

<a name="base"></a>

#### Base File `rootFolder / MS / B / Foo / B.php`
    <?php
     namespace B\Foo;
     use MS\Core\Module\Master;
    
    class B extends Master
    {
        public static $controller="B\Foo\C";
        public static $model="B\Foo\M";


​    
        public static $route=[
    
            [
                'name'=>'Foo.Index',
                'route'=>'/',
                'method'=>'index',
                'type'=>'get',
            ],
            
         ];
    }

<a name="route"></a>
#### Route File `rootFolder / MS / B / Foo / R.php`
    <?php
    \MS\Core\Helper\Comman::load_Route("B\Foo");

<a name="model"></a>
#### Model File `rootFolder / MS / B / Foo / M.php`
    <?php
    namespace B\Foo;
    
    use MS\Core\Model\Master;
    
    class M extends Master
    {
    
    }

<a name="controller"></a>
#### Controller File `rootFolder / MS / B / Foo / C.php`
    <?php
    namespace B\MAS;
    
    //use B\MAS\R\AddMSCoreModule;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Http\Request;
    
    class C extends BaseController
    {
        use  DispatchesJobs, ValidatesRequests;
        
     public function index(){
     
        return true;
     
     }


​        
     }

<a name="table"></a>
#### Table File `rootFolder / MS / B / Foo / T /TableFileName.php`
    <?php
    
    return [
    
         'tableName'=>'Table Name',
         'connection'=>'db_connection',
         'fields'=>[],
    ];
    
    or
    
    $data=[
            'tableId'=>'Table ID',
            'tableName'=>'Table Name',
            'connection'=>'Table Connection',
            ];
    
    $table = new MS\Core\Helper\MSTableSchema($data);
    
    $tableData = $table->finalReturnForTableFile();
    
    return $tableData;

##### Available Fields for Table Column

<a name="inputgroups"></a>
###### Input Groups
Every Column should include in any Input Group to work with MS Frame Table Schema.
   
    $InputGroupName = "Input Group Name";
    $table->addGroup($InputGroupName);

<a name="locked"></a>
###### Locked Input
     $input= [
              'name'=>'columnName',
              'vName'=>'Input Display Name',
              'type'=>'string',
              'input'=>'auto',
              'callback'=>'callbackFunction',
              'inputInfo'=>"info Text"
            ];    
   
    $table->setFields($input);

<a name="text"></a>
###### Text Input
      $input= [
              'name'=>'columnName',
              'vName'=>'Input Display Name',
              'type'=>'string',
              'input'=>'text',
              'inputInfo'=>"info Text"
            ];     
    $table->setFields($input);

<a name="file"></a>
###### File Input
Array for File Input required key `storeTo` & pass storage disk name with dir location to store file & retrieve file when required.

    $input= [
      'name'=>'columnName',
      'vName'=>'Input Display Name',
      'type'=>'string',
      'input'=>'file',
      'inputInfo'=>"info Text",
      'storeTo'=>"MS-MASTER-Storage:MAS.UniqId.ModIcon->icon" 
    ];
    $table->setFields($input);     


MSForms
