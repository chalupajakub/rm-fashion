<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;


class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        if (empty($data['code'])) {
            $data['code'] = $this->generateUniqueCode();
        } else {
            $data['code'] = strtoupper($data['code']);
        }

        if(empty($data['image'])){
            $data['image'] = 'images/default';
        }

        return Product::create($data);
    }

    private function generateUniqueCode(): string
    {
        do {
            $code = strtoupper(Str::random(10));
        } while (Product::where('code', $code)->exists());

        return $code;
    }


}
