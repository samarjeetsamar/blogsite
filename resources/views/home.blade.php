@extends('layouts.homepageLayout')

@section('content')

    @if(!empty($data))
        @foreach($data as $postval)
        <div class="article">
            <div class="caption">
                <h6>{{ $postval->category->category_name }} </h6>
                <p> {{ $postval->post_title }}</p>
                <h6>{{ $postval->created_at }}</h6>
            </div>
            <div class="article-body">
                <div class="content">
                    <div class="thumbnail">
                    <?php
                        $image = '';
                        if( !empty($postval->post_image) && File::exists(public_path('uploads/'.$postval->post_image)) ){
                            $image = URL::asset('uploads').'/'.$postval->post_image;
                        }
                        else{
                            $image = get_dummy_image();
                        }
                    
                    ?>
                    <img src="{{ $image }}" class="img-responsive" alt="" title="" />
                    <p> {{ strip_tags($postval->post_content) }} </p>
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
                        <h5> {{ $postval->comments->count() }}  comments</h5>
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

    <div class="older-posts">
        <a href="#">
            <span>Older Posts <i class="fa fa-long-arrow-right"></i></span>
        </a>
    </div>
@endsection

@section('Script')
<script>
console.log("alert on home page");
</script>
@endsection
