  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
         <title>Interest Array</title>
      </head>
      <body>
<?php

$days = array(
    "Sunday" => "Dimanche",
    "Monday" => "Lundi",
    "Tuesday"   => "Mardi",
    "Wednesday"  => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday"  => "Vendredi",
    "Saturday" => "Samedi"
);

?>
   <ul>
          <?
          foreach ($days as $key => $value){?>
          <li><?=$key?> = <?= $value?></li>
          <?}?>
        </ul>

      </body>
   </html>