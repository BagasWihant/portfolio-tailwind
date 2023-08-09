<?php

namespace App\Http\Livewire\Component;

use App\Mail\KirimPesan as MailKirimPesan;
use App\Models\kirimpesan;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public $namaPengirim, $emailPengirim, $pesanPengirim,$kirimsukses = false;

    public function kirimpesan(){
        kirimpesan::create([
            'email' => $this->emailPengirim,
            'pesan' => $this->pesanPengirim
        ]);
        Mail::to('bagaswihant@gmail.com')->send(new MailKirimPesan($this->emailPengirim, $this->pesanPengirim));
        $this->kirimsukses = true;
    }

    public function render()
    {
        return view('livewire.component.contact');
    }
}
