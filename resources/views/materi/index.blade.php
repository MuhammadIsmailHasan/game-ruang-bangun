@extends('layouts.frontend')

@section('content')

    {{-- <section id="materi-2" style="padding: 100px 30px 30px 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                    <h2>MATERI</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">Penyajian Data dalam Diagram Lingkaran</h4>
                        <p class="card-text">Diagram lingkaran merupakan diagram data berbentuk lingkaran yang terdiri dari beberapa bagian (juring).</p>
                        <img src="{{ asset('img/materi/100.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                        <p class="card-text after-img">Besar juring disesuaikan dengan besar persentase ataupun besar sudut setiap data. </p>
                        <img src="{{ asset('img/materi/200.png') }}" alt="diagram 1" class="img-responsive img-bordered">
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
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
                            <li>
                                <a href="#prisma"><h4>PRISMA</h4></a>
                            </li>
                            <li>
                                <a href="#limas"><h4>LIMAS</h4></a>
                            </li>
                            <li>
                                <a href="#kerucut"><h4>KERUCUT</h4></a>
                            </li>
                            <li>
                                <a href="#tabung"><h4>TABUNG</h4></a>
                            </li>
                            <li>
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
                                    <p>1. Ana membuat sebuah cake, namun cake yang ia buat semua bagian sisinya gosong. Ia ingin potong bagian sisinya. Maka berapa dan mana saja sisi yang harus dipotong?</p>
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
                                            &nbsp;d. Kiri, kanan, depan, belakang, dan atas, bawah
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>2. Adi akan membuat prakarya yang berbentuk kerangka kubus dengan menggunakan bahan bambu, berapa bambu yang dibutuhkan agar prakaryanya menjadi kerangka kubus?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="d">
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="a">
                                            &nbsp;a. 6
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="b">
                                            &nbsp;b. 8
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="c">
                                            &nbsp;c. 10
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="d">
                                            &nbsp;d. 12
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>3. Seorang pengamat akan melakukan pengamatan di sebuah ruangan yang berbentuk kubus. Agar pengamatan berjalan dengan baik, maka ia membutuhkan penerangan yang cukup. Lalu ia menaruh lampu disetiap sudut ruang tersebut. Berapa lampu yang dibutuhkan untuk menerangi ruangan tersebut?</p>
                                </div>
                                <div class="pilihan radio-group" data-jawaban="d">
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="a">
                                            &nbsp;a. 7
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="b">
                                            &nbsp;b. 8
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="c">
                                            &nbsp;c. 9
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label><input type="radio" name="1" value="d">
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
                                "Kubus adalah bangun ruang tiga dimensi yang dibatasi oleh enam buah sisi yang kongruen berbentuk persegi."
                            </p>
                            <p>Sifat-sifat kubus: <br/>
                                1.	Memiliki 6 buah sisi yang sama besar: ABCD = EFGH = ABFE = CDGH = BCGF = ADHE.<br/>
                                2.	Memiliki 12 rusuk yang sama panjang: AB = BC = CD = AD = EF = FG = GH = HE = EA = HD = FB = GC.<br/>
                                3.	Memiliki 8 buah titik sudut yang sama besar: &ltA = &ltB = &ltC = &ltD = &ltE = &ltF = &ltG = &ltH = 90 derajat.
                            </p>
                        </div>
                        <div id="kubus-5" class="kubus-content" style="display: none">
                            <p><b>C. JARING-JARING</b></p>
                            <p>Perhatikan jaring-jaring di bawah ini!</p>
                            <p>Apakah semua jaring-jaring di bawah ini adalah bangun yang sama? Carilah jaring-jaring yang membentuk bangun kubus!</p>
                            <img src="{{ asset('img/materi/13.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 600px">
                            <p>Berdasarkan jaring-jaring di atas, apa yang dapat kalian simpulkan?</p>
                        </div>
                        <div id="kubus-6" class="kubus-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Berdasarkan jarring-jaring di atas dapat disimpulkan bahwa jaring-jaring kubus memiliki 6 buah bangun persegi yang sama besar.</p>
                        </div>
                        <div id="kubus-7" class="kubus-content" style="display: none">
                            <p><b>D. LUAS PERMUKAAN</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/14.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>Bangun Kubus memiliki 6 sisi yang sama besar yang berbentuk persegi seperti gambar di atas. </p>
                            <img src="{{ asset('img/materi/15.png') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 400px">
                            <p>Kemudian, jawablah pertanyaan di bawah ini! <br/>
                                1. Teman Sarah akan berulang tahun, maka ia menyiapkan hadiah ulang tahun. Sarah menyiapkan sebuah kotak untuk menaruh hadiah ulang tahunnya. Kotak tersebut berbentuk kubus. Ia akan membungkus kadonya dengan kertas kado dipotong menjadi beberapa bagian sesuai sisi dari kotak kadonya. Namun kertas kado yang ia potong kurang besar. Lalu apa yang harus Sarah lakukan agar potongannya tepat dengan kotak kadonya?
                            </p>
                        </div>
                        <div id="kubus-8" class="kubus-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/16.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>Kubus memiliki 6 sisi yang berbentuk persegi, dan jika luas persegi = sisi × sisi, seperti gambar di samping maka, <br/>
                                Luas permukaan = 6 × persegi 
                                = 6 × sisi × sisi
                                = 6 × s2
                            </p>
                        </div>
                        <div id="kubus-9" class="kubus-content" style="display: none">
                            <p><b>E. VOLUME</b></p>
                            <p>Perhatikan gambar di bawah ini!</p>
                            <img src="{{ asset('img/materi/17.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>Kubus memiliki panjang, lebar, serta sisi tegak disebut tinggi yang memiliki panjang sama besar, seperti gambar di atas</p>
                            <p>Jawablah pertanyaan di bawah ini! <br/>
                                1.	Pak Andi akan mengukur volume air yang ada di sebuah drum yang berbentuk kubus. Air di dalam drum tersebut penuh. Agar pekerjaan Pak Andi lebih cepat untuk mengukur banyaknya air dalam drum tersebut. Apa yang sebaiknya Pak Andi lakukan agar pekerjaanya cepat? 
                            </p>
                        </div>
                        <div id="kubus-10" class="kubus-content" style="display: none">
                            <p><b>PENJELASAN!</b></p>
                            <p>Berdasarkan pertanyaan di atas bahwa Pak Andi harus menghitung volume dari drum. Drum memiliki bentuk kubus, jadi Pak Andi harus mencari volume kubus untuk mempercepat dalam mengukur banyaknya air. </p>
                            <img src="{{ asset('img/materi/17.jpg') }}" alt="diagram 1" 
                                class="img-responsive img-bordered"
                                style="width: 200px">
                            <p>Kubus memiliki luas alas = panjang × lebar serta sisi tegak yang disebut tinggi.
                                Dengan demikian, volume kubus sebagai berikut: <br/>
                                Volume kubus = luas alas × tinggi = panjang × lebar × tinggi <br/>
                                Karena kubus memiliki sisi yang sama panjang maka panjang = lebar = tinggi, sehingga: <br/>
                                Volume kubus = s × s × s = s3
                                </p>
                        </div>

                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman">
                            <ul class="pagination pg-blue" id="kubus-content">
                                <li class="page-item active" data-jenis="kubus-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="kubus-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="kubus-3"><a class="page-link">3</a></li>
                                <li class="page-item" data-jenis="kubus-4"><a class="page-link">4</a></li>
                                <li class="page-item" data-jenis="kubus-5"><a class="page-link">5</a></li>
                                <li class="page-item" data-jenis="kubus-6"><a class="page-link">6</a></li>
                                <li class="page-item" data-jenis="kubus-7"><a class="page-link">7</a></li>
                                <li class="page-item" data-jenis="kubus-8"><a class="page-link">8</a></li>
                                <li class="page-item" data-jenis="kubus-9"><a class="page-link">9</a></li>
                                <li class="page-item" data-jenis="kubus-10"><a class="page-link">10</a></li>
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
                                        style="width: 600px">
                                </div>
                                <div class="pilihan">
                                    <p>a. A kiri, A depan; B belakang, B depan; A kanan, A kiri; dan B atas, B kanan</p>
                                    <p>b. Atas, bawah dan kiri, kanan</p>
                                    <p>c. Kiri, kanan, depan, belakang, dan kiri, bawah</p>
                                    <p>d. Kiri, kanan, depan, belakang, dan atas, bawah</p>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>2. Adi akan membuat prakarya yang berbentuk kerangka kubus dengan menggunakan bahan bambu, berapa bambu yang dibutuhkan agar prakaryanya menjadi kerangka kubus?</p>
                                </div>
                                <div class="pilihan">
                                    <p>a. 6</p>
                                    <p>b. 8</p>
                                    <p>c. 10</p>
                                    <p>d. 12</p>
                                </div>
                            </div>
                            <div class="latihan">
                                <div class="soal">
                                    <p>3. Seorang pengamat akan melakukan pengamatan di sebuah ruangan yang berbentuk kubus. Agar pengamatan berjalan dengan baik, maka ia membutuhkan penerangan yang cukup. Lalu ia menaruh lampu disetiap sudut ruang tersebut. Berapa lampu yang dibutuhkan untuk menerangi ruangan tersebut?</p>
                                </div>
                                <div class="pilihan">
                                    <p>a. 7</p>
                                    <p>b. 8</p>
                                    <p>c. 9</p>
                                    <p>d. 10</p>
                                </div>
                            </div>
                        </div>
                        <hr style="margin: 0;">
                        <nav aria-label="Page navigation example" class="halaman">
                            <ul class="pagination pg-blue" id="balok-content">
                                <li class="page-item active" data-jenis="balok-1"><a class="page-link">1</a></li>
                                <li class="page-item" data-jenis="balok-2"><a class="page-link">2</a></li>
                                <li class="page-item" data-jenis="balok-3"><a class="page-link">3</a></li>
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
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#btn_selesai').click(function (e) { 
                let userId = '{{ Auth::user()->id }}';
                let url = "{{ route('user-api.update', 'replaceThis') }}";
                
                $.ajax({
                    type: "POST",
                    url: url.replace('replaceThis', userId),
                    data: {
                        "status_materi" : 1
                    },
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                    title: 'LANJUTKAN BERMAIN ?',
                                    text: "Pilih Yes untuk Lanjut ke Game Ronde 1",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes',
                                    cancelButtonText: 'No'
                                }).then((result) => {
                                    if (result.value) {
                                        document.location.href = "{{ route('permainan.index', 1) }}"
                                    } else {
                                        document.location.href = "{{ route('home') }}"; 
                                    }
                                });
                        } else {
                            alert("GAGAL");
                        }
                    }
                });
            });

            $('#btn_tampil').click(function (e) { 
                if (drawStatus) {
                    $(this).css('display', 'none');
                    $('#img_tampil').css('display', 'block');
                    // $('#can_dua').css('display', 'block');
                } else {
                    alert("Selesaikan Diagram Dahulu");
                }
            });

            // canvas 1
            var myCanvas = document.getElementById("can_satu");
            myCanvas.width = 300;
            myCanvas.height = 300;
            var ctx = myCanvas.getContext("2d");

            var totalDegreeTempe = 0;
            var totalDegreeBebek = 0;
            var totalDegreePanggang = 0;
            var totalDegreeGoreng = 0;
            let drawStatus = false;

            function drawArc(ctx, centerX, centerY, radius, startAngle, endAngle){
                ctx.beginPath();
                ctx.arc(centerX, centerY, radius, startAngle, endAngle);
                ctx.stroke();
            }

            function drawPieSlice(ctx,centerX, centerY, radius, startAngle, endAngle, color ){
                //newEndAngle = startAngle + endAngle;
                ctx.fillStyle = color;
                ctx.beginPath();
                ctx.moveTo(centerX,centerY);
                ctx.arc(centerX, centerY, radius, startAngle, endAngle);
                ctx.closePath();
                ctx.fill();
            }

            function resetDraw(startAngle, endAngle) {
                drawPieSlice (ctx, 150, 150, 150, startAngle, endAngle, 'white');
            }

            calRadius = num => {
                return (Math.PI / 180) * num;
            }

            function rubahStatus(degEnd) {
                drawStatus = degEnd == 360 ? true : false;
            }

            // draw circle
            drawArc(ctx, 150,150,150, 0, 360);

            $('#tempe_akhir').blur(function (e) {
                let degStart = parseInt($('#tempe_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 360);
                totalDegreeTempe = 0;
                
                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'magenta');
                    totalDegreeTempe = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
            $('#bebek_akhir').blur(function (e) { 
                let degStart = parseInt($('#bebek_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 0);
                totalDegreeBebek = 0;

                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'blue');
                    totalDegreeBebek = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
            $('#ayam_panggang_akhir').blur(function (e) { 
                let degStart = parseInt($('#ayam_panggang_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 0);
                totalDegreePanggang = 0;
                
                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'red');
                    totalDegreePanggang = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
            $('#ayam_goreng_akhir').blur(function (e) { 
                let degStart = parseInt($('#ayam_goreng_awal').val()); 
                let degEnd = parseInt($(this).val());
                
                resetDraw(calRadius(degStart), 0);
                totalDegreeGoreng = 0;

                if (degEnd < degStart) {
                    alert('derajat akhir harus lebih besar');  
                } else {
                    drawPieSlice(ctx, 150,150,150, calRadius(degStart), calRadius(degEnd), 'yellow');
                    totalDegreeGoreng = degEnd - degStart;

                    rubahStatus(degEnd);
                }
            });
        });
    </script> --}}
@endsection