<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
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

        $this->addError('invalidCred','test');

        $this->dispatch('show-error', 
            title: 'Authentication Failed', 
            message: 'The email or password you entered is incorrect. Please try again.'
        );
       
    }

    public function resetFields()
    {

            $this->resetErrorBag();

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
                            <input type="email" class="form-control  
                              @if ($errors->has('email') || $errors->has('invalidCred'))
                            is-invalid
                            @endif 
                            shadow-lg" wire:model='email' placeholder="admin@admin" required>
                            <label for="floatingInput">Email address</label>
                             @error('email')
                                <div  class="invalid-feedback" wire:transition>{{ $message }}</div>
                            @enderror
                  </div>

                   <div class="form-floating mb-3">
                            <input type="password" id="loginPassword" class="form-control
                                @if ($errors->has('password') || $errors->has('invalidCred'))
                            is-invalid
                            @endif shadow-lg" wire:model='password' placeholder="admin@admin" required>
                            <label for="floatingInput">Password</label>
                             <i wire:ignore
                                class="bi bi-eye-fill position-absolute top-50 end-0 translate-middle-y me-3 text-secondary d-none" 
                                id="eyeloginPassword"
                                style="cursor: pointer;">
                            </i>
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

            <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 9999;">
                  <x-toasts id="liveToast" color="danger" title="Error"><i class="bi bi-exclamation-diamond"></i> Invalid Email and Password</x-toasts>
            </div>
          

            
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
    

    let eyeBtn = document.querySelector('#eyeloginPassword');
    let passwordInput = document.querySelector('#loginPassword');

    $wire.on('show-error', () => {

         const toastLiveExample = document.getElementById('liveToast');
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        eyeBtn.classList.remove('bi-eye-fill');

        toastBootstrap.show();

            
    }); 


      const inputFields = document.querySelectorAll('input') 
        inputFields.forEach( input =>{
            input.addEventListener('click',()=>{
                $wire.resetFields();
            });
        });

  

    passwordInput.addEventListener('input',(event)=>{

        let input = event.target.value;

        if(input)
        {
            eyeBtn.classList.remove('d-none');
         }else{
            eyeBtn.classList.add('d-none');
        }
    
    });

     eyeBtn.addEventListener('click',(event)=>{

        let isPassword = passwordInput.type === 'password' ? true : false;

        if(isPassword)
        {
        passwordInput.type = 'text';
        eyeBtn.classList.remove('bi-eye-fill');
        eyeBtn.classList.add('bi-eye-slash-fill');

        }else{
        passwordInput.type = 'password';
        eyeBtn.classList.remove('bi-eye-slash-fill');
        eyeBtn.classList.add('bi-eye-fill');
        }


    });



    
</script>
@endscript


