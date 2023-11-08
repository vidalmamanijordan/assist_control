<?php

namespace App\Exports;

use App\Models\Participant;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ParticipantsExport implements FromCollection, WithCustomStartCell, Responsable, WithMapping, WithColumnFormatting, WithHeadings, WithDrawings, ShouldAutoSize
                                    , WithStyles
{
    use Exportable;

    private $fileName = 'participant.xlsx';
    private $writerType = Excel::XLSX;

    public function collection()
    {
        return Participant::all();
    }

    public function startCell(): string
    {
        return 'A6';
    }

    public function map($participant): array
    {
        return [
            $participant->name,
            $participant->dni,
            $participant->phone,
            $participant->email,
            $participant->career->name,
            Date::dateTimeToExcel($participant->created_at)
        ];
    }

    public function columnFormats(): array
    {
        return [
            'F' => 'dd/mm/yyyy'
        ];
    }

    public function headings(): array
    {
        return [
            'Nombres',
            'DNI',
            'Telefono',
            'Correo',
            'Carrera Profesional',
            'Fecha Creación'
        ];
    }

    public function drawings()
    {
        $drawing = new Drawing();

        $drawing->setName('logo');
        $drawing->setDescription('logo_dti');
        $drawing->setPath(public_path('img/logos/dti_oficial.png'));
        $drawing->setHeight(50);
        $drawing->setCoordinates('A2');

        return $drawing;
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Participantes');
        $sheet->getStyle('A6:F6')->applyFromArray([
            'font' => [
                'bold' => true,
                'name' => 'Arial'
            ]
        ]);
    }
}
