<?php

namespace App\Exports;

use App\Models\Ticket;
use Maatwebsite\Excel\Concerns\FromCollection;

class TicketsExport implements FromCollection
{
    protected $raffle_id;

    public function __construct($raffle_id)
    {
        $this->raffle_id = $raffle_id;
    }

    public function collection()
    {
        return Ticket::where('sorteo_id', $this->raffle_id)
            ->where('aprobado', 1)
            ->get(['id','dni','nombres','apellidos']);
    }
}
