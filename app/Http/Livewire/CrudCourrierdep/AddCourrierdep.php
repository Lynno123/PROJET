<?php

namespace App\Http\Livewire\CrudCourrierdep;
use App\Models\Courrierdep;
use Livewire\Component;

class AddCourrierdep extends Component
{   

    public $numCr, $dateDepart, $destinataire, $objet, $observation;
   
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'numCr' => 'required',
            'dateDepart' => 'required',
            'destinataire' => 'required',
            'objet' => 'required',
            'observation' => 'required',
        ]);
    }

    public function storeCourrierdep()
    {
        $this->validate([
            'numCr' => 'required',
            'dateDepart' => 'required',
            'destinataire' => 'required',
            'objet' => 'required',
            'observation' => 'required',
           
        ]); 

        $courrierdep = new Courrierdep();

        $courrierdep-> numCr = $this->numCr;
        $courrierdep-> dateDepart = $this->dateDepart;
        $courrierdep-> destinataire = $this->destinataire;
        $courrierdep-> objet = $this->objet;
        $courrierdep->observation = $this->observation;
       

        $courrierdep->save();
        
        session()->flash('message','courrier ajouté avec succès');
        
        $this->numCr = '';
        $this->dateDepart = '';
        $this->destinataire = '';
        $this->objet = '';
        $this->observation = '';
        
     

    }
    public function render()
    {
        return view('livewire.crud-courrierdep.add-courrierdep')->layout('livewire.layouts.base');
    }
}
