<?php

namespace DHelper\Carbon;

class CarbonInterval
{

    static public function secondsCascadeForHumans($sec)
    {
        return \Carbon\CarbonInterval::seconds($sec)->cascade()->forHumans();
    }

}
