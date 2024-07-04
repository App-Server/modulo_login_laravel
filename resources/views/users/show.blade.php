<x-layout title="Details">
    <div class="main-content" >
        <div class="container-fluid">
            <h4>Details</h4>
            <br>
            <div class="card">
                <h5 class="card-header">Register</h5>
                <div class="card-body">
                  <p class="card-text"><i class="bi bi-person-bounding-box"></i><strong> Username: </strong></p>
                  <p class="card-text"><i class="bi bi-envelope-at"></i><strong> Email: </strong></p>
                  <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Create: </strong></p>
                  <p class="card-text"><i class="bi bi-calendar-check"></i><strong> Update: </strong></p>
                  <x-modal>
                    <p style="color: red">Você esta prestes a excluir um usuario, tem certeza que deseja continuar?</p>
                    <button class="openModalButton btn btn-outline-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Delete</button>
                  </x-modal>
                </div>
            </div>
        </div>
      </div>
</x-layout>