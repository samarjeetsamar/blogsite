@extends('layouts.adminLayout')

@section('content')
		
    <section class="content-header">
		<h1>
			Add New Blog
        </h1>
      	<ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        	<li class="active">Add New Blog</li>
      	</ol>
    </section> 

    <section class="content">
		<div class="row">
			<div class="col-md-12">
				@if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif
			</div>

			<div class="col-md-12">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/submit-blog') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<div class="col-md-12">
							<input type="text" name="title" class="form-control" id="title">
							@if ($errors->has('title'))
								<p class="error text-danger">{{ $errors->first('title') }}</p>
							@endif
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12">
							<textarea id="some-textarea" name="content" placeholder="Enter text ..." style="width:100%;"></textarea>
							@if ($errors->has('content'))
								<p class="error text-danger">{{ $errors->first('content') }}</p>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<!-- <select name="category" id="" class="form-control">
								<option value=""> Select category </option>
								@if(!empty($category))
									@foreach ($category as $catval)
									<option value="{{ $catval->id }}">{{ ucfirst($catval->category_name)  }}</option>
									@endforeach
								@endif
							</select> -->
							@if(!empty($category))
								@foreach ($category as $catval)
								<label>
									<input type="checkbox" name="category[]" value="<?php echo $catval->id; ?>"> <?php echo $catval->category_name; ?>
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