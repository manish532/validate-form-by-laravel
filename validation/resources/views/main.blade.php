<!DOCTYPE html>
<html lang="en">
<head>
  <title>
   @yield("title_content")
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- view page css start -->

@yield("css_file")

<!-- view page css end -->
  
<!-- view page js start -->

@yield("js_file")


<!-- view page js start -->

</head>
<body>
<!-- view page code start -->

<div class="mpage w-100">

 @yield("display_content")

 <!-- view page code end -->
</div>
</body>
</html> 
