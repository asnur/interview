<?php

class CaseFive
{
    public function sort(array $data)
    {
        for ($i = 0; $i < count($data); $i++) {
            for ($j = $i + 1; $j < count($data); $j++) {
                if ($data[$i] > $data[$j]) {
                    $temp = $data[$i];
                    $data[$i] = $data[$j];
                    $data[$j] = $temp;
                }
            }
        }

        return $data;
    }
}

$CaseFive = new CaseFive();
foreach ($CaseFive->sort([1, 5, 3]) as $val) {
    echo $val;
}
