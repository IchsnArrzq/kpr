<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel=”stylesheet”href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css” />
</head>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
}
</style>
<body>

    <div class="container-fluid">
        <div>
            <img src="{{ public_path('assets/images/logo/logoweb.png') }}" alt="" style="height: 180px; width: 200px; object-fit: cover;">
        </div>
        <div style="margin-left : 250px;margin-top: -200px;text-align: center;">
            <h4>MARKAS BESAR ANGKATAN DARAT</h4>
            <strong><u>BADAN PENGELOLA TABUNGAN WAJIB PERUMAHAN</u></strong>
            <p style="margin : 0px;">Telepon / Fax : 021-5658180 Website : <a href="www.bptwpad.mil.id" target="_blank">www.bptwpad.mil.id</a></p>
            <p style="margin : 0px;">Email : bagianangsuran@gmail.com</p>
            <p style="margin : 0px;">CALL CENTER ANGSURAN KPR SWAKELOLA</p>
            <p style="margin : 0px;">HP/WA : 0822.9999.4808/085.88888.7976</p>
            <strong>Bukti Angsuran KPR Swakelola BP TWP AD</strong>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $kpr->nama }}</td>
                        </tr>
                        <tr>
                            <td>Pangkat</td>
                            <td>:</td>
                            <td>{{ $kpr->pangkat }}</td>
                        </tr>
                        <tr>
                            <td>NRP</td>
                            <td>:</td>
                            <td>{{ $kpr->nrp }}</td>
                        </tr>
                        <tr>
                            <td>Kesatuan</td>
                            <td>:</td>
                            <td>{{ $kpr->kesatuan }}</td>
                        </tr>
                        <tr>
                            <td>Tahap</td>
                            <td>:</td>
                            <td>{{ $kpr->tahap }}</td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td>:</td>
                            <td>{{ $kpr->pinjaman }}</td>
                        </tr>
                        <tr>
                            <td>Jangka Waktu</td>
                            <td>:</td>
                            <td>{{ $kpr->jk_waktu }}</td>
                        </tr>
                        <tr>
                            <td>Bulan angsuran</td>
                            <td>:</td>
                            <td>{{ $kpr->tmt_angsuran }}</td>
                        </tr>

                        <tr>
                            <td>Tahap</td>
                            <td>:</td>
                            <td>{{ $kpr->tahap }}</td>
                        </tr>

                        <tr>
                            <td>Jumlah angsuran</td>
                            <td>:</td>
                            <td>{{ $kpr->jml_angs }}</td>
                        </tr>

                        <tr>
                            <td>angsuran ke</td>
                            <td>:</td>
                            <td>{{ $kpr->angs_ke }}</td>
                        </tr>
                        <tr>
                            <td>Angsuran masuk</td>
                            <td>:</td>
                            <td>{{ $kpr->angsuran_masuk }}</td>
                        </tr>

                        <tr>
                            <td>Tunggakan</td>
                            <td>:</td>
                            <td>{{ $kpr->tunggakan }}</td>
                        </tr>

                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>{{ $kpr->jml_tunggakan }}</td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td>{{ $kpr->keterangan }}</td>
                        </tr>

                        <tr>
                            <td>status</td>
                            <td>:</td>
                            <td>{{ $kpr->status }}</td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table border="1" width="100%" cellspacing="0" cellpadding="10" class="table table-striped">
                        <tr>
                            <th>Angsuran ke</th>
                            <th>Angsuran Pokok</th>
                            <th>Angsuran Bunga</th>
                            <th>Besar Angsuran</th>
                            <th>Sisa Pinjaman Pokok</th>
                        </tr>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($all['bunga'] as $index => $value)
                        <tr>
                            <td style="text-align : center;">{{ $no++ }}</td>
                            <td style="text-align : center;">{{ $all['bunga'][$index] }}</td>
                            <td style="text-align : center;">{{ $all['pokok'][$index] }}</td>
                            <td>{{ number_format(round($all['besar_angsuran'][$index], 0,',','.')) }}</td>
                            <td style="text-align : center;">{{ $all['pinjaman'][$index] }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <hr>
        <strong>Print : {{ $tanggal }}</strong>
    </footer>
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js”></script>
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js”></script>
</body>

</html>
