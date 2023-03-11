<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;
    public $statusUpdate = false;
    public $deleteId, $nameModal;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdated' => 'handleUpdated',
        // 'showContactIndex' => 'showContactIndex'
    ];

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('livewire.index.contact-index', compact('contacts'));
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('showContact', $contact);
    }
    
    public function modal($id)
    {
        $this->deleteId = $id;
        // $this->modal = true;
        $contact = Contact::find($id);
        $this->nameModal = $contact['name'];
        $this->emit('modal', $contact);
    }

    // public function showContactIndex($contact)
    // {
    //     $this->name = $contact['name'];
    // }

    // public function deleteId($id)
    // {
    
    // }

    public function destroy()
    {
        
        // if($id){
            $data = Contact::find($this->deleteId);
            $data->delete();
            session()->flash('message', "Contact {$data['name']} was deleted.");
        // }
    }

    public function handleStored($contact)
    {
        // dd($contact);
        session()->flash('message', "Contact {$contact['name']} was stored.");
    }

    public function handleUpdated($contact)
    {
        // dd($contact);
        session()->flash('message', "Contact {$contact['name']} was updated.");
    }
}
