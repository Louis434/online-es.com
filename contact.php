 <!-- Map Column -->
            <div class="col-md-8">
 School Location
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=green%20valley%20%20General%20Paulino%20Santos%20Drive%2C%20Koronadal%20City%2C%209506%20South%20Cotabato%2C%20Philippines"></iframe> -->
           <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
           <div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:100%;width:400px;">
           <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
           <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">embed google map</a>
           </div>
           <script type="text/javascript">
            function init_map(){var myOptions = {zoom:19,center:new google.maps.LatLng(11.263767513821582, 123.72349139039451),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(11.263767513821582, 123.72349139039451)});infowindow = new google.maps.InfoWindow({content:"<b>Madridejos Community College</b><br/>Bunakan, Madridejos, Cebu, Philippines<br/>6053  Philippines" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                Madridejos Community College
            <br>Bunakan, Madridejos, Cebu, Philippines<br>
            </p>
            <p><i class="fa fa-phone">(083) 123-123</i></p>

            <p><i class="fa fa-envelope-o ">Email:mcc@gmail.com</i>

            </p>
            <p><i class="fa fa-clock-o">Monday - Friday: 9:00 AM to 5:00 PM</i> </p>

            </div>
