<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipantsImport implements ToModel
{
    public function model(array $row)
    {
        return new Participant([
            'name' => $row[0],
            'dni' => $row[1],
            'phone' => $row[2],
            'email' => $row[3],
            'career_id' => $row[4]
        ]);
    }
}
