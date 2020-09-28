@extends('layouts.frontend')

@section('css')
    <link href="{{ asset('css/app-game.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="evaluasi" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>EVALUASI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div id="game" class="justify-center flex-column custom-card" style="padding: 20px;">
                <div id="hud">
                    <div id="hud-item">
                        <p class="hud-prefix">
                        Soal
                        </p>
                        <h1 class="hud-main-text" id="questionCounter">0/50</h1>
                    </div>
                    <div id="hud-item">
                        <p class="hud-prefix">
                        Waktu
                        </p>
                        <div class="hud-main-text" id="timer">
                            <h1>02:00:00</h1>
                        </div>
                    </div>
                    <div id="hud-item">
                        <button id="btn_mulai" type="button" class="btn btn-primary hud-prefix"> MULAI</button>   
                        <button id="btn_simpan" style="display: none;" type="button" class="btn btn-success hud-prefix"> SELESAI</button>   
                    </div>
                </div>
                <hr>
                <div id="header-game" class="text-center">
                    <h3>Pilihan Ganda, Pilihlah jawaban yang paling tepat</h3>
                    <h1> SILAHKAN KLIK MULAI</h1>
                </div>
                <div id="soal-game" style="display: none;">
                    <div id="question" class="text-center" style="margin-bottom: 20px;">
                        <h3>ini soal</h3>
                    </div>
                    <div class="choice-container" data-number="1">
                        <p class="choice-prefix">A</p>
                        <p class="choice-text">A</p>
                    </div>
                    <div class="choice-container" data-number="2">
                        <p class="choice-prefix">B</p>
                        <p class="choice-text">B</p>
                    </div>
                    <div class="choice-container" data-number="3">
                        <p class="choice-prefix">C</p>
                        <p class="choice-text">C</p>
                    </div>
                    <div class="choice-container" data-number="4">
                        <p class="choice-prefix">D</p>
                        <p class="choice-text">D</p>
                        </div>    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () { 
            let now = new Date();
            let later = new Date();
            later.setHours(now.getHours() + 2);
            // later.setSeconds(now.getSeconds() + 20);

            var clickSimpan = false;

            let userId = '{{ Auth::user()->id }}';

            const choices = Array.from($('.choice-container'));
            
            let currentQuestion = {};
            let acceptingAnswers = false;
            let score = 0;
            let questionCounter = 0;
            let availableQuesions = [];
            
            let questions = [
                {
                    question : "<span class='text-soal'>Bangun ruang yang dibatasi oleh enam sisi yang berbentuk persegi, merupakan definisi dari bangun ...</span>",
                    choice1: "<p class='choice-text' data-number='1'>Balok</p>",
                    choice2: "<p class='choice-text' data-number='2'>Limas</p>",
                    choice3: "<p class='choice-text' data-number='3'>Kubus</p>",
                    choice4: "<p class='choice-text' data-number='4'>Prisma</p>",
                    answer: 3
                },
                {
                    question : "<span class='text-soal'>Bangun tiga dimensi yang memiliki alas dan tutup berbentuk persegi dan sisi tegak berbentuk persegi panjang, merupakan defines dari bangun ...</span>",
                    choice1: "<p class='choice-text' data-number='1'>Prisma segitiga</p>",
                    choice2: "<p class='choice-text' data-number='2'>Prisma segiempat</p>",
                    choice3: "<p class='choice-text' data-number='3'>Limas segiempat</p>",
                    choice4: "<p class='choice-text' data-number='4'>Limas segitiga</p>",
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Manakah gambar yang termasuk contoh bangun balok dalam kehidupan sehari-hari</span>`,
                    choice1: `<img src="{{ asset('img/soal/3-1.png') }}" data-number='1' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice2: `<img src="{{ asset('img/soal/3-2.png') }}" data-number='2' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice3: `<img src="{{ asset('img/soal/3-3.png') }}" data-number='3' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice4: `<img src="{{ asset('img/soal/3-4.png') }}" data-number='4' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    answer: 1
                },
                {
                    question : "<span class='text-soal'>Bangun limas adalah ...</span>",
                    choice1: "<p class='choice-text' data-number='1'>Bangun ruang yang memiliki alas yang berbentuk segi-n dan beberapa daerah sebagai selimut yang memiliki bentuk segi-n serta tidak memiliki satu titik persekutuan.</p>",
                    choice2: "<p class='choice-text' data-number='2'>Bangun ruang yang tidak memiliki alas yang berbentuk segi-n dan beberapa daerah sebagai selimut yang memiliki bentuk segi-n serta satu titik persekutuan.</p>",
                    choice3: "<p class='choice-text' data-number='3'>Bangun ruang yang tidak memiliki alas dan beberapa daerah sebagai selimut yang memiliki bentuk segi-n serta satu titik persekutuan.</p>",
                    choice4: "<p class='choice-text' data-number='4'>Bangun ruang yang memiliki alas yang berbentuk segi-n dan beberapa daerah sebagai selimut yang memiliki bentuk segi-n serta satu titik persekutuan.</p>",
                    answer: 4
                },
                {
                    question : `<p class='text-soal'>Perhatikan gambar di bawah ini!</p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/5.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Manakah yang termasuk bangun kerucut ...</p>`,
                        choice1: "<p class='choice-text' data-number='1'>a, c, dan d</p>",
                        choice2: "<p class='choice-text' data-number='2'>a, b, c, dan d</p>",
                        choice3: "<p class='choice-text' data-number='3'>a, b, dan d</p>",
                        choice4: "<p class='choice-text' data-number='4'>a, b, dan c</p>",
                        answer: 1
                },
                {
                    question : "<span class='text-soal'>Bangun ruang yang dibatasi oleh dua buah daerah lingkaran yang sama besar dan sebuah daerah lengkung yang berada di daerah tepi lingkaran, merupakan definisi dari bangun ...</span>",
                    choice1: "<p class='choice-text' data-number='1'>Bola</p>",
                    choice2: "<p class='choice-text' data-number='2'>Tabung</p>",
                    choice3: "<p class='choice-text' data-number='3'>Kerucut</p>",
                    choice4: "<p class='choice-text' data-number='4'>Prisma</p>",
                    answer: 2
                },
                {
                    question : "<span class='text-soal'>Bangun yang tersusun atas tak hingga lingkaran yang memiliki jari-jari yang sama, merupakan bangun ...</span>",
                    choice1: "<p class='choice-text' data-number='1'>Tabung</p>",
                    choice2: "<p class='choice-text' data-number='2'>Kerucut</p>",
                    choice3: "<p class='choice-text' data-number='3'>Bola</p>",
                    choice4: "<p class='choice-text' data-number='4'>Limas</p>",
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Sebuah bangun ruang memiliki ciri-ciri sebagai berikut: <br/>
                                <span class='text-left'>
                                    -	Memiliki 6 sisi <br/>
                                    -	Memiliki 4 pasang sisi yang berhadapan sama panjang dan sebangun <br/>
                                    -	Memiliki 12 rusuk <br/>
                                    -	Memiliki 8 titik sudut
                                </span> <br/>
                                Bangun yang dimaksud adalah ….
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>Kubus</p>`,
                    choice2: `<p class='choice-text' data-number='2'>Balok</p>`,
                    choice3: `<p class='choice-text' data-number='3'>Prisma</p>`,
                    choice4: `<p class='choice-text' data-number='4'>Limas</p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Sebuah bangun ruang memiliki ciri-ciri sebagai berikut: <br/>
                                <span class='text-left'>
                                    -	Mempunyai 9 rusuk <br/>
                                    -	Mempunyai 6 titik sudut <br/>
                                    -	Mempunyai 3 sisi berbentuk persegi panjang <br/>
                                    -	Mempunyai 2 sisi berbentuk segitiga yang sama
                                </span> <br/>
                                Bangun yang dimaksud adalah ….
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>Limas segitiga</p>`,
                    choice2: `<p class='choice-text' data-number='2'>Limas segiempat</p>`,
                    choice3: `<p class='choice-text' data-number='3'>Prisma segitiga</p>`,
                    choice4: `<p class='choice-text' data-number='4'>Balok</p>`,
                    answer: 3
                },
                {
                    question : `<p class='text-soal'>Perhatikan bangun berikut ini!</p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/10.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Salah satu sifatnya adalah ….</p>`,
                    choice1: `<p class='choice-text' data-number='1'>Mempunyai 12 rusuk</p>`,
                    choice2: `<p class='choice-text' data-number='2'>Mempunyai 8 titik sudut</p>`,
                    choice3: `<p class='choice-text' data-number='3'>Bidang sisinya sama panjang</p>`,
                    choice4: `<p class='choice-text' data-number='4'>Mempunyai 5 bidang sisi</p>`,
                    answer: 4
                },
                {
                    question : `<p class='text-soal'>Perhatikan gambar di bawah!</p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/11.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Berapakah banyak rusuk pada bangun tersebut?</p>`,
                    choice1: `<p class='choice-text' data-number='1'>10</p>`,
                    choice2: `<p class='choice-text' data-number='2'>12</p>`,
                    choice3: `<p class='choice-text' data-number='3'>18</p>`,
                    choice4: `<p class='choice-text' data-number='4'>20</p>`,
                    answer: 3
                },
                {
                    question : `<p class='text-soal'>Perhatikan gambar di bawah! </p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/12.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Banyak rusuk bangun di samping adalah</p>`,
                    choice1: `<p class='choice-text' data-number='1'>34 buah</p>`,
                    choice2: `<p class='choice-text' data-number='2'>35 buah</p>`,
                    choice3: `<p class='choice-text' data-number='3'>36 buah</p>`,
                    choice4: `<p class='choice-text' data-number='4'>37 buah</p>`,
                    answer: 3
                },
                {
                    question : `<p class='text-soal'>Perhatikan gambar bangun berikut!</p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/13.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Berapa banyak sisi pada bangun tersebut?</p>`,
                    choice1: `<p class='choice-text' data-number='1'>8</p>`,
                    choice2: `<p class='choice-text' data-number='2'>9</p>`,
                    choice3: `<p class='choice-text' data-number='3'>11</p>`,
                    choice4: `<p class='choice-text' data-number='4'>12</p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Banyak sisi bangun di bawah adalah... </span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/14.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>6</p>`,
                    choice2: `<p class='choice-text' data-number='2'>7</p>`,
                    choice3: `<p class='choice-text' data-number='3'>11</p>`,
                    choice4: `<p class='choice-text' data-number='4'>12</p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Banyak titik sudut bangun tersebut adalah </span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/15.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>30 buah</p>`,
                    choice2: `<p class='choice-text' data-number='2'>20 buah</p>`,
                    choice3: `<p class='choice-text' data-number='3'>12 buah</p>`,
                    choice4: `<p class='choice-text' data-number='4'>5 buah</p>`,
                    answer: 2
                },
                {
                    question : `<p class='text-soal'>Perhatikan bangun berikut ini!</p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/16.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Salah satu sifatnya adalah </p>`,
                    choice1: `<p class='choice-text' data-number='1'>Rusuk berupa rusuk lengkung</p>`,
                    choice2: `<p class='choice-text' data-number='2'>Sisi lengkung berbentuk persegi panjang</p>`,
                    choice3: `<p class='choice-text' data-number='3'>Tidak memiliki rusuk dan titik sudut</p>`,
                    choice4: `<p class='choice-text' data-number='4'>Sisi alas berbentuk lingkaran</p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Banyak sisi, rusuk, dan titik sudut kerucut adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>Sisi 2, rusuk 1, dan titik sudut 1</p>`,
                    choice2: `<p class='choice-text' data-number='2'>Sisi 1, rusuk 1, dan titik sudut 1</p>`,
                    choice3: `<p class='choice-text' data-number='3'>Sisi 2, rusuk 2, dan titik sudut 1</p>`,
                    choice4: `<p class='choice-text' data-number='4'>Sisi 1, rusuk 1, dan titik sudut 2</p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Model kerangka kubus akan dibuat dari kawat yang panjangnya 7,2 m. jika panjang rusuk kubus 6 cm, maka banyak kerangka kubus yang dapat dibuat adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>8</p>`,
                    choice2: `<p class='choice-text' data-number='2'>10</p>`,
                    choice3: `<p class='choice-text' data-number='3'>12</p>`,
                    choice4: `<p class='choice-text' data-number='4'>14</p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Tersedia kawat yang panjangnya 2,5 m. jika dengan kawat itu akan dibuat kerangka limas segiempat dengan panjang rusuk 30 cm, maka panjang kawat yang tidak terpakai adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>10 cm</p>`,
                    choice2: `<p class='choice-text' data-number='2'>12 cm</p>`,
                    choice3: `<p class='choice-text' data-number='3'>16 cm</p>`,
                    choice4: `<p class='choice-text' data-number='4'>22 cm</p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Eka ingin membuat kerangka balok dari kayu dengan panjang 25 cm, lebar 10 cm, dan tinggi 10 cm. Maka panjang kayu yang diperlukan untuk membuat balok tersebut adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>1 m</p>`,
                    choice2: `<p class='choice-text' data-number='2'>1,2 m</p>`,
                    choice3: `<p class='choice-text' data-number='3'>1,5 m</p>`,
                    choice4: `<p class='choice-text' data-number='4'>1,8 m</p>`,
                    answer: 4
                },
                {
                    question : `<span class='text-soal'>Panjang satu kerangka balok 1,8 m. jika balok tersebut berukuran panjang 22 cm dan lebar 14 cm, maka tinggi balok itu adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>9 cm</p>`,
                    choice2: `<p class='choice-text' data-number='2'>11 cm</p>`,
                    choice3: `<p class='choice-text' data-number='3'>14 cm</p>`,
                    choice4: `<p class='choice-text' data-number='4'>17 cm</p>`,
                    answer: 1
                },
                {
                    question : `<p class='text-soal'>Perhatikan jaring-jaring kubus berikut!</p>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/22.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <p class='text-soal'>Keterangan: A = alas; T = tutup</p>
                                <p class='text-soal'>Jaring-jaring kubus dengan posisi alas dan tutup yang tepat ditunjukkan oleh gambar nomor </p>`,
                    choice1: `<p class='choice-text' data-number='1'>1 dan 2</p>`,
                    choice2: `<p class='choice-text' data-number='2'>1 dan 3</p>`,
                    choice3: `<p class='choice-text' data-number='3'>2 dan 4</p>`,
                    choice4: `<p class='choice-text' data-number='4'>3 dan 4</p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Jika jaring-jaring kubus di bawah ini dilipat dapat membentuk kubus, maka sisi yang akan bertemu adalah</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/23.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>AB dan EF</p>`,
                    choice2: `<p class='choice-text' data-number='2'>AB dan CD</p>`,
                    choice3: `<p class='choice-text' data-number='3'>CD dan EF</p>`,
                    choice4: `<p class='choice-text' data-number='4'>CD dan GH</p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/24.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Gambar yang merupakan jaring-jaring balok adalah</span>`,
                    choice1: `<p class='choice-text' data-number='1'>I dan II</p>`,
                    choice2: `<p class='choice-text' data-number='2'>I dan IV</p>`,
                    choice3: `<p class='choice-text' data-number='3'>II dan III</p>`,
                    choice4: `<p class='choice-text' data-number='4'>II dan IV</p>`,
                    answer: 4
                },
                {
                    question : `<span class='text-soal'>Manakah gambar berikut yang merupakan jaring-jaring bangun prisma segitiga ...</span>`,
                    choice1: `<img src="{{ asset('img/soal/25-1.png') }}" data-number='1' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice2: `<img src="{{ asset('img/soal/25-2.png') }}" data-number='2' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice3: `<img src="{{ asset('img/soal/25-3.png') }}" data-number='3' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice4: `<img src="{{ asset('img/soal/25-4.png') }}" data-number='4' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar di bawah ini!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/26.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Agar menjadi jaring-jaring limas segitiga, bangun segitiga yang harus dihilangkan adalah nomor </span>`,
                    choice1: `<p class='choice-text' data-number='1'>1</p>`,
                    choice2: `<p class='choice-text' data-number='2'>3</p>`,
                    choice3: `<p class='choice-text' data-number='3'>4</p>`,
                    choice4: `<p class='choice-text' data-number='4'>5</p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Rangkaian bangun datar yang merupakan jaring-jaring limas segi empat adalah </span>`,
                    choice1: `<img src="{{ asset('img/soal/27-1.png') }}" data-number='1' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice2: `<img src="{{ asset('img/soal/27-2.png') }}" data-number='2' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice3: `<img src="{{ asset('img/soal/27-3.png') }}" data-number='3' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice4: `<img src="{{ asset('img/soal/27-4.png') }}" data-number='4' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    answer: 2
                },  
                {
                    question : `<span class='text-soal'>Di bawah ini yang bukan termasuk jaring-jaring prisma segitiga adalah ...</span>`,
                    choice1: `<img src="{{ asset('img/soal/28-1.png') }}" data-number='1' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice2: `<img src="{{ asset('img/soal/28-2.png') }}" data-number='2' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice3: `<img src="{{ asset('img/soal/28-3.png') }}" data-number='3' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    choice4: `<img src="{{ asset('img/soal/28-4.png') }}" data-number='4' alt="diagram jawaban" class="img-responsive custom-card-img-jawaban" align="left">`,
                    answer: 1
                },  
                {
                    question : `<span class='text-soal'>Bangun ini tersusun dari 2 buah lingkaran sebagai alas dan tutup, serta 1 buah persegi panjang sebagai selimut. Bangun apakah yang dimaksud ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>Bola</p>`,
                    choice2: `<p class='choice-text' data-number='2'>Tabung</p>`,
                    choice3: `<p class='choice-text' data-number='3'>Kerucut</p>`,
                    choice4: `<p class='choice-text' data-number='4'>A, B, dan C salah</p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar jaring-jaring di bawah</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/30.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Jaring-jaring di samping tersusun atas ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>1 buah lingkaran sebagai tutup dan alas serta 1 buah bidang datar lengkung sebagai selimut.</p>`,
                    choice2: `<p class='choice-text' data-number='2'>2 buah lingkaran sebagai alas dan 1 buah bidang datar lengkung sebagai selimut.</p>`,
                    choice3: `<p class='choice-text' data-number='3'>1 buah lingkaran sebagai alas dan 1 buah bidang datar lengkung sebagai selimut.</p>`,
                    choice4: `<p class='choice-text' data-number='4'>1 buah lingkaran sebagai alas dan 1 buah bidang tegak sebagai selimut.</p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut! </span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/31.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Berapakah luas permukaan kemasan teh tersebut ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>682 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>782 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>884 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>20.332 cm<sup>2</sup></p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Luas permukaan bangun di bawah adalah ...</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/32.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>64 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>182 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>192 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>384 cm<sup>2</sup></p>`,
                    answer: 4
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut! </span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/33.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Pada prisma ABC.DEF, jika AC = 6 cm, AB = 8 cm, dan BE = 14 cm, maka berapakah luas permukaan bangun prisma tersebut ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>324 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>384 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>6.768 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>18.128 cm<sup>2</sup></p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>
                                    Suatu limas segiempat beraturan sisi tegaknya terdiri atas empat segitiga sama kaki yang kongruen. 
                                    Diketahui luas salah satu segitiga itu 135 cm<sup>2</sup> dan tinggi segitiga dari puncak limas 15 cm. berapakah luas permukaan limas segiempat tersebut 
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>6.372 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>864 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>459 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>621 cm<sup>2</sup></p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>
                                    Sebuah topi petani berbentuk kerucut mempunyai jari-jari 6 cm dan tingginya 8 cm. 
                                    Berapakah luas permukaan topi tersebut apabila nilai π = 3,14 Sebuah topi petani berbentuk kerucut mempunyai jari-jari 6 cm dan tingginya 8 cm. Berapakah luas permukaan topi tersebut apabila nilai π = 3,14 
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>263,76 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>301,44 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>263 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>301 cm<sup>2</sup></p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>
                                    Diketahui luas permukaan suatu tabung adalah 2.640 cm<sup>2</sup>. Jika jar-jari alasnya 14 cm, berapakah luas selimut tabung tersebut 
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>1.232 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>1.400 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>1.408 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>1.450 cm<sup>2</sup></p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>
                                    Tangki penyimpanan gas alam cair berbentuk bola dengan jari-jari 70 m . Supaya tangki itu dapat menyimpan gas alam cair sampai -160<sup>O</sup>C tanpa membeku, lapisan luar tangki tersebut diisolasi. 
                                    Jika biaya isolasi per meter persegi adalah Rp. 100.000,00. 
                                    Berapa besar biaya yang diperlukan untuk mengisolasi tangki tersebut ...
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>4,15 miliyar rupiah</p>`,
                    choice2: `<p class='choice-text' data-number='2'>5,20 miliyar rupiah</p>`,
                    choice3: `<p class='choice-text' data-number='3'>6,16 miliyar rupiah</p>`,
                    choice4: `<p class='choice-text' data-number='4'>7,21 miliyar rupiah</p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/38.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Luas permukaan bangun pada gambar adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>2.736 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>2.592 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>1.877 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>1.584 cm<sup>2</sup></p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Agus akan membuat kandang burung dari triplek seperti gambar berikut! </span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/39.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>8.300 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>7.900 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>7.300 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>6.700 cm<sup>2</sup></p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Sebuah akuarium berbentuk kubus memiliki panjang rusuk 60 cm. jika akuarium tersebut diisi air hingga penuh, berapa liter air yang diperlukan ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>21,6 liter</p>`,
                    choice2: `<p class='choice-text' data-number='2'>36 liter</p>`,
                    choice3: `<p class='choice-text' data-number='3'>216 liter</p>`,
                    choice4: `<p class='choice-text' data-number='4'>360 liter</p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Sebuah bak air berbentuk balok berukuran panjang 65 cm, lebar 40 cm, dan tinggi 48 cm. bak air tersebut berisi air penuh. Sebagian air tersebut dipindahkan ke dalam bak tersebut yang berbentuk balok yang kosong berukuran panjang 55 cm, lebar 40 cm, dan tinggi 36 cm. tinggi permukaan air pada kedua bak sama. Tinggi permukaan air adalah ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>28 cm</p>`,
                    choice2: `<p class='choice-text' data-number='2'>26 cm</p>`,
                    choice3: `<p class='choice-text' data-number='3'>24 cm</p>`,
                    choice4: `<p class='choice-text' data-number='4'>18 cm</p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/42.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Volume bangun tersebut adalah  ...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>21.952 cm<sup>2</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>21.825 cm<sup>2</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>10.976 cm<sup>2</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>10.926 cm<sup>2</sup></p>`,
                    answer: 3
                },
                {
                    question : `<span class='text-soal'>Alas sebuah limas berbentuk segitiga sama kaki dengan panjang sisi alasnya 12 cm dan panjang kakinya 10 cm. Jika tinggi limas 9 cm, volume limas adalah...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>169 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>144 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>121 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>100 cm<sup>3</sup></p>`,
                    answer: 2
                },
                {
                    question : `<span class='text-soal'>
                                    Sebuah kerucut mempunyai volume 27 cm<sup>3</sup>. 
                                    Jika diamater kerucut diperbesar 3 kali dan tingginya diperbesar 2 kali, maka volume kerucut tersebut adalah 
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>468 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>450 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>268 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>162 cm<sup>3</sup></p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/45.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Berapakah volume bangun tersebut adalah...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>1.800 liter</p>`,
                    choice2: `<p class='choice-text' data-number='2'>2.826 liter</p>`,
                    choice3: `<p class='choice-text' data-number='3'>22.608 liter</p>`,
                    choice4: `<p class='choice-text' data-number='4'>56.520 liter</p>`,
                    answer: 4
                },
                {
                    question : `<span class='text-soal'>
                                    Andi memiliki sebuah bola plastik. Bola tersebut diisi oleh udara sampai penuh. 
                                    Volume udara yang dimasukkan di dalamnya adalah 38.808 cm<sup>3</sup>. Jari-jari bola tersebut adalah...
                                </span>`,
                    choice1: `<p class='choice-text' data-number='1'>21 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>25 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>31 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>35 cm<sup>3</sup></p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut! </span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/47.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Volume bangun ruang di samping adalah...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>10.647 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>10.845 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>16.577 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>17.577 cm<sup>3</sup></p>`,
                    answer: 4
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar benda yang berbentuk tabung dan kerucut berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/48.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Jika π = 22/7, maka volume benda tersebut adalah...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>2.156 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>2.310 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>2.772 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>2.884 cm<sup>3</sup></p>`,
                    answer: 1
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar bangun berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/49.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Volume bangun tersebut adalah...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>4.096 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>6.144 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>10.230 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>10.240 cm<sup>3</sup></p>`,
                    answer: 4
                },
                {
                    question : `<span class='text-soal'>Perhatikan gambar berikut!</span>
                                <span class='img-soal'>
                                    <img src="{{ asset('img/soal/50.png') }}" alt="diagram pertanyaan" class="img-responsive custom-card-img" style="width: 300px;" align="center">
                                </span>
                                <span class='text-soal'>Volume gabungan bangun tersebut adalah...</span>`,
                    choice1: `<p class='choice-text' data-number='1'>675 cm<sup>3</sup></p>`,
                    choice2: `<p class='choice-text' data-number='2'>990 cm<sup>3</sup></p>`,
                    choice3: `<p class='choice-text' data-number='3'>1.080 cm<sup>3</sup></p>`,
                    choice4: `<p class='choice-text' data-number='4'>1.350 cm<sup>3</sup></p>`,
                    answer: 3
                },


            ];

            const CORRECT_BONUS = 2;
            const MAX_QUESTIONS = 50;

            startGame = () => {
                questionCounter = 0;
                availableQuesions = [...questions];
                getNewQuestion();
            }

            getNewQuestion = () => {
                questionCounter++;
                $('#questionCounter').text(`${questionCounter}/${MAX_QUESTIONS}`);
                
                const questionIndex = Math.floor(Math.random() * availableQuesions.length);
                currentQuestion = availableQuesions[questionIndex];
                $('#question').html(currentQuestion.question);


                $.each(choices, function (indexInArray, valueOfElement) { 
                    const number = valueOfElement.dataset["number"];
                    const paraf = valueOfElement.querySelector('.choice-text');
                    $(paraf).html(currentQuestion["choice" + number]);
                });

                availableQuesions.splice(questionIndex, 1);
                acceptingAnswers = true;
            };

            $.each(choices, function (indexInArray, valueOfElement) { 
                $(valueOfElement).click(function (e) { 
                    if (!acceptingAnswers) return;

                    acceptingAnswers = false;
                    // const selectedChoice = e.target;
                    const selectedAnswer = valueOfElement.dataset["number"];

                    const classToApply = selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

                    if (classToApply === "correct") {
                        incrementScore(CORRECT_BONUS);
                    }

                    // selectedChoice.parentElement.classList.add(classToApply);
                    valueOfElement.classList.add(classToApply);
                    
                    setTimeout( () => {
                        // selectedChoice.parentElement.classList.remove(classToApply);
                        valueOfElement.classList.remove(classToApply);
                        if (availableQuesions.length === 0) {
                            $('#btn_simpan').trigger("click");
                        } else {
                            getNewQuestion();
                        }
                    }, 1000);

                });
            });

            incrementScore = num => {
                score += num;
            }

            clearCard = () => {
                $('#game').html(`<div class="text-center">
                                    <h1 style="color: red;"> EVALUASI SELESAI</h1>
                                </div>`);
            }
            
            $('#btn_mulai').click(function (e) { 
                $('#header-game').css('display','none');
                $('#soal-game').css('display','block');
                $('#btn_simpan').css('display','block');
                $(this).css('display','none');

                startGame();
                setTimer();

            });

            function setTimer() {
                let doTimer = setInterval(function() {
                    let distance = later.getTime() - new Date().getTime();
                
                    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if (distance < 0) {
                        clearInterval(doTimer);
                        if (!clickSimpan) {
                            $('#btn_simpan').trigger('click');
                        }
                    } else {
                        let hoursDis = ("0" + hours).slice(-2);
                        let minutesDis = ("0" + minutes).slice(-2);
                        let secondsDis = ("0" + seconds).slice(-2);
                        $('#timer').html("<h1>" + hoursDis + ":" + minutesDis + ":" + secondsDis +"</h1>");
                    }
                }, 1000);
            }

            $('#btn_simpan').click(function (e) { 
                clearCard();
                clickSimpan = true;
                //questionCounter = 10;

                doSave();
            });
            
            function doSave() {
                $.ajax({
                    type: "POST",
                    url: "{{ route('nilai-api.store') }}",
                    data: {
                        "user_id" : userId,
                        'skor' : score
                    },
                    dataType: "JSON",
                    success: function (response) {
                        // let data = response.data;
                        if (response.status) {
                            Swal.fire({
                                title: 'Selamat',
                                text: 'Telah menyelesaikan evaluasi',
                                imageUrl: `{{ asset('img/soal/yes.gif') }}`,
                                imageWidth: 400,
                                imageHeight: 200,
                                imageAlt: 'Gambar',
                            }).then((result) => {
                                document.location.href = "{{ route('profil.index') }}"; 
                            })
                        } else {
                            alert("GAGAL");
                        }
                        
                    }
                });
            }
        });
    </script>
@endsection