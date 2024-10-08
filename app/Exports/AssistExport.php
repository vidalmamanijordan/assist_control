<?php

namespace App\Exports;

use App\Models\Assist;
use DateTime;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AssistExport implements FromCollection, WithCustomStartCell, Responsable, WithMapping, WithColumnFormatting, WithHeadings, WithDrawings, WithStyles, ShouldAutoSize
{
    use Exportable;

    private $filters;
    private $fileName = 'assist.xlsx';
    private $writerType = Excel::XLSX;

    public function __construct($filters)
    {
        $this->filters = $filters;
    }
    
    public function collection()
    {
        return Assist::filter($this->filters)->get();
    }

    public function startCell(): string
    {
        return 'A6';
    }

    public function headings(): array  
    {
        return [
            'N°',
            'Código',
            'Participante',
            'Evento',
            'Carrera Profesional',
            'Ciclo',
            'Grupo',
            'Fecha | Hora',
            'Usuario | Registrador'
        ];
    }

    public function map($assist): array
    {
        static $counter = 1;

        $dateValue = $assist->date;
        $dateTime = new DateTime($dateValue);

        return [
            $counter++,
            $assist->code,
            $assist->participant->name,
            $assist->event->name,
            $assist->participant->career->name,
            $assist->semester,
            $assist->group,
            Date::dateTimeToExcel($dateTime),
            $assist->user->name 
        ];
    }

    public function columnFormats(): array
    {
        return [
            'H' => 'd/m/Y H:m:s'
        ];
    }

    public function drawings()
    {
        $drawing = new Drawing();

        $drawing->setName('logo');
        $drawing->setDescription('logo_vijorma');
        $drawing->setPath(public_path('img/logos/vijorma_oficial.png'));
        $drawing->setHeight(50);
        $drawing->setCoordinates('A2');

        return $drawing;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Participantes');
        $sheet->getStyle('A6:I6')->applyFromArray([
            'font' => [
                'bold' => true
            ]
        ]);

        $sheet->getStyle($sheet->calculateWorksheetDimension())
            ->getBorders()->getAllBorders()->setBorderStyle('none');
    }
}
