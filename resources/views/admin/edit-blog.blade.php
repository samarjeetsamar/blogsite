@extends('layouts.adminLayout')

@section('content')
		
    <section class="content-header">
		<h1>
			Update Blog
        </h1>
      	<ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        	<li class="active">Update Blog</li>
      	</ol>
    </section> 

    <section class="content">
		<div class="row">
			<div class="col-md-12">
				@if (Session::has('message'))
					<div class="alert alert-info alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					{{ Session::get('message') }}
					</div>
				@endif
			</div>

			<div class="col-md-12">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/form-update-blog') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="post_id"  value=" {{ $data['id'] }}" />
					<div class="form-group">
						<div class="col-md-12">
							<input type="text" name="title" class="form-control" value=" {{ $data['post_title'] }}" id="title">
							@if ($errors->has('title'))
								<p class="error text-danger">{{ $errors->first('title') }}</p>
							@endif
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							
							<textarea id="some-textarea" name="content"  style="width:100%;">{{ $data['post_content'] }} </textarea>
							@if ($errors->has('content'))
								<p class="error text-danger">{{ $errors->first('content') }}</p>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							
							@if(!empty($category))
								@foreach ($category as $catval)
								<label>
									<input type="checkbox" <?php echo ($catval->id == $data['category_ID']) ? 'checked' : '' ; ?>  name="category[]" value="{{ $catval->id }}">
									 {{ $catval->category_name }}
								</label>
								@endforeach
							@else
								<P>No category exist</p>
							@endif
							
							@if ($errors->has('category'))
								<p class="error text-danger">{{ $errors->first('category') }}</p>
							@endif
							<p>
								<a href="javascript:void(0)"> Add new category </a>
							</p>


							 <?php
								$image = '';
								if( !empty($data['post_image']) && File::exists(public_path('uploads/'.$data['post_image'])) ){
									$image = URL::asset('uploads').'/'.$data['post_image'];
								}
								else{
									$image = get_dummy_image();
								}
							?>
							<div style="width: 300px; overflow:hidden; margin-bottom: 10px;">
							<img src="{{ $image }}" class="img-responsive" alt="" title="" />
							</div>

							<input type="file" name="postthumbnail" id="fileToUpload">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary ">POST</button>
						</div>
					</div>	
				</form>
			</div>
		</div>
    </section>

@endsection

@section('scripts')


<script type="text/javascript">
    $('#some-textarea').wysihtml5();
</script> 

@endsection