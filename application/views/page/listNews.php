<section class='container'>
<?php
$news = $this->news->listNews();
foreach ($news->result() as $row) {

echo "<div class='card mb-3'> <div class='card-body'>";	
echo "<h4 class='card-title text-primary'>".$row->title."</h4>";
echo "<h6 class='card-subtitle mb-2 text-secondary'>".$row->published."</h6>";
echo "<p class='card-text'>".$row->body."</p>";
echo "<a href='".$row->link."'>More Info</a>";						
echo "</div>";
echo "<div class='card-footer text-muted'>".$row->author."</div>";
			} 
?>




</section>

