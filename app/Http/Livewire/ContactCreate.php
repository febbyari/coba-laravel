<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    // untuk mengirimkan data
    // public $contacts;
    // public function mount($contacts)
    // {
    //     dd($contacts);
    //     $this->contacts = $contacts;
    // }

    public $name, $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $messages = [
            'name.required' => 'Nama harus diisi.',
            'phone.required' => 'No HP harus diisi.',
        ];

        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|max:15'
        ], $messages);

        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
        $this->resetInput();
        // return redirect('/');
        $this->emit('contactStored', $contact);
    }

    private function resetInput()
    {
        $this->phone = null;
        $this->name = null;
    }
}
