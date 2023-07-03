<?php

namespace App\Exports;

use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class InvoicesExport implements FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $date;
    public function __construct($date)
    {
        # code...
        $this->from = $date[0];
        $this->to = $date[1];
    }
    use Exportable;

    public function query()
    {
        //
        //return Invoice::query()->whereYear('created_at', $this->year);
        //dd(Invoice::whereBetween('invoice_date', [$this->from, $this->to])->get);
        return Invoice::query()->whereBetween('invoice_date', [$this->from, $this->to]); 
    }
}
