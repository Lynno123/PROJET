<?php

namespace App\Http\Livewire\Crudbranche;
use App\Models\Branche;
use Livewire\Component;

class AddBranche extends Component
{   

    public $codebr, $nombr;
   
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'codebr' => 'required',
            'nombr' => 'required',
        ]);
    }

    public function storeBranche()
    {
        $this->validate([
           'codebr' => 'required',
            'nombr' => 'required',
        ]); 

        $branche = new Branche();
        $branche-> codebr = $this->codebr;
        $branche-> nombr = $this->nombr;

        $branche->save();
        
        session()->flash('message','branche ajouté avec succès');
        
        $this->codebr = '';
        $this->nombr = '';
        $this->emit('brancheAdded');

    }
    public function render()
    {
        return view('livewire.crudbranche.add-branche')->layout('livewire.layouts.base');
    }
}
