 </div>
 <!--container-->

 <div class="fixed-bottom">
     <div class="text-center">
         <div id="mybutton">
             <a href="tel:8929000996"><img class="button1" src="./assets/button.png" alt="ordernow" title=""></a>
         </div>

         <img src="./assets/ticker.gif" alt="ticker" class="img-fluid">
     </div>
 </div>

 <center>
     <p style="font-size:18px; margin:10px 0 10px 0;"><b>Disclaimer: </b>"These statements have not been evaluated by
         the Food and Drug Administration.
         <br> This product is not intended to diagnose, treat, cure, or prevent any disease.
     </p>
 </center>


 <div class="container">
     <footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
         <!--/.Social buttons-->
         <!--Copyright-->
         <div class="footer-copyright py-3 text-center">
             <span href="#"> <b>Copyright 2022</b>
             </span>
         </div>
     </footer>
 </div>
 <br><br><br>
 <!-- offer -->
 <script>
     window.onload = function() {
         var hou = 14;
         var sec = 59;
         setInterval(function() {
             document.getElementById("timer").innerHTML = hou + " : " + sec;
             sec--;
             if (sec < 10) {
                 sec = "0" + sec;
             }
             if (sec == 00) {
                 hou--;
                 sec = 59;
                 if (hou == 0) {
                     alert("Promotion nearly finish!");
                 }
             }
         }, 1000);
     }
 </script>
 <!-- offer -->

 <!-- <script>
        function scrollToForm() {
            document.querySelector('#order').scrollIntoView({
                behavior: 'smooth'
            })
        }
    </script> -->




 </body>

 </html>