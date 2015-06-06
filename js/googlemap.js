










/*function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(29.5141220, -98.4936280),
      zoom: 11,
      mapTypeId: google.maps.MapTypeId.ROADMAP,*/

function initialize() {
  var myLatlng = new google.maps.LatLng(29.5504220, -98.53006280);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

      // MAP CONTROLS (START)
      /*mapTypeControl: true,

      panControl: true,
      panControlOptions: {
      position: google.maps.ControlPosition.TOP_RIGHT
      },

      zoomControl: true,
      zoomControlOptions: {
      style: google.maps.ZoomControlStyle.LARGE,
      position: google.maps.ControlPosition.LEFT_TOP
      },

      streetViewControl: true,
      streetViewControlOptions: {
      position: google.maps.ControlPosition.LEFT_TOP
      },*/
      // MAP CONTROLS (END)



   /* };*/
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);


    // -------------- MARKER 1 med center
    var marker1 = new google.maps.Marker({
    position: new google.maps.LatLng(29.5295963, -98.5911179),
    map: map,
    animation: google.maps.Animation.DROP,
    });


    // MARKER 1'S INFO WINDOW
    var infowindow1 = new google.maps.InfoWindow({
    content: '<img src="images/mc.jpg" class="img-responsive" alt="Alamo Family Foot & Ankle Care - Medical Center"><br />Alamo Family Foot & Ankle Care - Medical Center<br />9502 Heubner Rd<br>Building 2, Suite 201<br>San Antonio, TX 78240<br /><a href="https://maps.google.com/maps?f=d&daddr=29.5295963, -98.5911179)">Driving Directions</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker1, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow1.open(map, marker1);
    });
     
    // -------- END OF 1st MARKER


    // -------------- MARKER 2
    var marker2 = new google.maps.Marker({
    position: new google.maps.LatLng(29.4968506, -98.4663454),
    map: map, 
    animation: google.maps.Animation.DROP,
    });

    // MARKER 2'S INFO WINDOW
    var infowindow2 = new google.maps.InfoWindow({
    content: '<img src="images/ah.jpg" class="img-responsive" alt="Alamo Family Foot & Ankle Care - Alamo Heights"><br />Alamo Family Foot & Ankle Care - Alamo Heights<br />7424 Broadway<br />San Antonio, TX 78209<br /> <a href="https://maps.google.com/maps?f=d&daddr=29.4969160,-98.4662810">Driving Directions</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker2, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow2.open(map, marker2);
    });
    // -------- END OF 2nd MARKER


    // -------------- MARKER 3
  

    var marker3 = new google.maps.Marker({
    position: new google.maps.LatLng(29.6130926, -98.4730390),
    map: map, 
    animation: google.maps.Animation.DROP,
    });

    // MARKER 3'S INFO WINDOW
    var infowindow3 = new google.maps.InfoWindow({
    content: '<img src="images/stoneoak.jpg" class="img-responsive" alt="Alamo Family Foot & Ankle Care - Stone Oak"><br />Alamo Family Foot & Ankle Care - Stone Oak<br />1314 E. Sonterra Blvd<br />Building 3, Suite 302<br />San Antonio, TX 78258<br /><a href="https://maps.google.com/maps?f=d&daddr=29.6130926, -98.4730390">Driving Directions</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker3, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow3.open(map, marker3);
    });
    // -------- END OF 3rd MARKER


// -------------- MARKER 4
  

    var marker3 = new google.maps.Marker({
    position: new google.maps.LatLng(29.798136, -98.734680),
    map: map, 
    animation: google.maps.Animation.DROP,
    });
     // MARKER 4'S INFO WINDOW
    var infowindow1 = new google.maps.InfoWindow({
    content: '<img src="images/mc.jpg" class="img-responsive" alt="Alamo Family Foot & Ankle Care - Medical Center"><br />Alamo Family Foot & Ankle Care - Medical Center<br />9502 Heubner Rd<br>Building 2, Suite 201<br>San Antonio, TX 78240<br /><a href="https://maps.google.com/maps?f=d&daddr=29.798136, -98.734680)">Driving Directions</a>'
    });
    // End of infowindow code

    // Adding a click event to the marker
    google.maps.event.addListener(marker1, 'click', function() {
    // Calling the open method of the infoWindow
    infowindow1.open(map, marker4);
    });
     
    // -------- END OF 4th MARKER


  }
  google.maps.event.addDomListener(window, 'load', initialize);


