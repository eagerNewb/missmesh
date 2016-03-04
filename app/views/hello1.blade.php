<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Miss Mesh</title>
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
	 .mce_inline_error{
	 	background: transparent !important;
	 	/*display: none !important;*/
	 	font-family:serif !important;
	 	font-style: italic;
	 	font-weight: normal !important;
	 	color: #d9b87b !important;
	 	/*margin-bottom: -50px;*/
	 }
	 #mce-success-response{
	 	background: transparent !important;
	 	/*display: none !important;*/
	 	font-family:serif !important;
	 	font-style: italic;
	 	font-weight: normal !important;
	 	color: #d9b87b !important;
	 	/*margin-bottom: -50px;*/
	 }
	</style>
</head>

<body class="background">
	<div class="container-fluid">
		<div class="row">
	<br class="hidden-lg">
	<br class="hidden-lg">

			<div style="position:absolute; right:0; padding-left: 15px; padding-right:15px;" align="right"  class="col-lg-12">
					<img class="responsive-img hidden-sm hidden-xs" style="z-index:1;position:relative; margin-right:-15px;" id="woman" src="images/Woman.png" alt="">
				</div>
		<div class="col-lg-10 col-sm-12 col-xs-12 text-center content">

			<div class="row">
				<div class="col-lg-6 col-sm-12 col-xs-12 col-lg-offset-3" align="center">
				 	<img style="" class="responsive-img" src="images/CommingSoon.png">
				</div>
			</div>
				<br class="">

			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
									<div class="col-xs-12 text-center">

					<p class="newsletter-header">Subscribe to our newsletter and be the first to know about the launch of our website</p>
									</div>

				</div>
			</div>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12">
	<div class="form-newsletter" id="mc_embed_signup">
	<form action="//cin.us10.list-manage.com/subscribe/post?u=d389d9cca0c036cfdc8832f53&amp;id=9ab60bc309" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    <div class="row" id="mc_embed_signup_scroll center">

			<div class="mc-field-group">
				<div class="col-lg-12">
				<input type="email" style="border-radius:0 !important; border: 1px solid #d9b87b !important; color: #fff;" value="" placeholder="your e-mail" name="EMAIL" class="email-newsletter col-lg-3 col-lg-offset-4 col-xs-7" id="mce-EMAIL">
		    	<input type="submit"  value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribe2 col-lg-1 col-xs-4">
		    	</div>
		    </div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none; font-family:serif !important; color: #d9b87b !important;"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

		    <div style="position: absolute; left: -5000px;">
		    	<input type="text" name="b_d389d9cca0c036cfdc8832f53_9ab60bc309" tabindex="-1" value="">
		    </div>
		</div>
	</form>
	</div>
</div>
</div>
	<br class="hidden-lg">

<!--End mc_embed_signup-->
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

	<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	<!--End mc_embed_signup-->
		<div class="col-lg-12">
			<p class="contact-header">For wholesale inquiries please contact us through the form below</p>
		</div>
		<div class="row">
		<div class="col-lg-12" id="contact-validation">
		</div>
	</div>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-xs-12">
<form accept-charset="UTF-8" class="" id="contact">

				<div class="row text-center" style="position:absolute; margin-top: -7%;">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<img class="col-lg-12 responsive-img" style="position:relative; margin-left:-28px;" src="images/Watermark.png" alt="">
					</div>
				</div>
				<div class="row text-center">
					<div class="col-lg-12 col-sm-12 col-xs-12">
					    {{ Form::text('name', null, array('class'=>'col-lg-4 col-xs-12 col-lg-offset-4' ,'placeholder'=>'name', 'id'=>'name')) }}

					</div>
				</div>
				<div class="row text-center">
					<div class="col-lg-12 col-sm-12 col-xs-12">
					    {{ Form::text('email', null, array('class'=>'col-lg-4 col-lg-offset-4  col-md-4 col-md-offset-4 col-xs-12' ,'placeholder'=>'email', 'id'=>'email')) }}
					</div>
				</div>

				<div class="row text-center">
					<div class="col-lg-12 col-sm-12 col-xs-12">
				   	 {{ Form::text('subject', null, array('class'=>'col-lg-4 col-lg-offset-4  col-md-4 col-md-offset-4 col-xs-12','placeholder'=>'subject', 'id'=>'subject')) }}
					</div>
				</div>
				<div class="row text-center">
					<div class="col-lg-12 col-sm-12 col-xs-12">
					    {{ Form::textarea('body', null, array('class'=>'col-lg-4 col-lg-offset-4 col-xs-12','placeholder'=>'message', 'id'=>'message')) }}

					</div>
				</div>
				<div class="row" align="right">
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<div class="col-lg-7 hidden-sm"></div>
						    {{ Form::submit('send', array('class'=>'subscribe col-lg-1', 'id'=>'formSubmit', 'style'=>'margin-top:10px;'))}}
					</div>
				</div>
    </form>
</div>
</div>




		</div>
	</div>


	<script type="text/javascript">
		$.ajaxSetup({ headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') } });

		$( document ).ready(function(){

			var height = $(window).height();
			// alert($());
			$("#woman").css("height", height);
			if(height > 700){
				$(".content").css("margin-top","200px");
			}else{
				$(".content").css("margin-top","30px");

			}
			// $("#mce-EMAIL").removeClass( "mce_inline_error" );



			// $('#mc-embedded-subscribe-form').submit(function(e){
			// 	e.preventDefault();
			// 	var newsletterMail = $('#mce-EMAIL').val();
			// 	var data = {newsletterMail: newsletterMail}

			// 	$.ajax({
			// 		type: "POST",
			// 		url: "newsletter",
			// 		data: data,

			// 		success: function(data){


			// 			var form = document.getElementById("#mc-embedded-subscribe-form");
			// 			form.reset();
			// 			alert("Almost finished... We need to confirm your email address. To complete the subscription process, please click the link in the email we just sent you.");

			// 		},
			// 		error:function(exception){
			// 			alert('Sorry, the form has not been submitted. Please provide a valid email!');

			// 		}

			// 	});
			// });


			$('#contact').submit(function(e){
				e.preventDefault();

				var name       = $('#name').val();
				var email      = $('#email').val();
				var body       = $('#message').val();
				var subject    = $('#subject').val();
				var dataString = {name:name, email:email, subject: subject,body:body}
				// "firstname"+name+"email"+email+"message"+message;

				$.ajax({
					type: "POST",
					url: "",
					data: dataString,

					success: function(data){


						var form = document.getElementById("contact");
						form.reset();
						// alert("");
						$( "div#contact-validation" ).html("<p class='cont-message'>Thank You! We will get back to you as soon as we can.</p>");
					},
					error:function(exception){
												$( "div#contact-validation" ).html("<p class='cont-message'>Sorry, the form has not been submitted. Please provide a valid name, email, subject and message!</p>");

						// alert('Sorry, the form has not been submitted. Please provide a valid name, email, subject and message!');
					}

				});
			});

			$('#formSubmit').click(function(){

				$('#swap').html("Thank You For Contacting Us!");

			});
		});
	</script>
<br class="hidden-lg">
<br class="hidden-lg">
<br class="hidden-lg">
</div><!-- end container-->
</body>
</html>
