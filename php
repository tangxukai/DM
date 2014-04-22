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

using php to get data from db:
    <html><body>
    <?php
        $link = mysql_connect($host, $user, $password);
        mysql_select_db($database);
        $query = " select * from $table where id = '$id' ; ";
        $result = mysql_query($query);
    
    echo "<table>";
    while($row = mysql_fetch_array($result)){
        echo "<tr>";
        foreach($row as $key=>$value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    mysql_close($link);
    ?>
    </body></html>
