<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Facades\File;

class ViewMyOrderDetailsComponent extends Component
{

    public $order;
    public $orderItems;

    // Status mapping
    public $statusLabels = [
        0 => 'Pending',
        1 => 'Processing',
        2 => 'Delivered',
        3 => 'Cancelled',
    ];

    public function mount($order_id)
    {
        $this->order = Order::find($order_id);
        $this->orderItems = $this->order->orderItems;
    }

    public function exportPdf()
    {
        $html = view('livewire.view-my-order-details-component', ['order' => $this->order, 'orderItems' => $this->orderItems, 'statusLabels' => $this->statusLabels])->layout('layouts.base')->render();
        $options = new Options();
        $options->setIsHtml5ParserEnabled(true);
        $options->setIsRemoteEnabled(true);
        $options->setChroot(public_path());
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $output = $dompdf->output();
        $path = public_path('storage/invoices/');
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $filename = 'invoice_' . $this->order->id . '.pdf';
        file_put_contents($path . $filename, $output);
        return response()->streamDownload(function () use ($output) {
            echo $output;
        }, $filename);
    }


    public function render()
    {
        return view('livewire.view-my-order-details-component')->layout('layouts.base');
    }
}
