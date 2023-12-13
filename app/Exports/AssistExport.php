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
            'code',
            'Participante',
            'Evento',
            'Carrera Profesional',
            'Ciclo',
            'Grupo',
            'Fecha'
        ];
    }

    public function map($assist): array
    {
        $dateValue = $assist->date;
        $dateTime = new DateTime($dateValue);
        return [
            $assist->code,
            $assist->participant->name,
            $assist->event->name,
            $assist->participant->career->name,
            $assist->semester,
            $assist->group,
            /* $assist->date, */
            Date::dateTimeToExcel($dateTime)
        ];
    }

    public function columnFormats(): array
    {
        return [
            'G' => 'd/m/Y H:m:s'
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
    }
}
