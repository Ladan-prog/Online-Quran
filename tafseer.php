<?php include "header.php" ?>

	<div class="container mt-6">
	<div class="row">
<div class="col-md-12 middle">
<?php 
include "db.php";
$chapterid=$_GET['chapterid'];
if($chapterid>56) $chapterid=$chapterid-56;
if($chapterid>56) $chapterid=$chapterid-56;

$tafseers=$dbpdo->query("select * from tafseers where chapter_id='$chapterid'")->fetchAll(PDO::FETCH_OBJ);
foreach($tafseers as $tafseer)
echo "<p class='text-center urdu1'>$tafseer->ttext</p>";	
?>


		
	</div>
		
	</div>
</div>
	
</body>
</html>

