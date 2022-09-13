<form action="{{ route('set_language_locale', $lang )}}" method="POST">
    @csrf
    <button type="submit" class="nav-link mx-1" style='background-color: transparent; border: none;'>
    <span class="flag-icon flag-icon-{{$nation}}"></span>
    </button>
</form>