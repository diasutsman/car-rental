<?php

namespace App\Http\Livewire\Auth;

use Closure;
use Filament\Forms;
use Illuminate\Support\Facades\Hash;
use JeffGreco13\FilamentBreezy\FilamentBreezy;
use JeffGreco13\FilamentBreezy\Http\Livewire\Auth\Register as FilamentRegister;

class Register extends FilamentRegister
{

    public $username;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('username')
                ->label(__('Username'))
                ->unique('users')
                ->rules(['lowercase'])
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label(__('filament-breezy::default.fields.email'))
                ->required()
                ->email()
                ->unique(table: config('filament-breezy.user_model')),
            Forms\Components\TextInput::make('password')
                ->label(__('filament-breezy::default.fields.password'))
                ->required()
                ->password()
                ->rules(app(FilamentBreezy::class)->getPasswordRules()),
            Forms\Components\TextInput::make('password_confirm')
                ->label(__('filament-breezy::default.fields.password_confirm'))
                ->required()
                ->password()
                ->same('password'),
        ];
    }
    protected function prepareModelData($data): array
    {
        $preparedData = [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        return $preparedData;
    }
}
