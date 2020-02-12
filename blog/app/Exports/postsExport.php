<?php

namespace App\Exports;

use App\post;
use Maatwebsite\Excel\Concerns\FromCollection;

class postsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return post::all();
    }
}
