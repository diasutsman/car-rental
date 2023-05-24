<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Arr;
use Filament\Forms\Components\TextInput;
use JeffGreco13\FilamentBreezy\Http\Livewire\Auth\Login as FilamentLogin;

class Login extends FilamentLogin
{
    protected function getFormSchema(): array
    {
        $parentSchema = parent::getFormSchema();
        if ($this->loginColumn !== 'email') {
            // Pop off the email field and replace it with loginColumn
            unset($parentSchema[0]);
            $parentSchema = Arr::prepend(
                $parentSchema,
                TextInput::make($this->loginColumn)
                    ->label('Username')
                    ->required()
                    ->autocomplete()
            );
        }

        return $parentSchema;
    }
}
