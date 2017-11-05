<div class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-header">
                        <h1>
                            <a href="/">selena</a>
                        </h1>
                    </div>  
                </div>
            </div>
        </div>
</div>
    
<div class="menu-section border-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="social-icon">
                    <ul class="list-inline">
                        <li class="active">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xs-hidden">
                <div class="header-menu">
                    <ul class="list-inline text-right">
                        <li class="{{Request::is('/') ? 'active' : ''}}"> 
                            <a href="{{url('/')}}">Home </a>
                        </li>
                        <li> 
                            <a href="#">Lifestyel </a>
                        </li>
                        <li> 
                            <a href="#">inspiration</a>
                        </li>
                        <li> 
                            <a href="#">travel</a>
                        </li>
                        <li class="{{Request::is('/aboutus') ? 'active' : ''}}"> 
                            <a href="{{url('/aboutus')}}">About </a>
                        </li>
                        <li class="{{Request::is('/contact') ? 'active' : ''}}"> 
                            <a href="{{url('/contact')}}">contact</a>
                        </li>
                        <li> 
                            <a href="#"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                 </div>
            </div>
            <div id="dl-menu" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                    <li class="active"> 
                        <a href="index.html" class="active">Home </a>
                    </li>
                    <li> 
                        <a href="#">Lifestyel </a>
                    </li>
                    <li> 
                        <a href="#">inspiration</a>
                    </li>
                    <li> 
                        <a href="#">travel</a>
                    </li>
                    <li> 
                        <a href="#">About </a>
                    </li>
                    <li> 
                        <a href="#">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> 