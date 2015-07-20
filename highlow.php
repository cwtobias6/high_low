<?php





$randomNumber = mt_rand(1,100);
fwrite(STDOUT, "Pick a number between 1 and 100. \n");
$userGuess = trim(fgets(STDIN));
$attempts = 1;

while($userGuess !== $randomNumber) {
	if($userGuess < $randomNumber){
		fwrite(STDOUT, "Guess Higher \n");
		$attempts++;
		$userGuess = fgets(STDIN);
	} else if ($userGuess > $randomNumber) {
		fwrite(STDOUT, "Guess Lower \n");
		$attempts++;
		$userGuess = fgets(STDIN);
	} else if ($userGuess == $randomNumber) {
		fwrite(STDOUT, "\n You guessed $randomNumber nice\n");
		fwrite(STDOUT, "\n It took you $attempts attempts to correctly guess the number!\n");
		exit(0);
	}
}


?>