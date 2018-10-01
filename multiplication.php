<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
	
    echo "<table border=\"3\">";
      $cols = 100;
      $rows = 100;

	for($a=0; $a <=$rows; $a++)
  	{
   	    echo '<td><center>' . $a . '</td>';
  	}

        for ($b=1; $b<=$rows; $b++)
        {
            echo('<tr>');
	    echo('<td><center>'.$b.'</td>');
	
            	for($c=1; $c<=$cols; $c++)
		{
               		echo('<td><center>'.$c*$b.'</td>');
		}
	    echo('</tr></center>');
        }
        echo("</table>");
	
?>
