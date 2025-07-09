<?php include "header.php"?>

	<div class="container mt-6">

<div class="row">
<form method=post id="searchform">	
	<div class="col-md-8 me-auto">
		<div class="input-group">
			<button class="btn btn-dark btn-lg">
<i class="bi bi-search"	></i>
</button>	
<input type=text name=search class="form-control searchfont">
<select name="lang" class=" langbox searchfont">
	<option value="1">اردو
</option>
<option value="2">عربی 
</option>
</select>
	
	</div>
	</div>
</form>
</div>


		<div class="row">
		<div class="col-md-4">
			
			<div class="row">
				<div class="col-md-12">
					<select id="chapterid" name="chapterid" class="form-control mt-5 listfont">
						<!-- <option value=""></option> -->
	<?php
	include "db.php";
	$chapters=$dbpdo->query("select * from chapters")->fetchAll(PDO::FETCH_OBJ);
	foreach($chapters as $chapter)
		if($chapter->id==$chapterid)
	echo "<option selected value='$chapter->id'>$chapter->id $chapter->title </option>";
else
	echo "<option value='$chapter->id'>$chapter->id $chapter->title </option>";
	?>	
			</select>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 chapterdetail">
		<?php 
		$chapter=$dbpdo->query("select * from chapters where id=$chapterid")->fetch(PDO::FETCH_OBJ);
		if(empty($_POST))
{
		?>
		<div class="row info">
			<div class="col-md-6"><?php echo $chapter->id?></div>
			<div class="col-md-6">سورہ کا نمبر</div>
			<div class="col-md-6"><?php echo $chapter->title?></div>
			<div class="col-md-6">سورہ کا نام</div>
			<div class="col-md-6"><?php echo $chapter->type?></div>
			<div class="col-md-6">مکی  یا مدنی </div>
			<div class="col-md-6"><?php echo $chapter->total?></div>
			<div class="col-md-6">کل آیات </div>
		</div>
		<?php 
	}
	?>
				</div>
			</div>
		</div>
		<div class="col-md-8 middle">


<?php 
if(empty($_POST))
{
		if($chapterid!=9)
			echo "<p class='text-center mt-3'><img src='images/bis.png'></p>	";


	$ayats=$dbpdo->query("select * from qurans where chapter_id=$chapterid")->fetchAll(PDO::FETCH_OBJ);
	foreach($ayats as $ayat)
		echo "<p class='text-center arabic'>
	$ayat->arabic
	<span class='badge bg-light ayatno'>$ayat->ano</span>

	</p>
			<p class='text-center urdu'>$ayat->urdu
			<span>
			<a href='tafseer.php?chapterid=$chapterid'>
			<img src='images/tafseer.png'>
			</a>
			</span>
			</p>
	";
}

else 
{
	$search=$_POST['search'];
	$lang=$_POST['lang'];
	if($lang==1)
	$ayats=$dbpdo->query("select * from qurans where urdu like '%$search%'")->fetchAll(PDO::FETCH_OBJ);
else
	$ayats=$dbpdo->query("select * from qurans where arabic like '%$search%'")->fetchAll(PDO::FETCH_OBJ);
$numbers=count($ayats);
echo "<h3 class='text-white text-center'>Total occurrence $numbers</h3>";
	foreach($ayats as $ayat)
{		
	$arabic = !empty($search)?highlightWords($ayat->arabic, $search):$ayat->arabic;

		echo "<p class='text-center arabic'>
	$arabic
	<span class='badge bg-light ayatno'>$ayat->ano</span>	</p>";

$urdu = !empty($search)?highlightWords($ayat->urdu, $search):$ayat->urdu;

	echo "<p class='text-center urdu'>$urdu</p>
	";
}

}
	?>
		</div>			
		</div>
		</div>		
	</div>
		
	</div>
	
</body>
</html>

<script>
	$("#chapterid").change(function(){
	page="index.php?chapterid="+$("#chapterid").val();
	window.location.href=page;
	});
</script>

<?php 
function highlightWords($text, $word){
	$text = preg_replace('#'. preg_quote($word) .'#i', '<span class="hlw">\\0</span>', $text);
	return $text;
}
?>














