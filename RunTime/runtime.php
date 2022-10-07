<?php

   global $time;

   function getTime(){
      return microtime(TRUE);
   }

   function startExecution(){
      global $time;
      $time = getTime();
   }
   function endExecution(){
      global $time;
      $finaltime = getTime();
      $calculatetime = $finaltime - $time;
      return number_format($calculatetime, 6) . ' seconds';
   }

?>
