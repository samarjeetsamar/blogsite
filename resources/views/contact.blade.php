@extends('layouts.homepageLayout')

@section('content')
    <div class="contact-sidebar">
						<h1>Send me a message!</h1>
						<p>
							Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like.
						</p>
						<form  role="form">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="form-group">
										<div class="caption">
										    <label for="email" class="label-effect">Email address*</label>
										    <input type="email" class="form-control input-change" id="email">
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="form-group">
										<div class="caption">
										    <label for="name" class="label-effect">Name*</label>
										    <input type="text" class="form-control input-change" id="name">
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									<div class="form-group">
										<div class="caption">
										    <label for="website" class="label-effect">Website</label>
											<input type="text" name="website" class="form-control input-change" id="web">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<div class="caption">
											<label for="message" class="label-effect">Message</label>
											<textarea class="form-control txt" id="msg" rows="10"></textarea>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-default btn-sky">Submit</button>
						</form>
</div>
@endsection


