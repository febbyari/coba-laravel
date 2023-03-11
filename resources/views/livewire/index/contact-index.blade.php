<div>

    @if (session()->has('message'))
        <div id="message" onload="fadeOutEffect()" class="alert alert-success">
            {{ session('message') }}
        </div>
        <script>
          function fadeOutEffect() {
            var fadeTarget = document.getElementById("message");
            var fadeEffect = setInterval(function () {
              if (!fadeTarget.style.opacity) {
                  fadeTarget.style.opacity = 1;
              }
              if (fadeTarget.style.opacity > 0) {
                  fadeTarget.style.opacity -= 0.2;
              } else {
                  clearInterval(fadeEffect);
              }
            }, 200);
           
           
          }
            let timeout;
            function myFunction() {
              timeout = setTimeout(alertFunc, 1000);
            }

            function alertFunc() {
              document.getElementById("message").remove();
            }
            myFunction();
          fadeOutEffect();
          // document.getElementById("message").fadeOutEffect;
        </script>
    @endif

    {{-- <livewire:contact-create :contacts="$contacts"></livewire:contact-create> --}}
    
    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
        
    @else
        <livewire:contact-create></livewire:contact-create>
        
    @endif

    <hr>

 <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody> <?php $i=0; ?>
        @foreach ($contacts as $c)
        <?php $i++; ?>
            <tr>
                <th scope="col">{{ $i }}</th>
                <td>{{ $c->name }}</td>
                <td>{{ $c->phone }}</td>
                <td>
                    <button wire:click="getContact({{ $c->id }})" class="btn btn-sm btn-info text-white">Edit</button>
                    <button wire:click="modal({{ $c->id }})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            
        @endforeach
    </tbody>
 </table>

 {{ $contacts->links() }}


 {{-- @if ($modal) --}}
     
    <!-- Modal -->
    <div class="modal fade" wire:ignore.self id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah anda yakin menghapus {{ $nameModal }} ?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close" wire:click.prevent="destroy()">Hapus</button>
          </div>
        </div>
      </div>
    </div>
    {{-- Akhir Modal --}}
 {{-- @endif --}}
  
  


</div>
