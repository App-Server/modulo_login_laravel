<x-layout title="Create edit">
    <div class="main-content" >
        <div class="container">
            <h4>Create edit</h4><br>
            <x-form-validation />
            <div class="card">
                <div class="card-body">
                    @include('users.include.edit-user')
                </div>
            </div>
        </div>
    </div>
</x-layout>