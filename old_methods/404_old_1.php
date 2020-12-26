<!-- <div class="content-left-wrap col-md-12"> -->
<meta name="viewport" content="width=device-width, height=device-height">
<style>
/*	@media (max-width: 1500px) and (min-width: 800px) {
  @viewport {
    width: 1000px;
  }
}*/

/*@media screen and (min-width: 1400px){
	div.largeScreen {
	width: 500px;
	height:140px;
}*/

div.largeScreen {
	width:90%;
	height:140px;
}

h2{
		font-weight: 30px;
}
p{
		font-weight: 20px;
}

@media screen and (min-width: 300px){
	div.largeScreen {
	width:90%;
	height:140px;
	}
	h2{
		font-weight: 40px;
	}
	p{
		font-weight: 25px;
	}

}



@media screen and (min-width: 600px){
	div.largeScreen {
	width:500px;
	height:120px;
	}
	h2{
		font-weight: 40px;
	}
	p{
		font-weight: 25px;
		}
}





div.smallScreen {
	width:500px;
	height:120px;
}


</style>

<div style="left:-5px">
	<!-- <div id="primary" class="content-area"> -->

		<!-- <main id="main" class="site-main" role="main"> -->

			<div id="label" class="largeScreen" style="position:absolute;z-index:2;background-color:#99ADB8;top:0px;left:0px;padding:20px">

				<header class="entry-header" >

					<h2 style="margin-left:auto;margin-right:auto;margin-top:-10px"><?php _e( "404 Error!", 'zerif-lite' ); ?></h2>

				</header><!-- .entry-header -->

				<div style="margin-left:auto;margin-right:auto;margin-bottom:20px">



					<p><?php _e( "That link didn't go anywhere and now you're on some sort of abandoned industrial island. Wander around and feel appropriately lost or click to go  ", 'zerif-lite' ); ?><a href="/"><?php _e( 'home', 'zerif-lite' ); ?></a></p>


				</div><!-- .entry-content -->
			</div><!-- #post-## -->
			<div style="position:absolute;left:-5px;top:-5px;z-index:1">
				<iframe id="streetview" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1487820746671!6m8!1m7!1sA3tTI4JZsf22r2rcUZch3w!2m2!1d32.62712480678462!2d129.7386352339616!3f41.1332668802539!4f-3.7115668392063412!5f0.7820865974627469" width="1500" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe><!-- iframe -->
			</div>
			

	<!-- 	</main> --><!-- #main -->

	<!-- </div> --><!-- #primary -->

</div>

<script>

    // window.onload = showViewport;
	// window.onresize = showViewport;

	// function showViewport() {
	//   var output=document.getElementById("output");
	//   var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	//   var height= Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
	//   output.style.height = height
	//   output.style.width = width
	//   console.log("height = ",height," width = ",width)
	// }

	function showViewport() {
	  var output=document.getElementById("output");
	  var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	  var height= Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
	  output.style.height = height
	  output.style.width = width
	}

	window.onload = showViewport();

	// var labelBox = document.querySelector("#label");
	// var classes = labelBox.classList;
	// var w = Math.max(document.documentElement.clientWidth);
	// var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
	// console.log("w = ",w)
	// console.log("h = ",h)
	// console.log("classes = ",classes)

	// if(w < 800){
	// 	classes.remove("largeScreen");
	// 	classes.add("smallScreen");
	// }
	
	
</script>
