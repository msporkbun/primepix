<?php

namespace App\Livewire;

use Livewire\Component;

class SidebarForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ];
    }

    public function submit()
    {
        $this->validate();

        // Handle form submission (e.g., save to database)
        // Example:
        // Contact::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'message' => $this->message,
        // ]);

        session()->flash('success', 'Form submitted successfully!');

        // Reset the form fields
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.sidebar-form');
    }
}
