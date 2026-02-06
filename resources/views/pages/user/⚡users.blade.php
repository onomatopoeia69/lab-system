<?php

use Livewire\Attributes\Layout;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Livewire\Component;

new 
#[Layout('layouts.home',['title' => 'Laboratory'])]
class extends Component
{
     use WithPagination;

    #[Computed]
    public function users()
    {
        return User::paginate(5);
    }

};
?>

<div class="p-4">

    <div class="container-fluid p-4">

         <h3 class="mb-4">Users</h3>

         <table class="table">
            <thead>
                <tr>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
               

                @forelse ($this->users as $user)

                 <tr wire:key='{{ $user->id }}'>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    @if ($user->id != Auth::user()->id)
                        <button class="btn btn-danger btn-sm">Deactivate</button>
                    @endif
                     
                </td>

                </tr>
                    
                @empty

                <tr>
                    <td class="text-center">No Results</td>
                </tr>
                    
                @endforelse

            </tbody>
            </table>

                {{ $this->users->links() }}
          

    </div>


</div>