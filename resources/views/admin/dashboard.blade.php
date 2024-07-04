<x-layout title="Dashboard">
    <div class="main-content" >
        <div class="container-fluid">
            <h4>Dashboard</h4>
            @if (Auth::check())
                <p>Hello 👋, {{ Auth::user()->name }}</p>
            @endif
            <br>
        </div>
    </div>
</x-layout>