<?php

namespace App\Filament\Resources\StudentResource\Pages;

use Filament\Actions;
use App\Models\Student;
use Doctrine\DBAL\Schema\View;
use App\Imports\ImportStudents;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\StudentResource;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getHeader(): ?\Illuminate\Contracts\View\View
    {
        $data =  Actions\CreateAction::make();
        return view('filament.custom.upload-file', compact('data'));
    }

    public $file = '';

    public function save(){
        // Student::create([
        //     'nis' => '123',
        //     'name' => 'Try First',
        //     'gender' => 'Male',
        // ]);
        if($this->file != ''){
            Excel::import(new ImportStudents, $this->file);
        }
    }
}
