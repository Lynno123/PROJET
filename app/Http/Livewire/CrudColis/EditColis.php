<?php

namespace App\Http\Livewire\CrudColis;
use App\Models\Colis;
use Livewire\Component;

class EditColis extends Component
{   
    public $code_colis, $nom_colis, $type_colis, $date_colis, $marque_objet, $nombre_colis, $nombre_objet, $colis_edit_id;


    public function mount($id)
    {
        $colis = Colis::where('id',$id)->first();

        $this->code_colis = $colis->code_colis;
        $this->nom_colis = $colis->nom_colis;
        $this->type_colis = $colis->type_colis;
        $this->date_colis = $colis->date_colis;
        $this->marque_objet = $colis->marque_objet;
        $this->nombre_colis = $colis->nombre_colis;
        $this->nombre_objet = $colis->nombre_objet;


        $this->colis_edit_id = $colis->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code_colis' => 'required|unique:colis,code_colis,'.$this->colis_edit_id.'',
            'nom_colis' => 'required',
            'type_colis' => 'required',
            'date_colis' => 'required',
            'marque_objet' => 'required',
            'nombre_colis' => 'required',
            'nombre_objet' => 'required',
        ]);
    }

    
    public function updateColis()
    {
        $this->validate([
            'code_colis' => 'required|unique:colis,code_colis,'.$this->colis_edit_id.'',
            'nom_colis' => 'required',
            'type_colis' => 'required',
            'date_colis' => 'required',
            'marque_objet' => 'required',
            'nombre_colis' => 'required',
            'nombre_objet' => 'required',
        ]);

        $colis = Colis::where('id', $this->colis_edit_id)->first();

        $colis-> code_colis = $this->code_colis;
        $colis-> nom_colis = $this->nom_colis;
        $colis-> type_colis = $this->type_colis;
        $colis-> date_colis = $this->date_colis;
        $colis-> marque_objet = $this->marque_objet;
        $colis-> nombre_colis = $this->nombre_colis;
        $colis->nombre_objet = $this->nombre_objet;
    

        $colis->save();
        
        session()->flash('message','Colis a été modifié avec succès');
    }


    public function render()
    {
        return view('livewire.crud-colis.edit-colis')->layout('livewire.layouts.base');
    }
}
