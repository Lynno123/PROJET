<?php

namespace App\Http\Livewire\Crud;
use App\Models\Utilisateur;
use Livewire\WithPagination;
use Livewire\Component;

class IndexComponent extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchTerm;
    public $delete_id;
    protected $listeners = ['deleteConfirmed'=>'deleteFile'];

    public function delete($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

        // session()->flash('message', 'Utilisateur a été effacer complètement');
    }

    public function deleteFile()
    {   

        $utilisateur = Utilisateur::where('id', $this->delete_id)->first();
        $utilisateur->delete();
     
        $this->dispatchBrowserEvent('fileDeleted');
    }


    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $utilisateurs = Utilisateur::where('nomUser', 'LIKE', $searchTerm)
        ->orWhere('prenomUser', 'LIKE', $searchTerm)
        ->orWhere('phoneUser', 'LIKE', $searchTerm)
        ->orderBy('id', 'DESC')->paginate(5);
        
        return view('livewire.crud.index-component', ['utilisateurs'=>$utilisateurs])->layout('livewire.layouts.base');
    }
}
