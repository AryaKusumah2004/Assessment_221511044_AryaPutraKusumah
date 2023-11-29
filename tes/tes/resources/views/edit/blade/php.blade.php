<!-- resources/views/barang/edit.blade.php -->

<h1>Edit Barang</h1>

<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" name="KodeBarang" value="{{ $barang->KodeBarang }}" required>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" value="{{ $barang->Satuan }}" required>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="number" name="HargaSatuan" step="0.01" value="{{ $barang->HargaSatuan }}" required>

    <label for="Stok">Stok:</label>
    <input type="number" name="Stok" value="{{ $barang->Stok }}" required>

    <button type="submit">Simpan Perubahan</button>
</form>

