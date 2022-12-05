@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title', 'Form Triase')
{{-- vendor scripts --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/daterange/daterangepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('js/scripts/time/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('js/scripts/time/jquery.ui.timepicker.css?v=0.3.3') }}">
@endsection

@section('content')
<!-- Basic Inputs start -->
<section id="form-control-repeater" class="multiple-select2">
    <form action="" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="justify-content-center d-flex">Skrining Nyeri</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3><b>SKRINING NYERI</b></h3>
                                    <table border="1">
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="" value="Metode NRS/VAS/Wong-baker FACES" id="">
                                                <b class="mr-4"> Metode
                                                    NRS/VAS/Wong-baker FACES</b>
                                            </td>
                                            <td>
                                                METODE FLACC(untuk neonates dan anak< 3 tahun) <br>

                                                    <input type="checkbox" name="metode_flacc" value="nyeri ringan 1-3" id="">nyeri ringan 1-3<br>
                                                    <input type="checkbox" name="metode_flacc" value="nyeri sedang 4-6" id="">nyeri sedang 4-6<br>
                                                    <input type="checkbox" name="metode_flacc" value="nyeri berat 7-10" id="">nyeri berat 7-10<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>GAMBAR SKALA NYERI</h4>
                                            </td>
                                            <td>
                                                Metode Comport scale (untuk penilaian sedai & nyeri):<br>
                                                <input type="checkbox" name="metode_comfort" value="Sedasi 9-18" id="">Sedasi 9-18 <br>
                                                <input type="checkbox" name="metode_comfort" value="Sedasi dan analgesia 19-28" id="">Sedasi dan
                                                analgesia 19-28 <br>
                                                <input type="checkbox" name="metode_comfort" value="Sedasi inadekuat 28-45" id="">Sedasi inadekuat 28-45

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>LOKASI NYERI</h4>
                                            </td>
                                            <td>
                                                apakah nyerinya berpindah dari tempat satu ke tempat lain? <br>
                                                <input type="checkbox" name="nyeri_pindah" value="tidak" id="">tidak
                                                <input type="checkbox" name="nyeri_pindah" value="ya" id="">ya <br>

                                                berapa lama nyerinya? <br>
                                                <input type="checkbox" name="lama_nyeri" value=" < 3 bulan = akut" id="">
                                                < 3 bulan=akut <input type="checkbox" name="lama_nyeri" value=" > 3 bulan = kronik" id=""> > 3 bulan = kronik <br>
                                                    Rasa nyeri: <br>
                                                    <input type="checkbox" name="rasa_nyeri" value="tajam" id="">tajam
                                                    <input type="checkbox" name="rasa_nyeri" value="nyeri tumpul" id="">nyeri tumpul
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti ditarik" id="">seperti ditarik <br>
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti ditusuk" id="">seperti ditusuk
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti dipukul" id="">seperti dipukul
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti dibakar" id="">seperti dibakar <br>
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti berdenyut" id="">seperti berdenyut
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti kram" id="">seperti kram
                                                    <input type="checkbox" name="rasa_nyeri" value="seperti ditindih" id="">seperti ditindih <br>

                                                    Frekuensi : <input type="checkbox" name="frekuensi_nyeri" value="jarang" id="">jarang
                                                    <input type="checkbox" name="frekuensi_nyeri" value="hilang timbul" id="">hilang timbul
                                                    <input type="checkbox" name="frekuensi_nyeri" value="terus menerus" id="">terus menerus
                                                    <br>
                                                    Seberapa sering anda mengalami nyeri ini? berapa lama? <br>
                                                    setiap : <input type="checkbox" name="durasi_nyeri" value="1-2jam">1-2jam
                                                    <input type="checkbox" name="durasi_nyeri" value="3-4jam">3-4jam
                                                    <br>
                                                    selama : <input type="checkbox" name="durasi_nyeri" value=" < 30 menit">
                                                    < 30 menit <input type="checkbox" name="durasi_nyeri" value="> 30 menit">> 30 menit
                                                        <br>
                                                        Apakah yang membuat nyeri berkurang atau bertambah parah? <br>
                                                        <input type="checkbox" name="berkurang_nyeri" value="kompres hangat/dingin" id="">kompres
                                                        hangat/dingin <br>
                                                        <input type="checkbox" name="berkurang_nyeri" value="aktivitas dikurangi / bertambah" id="">aktivitas dikurangi / bertambah
                                            </td>
                                        </tr>
                                    </table>
                                    <table border="1">
                                        <tr>
                                            <td class="">
                                                <label for="" class="mr-2">Respon emosional</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="respon_emosional" value="tenang" id="">tenang
                                                <input type="checkbox" name="respon_emosional" value="cemas" id="">cemas
                                                <input type="checkbox" name="respon_emosional" value="Despresi" id="">Despresi
                                                <input type="checkbox" name="respon_emosional" value="Marah" id="">Marah

                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">Koping Mekanisme</label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="koping_mekanisme" value="merusak diri" id="">merusak diri
                                                <input type="checkbox" name="koping_mekanisme" value="menarik diri/isolasisosial" id="">menarik
                                                diri/isolasisosial
                                                <input type="checkbox" name="koping_mekanisme" value="perilaku kekerasan" id="">perilaku kekerasan
                                                <input type="checkbox" name="koping_mekanisme" value="sulit dinilai" id="">sulit dinilai

                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <h3><b>Resiko jatuh</b></h3>
                                    <table border="1">
                                        <tr>
                                            <td>
                                                <label for="" class="mr-3">a. metode Humpty Dumpty(untuk
                                                    neonatus
                                                    dan anak):</label>
                                            </td>
                                            <td>
                                                <label for="">b. Metode Morse(Untuk dewasa):</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" name="metode_humpty" value="Resiko jatuh rendah 7-11" id="">Resiko jatuh
                                                rendah
                                                7-11
                                                <input type="checkbox" name="metode_humpty" value="skala Jatuh tinggi ≥ 12" id="">skala Jatuh tinggi
                                                ≥12
                                            </td>
                                            <td>
                                                <input type="checkbox" name="metode_morse" value="Resiko jauth rendah 0-24" id="">Resiko jauth
                                                rendah
                                                0-24
                                                <input type="checkbox" name="metode_morse" value="Resiko sedang 25-44" id="">Resiko sedang 25-44
                                                <input type="checkbox" name="metode_morse" value="Resiko tinggi ≥ 45" id="">Resiko tinggi ≥ 45
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <h3><b>Status Fungsional</b></h3>
                                    <input type="checkbox" name="status_fungsional" value="Mandiri" id="">Mandiri
                                    <input type="checkbox" name="status_fungsional" value="perlu bantuan" id="">perlu bantuan :
                                    <input type="text" class="form-control" name="statusfungsional" placeholder="bantuan...." style="width: 350px" id="">
                                    <input type="checkbox" name="status_fungsional" value="Ketergantungan Total(Lapor DPJP)" id="">Ketergantungan
                                    Total(Lapor DPJP)
                                    <h3><b>Skrining Gizi</b></h3>
                                    <table>
                                        <tr>
                                            <td>Masalah gizi khusus : </td>
                                            <td>
                                                <input type="checkbox" name="masalah_gizi" value="tidak ada" id="">tidak ada
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td> <input type="checkbox" name="masalah_gizi" value="ada" id=""> ada:
                                                <input type="checkbox" name="masalah_gizi" value="Tampak kurus" id="">Tampak kurus
                                                <input type="checkbox" name="masalah_gizi" value="DM" id="">DM
                                                <input type="checkbox" name="masalah_gizi" value="Hipertensi" id="">Hipertensi
                                                <input type="checkbox" name="masalah_gizi" value="Gangguan Hati" id="">Gangguan Hati
                                                <input type="checkbox" name="masalah_gizi" value="Gangguan ginjal" id="">Gangguan ginjal
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="350px">
                                                Menderita Penyakit/ keadaan beresiko malnutrisi: <br>
                                                (Jika ada malasah lapor DPJP dan assesmen oleh ahli gizi)
                                            </td>
                                            <td>
                                                <input type="checkbox" name="menderita_penyakit" value="Diare kronik" id="">Diare kronik
                                                <input type="checkbox" name="menderita_penyakit" value="TB paru" id="">TB paru
                                                <input type="checkbox" name="menderita_penyakit" value="PJB" id="">PJB
                                                <input type="checkbox" name="menderita_penyakit" value="Lainya" id="">Lainya: <input type="text" name="menderita_penyakit" class="form-control" style="width: 350px">
                                            </td>
                                        </tr>
                                    </table>

                                    <h3><b>Malah Keperawatan</b></h3>

                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko jalan nafas tidak efektif" id="">Aktual/resiko
                                    jalan nafas tidak efektif <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko pola nafas tidak efektif" id="">Aktual/resiko
                                    pola nafas tidak efektif <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko gangguan pertukaran gas" id="">Aktual/resiko
                                    gangguan pertukaran gas <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko gangguan sirkulasi" id="">Aktual/resiko gangguan
                                    sirkulasi <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko gangguan perfusi jaringan cerebral" id="">Aktual/resiko gangguan perfusi jaringan cerebral <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko gangguan keseimbangan cairan" id="">Aktual/resiko gangguan keseimbangan cairan <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko gangguan integritas kulit" id="">Aktual/resiko
                                    gangguan integritas kulit <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Aktual/resiko cemas/takut" id="">Aktual/resiko cemas/takut
                                    <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Resiko penyebaran toksiks" id="">Resiko penyebaran toksiks
                                    <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="Resiko cidera/jatuh" id="">Resiko cidera/jatuh <br>
                                    <input type="checkbox" name="masalah_keperawatan" value="nyeri" id="">nyeri
                                    <input type="text" name="masalah_keperawatan" id="" class="form-control" style="width: 400px" placeholder="Lainya..."><br>

                                    <h3><b>Tindakan Keperawatan</b></h3>
                                    <textarea name="tindakan_keperawatan" id="" cols="45" rows="15"></textarea>
                                    <h3><b>Kolaborasi</b></h3>
                                    <input type="checkbox" name="kolaborasi" value="Oksigen" id="">Oksigen
                                    <input type="checkbox" name="kolaborasi" value="Nebutelizer" id="">Nebutelizer
                                    <input type="checkbox" name="kolaborasi" value="EKG" id="">EKG
                                    <input type="checkbox" name="kolaborasi" value="Transfusi darah" id="">Transfusi darah
                                    <input type="checkbox" name="kolaborasi" value="NGT" id="">NGT
                                    <input type="checkbox" name="kolaborasi" value="DC shock" id="">DC
                                    shock
                                    <input type="checkbox" name="kolaborasi" value="Eksplorasi" id="">Eksplorasi <br>
                                    <input type="checkbox" name="kolaborasi" value="obat" id="">obat
                                    <input type="checkbox" name="kolaborasi" value="kateter" id="">kateter
                                    <input type="checkbox" name="kolaborasi" value="Menyiapkan Lab" id="">Menyiapkan Lab
                                    <input type="checkbox" name="kolaborasi" value="Memberi obat Parenteral" id="">Memberi obat Parenteral
                                    <input type="checkbox" name="kolaborasi" value="irigasi mata" id="">irigasi mata
                                    <input type="checkbox" name="kolaborasi" value="RJP" id="">RJP <br>
                                    <input type="text" name="kolaborasi" class="form-control" style="width:300px" placeholder="lainya..." id="">

                                    <br><br>
                                    Tanggal <input type="date" class="form-control" name="tanggal_keluar" style="width:300px" id=""><br>
                                    jam keluar <input type="time" class="form-control mb-3" name="jam_keluar" style="width:300px" id="">

                                    <input type="text" name="TTD" style="width:400px" class="form-control" placeholder="TTD dan NAMA Jelas Perawat" id="">





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</section>
<!-- Basic Inputs end -->

@endsection



{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/daterange/moment.min.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/daterange/daterangepicker.js') }}"></script>
<script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{ asset('js/scripts/forms/form-tooltip-valid.js') }}"></script>
<script src="{{ asset('js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
<script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>

<!--timepicker -->
<script src="{{ asset('js/scripts/time/jquery-1.8.2.min.js') }}"></script>
<script src="{{ asset('js/scripts/time/jquery-ui.js') }}"></script>
<script src="{{ asset('js/scripts/time/jquery.ui.timepicker.js?v=0.3.3') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jam_masuk').timepicker({
            showPeriodLabels: false
        });
        $('#jam_rujukan').timepicker({
            showPeriodLabels: false
        });
        $('#kontak_awal').timepicker({
            showPeriodLabels: false
        });
        $('#jam_keputusan').timepicker({
            showPeriodLabels: false
        });
        $('#jam_doa').timepicker({
            showPeriodLabels: false
        });
        $('#jam_konsultasi').timepicker({
            showPeriodLabels: false
        });
        $('#jam').timepicker({
            showPeriodLabels: false
        });
    });
</script>
<script>
    function previewImageEkg() {
        const image = document.querySelector('#ekg');
        const imgPreview = document.querySelector('.img-preview-ekg');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function previewImageUsg() {
        const image = document.querySelector('#usg');
        const imgPreview = document.querySelector('.img-preview-usg');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function previewImageCTScan() {
        const image = document.querySelector('#ct_scan');
        const imgPreview = document.querySelector('.img-preview-ct-scan');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function previewImageRontgen() {
        const image = document.querySelector('#foto_rontgen');
        const imgPreview = document.querySelector('.img-preview-rontgen');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>




@endsection
