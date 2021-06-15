<?php

class CaseOne
{
    public function vokal_replace(string $data)
    {
        $value = str_replace(['a', 'i', 'u', 'e', 'o'], 'i', $data);
        return $value;
    }
}

$CaseOne = new CaseOne();
echo $CaseOne->vokal_replace("jika input yang dimasukkan");
