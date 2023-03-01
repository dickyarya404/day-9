@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')
    <div class="container">
        <div class="row">
         <div class="col-md-8-col-md-offset-2">
            <div class="panel panel-default">
                  <div class="panel-heading">Set Up Google Authenticatir</div>
                  <div class="panel-body" style="text-align: center">
                     <p> Set Up two factor authenticatior by scaning the barcode below, Alternatively, you can use the coded {{('pragmax.google2fa')}} </p>
                     <div>
                        {!! $QR_Image !!}
                     </div>
                     <p>
                        you must set up Google Authenticatir app before countoning. You will be unable to login otherwise
                     </p>
                     <div>
                        <a href="/complete-registration"><button class="btn-primry">Complate Registration</button></a>
                     </div>
                  </div>
            </div>
         </div>
        </div>
    </div>
@endsection

