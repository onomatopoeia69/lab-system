<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new 
#[Layout('layouts.home',['title' => 'Login'])]
class extends Component
{
    public function logout()
    {

        auth()->logout();

        session()->invalidate();  
        session()->regenerateToken();

        return redirect()->route('user.login');
    }
};
?>

<div>
    <div class="d-flex justify-content-center align-items-center">
        <button wire:click='logout'>Logout</button>
    </div>
   
</div>