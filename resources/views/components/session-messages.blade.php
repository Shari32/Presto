@if (session('message'))
    <div class="alert alert-success mt-2">
        {{ session('message') }}
    </div>
@endif