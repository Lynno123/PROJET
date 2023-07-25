<?php

namespace App\Http\Livewire\CrudColis;
use App\Models\Colis;
use Livewire\Component;
use Livewire\WithPagination;

class IndexColis extends Component
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
        $colis = Colis::where('id', $this->delete_id)->first();
        $colis->delete();

        $this->dispatchBrowserEvent('fileDeleted');
    }

    public function render()
    {   
        $searchTerm = '%'.$this->searchTerm. '%';
        $coliss = Colis::where('code_colis', 'LIKE', $searchTerm)
        ->orWhere('nom_colis', 'LIKE', $searchTerm)
        ->orderBy('id', 'DESC')->paginate(5);
        return view('livewire.crud-colis.index-colis', ['coliss'=>$coliss])->layout('livewire.layouts.base');
    }
}
