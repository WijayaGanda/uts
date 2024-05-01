<div class="d-flex text-center">
    <a href="{{ route('barangs.show', ['barang' => $barang->id]) }}"
        class="btn btn-outline-primary btn-sm me-2"><i
            class="bi-person-lines-fill"></i>Detail</a>
    <a href="{{ route('barangs.edit', ['barang' => $barang->id]) }}"
        class="btn btn-outline-success btn-sm me-2"><i class="bi-pencil-square"></i>Edit</a>
    <div>
        <form
            action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}"
            method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm me-2"><i class="bi-trash"></i>Hapus</button>
        </form>
    </div>
  </div>