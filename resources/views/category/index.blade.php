@extends('layout.simpleform')

@section('content')
<div class="header-form">                    
    <div class="button-back" onclick="goBack()">
        <i class='bx bx-chevron-left'></i>
    </div>
</div>
<form action="">
    <h2>Tambah Kategori<p class="text light">Kamu bisa menambahkan kategori keuangan kamu supaya lebih teratur</p></h2>
    <div class="form-group">
        <input type="text" name="nama" placeholder="Masukan nama kategori baru">
    </div>

    <div class="form-group">
        <div class="cover-radio-button">
            <div class="radio-button" onclick="selectRadioButton('pemasukan_id', this)">
                <label for="pemasukan_id">Pemasukan</label>
                <input type="radio" name="kategori" hidden id="pemasukan_id" value="pemasukan">
            </div>

            <div class="radio-button" onclick="selectRadioButton('pengeluaran_id', this)">
                <label for="pengeluaran_id">Pengeluaran</label>
                <input type="radio" name="kategori" hidden id="pengeluaran_id" value="pengeluaran">
            </div>
        </div>
    </div>
    <div class="button-submit">
        <button type="submit"><i class='bx bx-right-arrow-alt'></i></button>
    </div>
</form>

<div class="data store-container">
    <span class="text" style="margin: 10px;">Data yang tersimpan</span>

    <!-- foreach -->
    <div class="row-data">
        <div class="desc">
            <span class="highlight">Gaji</span>
        </div>
        <div class="bottom-row">
            <span class="text">Dibuat pada <span class="highlight">10-12-2024</span></span>
            <div class="action">
                <a href="#"><i class='bx bx-trash-alt'></i></a>
                <a href="#"><i class='bx bxs-edit-alt'></i></a>
            </div>
        </div>
    </div>
    <!-- endforeach -->

    <!-- foreach -->
    <div class="row-data">
        <div class="desc">
            <span class="highlight">Tagihan</span>
        </div>
        <div class="bottom-row">
            <span class="text">Dibuat pada <span class="highlight">10-12-2024</span></span>
            <div class="action">
                <a href="#"><i class='bx bx-trash-alt'></i></a>
                <a href="#"><i class='bx bxs-edit-alt'></i></a>
            </div>
        </div>
    </div>
    <!-- endforeach -->

</div>
</div>
@endsection