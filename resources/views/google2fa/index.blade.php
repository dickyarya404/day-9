@extends('auth.layouts.auth')

@section('body_class', 'login')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:70vh;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading font-weight-bold">Register</div>
                <br>
                @if($errors->any())
                    <div class="cold-md-12">
                        <div class="alert alert-danger">
                            <strong>{{$errors->first()}}</strong>
                        </div>
                    </div> 
                @endif    
                
                <div class="panel-body">
                    <form class="form horizontal" method="post" action="{{ route('2fa') }}">
                        {{ csrf_field() }}

                        <div class="from group">
                            <p>Please enter the <strong>OTP</strong> generated on you Authenticator App. <br> Ensure you submit</p>
                            <label for="one_time_password" class="col-md-4 control-label">One Tiem Password</label>

                            <div  class="col-md-6">
                                <input type="number" id="one_time_password" class="from-control" name="one_time_password" require>
                            </div>
                        </div> 

                        <div class="from group">
                            <div class="col-md-6 col-md-offset-4 mt-3">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
    @parent

    {{ html::style(mix('assets/auth/css/login.css')) }}
    @endsection