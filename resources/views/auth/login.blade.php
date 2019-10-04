<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stock Managemetn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Theme initialization -->
</head>

<body>
    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                        Stock Management System
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-center">LOGIN TO CONTINUE</p>
                    <form method="POST" action="{{ route('login') }}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control underlined" name="username" id="username" placeholder="Your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                        <p class="text-danger text-center">
                            @if(count($errors)>0)
                                Invalid email or password!
                            @endif
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>