<?php
 
namespace App\Livewire;
 
use Livewire\Component;
use App\Models\User;
 
class CustomerIdComponent extends Component
{
    public $customerId;
 
    public function getCustomerId()
    {
        $this->customerId = User::where('id',auth()->id())->value('customerId');
    }
 
    public function render()
    {
        return view('livewire.customerid');
    }
}