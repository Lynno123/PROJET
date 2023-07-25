<?php

namespace App\Http\Livewire\CrudCourrierarr;
use App\Models\Courrierarr;
use Livewire\Component;
use Livewire\WithPagination;

class IndexCourrierarr extends Component
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
        

        // session()->flash('message', 'courrier arrive a été effacer complètement');
    }

    public function deleteFile()
    {
        $courrierarr = Courrierarr::where('id', $this->delete_id)->first();
        $courrierarr->delete();

        $this->dispatchBrowserEvent('fileDeleted');
    }


    public function render()
    {   
        $searchTerm = '%'.$this->searchTerm. '%';
        $courrierarrs = Courrierarr::where('numCr', 'LIKE', $searchTerm)
        ->orWhere('direction', 'LIKE', $searchTerm)
        ->orderBy('id', 'DESC')->paginate(5);
        return view('livewire.crud-courrierarr.index-courrierarr', ['courrierarrs'=>$courrierarrs])->layout('livewire.layouts.base');
    }
}
