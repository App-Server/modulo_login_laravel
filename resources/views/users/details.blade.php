<x-layout title="Details">
    <div class="main-content" >
        <div class="container">
            <h4>Details User</h4><br>
            <div class="container text-left">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <strong>Nome:</strong>{{ $user->name }}
                            <br><br>
                            <strong>Email:</strong>{{ $user->email }}
                            <br><br>
                            <strong>Create:</strong>{{ $user->created_at }}
                            <br><br>
                            <strong>Update:</strong>{{ $user->updated_at }}
                            <br><br>
                            <div class="col-md-1">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Delete
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: red">Atenção</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                
                                            <div class="modal-body">
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <p style="color: red">Você esta prestes a excluir um usuário tem certeza que deseja continuar?</p>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </form>   
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>