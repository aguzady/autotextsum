<html>
 <head>
  <title>Auto Text Summarization</title>
 </head>
 <body>
  <?php
  include "./summarize.php";
   
  $output = summarize("tes3.txt", 50);
   
  echo "<h2>Teks Asli</h2>";
  echo $output['original']." ";
  
  ?>
  <h2>Tokenisasi</h2>
	<table>
		<tr>
			<th>NO</th>
			<th>Token</th>
		</tr>
		<?php
			$i = 1;
			foreach($_POST['token'] as $x => $x_value) {
			echo "<tr>";
			echo "<td>". $i ."</td>";
			echo "<td>". $x ."</td>";
			echo "</tr>";

			$i++;
			}
		?>
	</table>
  
 </body>
</html>