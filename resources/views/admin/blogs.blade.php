@extends('layouts.adminLayout')

@section('css')
@endsection

@section('content')
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1> Dashboard </h1>
      	<ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        	<li class="active">Dashboard</li>
     	</ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('message'))
					<div class="alert alert-info">{{ Session::get('message') }}   </div>
				@endif
            </div>
            <div class="col-md-12">
                <table id="blogListing" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>Title</th>
                            <th>Content</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $val )
                            <tr>
                                <td> <input type="checkbox" /></td>
                                <td> {{  $val->post_title  }}  </td>
                                <td>  {{  $val->post_content  }} </td>
                                <td>
                
                                    <span>
                                        <a href="javascript:void(0);" class="dltbtn" onclick="return confirm_before_delete('{{ $val->id }}');"><i class="fa fa-edit text-info"></i></a>
                                    </span>
                                    <span>
                                        <a href="javascript:void(0);" class="dltbtn" onclick="return confirm_before_delete('{{ $val->id }}');"><i class="fa fa-trash text-danger"></i></a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                            <tr> <td>  </td> </tr>
                    </tbody>
                </table>
            </div>
        </div>
	</section>
    <!-- / . Main content -->
	
@endsection


@section('scripts')

<link rel="stylesheet" href="{{ url('public/admin/plugins/datatables/dataTables.bootstrap.js') }}">
<link rel="stylesheet" href="{{ url('public/admin/plugins/datatables/jquery.dataTables.js') }}">

<script type="text/javascript">
    $(document).ready(function() {
        $('#blogListing').DataTable( {
        });
    });

    function confirm_before_delete(id){
        window.location.href = "{{ url('admin/post-delete') }}/" + id;
    }

</script>

@endsection