@extends('layouts.homepageLayout')

@section('content')

    @if(!empty($data))
    @foreach($data as $postval)
    <div class="article">
        <div class="caption">
            <h6> {{   $postval->category_ID }}  </h6>
            <p>{{   $postval->post_title }}</p>
            <h6>{{   $postval->created_at }}</h6>
        </div>
        <div class="article-body">
            <div class="content">
                <div class="thumbnail">
                   {{ $postval->post_content }}
                </div>
            </div>
            <div class="response-block">
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
                <div class="comment">
                    <h5>16 comments</h5>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="readmore">
                <a href="#"><span>read more</span></a>
            </div>
        </div>
    </div>

    @endforeach

    @endif


    <div class="article">
        <div class="caption">
            <h6>lifestyle</h6>
            <p>
                spring is the great time to fall in love with somebody
            </p>
            <h6>23 march 2016</h6>
        </div>
        <div class="article-body">
            <div class="content">
                <div class="thumbnail">
                    <img src="{{asset('public/images/art-img1.jpg')}}" alt="....">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="response-block">
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
                <div class="comment">
                    <h5>16 comments</h5>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="readmore">
                <a href="#"><span>read more</span></a>
            </div>
        </div>
    </div>
    
    <div class="older-posts">
        <a href="#">
            <span>Older Posts <i class="fa fa-long-arrow-right"></i></span>
        </a>
    </div>
                
@endsection
