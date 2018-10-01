<?php
//access the global array called $_POST to get the values from the text fields
$f=0;
$g=0;
$h=0;
$i=0;
$j=0;


$a = $_POST["one"];
echo "<br>Question 1: How many squares are there on a chess board?<br>";
if ($a==1)
{
echo "You answered: 64<br>";
echo "Correct answer: 64<br>";
$f=1;
}
if ($a==2)
{
echo "You answered: 100<br>";
echo "Correct answer: 64<br>";

}
if ($a==3)
{
echo "You answered: 81<br>";
echo "Correct answer: 64<br>";
}
if ($a==4)
{
echo "You answered: 121<br>";
echo "Correct answer: 64<br>";
}


$b = $_POST["two"];
echo "<br>Question 2: How many points does a compass have?<br>";
if ($b==1)
{
echo "You answered: 32<br>";
echo "Correct answer: 32<br>";
$g=1;
}
if ($b==2)
{
echo "You answered: 8<br>";
echo "Correct answer: 32<br>";

}
if ($b==3)
{
echo "You answered: 12<br>";
echo "Correct answer: 32<br>";
}
if ($b==4)
{
echo "You answered: 24<br>";
echo "Correct answer: 32<br>";
}


$c = $_POST["three"];
echo "<br>Question 3: How many colors are in a rainbow?<br>";
if ($c==1)
{
echo "You answered: 7<br>";
echo "Correct answer: 7<br>";
$h=1;
}
if ($c==2)
{
echo "You answered: 6<br>";
echo "Correct answer: 7<br>";

}
if ($c==3)
{
echo "You answered: 8<br>";
echo "Correct answer: 7<br>";
}
if ($c==4)
{
echo "You answered: 5<br>";
echo "Correct answer: 7<br>";
}


$d = $_POST["four"];
echo "<br>Question 4: What is the equatorial diameter of the Earth (in miles)?<br>";
if ($d==1)
{
echo "You answered: 7,918<br>";
echo "Correct answer: 7,918<br>";
$i=1;
}
if ($d==2)
{
echo "You answered: 2,159<br>";
echo "Correct answer: 7,918<br>";

}
if ($d==3)
{
echo "You answered: 4,212<br>";
echo "Correct answer: 7,918<br>";
}
if ($d==4)
{
echo "You answered: 12,756<br>";
echo "Correct answer: 7,918<br>";
}


$e = $_POST["five"];
echo "<br>Question 5: What is the diameter of a basketball hoop (in inches)?<br>";
if ($e==1)
{
echo "You answered: 18<br>";
echo "Correct answer: 18<br>";
$j=1;
}
if ($e==2)
{
echo "You answered: 16<br>";
echo "Correct answer: 18<br>";

}
if ($e==3)
{
echo "You answered: 20<br>";
echo "Correct answer: 18<br>";
}
if ($e==4)
{
echo "You answered: 24<br>";
echo "Correct answer: 18<br>";
}

echo "<br>Final Score: " . (($f+$g+$h+$i+$j)*20) . "%<br>";
?>
