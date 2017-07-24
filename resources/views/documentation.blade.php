<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Documentación Web Service</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <!-- <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <!-- Plugins CSS -->    
    <!-- <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css"> -->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="assets/plugins/prism/prism.css"> -->
    <link href="{{ asset('assets/plugins/prism/prism.css') }}" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css"> -->
    <link href="{{ asset('assets/plugins/elegant_font/css/style.css') }}" rel="stylesheet"> 
    
    <!-- Theme CSS -->
    <!-- <link id="theme-style" rel="stylesheet" href="assets/css/styles.css"> -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Pallet</span><span class="text-bold">Docs</span>
                        
                    </h1>
                </div><!--//branding-->
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Última actualización: 24 de julio de 2017</div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                             <section id="endpoint-section" class="doc-section">
                                <h2 class="section-title">End Points</h2>
                                <div id="company"  class="section-block">
                                    <h3 class="block-title">Objeto Company</h3>
                                    <p>Obtiene listado de Company,
                                    </p>
                                    <div class="code-block">
                                        <h6>URL</h6>
                                        <p><code>{{ url('/') }}/api/company</code></p>
                                        
                                    </div><!--//code-block-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Atributo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Name (string)</td>
                                                    <td>Nombre de la compañia</td>
                                                </tr>
                                                <tr>
                                                    <td>Ci_code (string) (único)</td>
                                                    <td>identificador único de empresa</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                     <pre><code class="language-javascript">
{
    "data":[
        {
        "name": "CompanyOne",
        "ci_code": "CompanyOneCode"
        },
        {
        "name": "CompanyTwo",
        "ci_code": "CompanyTwoCode"
        }
    ]
}
                                    </code></pre>

                                    
                                </div><!--//section-block-->

                                <hr><hr>


                                <div id="warehouse"  class="section-block">
                                    <h3 class="block-title">Objeto Warehouse</h3>
                                    <p>Obtiene listado de Warehouse,
                                    </p>
                                    <div class="code-block">
                                        <h6>URL</h6>
                                        <p><code>{{ url('/') }}/api/warehouse</code></p>
                                        
                                    </div><!--//code-block-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Atributo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Company_id(int)</td>
                                                    <td>Id de la compañía</td>
                                                </tr>
                                                <tr>
                                                    <td>Name(string)</td>
                                                    <td>Nombre de la bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>Code(string) (unico)</td>
                                                    <td>Identificador único de warehouse</td>
                                                </tr>
                                                <tr>
                                                    <td>Address(string)</td>
                                                    <td>Dirección de la bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>Number(string)</td>
                                                    <td>Número de la dirección de la bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>City(String)</td>
                                                    <td>Ciudad de la ubicación bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>Commune(String)</td>
                                                    <td>Comuna de la ubicación de la bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>Country(Srting)</td>
                                                    <td>País de la ubicación de la bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>Latitude(float)</td>
                                                    <td>Latitud de la bodega</td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude(float)</td>
                                                    <td>Longitud de la bodega</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                     <pre><code class="language-javascript">
{
"data": 
    [
        {
        "company_id": 1,
        "name": "WarehouseOne",
        "code": "WarehouseOneCode",
        "address": "Alameda",
        "number": "345",
        "city": "Santiago",
        "commune": "Santiago",
        "country": "Chile",
        "latitude": "56.678678",
        "longitude": "-98.345345"
        },
        {
        "company_id": 1,
        "name": "warehouseTwo",
        "code": "WarehouseTwoCode",
        "address": "Alameda",
        "number": "343",
        "city": "Santiago",
        "commune": "Santiago",
        "country": "Chile",
        "latitude": "67.678678",
        "longitude": "-78.45345234"
        }
    ]
}

                                    </code></pre>

                                    
                                </div><!--//section-block-->


                                                                <hr><hr>


                                <div id="client"  class="section-block">
                                    <h3 class="block-title">Objeto Client</h3>
                                    <p>Obtiene listado de clientes,
                                    </p>
                                    <div class="code-block">
                                        <h6>URL</h6>
                                        <p><code>{{ url('/') }}/api/clients</code></p>
                                        
                                    </div><!--//code-block-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Atributo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Name(string)</td>
                                                    <td>Nombre del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>ci_code(string) (unico)</td>
                                                    <td>Codigo del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>address(String)</td>
                                                    <td>Dirección del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>number(String)</td>
                                                    <td>Número de la dirección del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>city(String)</td>
                                                    <td>Ciudad de la dirección del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>Commune(String)</td>
                                                    <td>Comuna de la ubicación del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>Country(Srting)</td>
                                                    <td>País de la ubicación del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>logo(String)(opcional)</td>
                                                    <td>Logo de la empresa</td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude(float)</td>
                                                    <td>Longitud de la bodega</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                     <pre><code class="language-javascript">
{
  "data": [
     {
      "name": "ClientTwo",
      "ci_code": "ClientTwoCode",
      "address": "Alameda",
      "number": "765",
      "city": "Santiago",
      "commune": "Santiago",
      "country": "Chile",
      "logo": "clients/May2017/M60pCAmimaHsmu7sAwk1.png"
    },
    {
      "name": "ClientOne",
      "ci_code": "ClienOneCode",
      "address": "Alameda",
      "number": "56",
      "city": "Santiago",
      "commune": "Santiago",
      "country": "Chile",
      "logo": "clients/May2017/U5JiZQ6JdQWYZbgKbz9g.png"
    }
  ]
}


                                    </code></pre>

                                    
                                </div><!--//section-block-->

                                <hr><hr>

                                <div id="clientwarehouse"  class="section-block">
                                    <h3 class="block-title">Objeto ClientWareHouse</h3>
                                    <p>Obtiene listado de clientes con sus Warehouse,
                                    </p>
                                    <div class="code-block">
                                        <h6>URL</h6>
                                        <p><code>{{ url('/') }}/api/clientwarehouse</code></p>
                                        
                                    </div><!--//code-block-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Atributo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Client_id(int)</td>
                                                    <td>Id del cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>Warehouse_id(int)</td>
                                                    <td>Id del warehouse</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                     <pre><code class="language-javascript">
{
  "data": [
    {
       "client_id": 1,
      "warehouse_id": 1
    },
    {
       "client_id": 2,
      "warehouse_id": 1
    },
    {
     "client_id": 2,
      "warehouse_id": 2
    }
]
}



                                    </code></pre>

                                    
                                </div><!--//section-block-->
                                
                                <hr><hr>
                                                                <div id="users"  class="section-block">
                                    <h3 class="block-title">Objeto Usuarios</h3>
                                    <p>Obtiene listado de Usuarios,
                                    </p>
                                    <div class="code-block">
                                        <h6>URL</h6>
                                        <p><code>{{ url('/') }}/api/users</code></p>
                                        
                                    </div><!--//code-block-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Atributo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Email(string) (unico)</td>
                                                    <td>Nombre único de usuario (rut o usuario)</td>
                                                </tr>
                                                <tr>
                                                    <td>Warehouse_id(int)</td>
                                                    <td>Email del usuario</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                     <pre><code class="language-javascript">
{
"users": [
    {
      "name": "bodega",
      "email": "bodega@correo.cl"
    },
    {
      "name": "user",
      "email": "user@correo.cl"
    },
    {
      "name": "test",
      "email": "test@test.cl"
    }
  ]
}




                                    </code></pre>

                                    
                                </div><!--//section-block-->
                                <hr><hr>
                                                                                                <div id="warehouseuser"  class="section-block">
                                    <h3 class="block-title">Objeto WarehouseUser</h3>
                                    <p>Obtiene listado de bodegas con sus usuarios,
                                    </p>
                                    <div class="code-block">
                                        <h6>URL</h6>
                                        <p><code>{{ url('/') }}/api/warehouseuser</code></p>
                                        
                                    </div><!--//code-block-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Atributo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>User_id(int)</td>
                                                    <td>Id del usuario</td>
                                                </tr>
                                                <tr>
                                                    <td>Warehouse_id(int)</td>
                                                    <td>Id del warehouse</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                     <pre><code class="language-javascript">
{
  "data": [
    {
      "user_id": 2,
      "warehouse_id": 1,
},
    {
      "user_id": 3,
      "warehouse_id": 3
    },
    {
      "user_id": 4,
      "warehouse_id": 2
    }
  ]
}




                                    </code></pre>

                                    
                                </div><!--//section-block-->
                            </section><!--//doc-section-->
                            

                            
                            
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    <div class="doc-sidebar hidden-xs">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu" data-spy="affix">
                                
                                <li>
                                    <a class="scrollto" href="#endpoint-section">End Points</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#company">Objeto Company</a></li>
                                        <li><a class="scrollto" href="#warehouse">Objeto Warehouse</a></li>
                                        <li><a class="scrollto" href="#client">Objeto Client</a></li>
                                        <li><a class="scrollto" href="#clientwarehouse">Objeto ClientWareHouse</a></li>
                                        <li><a class="scrollto" href="#users">Objeto Usuarios</a></li>
                                        <li><a class="scrollto" href="#warehouseuser">Objeto WarehouseUser</a></li>
                                    </ul><!--//nav-->
                                </li>
                                
                            </ul><!--//doc-menu-->
                        </nav>
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        

        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Desarrollado por <a href="http://luislabra.cl">Luis Labra</a> <i class="fa fa-heart"></i> En  Laravel 5.4</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>                                                                
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

