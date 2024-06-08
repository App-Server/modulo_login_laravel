<x-layout title="User">
    <div class="main-content" >
        <div class="container">
            <h4>List Users</h4>
            <x-form-validation />
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
        <div class="container">
            <div class="py-4">
                {{ $users->links() }}
            </div>
        </div>      
    </div>
</x-layout>