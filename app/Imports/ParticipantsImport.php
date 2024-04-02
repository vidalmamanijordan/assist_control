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
            'code' => $row[2],
            'phone' => $row[3],
            'email' => $row[4],
            'career_id' => $row[5],
            'semester' => $row[6],
            'group' => $row[7]
        ]);
    }
}
