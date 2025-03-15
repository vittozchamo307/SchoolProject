
<?php 

$students = array("Stan", "Alex", "Meg");
$grades = array(85, 92, 70);
$averageGrade = getAverage($grades);
echo $averageGrade;
function getAverage($numbers) {
    return array_sum($numbers) / count($numbers);
}
?>