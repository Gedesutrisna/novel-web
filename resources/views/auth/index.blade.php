<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Register</title>
    <link rel="stylesheet" href="/css/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        @include('sweetalert::alert')

        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="/asset/img-6.jpeg" alt="">
            </div>
            <div class="back">
                <img class="backImg" src="/asset/img-2.jpg" alt="">
            </div>
        </div>
        <div class="form-content">
            <form action="/login" method="POST">
                @csrf
                <div class="login-form">
                    <div class="title">Sign In</div>
                    <div class="text">If you don't have an account register</div>
                    <div class="text-2">You can <label for="flip">Register here !</label></div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input name="email" value="" type="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input name="password" value="" type="password" placeholder="Enter your password" required>
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Login">
                        </div>
                    </div>
                </div>
            </form>
            <form action="/register" method="POST">
                @csrf
                <div class="register-form">
                <div class="title">Sign Up</div>
                <div class="text">If you already have an account register</div>
                <div class="text-2">You can <label for="flip">Login here !</label></div>
                <div class="input-boxes">
                    <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input name="name" value="" type="text" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input name="email" value="" type="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input name="password" value="" type="password" placeholder="Enter your password" required>
                    </div>
                    <div class="button input-box">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>