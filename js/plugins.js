

							
						


//external links
$("section a[href^='http://']").attr("target","_blank");

$(document).ready(function(){
	//facebook like
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	//slide show
	$("#slideshow > div:gt(0)").hide();
	setInterval(function() { 
			$('#slideshow > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slideshow');
		},  3000);


			//show more info buttons
			$(".fab-button").click(function(){
				$('.fab1').css("display" , "block");
			});

			$(".fab-button2").click(function(){
				$('.fab2').css("display" , "block");
			});


			//home slogan fade In/Out
			var i = 0;
			var flashing = $("#home_action_title");
			//console.log($('.opened').length)
			 function next() {
			     if ((i < 4) && ($('.opened').length == 0)) {
			         flashing.fadeTo(600, .0, 'swing').fadeTo(1200, 1, next);
			         i++;
			     }                    
			 }
			 next();

			 //click action button -  home page
				$('#action_button').click(function(e){
						
					e.preventDefault();
					$.scrollTo( '#homePageMarker', 1600, { 'axis':'y' } ); 
					$('#action_button').addClass('opened');
					$('#fund').animate({height: "605px"},1000);
					$('#bucket_container, #donate_anim, #fund_vid').fadeIn();
					$('#action_button').fadeOut(function(){
						$('#home_action_title').css("margin-left","104px").delay(1700).animate({marginLeft: '0px'},700, function(){
							$('#donate_button').fadeIn();
						});
					});
					$('#home_action_slogan').delay(2500).fadeIn(500);
					$('#fund_visible').css({
						"background":"#333333",
						"box-shadow":"0 0 15px #222"
							});	
				});





				 
				 var _e = document.createElement("canvas").width
				 $.fn.cssrotate = function(d) {  
				    return this.css({
						  '-moz-transform':'rotate('+d+'deg)',
						  '-webkit-transform':'rotate('+d+'deg)',
						  '-o-transform':'rotate('+d+'deg)',
						  '-ms-transform':'rotate('+d+'deg)'
						 	}).prop("rotate", _e ? d : null)
						 }; 
				 var $_fx_step_default = $.fx.step._default;
				 $.fx.step._default = function (fx) {
				 if(fx.prop != "rotate")return $_fx_step_default(fx);
				 if(typeof fx.elem.rotate == "undefined")fx.start = fx.elem.rotate = 0;
				 $(fx.elem).cssrotate(fx.now)
				 }; 

				 
				 $("#donate_button").click(function(e){
				 	//alert('ho');
				 	e.preventDefault();
				  $.ajax({url: 'raised.php'});
				    
				 	//faucet handle
				 	 $('#faucet_handle').animate({rotate:295},{duration:2000})
				 	 //water stream
				 	 $('#stream').delay(1000).animate({height: "240px"}, 2000).fadeOut();
				 	 //waves
				 	 $('#wave1').delay(2100).fadeIn().animate({top: '-40px'},1000).fadeOut();
				 	 $('#wave2').delay(2500).fadeIn().animate({top: '-40px'},800).fadeOut();


				 	 var amtRaisedDiv =  $('#amtRaised');
				 	 //console.log(amtRaisedDiv);
				 	 var amtRaised = amtRaisedDiv.text();
				 	 //console.log(amtRaised);
				 	 newAmtRaised = parseInt(amtRaised) + 2;
				 	 //console.log(newAmtRaised);
				 	 amtRaisedDiv.delay(2800).fadeOut(function(e){
				 	 	$(this).text('');
				 	 	//console.log(newAmtRaised);
				 	 	$(this).text(newAmtRaised);
				 	 	//e.html(newAmtRaise);
				 	 }).fadeIn(function(){
				 	 	
				 	 	$('#thankyou').delay(1500).fadeIn();

				 	 }).fadeIn();


				 	 $('#flash_thing').delay(2500).animate({
				 	 													width:"2400px",
				 	 													height:"2200px",
				 	 													borderRadius: "9000px",
				 	 													top: "-1600px",
				 	 													left: "-900px",
				 	 													borderWidth: "37px"
				 	 												},500).fadeOut();
				 });



});