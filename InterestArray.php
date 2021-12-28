  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
         <title>Interest Array</title>
      </head>
      <body>
<?php

$rates_array = array(
  .0725,
  .0750,
  .0775,
  .0800,
  .0825,
  .0850,
  .0875
  );
?>
        <ul>
          <?
          foreach ($rates_array as $value){?>
          <li><?= $value?></li>
          <?}?>
        </ul>
         
      </body>
   </html>