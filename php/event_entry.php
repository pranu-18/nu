

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
		<p>REGISTER YOUR EVENT</p>
    </div>
      
    <div class="tab-content">
        <div id="signup">   
			     
			<form action="/" method="post">
          
			<div class="top-row">
				<div class="field-wrap">
				<label>
					Club Name<span class="req">*</span>
				</label>
				<input type="text" required autocomplete="off" />
				</div>
        
				<div class="field-wrap">
				<label>
					Member Name<span class="req">*</span>
				</label>
				<input type="text"required autocomplete="off"/>
				</div>
			</div>
			
			<div class="field-wrap">
            <label>
              Event Name<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
			</div>
			
			<div class="field-wrap-event">
            <label>
              Event Details<span class="req">*</span>
            </label>
            <textarea name="textarea" ></textarea>
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
          
			<button type="submit" class="button button-block"/>Submit</button>
          
          </form>

        </div>
        
       
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="..\js\event_entry.js" type = "text/javascript"></script>

</body>
</html>
