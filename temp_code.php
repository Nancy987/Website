<?php
 echo'<html>
 <body>
 <script>
    function sleep(ms) {
       return new Promise(resolve => setTimeout(resolve, ms));
    }
    async function Tutor() {
       document.write("Hello Toturix");
       for (let i = 1; i <20 ; i++) {        
          await sleep(3000);
          document.write( i +" "+"Welcome to tutorix" + " " + "</br>");
       }
    }
 </script>
 <button onClick="Tutor()">Click Me</button>
 </body>
 </html>';
 ?> 
  