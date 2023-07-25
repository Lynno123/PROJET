<?php

namespace App\Http\Livewire\Crud;
use App\Models\Utilisateur;
use Livewire\Component;

class EditUtilisateurComponent extends Component
{   
     
    public $nomUser, $prenomUser, $adresseUser, $mdpUser, $phoneUser, $posteUser, $utilisateur_edit_id;

    public function mount($id)
    {
        $utilisateur = Utilisateur::where('id',$id)->first();

        $this->nomUser = $utilisateur->nomUser;
        $this->prenomUser = $utilisateur->prenomUser;
        $this->adresseUser = $utilisateur->adresseUser;
        $this->mdpUser = $utilisateur->mdpUser;
        $this->phoneUser = $utilisateur->phoneUser;
        $this->posteUser = $utilisateur->posteUser;

        $this->utilisateur_edit_id = $utilisateur->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'nomUser' => 'required|unique:utilisateurs,nomUser,'.$this->utilisateur_edit_id.'',
            'prenomUser' => 'required',
            'adresseUser' => 'required',
            'mdpUser' => 'required',
            'phoneUser' => 'required|unique:utilisateurs,phoneUser,'.$this->utilisateur_edit_id.'',
            'posteUser' => 'required',
        ]);
    }

    
    public function updateUtilisateur()
    {
        $this->validate([
            'nomUser' => 'required|unique:utilisateurs,nomUser,'.$this->utilisateur_edit_id.'',
            'prenomUser' => 'required',
            'adresseUser' => 'required',
            'mdpUser' => 'required',
            'phoneUser' => 'required|unique:utilisateurs,phoneUser,'.$this->utilisateur_edit_id.'',
            'posteUser' => 'required',
        ]);

        $utilisateur = Utilisateur::where('id', $this->utilisateur_edit_id)->first();

        $utilisateur-> nomUser = $this->nomUser;
        $utilisateur-> prenomUser = $this->nomUser;
        $utilisateur-> adresseUser = $this->adresseUser;
        $utilisateur->mdpUser = $this->mdpUser;
        $utilisateur-> phoneUser = $this->phoneUser;
        $utilisateur-> posteUser = $this->posteUser;
    

        $utilisateur->save();
        
        session()->flash('message','utilisateur a été modifié avec succès');
    }


    public function render()
    {
        return view('livewire.crud.edit-utilisateur-component')->layout('livewire.layouts.base');
    }
}
