@extends('backend.layout.main1')

@section('main_section')

<body class="bg-silver-300">
@include('sweetalert::alert')
    <div class="content">
        <div class="brand">
            <a class="link" href="dashboard">Cosmetic Admin</a>
        </div>
        <form id="register-form" action="{{url('/register')}}" method="post" style="background-image: url({{url('frontend/images/bk1.jpg')}})";>
        @csrf
            <h2 class="login-title">Sign Up</h2>
            <div class="form-group-6">
                    <div class="form-group">
                        <input class="form-control" type="text"  value="{{old('name')}}" name="name" placeholder=" Name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                       
            <div class="form-group">
                <input class="form-control" type="email"  value="{{old('email')}}" name="email" placeholder="Email" autocomplete="off">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control" id="password"  value="{{old('password')}}" type="password" name="password" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
           
            <div class="form-group text-left">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox" name="agree">
                    <span class="input-span"></span>I agree the terms and policy</label>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" name="submit" type="submit">Sign up</button>
            </div>
           
            
            <div class="text-center">Already a member?
                <a class="color-blue" href="login">Login here</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
   
    <script type="text/javascript">
        $(function() {
            $('#register-form').validate({
                errorClass: "help-block",
                rules: {
                    first_name: {
                        required: true,
                        minlength: 2
                    },
                    last_name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        confirmed: true
                    },
                    password_confirmation: {
                        equalTo: password
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
@endsection