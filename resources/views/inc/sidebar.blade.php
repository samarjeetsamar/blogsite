<div class="widgets">
    <div class="sidebar_il about-me">
        <h3><span>about me</span></h3>
        <div class="thumbnail">
            <img src="{{ URL::asset('images/about-img.png')}}" class="img-responsive img-circle" alt="....">
        </div>
        <p>
            hi, my name is jane doe. I am traveler, writer, blogger Loremss psm dolor sit amet, consectetur adipisicing elit.
        </p>
    </div>
    <div class="sidebar_il follow-me">
        <h3> <span>follow me</span></h3>
        <div class="social-icon">
            <ul class="list-inline">
                <li>
                    <a href=""><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="fa fa-pinterest"></i></a>
                </li>
            </ul>
        </div>
        <div class="banner-spot">   
            <img src="{{ URL::asset('images/banner-spot.png')}}" class="img-responsive" alt="....">
        </div>
    </div>
    <div class="sidebar_il subscribe">
        <h3><span>subscribe</span></h3>
        <p>Enter your email address to subscribe this blog and receive notifications of new posts by email.</p>
        <form>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="sidebar_il popular-post">
        <h3><span>popular posts</span></h3>
        <div class="post-block">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="#">
                        <img src="{{URL::asset('images/post-img1.png')}}" class="img-responsive" alt="....">
                       
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="caption">
                        <span>
                            <h6>27 March 2016 </h6> 
                            <h5>does happiness really exist</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-block">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="#">
                        <img src="{{URL::asset('images/post-img1.png')}}" class="img-responsive" alt="....">
                        
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="caption">
                        <span>
                            <h6>27 March 2016 </h6> 
                            <h5>Be honest with yourself</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div> 
        <div class="post-block">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <a href="#">
                        <img src="{{URL::asset('images/post-img1.png')}}" class="img-responsive" alt="....">
                        
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="caption">
                        <span>
                            <h6>27 March 2016 </h6> 
                            <h5>things that inspire me the most</h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_il category">
        <h3><span>categories</span></h3>
        <div class="category-list">
            
            <ul>

                @foreach($category as $cat)
                <li>
                    <a href="#">{{ $cat->category_name }} </a>
                    <span>42</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar_il tags">
        <h3><span>tags</span></h3>
        <div class="tags-list">
            <ul class="list-inline">
                <li>
                    <a href="#">lifestyle</a>
                </li>
                <li>
                    <a href="#">fashion</a>
                </li>
                <li>
                    <a href="#">inspiration</a>
                </li>
                <li>
                    <a href="#">travel</a>
                </li>
                <li>
                    <a href="#">movies</a>
                </li>
                <li>
                    <a href="#">health</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="sidebar_il instagram">
        <h3><span>instagram</span></h3>
        <div class="instagram-img">
            <ul class="list-inline">
                <li>
                    <a href="#">
                         <img src="{{URL::asset('images/insta-img1.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img2.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img3.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img4.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img5.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img6.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img7.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img8.png')}}"  alt="....">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{URL::asset('images/insta-img9.png')}}"  alt="....">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> 