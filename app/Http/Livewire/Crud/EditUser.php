<?php

namespace App\Http\Livewire\Crud;
use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{

    public $name, $email, $password, $user_edit_id;

    public function mount($id)
    {
        $user = User::where('id',$id)->first();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
      
      

        $this->user_edit_id = $user->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|unique:users,name,'.$this->user_edit_id.'',
            'email' => 'required',
            'password' => 'required',

        ]);
    }

    
    public function updateUser()
    {
        $this->validate([
            'name' => 'required|unique:users,name,'.$this->user_edit_id.'',
            'email' => 'required',
            'password' => 'required',
        
        ]);

        $user = user::where('id', $this->user_edit_id)->first();

        $user-> name = $this->name;
        $user-> email = $this->email;
        $user-> password = $this->password;
    

        $user->save();
        
        session()->flash('message','user a été modifié avec succès');
    }

    public function render()
    {
        return view('livewire.crud.edit-user')->layout('livewire.layouts.base');
    }
}
