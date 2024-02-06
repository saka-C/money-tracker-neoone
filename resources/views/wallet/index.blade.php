@extends('layout.simpleform')

@section('content')
<div class="header-form">                    
    <div class="button-back" onclick="goBack()">
        <i class='bx bx-chevron-left'></i>
    </div>
</div>
<form action="">
    <h2>Tambah Sumber<p class="text light">Kamu bisa mencatat keuangan kamu sesuai dimana kamu menyimpan uang mu</p></h2>
    <div class="form-group">
        <input type="text" name="nama" placeholder="Masukan nama sumber baru">
    </div>

    <div class="button-submit m-top">
        <button type="submit"><i class='bx bx-right-arrow-alt'></i></button>
    </div>
</form>

<div class="data store-container">
    <span class="text" style="margin: 10px;">Data yang tersimpan</span>

    <!-- foreach -->
    <div class="row-data">
        <div class="desc">
            <span class="highlight">Dompet Fisik</span>
            <span class="green">Rp. 3.000.000</span>
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
            <span class="highlight">Kredit BCA</span>
            <span class="green">Rp. 1.000.000</span>
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