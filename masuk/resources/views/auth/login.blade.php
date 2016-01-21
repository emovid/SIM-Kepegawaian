

<head>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize-orange.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/ganti.css" media="screen, projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body>


<div class="container">
    <div class="row">

        <div class="col s4" id="tengah">
         <div class="row">
            
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                            <label>Username</label>
                                <input id="icon_prefix" type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="material-icons prefix">vpn_key</i>
                                <input id="icon_telephone" type="password" class="form-control" name="password">
                                <label for="icon_telephone">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
<div class="row center-align">
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn waves-effect waves-green">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                            </div>
                        </div>
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>