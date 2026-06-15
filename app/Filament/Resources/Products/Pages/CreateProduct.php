<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    // #[Override]
    // protected function getRedirectUrl(): string
    // {
    //     return ProductResource::getUrl('index');
    // }
 
    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['price'] = $data['price'] * 100;
 
    //     return $data;
    // }
}
