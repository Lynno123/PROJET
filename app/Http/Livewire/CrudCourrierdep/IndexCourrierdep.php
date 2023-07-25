<?php

namespace App\Http\Livewire\CrudCourrierdep;
use App\Models\Courrierdep;
use Livewire\Component;
use Livewire\WithPagination;

class IndexCourrierdep extends Component
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

        // session()->flash('message', 'courrier depart a été effacer complètement');
    }

    public function deleteFile()
    {   
        $courrierdep = Courrierdep::where('id', $this->delete_id)->first();
        $courrierdep->delete();

        $this->dispatchBrowserEvent('fileDeleted');
    }


    public function render()
    {   
        $searchTerm = '%'.$this->searchTerm. '%';
        $courrierdeps = Courrierdep::where('numCr', 'LIKE', $searchTerm)
        ->orWhere('destinataire', 'LIKE', $searchTerm)
        ->orWhere('dateDepart', 'LIKE', $searchTerm)
        ->orderBy('id', 'DESC')->paginate(5);
        return view('livewire.crud-courrierdep.index-courrierdep', ['courrierdeps'=>$courrierdeps])->layout('livewire.layouts.base');
    }
}
