

<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>NITRUTSAV</title>
	<link href = 'http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type = 'text/css'>
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="..\css\event_entry.css">
</head>

<body>
	<div class="form">
	<div class="header">
		<p>UPDATE YOUR EVENT</p>
    </div>
      
    <div class="tab-content">
        <div id="signup">   
			<h1>EVENT NAME HERE</h1>			
			<form action="/" method="post">
			<div class="field-wrap-event">
            <label>
              Event Details<span class="req">*</span>
            </label>
            <textarea name="textarea" id="txtinput"></textarea>
			</div>
			<div class="top-row" >
				<div class="field-wrap">
				<label>
					Coordinator Name <span class="req">*</span>
				</label>
				<input type="text" required autocomplete="off" />
				</div>
        
				<div class="field-wrap">
				<label>
					Contact<span class="req">*</span>
				</label>
				<input type="text"required autocomplete="off"/>
				</div>
			</div>	
			<div class="top-row" >
				<div class="field-wrap">
				<label>
					Coordinator Name <span class="req">*</span>
				</label>
				<input type="text" required autocomplete="off" />
				</div>
        
				<div class="field-wrap">
				<label>
					Contact<span class="req">*</span>
				</label>
				<input type="text"required autocomplete="off"/>
				</div>
			</div>
			<div class="pic-upload">	
				<div class="field-wrap-text">
				 <input type="text" value="Upload Poster" readonly><br>
				</div>
				<div class = "field-wrap-file">
				<input type="file" name="poster" accept="image/*"/>
				</div>
			</div>
			<div class="bottom-row">
				<div class="field-wrap">
				<label>
					Venue <span class="req">*</span>
				</label>
				<input type="text" required autocomplete="off" />
				</div>
        
				<div class="field-wrap">
				<label>
					Date <span class="req">*</span>
				</label>
				<input type="text"required autocomplete="off"/>
				</div>
				
				<div class="field-wrap">
				<label>
					Time <span class="req">*</span>
				</label>
				<input type="text"required autocomplete="off"/>
				</div>
			</div>
          
			<button type="submit" class="button button-block"/>Update</button>
          
          </form>

        </div>
        
       
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script> 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="..\js\event_entry.js" type = "text/javascript"></script>

</body>
</html>
