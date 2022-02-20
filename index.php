<!DOCTYPE html>
<html>
<head>
	<title>progit</title>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			margin: 0; 
			padding: 0;
		    font-family: 'Roboto', sans-serif;
		}
		.flex_box{
			display: flex;
		}
		.flex_colum{
			flex-direction: column;
		}
		.flex_row{
			flex-direction: row; 
		}
		.box_center{
			align-items: center; 
			justify-content: center; 
		}
		.main_box{
			top: 0; 
			right: 0; 
			bottom: 0; 
			left: 0; 
			margin: auto;
			max-width: 1400px;
			height: 100vh; 
			background-color: orange;
		}
		.header_box{
			/*height: 20vh;*/
			background-color: #6b5b95;
		}
		.transition{
			-webkit-transition: all 0.5s ease;
		    -moz-transition: all 0.5s ease;
		    -o-transition: all 0.5s ease;
		    transition: all 0.5s ease;
		}
		.dp_vh{
			height: 10vh;
		}
		.tp_vh{
			height: 20vh;
		}
		.header_item{
			flex-grow:1; 
			text-align:center;
			color: white;
		}
		.content_box{
			flex-wrap: wrap;
			/*height: 80vh;*/
			margin: auto; 
			max-width: 1120px;
			/*max-width: 820px;*/
			padding: 10px;
			background-color: #ff7b25;
		}
		.np_vh{
			height: 90vh;
		}
		.ep_vh{
			height: 80vh;
		}
		.content_item{
			flex: 1 0 40%;
			margin: 5px;
			height: 38vh; 
			text-align: center; 
			border: 2px dotted blue;
		}
		#test{
			cursor: pointer;
		}
	</style>
	<script>
		$(document).ready(function() {
		    setInterval(showtime, 1000);
		});

		function showtime(){
			$("#timespan").html(new Date().toLocaleTimeString());
		}

		$(document).on("click", "#test", function() {
			var active = $("#test.expand");
			if(!active.length){
		    	$(".header_box").removeClass("dp_vh").addClass("tp_vh");
		    	$(".content_box").removeClass("np_vh").addClass("ep_vh");
		    	$(this).addClass("expand");
		    	console.log(1);
		    }
		    else{
		    	$(".header_box").removeClass("tp_vh").addClass("dp_vh");
		    	$(".content_box").removeClass("ep_vh").addClass("np_vh");
		    	$(this).removeClass("expand");	
		    	console.log(0);
		    }
		});
	</script>
	<!--script> 
		$(document).on("mouseenter", ".header_box", function(){
			console.log("mouse enter");
			$(".header_box").animate({
				"background-color":"red"
			}, 300);
		});
		$(document).on("mouseleave", ".header_box", function(){
			console.log("mouse leave");
			$(".header_box").animate({
				"background-color":"yellow"
			}, 300);
		});
	</script-->
</head>
<body class="box_center">
	<div class="flex_box flex_colum main_box">
		<div class="flex_box flex_row box_center header_box transition dp_vh">
			<div class="header_item">
				<p>
					<span id="test">FLEX PAGE</span> <br> 
					<span id="timespan"></span>
				</p> 
			</div>
		</div>
		<div class="flex_box flex_row content_box transition np_vh">
			<div class="flex_box box_center content_item">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non aliquet justo.
			</div>
			<div class="flex_box box_center content_item">
				2
			</div>
			<div class="flex_box box_center content_item">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non aliquet justo.
			</div>
			<div class="flex_box box_center flex_colum content_item">
				<p>4</p>
				<p>44</p>
			</div>
		</div>
	</div>
</body>
</html>