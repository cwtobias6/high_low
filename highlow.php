<?php

if(($argc == 3)) {
		$min = $argv[1];
		$max = $argv[2];
} else {
	fwrite(STDOUT, "\nPlease choose a min\n ");
		$min = (int)fgets(STDIN);
	fwrite(STDOUT, "\nPlease choose a max\n ");
		$max = (int)fgets(STDIN);
}



$number = mt_rand($min,$max);
fwrite(STDOUT, "\nI have chosen a number between $min and $max\nWhat is the number?\n ");
$userGuess = trim(fgets(STDIN));
$attempts = 1;

while($userGuess !== $number) {
	if($userGuess > $number) {
		fwrite(STDOUT, "\nToo High!\n");
		$attempts++;
	} else if ($userGuess < $number){
		fwrite(STDOUT,"\nToo Low!\n");
		$attempts++;
	} else if ($userGuess == $number) {
		fwrite(STDOUT, "\nGood guess you picked " . "$number\n");
		fwrite(STDOUT, "\nIt took you " . "$attempts attempts!!\n");
		fwrite(STDOUT, "\nWanna Play Again??\nyes or no??\n ");
		$userStart = trim(fgets(STDIN));
			if($userStart == "yes"){
				$number = mt_rand(1,100);
				fwrite(STDOUT, "I have chosen a number between 1 and 100\nWhat is the number?\n ");
				$userGuess = trim(fgets(STDIN));
				$attempts = 0;
			} else {
				exit(0);
			}
	}
	fwrite(STDOUT,"Guess Again\n");
	$userGuess = trim(fgets(STDIN));
}



// //Do While Loop

// fwrite(STDOUT,"Guess!\n");
// do {
// $userGuess = trim(fgets(STDIN));
// 	if($userGuess > $number) {
// 		fwrite(STDOUT, "\nToo High!\n");
// 	} else if ($userGuess < $number){
// 		fwrite(STDOUT,"\nToo Low!\n");
// 	} else if ($userGuess == $number) {
// 		fwrite(STDOUT, "\nGood guess you picked " . "$number\n");
// 		fwrite(STDOUT, "Wanna Play Again??\nyes or no??\n ");
// 	}
// } while($userGuess !== $number);


?>