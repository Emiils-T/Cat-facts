<?php
$api = "https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount=100";
$data = file_get_contents($api);
$array = json_decode($data);

$factCount = 10;
$counter = 0;

foreach ($array as $item) {
    if ($item->status->verified) {
        echo $item->text . "\n";
        $counter++;
        if ($counter >= $factCount) {
            break;
        }
    }
}