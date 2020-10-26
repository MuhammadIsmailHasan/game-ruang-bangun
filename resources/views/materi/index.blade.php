@extends('layouts.frontend')

@section('content')
    <div class="container" style="padding: 100px 30px 30px 30px;">
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top: 20px;">
                <h2>MATERI</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row profile">
            <div class="col-md-2">
                <div class="profile-sidebar">
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active" data-jenis="kubus">
                                <a href="#kubus"><h4>KUBUS</h4></a> 
                            </li>
                            <li data-jenis="balok">
                                <a href="#balok"><h4>BALOK</h4></a>
                            </li>
                            <li data-jenis="prisma">
                                <a href="#prisma"><h4>PRISMA</h4></a>
                            </li>
                            <li data-jenis="limas">
                                <a href="#limas"><h4>LIMAS</h4></a>
                            </li>
                            <li data-jenis="kerucut">
                                <a href="#kerucut"><h4>KERUCUT</h4></a>
                            </li>
                            <li data-jenis="tabung">
                                <a href="#tabung"><h4>TABUNG</h4></a>
                            </li>
                            <li data-jenis="bola">
                                <a href="#bola"><h4>BOLA</h4></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-10">
                <div class="profile-content">

                    {{-- KUBUS --}}
                    <nav id="kubus" class="content">
                        <div id="kubus-1" class="kubus-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Amati gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/11.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Dari gambar di atas, pilahlah gambar mana yang termasuk ke dalam kubus! 
                                Apa perbedaan dari bangun tersebut?</p>
                        </div>
                        <div id="kubus-2" class="kubus-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>Berdasarkan gambar di atas dapat disimpulkan bahwa kubus adalah bangun 3 dimensi yang dibatasi oleh 6 sisi yang berbentuk persegi.</p>
                        </div>
                        <div id="kubus-3" class="kubus-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Kemudian jawablah pertanyaan di bawah ini!</p>
                            <div class="latihan">
                                <div class="soal">
                                    <p>1. Ana memiliki seorang adik yang akan berulang tahun. Ia membuatkan sebuah cake dan menghiasnya cake dengan cantik. Bagian mana saja yang akan dihias?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="d">
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="a">
                                            &nbsp;a. Kiri, kanan dan depan, belakang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="b">
                                            &nbsp;b. Atas, bawah dan kiri, kanan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="c">
                                            &nbsp;c. Kiri, kanan, depan, belakang, dan kiri, bawah
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="d">
                                            &nbsp;d. Kiri, kanan, depan, belakang, dan atas
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>
                                        2. Adi akan membuat prakarya yang berbentuk kerangka kubus dengan menggunakan bahan bambu. Lalu bambu tersebut dipotong-potong menjadi beberapa bagian. Berapa potong bambu yang dibutuhkan untuk membentuk kerangka kubus?
                                    </p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="d">
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="a">
                                            &nbsp;a. 6
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="b">
                                            &nbsp;b. 8
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="c">
                                            &nbsp;c. 10
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="d">
                                            &nbsp;d. 12
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>
                                        3.	Seorang pengamat akan melakukan pengamatan di sebuah ruangan yang berbentuk kubus. Agar pengamatan berjalan dengan baik, maka ia membutuhkan penerangan yang cukup. Lalu ia menaruh lampu disetiap sudut ruang bagian atas tersebut. Berapa lampu yang dibutuhkan untuk menerangi ruangan tersebut?
                                    </p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="a">
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="a">
                                            &nbsp;a. 4
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="b">
                                            &nbsp;b. 6
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="c">
                                            &nbsp;c. 8
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="d">
                                            &nbsp;d. 10
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="kubus-4" class="kubus-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/12.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>Berdasarkan slide sebelumnya, dapat disimpulkan bahwa:
                                "Kubus adalah bangun ruang tiga dimensi yang dibatasi oleh 6 sisi yang kongruen berbentuk persegi."
                            </p>
                            <p>Sifat-sifat kubus: <br/>
                                1.	Memiliki 6 sisi yang sama besar: ABCD = EFGH = ABFE = CDGH = BCGF = ADHE.<br/>
                                2.	Memiliki 12 rusuk yang sama panjang: AB = BC = CD = AD = EF = FG = GH = HE = EA = HD = FB = GC.<br/>
                                3.	Memiliki 8 titik sudut yang sama besar: &ltA = &ltB = &ltC = &ltD = &ltE = &ltF = &ltG = &ltH = 90 derajat.
                            </p>
                        </div>
                        <div id="kubus-5" class="kubus-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>Perhatikan bangun kubus di bawah ini</p>
                            <img src="{{ asset('img/materi/13-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Berdasarkan gambar di atas, apakah semua jaring-jaring di bawah ini adalah bangun yang sama? Carilah jaring-jaring yang membentuk bangun kubus!</p>
                            <img src="{{ asset('img/materi/13.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Berdasarkan jaring-jaring di atas, apa yang dapat kalian simpulkan?</p>
                        </div>
                        <div id="kubus-6" class="kubus-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Berdasarkan jaring-jaring di atas dapat disimpulkan bahwa jaring-jaring kubus memiliki 6 bangun persegi sama besar yang saling berhubungan.
                            </p>
                        </div>
                        <div id="kubus-7" class="kubus-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <p>
                                Bangun Kubus memiliki 6 sisi yang sama besar yang berbentuk persegi seperti gambar di bawah ini
                            </p>
                            <img src="{{ asset('img/materi/14-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p class="unmarg">
                                Kubus memiliki 6 sisi yang berbentuk persegi, dan jika luas persegi = sisi × sisi, seperti gambar di atas maka, <br>
                                Luas permukaan	= 6 × persegi 
                            </p>
                            <ul class="unbull">
                                <li>= 6 × sisi × sisi</li>
                                <li>= 6 × s<sup>2</sup></li>
                            </ul>
                        </div>
                        <div id="kubus-8" class="kubus-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>
                                Cara menentukan volume pada kubus dapat menggunakan satu kubus satuan yang dijadikan acuan untuk kubus yang lain. Proses ini digambarkan pada gambar di bawah ini. Coba perhatikan dengan seksama!
                            </p>
                            <img src="{{ asset('img/materi/18.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Tumpukan kubus-kubus satuan itu membentuk kubus A.
                            </p>
                            <img src="{{ asset('img/materi/19.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Alas kubus A terdiri atas 3 × 3 = 9 kubus satuan. <br>
                                Tinggi kubus A = 3 kubus satuan.<br>
                                Jumlah seluruh kubus satuan = 3 × 9 = 27 kubus satuan.<br>
                                Jadi, volume kubus A adalah 27 kubus satuan.<br>
                                Selanjutnya perhatikan gambar kubus B di bawah ini!
                            </p>
                            <img src="{{ asset('img/materi/20.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Kubus di atas adalah kubus dengan panjang rusuk 4 kubus satuan.<br>
                                Jadi, dapat disimpulkan:<br>
                                Volume kubus A dengan panjang sisi 3 kubus satuan = 3 × 3 × 3 = 27 kubus satuan.<br>
                                Volume kubus B dengan panjang sisi 4 kubus satuan = 4 × 4 × 4 = 64 kubus satuan.
                            </p>
                            <p>
                                Dengan demikian, berdasarkan penjelasan tentang kubus satuan di atas, dapat diambil kesimpulan bahwa 1 kubus satuan = 1 cm. Kubus memiliki panjang, lebar, dan tinggi yang besarnya sama, dapat disebut dengan sisi, seperti kubus A dan B di atas.
                            </p>
                            <p>
                                Sehingga volume kubus adalah sebagai berikut: <br>
                                Volume = s × s × s 
                                            = s<sup>3</sup>
                            </p>
                        </div>

                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="kubus-content">
                                <li class="page-item active" data-jenis="kubus-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="kubus-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="kubus-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="kubus-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="kubus-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="kubus-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="kubus-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="kubus-8"><a class="page-link">8</a></li>
                            </ul>
                        </nav>
                    </nav>


                    {{-- BALOK --}}
                    <nav id="balok" class="content" style="display: none">
                        <div id="balok-1" class="balok-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Amati gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/21.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Dari gambar di atas, pilahlah gambar mana yang termasuk ke dalam balok! 
                                Apa perbedaan dari bangun tersebut!</p>
                        </div>
                        <div id="balok-2" class="balok-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>Berdasarkan gambar di atas dapat disimpulkan bahwa balok adalah bangun 3 dimensi yang memiliki sepasang bangun persegi yang saling berhadapan dan dua pasang bangun persegi panjang.</p>
                        </div>
                        <div id="balok-3" class="balok-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Kemudian jawablah pertanyaan di bawah ini!</p>
                            <div class="latihan">
                                <div class="soal">
                                    <p>1. Berdasarkan bangun a dan b di atas dengan tinggi dan lebar yang sama, tunjukkan perbedanan sisi dari bangun tersebut?</p>
                                    <img src="{{ asset('img/materi/22.png') }}" alt="diagram 1" 
                                        class="img-responsive img-bordered"
                                        style="width: 400px">
                                </div>
                                <div class="pilihan radio-group" data-jawaban="b">
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="a">
                                            &nbsp;a. A kiri, A depan; B belakang, B depan; A kanan, A kiri; dan B atas, B kanan
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="b">
                                            &nbsp;b. A atas, A depan; B belakang, B depan; A belakang, A bawah; dan B atas, B bawah
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="c">
                                            &nbsp;c. A kanan, A depan; B kanan, B depan; A belakang, A kiri; dan B atas, B kiri
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="d">
                                            &nbsp;d. A atas, A kanan; B kiri, B depan; A kiri, A bawah; dan B atas, B kanan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>2. Manakah rusuk dari bangun balok di bawah ini?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="c">
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="a">
                                            &nbsp;a. BG-FE-CG-FB-AD-HA-HD-EA dan DC-DH-AG-FE; 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="b">
                                            &nbsp;b. BC-FG-DB-FB-DG-HE-HB-EA dan DC-HG-AB-FE; 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="c">
                                            &nbsp;c. BC-FG-CG-FB-AD-HE-HD-EA dan DC-HG-AB-FE; 
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="d">
                                            &nbsp;d. BC-FG-CG-FB-AD-HE-HD-EA dan DC-EG-AB-FE;
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>3.Berdasarkan gambar di bawah, tunjukkan titik sudutnya?</p>
                                    <img src="{{ asset('img/materi/23.png') }}" alt="diagram 1" 
                                        class="img-responsive img-bordered"
                                        style="width: 200px">
                                </div>
                                <div class="pilihan radio-group" data-jawaban="a">
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="a">
                                            &nbsp;a. ∠p, ∠w, ∠r, ∠q, ∠v, ∠s, ∠t, dan ∠u
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="b">
                                            &nbsp;b. ∠p, ∠x, ∠r, ∠q, ∠v, ∠s, ∠t, dan ∠u
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="c">
                                            &nbsp;c. ∠p, ∠w, ∠r, ∠q, ∠y, ∠s, ∠t, dan ∠u
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="d">
                                            &nbsp;d. ∠p, ∠w, ∠z, ∠q, ∠v, ∠s, ∠t, dan ∠u
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="balok-4" class="balok-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/22.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                "Balok adalah sebuah bangun tiga dimensi yang memiliki sepasang bangun persegi yang saling berhadapan dan dua pasang bangun persegi panjang"
                            </p>
                            <p>Sifat-sifat balok: <br/>
                                1.	Memiliki sisi yang berhadapan sama besar: ABCD = EFGH, ABFE = CDGH, BCGF = ADHE.
                                2.	Memiliki 12 rusuk yang sama panjang: AB = CD = EF = GH; BF = AE = CG = DH; BC = GF = AD = HE.
                                3.	Memiliki 8 titik sudut yang sama besar: &ltp = &ltq = &ltr = &lts = &ltt = &ltu = &ltv = &ltw = 90 derajat.
                            </p>
                        </div>
                        <div id="balok-5" class="balok-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/27-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Perhatikan jaring-jaring di bawah ini! <br>
                                Berdasarkan gambar di atas, apakah semua jaring-jaring di bawah ini adalah bangun yang sama? Carilah jaring-jaring yang membentuk bangun balok!
                            </p>
                            <img src="{{ asset('img/materi/25.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Berdasarkan jaring-jaring di atas, apa yang dapat kalian simpulkan?</p>
                        </div>
                        <div id="balok-6" class="balok-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Berdasarkan jaring-jaring di atas dapat disimpulkan bahwa jaring-jaring balok memiliki 6 bangun, 2 bangun persegi dan 4 bangun persegi panjang yang saling berhubungan.
                            </p>
                        </div>
                        <div id="balok-7" class="balok-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/27-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>Balok memiliki 3 pasang sisi, yaitu sisi atas = sisi bawah, sisi depan = sisi belakang, dan sisi kiri = sisi kanan.</p> 
                            <img src="{{ asset('img/materi/27.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Luas sisi balok berturut-turut adalah sebagai berikut: <br>
                                1.	Luas1 (sisi atas = bawah) = 2 × (p × l) <br>
                                2.	Luas2 (sisi depan = belakang) = 2 × (p × t)<br>
                                3.	Luas3 (sisi kanan = kiri) = 2 × (l × t) <br>
                            </p>
                            <p class="unmarg">
                                Sehingga luas permukaan balok adalah: <br>
                                Luas permukaan = luas1 + luas2 + luas3
                            </p>
                            <ul class="unbull">
                                <li>= [2 × (p × l)] + [2 × (p × t)] + [2 × (l × t)] </li>
                                <li>= 2 × [(p × l) + (p × t) + (l × t)] </li>
                            </ul>
                        </div>
                        <div id="balok-8" class="balok-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>
                                Cara menentukan volume pada balok dapat menggunakan satu balok satuan yang dijadikan acuan untuk balok yang lain. Proses ini digambarkan pada gambar di bawah ini. Coba perhatikan dengan seksama!
                            </p>
                            <img src="{{ asset('img/materi/28-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Gambar di atas menunjukkan pembentukan berbagai balok dari balok satuan. Gambar (a) merupakan balok satuan, untuk membuat gambar (b) dibutuhkan 2 × 2 × 2 = 8 balok satuan, sedangkan untuk membuat gambar (c) dibutuhkan 3 × 2 × 3 = 18 balok satuan. <br>
                                Dengan demikian, volume atau isi suatu balok dapat ditentukan dengan cara mengalikan banyaknya balok satuan pada panjang, lebar, dan tinggi.<br>
                                Sehingga volume balok adalah sebagai berikut: <br>
                                Volume  = p × l × t 
                            </p>
                        </div>

                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="balok-content">
                                <li class="page-item active" data-jenis="balok-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="balok-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="balok-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="balok-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="balok-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="balok-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="balok-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="balok-8"><a class="page-link">8</a></li>
                            </ul>
                        </nav>
                    </nav>


                    {{-- PRISMA --}}
                    <nav id="prisma" class="content" style="display: none">
                        <div id="prisma-1" class="prisma-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Amati gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/31-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Dari gambar di atas, pilahlah gambar mana yang termasuk ke dalam prisma! 
                                Apa perbedaan dari bangun tersebut!
                            </p>
                        </div>
                        <div id="prisma-2" class="prisma-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Perbedaan bangun-bangun di atas yaitu pada alas dan tutup. Bangun-bangun di atas semua termasuk ke dalam bangun prisma. Jadi dapat disimpulkan bangun prisma adalah bangun 3 dimensi yang memiliki alas dan tutup yang berbentuk segi-n dan sisi-sisi tegak yang berbentuk persegi atau persegi panjang.
                            </p>
                        </div>
                        <div id="prisma-3" class="prisma-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Perhatikan bangun di bawah ini!</p>
                            <img src="{{ asset('img/materi/32.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>Jawablah pertanyaan di bawah ini!</p>
                            <div class="latihan">
                                <div class="soal">
                                    <p>
                                        1. Apa nama bangun (a) dan di bawah ini sifat-sifat manakah yang menggambarkan bangun (a)?
                                    </p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="b">
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="a">
                                            &nbsp;a. Bangun prisma segiempat; memiliki alas dan tutup berbentuk segitiga sedangkan sisi tegak persegi panjang dan memiliki sisi ABC = DEF dan ABED = CBEF = ACFD.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="b">
                                            &nbsp;b. Bangun prisma segiempat; memiliki sisi ABCD = EFGH dan BCGF = CDHG = ADHE = ABEF dan memiliki alas dan tutup berbentuk persegi sedangkan sisi tegak berbentuk persegi panjang.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="c">
                                            &nbsp;c. Bangun prisma segitiga; memiliki alas dan tutup berbentuk segitiga sedangkan sisi tegak persegi panjang dan memiliki sisi ABC = DEF dan ABED = CBEF = ACFD.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="d">
                                            &nbsp;d. Bangun prisma segitiga; memiliki alas dan tutup yang berbentuk segi-n dan mamiliki rusuk yang menghubungkan titik sudut antara titik sudut alas dan tutup.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>2. Apa nama bangun (b) dan di bawah ini sifat-sifat manakah yang menggambarkan bangun (b)?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="a">
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="a">
                                            &nbsp;a.	Bangun prisma segitiga; memiliki alas dan tutup berbentuk segitiga sedangkan sisi tegak persegi panjang dan memiliki sisi ABC = DEF dan ABED = CBEF = ACFD.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="b">
                                            &nbsp;b.	Bangun prisma segiempat; memiliki alas dan tutup berbentuk segitiga sedangkan sisi tegak persegi panjang dan memiliki sisi ABC = DEF dan ABED = CBEF = ACFD.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="c">
                                            &nbsp;c.	Bangun prisma segitiga; memiliki alas dan tutup yang berbentuk segi-n dan mamiliki rusuk yang menghubungkan titik sudut antara titik sudut alas dan tutup.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="2" value="d">
                                            &nbsp;d.	Bangun prisma segi-n; memiliki sisi ABCD = EFGH dan BCGF = CDHG = ADHE = ABEF dan memiliki alas dan tutup berbentuk persegi sedangkan sisi tegak berbentuk persegi panjang.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>3.	Apa nama bangun (c) dan di bawah ini sifat-sifat manakah yang menggambarkan bangun (c)?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="d">
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="a">
                                            &nbsp;a.	Bangun prisma segi-n; memiliki sisi ABCD = EFGH dan BCGF = CDHG = ADHE = ABEF dan memiliki alas dan tutup berbentuk persegi sedangkan sisi tegak berbentuk persegi panjang.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="b">
                                            &nbsp;b.	Bangun prisma segi-n; memiliki alas dan tutup yang berbentuk segitiga dan mamiliki rusuk yang menghubungkan titik sudut antara titik sudut alas dan tutup.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="c">
                                            &nbsp;c.	Bangun prisma segiempat; memiliki alas dan tutup yang berbentuk segiempat dan mamiliki rusuk yang menghubungkan titik sudut antara titik sudut alas dan tutup.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="3" value="d">
                                            &nbsp;d.	Bangun prisma segi-n; memiliki alas dan tutup yang berbentuk segi-n dan mamiliki rusuk yang menghubungkan titik sudut antara titik sudut alas dan tutup.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="prisma-4" class="prisma-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <img src="{{ asset('img/materi/33.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>Bangun prisma memiliki berbagai macam jenis, yaitu: 
                                prisma segitiga, prisma segiempat, prisma segilima. Prisma segiempat dapat dikatakan sebagai balok atau kubus sesuai panjang sisi prisma. Berikut sifat-sifatnya:
                            </p>
                            <p>Prisma Segitiga<br/>
                                1.	Prisma segitiga memiliki sisi yang berhadapan sama besar, yaitu ABC = DEF dan ABED = CBEF = ACFD.<br/>
                                2.	Memiliki alas dan tutup berbentuk segitiga, sedangkan sisi tegak berbentuk persegi panjang. 
                            </p>
                            <p>Prisma Segiempat<br/>
                                1.	Prisma segiempat memiliki sisi yang berhadapan sama besar, yaitu ABCD = EFGH dan BCGF = CDHG = ADHE = ABEF.<br/>
                                2.	Memiliki alas dan tutup berbentuk segiempat, sedangkan sisi tegak berbentuk persegi panjang.
                            </p>
                            <p>Prisma segi-n<br/>
                                1.	Prisma memiliki alas dan atap yang berbentuk segi-n yang sama besar dan sejajar.<br/>
                                2.	Prisma memiliki rusuk-rusuk yang menghubungkan titik sudut antara titik sudut alas dan atap.
                            </p>
                        </div>
                        <div id="prisma-5" class="prisma-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/34-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Perhatikan jaring-jaring di bawah ini!
                                Berdasarkan gambar di atas, apakah semua jaring-jaring di bawah ini adalah bangun yang sama? Carilah jaring-jaring yang membentuk bangun prisma!
                            </p>
                            <img src="{{ asset('img/materi/34.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Dari jaring-jaring di atas, manakah yang termasuk jaring-jaring prisma?<br>
                                Berdasarkan jaring-jaring di atas, apa yang dapat kalian simpulkan?
                            </p>
                        </div>
                        <div id="prisma-6" class="prisma-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Berdasarkan jaring-jaring di atas, dapat diambil kesimpulan bahwa: <br/>
                                1.	Jaring-jaring prisma segitiga terdiri dari 3 persegi panjang dan 2 segitiga yang saling berhubungan.<br/>
                                2.	Jaring-jaring prisma segiempat terdiri dari 2 persegi di bagian alas dan tutup serta 4 persegi panjang di bagian sisi tegak yang saling berhubungan.
                            </p>
                        </div>
                        <div id="prisma-7" class="prisma-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/35-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                            <p class="unmarg">
                                Bangun prisma memiliki bagian alas KLM, tutup PON, dan bidang tegak KLOP, MNOL, dan KMNP, besar alas = tutup. Dengan demikian, luas permukaan dapat ditulis sebagai berikut: <br>
                                Luas permukaan	= luas LKPO  + luas LMNO + luas KMNP + luas KLM + luas PON
                            </p>
                            <ul class="unbull">
                                <li>= (KL × LO) + (ML × LO) + (MK × KP) + (2 × luas KLM)</li>
                                <li>= (2 × luas KLM) + (KL × LO) + (ML × LO) + (MK × LO)</li>
                                <li>= (2 × luas KLM) + [(KL + ML + MK) × LO]</li>
                                <li>= (2 × luas KLM) + (Keliling KLM) × tinggi</li>
                                <li>= (2 × luas KLM) + Keliling alas × tinggi</li>
                            </ul>
                        </div>
                        <div id="prisma-8" class="prisma-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>Perhatikan bangun prisma segiempat di bawah ini!</p>
                            <img src="{{ asset('img/materi/35.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Bangun prisma di samping memiliki bentuk yang sama dengan bangun balok namun memiliki alas dan tutup berbentuk persegi. Rumus bangun balok = p × l × t. Jika kita lihat p × l merupakan luas alas dan tutup atau dapat kita tulis dengan sisi × sisi karena memiliki bentuk persegi. Bangun prisma memiliki besar luas alas = luas tutup. <br/>
                                Lalu bagaimana jika kita ubah alas dan tutupnya dengan bentuk segitiga atau segilima menjadi bagaimanakah rumusnya? Jelaskan!
                            </p>
                        </div>
                        <div id="prisma-9" class="prisma-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <img src="{{ asset('img/materi/36.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Bagaimanakah rumusnya jika alas dan tutupnya berbentuk segitiga dan segilima? <br/>
                                Jika alas dan tutupnya berbentuk segitiga atau segilima maka kita menggunakan rumus luas segitiga atau segilima. Dengan demikian, dapat disimpulkan volume bangun prisma ditentukan berdasarkan bentuk alas dan tutup serta memiliki sebuah tinggi. <br/>
                                Volume prisma dapat ditulis: <br/>
                                Volume prisma = luas alas × tinggi 
                            </p>
                        </div>


                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="prisma-content">
                                <li class="page-item active" data-jenis="prisma-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="prisma-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="prisma-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="prisma-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="prisma-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="prisma-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="prisma-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="prisma-8"><a class="page-link">8</a></li>
                                <li class="page-item" data-jenis="prisma-9"><a class="page-link">9</a></li>
                            </ul>
                        </nav>
                    </nav>
                    

                    {{-- LIMAS --}}
                    <nav id="limas" class="content" style="display: none">
                        <div id="limas-1" class="limas-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/41.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Dari gambar di atas, manakah yang termasuk ke dalam bangun limas? <br/>
                                Setelah mengetahui gambar yang termasuk ke dalam bangun limas, apa yang dapat kita simpulkan dari gambar tersebut?
                            </p>
                        </div>
                        <div id="limas-2" class="limas-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>Berdasarkan gambar bangun limas di atas dapat disimpulkan bahwa bangun limas merupakan sebuah bangun yang mempunyai alas dan beberapa daerah selimut yang memiliki bentuk segi-n serta satu titik persekutuan.</p>
                        </div>
                        <div id="limas-3" class="limas-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Kemudian jawablah pertanyaan di bawah ini!</p>
                            <img src="{{ asset('img/materi/42.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Berdasarkan gambar limas segilima O. PQRST di diatas, Tentukan: <br/>
                                1.	Sisi alas dan sisi tegak <br/>
                                2.	Rusuk alas dan rusuk tegak <br/>
                                3.	Titik sudut
                            </p>
                        </div>
                        <div id="limas-4" class="limas-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Bangun limas memiliki bermacam-macam bentuk, antara lain limas segiempat, limas segitiga, dan limas segibanyak (seg-n). Berikut sifat-sifat dari macam bentuk limas:</p>
                            <p>Limas Segiempat</p>
                            <img src="{{ asset('img/materi/43.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                1.	Limas memiliki sisi alas yang berbentuk segiempat, yaitu PQRS <br/>
                                2.	Limas memiliki 4 sisi tegak yang berbentuk segitiga sama kaki yang sama besar, <br>yaitu QRT = RST = SPT = PQT
                            </p>
                            <p><b>Limas Segitiga</b></p>
                            <img src="{{ asset('img/materi/44.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                1.	Limas memiliki sisi alas yang berbentuk segitiga, yaitu ABC <br/>
                                2.	Limas memiliki 4 sisi tegak yang berbentuk segitiga sama kaki yang sama besar, <br>yaitu QRT = RST = SPT = PQT
                            </p>
                            <p><b>Limas segi-n</b></p>
                            <p>
                                4.	Limas memiliki sisi tegak yang berbentuk segitiga.
                            </p>
                        </div>
                        <div id="limas-5" class="limas-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>Perhatikan gambar berikut ini!</p>
                            <img src="{{ asset('img/materi/45-0.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                            <p>Perhatikan jaring-jaring di bawah ini!</p>
                            <p>Berdasarkan gambar di atas, apakah semua jaring-jaring di bawah ini adalah bangun yang sama? Carilah jaring-jaring yang membentuk bangun limas!</p>
                            <img src="{{ asset('img/materi/45.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Berdasarkan jaring-jaring di atas, manakah yang bukan merupakan jaring-jaring prisma?  <br/>
                                Berdasarkan jaring-jaring di atas, apa yang dapat kalian simpulkan?
                            </p>
                        </div>
                        <div id="limas-6" class="limas-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Berdasarkan jaring-jaring di atas, dapat disimpulkan bahwa: <br/>
                                1.	Jaring-jaring limas segiempat terdiri dari sebuah persegi yang berada di tengah dan 4  segitiga sama kaki yang sama besar. <br/>
                                2.	Jaring-jaring limas segitiga terdiri dari 4 segitiga, 1 segitiga sama sisi sebalah alas dan 3 segitiga sama kaki sebagai sisi tegak.
                            </p>
                        </div>
                        <div id="limas-7" class="limas-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/46.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p class="unmarg">
                                Bangun limas memiliki bagian alas ABC dan bidang tegak ATB, ATC, dan BTC. Dengan demikian, luas permukaan dapat ditulis sebagai berikut: <br>
                                Luas permukaan 	= luas I + luas II + luas III + luas IV
                            </p>
                            <ul class="unbull">
                                <li>= luas ∆ ATB + luas ∆ ATC + luas ∆ ABC + luas ∆ BTC</li>
                                <li>= luas ∆ ABC + luas ∆ ATB + luas ∆ ATC + luas ∆ BTC</li>
                                <li>= luas alas + jumlah luas seluruh sisi tegaknya</li>
                            </ul>
                        </div>
                        <div id="limas-8" class="limas-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>Perhatikan bangun kubus dan limas di bawah ini!</p>
                            <img src="{{ asset('img/materi/47.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Jika alas kubus dan limas memiliki besar yang sama dan apabila bangun limas dimasukkan ke dalam kubus, serta titik T kita hubungkan ke seluruh titik sudut kubus apa yang kalian dapatkan?
                            </p>
                        </div>
                        <div id="limas-9" class="limas-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Jika bangun limas dimasukkan ke dalam bangun kubus dan titik T dihubungkan ke semua titik sudut kubus, maka akan terbentuk 6 limas segiempat yang kongruen, seperti gambar di bawah ini:
                            </p>
                            <img src="{{ asset('img/materi/48.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Bangun limas yang terbentuk yaitu T.ABCD, T.BCGF, T.CDHG, T.ADHE, T.ABFE, dan T.EFGH. <br/>
                                Jika diketahui panjang rusuk kubus adalah <i>s</i> cm, maka tinggi limas adalah 1/2 <i>s</i>. Jadi limas 1/6 kali dari kubus, dapat disimpulkan volume limas adalah:
                            </p>
                            <p class="unmarg">
                                Volume Limas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 1/6 × volume kubus
                            </p>
                            <ul class="unbull">
                                <li>= 1/6 × s3</li>
                                <li>= 1/6 × s2 × s => <i>s</i> merupakan panjang rusuk kubus yang berarti juga tinggi limas = 1/2 <i>s</i></li>
                                <li>= 1/6 × s2 × 1/2 s => 1/2 s merupakan tinggi limas dan s2 luas persegi</li>
                                <li>= 1/6 × luas persegi (alas) × tinggi</li>
                                <li>= 1/6 × luas alas × t</li>
                            </ul>
                        </div>

                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="limas-content">
                                <li class="page-item active" data-jenis="limas-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="limas-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="limas-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="limas-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="limas-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="limas-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="limas-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="limas-8"><a class="page-link">8</a></li>
                                <li class="page-item" data-jenis="limas-9"><a class="page-link">9</a></li>
                            </ul>
                        </nav>
                    </nav>


                    {{-- KERUCUT --}}
                    <nav id="kerucut" class="content" style="display: none">
                        <div id="kerucut-1" class="kerucut-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/51.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Gambar manakah yang termasuk ke dalam bangun keucut? <br/>
                                Apa yang dapat kalian simpulkan dari gambar bangun kerucut?
                            </p>
                        </div>
                        <div id="kerucut-2" class="kerucut-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>Berdasarkan gambar-gambar di atas, dapat diambil kesimpulan bahwa kerucut adalah bangun ruang yang dibatasi sebuah bangun lingkaran dan sebuah daerah lengkung yang simetris terhadap porosnya yaitu titik pusat lingkaran tersebut.</p>
                        </div>
                        <div id="kerucut-3" class="kerucut-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/52.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Apa yang membedakan gambar bangun kerucut dengan yang bukan termasuk bangun kerucut?
                            </p>
                        </div>
                        <div id="kerucut-4" class="kerucut-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/53.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Perbedaan yang gambar kerucut dengan yang bukan kerucut adalah pada sifat-sifatnya. Gambar c memiliki bentuk limas segiempat. Sedangkan gambar yang lainnya adalah kerucut yang memiliki sifat-sifat:<br/>
                                1.	Memiliki alas yang berbentuk lingkaran <br/>
                                2.	Memiliki sisi tegak yang berupa bidang lengkung (selimut kerucut) <br/>
                                3.	Memiliki sebuah titik puncak
                            </p>
                        </div>
                        <div id="kerucut-5" class="kerucut-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>
                                Kerjakan pertanyaan di bawah ini! <br/>
                                1.	Budi akan membuat topi ulang tahun untuk adiknya berbentuk kerucut. Ia menyiapkan selembar karton. Pola-pola apa saja yang harus Budi buat agar topi ulang tahunnya jadi?
                            </p>
                        </div>
                        <div id="kerucut-6" class="kerucut-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah!</p>
                            <img src="{{ asset('img/materi/54.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Pola-pola yang harus Budi buat untuk membuat topi ulang tahun adalah 1 lingkaran sebagai alas topi dan 1 bidang lengkung sebagai selimut topi.
                            </p>
                        </div>
                        <div id="kerucut-7" class="kerucut-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/55.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Dalam mencari luas permukaan kerucut, dapat melihat jaring-jaring kerucut, terdapat garis pelukis OP dan OQ, panjang busur PQ serta luas OPQ.  <br/>
                                Apabila Panjang jari-jari = panjang garis pelukis dan panjang busur = keliling lingkaran. <br/>
                                Maka luas selimut dan luas permukaan kerucut adalah:
                            </p>
                            <img src="{{ asset('img/materi/56.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                        </div>
                        <div id="kerucut-8" class="kerucut-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>
                                Pahamilah dan kerjakan pernyataan berikut ini! <br/>
                                Lia sedang mengisi sebuah ember air berbentuk tabung dengan menggunakan wadah berbentuk kerucut yang memiliki r dan t yang sama besar dengan ember air. Lia berhenti mengisi ember air setelah 3 kali isian air dengan wadah kerucut karena ember air sudah penuh. Apa yang dapat kalian simpulkan dari pernyataan di atas?
                            </p>
                        </div>
                        <div id="kerucut-9" class="kerucut-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar berikut ini!</p>
                            <img src="{{ asset('img/materi/57.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Lihatlah gambar di atas, terlihat sebuah kerucut yang masuk ke dalam sebuah tabung dengan r dan t yang sama besar. 
                                Untuk menemukan volume kerucut, dilakukan percobaan dengan membandingkan volume kerucut dengan volume tabung. 
                            </p>
                            <p>
                                Dilakukan sebuah percobaan yang menunjukkan bahwa untuk mengisi sebuah tabung diperlukan 3 kali kerucut dengan r dan t yang sama dengan tabung. Dengan demikian, satu volume tabung sama dengan 3 kali volume kerucut.
                            </p>
                            <p>
                                Hal tersebut dapat dilihat dari gambar di atas bahwa ada 3 kerucut di dalam tabung, yaitu AOB, AOD, dan BOC. <br/>
                                Dapat disimpulkan bahwa volume kerucut adalah:
                            </p>
                            <img src="{{ asset('img/materi/58.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 300px">
                        </div>

                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="kerucut-content">
                                <li class="page-item active" data-jenis="kerucut-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="kerucut-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="kerucut-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="kerucut-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="kerucut-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="kerucut-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="kerucut-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="kerucut-8"><a class="page-link">8</a></li>
                                <li class="page-item" data-jenis="kerucut-9"><a class="page-link">9</a></li>
                            </ul>
                        </nav>
                    </nav>


                    {{-- TABUNG --}}
                    <nav id="tabung" class="content" style="display: none">
                        <div id="tabung-1" class="tabung-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/61.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Berdasarkan gambar di atas, gambar manakah yang termasuk bangun tabung? <br/>
                                Apa yang dapat kalian simpulkan dari gambar yang termasuk tabung?
                            </p>
                        </div>
                        <div id="tabung-2" class="tabung-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/62.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">    
                            <p>
                                Berdasarkan gambar sebelumnya, benda-benda tersebut semua termasuk ke dalam tabung. Disini dapat disimpulkan bahwa: <br/>
                                "Tabung adalah bangun ruang yang dibatasi oleh 2 daerah lingkaran yang kongruen serta sebuah daerah lengkung yang berada di daerah tepi lingkaran yang menghubungkan 2 lingkaran tersebut."
                            </p>
                        </div>
                        <div id="tabung-3" class="tabung-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/62.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Jelaskan perbedaan bentuk dari gambar berikut! Apakah semua gambar di samping dapat disebut bangun tabung?
                            </p>
                        </div>
                        <div id="tabung-4" class="tabung-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Berdasarkan gambar di atas, gambar A merupakan bangun tabung dapat dilihat dari sifat-sifat tabung yaitu: <br/>
                                1.	Tabung memiliki 2 lingkaran, alas dan tutup<br/>
                                2.	Memiliki 1 bidang lengkung (selimut tabung)<br/>
                                3.	Rusuk tabung berupa rusuk lengkung<br/>
                                4.	Tabung tidak memiliki titik sudut<br/>
                                Sedangkan gambar B merupakan bangun prisma segiempat.
                            </p>
                        </div>
                        <div id="tabung-5" class="tabung-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>
                                Kerjakan pertanyaan di bawah ini! <br/>
                                1.	Dita sedang membongkar sebuah kaleng susu dengan memisahkan 3 bagian menjadi atas, bawah, dan tengah. Dari situ Dita mendapatkan 3 bangun datar, 2 bangun datar yang sama dan 1 bangun yang berbeda. Bangun apa yang Dita dapat dari kaleng susu tersebut?
                            </p>
                        </div>
                        <div id="tabung-6" class="tabung-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah!</p>
                            <img src="{{ asset('img/materi/64.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Berdasarkan pertanyaan di atas, bahwa Dita mendapat bagian 2 lingkaran yang didapat dari tutup dan alas, dan 1 persegi panjang sebagai selimut dari kaleng susu tersebut.
                            </p>
                        </div>
                        <div id="tabung-7" class="tabung-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/65.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Berdasarkan jaring-jaring di samping, tabung memiliki selimut berbentuk persegi panjang dengan ukuran: <br/>
                                Panjang = keliling lingkaran = alas tabung = tutup tabung; Lebar = tinggi tabung
                            </p>
                            <p>
                                Berdasarkan penjelasan di atas, coba kalian tentukan luas selimut dan luas permukaan tabung?
                            </p>
                        </div>
                        <div id="tabung-8" class="tabung-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p class="unmarg">Berdasarkan penjelasan sebelumnya dapat disimpulkan bahwa: <br>
                                luas selimut &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= panjang × lebar
                            </p>
                            <ul class="unbull">
                                <li>= keliling lingkaran × tinggi</li>
                                <li>= 2πr × t</li>
                                <li>= 2πrt</li>
                            </ul>
                            <p class="unmarg">
                                Luas permukaan = luas alas + luas tutup + luas selimut
                            </p>
                            <ul class="unbull">
                                <li>= πr2 + πr2 + 2πrt</li>
                                <li>= 2πr2 + 2πrt</li>
                                <li>= 2πr (r + t)</li>
                            </ul>
                        </div>
                        <div id="tabung-9" class="tabung-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>Pahami dan kerjakan pernyataan berikut ini!</p>
                            <img src="{{ asset('img/materi/66.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Jika kue ulang tahun di potong menjadi 12 bagian dan di susun memanjang, maka bentuk apa yang akan kalian dapatkan? Apakah dapat membentuk suatu bangun? Bangun apa yang kalian dapatkan?
                            </p>
                        </div>
                        <div id="tabung-10" class="kerucut-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar berikut ini!</p>
                            <img src="{{ asset('img/materi/67.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Berdasarkan pertanyaan sebelumnya bahwa jika kue ulang tahun tersebut di potong menjadi 12 bagian dan disusun memanjang akan membentuk bangun balok, seperti gambar di samping.
                            </p>
                            <p class="unmarg">
                                Dengan demikian, volume tabung = volume balok. Dengan demikian, dapat disimpulkan bahwa: <br/> 
                                Volume balok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= panjang × lebar × tinggi
                            </p>
                            <ul class="unbull">
                                <li>= πr × r × t</li>
                                <li>= πr2 × t</li>
                            </ul>
                            <p class="unmarg">
                                Dikarenakan volume tabung = volume balok
                            </p>
                            <ul class="unbull" style="padding-left: 250px">
                                <li>= πr2 × t</li>
                            </ul>
                        </div>

                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="tabung-content">
                                <li class="page-item active" data-jenis="tabung-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="tabung-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="tabung-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="tabung-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="tabung-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="tabung-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="tabung-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="tabung-8"><a class="page-link">8</a></li>
                                <li class="page-item" data-jenis="tabung-9"><a class="page-link">9</a></li>
                                <li class="page-item" data-jenis="tabung-10"><a class="page-link">10</a></li>
                            </ul>
                        </nav>
                    </nav>

                    {{-- BOLA --}}
                    <nav id="bola" class="content" style="display: none">
                        <div id="bola-1" class="bola-content">
                            <p><b>A. DEFINISI</b></p>
                            <p>Perhatikan gambar berikut ini!</p>
                            <img src="{{ asset('img/materi/71.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Berdasarkan gambar bola-bola di atas, manakah yang termasuk bangun bola?</p>
                        </div>
                        <div id="bola-2" class="bola-content" style="display: none;" >
                            <p><b>PENJELASAN!</b></p>
                            <p>
                                Berdasarkan gambar di atas yang termasuk bangun bola adalah gambar a, b, dan c, karena definisi bola berikut: <br/>
                                "Bola adalah bangun ruang tiga dimensi yang terbentuk dari tak hingga lingkaran yang memiliki jari-jari sama dan berpusat pada satu titik yang sama."
                            </p>
                        </div>
                        <div id="bola-3" class="bola-content" style="display: none;" >
                            <p><b>SIFAT-SIFAT</b></p>
                            <p>Pilihlah pertanyaan di bawah ini dengan benar!</p>
                            <div class="latihan">
                                <div class="soal">
                                    <p>1. Tunjukkan manakah sifat-sifat dari bangun bola?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="b">
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="a">
                                            &nbsp;a. Bola tidak memiliki sisi dan tidak memiliki rusuk dan titik sudut.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="b">
                                            &nbsp;b. Bola memiliki 1 sisi yang berbentuk bidang lengkung dan tidak memiliki rusuk dan titik sudut.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="c">
                                            &nbsp;c. Bola memiliki sisi yang berbentuk bidang lengkung dan memiliki rusuk dan titik sudut.
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="d">
                                            &nbsp;d. Bola memiliki 1 sisi yang berbentuk bidang lengkung, memiliki rusuk dan tidak titik sudut.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bola-4" class="bola-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/72.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Sifat-sifat bola adalah: <br/>
                                1.	Bola hanya memiliki 1 sisi yang berbentuk bidang lengkung, dapat dilihat pada gambar di samping.<br/>
                                2.	Bola tidak memiliki rusuk dan titik sudut.
                            </p>
                        </div>
                        <div id="bola-5" class="bola-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/73.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                                <p>
                                    Jika diperhatikan gambar buah jeruk di samping. Terlihat memiliki bentuk serupa dengan bola dan kulitnya adalah lapisan permukaannya. <br/>
                                    Lalu apa yang dapat kalian simpulkan tentang jaring-jaring bola dari gambar di samping? 
                                </p>
                            </div>
                            <div id="bola-6" class="bola-content" style="display: none">
                                <p><b>PENJELASAN!</b></p>
                                <p>Perhatikan gambar di bawah ini!</p>
                                <img src="{{ asset('img/materi/74.png') }}" alt="diagram 1" 
                                    class="img-responsive img-bordered"
                                    style="width: 400px">
                            <p>
                                Berdasarkan gambar di atas, jika buah jeruk yang dikupas diperumpakan sebuah bola yang dikupas dan kulitnya dipisahkan dari dagingnya, maka akan terlihat seperti gambar b. <br/>
                                Jadi dapat disimpulkan bahwa jaring-jaring bola dapat berupa sebuah irisan-irisan yang menyerupai daging buah jeruk.
                            </p>
                        </div>
                        <div id="bola-7" class="bola-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>
                                Berdasarkan jaring-jaring bola, 
                                Perhatikan gambar di bawah ini dan cobalah menjawab pertanyaan di bawah ini!
                            </p>
                            <img src="{{ asset('img/materi/75.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                1.	Eka melakukan sebuah percobaan seperti gambar di atas untuk menentukan luas permukaan suatu bola. Ia menyiapkan satu buah jeruk, kemudian membelahnya menjadi dua bagian. Lalu ia menyiapkan 6 gambar lingkaran. Ia mengupas semua kulit jeruk yang dibelah dan menaruhnya pada lingkaran-lingkaran tersebut. Apa yang akan Eka dapatkan setelah melakukan percobaan tersebut? Apakah kulit jeruk memenuhi ke 6 gambar lingkaran?
                            </p>
                        </div>
                        <div id="bola-8" class="bola-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/76.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Eka melakukan sebuah percobaan seperti gambar di atas untuk menentukan luas permukaan suatu bola. Ia menyiapkan satu buah jeruk (a), kemudian membelahnya menjadi dua bagian (b). Lalu ia menyiapkan 6 gambar lingkaran (d). Ia mengupas semua kulit jeruk yang dibelah dan menaruhnya pada lingkaran-lingkaran tersebut (e). Dari percobaan yang Eka lakukan ia mendapatkan 4 lingkaran yang memenuhi. 
                            </p>
                            <p>
                                Disini dapat disimpulkan bahwa luas permukaan bola dapat juga dibentuk dengan 4 luas lingkaran yang sama besar. 
                            </p>
                            <img src="{{ asset('img/materi/77.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>
                                Dengan membagi bola menjadi 4 bagian sama besar, kemudian luas permukaan 4 bagian bola tersebut dikupas bagian selimut dan disusun pada keempat lingkatan tersebut, hasil dari kupasan 4 bagian bola memenuhi 4 lingkaran, seperti percobaan di atas.
                            </p>
                            <p class="unmarg">
                                Dapat disimpulkan bahwa luas permukaan bola adalah:<br/>
                                Luas permukaan bola = 4 × luas lingkaran 
                            </p>
                            <ul class="unbull" style="padding-left: 190px">
                                <li>= 4 × πr2</li>
                            </ul>
                        </div>
                        <div id="bola-9" class="bola-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/78.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Dilakukan sebuah percobaan memasukkan bola ke dalam sebuah tabung dengan jari-jari yang sama besar. seperti gambar di atas.
                            </p>
                            <p>
                                Masih ingatah kalian dengan rumus volume tabung, yaitu πr2 × t, 
                                Berdasarkan gambar di samping dapat didapat juga volume tabung, yaitu, πr2 × 2r, 2r didapat dari tinggi tabung sama dengan 2 kali jari-jari.
                                Jika dilakukan percobaan bahwa tabung akan terisi penuh dengan 3 kali setengah bola, seperti gambar di bawah ini.
                            </p>
                            <img src="{{ asset('img/materi/79.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Jadi, dapat disimpulkan ternyata volume tabung sama dengan 3 kali volume setengah bola.<br/>
                                Lalu, bagaimana dengan volume bola penuh, coba kalian tentukan berdasarkan petunjuk-petunjuk di atas?
                            </p>
                        </div>
                        <div id="bola-10" class="bola-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/78.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>
                                Disini ada gambar tabung yang di dalamnya terdapat sebuah bola dengan jari-jari yang sama besar. Berdasarkan gambar di samping dapat disimpulkan bahwa 
                                volume tabung = πr2 × 2r
                                = 2πr3 
                            </p>
                            <p>Bagaimana dengan volume bola?</p>
                            <img src="{{ asset('img/materi/79.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>
                                Jika dilakukan percobaan bahwa tabung akan terisi penuh dengan 3 kali setengah bola, seperti gambar di samping.
                                Jadi, dapat disimpulkan ternyata volume tabung sama dengan 3 kali setengah bola.
                            </p>
                            <img src="{{ asset('img/materi/710.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p class="unmarg">
                                volume setengah bola = 1/3 × volume tabung  
                            </p>
                            <ul class="unbull" style="padding-left: 190px">
                                <li>= 1/3 × 2πr3</li>
                                <li>= 2/3 × πr3</li>
                            </ul>
                            <p>Bagaimana dengan volume satu bola?</p>
                            <img src="{{ asset('img/materi/711.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p class="unmarg">
                                Volume bola didapatkan dari: <br/>
                                volume volume = 2 × setengah bola
                            </p>
                            <ul class="unbull" style="padding-left: 140px">
                                <li>= 2 × (2/3 × πr3)</li>
                                <li>= 4/3 × πr3</li>
                            </ul>
                        </div>


                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman text-center">
                            <ul class="pagination pg-blue" id="bola-content">
                                <li class="page-item active" data-jenis="bola-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="bola-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="bola-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="bola-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="bola-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="bola-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="bola-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="bola-8"><a class="page-link">8</a></li>
                                <li class="page-item" data-jenis="bola-9"><a class="page-link">9</a></li>
                                <li class="page-item" data-jenis="bola-10"><a class="page-link">10</a></li>
                            </ul>
                        </nav>
                    </nav>


                </div>
            </div>
        </div>
    </div> 

@endsection

@section('js')
    <script>
        $(document).ready(function () {  
            $('.profile-usermenu li').click(function (e) { 
                const dataJenis = $(this).data('jenis');
                $(this).addClass('active').siblings().removeClass('active');
                $(`.content`).css('display', 'none');
                $(`#${dataJenis}`).css('display', 'block');
            });

            $('.halaman li').click(function() {
                const dataJenis = $(this).data('jenis');
                $(this).addClass('active').siblings().removeClass('active');
                const dataParent = $(this).closest('ul').attr('id');
                $(`.${dataParent}`).css('display', 'none');
                $(`#${dataJenis}`).css('display', 'block');
            });

            $('[type=radio]').click(function (e) {
                const radioQue = $(this).val();
                $($(this).closest('div').siblings()).removeClass("latihan-salah");
                const radioAns = e.target.parentElement.parentElement.parentElement.dataset["jawaban"];
                const radioClass = radioQue == radioAns ? "latihan-benar" : "latihan-salah";
                $($(this).closest('div')).addClass(radioClass);
            });

        })
    </script>
@endsection