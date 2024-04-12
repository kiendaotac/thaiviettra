<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name, $phone, $email, $address, $message;

    public function rules()
    {
        return [
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['required', 'string', 'max:255'],
            'email'   => ['nullable', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:500'],
        ];
    }
    public function render()
    {
        return view('livewire.contact');
    }

    public function save()
    {
        $this->validate();
        $contact = \App\Models\Contact::create([
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message
        ]);
        if ($contact) {
            $this->dispatch('contacted');
        }
    }
}
