<?php
//String
$title = "On Melancholy Hill";
$artist = "Gorillaz";
$mood = "Melancholic";
$by = $title . ', by ' . $artist;  

//Int
$verseCount = 2;
$repeatChorus = 3;  // Slightly adjusted for demonstration, but not drastic

//Array
$nouns = ["melancholy", "hill", "tree", "day", "dream",
"sea", "medicine", "submarines", "world",
"manatee", "love"];
$verbs = ["up", "are", "looking", "get", "want", "can",
"set", "call", "go", "know", "come", "sits"];

//Song lyrics
$intro = "(Ah-ah) (Ah-ah)";

$verse1_2 = "Up on Melancholy Hill, there's a plastic tree
Are you here with me?
Just looking out on the day of another dream
Where you can't get what you want, but you can get me
So let's set out to sea, love
'Cause you are my medicine when you're close to me
When you're close to me";

$interlude = "(Ah-ah)";

$verse2_2 = "So call in the submarines, 'round the world we'll go
Does anybody know, love?
If we're looking out on the day of another dream?
(Ah-ah)
If you can't get what you want, then you come with me
Up on Melancholy Hill, sits the manatee (Ah-ah-ah-ah), love
Just looking out for the day when you're close to me
When you're close to me";

$outro = "Ooh, ooh-ooh-ooh (Ah-ah)
Ooh-ooh-ooh
Ooh-ooh-ooh, when you're close to me
Ooh, ooh-ooh-ooh (Ah-ah)
Ooh-ooh-ooh
Ooh-ooh-ooh
Ooh, ooh-ooh-ooh (Ah-ah)
Ooh-ooh-ooh";


$total = $repeatChorus + $verseCount;
$lyrics = [$intro, $verse1_2, $interlude, $verse2_2, $outro];

// Labels for lyrics 
$labels = ["[Intro]", "[Verse 1: 2-D]", "[Interlude]", "[Verse 2: 2-D]", "[Outro]"];

?>

<!DOCTYPE html>
<html>
    <head>
        <style>body {
  background-repeat: no-repeat;
  background-size: cover;
}
title{font-size: 18px;}

.head{}

.body {
padding: 20px;
width: 700px;
border: 5px solid #ccc;
background-color: #008e9b;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
float: center;
margin: 0 auto;

}

.head {
padding: 20px;
width: 700px;
border: 5px solid #ccc;
background-color:#0089ba;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
float: center;
margin: 0 auto;

}

.head p {
text-align: center;
margin-bottom: 10px;

}
#Intro {text-align: center;
    color: rgb(0, 0, 0);
    text-decoration: solid;}
h1{
    text-align: center;
    color: rgb(0, 0, 0);
    
}
h2 {
    text-align: center;
    color: rgb(0, 0, 0);
}
p {
    text-align: center;
    color: rgb(0, 0, 0);
    font-size: 18px;
}

body{
    background-color:rgb(3, 114, 184);
    
}

</style>
    <div class=head>
     <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1 href="https://www.youtube.com/watch?v=04mfKJWDSzI"><?php echo $title; ?></h1>
        <h2>On Melancholy Hill Lyrics</h2>
        <?php
        // Conditional statement: 
        if ($mood == "Melancholic") {
            echo "<p>This song evokes a melancholic mood.</p>";
        }
        ?>
        </div>
        <div class=body>
        <?php
        // Loop
        for ($i = 0; $i < count($lyrics); $i++) {
            echo "<p>" . $labels[$i] . "</p>";
            echo "<p>" . $lyrics[$i] . "</p>";
        }
        ?>
    </body>
     </div>

</html>
