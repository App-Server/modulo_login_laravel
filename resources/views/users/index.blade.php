<x-layout title="User">
    <div class="main-content" >
        <div class="container-fluid">
            <h4>List Users</h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create User
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('users.include.create-user')
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
            <x-form-validation />
            <br><br>
            <div class="card" style="width: 100%;">   
                <ul class="list-group list-group-flush">
                    @foreach ($users as $user)
                        <li class="list-group-item">
                            <br>
                            
                            <div class="container text-left">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="validationCustomUsername" class="form-label"><strong>Nome:</strong>{{ $user->name }}</label>
                                    </div>
                                
                                    <div class="col-md-5">
                                        <label for="validationCustomUsername" class="form-label"><strong>Email:</strong>{{ $user->email }}</label>
                                    </div>

                                    <div class="col-md-1">
                                        <a href="{{ route('users.edit', $user->id ) }}" ><i class="bi bi-pencil-square"></i></a>
                                    </div>

                                    <div class="col-md-1">
                                        <a href="{{ route('users.details', $user->id ) }}" ><i class="bi bi-eye"></i></a>                                 
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- Providers | AppServiceProvider.php -> Paginator::useBootstrap(); --}}
        <div class="container-fluid">
            <div class="py-4">
                {{ $users->links() }}
            </div>
        </div>      
    </div>
</x-layout>