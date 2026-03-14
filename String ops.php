<?php
$str1 = "madam";
$str2 = " world";

echo "Original String: $str1<br>";
echo "Number of letters: " . strlen($str1) . "<br>";
echo "Reverse: " . strrev($str1) . "<br>";

if ($str1 == strrev($str1)) {
    echo "Palindrome: Yes<br>";
} else {
    echo "Palindrome: No<br>";
}

echo "Concatenation: " . $str1 . $str2 . "<br>";
echo "Substring: " . substr($str1, 1, 3);
?>
