<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Laporan peminjaman Inventaris</div>
        <div class="panel-body">
            <form action="" class="form-inline">
                <div class="form-group">
                    <label for="">Tanggal Awal</label><br>
                    <input type="date" id="tgl_awal" name="tglDari" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Sampai</label><br>
                    <input type="date" id="tgl_sampai" name="tglSampai" class="form-control">
                </div>
                <div class="form-group"><br>
                    <input type="submit" class="btn btn-sm btn-primary" value="Filter">
                    <button class="btn btn-sm btn-success">Cetak</button>
                </div>
            </form>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama peminjam</th>
                        <th>Nama barang</th>
                        <th>Jumlah</th>
                        <th>Tgl.Pinjam</th>
                        <th>Tgl.Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>intan</td>
                        <td>Laptop</td>
                        <td>10</td>
                        <td>20-04-2023</td>
                        <td>14-05-2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>