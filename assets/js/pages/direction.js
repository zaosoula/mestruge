$(function() {


  let geolocationRequested = false;
  let geolocationSupported = null;
  let maps = {
    direction:  `<iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCO5GQP4UUzqZvmXM-TMA2R3yal1iGgj7E&origin={{origin}}&destination=43.1609648,2.1530806&waypoints=43.1759709,2.1534992|43.1598609,2.1577982&mode=driving" width="100%" height="600" scrolling="no" marginheight="0" marginwidth="0" class="embed-responsive-item"></iframe>`,
    default:  `<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCO5GQP4UUzqZvmXM-TMA2R3yal1iGgj7E&q=Domaine de Mestrugue, 11290 Montréal, France&maptype=satellite" width="100%" height="600" scrolling="no" marginheight="0" marginwidth="0" class="embed-responsive-item"></iframe>`
  }

  $('#directionMap').html(maps.default);

  $('#directionMap iframe').contents().find(".navigate-link").hide();


  // // $('#directionMap').html(maps.default);
  //
  // $(window).on('scroll', function(){
  //   if(!geolocationRequested && $(window).scrollTop() + $(window).height() > $('#directionMap').offset().top){
  //     console.log('reached');
  //     getLocation();
  //   }
  // });
  //
  // function getLocation(){
  //   geolocationRequested = true;
  //   if (navigator.geolocation) {
  //     geolocationSupported = true;
  //     navigator.geolocation.getCurrentPosition(onPosition, onError);
  //   } else {
  //     geolocationSupported = false;
  //     console.log("Geolocation is not supported by this browser.");
  //   }
  // }
  //
  // function onPosition(position) {
  //   console.log(position);
  //   $('#directionMap').html(maps.direction.replace('{{origin}}',position.coords.latitude+','+position.coords.longitude));
  // }
  //
  // function onError(error) {
  //   console.log(error);
  //   switch(error.code) {
  //     case error.PERMISSION_DENIED:
  //       console.log("User denied the request for Geolocation.");
  //       break;
  //     case error.POSITION_UNAVAILABLE:
  //       console.log("Location information is unavailable.");
  //       break;
  //     case error.TIMEOUT:
  //       console.log("The request to get user location timed out.");
  //       break;
  //     case error.UNKNOWN_ERROR:
  //       console.log("An unknown error occurred.");
  //       break;
  //   }
  //   $('#directionMap').html(maps.default);
  // }
})
