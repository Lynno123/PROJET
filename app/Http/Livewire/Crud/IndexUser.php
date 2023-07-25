<?php

namespace App\Http\Livewire\Crud;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
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

        // session()->flash('message', 'user a été effacer complètement');
    }

    public function deleteFile()
    {   

        $user = User::where('id', $this->delete_id)->first();
        $user->delete();
     
        $this->dispatchBrowserEvent('fileDeleted');
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $users = User::where('name', 'LIKE', $searchTerm)
        ->orWhere('email', 'LIKE', $searchTerm)
        ->orWhere('id', 'LIKE', $searchTerm)
        ->orderBy('id', 'DESC')->paginate(5);
    
        return view('livewire.crud.index-user', ['users'=>$users])->layout('livewire.layouts.base');
    }
}
