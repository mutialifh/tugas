<!DOCTYPE html>
<html lang="en">
    <body>
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "flash buzz, ";
    } elseif ($i % 3 == 0) {
        echo "buzz, ";
    } elseif ($i % 5 == 0) {
        echo "flash, ";
    } else {
        echo $i . ", ";
    }
}
?>
    </body>
</html>