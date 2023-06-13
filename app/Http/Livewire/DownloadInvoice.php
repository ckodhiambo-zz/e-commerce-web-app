<?php

namespace App\Http\Livewire;

use Barryvdh\DomPDF\PDF;
use Livewire\Component;

class DownloadInvoice extends Component
{
    public function download()
    {
        $pdf = app(PDF::class);
        $pdf->loadView('pdf.invoice', ['order' => $this->order])
            ->setPaper('a4', 'landscape')
            ->setOptions([
                'defaultFont' => 'Arial',
            ]);

        return $pdf->download('invoice.pdf');
    }

    public function render()
    {
        return view('livewire.download-invoice')->layout('layouts.base');
    }
}
