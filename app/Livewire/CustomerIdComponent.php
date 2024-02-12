<?php
 
namespace App\Livewire;
 
use Livewire\Component;
use App\Models\User;
use App\Services\CustomerIdGenerator;
 
class CustomerId extends Component
{
    public $customerId;
 
    public function getCustomerId()
    {
        $this->customerId = User::where('id',auth()->id())->value('customerId');
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}