<?php

namespace App\Filament\Resources\CategoryNilaiResource\Pages;

use App\Filament\Resources\CategoryNilaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryNilais extends ManageRecords
{
    protected static string $resource = CategoryNilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        $locale = app()->getLocale();

        if($locale == 'id'){
            return 'Kategori Nilai';
        } else {
            return 'Category Nilai';
        }
    }

    
}
