<?php

namespace App\Http\Livewire\Crudbranche;
use App\Models\Branche;
use Livewire\Component;
// use PDF;
use Livewire\WithPagination;

class IndexBranche extends Component
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
      

        // session()->flash('message', 'Branche a été effacer complètement');
    }

    public function deleteFile()
    {
        $branche = Branche::where('id', $this->delete_id)->first();
        $branche->delete();

        $this->dispatchBrowserEvent('fileDeleted');
    }

    // public function downloadPDF($id){
    //     $branche = Branche::find($id);
  
    //     $pdf = PDF::loadView('pdf', compact('branche'));
    //     return $pdf->download('invoice.pdf');
  
    //   }

    public function render()
    {   
        $searchTerm = '%'.$this->searchTerm. '%';
        $branches = Branche::where('codebr', 'LIKE', $searchTerm)
        ->orWhere('nombr', 'LIKE', $searchTerm)
        ->orderBy('id', 'DESC')->paginate(5);

        return view('livewire.crudbranche.index-branche', ['branches'=>$branches])->layout('livewire.layouts.base');
    }
    
}
