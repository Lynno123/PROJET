<?php

namespace App\Http\Livewire\CrudCourrierdep;
use App\Models\Courrierdep;
use Livewire\Component;

class EditCourrierdep extends Component
{   

    public $numCr, $dateDepart, $destinataire, $objet, $observation, $courrierdep_edit_id;

    public function mount($id)
    {
        $courrierdep = Courrierdep::where('id',$id)->first();

        $this->numCr = $courrierdep->numCr;
        $this->dateDepart = $courrierdep->dateDepart;
        $this->destinataire = $courrierdep->destinataire;
        $this->objet = $courrierdep->objet;
        $this->observation = $courrierdep->observation;

        $this->courrierdep_edit_id = $courrierdep->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'numCr' => 'required|unique:courrierdeps,numCr,'.$this->courrierdep_edit_id.'',
            'dateDepart' => 'required',
            'destinataire' => 'required',
            'objet' => 'required',
            'observation' => 'required',
        ]);
    }

    
    public function updateCourrierdep()
    {
        $this->validate([
            'numCr' => 'required|unique:courrierdeps,numCr,'.$this->courrierdep_edit_id.'',
            'dateDepart' => 'required',
            'destinataire' => 'required',
            'objet' => 'required',
            'observation' => 'required',
        ]);

        $courrierdep = Courrierdep::where('id', $this->courrierdep_edit_id)->first();

        $courrierdep-> numCr = $this->numCr;
        $courrierdep-> dateDepart = $this->dateDepart;
        $courrierdep-> destinataire = $this->destinataire;
        $courrierdep->objet = $this->objet;
        $courrierdep-> observation = $this->observation;
    

        $courrierdep->save();
        
        session()->flash('message','courrierdep a été modifié avec succès');
    }

    public function render()
    {
        return view('livewire.crud-courrierdep.edit-courrierdep')->layout('livewire.layouts.base');
    }
}
