<?php

namespace App\Http\Livewire\Crud;
use App\Models\Utilisateur;
use Livewire\Component;

class AddUtilisateurComponent extends Component
{
   
        public $nomUser, $prenomUser, $adresseUser, $mdpUser, $phoneUser, $posteUser;
   
        public function updated($fields)
        {
            $this->validateOnly($fields, [
                'nomUser' => 'required',
                'prenomUser' => 'required',
                'adresseUser' => 'required',
                'mdpUser' => 'required|unique:utilisateurs',
                'phoneUser' => 'required|unique:utilisateurs',
                'posteUser' => 'required',

            ]);
        }
    
        public function storeUtilisateur()
        {
            $this->validate([
               'nomUser' => 'required',
                'prenomUser' => 'required',
                'adresseUser' => 'required',
                'mdpUser' => 'required|unique:utilisateurs',
                'phoneUser' => 'required|unique:utilisateurs',
                'posteUser' => 'required',
            ]); 
    
            $utilisateur = new Utilisateur();
    
            $utilisateur-> nomUser = $this->nomUser;
            $utilisateur-> prenomUser = $this->prenomUser;
            $utilisateur-> adresseUser = $this->adresseUser;
            $utilisateur-> mdpUser = $this->mdpUser;
            $utilisateur->phoneUser = $this->phoneUser;
            $utilisateur-> posteUser = $this->posteUser;
    
            $utilisateur->save();
            
            session()->flash('message','Utilisateur ajouté avec succès');
            
            $this->nomUser = '';
            $this->prenomUser = '';
            $this->adresseUser = '';
            $this->mdpUser = '';
            $this->phoneUser = '';
            $this->posteUser = '';
           
    
        }
    
        public function render()
        {
            return view('livewire.crud.add-utilisateur-component')->layout('livewire.layouts.base');
        }
      
    
}
