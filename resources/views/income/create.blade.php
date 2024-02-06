@extends('layout.container')

@section('content')
<div class="header-form">                    
    <div class="button-back" onclick="goBack()">
        <i class='bx bx-chevron-left'></i>
    </div>
</div>
<form action="">
    <h2>Tambah Pengeluaran</h2>
    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" placeholder="Masukan jumlah">
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select name="" id="">
            <option value="">Gaji</option>
            <option value="">Uang Jajan</option>
            <option value="">Bonus</option>
        </select>
    </div>

    <div class="form-group">
        <label>Sumber</label>
        <select name="" id="">
            <option value="">Dompet <p>Rp.20.000</p></option>
            <option value="">Kartu Kerdit <p>Rp.500.000</p></option>
            <option value="">E-wallet <p>Rp.30.000</p></option>
        </select>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label>Tanggal</label>
        <input type="date">
    </div>

    <div class="button-submit">
        <button type="submit">Tambahkan</button>
    </div>
</form>
</div>
@endsection