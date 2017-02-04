<div id="breadcrumb">
		<div class="container">
			<div class="breadcrumb">
				<li><a href="./index.html">Accueil</a></li>
				<li>Contact</li>
			</div>
		</div>
	</div>

<div id="map" style="width:100%;height:400px;background:yellow"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(47.9950103, 0.19122830000001167);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC53n6lS52FBIguQOxeB53p66VtOymzzq0&callback=myMap"></script>

	<section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Information</h2>
                <p></p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="$name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="$email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group">
									<select class="form-control" name="formation">
										<option value="itstart">ItStart</option>
										<option value="digital factory">Digital Factory</option>
										<option value="btsSio">BTS SIO</option>
										<option value="bachelorProdigital">Bachelor Prodigital</option>
									</select>
							</div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Envoi du message</button></div>
                    </form>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
