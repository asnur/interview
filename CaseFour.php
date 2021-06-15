<?php

class CaseFour
{
    public function cek_array(array $data)
    {
        $value = 0;
        $panjang = count($data);
        for ($i = 0; $i <= $panjang - 1; $i++) {
            if ($data[$i] == $data[$i + 1]) {
                $value[] += $data[$i];
            }
        }
        return $value;
    }
}

$CaseFour = new CaseFour();
echo $CaseFour->cek_array([20, 1, 20, 10]);
