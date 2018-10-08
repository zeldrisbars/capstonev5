<html>
    <head>
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:145px;">
                <div class="col-md-7">
                    <h1 class="text-center text-muted" style="font-size:70pt;">Oops!</h1>
                    <p class="lead text-center text-muted" style="font-size:30pt;">We can't seem to find the page you're looking for.</p>
                    <p class="text-muted text-center lead">Error code: 404</p>
                    <p class="text-muted text-center lead">Perhaps would you like to go to <a href="{{ route('login') }}">Previous</a> Page</p>
                </div>
                <div class="col-md-5">
                     <img src="{{ asset('images/restrict.png') }}" style="max-width:350px;">
                </div>
            </div>
        </div>
    </body>
    </html>
    