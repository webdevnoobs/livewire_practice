<?php

namespace App\Http\Livewire;

use App\Mail\SendConfirmation;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject'=>'required',
        'message'=>'required'
    ];

    public function send(){
        $validated = $this->validate();
        Mail::to($validated['email'])->send(new SendConfirmation()); // send confirmation

        session()->flash('message', 'Message successfully sent.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
