<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- <link href="css/adcss.css" rel="stylesheet"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/55e049a8af.js" crossorigin="anonymous"></script>

    <title>Crud Siswa</title>
   
</head>
<body class="bg-light">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom fixed-top bg-dark">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4 text-light" style="font-family: cursive;">Aplikasi Crud Siswa</span>
        </a>
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="/siswa" class="nav-link active" aria-current="page"> <i class="fa-regular fa-user"> siswa</i></a></li>
          <li class="nav-item"><a href="/sesi/logout" class="nav-link text-light" aria-current="page">Logout</li>
        </ul>
      </header> 
    <div class="wrapper">
       
        <div class="sidebar-wrapper">
            <ul class="sidebar-nav">
                <br>
                <br>
                <br>
                <li>
                    <a href="/siswa" class="p"><i class="fa-solid fa-graduation-cap"> Siswa </i></a>
                </li>
                <li>
                    <a href="/agama" class="p"><i class="fa-solid fa-person-praying"> Agama</i></a>
                </li>
                <li>
                    <a href="/hobi" class="p"><i class="fa-regular fa-futbol"> Hobi</i></a>
                </li>
            </ul>
        </div>        
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         @yield('apa')
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>





<style>
    body {
    overflow-x: hidden;
 }

.sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #212529;
    
}

.wrapper.toggled .sidebar-wrapper {
    width: 250px;
}

.page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

.wrapper.toggled .page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}



.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.nyala{
    background: #304ffe;
}
.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: white;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: white;
    background: grey;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: grey;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: white;
    background: none;
}

    .wrapper {
        padding-left: 250px;
    }

    .wrapper.toggled {
        padding-left: 0;
    }

    .sidebar-wrapper {
        width: 250px;
    }

    .wrapper.toggled .sidebar-wrapper {
        width: 0;
    }

    .page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    .wrapper.toggled .page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
    

</style>


<script>
    const windowPathname = window.location.pathname;
    const navLinkEls = document.querySelectorAll('.p');
    
   
    navLinkEls.forEach(navLinkEL=>{
       if (navLinkEL.href.includes(windowPathname)){
           navLinkEL.classList.add('nyala');
       }
    })
   </script>

   {{-- <script>
    const activePage = window.location.pathname;
    const navLinkEls = document.querySelectorAll('.p').
    forEach(link => {
        if(link.href.includes(`${activePage}`)){
            link.classList.add('nyala');
        }
    })
   </script> --}}

   {{-- <script>
    sidebar = document.querySelector('.sidebar-nav').querySelectorAll('p');
    console.log(sidebar);

    sidebar.forEach(element =>{
        element.addEventlistener("click", function(){
            sidebar.forEach(nav=>nav.classList.remove('nyala'))

            this.classList.add('nyala');
        })
    })
   </script> --}}