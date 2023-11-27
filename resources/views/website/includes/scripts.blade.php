 <!-- jQuery -->
 <script src="{{ asset('/') }}assets/plugins/jQuery/jquery.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
 </script>
 <script src="{{ asset('/') }}assets/plugins/bootstrap/bootstrap.min.js"></script>
 <script src="{{ asset('/') }}assets/plugins/aos/aos.js"></script>
 <script src="{{ asset('/') }}assets/plugins/owl-carousel/owl.carousel.min.js"></script>
 <script src="{{ asset('/') }}assets/plugins/shuffle/shuffle.min.js"></script>
 <script src="{{ asset('/') }}assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
 <script src="{{ asset('/') }}assets/plugins/animated-text/animated-text.js"></script>
 <script src="{{ asset('/') }}assets/plugins/counto/apear.js"></script>
 <script src="{{ asset('/') }}assets/plugins/counto/counTo.js"></script>


 <!-- Google Map -->
 <script src="{{ asset('/') }}assets/plugins/google-map/map.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
 </script>
 <!-- Main Script -->
 <script src="{{ asset('/') }}assets/js/script.js"></script>


 <!--home banner slider starts -->
 <script type="text/javascript">
     var counter = 1;
     setInterval(function() {
         document.getElementById('radio' + counter).checked = true;
         counter++;
         if (counter > 4) {
             counter = 1;
         }
     }, 5000);
 </script>

 <!--home banner slider ends -->
