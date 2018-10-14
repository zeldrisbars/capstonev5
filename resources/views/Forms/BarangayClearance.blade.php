<!DOCTYPE html>
<html>
<head>
	<style>
                .column {
                    float: left;
                    width: 50%;
                    padding: 10px;
                 
                }
                
                /* Clear floats after the columns */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                    
                }

                li
                {
                    list-style-type:none;
                }
                
                p
                {
                	line-height: 1.8;
                	text-align: justify;
                }
        </style>
</head>
<body>
<div>
            <div style="position:absolute; left:0px; line-height: 5px; text-align: center; margin-top:40px;">
                <div style="position:absolute; top:-20px;">
                <h3>Republic of the Philippines</h3>
                <h3>Province of Bulacan</h3>
                <h3>Municipality of Santa Maria</h3>
                <h2>BARANGAY GUYONG</h2>
                <h3>OFFICE OF THE PUNONG BARANGAY</h3>    
                </div>
                <hr style="position:absolute; top:120px; left:7px; width:100%; opacity: 1;">
            </div>
            <img src="{{ asset('images/Guyong Logo 3.png') }}" height="120px" style="margin-top:-15px right:5px; float:left; opacity:1;">
            <img src="{{ asset('images/Santa Maria.png') }}" height="120px" style="margin-top:-15px left:5px; float:right; opacity:1">
        </div>
        <div class="">
            <img src="{{ asset('images/Guyong Logo 2.png') }}" height="500px" style=" z-index:-999; margin-left:0px; margin-top:290px; opacity:0.1;">
            <div class="header" style="position:absolute; left:15px; line-height: 5px; text-align: center; margin-top:240px;">
             <h2>BARANGAY CLEARANCE</h2>  
            </div>
      <div class="body" style="z-index:999;">
		<div class="content" style="position:absolute; top:-550px; margin:45px;">
		<p>To whom it may concern:</p></br>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that <u>{{$gender}} {{$name}}</u> of legal age, <u>{{$civil}}</u>, Filipino and a resident of #<u>{{$street}}</u>, Guyong, Santa Maria, Bulacan is known to me as a person of good moral character, is a law abiding citizen and has no pending complaint/s or case/s filed against him/her in this office and within the jurisdiction of the barangay.</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This clearance is issued upon the request of the above mentioned person for whatever legal purpose it may serve him/her best.			
		</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Given this <u>{{$date}}</u> at Barangay Guyong, Santa Maria, Bulacan.</p>
		
		<br />
		<p><strong>PURPOSE:&nbsp;<u>{{$purpose}}</u></strong></p>

		<br />

		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Signature</strong></p>
		<br />
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>IGG.GRACIANO S. GRAVADOR</u></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PUNONG BARANGAY</p>

		</div>
      </div>
</body>
</html>