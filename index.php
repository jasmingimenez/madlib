<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MadLib</title>
<link type="text/css" rel="stylesheet" href="madlib.css">
</head>

<body>
<h1>MadLibs!</h1>
<div class="container">
<form method="post" action="index.php">
<div class="name">Nouns:</div>
<input type="text" name="nouns">
<br>
<div class="name">Verbs:</div>
<input type="text" name="verbs">
<br>
<div class="name">Adjectives:</div>
<input type="text" name="adj">
<br>
<div class="name">Adverbs:</div>
<input type="text" name="adv">
<br>
<div class="name">Body Part:</div>
<input type="text" name="bodyPart">
<br>
<div class="radio">
<h2>Pick a Story!</h2>
<input type="radio" name="story" value="Harry Potter">Harry Potter
<br>
<input type="radio" name="story" value="LOTR">Lord of the Rings
<br>
<input type="radio" name="story" value="Star Wars">Star Wars
<br>
</div>
<input type="submit" name="submit" value="Submit">
</form>

</div>
<?php
$nouns = "";
$verbs = "";
$adjectives = "";
$adverbs = "";
$bodyparts = "";

$nouns_string = "";
$verbs_string = "";
$adjectives_string = "";
$adverbs_string = "";
$bodyparts_string = "";

$nouns_initial = array("squash", "duck", "pot", "platitude", "bug");
$verbs_initial = array("spit", "burp", "clash", "fortell", "flirt");
$adjectives_initial = array("hasty", "green", "sick", "slimy", "dry");
$adverbs_initial = array("stupidly", "unfortunately", "well", "gracefully", "cautiously");
$bodyparts_initial = array("butt", "finger", "bicep", "toe");

$harryPotter_status = 'unchecked';
$LOTR_status = 'unchecked';
$starWars_status = 'unchecked';





if (isset($_POST['submit']))
{
	$nouns_string = $_POST['nouns'];
	$verbs_string = $_POST['verbs'];
	$adjectives_string = $_POST['adj'];
	$adverbs_string = $_POST['adv'];
	$bodyparts_string = $_POST['bodyPart'];
	
}
$nouns_append = explode(",", $nouns_string);
$verbs_append = explode(",", $verbs_string);
$adjectives_append = explode(",", $adjectives_string);
$adverbs_append = explode(",", $adverbs_string);
$bodyparts_append = explode(",", $bodyparts_string);
/*
function add_to_array($source_array, $destination_array)
{
	for ($i = 0; $i < count($source_array); $i++)
	{
		array_push($destination_array, $source_array[$i]);
	}	
}
add_to_array($nouns_append, $nouns_initial);
add_to_array($verbs_array, $verbs);
add_to_array($adjectives_array, $adjectives);
add_to_array($adverbs_array, $adverbs);
add_to_array($bodyparts_array, $bodyparts);
*/
$nouns = array_merge($nouns_initial, $nouns_append);
$verbs = array_merge($verbs_initial, $verbs_append);
$adjectives = array_merge($adjectives_initial, $adjectives_append);
$adverbs = array_merge($adverbs_initial, $adverbs_append);
$bodyparts = array_merge($bodyparts_initial, $bodyparts_append);
//}

function random($array)
{
	return $array[array_rand($array)];
}


$harry_potter = "
	<h2>Harry Potter</h2>
	<p>The story opens with the unrestrained celebration of a <strong>".$adjectives[array_rand($adjectives)]."</strong> wizarding world which for many years had been terrorised by Lord Voldemort. The previous night, Voldemort had discovered the refuge of the hidden Potter family, and <strong>".random($verbs)."</strong>-ed Lily and James Potter. However, when he attempted to kill Harry, the Avada Kedavra <strong>".random($verbs)."</strong>-ing curse rebounded upon him, and Voldemort was destroyed, becoming nothing more than a <strong>".random($bodyparts)."</strong>: neither dead nor <strong>".random($adjectives)."</strong>. Harry, meanwhile, was left with a distinctive lightning bolt-shaped scar on his <strong>".random($bodyparts)."</strong> the only physical sign of Voldemort's curse. Harry's <strong>".random($adjectives)."</strong> defeat of Voldemort results in him being dubbed 'The Boy Who Lived' by the wizarding community.</p>

	<p>The following night, a wizard named <strong>".random($nouns)."</strong> delivers Harry to what will be his residence for many years afterward. The orphaned Harry is subsequently <strong>".random($verbs)."</strong>-ed by his ".random($adverbs)." non-magical relatives, the Dursleys, who in attempt to rid him of his magical <strong>".random($nouns)."</strong> hide his <strong>".random($adjectives)."</strong> heritage and give him <strong>".random($adverbs)."</strong> severe punishments after several strange occurrences.</p>

	<p><strong>".random($adverbs)."</strong>, as his eleventh birthday approaches, Harry has his first contact with the magical world when he receives a <strong>".random($nouns)."</strong> from Hogwarts School of Witchcraft and Wizardry, which are <strong>".random($adverbs)."</strong> taken from him by his Aunt and Uncle before he has a chance to read them. On his eleventh birthday he is informed by Hagrid, the <strong>".random($verbs)."</strong>-er of Hogwarts, that he is in fact a <strong>".random($nouns)."</strong> and has been invited to attend Hogwarts. Each book chronicles one year in Harry's life, which is <strong>".random($adverbs)."</strong> spent at Hogwarts, where he learns to use a <strong>".random($nouns)."</strong> and <strong>".random($verbs)."</strong> books. Harry also learns to overcome many magical, social, and <strong>".random($adjectives)."</strong> obstacles as he struggles through his adolescence, Voldemort's rise to power and the Ministry of Magic's consistent denials of Voldemort's threat.</p>
";
	$LOTR = "
	<h2>Galadriel's Mirror</h2>
	<p>Frodo peered into Galadriel's mirror. But suddenly the Mirror went <strong>".random($adverbs)."</strong> dark, as dark as if a <strong>".random($nouns)."</strong> had opened in the world of sight, and Frodo looked into emptiness. In the black abyss there appeared a single <strong>".random($nouns)."</strong> that slowly <strong>".random($verbs)."</strong>-ed until it filled nearly all the Mirror. So <strong>".random($adjectives)."</strong> was it that Frodo stood rooted, unable to cry out or to withdraw his gaze. The <strong>".random($nouns)."</strong> was rimmed with <strong>".random($nouns)."</strong>, but was itself glazed, <strong>".random($adjectives)."</strong> as a cat's, watchful and intent, and the black slit of its <strong>".random($nouns)."</strong> opened on a pit, a window into nothing.</p>

	<p>Then the <strong>".random($nouns)."</strong> began to <strong>".random($verbs)."</strong>, searching this way and that; and Frodo knew with certainty and horror that among the many things that it <strong>".random($verbs)."</strong>-ed he himself was one. But he also <strong>".random($adverbs)."</strong> knew that it could not see him-not yet, not unless he willed it. The <strong>".random($nouns)."</strong> that hung upon its chain about his neck grew heavy, heavier than a great <strong>".random($nouns)."</strong>, and his head was dragged downwards. The Mirror seemed to be growing <strong>".random($adjectives)."</strong> and curls of <strong>".random($nouns)."</strong> were rising from the water. He was slipping forward.</p>

	<p>'Do not touch the water!' said the Lady Galadriel softly. The vision faded <strong>".random($adverbs)."</strong>, and Frodo found that he was looking at the cool stars twinkling in the <strong>".random($adjectives)."</strong> basin. He stepped back shaking all over and looked at the Lady.</p>";
	
	$star_wars = "
	<h2>Star Wars</h2>
	<p>Darth <strong>".random($nouns)."</strong> looked <strong>".random($adverbs)."</strong> at his master while his <strong>".random($adjectives)."</strong> breathing filled the room. He was told to go to <strong>".random($verbs)."</strong> evrything on the planet of <strong>".random($bodyparts)."</strong>. He got in his <strong>".random($nouns)."</strong> and jumped to hyperspace. Soon before he reached the planet, he dropped out of hyperspace and was <strong>".random($adverbs)."</strong> attacked by Rebel <strong>".random($nouns)."</strong>s. He <strong>".random($verbs)."</strong>-ed them off and continued to the planet`s surface. He landed and confronted more opposition, slicing it down with his <strong>".random($nouns)."</strong>. He used the <strong>".random($nouns)."</strong> to choke another Rebel, then <strong>".random($verbs)."</strong>-ed him aside. He finished off all life on the planet with a/an <strong>".random($adjectives)."</strong> laugh.</p>";


if (isset($_POST['submit']))
{
	$selected_radio = $_POST['story'];

	if ($selected_radio == 'Harry Potter') {
		$harryPotter_status = 'checked';
		echo "<div class='story'>".$harry_potter."</div>";
	}
	else if ($selected_radio == 'LOTR')
	{
		$LOTR_status = 'checked';
		echo "<div class='story'>".$LOTR."</div>";
	}
	else if ($selected_radio == 'Star Wars')
	{
		$starWars_status = 'checked';
		echo "<div class='story'>".$star_wars."</div>";
	}
}
?>


</body>
</html>
