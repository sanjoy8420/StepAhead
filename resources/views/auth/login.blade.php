<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>STEP_AHEAD</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>STEP_AHEAD</p>
        </div>
        <div class="nav-button">
            <button class="btn" id="registerBtn">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <header>Login</header>
            </div>

            @if (Session::has('error'))
              <p class="text-danger">{{ Session::get('error') }}</p>
            @endif  
            @if (Session::has('success'))
              <p class="text-success">{{ Session::get('success') }}</p>
            @endif  



            <form action="{{url('/')}}/login" method="post">
                @csrf
               
                        <div class="input-box email">
                            <input type="email" name="email" class="input-field" placeholder="Email">
                            <i class="bx bx-user"></i>
                            @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                             @endif

                        </div>

                        <div class="input-box">
                            <input type="password" name="password" class="input-field" placeholder="Password">
                            <i class="bx bx-lock-alt"></i>
                            @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                             @endif
                        </div>
                        <div class="input-box">
                            <input type="submit" class="submit" value="Sign In">
                        </div>
                        <div class="two-col">
                            <div class="one">
                                <input type="checkbox" id="login-check">
                                <label for="login-check">Remember Me</label>
                            </div>
                            <div class="two">
                                <label><a href="#">Forgot password?</a></label>
                            </div>
                        </div>
         
        </div>
     </div> 
</form>       
</body>
</html>