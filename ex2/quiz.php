<?php
$x = 0;
$y = 20;
$q1 = $_POST["question1"];
$q2 = $_POST["question2"];
$q3 = $_POST["question3"];
$q4 = $_POST["question4"];
$q5 = $_POST["question5"];

echo "Question 1: 1+1 = <br>";
echo "You answered: " .$q1. "<br>";
echo "Correst answer: b <br><br>";
if($q1 == "b")
{
	$x++;
}

echo "Question 2: 1+2 = <br>";
echo "You answered: " .$q2. "<br>";
echo "Correst answer: c <br><br>";
if($q2 == "c")
{
	$x++;
}

echo "Question 3: 1+3 = <br>";
echo "You answered: " .$q3. "<br>";
echo "Correst answer: a <br><br>";
if($q3 == "a")
{
	$x++;
}

echo "Question 4: 2+3 = <br>";
echo "You answered: " .$q4. "<br>";
echo "Correst answer: b <br><br>";
if($q4 == "b")
{
	$x++;
}

echo "Question 5: 3+3 = <br>";
echo "You answered: " .$q5. "<br>";
echo "Correst answer: c <br><br>";
if($q5 == "c")
{
	$x++;
}

echo "Answered " .$x. " correctly <br>";
echo "Score: ".$x*$y. "%<br>";
?>