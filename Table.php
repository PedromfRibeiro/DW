<html>

<?php
$keys = range('a', 'z');
$values = array_fill(0, 26, 0);
$freq = array_combine($keys, $values);
$word = "saapas";
$len = strlen($word);
for ($i=0; $i<$len; $i++) {
  $letter = strtolower($word[$i]);
  if (array_key_exists($letter, $freq)) {
    $freq[$letter]++;
  }
}
echo '<pre>'; print_r($freq); echo '</pre>';
?>

</html>
