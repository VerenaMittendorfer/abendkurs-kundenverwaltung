<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Statusverwaltung') }}
        </h2>
    </x-slot>

    <div class="py-3">
        {{-- Button Modal addState --}}   
        <!-- Button trigger modal -->
<x-modalButton class="d-block mx-auto" data-bs-target="#addState">
    <i class="fa fa-plus"></i>
</x-modalButton>
  
  <!-- Modal -->
  <div class="modal fade" id="addState" tabindex="-1" aria-labelledby="modalAddState" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddState">Status hinzufügen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('state.store') }}" method="POST">
            @csrf
        <div class="modal-body">
          <div class="">
            <x-label for="stateTitle" :value="__('Titel')" />
            <x-input id="stateTitle" name="stateTitle" type="text" required />

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>

        {{--Ausgabe aller Statuseinträge in Tabelle --}}
        <div class="table-responsive my-4">
            <table class="table table-striped">
                <tbody>
                @foreach ($states as $state)
                    <tr>
                        <td>{{ $state->state }}</td>
                        <td>

                        </td>
                    </tr>
        
                @endforeach
                </tbody>
            </table>
        </div>
    </div>              
</x-app-layout>
