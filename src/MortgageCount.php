<?php

declare(strict_types=1);

namespace Espiktarenko\Mortgage;

class MortgageCount
{
    public function mortage($summa = 0, $years =0, $procent =0)
    {
        if (is_null($summa) || is_null($years) || is_null($procent) || is_numeric($summa) || is_numeric($years) || is_numeric($procent) ){
            return "All data must be exists and numeric " ;
        }
        else{
            $var = $summa*$years*$procent/100;
            return "It'll be cost for you : $var " ;
        }

    }

}


