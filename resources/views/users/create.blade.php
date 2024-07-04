<x-layout title="Create users">
    <div class="main-content" >
        <div class="container-fluid">
            <h4>Create users</h4><br>
            <x-form-validation />
            <div class="card">
                <div class="card-body">
                    @include('users.include.create-user')
                </div>
            </div>
        </div>
    </div>
</x-layout>