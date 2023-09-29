<?php
$xml = simplexml_load_file("example.xml");
$tprice = 0;

$list = $xml -> book;
for ($i=0;$i<count($list);$i++){
    echo $list[$i] -> attributes()->id."\n";
    echo $list[$i] -> author."\n";
    echo $list[$i] -> title."\n";
    $tprice += $list[$i] -> price;
}

echo $tprice;
?>