<?php

namespace App\Http\Livewire\Component;

use App\Mail\KirimPesan as MailKirimPesan;
use App\Models\kirimpesan;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public $namaPengirim, $emailPengirim, $pesanPengirim,$kirimsukses = false;
    public $info = true;

    protected $rules = [
        'emailPengirim' => 'required|email:filter,spoof,dns',
    ];
    
    protected $messages = [
        'emailPengirim.required' => 'Email Harus Di isi.',
        'emailPengirim.email' => 'Alamat Email kamu tidak benar',
    ];

    public function kirimpesan(){
        $this->validate();
        $count = kirimpesan::where('email',$this->emailPengirim)->get()->count();
        if($count > 3) return $this->info = false;
        kirimpesan::create([
            'email' => $this->emailPengirim,
            'pesan' => $this->pesanPengirim
        ]);
        Mail::to('bagaswihant@gmail.com')->send(new MailKirimPesan($this->emailPengirim, $this->pesanPengirim));
        $this->kirimsukses = true;
        $this->namaPengirim = $this->emailPengirim = $this->pesanPengirim = '';
    }

    public function render()
    {
        return view('livewire.component.contact');
    }
}
