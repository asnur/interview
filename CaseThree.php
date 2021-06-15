<?php

class CaseThree
{
    public function manual(array $value)
    {
        $output = '';
        foreach ($value as $v) {
            for ($i = strlen($v) - 1; $i >= 0; $i--) {
                $output .= $v[$i];
            }

            if ($output == $v) {
                echo "Benar\n";
            } else {
                echo "Salah\n";
            }
        }
    }

    public function auto(array $value)
    {
        foreach ($value as $v) {
            if ($v == strrev($v)) {
                echo "Benar\n";
            } else {
                echo "Salah\n";
            }
        }
    }
}

$CaseThree = new CaseThree();
echo $CaseThree->manual(["kook", "ani"]);
echo $CaseThree->auto(["kook", "ani"]);
