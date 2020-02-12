<?php

namespace App\Imports;

use App\post;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class postsImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new post([
            'title'     => $row['title'],
           'body'    => $row['body']
        ]);
    }
}
