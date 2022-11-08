<?php

namespace App\Imports;

use App\Models\Membership;
use Maatwebsite\Excel\Concerns\ToModel;

class MembershipImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Membership([
            'name'=>$row[1],
            'contact'=>$row[2],
            'male'=>$row[3],
            'female'=>$row[4],
            'specialization'=>$row[5],
            'district'=>$row[6],
            'status'=>$row[7],
            'certificate'=>$row[8]
        ]);
    }
}
