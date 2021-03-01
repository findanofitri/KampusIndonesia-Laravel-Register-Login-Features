<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Kampus</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('superadmin.layout.header')
    @stack('css-script')
  </head>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Dashboard</h2>
            <p>Role : Admin</p>
            <a href="/logout" ><p>Logout</p></a>
            <hr>
            <ul>
                <li><a href="#">Profile Saya</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Informasi</a></li>
            </ul> 
        </div>    
        <div class="main_content"> 
            <div class="info">  
                @yield('content')  
            </div>
        </div>
    </div>                
  @include('superadmin.layout.footer')
  @stack('js-script')
</body>
</html>