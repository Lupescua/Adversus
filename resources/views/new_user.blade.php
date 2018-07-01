@extends('layout') @section('title') Adversus_User @endsection @section('content')
<style>
    .round_image {
        background:url("/img/{{$user->image}}") center no-repeat !important;
        background-size: cover;
    }

</style>
<div class="container">

    <div class="header">
        <h1>Hey {{$user->firstname}},</h1>
        <hr>


        <form action="{{ action('UserController@store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}


            <!--Set Photo -->
            <div class="form-row">
                <div class="img-responsive">
                    <div class="round_image"></div>
                </div>
            </div>
            <!--End of Set Photo -->

            <!--User First & Last Name -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">First Name</label>
                    <input name="firstname" type="text" class="form-control" id="validationDefault01" placeholder="{{$user->firstname}}" value="{{$user->firstname}}"
                        required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Last Name</label>
                    <input name="lastname" type="text" class="form-control" id="validationDefault02" placeholder="{{$user->lastname}}" value="{{$user->lastname}}"
                        required>
                </div>
            </div>
            <!--End of User First & Last Name -->

            <!--User Email and Phone -->
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultEmail">Email</label>
                    <div class="input-group">
                        <input name="email" type="email" class="form-control" id="validationDefaultEmail" placeholder="{{$user->email}}" value="{{$user->email}}"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefaultPhone">Phone Number</label>
                    <input name="phone_number" type="text" class="form-control" id="validationDefaultPhone" placeholder="{{$user->phone_number}}"
                        value="{{$user->phone_number}}" required>
                </div>
            </div>
            <!--End of User Email and Phone -->

        </form>

        @endsection
