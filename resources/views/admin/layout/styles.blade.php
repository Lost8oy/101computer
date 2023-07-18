


<!-- A As you can see from as you can see this file only contains styles relevant to your application and nothing else.
These styles are injected into your master.blade.php file through the includes method.


If you now open your project using windows explorer and find your way to the public folder within your application you will see a folder called
Backend-theme. Within this folder is an (asset folder) and within this folder, are all the parts needed to make up the style, look and feel of your application including images, CSS and JavaScript files.



Going back to your styles.blade.php file you can see the file reference path and example being:  href="{{asset('/backend-theme/assets/images/favicon.ico')}}"
Note the blade syntax href="{{asset('/backend-theme/some-path/some-file')}}"

Now go back to the master blade page.
-->



<!-- App favicon -->
  <link rel="shortcut icon" href="{{asset('/backend-theme/assets/images/favicon.ico')}}">
<!-- twitter-bootstrap-form-wizard css -->
 <link rel="{{asset('/backend-theme/assets/libs/twitter-bootstrap-wizard/prettify.css')}}">
 <!-- jquery.vectormap css -->
 <link href="{{asset('/backend-theme/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
 <!-- DataTables -->
 <link href="{{asset('/backend-theme/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
 <link href="{{asset('/backend-theme/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- Bootstrap Css -->
 <link href="{{asset('/backend-theme/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="{{asset('/backend-theme/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="{{asset('/backend-theme/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
 <!-- App toastr-->
 <link href="{{asset('/backend-theme/assets/libs/toastr/css/toastr.css')}}" id="app-style" rel="stylesheet" type="text/css" />
