<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{
    public $name, $phone, $contactId;

    protected $listeners = [
        'showContact' => 'showContact'
    ];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId =encrypt($contact['id']);
    }

    public function update()
    {
        $messages = [
            'name.required' => 'Nama harus diisi.',
            'phone.required' => 'No HP harus diisi.',
        ];

        $this->validate([
            'name' => 'required|min:3',
            'phone' => 'required|max:15'
        ], $messages);

        if($this->contactId){
            $contact = Contact::find(decrypt($this->contactId));
            $contact->update([
                'name' => $this->name,
                'phone' => $this->phone,
            ]);

            $this->resetInput();
            $this->emit('contactUpdated', $contact);
        }


    }

    private function resetInput()
    {
        $this->phone = null;
        $this->name = null;
    }
}
