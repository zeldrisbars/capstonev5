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
             <h1>PAGPAPATUNAY</h1>
             <h2>(INDIGENCY)</h2>  
            </div>
      <div class="body" style="z-index:999;">
		<div class="content" style="position:absolute; top:-550px; margin:45px;">
		<br /><p>Sa mga kinauukulan:</p></br>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ito ay pagpapatunay na si <u>{{$gender}} {{$name}}</u> ay may sapat na gulang at naninirahan sa #<u>{{$street}}</u><b> St. Guyong, Santa Maria, Bulacan</b> ay kabarangay ko.</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pagpapatunay pa rin na si <u>{{$gender}} {{$name}}</u> ay mula sa aming barangay at walang pirmihang hanap-buhay at wala ring kakayahang matugunan ang kaniyang mga gastusin at pangangailangan sa ngayon.
		</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ang tulong na kaniyang kakailanganin sa inyong tanggapan ay upang magamit sa kanyang: <u>{{$reason1}}</u> at para sa tulong at <u>{{$reason2}}.</u></p>
		
		<br />
		<p>T A N G G A P A N:</p>
        <p></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ipinagkaloob ngayong <u>{{$date}}</u></p>

		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lagda</strong></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>IGG.GRACIANO S. GRAVADOR</u></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PUNONG BARANGAY</p>

		</div>
      </div>
</body>
</html>