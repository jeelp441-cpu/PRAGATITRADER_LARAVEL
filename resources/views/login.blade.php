<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | Pragati Traders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    min-height:100vh;
    background: radial-gradient(circle at top, #66bb6a, #1b5e20);
    font-family: 'Segoe UI', sans-serif;
    overflow: hidden;
}

/* BRAND TITLE */
.brand-title{
    position:absolute;
    top:30px;
    width:100%;
    text-align:center;
    font-size:38px;
    font-weight:900;
    letter-spacing:3px;
    background: linear-gradient(to right, #e8f5e9, #a5d6a7);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* LOGIN CONTAINER */
.login-wrapper{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.login-card{
    width:900px;
    background:rgba(255,255,255,0.85);
    backdrop-filter: blur(18px);
    border-radius:30px;
    box-shadow:0 40px 80px rgba(0,0,0,0.4);
    overflow:hidden;
    animation: fadeUp 1s ease;
}

@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

/* LEFT */
.login-left{
    background: linear-gradient(145deg, #1b5e20, #66bb6a);
    color:white;
    padding:70px 50px;
}

.login-left h2{
    font-weight:900;
}

.login-left p{
    font-size:18px;
    opacity:0.95;
}

.login-left img{
    width:100%;
    border-radius:25px;
    margin-top:35px;
    box-shadow:0 20px 40px rgba(0,0,0,0.35);
}

/* RIGHT */
.login-right{
    padding:70px 50px;
}

.login-right h3{
    font-weight:800;
    color:#1b5e20;
}

/* FLOATING INPUTS */
.form-floating>.form-control{
    border-radius:14px;
    border:1px solid #c8e6c9;
}

.form-floating label{
    color:#2e7d32;
}

.form-control:focus{
    box-shadow:none;
    border-color:#2e7d32;
}

/* BUTTON */
.btn-login{
    background: linear-gradient(to right, #2e7d32, #66bb6a);
    border:none;
    padding:15px;
    border-radius:14px;
    font-weight:700;
    letter-spacing:1px;
    color:white;
    transition:0.3s;
}

.btn-login:hover{
    transform: translateY(-2px);
    box-shadow:0 15px 30px rgba(0,0,0,0.25);
}

/* LINKS */
.login-right a{
    color:#2e7d32;
    font-weight:600;
    text-decoration:none;
}

.login-right a:hover{
    text-decoration:underline;
}
</style>
</head>

<body>

<div class="brand-title">PRAGATI TRADERS</div>

<div class="login-wrapper">
    <div class="login-card row g-0">

        <!-- LEFT PANEL -->
        <div class="col-md-6 login-left d-none d-md-block">
            <h2>Welcome Back</h2>
            <p class="mt-3">
                Secure access to Pragati Trader premium betel nut trading,
                order management and customer relations.
            </p>

            
        </div>

        <!-- RIGHT PANEL -->
        <div class="col-md-6 login-right">
            <h3 class="text-center mb-4">Login to your account</h3>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <label>Email address</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <label>Password</label>
                </div>

                <button class="btn btn-login w-100">LOGIN</button>
            </form>

            <p class="text-center mt-4">
                Don’t have an account?
                <a href="/register">Create one</a>
            </p>
            <p class="text-center mt-4">
                
                <a href="/">Back to main page</a>
            </p>
        </div>

    </div>
</div>

</body>
</html>
