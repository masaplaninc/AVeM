
function zavihek(a,b,c,d) {
    var prviZ = document.getElementById(a);
    var drugiZ = document.getElementById(b);
    var prviG= document.getElementById(c);
    var drugiG = document.getElementById(d);
    prviZ.style.display = 'block';
    drugiZ.style.display = 'none';
    prviG.style.borderBottom = 'none';
    prviG.style.color = 'white';
    prviG.style.background = "#34495E";
    drugiG.style.color = 'grey';
    drugiG.style.borderBottom = '1px solid #ccc';
    drugiG.style.background = "#dbdbdb";          
}

// Put event listeners into place
window.addEventListener("DOMContentLoaded", function() {
  // Grab elements, create settings, etc.
        var canvas = document.getElementById('canvas');
         if (!canvas) return; 
        var context = canvas.getContext('2d');
        var video = document.getElementById('video');
        var mediaConfig =  { video: true };
        var errBack = function(e) {
          console.log('An error has occurred!', e)
        };

// Put video listeners into place
  if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia(mediaConfig).then(function(stream) {
          video.src = window.URL.createObjectURL(stream);
          video.play();
      });
  }

  // Trigger photo take
  document.getElementById('snap').addEventListener('click', function() {
    context.drawImage(video, 0, 0, 290, 200);
  });
}, false);


function myMap() {
  var myCenter = new google.maps.LatLng(46.049006, 14.493951);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}

