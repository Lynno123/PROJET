<?php

namespace App\Http\Livewire\CrudColis;
use App\Models\Colis;
use Livewire\Component;

class AddColis extends Component
{
    public $code_colis, $nom_colis, $type_colis, $date_colis, $marque_objet, $nombre_colis, $nombre_objet;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code_colis' => 'required',
            'nom_colis' => 'required',
            'type_colis' => 'required',
            'date_colis' => 'required',
            'marque_objet' => 'required',
            'nombre_colis' => 'required',
            'nombre_objet' => 'required',

        ]);
    }

    public function storeColis()
    {
        $this->validate([
            'code_colis' => 'required',
            'nom_colis' => 'required',
            'type_colis' => 'required',
            'date_colis' => 'required',
            'marque_objet' => 'required',
            'nombre_colis' => 'required',
            'nombre_objet' => 'required',
           
        ]); 

        $colis = new Colis();

        $colis-> code_colis = $this->code_colis;
        $colis-> nom_colis = $this->nom_colis;
        $colis-> type_colis = $this->type_colis;
        $colis->date_colis = $this->date_colis;
        $colis-> marque_objet = $this->marque_objet;
        $colis->nombre_colis = $this->nombre_colis;
        $colis->nombre_objet = $this->nombre_objet;
       

        $colis->save();
        
        session()->flash('message','Colis ajouté avec succès');
        
        $this->code_colis = '';
        $this->nom_colis = '';
        $this->type_colis = '';
        $this->date_colis = '';
        $this->marque_objet = '';
        $this->nombre_colis = '';
        $this->nombre_objet = '';
        
     
       

    }


    public function render()
    {
        return view('livewire.crud-colis.add-colis')->layout('livewire.layouts.base');
    }
}
