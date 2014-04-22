find a string in another string:

if (strpos($aString,'Waldo') !== false) {
    echo 'I found Waldo!';
}

delete an element from an array:

$anArray = array("X", "Y", "Z");
unset($anArray[0]);

php toString();

// this is an integer:
$nonStringVar = 123;

//now $stringVar is a string
$aString = strval($nonStringVar);

