<?php 

$home = scandir("category/home"); 
$chair = scandir("category/chair"); 
$pets = scandir("category/pets"); 

echo "Home: ";

foreach ($home as $i) 
{
    if($i > 1)
    echo $i, "<br>";
}

echo "Chair: ";

foreach ($chair as $i) 
{
    if($i > 1)
    echo $i, "<br>";
}

echo "Pets: ";

foreach ($pets as $i) 
{
    if($i > 1)
    echo $i, "<br>";
}