<x-user-layout>
    {{---------------------
        $slot
    --------------------}}
    <h1>Setting Page</h1>
    <form action="{{ route('logout1') }}" method="post">
        @csrf
        <input class="logout btn btn-light" type="submit" value="Logout">
    </form>
    {{---------------------
        $slot
    --------------------}}
</x-user-layout>
