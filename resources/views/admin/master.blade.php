


<!--Master page what is it for?
Think of your master page as your main structure or template component, which holds all your MAIN page features
Such as your menu, header, footer and anything else you want to appear on every page within your application.
Your master page is essentially your standard HTML page. It consists of your header and body parts.
This will be the main entry point.

-->



<!doctype html>
<html lang="en">
    <head>
         <meta charset="utf-8" />
        <title>Dashboard | Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

       <!--(1)  
          Within the header page component I have added a reference using the @INCLUDES() method, this method takes one argument which is the path to the 
         Page you want to include. Note that here I am referencing the styles blade, within the ADMIN LAYOUT folder,
         as the first thing we would normally require is a reference to our page styles.
         Open the views/layout/styles.blade.php file and take a look  -->
        @include('admin.layout.styles')

    </head>



    <!--(2)
    As you can now see as well as the header
    @include('admin.layout.styles') within the body    <body></body>
    section we have now included a header  sidebar and footer, and finally we inject through the INCLUDES(), method the JavaScript files which follow , the same  


    IMPORTANT NOTE:
    within the body main-content div, the inclusion of the @yield('admin') method, this is a onetime call to your index fill whichalong with your
    other compents will be injected at runtime into your master template.
    -->



    <body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
          @include('admin.layout.header')

          @include('admin.layout.sidebar')

         <div class="main-content">
           @yield('admin')
           <!-- End Page-content -->
           @include('admin.layout.footer')
            </div>
            <!-- end main content-->
        </div>
        <div class="rightbar-overlay"></div>



        <!-- Import Javascript files here -->
        @include('admin.layout.scripts')


        <script>
            @if(Session::has('message'))
            let type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;
               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;
               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;
               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
            @endif
           </script>
    </body>

</html>


 <!--(3)
    Now lets look at your index blade page! 
    -->
