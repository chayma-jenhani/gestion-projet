<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inscription</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('Admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">

  
<div class="row">
  <div class="col-md-5">
    <div class="register-box " style=" padding-top: 30% ;font-style:italic; font-size: 20px">

 <div class="login-box-msg"> <i class="icon fa fa-info" style="font-size:30px ;"></i>  
  Cette application web permet d’améliorer la productivité, en facilitant la communication, la collaboration, la circulation de l’information et la gestion des projets.
  </div>
  
               
              </div>
            </div>
  <div class="col-md-4">
    <div class="register-box">
       <div class="login-logo">
    <b >Gestion de projet</b>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Créer un compte</p>

     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

      <div class="form-group has-feedback form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        
         <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nom Complet">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        
        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback form-group{{ $errors->has('password') ? ' has-error' : '' }} ">
        
        <input id="password" type="password" class="form-control" name="password" required placeholder="Mot de passe">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback form-group">
        
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   placeholder="Confirmer le mot de passe" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback form-group{{ $errors->has('role') ? ' has-error' : '' }}">
        
    
         <select class="form-control" name="role" > 
                      <option disabled selected >---Role---</option>       
                      <option value="admin" >Admin</option>
                        <option value="responsable" >Chef de Projet</option>
                        <option value="employe" >Employe</option>
                      </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
     
      <div class="row">
        <center>
          
             <button type="submit" class="btn btn-primary  ">Inscription</button>
          
        </center>
        
       
         
       
        <!-- /.col -->
      </div>
    </form>

    

    
  </div>
  <!-- /.form-box -->
  <br>
  <a href="login"><button class="btn btn-primary btn-block btn-lg"> Se connecter à un compte existant</button></a>
</div>
<!-- /.register-box -->
</div>


</div>

<!-- jQuery 3 -->
<script src="{{asset('Admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('Admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('Admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
