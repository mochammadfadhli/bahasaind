
<!-- Navbar -->
<nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <a class="navbar-brand" href="#">Bipaloka</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link nav-link-header" href="#yourbenefit">Your Benefit</a>
        <a class="nav-item nav-link nav-link-header" href="#ourprograms">Our Programs</a>
        <a class="nav-item nav-link nav-link-header" href="#ourtutors">Our Tutors</a>
        <a class="nav-item btn btn-secondary tombol" href="#" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Submit Your Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                    We thank you for your participation. We apologize for the inconveniences as we are currently under the  development. Leave your email here, so you become the first to know if our service is ready.
                    Thank you.
                    <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else. We also will never send you spam.</small>
                    </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary tombol">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal -->
    </div>
</nav>
<!-- Akhir Navbar -->

<!-- Konten -->
<div class="container">
    <div class="row mt-5">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-unit1-tab" data-toggle="pill" href="#v-pills-unit1" role="tab" aria-controls="v-pills-unit1" aria-selected="true">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 1 Perkenalan
                </a>
                <a class="nav-link" id="v-pills-unit2-tab" data-toggle="pill" href="#v-pills-unit2" role="tab" aria-controls="v-pills-unit2" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 2 Identitas Diri
                </a>
                <a class="nav-link" id="v-pills-unit3-tab" data-toggle="pill" href="#v-pills-unit3" role="tab" aria-controls="v-pills-unit3" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 3 Identitas Fisik
                </a>
                <a class="nav-link" id="v-pills-unit4-tab" data-toggle="pill" href="#v-pills-unit4" role="tab" aria-controls="v-pills-unit4" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 4 Keluarga
                </a>
                <a class="nav-link" id="v-pills-unit5-tab" data-toggle="pill" href="#v-pills-unit5" role="tab" aria-controls="v-pills-unit5" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 5 Aktifitas Sehari-hari
                </a>
                <a class="nav-link" id="v-pills-unit6-tab" data-toggle="pill" href="#v-pills-unit6" role="tab" aria-controls="v-pills-unit6" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 6 Hobi
                </a>
                <a class="nav-link" id="v-pills-unit7-tab" data-toggle="pill" href="#v-pills-unit7" role="tab" aria-controls="v-pills-unit7" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 7 Komunikasi
                </a>
                <a class="nav-link" id="v-pills-unit8-tab" data-toggle="pill" href="#v-pills-unit8" role="tab" aria-controls="v-pills-unit8" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 8 Transportasi
                </a>
                <a class="nav-link" id="v-pills-unit9-tab" data-toggle="pill" href="#v-pills-unit9" role="tab" aria-controls="v-pills-unit9" aria-selected="false">
                    <img class="mb-1 mr-2" src="<?=base_url()?>assets/images/file2.png">
                    Unit 9 Jual Beli
                </a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-unit1" role="tabpanel" aria-labelledby="v-pills-unit1-tab">
                    <img src="<?=base_url()?>assets/images/materi/1A.jpg" class="gambar-materi rounded mx-auto d-block" alt="">
                    Nama saya Julia. Saya biasa dipanggil Juli. Usia saya tujuh tahun. Saya kelas satu sekolah dasar. Saya tinggal di Jalan Pemuda Nomor 1.
                    <form method="POST" id="form-jawaban-unit-1">
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="input-teks-unit-1" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm" id="button-submit-unit-1" onclick="kirimJawaban(1)">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit2" role="tabpanel" aria-labelledby="v-pills-unit2-tab">
                    <img src="<?=base_url()?>assets/images/materi/2.png" class="gambar-materi rounded mx-auto d-block" alt=""> 
                    Perpustakaan Sekolah Dasar Tunas Muda, Nama : Alia Julia Kelas, Kelas : 5 C , Nomor Anggota : 576, Alamat Rumah : Jalan Rawamangun Muka Nomor 17 Jakarta Timur
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit3" role="tabpanel" aria-labelledby="v-pills-unit3-tab">
                    <img src="<?=base_url()?>assets/images/materi/3A.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Nama saya Ira. Saya kelas enam sekolah dasar. Badan saya kurus dan tinggi. Saya berkacamata. Rambut saya dikuncir dua. Saya berkaos biru.
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit4" role="tabpanel" aria-labelledby="v-pills-unit4-tab">
                    <img src="<?=base_url()?>assets/images/materi/4A.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Nama saya Mira.  Saya anak kedua.  Kakak saya bernama Rama.  Adik saya bernama Roni.  Kami tinggal bersama nenek dan kakek.  Ibu saya bernama Lana.  Dia guru. Ayah saya bernama Toni. Dia seorang arsitek.
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit5" role="tabpanel" aria-labelledby="v-pills-unit5-tab">
                    <img src="<?=base_url()?>assets/images/materi/5.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Pak  Agus  seorang  pengusaha.  Dia  bangun  tidur pukul 05.00 pagi. Setelah itu, dia mandi dan sarapan. Dia pergi ke kantor pukul 06.30 pagi. Tiba di kantor pukul 07.00. Pulang dari kantor dia senang membeli buah segar untuk di rumah. Tiba di rumah pukul 04.00 sore. Kadang-kadang dia   berjalan-jalan  bersama  anjingnya.  Pukul  19.00  dia makan  malam  bersama  keluarganya.  Biasanya,  dia menonton  berita  di  TV  pukul  20.00  malam.  Pukul  22.00 malam dia tidur.  Lala dan Lulu kakak beradik tinggal di Bandung. Setiap hari libur mereka membantu ayah dan ibu di kebun. Setiap hari mereka bangun sebelum pukul 05.00 pagi. Mereka beragama Islam.  Mereka  salat  lima  kali  sehari.  Salat  subuh  dilakukan pada pukul 05.00 pagi.  Siang hari, saat pukul 12.30 mereka salat zuhur. Sore hari, pukul 16.00 mereka salat asar. Pada saat malam mereka salat magrib (pukul 18.00) dan salat Isa (pukul 19.00). Di Indonesia, banyak orang bergama Islam. Ada pula yang beragama lain seperti Kristen, Katolik, Kong Hu Cu, Hindu, dan Budha. Mereka saling menghormati. 
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit6" role="tabpanel" aria-labelledby="v-pills-unit6-tab">
                    <img src="<?=base_url()?>assets/images/materi/6.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Namaku  Amelia.  Umurku  sepuluh  tahun.  Aku  sekolah  di SD Kusuma. Membaca adalah hobiku.  Sejak  kecil,  ibu  sering membacakan  dongeng untukku.  Kini,  aku  sudah  bisa membaca.  Ibu  sering mengajakku ke toko buku. Aku senang jika ibu membawaku ke toko buku. Di sana, aku bisa  membaca  buku.  Aku  sering  membaca  di perpustakaan  bersama  teman-teman.  Ayah  sudah membuatkanku rak buku. Aku bisa membaca buku setiap hari.
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit7" role="tabpanel" aria-labelledby="v-pills-unit7-tab">
                    <img src="<?=base_url()?>assets/images/materi/7A.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Selamat malam bu. Maaf mengganggu untuk ruangan kelas besok ada perubahan. Kita akan belajar di ruang serba guna karena aula akan dipakai latihan. Terima kasih. Maaf mengganggu. Oke tolong disiapkan ya…. Selamat ulang tahun anakku semoga panjang umur dan sehat selalu… Untuk Ana, selamat ulang tahun Ana Mariana, semoga menjadi anak yang pintar dan berbakti pada orang tua dan berguna bagi orang di sekitarmu…. Selamat atas kelahiran putra Pertama paman. Semoga menjadi anak yang berguna bagi keluarga, bangsa, dan agama
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit8" role="tabpanel" aria-labelledby="v-pills-unit8-tab">
                    <img src="<?=base_url()?>assets/images/materi/8A.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Di Indonesia transportasi terbagi menjadi tiga jenis, laut, udara, dan darat. Di laut ada kapal laut dan feri. Di udara  ada  pesawat  udara  dan  helikopter.  Di  darat  ada bermacam-macam transportasi, misalnya becak, delman, transjakarta,  ojek,  bajaj,  taksi,  metromini,  angkot,  kereta api, sepeda, motor, dan bus kota. TransJakarta adalah satu dari beberapa kendaraan umum  yang  banyak  digunakan  masyarakat.  Pendingin ruangan bus dan harga yang murah membuat transportasi ini digemari banyak orang. Cukup dengan Rp3.500, -  kamu bisa pergi ke tempat yang kamu mau
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="v-pills-unit9" role="tabpanel" aria-labelledby="v-pills-unit9-tab">
                    <img src="<?=base_url()?>assets/images/materi/9.png" class="gambar-materi rounded mx-auto d-block" alt="">
                    Pasar Beringharjo terletak di Jalan Jenderal Ahmad Yani nomor 16,  Yogyakarta.   Banyak barang yang dapat dibeli  di  Pasar  Beringharjo,  mulai  dari batik, jajanan pasar, uang  kuno,  pakaian  anak  dan  dewasa, makanan cepat saji, bahan dasar jamu tradisional,  sembako hingga barang antik.  Pasar  Beringharjo  memiliki  berbagai  jenis batik mulai batik kain maupun sudah jadi pakaian, bahan katun hingga sutra. Koleksi batik kain dijumpai di kios pasar bagian barat sebelah utara.   Koleksi  pakaian batik  dijumpai  hampir di seluruh  pasar  bagian  barat. Selain  pakaian  batik,  kios pasar  bagian  barat  juga  menawarkan baju surjan, blangkon,  dan  sarung  tenun maupun batik. Selain  itu,   dijual  pula  sandal  dan  tas  di sekitar eskalator pasar bagian barat.  Harga batik di pasar ini  bervariasi.  Ada  yang  murah  ada  yang  mahal.  Harga satu  buah  pakaian  batik  rata-rata  Rp50.000,00  Harga masih bisa ditawar. Harga batik di pasar ini lebih murah daripada di Jakarta.
                    <form>
                        <div class="form-group row mt-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jawabanmu</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukkan Jawabanmu Disini">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Akhir Konten -->


<!-- footer -->
<section class="footer mt-5">
    <br>
    <div class="container">
        <div class="row">
        <div class="col ml-5">
            <h4>Contact Us</h4>
            <h3>Eum vulputate persecuti ea.</h3>
            <h3>Est mucius convenire no, te.</h3>
            <h3>tamquam laboramus est. ne.</h3>
            <h3>eum malis.</h3>
        </div>
        <div class="col ml-5">
            <h4>Sitemap</h4>
            <h3>Eum vulputate</h3>
            <h3>Persecuti es. Est</h3>
            <h3>mucius convenire</h3>
            <h3>no, te tamquam</h3>
            <h3>laboramus est, ne.</h3>
            <h3>eum malis.</h3>
        </div>
        <div class="col ml-5">
            <h4>Select Media</h4>
            <h3>Eum vulputate persecuti</h3>
            <h3>ea. Est mucius convenire</h3>
            <h3>no, te tamquam</h3>
            <h3>laboramus est, ne eum</h3>
            <h3>malis</h3>
        </div>
        </div>   
    </div>
</section>
<!-- Akhir footer -->

<script type="text/javascript">
    // A $( document ).ready() block.
    $( document ).ready(function() {
        $("#button-submit-unit1").click(function(event){
            event.preventDefault();
        });



        // console.log( "ready!" );
    });
    function kirimJawaban(nomor_unit) {
        $.post( "<?=base_url()?>Home/algoritma",  { teks_jawaban: $("#input-teks-unit-"+nomor_unit).val() })
            .done(function( data ) {
                console.log(data)
            });
    }
</script>