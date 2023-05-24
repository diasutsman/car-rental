<?php

namespace App\Filament\Pages;

use JeffGreco13\FilamentBreezy\Pages\MyProfile as FilamentProfile;
use Filament\Forms;

class MyProfile extends FilamentProfile
{
    protected function getUpdateProfileFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make($this->loginColumn)
                ->required()
                ->email(fn () => $this->loginColumn === 'email')
                ->unique(config('filament-breezy.user_model'), ignorable: $this->user)
                ->label(__('Username')),
            Forms\Components\TextInput::make('email')
                ->required()
                ->unique(config('filament-breezy.user_model'), ignorable: $this->user)
                ->label(__('filament-breezy::default.fields.email')),
        ];
    }
}
