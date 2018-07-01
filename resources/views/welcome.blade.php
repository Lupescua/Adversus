@extends('layout') @section('title') Adversus_User @endsection @section('content')
<!-- I choose to build a background div containing Menu on the left & Form on the right. For the Form I used a .container class for no other reason that I started like that and have a personal fetish for that class-->
<div class="d-flex flex-row" id="background">
    <div id="menu">
        <a class="nav-item nav-link menu_buttons active" href="#">
            <img src="/img/phone_cut.png" alt="">
            <span class="sr-only">(current)</span>
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/phone.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        <a class="nav-item nav-link menu_buttons disabled" href="#">
            <img src="/img/calendar.png" alt="">
        </a>
        </nav>
    </div>


    <div class="container col-md-6 mb-6">

        <!-- Redundant code to see errors in a list. Even ones that are a bit more hidden  -->
        <!-- @if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{{ $message }}</strong>
		</div>
		<img src="/images/{{ Session::get('path') }}">
		@endif -->


        <h1>Edit Profile</h1>
        <hr>
        <form action="{{ action('UserController@store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="d-flex flex-row">
                <div class="img-responsive">
                    <div class="round_image"></div>
                </div>
                <!--Upload Photo -->
                <div id="upload_photo">
                    <input type="file" class="image_upload_button" name="image" id="file" required>
                    <span style="color:red">{{$errors->first('image')}}</span>
                    <p>
                        <small>Minimum size is 250 x 250 px</small>
                    </p>
                    <p>
                        <small>Only JPG and PNG is allowed</small>
                    </p>
                </div>
                <!--End of Upload Photo -->
            </div>

            <!--User First & Last Name -->
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefault01">First Name</label>
                    <input name="firstname" type="text" class="form-control" id="validationDefault01" placeholder="{{old('firstname')}}" value="{{old('firstname')}}"
                        required>
                    <span style="color:red">{{$errors->first('firstname')}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Last Name</label>
                    <input name="lastname" type="text" class="form-control" id="validationDefault02" placeholder="{{old('lastname')}}" value="{{old('lastname')}}"
                        required>
                    <span style="color:red">{{$errors->first('lastname')}}</span>
                </div>
            </div>
            <!--End of User First & Last Name -->

            <!--User Email and Phone -->
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationDefaultEmail">Email</label>
                    <div class="input-group">
                        <input name="email" type="email" class="form-control" id="validationDefaultEmail" placeholder="{{old('email')}}" value="{{old('email')}}"
                            aria-describedby="inputGroupPrepend2" required>
                        <span style="color:red">{{$errors->first('email')}}</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationDefaultPhone">Phone Number</label>
                    <input name="phone_number" type="text" class="form-control" id="validationDefaultPhone" placeholder="{{old('phone_number')}}"
                        value="{{old('phone_number')}}" required>
                    <span style="color:red">{{$errors->first('phone_number')}}</span>
                </div>
            </div>
            <!--End of User Email and Phone -->
            <hr>
            <!--User Password -->
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="inputPassword">Password</label>
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    <span style="color:red">{{$errors->first('password')}}</span>
                </div>
                <!-- Check if pass confirm = pass -->
                <div class="col-md-6 mb-3">
                    <label for="repeatPassword">Repeat password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="repeatPassword" placeholder="Password" required>
                    <span style="color:red">{{$errors->first('password_confirmation')}}</span>
                </div>
            </div>
            <!--End of User Password-->

            <div class="form-row bottom">
                <div class="col-md-12 mb-6 d-flex flex-row-reverse">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>

        </form>

    </div>
</div>

@endsection
