<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>NITRUTSAV</title>
	<link href = 'http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type = 'text/css'>
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="..\css\login.css">
</head>

<body>
	<div class="form">
	<ul class="tab-group">
		<li class="tab active"><a href="#signup">Register</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>
      
    <div class="tab-content">
        <div id="signup">   
         
			<form action="/" method="post">
          
			<div class="top-row">
				<div class="field-wrap">
				<label>
					First Name<span class="req">*</span>
				</label>
				<input type="text" required autocomplete="off" />
				</div>
        
				<div class="field-wrap">
				<label>
					Last Name<span class="req">*</span>
				</label>
				<input type="text"required autocomplete="off"/>
				</div>
			</div>

			<div class="field-wrap">
            <label>
              College<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
			</div>
			
			<div class="field-wrap">
            <label>
              Email Id<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
			</div>
          
			<div class="field-wrap">
            <label>
               Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
			</div>
			
			
          
			<button type="submit" class="button button-block"/>Register</button>
          
          </form>

        </div>
        
        <div id="login">   
         
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Id<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="..\js\login.js" type = "text/javascript"></script>

</body>
</html>