//tukaj se klicejo zavihki (lahko implementiramo tudi z css)
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

// funkcija za kamero
window.addEventListener("DOMContentLoaded", function() {
  //elementi za canvas , video
        var canvas = document.getElementById('canvas');
        var kont = canvas.getContext('2d');
        var video = document.getElementById('video');
        var media =  { video: true };
        var napaka = function(e) {
          console.log('Prišlo je do napake', e)
        };

// dovoljenje za uporabo medijev
  if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia(media).then(function(stream) {
          video.src = window.URL.createObjectURL(stream);
          video.play();
      });
  }

  // sprozi sliko ko kliknes in narise sliko 290 , 200
  document.getElementById('snap').addEventListener('click', function() {
    kont.drawImage(video, 0, 0, 290, 200);
  });
}, false);


//zemljevid
function zemljevid() {
  var mojaT = new google.maps.LatLng(46.049006, 14.493951);
  var canvasZ = document.getElementById("map");
  var opcije = {center: mojaT, zoom: 15};
  var map = new google.maps.Map(canvasZ, opcije);
  var oznacba = new google.maps.Marker({position:mojaT});
  oznacba.setMap(map);
}

