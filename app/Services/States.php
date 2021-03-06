<?php

namespace App\Services;

use App\State;

Class States
{
    public function get()
    {
        $states = State::get();
        $statesArray[''] = 'selected the state';
        foreach ($states as $state) {
            $statesArray[$state->id] = $state->name;

        }
        return $statesArray;
    }

}
