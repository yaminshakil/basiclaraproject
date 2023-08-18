<!DOCTYPE html>
<html> 
<head>

	@include('home.css')


	<title>My blog Website</title>


</head>
<body style="background-color: #40504F;">

	@include('home.navbar')
	


	@include('home.post')	


 
			

			<div class="footer">
				<h4 class="footer_right"> @ Copyright reserved by yoo bro 2030</h4>

				<p class="footer_left"><a href="{{url('/')}}">Home</a></p>
			</div>
 

 
 
</body>
</html>