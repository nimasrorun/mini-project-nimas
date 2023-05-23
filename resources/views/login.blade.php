<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{asset('css/login.css')}}" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form action="{{ route('penulis.login.submit') }}" method="POST">
      @csrf
      <div class="form sign-in">
        <h2>Login</h2>
        <p>Welocome to Insightful Ink</p>
        <label>
          <span>Email</span>
          <input type="text" name="username"/>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password"/>
        </label>
        
      
        <button type="submit" class="submit">Sign In</button>
  
      </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img__text m--up">
          <h2>Hello, Friend!</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img__text m--in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img__btn">
          <span class="m--up">Registrasi</span>
          <span class="m--in">Login</span>
        </div>
      </div>
      <div class="form sign-up">
        <form action="{{ route('penulis.register') }}" method="POST">
          @csrf
        <h2>Register</h2>
        <label>
          <span>Username</span>
          <input type="text" name="username"/>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password"/>
        </label>
        <button type="submit" class="submit">Sign Up</button>
      </form>
      </div>
    </div>
  </div>
  
</header><!-- End Header -->


<!-- ======= Footer ======= -->


<!-- Template Main JS File -->
<script src="{{asset('js/login.js')}}"></script>

</body>
</html>

