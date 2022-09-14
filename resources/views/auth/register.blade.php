<x-layout>

    <x-header>{{__('ui.register')}}</x-header>

    <div class="container  my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 box">
                
                <form method="POST" action="{{route('register')}}">
                    <x-validation-errors />
                    @csrf
                    <div class="my-3">
                        
                        <label for="name" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                        
                    </div>
                    
                    <div class="mb-3">
                        
                        <label for="email" class="form-label"> Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        
                    </div>
                    
                    <div class="mb-3">
                        
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password"class="form-control" id="password">
                        
                    </div>
                    
                    <div class="mb-3">
                        
                        <label for="password_confirmation" class="form-label"> {{__('ui.confirm')}} Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        
                    </div>
                    
                    <button type="submit" class="btn bg-btn mb-3">{{__('ui.register')}}</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>

