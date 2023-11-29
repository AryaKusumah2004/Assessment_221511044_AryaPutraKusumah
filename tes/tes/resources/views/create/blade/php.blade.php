<!-- resources/views/barang/create.blade.php -->

<h1>Tambah Barang Baru</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" name="KodeBarang" required>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" required>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" required>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="number" name="HargaSatuan" step="0.01" required>

    <label for="Stok">Stok:</label>
    <input type="number" name="Stok" required>

    <button type="submit">Simpan</button>
</form>

