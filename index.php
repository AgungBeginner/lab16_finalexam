<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iuran Kas RT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container{
            max-width: 1000px;
            margin-top: 20px;
        }
        .brand{
            font-size: 30px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <!-- Container -->
    <div class="container">

    <!-- Menu Card -->
    <div class="card">
  <div class="card-header brand bg-primary text-white">
    iuran kas rt
  </div>

    <div class="card-body">
        <!-- Awal Lokasi Tex Pencarian -->
        <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="katakunci" placeholder="Silahkan Cari" aria-label="Silahkan Cari" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
        </div>
        </form>
        <!-- Awal Lokasi Tex Pencarian -->

        <!-- Awal Modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + TAMBAH DATA
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT IURAN KAS RT</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Kalau Error -->
                        <!-- <div class="alert alert-denger error" role="alert" style="display: none;"> -->
                            

                        <!-- Kalau sukses -->
                        <!-- <div class="alert alert-primary sukses" role="alert" style="display: none;"> -->
                        <!-- </div> -->

                        <!-- Awal Form Input Data -->
                        <div class="mb-3 row">
                            <label for="inputNik" class="col-sm-2 col-form-label">Nik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNik">
                            </div>
                         </div>

                         <div class="mb-3 row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama">
                            </div>
                         </div>

                         <div class="mb-3 row">
                            <label for="inputSex" class="col-sm-2 col-form-label">Sex</label>
                            <div class="col-sm-10">
                                <select id="inputSex" class="form-select">
                                    <option value="sex">Sex</option>
                                    <option value="l">L</option>
                                    <option value="p">P</option>
                                </select>
                            </div>
                         </div>

                         <div class="mb-3 row">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputAlamat">
                            </div>
                         </div>
                         
                         <div class="mb-3 row">
                            <label for="inputBlok" class="col-sm-2 col-form-label">Blok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputBlok">
                            </div>
                         </div>
                        <!-- Akhir Form Input Data -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->

        <!-- akhir tabel nama  -->
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>SEX</th>
                    <th>ALAMAT</th>
                    <th>BLOK</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>NIK</td>
                    <td>NAMA</td>
                    <td>SEX</td>
                    <td>ALAMAT</td>
                    <td>BLOK</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- akhir tabel nama -->
        
    </div>

</div>
    <!-- Akhir Menu Card -->

</div>
    <!-- Akhir Container -->

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384- oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
    $('#tombolSimpan').on('click', function() {
        // alert("Tes");
        var $nik = $('#inputNik').val();
        var $nama = $('#inputNama').val();
        var $sex = $('#inputSex').val();
        var $alamat = $('#inputAlamat').val();
        var $norumah = $('#inputBlok').val();

        $.ajax({
            url: "<?php echo site_url("kasrt/simpan") ?>",
            type: "POST",
            data: {
                nik: $nik,
                nama: $nama,
                sex: $sex,
                alamat: $alamat,
                norumah: $norumah
            },
            success: function(hasil){
                var $obj = $.parseJSON(hasil);
                if ($obj.sukses == false) {
                    $('.sukses').hide();
                    $('.error').show();
                    $('.error').html($obj.error);
                } else {
                    $('.error').hide();
                    $('.sukses').show();
                    $('.sukses').html($obj.sukses);
                }
            }
        });
    });
</script>
</body>
</html>