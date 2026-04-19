<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (empty($data['code'])) {
            $data['code'] = $this->generateUniqueCode();
        } else {
            $data['code'] = strtoupper($data['code']);
        }
        $record->update($data);

        return $record;
    }

    private function generateUniqueCode(): string
    {
        do {
            $code = strtoupper(Str::random(10));
        } while (Product::where('code', $code)->exists());

        return $code;
    }
}
