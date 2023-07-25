<?php

namespace App\Http\Livewire\CrudCourrierarr;
use App\Models\Courrierarr;
use Livewire\Component;

class AddCourrierarr extends Component
{   
    public $numCr, $dateArrive, $expediteur, $objet, $observation, $direction;
   
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'numCr' => 'required',
            'dateArrive' => 'required',
            'expediteur' => 'required',
            'objet' => 'required',
            'observation' => 'required',
            'direction' => 'required',
        ]);
    }

    public function storeCourrierarr()
    {
        $this->validate([
            'numCr' => 'required',
            'dateArrive' => 'required',
            'expediteur' => 'required',
            'objet' => 'required',
            'observation' => 'required',
            'direction' => 'required',
           
        ]); 

        $courrierarr = new Courrierarr();

        $courrierarr-> numCr = $this->numCr;
        $courrierarr-> dateArrive = $this->dateArrive;
        $courrierarr-> expediteur = $this->expediteur;
        $courrierarr-> objet = $this->objet;
        $courrierarr->observation = $this->observation;
        $courrierarr->direction = $this->direction;
       

        $courrierarr->save();
        
        session()->flash('message','courrier ajouté avec succès');
        
        $this->numCr = '';
        $this->dateArrive = '';
        $this->expediteur = '';
        $this->objet = '';
        $this->observation = '';
        $this->direction = '';
        
     
       

    }


    public function render()
    {
        return view('livewire.crud-courrierarr.add-courrierarr')->layout('livewire.layouts.base');
    }
}
