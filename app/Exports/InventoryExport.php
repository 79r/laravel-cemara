<?php

namespace App\Exports;

use App\InventoryItem;

use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style;

use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class InventoryExport implements 
                                FromCollection,
                                WithHeadings,
                                WithColumnFormatting,
                                WithMapping,
                                ShouldAutoSize,
                                WithEvents {

    public function map($inventories): array {
        return [
            // 'Cemara Global Inventory',
            $inventories->serial_number,
            $inventories->name,
            $inventories->unit_price,
            $inventories->qty,
            $inventories->price,
            date('Y', strtotime($inventories->year_of_purchase)),
            $inventories->category->name,
            $inventories->brand->name,
            $inventories->supplier->name,
            // Date::dateTimeToExcel($i->created_at),
        ];
    }

    public function columnFormats(): array {
        return [
            'C' => NumberFormat::FORMAT_CURRENCY_USD,
            'E' => NumberFormat::FORMAT_CURRENCY_USD,
        ];
    }

    public function headings(): array {
        return [
            'SERIAL NUMBER',
            'NAMA ITEM',
            'HARGA SATUAN',
            'QTY',
            'HARGA',
            'TAHUN BELI',
            'KATEGORI',
            'BRAND',
            'SUPPLIER',
        ];
    }

    public function registerEvents(): array {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
            },
        ];
    }

    public function collection() {
        return InventoryItem::all();
    }

}