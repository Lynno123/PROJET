<?php

namespace App\Http\Livewire\Crudbranche;
use App\Models\Branche;
use Livewire\Component;

class EditBranche extends Component
{   
    public $codebr, $nombr, $branche_edit_id;

    public function mount($id)
    {
        $branche = Branche::where('id',$id)->first();

        $this->codebr = $branche->codebr;
        $this->nombr = $branche->nombr;
        $this->branche_edit_id = $branche->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'codebr' => 'required|unique:branches,codebr,'.$this->branche_edit_id.'',
            'nombr' => 'required',
        ]);
    }

    
    public function updateBranche()
    {
        $this->validate([
            'codebr' => 'required|unique:branches,codebr,'.$this->branche_edit_id.'',
            'nombr' => 'required',
        ]);

        $branche = Branche::where('id', $this->branche_edit_id)->first();

        $branche-> codebr = $this->codebr;
        $branche-> nombr = $this->nombr;
    

        $branche->save();
        
        session()->flash('message','branche a été modifié avec succès');

    }
    public function render()
    {
        return view('livewire.crudbranche.edit-branche')->layout('livewire.layouts.base');
    }
}
