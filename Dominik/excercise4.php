<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>
       <?php
      function frontback()
      {
          for ($i = 1; $i < 101; $i++) {
              if ($i % 5 == 0 && $i % 3 == 0) {
                  echo "Full-Stack <br>";
              } elseif ($i % 5 == 0) {
                  echo "Front-End <br>";
              } elseif ($i % 3 == 0) {
                  echo "Back-End <br>";
              } else {
                  echo "$i <br>";
              }
          }
      }
      frontback();
       ?>
   </body>
</html>



