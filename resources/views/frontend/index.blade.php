<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
    url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

body{

background-color: #eee;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
  color: #495057;
  background-color: transparent;
  border-color: transparent;
  border-bottom: 3px solid #000;

}

.nav-tabs>li>a{

text-transform: uppercase;
color: #000;
    font-weight: 500;
}

.gambar {
  width: 420px;
  height: 300px;
  border-radius: 20px;
}

.nav-tabs .nav-link:hover {
  border-color: transparent;
  border-bottom: 3px solid #000
}

.navbar{

    border-bottom: 1px solid #00000012;
    padding-top: 0rem !important;
    padding-bottom: 0rem !important;
        background-color: #ffffff!important;
}

.navbar-brand{

font-size: 24px;
text-transform: uppercase;
font-family: 'Allerta Stencil', sans-serif;
font-weight: 500;
}

.nav-tabs {
  border-bottom: none;
}

.card{

border:none;

}

.card-body {
  flex: 1 1 auto;
  padding: 10px;
}

.card-text{

font-size: 13px;
}

.guarantee{

color: #05882c;
margin-left: 4px;
font-weight: 700

}

hr{
  margin: 0.2rem 0;
 color: #bfbebe;
}

.buttons button{

text-transform: uppercase;
font-size: 12px;
border-radius: 2px;
}
    </style>
  </head>
  <body>
    <div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
        <div class="container-fluid d-flex"> <a class="navbar-brand" href="#">ARM</a>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="/" role="tab" aria-controls="home" aria-selected="true">vivo</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="/fapple" role="tab" aria-controls="profile" aria-selected="false">apple</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/fsamsung" role="tab" aria-controls="contact" aria-selected="false">samsung</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/fmacbook" role="tab" aria-controls="contact" aria-selected="false">macbook</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/fcpu_gaming" role="tab" aria-controls="contact" aria-selected="false">cpu gaming</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/faksesoris_komputer" role="tab" aria-controls="contact" aria-selected="false">aksesoris komputer</a> </li>
            </ul>
        </div>
    </nav>
</div>
@yield('isi')
  </body>
</html>
