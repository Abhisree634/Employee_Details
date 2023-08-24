<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="super_container">
	
        <!-- Header -->
        
        <header class="header">
    
            <!-- Top Bar -->
    
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111</div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">savebloodlife@gmail.com</a></div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                    </ul>
                                </div>
                                <br>
                                <div class="top_bar_user">
        
                                 <div><a href="{{route('login')}}"><i class="fas fa-chevron-down"><h3 style="background-color:rgba(49, 151, 27, 0.341);">Sign in</h3></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
            </div>
    
            <!-- Header Main -->
    
            <div class="header_main">
                <div class="container">
                    <div class="row">
    
                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-1 col-2 order-1">
    
                            <div class="logo_container">
                                <h2 style="background-color:rgb(255, 30, 30);">BLOOD </h2>
                                <h4 style>MANAGEMENT </h4>
                                <a href="#"></a></div>
                            </div>
                        </div>
    
                      </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Navigation -->
    
            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <div class="main_nav_content d-flex flex-row">
                                   <div class="main_nav_menu">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="{{route('Public.user')}}"><h4 style="background-color:rgb(26, 9, 9);">Blood Bank </h4><i class="fas fa-chevron-down"></i></a></li>
                                        <li class="hassubs">
                                        </li>
                                    </ul>
                                   </div>
    
                                <!-- Menu Trigger -->
    
                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Menu -->
    
            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <div class="page_menu_content">
                                
                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                    </form>
                                </div>
                                    <li class="page_menu_item">
                                        <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    
                     
    
        </div>
    
    </div>
</body>
</html>