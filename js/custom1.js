// The following example creates a marker in Stockholm, Sweden
// using a DROP animation. Clicking on the marker will toggle
// the animation between a BOUNCE animation and no animation.

var sanantonio = new google.maps.LatLng(29.5141220, -98.4936280);
var medcenter = new google.maps.LatLng(29.5295963, -98.5911179);
var broadway = new google.maps.LatLng(29.4968506, -98.4663454);
var sonterra = new google.maps.LatLng(29.6130926, -98.4730390);
var marker;
var map;

function initialize() {
  var mapOptions = {
    zoom: 12,
    center: sanantonio
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

// new //
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';

      var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
// end new //

 var marker1 = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: medcenter,
    title:  'Uluru (Ayers Rock)'
});
  //new//
  google.maps.event.addListener(marker, 'mouseover', function() {
    infowindow1.open(medcenter,marker1);
  });
  //endnew//
  var marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: broadway

  });


 var  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: sonterra

  });
}

google.maps.event.addDomListener(window, 'load', initialize);