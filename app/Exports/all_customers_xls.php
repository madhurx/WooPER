<?php

namespace App\Exports;

use App\Models\Learners;

use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;    
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
class all_customers_xls implements FromCollection, WithHeadings, WithCustomStartCell
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        $learners = new Learners;
        return $learners->select('first_name', 'last_name', 'gender', 'country', 'username')->get();

    }
    public function headings() :array
    {
        return [
            'First Name',
            'Last Name',
            'Gender',
            'Country',
            'Username',
        ];
    }
    public function startCell(): string{
        return 'A2';
    }
}
