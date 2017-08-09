<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TechScroll</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400|Poppins:300,400,500,600,700|Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css"> 
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TechScroll</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#showcase">Home</a></li>
            <li><a href="#info1">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <section id="showcase">
    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-sm-6">
    			<div class="showcase-left">
    				<img src="img/image1.jpg">
    			</div>
    		</div>
    		<div class="col-md-6 col-sm-6">
    			<div class="showcase-right">
    				<h1>Hands free help from the Google Assistant</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos cum, tempora. Ipsam eligendi eaque, ratione nisi dolor non dignissimos. Dolor velit perferendis assumenda repudiandae laudantium doloribus, cum modi hic possimus?</p>
    			</div>
    			<br>
    			<a class="btn btn-default btn-lg showcase-btn">Read More</a>
    		</div>
    	</div>
    </div>
    	
    </section>
    
    <section id="testimonial">
    	<div class="container">
    		<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam sed voluptatem suscipit, veniam fugit iste nihil odit necessitatibus, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam sed voluptatem suscipit, veniam fugit iste nihil odit necessitatibus".</p>
    		<p class="customer">- John Doe</p>
    	</div>
    </section>
    
    <section id="info1">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-sm-6">
    				<div class="info-left">
    					<img src="img/image2.png">
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-6">
    				<div class="info-right">
    					<h2>Get to know google home</h2>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia aliquid quis ipsum aspernatur! Beatae voluptatem</p>
    					<br>
    					<a class="btn btn-default btn-lg">Read More</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section id="info2">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-sm-6">
    				<div class="info-left">
    					<h2>Info Block 2</h2>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia aliquid quis ipsum aspernatur! Beatae voluptatem</p>
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-6">
    				<div class="info-right">
    					<h2>Info Block 2</h2>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia aliquid quis ipsum aspernatur! Beatae voluptatem</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
    <section id="contact">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-5 col-sm-5">
    				<form>
                       <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="name">
					   </div>
                       <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="email">
					   </div>
                        <div class="form-group">
                        <label for="msg">Message:</label>
                        <input type="" class="form-control" placeholder="Enter Message" id="msg">
					   </div>
                         <button type="submit" class="btn btn-default">Submit</button>
                    </form>
    			</div>
    			<div class="col-md-7 col-sm-7">
    				
    			</div>
    		</div>
    	</div>
    </section>
    
    <footer>
    	<p class="text-center">TechScroll Copyright &copy; 2017</p>
    </footer>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
	window.sr = ScrollReveal();
	sr.reveal('.navbar',{
		duration: 2000,
		origin: 'bottom'
	});
	sr.reveal('.showcase-left',{
		duration: 2000,
		origin: 'top',
		distance: '300px'
	});
	sr.reveal('.showcase-right',{
		duration: 2000,
		origin: 'right',
		distance: '300px'
	});
	sr.reveal('.showcase-btn',{
		duration: 2000,
		delay: 2000,
		origin: 'bottom'
	});
	sr.reveal('#testimonial div',{
		duration: 2000,
		origin: 'bottom'
	});
	sr.reveal('.info-left',{
		duration: 2000,
		origin: 'left',
		distance: '300px',
		viewFactor: 0.2
	});
	sr.reveal('.info-right',{
		duration: 2000,
		origin: 'right',
		distance: '300px',
		viewFactor: 0.2
	});
	</script>
	
	<script>
    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>


</body>
</html>