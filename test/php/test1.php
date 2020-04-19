<?php
  $username = "Fred Smith";
  echo $username;
  echo "<br>";
  $current_user = $username;
  echo $current_user;
  $count = 17;
  $count = 14.5;
  echo "<br>";
  $team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
  echo $team[4];
  echo "<br>";
  $oxo = array(array('x', ' ', 'o'),
               array('o', 'o', 'x'),
               array('x', 'o', ' '));
  echo $oxo[1][2];
  echo "<br>";
  echo 6 + 2;
  echo "<br>";
  $author = "Steve Ballmer";
  echo "Develpers, Develpers, develpers, develpers,
develpers, develpers, develpers, develpers, develpers!

$author.";
  echo "<br>";
  $author = "Bill Gates";
  $text = "Measuring programming progress by lines of code is like
measuring aircraft building progress by weigth

- $author.";
  $author = "Brian W. Kernighan";
  echo <<<_END
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are, 
 by definiton, not smart enough to debug it.

$author.
_END;
  echo "<br>";
  $author = "Scott Adams";
  $out = <<<_END
Normal people believe that if it ain't broke, don't fix it.
Enginers believe that if it ain't broke, it doesn't have enough
features yet.

- $author.
_END;
  echo $out;
  echo "<br>";
  echo "Это строка " . __LINE__ . " в файле " . __FILE__;
  function longdate($timestamp)
  {
    return date("l F jS Y", $timestamp);
  }
  echo "<br>";
  echo longdate(time());
  echo "<br>";
  echo longdate(time() - 17 * 24 * 60 * 60);
?>