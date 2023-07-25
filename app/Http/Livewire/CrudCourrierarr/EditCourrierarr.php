<?php

namespace App\Http\Livewire\CrudCourrierarr;
use App\Models\Courrierarr;
use Livewire\Component;

class EditCourrierarr extends Component
{   
    public $numCr, $dateArrive, $expediteur, $objet, $observation, $direction, $courrierarr_edit_id;

    public function mount($id)
    {
        $courrierarr = Courrierarr::where('id',$id)->first();

        $this->numCr = $courrierarr->numCr;
        $this->dateArrive = $courrierarr->dateArrive;
        $this->expediteur = $courrierarr->expediteur;
        $this->objet = $courrierarr->objet;
        $this->observation = $courrierarr->observation;
        $this->direction = $courrierarr->direction;

        $this->courrierarr_edit_id = $courrierarr->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'numCr' => 'required|unique:courrierarrs,numCr,'.$this->courrierarr_edit_id.'',
            'dateArrive' => 'required',
            'expediteur' => 'required',
            'objet' => 'required',
            'observation' => 'required',
            'direction' => 'required',
        ]);
    }

    
    public function updateCourrierarr()
    {
        $this->validate([
            'numCr' => 'required|unique:courrierarrs,numCr,'.$this->courrierarr_edit_id.'',
            'dateArrive' => 'required',
            'expediteur' => 'required',
            'objet' => 'required',
            'observation' => 'required',
            'direction' => 'required',
        ]);

        $courrierarr = Courrierarr::where('id', $this->courrierarr_edit_id)->first();

        $courrierarr-> numCr = $this->numCr;
        $courrierarr-> dateArrive = $this->dateArrive;
        $courrierarr-> expediteur = $this->expediteur;
        $courrierarr->objet = $this->objet;
        $courrierarr-> observation = $this->observation;
        $courrierarr-> direction = $this->direction;
    

        $courrierarr->save();
        
        session()->flash('message','courrierarr a été modifié avec succès');
    }


    public function render()
    {
        return view('livewire.crud-courrierarr.edit-courrierarr')->layout('livewire.layouts.base');
    }
}
