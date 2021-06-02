<?php
//$input =trim(fgets(STDIN));
$input = 40;
$i = 0;
echo "=============" . PHP_EOL;
while ($i <$input) {
    $random = rand(100000, 1000000);

    $resi = "LZ701" . $random . "CN";

    echo $resi . PHP_EOL;
    $i++;


}
echo "==============" . PHP_EOL;
?>
