




@props(['variable'])
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Estas seguro que queres elminar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <form action="{{route('admin.cameras.destroy', $variable)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('¿Quiere Eliminar el Producto?')" class=" text-white btn bg-red-800">Eliminar</button>
        </form>
        </div>
      </div>
    </div>
  </div>
