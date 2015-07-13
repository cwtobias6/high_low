# High low game in PHP

High Low Game!

Welcome to the world of game development!

You are going to build a game using the CLI.

The specs for the game are:

game picks a random number between 1 and 100.
prompts user to guess the number
if user's guess is less than the number, it outputs "HIGHER"
if user's guess is more than the number, it outputs "LOWER"
if a user guesses the number, the game should declare "GOOD GUESS!"
Hints:

Using conditionals and loops here is important
Random numbers can be made with the internal rand() function
If user is right, tell them they won
While they are wrong, give them hints and keep asking
Use exit(0) to end the game
If you get stuck in game, ctrl-c will exit.
Create a new repository, name it High_Low. Make a new directory in vagrant-lamp called highlow and git init a new local repository there. Use git remote add origin <url> to connect your local repository to the remote on GitHub.

After each step, commit your changes with a descriptive message and push to GitHub.

Build a working game for high/low meeting these requirements, your results should look similar to this.

 $ php highlow.php
 Guess? 22
 HIGHER
 Guess? 88
 LOWER
 Guess? 44
 HIGHER
 Guess? 55
 HIGHER
 Guess? 66
 HIGHER
 Guess? 77
 HIGHER
 Guess? 83
 LOWER
 Guess? 81
 LOWER
 Guess? 80
 LOWER
 Guess? 78
 GOOD GUESS!
Look up mt_rand() on PHP.net and use it in place of rand().

Display number of guesses it gook after outputting 'Good Guess!'