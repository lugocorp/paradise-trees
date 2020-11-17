<?php

  function progress($place,$total){
    echo("<div class=\"progress\">");
    for($a=0;$a<$total;$a++){
      if($a==$place){
        echo("<div class=\"active\"></div>");
      }else{
        echo("<div></div>");
      }
    }
    echo("</div>");
  }

?>
