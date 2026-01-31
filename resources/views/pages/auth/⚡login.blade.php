<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

new
#[Layout('layouts.login',['title' => 'Login'])]
 class extends Component
{   
    #[Validate('required|email')]
    public $email = '';
    #[Validate('required')]
    public $password = '';


    public function login()
    {

        $this->validate();

          $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

         if (Auth::attempt($credentials)) {

             $this->reset();
            return redirect()->route('user.home');
        }
        
        $this->reset();

       $this->dispatch('show-error', 
        title: 'Authentication Failed', 
        message: 'The email or password you entered is incorrect. Please try again.'
        );

        
       
    }


};
?>

<div>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
             <h2>Sign In</h2>
                <p>Enter your credentials to access your account</p>
            </div>
            
            <form class="login-form" id="loginForm"  wire:submit.prevent='login' novalidate>

                <div class="form-floating mb-3">
                            <input type="email" class="form-control  @error('email') is-invalid   @else  @if(!empty($username))  @endif @enderror shadow-lg" wire:model='email' placeholder="admin@admin" required>
                            <label for="floatingInput">Email address</label>
                             @error('email')
                                <div  class="invalid-feedback" wire:transition>{{ $message }}</div>
                            @enderror
                  </div>

                   <div class="form-floating mb-3">
                            <input type="email" class="form-control  @error('email') is-invalid   @else  @if(!empty($username))  @endif @enderror shadow-lg" wire:model='password' placeholder="admin@admin" required>
                            <label for="floatingInput">Password</label>
                             @error('password')
                                <div  class="invalid-feedback" wire:transition>{{ $message }}</div>
                            @enderror

                  </div>
               
                <div class="form-options">
                    <label class="remember-wrapper">
                        <input type="checkbox" id="remember" name="remember">
                        <span class="checkbox-label">
                            <span class="checkmark"></span>
                            Remember me
                        </span>
                    </label>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>
                <button type="submit" class="login-btn">
                    <span class="btn-text">Sign In</span>
                    <span class="btn-loader"></span>
                </button>
            </form>

                  <x-toasts id="liveToast" color="danger" title="Error"><i class="bi bi-exclamation-diamond"></i> Invalid Email and Password</x-toasts>
       
          

            
            <div class="success-message" id="successMessage">
                <div class="success-icon">✓</div>
                <h3>Login Successful!</h3>
                <p>Redirecting to your dashboard...</p>
            </div>
        </div>
    </div>
</div>

@script     
<script>
    


    $wire.on('show-error', () => {

         const toastLiveExample = document.getElementById('liveToast');
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);

        toastBootstrap.show();

            
    }); 

    
</script>
@endscript