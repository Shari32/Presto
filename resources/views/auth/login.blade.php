<x-layout>
    <x-header>Accedi</x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 box">


                    <form method="POST" action="{{ route('login') }}">

                        <x-validation-errors />

                        @csrf
                        <div class="my-3">

                            <label for="username" class="form-label">Username</label>
                            <input type="text"name="email" class="form-control" id="userame"
                                aria-describedby="UsernameHelp">

                        </div>

                        <div class="mb-3">

                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">

                        </div>

                        <button type="submit" class="btn bg-btn mb-3">Accedi</button>
                        <a href="{{ route('register') }}" class="btn bg-btn mb-3">Registrati</a>
                    </form>

            </div>
        </div>
    </div>
    </div>



</x-layout>
