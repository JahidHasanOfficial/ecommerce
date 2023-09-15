<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Ecommece Website</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
@include('frontend.includes.style')
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
  @include('frontend.includes.header')
<!-- //header -->
<!-- banner -->
@yield('content')
<!-- //newsletter -->
<!-- footer -->
@include('frontend.includes.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
  @include('frontend.includes.script')
</body>
</html>
