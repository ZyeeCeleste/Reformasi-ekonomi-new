<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8"> <meta 
    name="viewport" content="width=device-width, initial-scale=1.0, 
    user-scalable=yes"> <title>Ekonomi Indonesia · Era Reformasi 
    1998-2004</title> <link 
    href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" 
    rel="stylesheet"> <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <script src="https://cdn.tailwindcss.com"></script> <script defer 
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    <script 
    src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script> 
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        
        /* ==================== DARK MODE (DEFAULT) ==================== */
        body.dark-mode{background:linear-gradient(135deg, #0a1628 0%, #0d1b2a 50%, #1b263b 100%);font-family:'Inter',system-ui,sans-serif;overflow-x:hidden;}
        body.dark-mode .glass-card{background:rgba(27, 38, 59, 0.75);backdrop-filter:blur(12px);border:1px solid rgba(212,175,55,0.35);border-radius:2rem;transition:all 0.3s ease;}
        body.dark-mode .glass-card:hover{border-color:rgba(212,175,55,0.6);box-shadow:0 20px 35px -12px rgba(0,0,0,0.5);}
        body.dark-mode .tokoh-card{background:rgba(27, 38, 59, 0.6);border:1px solid rgba(212,175,55,0.2);}
        body.dark-mode .tokoh-card:hover{background:rgba(212,175,55,0.15);border-color:#d4af37;}
        body.dark-mode .tokoh-img{background:linear-gradient(135deg,#1b263b,#0d1b2a);}
        body.dark-mode .avatar{background:linear-gradient(135deg,#1b263b,#0d1b2a);}
        body.dark-mode .toggle-card{background:rgba(27, 38, 59, 0.5);}
        body.dark-mode .toggle-content{background:rgba(13, 27, 42, 0.8);}
        body.dark-mode .stat-badge{background:rgba(212,175,55,0.15);border:1px solid rgba(212,175,55,0.3);}
        body.dark-mode .scroll-horizontal::-webkit-scrollbar-track{background:#1b263b;}
        body.dark-mode .modal-overlay{background:rgba(13, 27, 42, 0.95);}
        body.dark-mode .text-default{color:#e2e8f0;}
        body.dark-mode .text-secondary{color:#9ca3af;}
        body.dark-mode .bg-overlay{background:rgba(0,0,0,0.2);}
        
        /* ==================== LIGHT MODE ==================== */
        body.light-mode{background:linear-gradient(135deg, #f5f7fa 0%, #e8edf2 50%, #dce3ec 100%);font-family:'Inter',system-ui,sans-serif;overflow-x:hidden;}
        body.light-mode .glass-card{background:rgba(255,255,255,0.85);backdrop-filter:blur(12px);border:1px solid rgba(212,175,55,0.4);border-radius:2rem;transition:all 0.3s ease;color:#1a2a3a;}
        body.light-mode .glass-card:hover{border-color:#d4af37;box-shadow:0 20px 35px -12px rgba(0,0,0,0.15);}
        body.light-mode .btn-next{background:linear-gradient(135deg,#d4af37,#b8860b);color:white;}
        body.light-mode .tokoh-card{background:rgba(255,255,255,0.7);border:1px solid rgba(212,175,55,0.3);color:#1a2a3a;}
        body.light-mode .tokoh-card:hover{background:rgba(212,175,55,0.2);border-color:#d4af37;}
        body.light-mode .tokoh-img{background:linear-gradient(135deg,#e8edf2,#dce3ec);border:3px solid #d4af37;}
        body.light-mode .tokoh-img i{color:#b8860b;}
        body.light-mode .avatar{background:linear-gradient(135deg,#e8edf2,#dce3ec);border:2px solid #d4af37;}
        body.light-mode .avatar i{color:#b8860b;}
        body.light-mode .toggle-card{background:rgba(0,0,0,0.05);color:#1a2a3a;}
        body.light-mode .toggle-card:hover{background:rgba(212,175,55,0.15);}
        body.light-mode .toggle-content{background:rgba(0,0,0,0.04);color:#2d3a4a;border-left:2px solid #d4af37;}
        body.light-mode .stat-badge{background:rgba(212,175,55,0.15);border:1px solid rgba(212,175,55,0.4);color:#1a2a3a;}
        body.light-mode .dekorasi{background:linear-gradient(90deg,transparent,#d4af37,transparent);}
        body.light-mode .scroll-horizontal::-webkit-scrollbar-track{background:#dce3ec;}
        body.light-mode .scroll-horizontal::-webkit-scrollbar-thumb{background:#d4af37;}
        body.light-mode .modal-overlay{background:rgba(0,0,0,0.85);}
        body.light-mode .text-default{color:#1a2a3a;}
        body.light-mode .text-secondary{color:#4a5a6a;}
        body.light-mode .bg-overlay{background:rgba(0,0,0,0.05);}
        body.light-mode .text-gray-400{color:#6c7a8a;}
        body.light-mode .text-gray-500{color:#8a9aaa;}
        body.light-mode .text-gray-300{color:#2d3a4a;}
        body.light-mode .border-amber-900\/30{border-color:rgba(212,175,55,0.3);}
        body.light-mode footer{color:#4a5a6a;}
        body.light-mode footer a{color:#b8860b;}
        
        /* Style Umum */
        .btn-next{transition:all 0.3s ease;box-shadow:0 4px 14px rgba(212,175,55,0.3);cursor:pointer;}
        .btn-next:hover{transform:scale(1.02);box-shadow:0 10px 25px -5px rgba(212,175,55,0.5);}
        .bab-item{transition:all 0.6s cubic-bezier(0.2,0.9,0.4,1.1);}
        .tokoh-card{transition:all 0.2s;cursor:pointer;flex-shrink:0;border-radius:1rem;}
        .tokoh-card:hover{transform:translateY(-5px);}
        .tokoh-img{width:90px;height:90px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto;}
        .avatar{width:75px;height:75px;border-radius:50%;display:flex;align-items:center;justify-content:center;}
        .video-container{position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:1rem;}
        .video-container iframe{position:absolute;top:0;left:0;width:100%;height:100%;}
        .event-img{transition:transform 0.3s ease,filter 0.3s;cursor:pointer;border-radius:1rem;width:100%;filter:brightness(0.95);}
        .event-img:hover{transform:scale(1.02);filter:brightness(1.05);}
        .toggle-card{border-radius:1rem;padding:0.75rem;margin-bottom:0.75rem;cursor:pointer;transition:all 0.2s;border-left:3px solid transparent;}
        .toggle-card:hover{transform:translateX(4px);}
        .toggle-content{border-radius:0.75rem;margin-top:0.5rem;padding:0.85rem;font-size:0.85rem;line-height:1.6;}
        .rotate-180{transform:rotate(180deg);transition:transform 0.2s;}
        .dekorasi{height:2px;margin:1rem 0;}
        .stat-badge{border-radius:0.5rem;padding:0.25rem 0.75rem;font-size:0.7rem;}
        .scroll-horizontal{overflow-x:auto;scroll-behavior:smooth;-webkit-overflow-scrolling:touch;}
        .scroll-horizontal::-webkit-scrollbar{height:4px;border-radius:10px;}
        .modal-overlay{backdrop-filter:blur(8px);z-index:1000;}
        ::-webkit-scrollbar{width:6px;border-radius:10px;}
        @keyframes fadeInUp{from{opacity:0;transform:translateY(30px);}to{opacity:1;transform:translateY(0);}}
        .fade-in{animation:fadeInUp 0.6s ease forwards;}
        .theme-toggle{position:fixed;top:20px;right:20px;z-index:100;background:rgba(0,0,0,0.5);backdrop-filter:blur(8px);border-radius:40px;padding:5px;cursor:pointer;transition:all 0.3s;}
        .theme-toggle:hover{transform:scale(1.05);}
        body.light-mode .theme-toggle{background:rgba(0,0,0,0.1);backdrop-filter:blur(8px);}
    </style>
</head>
<body class="dark-mode text-gray-200 antialiased">

    <!-- TOMBOL TOGGLE THEME -->
    <div class="theme-toggle flex items-center gap-2 px-3 py-2 shadow-lg" onclick="toggleTheme()">
        <i class="fas fa-sun text-yellow-400 text-sm"></i>
        <span class="text-xs font-semibold" id="theme-text">Dark</span>
        <i class="fas fa-moon text-gray-300 text-sm"></i>
    </div>

<div x-data="app()" x-init="init" class="max-w-5xl mx-auto px-4 py-8 space-y-12">

    <!-- ==================== COVER SECTION ==================== -->
    <div id="coverSection" class="glass-card p-8 md:p-12 text-center space-y-8 fade-in">
        <div class="flex justify-center gap-2 flex-wrap">
            <span class="stat-badge"><i class="fas fa-chart-line mr-1"></i> Krisis Moneter</span>
            <span class="stat-badge"><i class="fas fa-building mr-1"></i> Reformasi</span>
            <span class="stat-badge"><i class="fas fa-chart-simple mr-1"></i> Pemulihan</span>
            <span class="stat-badge"><i class="fas fa-landmark mr-1"></i> 1998-2004</span>
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold bg-gradient-to-r from-amber-300 via-yellow-500 to-amber-600 bg-clip-text text-transparent">Ekonomi Indonesia<br>Masa Reformasi</h1>
        <p class="text-amber-400/80 text-lg tracking-wide">1998 – 2004 · Dari Krisis Moneter menuju Pemulihan Ekonomi</p>
        
        <div class="max-w-3xl mx-auto">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/AsErH0g7nYE" title="YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="text-xs text-gray-400 mt-2">Video: Kronologi Krisis Moneter 1998 & Awal Reformasi</p>
        </div>

        <div class="bg-overlay p-5 rounded-xl text-left max-w-3xl mx-auto">
            <p class="text-sm leading-relaxed">📌 <span class="font-semibold text-amber-300">Latar Reformasi:</span> Krisis moneter Asia 1997 yang bermula dari Thailand menyebar cepat ke Indonesia. Rupiah yang stabil di Rp2.400 per USD melorot tajam hingga Rp16.800 per USD pada Januari 1998. Inflasi melonjak 77%, ekonomi kontraksi -13,1% pada 1999. Lebih dari 20 juta orang kehilangan pekerjaan, kemiskinan melompat dari 11% menjadi 24%. Puncaknya, Presiden Soeharto mengundurkan diri pada 21 Mei 1998. Era Reformasi dimulai dengan restrukturisasi ekonomi total, penyehatan perbankan, desentralisasi fiskal, dan pemulihan kepercayaan investor.</p>
        </div>

        <!-- TIM RISET EKONOMI (URUT: Adnan, Charis, Mutiara) -->
        <div>
            <p class="text-sm uppercase tracking-wider text-amber-400 mb-4">◈ Tim Riset Ekonomi Reformasi ◈</p>
            <div class="flex flex-wrap justify-center gap-10">
                
                <!-- ADNAN RIDHO (Presensi 01) -->
                <div class="text-center">
                    <div class="avatar mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/jd1RBtC/IMG-20260510-WA0015-1.jpg" alt="Adnan Ridho" class="w-full h-full object-cover">
                    </div>
                    <p class="font-bold mt-2">Adnan Ridho</p>
                    <p class="text-xs text-amber-400/70">Presensi: 01</p>
                    <p class="text-xs text-gray-500">Makroekonomi</p>
                </div>

                <!-- CHARIS ARDY (Presensi 11) -->
                <div class="text-center">
                    <div class="avatar mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/VW9cfnzJ/IMG-20260510-WA0027-1.jpg" alt="Charis Ardy" class="w-full h-full object-cover">
                    </div>
                    <p class="font-bold mt-2">Charis Ardy</p>
                    <p class="text-xs text-amber-400/70">Presensi: 11</p>
                    <p class="text-xs text-gray-500">Kebijakan Fiskal</p>
                </div>

                <!-- MUTIARA KHAIRA (Presensi 22) -->
                <div class="text-center">
                    <div class="avatar mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/xq4Tk9LM/IMG-20260321-WA0034-1.jpg" alt="Mutiara Khaira" class="w-full h-full object-cover">
                    </div>
                    <p class="font-bold mt-2">Mutiara Khaira</p>
                    <p class="text-xs text-amber-400/70">Presensi: 22</p>
                    <p class="text-xs text-gray-500">Moneter & Perbankan</p>
                </div>
                
            </div>
        </div>

        <div class="dekorasi"></div>

        <!-- LINK REFERENSI -->
        <div class="text-xs text-gray-400 flex flex-wrap justify-center gap-4">
            <a href="https://drive.google.com/file/d/1GejqPyOj6aZNygrQI5PN60lcM_RJGo89/view?usp=drivesdk" target="_blank" class="hover:text-amber-400 transition"><i class="fas fa-book-open mr-1"></i> Jurnal Ekonomi Reformasi (UI)</a>
            <a href="https://drive.google.com/file/d/1weUlrzG2GyylpnsdNHFinEPSarsa5tlf/view?usp=drivesdk" target="_blank" class="hover:text-amber-400 transition"><i class="fas fa-chart-line mr-1"></i> Data BPS & BI</a>
            <a href="https://www.imf.org/external/np/loi/011598.HTM" target="_blank" class="hover:text-amber-400 transition"><i class="fas fa-university mr-1"></i> Kajian IMF – Indonesia</a>
            <a href="https://drive.google.com/file/d/1UGHpCza8qdg5pRND8ubT_Tt2cBipz27c/view?usp=drivesdk" target="_blank" class="hover:text-amber-400 transition"><i class="fas fa-landmark mr-1"></i> LPEM FEB UI</a>
        </div>

        <div>
            <button @click="nextBab(0)" class="btn-next px-8 py-3 rounded-full text-white font-semibold text-lg">Mulai Jelajahi →</button>
        </div>
    </div>
    <!-- ==================== BAB 1 ==================== -->
    <div id="bab1" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">1</span></div>
            <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">📊 Stabilitas Moneter & Perbankan</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
            <!-- GAMBAR KERUSUHAN BANK -->
            <div><img src="https://i.ibb.co.com/LDsZ3hq7/18-FW-KERUSUHAN-98-3.jpg" class="event-img w-full border border-amber-500/30" title="Rush penarikan massal 1998: ribuan nasabah mengantre panjang di depan bank"><p class="text-xs text-gray-400 mt-1">🖼️ Hover / tap gambar</p></div>
            
            <!-- TOGGLE BAB 1 -->
            <div class="space-y-3">
                
                <!-- Latar Belakang -->
                <div class="toggle-card" @click="bab1.toggleLB = !bab1.toggleLB">
                    <i class="fas fa-info-circle text-amber-400 mr-2"></i>
                    <span class="font-semibold">📜 Latar Belakang</span>
                    <i class="fas fa-chevron-down text-xs ml-2" :class="bab1.toggleLB ? 'rotate-180' : ''"></i>
                    <div x-show="bab1.toggleLB" x-collapse class="toggle-content">
                        Krisis moneter Asia 1997 yang dimulai dari Thailand menyebar cepat ke Indonesia. Rupiah yang semula stabil di Rp2.400 per USD anjlok drastis hingga mencapai Rp16.800 per USD pada Januari 1998. Bank-bank di Indonesia kolaps karena kredit macet akibat pelemahan rupiah yang signifikan. Sistem perbankan nasional hampir runtuh total pada awal 1998 karena likuiditas mengering dan masyarakat kehilangan kepercayaan terhadap perbankan, yang memicu rush atau penarikan massal dana di hampir semua bank.
                    </div>
                </div>
                
                <!-- Permasalahan -->
                <div class="toggle-card" @click="bab1.togglePM = !bab1.togglePM">
                    <i class="fas fa-exclamation-triangle text-amber-400 mr-2"></i>
                    <span class="font-semibold">⚠️ Permasalahan</span>
                    <i class="fas fa-chevron-down text-xs ml-2" :class="bab1.togglePM ? 'rotate-180' : ''"></i>
                    <div x-show="bab1.togglePM" x-collapse class="toggle-content">
                        Inflasi melonjak hingga 77 persen, menjadi yang tertinggi dalam sejarah Indonesia. Sebanyak 38 bank ditutup secara permanen oleh pemerintah karena tidak mampu memenuhi kewajiban. Terjadi rush penarikan massal dana nasabah di hampir semua bank, termasuk bank besar milik negara. Nilai tukar rupiah tidak terkendali sampai menyentuh level terendah Rp16.800 per USD. Suku bunga SBI melonjak hingga 70 persen sebagai upaya menstabilkan rupiah. Kredit macet atau NPL mencapai 50 persen dari total kredit perbankan, artinya setengah dari pinjaman tidak bisa dibayar oleh debitur. Kepercayaan publik terhadap perbankan hilang total.
                    </div>
                </div>
                
                <!-- Penyelesaian -->
                <div class="toggle-card" @click="bab1.togglePY = !bab1.togglePY">
                    <i class="fas fa-handshake text-amber-400 mr-2"></i>
                    <span class="font-semibold">🤝 Penyelesaian</span>
                    <i class="fas fa-chevron-down text-xs ml-2" :class="bab1.togglePY ? 'rotate-180' : ''"></i>
                    <div x-show="bab1.togglePY" x-collapse class="toggle-content">
                        Pemerintah membentuk BPPN (Badan Penyehatan Perbankan Nasional) pada Januari 1998 yang bertugas mengambil alih bank-bank bermasalah dan mengelola aset macet. Program rekapitulasi perbankan dilakukan dengan suntikan dana BLBI yang mencapai sekitar Rp600 triliun melalui penerbitan obligasi negara. Pemerintah juga memberikan penjaminan atau blanket guarantee untuk simpanan nasabah kecil di bawah Rp20 juta untuk menghentikan rush. Indonesia menandatangani Letter of Intent dengan IMF yang memberikan paket bailout senilai 43 miliar USD. Bank Indonesia menerapkan kebijakan suku bunga tinggi untuk menarik kembali investasi asing dan menstabilkan rupiah.
                    </div>
                </div>
                
                <!-- Dampak (Negatif + Positif) -->
                <div class="toggle-card" @click="bab1.toggleDP = !bab1.toggleDP">
                    <i class="fas fa-chart-line text-amber-400 mr-2"></i>
                    <span class="font-semibold">📊 Dampak</span>
                    <i class="fas fa-chevron-down text-xs ml-2" :class="bab1.toggleDP ? 'rotate-180' : ''"></i>
                    <div x-show="bab1.toggleDP" x-collapse class="toggle-content">
                        <p class="font-semibold text-red-400 mt-2 mb-2">⚠️ Dampak Negatif</p>
                        <p class="mb-4">Krisis ini menyebabkan jutaan rakyat kehilangan tabungan karena bank-bank tutup dan nilai uang menyusut drastis akibat inflasi. Pengangguran meningkat tajam karena sektor perbankan dan industri yang bergantung pada kredit bank ikut kolaps. Banyak perusahaan bangkrut karena kredit macet dan tidak bisa mengakses pinjaman baru. Kemiskinan melonjak dari 11 persen menjadi 24 persen hanya dalam kurun waktu dua tahun. Kepercayaan investor asing terhadap Indonesia anjlok, membuat pemulihan ekonomi berjalan lambat.</p>
                        <p class="font-semibold text-green-400 mt-2 mb-2">✅ Dampak Positif</p>
                        <p class="mb-2">Stabilitas moneter mulai kembali tercapai pada periode 2001-2003. Inflasi yang sempat melonjak ke 77 persen berhasil diturunkan menjadi 9 persen pada 2002. Nilai tukar rupiah perlahan stabil di kisaran Rp8.500 hingga Rp9.500 per USD. Kepercayaan publik terhadap perbankan mulai pulih berkat program penjaminan pemerintah dan restrukturisasi perbankan. NPL bank turun drastis dari 50 persen menjadi sekitar 8 persen pada 2003. Indonesia secara bertahap keluar dari program pengawasan IMF pada Desember 2003. Sektor perbankan berhasil direstrukturisasi menjadi lebih sehat dan transparan, dengan pengawasan yang lebih ketat dari Bank Indonesia.</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- TOKOH BAB 1 -->
        <div><p class="font-semibold text-amber-300 mb-2"><i class="fas fa-users mr-2"></i>Tokoh utama <span class="text-xs text-gray-400">(geser & klik untuk detail)</span></p>
            <div class="scroll-horizontal flex gap-4 pb-2">
                <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Boediono', 'Prof. Dr. Boediono - Menteri Koordinator Perekonomian 1998-1999. Berperan sebagai negosiator utama dengan IMF, menyusun kebijakan stabilisasi moneter, dan menjadi arsitek program penjaminan pemerintah (blanket guarantee) untuk perbankan yang berhasil menghentikan rush. Kemudian menjabat sebagai Gubernur BI (2008-2013) dan Wakil Presiden RI (2009-2014).')">
                    <div class="tokoh-img mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/0pRSMBJ9/IMG-20260510-WA0031.jpg" alt="Boediono" class="w-full h-full object-cover">
                    </div>
                    <p class="text-sm font-semibold mt-1">Boediono</p>
                    <p class="text-xs text-gray-400">Klik detail</p>
                </div>
                <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Sjahril Sabirin', 'Dr. Sjahril Sabirin - Gubernur Bank Indonesia 1998-2003. Memimpin kebijakan moneter kontraktif dengan menaikkan suku bunga SBI hingga 70% untuk menstabilkan rupiah. Memimpin restrukturisasi perbankan nasional dan negosiasi dengan IMF di bidang moneter. Berhasil mengembalikan kepercayaan terhadap rupiah.')">
                    <div class="tokoh-img mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/TBtF8tnB/IMG-20260510-WA0030.jpg" alt="Sjahril Sabirin" class="w-full h-full object-cover">
                    </div>
                    <p class="text-sm font-semibold mt-1">Sjahril S</p>
                    <p class="text-xs text-gray-400">Klik detail</p>
                </div>
                <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Glenn Yusuf', 'Glenn Yusuf - Kepala BPPN (Badan Penyehatan Perbankan Nasional) 1998-2003. Mengelola aset bermasalah senilai Rp600 triliun (setara 50% PDB). Menjual kembali bank-bank yang diambil alih ke investor asing seperti Standard Chartered, Bank of America. Berhasil mengembalikan kepercayaan investor terhadap perbankan Indonesia.')">
                    <div class="tokoh-img mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/5hMsRXR0/IMG-20260510-WA0028.jpg" alt="Glenn Yusuf" class="w-full h-full object-cover">
                    </div>
                    <p class="text-sm font-semibold mt-1">Glenn Yusuf</p>
                    <p class="text-xs text-gray-400">Klik detail</p>
                </div>
                <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Bambang Subianto', 'Bambang Subianto - Menteri Keuangan 1998. Mengelola kebijakan fiskal awal reformasi dan negosiasi awal dengan IMF. Menandatangani Letter of Intent pertama dengan IMF sebagai syarat pencairan dana bailout.')">
                    <div class="tokoh-img mx-auto overflow-hidden">
                        <img src="https://i.ibb.co.com/4wxXkJ0h/IMG-20260510-WA0029.jpg" alt="Bambang Subianto" class="w-full h-full object-cover">
                    </div>
                    <p class="text-sm font-semibold mt-1">Bambang S</p>
                    <p class="text-xs text-gray-400">Klik detail</p>
                </div>
            </div>
        </div>
        
        <div class="flex justify-end pt-2"><button @click="nextBab(1)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">Selanjutnya →</button></div>
    </div>

<!-- ==================== BAB 2 ==================== -->
<div id="bab2" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">2</span></div>
        <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">📈 Deregulasi & Liberalisasi Ekonomi</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div><img src="https://i.ibb.co.com/h1f4HvdY/Screenshot-20260510-093337-Google-1.jpg" class="event-img w-full border border-amber-500/30" title="Paket deregulasi 1998-2000 tahap I, II, III"><p class="text-xs text-gray-400 mt-1">🖼️ Hover / tap gambar</p></div>
        
        <!-- Toggle-toggles -->
        <div class="space-y-3">
            
            <!-- Latar Belakang -->
            <div class="toggle-card" @click="bab2.toggleLB = !bab2.toggleLB">
                <i class="fas fa-info-circle text-amber-400 mr-2"></i>
                <span class="font-semibold">📜 Latar Belakang</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab2.toggleLB ? 'rotate-180' : ''"></i>
                <div x-show="bab2.toggleLB" x-collapse class="toggle-content">
                    Ekonomi Indonesia di era Orde Baru sarat dengan praktik monopoli, kartel, dan hambatan investasi yang menguntungkan segelintir konglomerat dekat kekuasaan. IMF sebagai pemberi pinjaman dana talangan mensyaratkan deregulasi struktural sebagai syarat pencairan dana bantuan. Indonesia juga memiliki biaya logistik tertinggi di Asia Tenggara dan iklim usaha yang tidak kompetitif.
                </div>
            </div>
            
            <!-- Permasalahan -->
            <div class="toggle-card" @click="bab2.togglePM = !bab2.togglePM">
                <i class="fas fa-exclamation-triangle text-amber-400 mr-2"></i>
                <span class="font-semibold">⚠️ Permasalahan</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab2.togglePM ? 'rotate-180' : ''"></i>
                <div x-show="bab2.togglePM" x-collapse class="toggle-content">
                    Biaya ekonomi tinggi karena birokrasi yang panjang dan berbelit, rata-rata 40 hari untuk mengurus izin usaha. Monopoli dan kartel tidak efisien dan merugikan rakyat karena harga barang menjadi lebih mahal hingga 30-40 persen dari harga pasar internasional. Minimnya investasi asing karena iklim usaha tidak kompetitif dan penuh ketidakpastian. Banyak sektor usaha tertutup untuk investasi asing, seperti retail, distribusi, pendidikan, dan kesehatan. Pungutan liar atau pungli merajalela di berbagai level birokrasi.
                </div>
            </div>
            
            <!-- Penyelesaian -->
            <div class="toggle-card" @click="bab2.togglePY = !bab2.togglePY">
                <i class="fas fa-handshake text-amber-400 mr-2"></i>
                <span class="font-semibold">🤝 Penyelesaian</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab2.togglePY ? 'rotate-180' : ''"></i>
                <div x-show="bab2.togglePY" x-collapse class="toggle-content">
                    Pemerintah meluncurkan Paket Deregulasi tahun 1998, 1999, dan 2000. Kebijakan mencakup penghapusan monopoli Bulog (kecuali beras), penurunan tarif bea cukai dari rata-rata 30 persen menjadi 10 persen, penyederhanaan izin usaha dari 40 hari menjadi 10 hari, pembukaan sektor retail dan distribusi untuk investor asing, penghapusan berbagai kartel di sektor pangan dan distribusi, serta penyederhanaan prosedur ekspor-impor melalui sistem satu pintu.
                </div>
            </div>
            
            <!-- Dampak (dengan Negatif & Positif) -->
            <div class="toggle-card" @click="bab2.toggleDampak = !bab2.toggleDampak">
                <i class="fas fa-chart-line text-amber-400 mr-2"></i>
                <span class="font-semibold">📊 Dampak</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab2.toggleDampak ? 'rotate-180' : ''"></i>
                <div x-show="bab2.toggleDampak" x-collapse class="toggle-content">
                    <p class="font-semibold text-red-400 mt-2 mb-2">⚠️ Dampak Negatif</p>
                    <p class="mb-4">Deregulasi yang terlalu cepat menyebabkan banyak pengusaha lokal tidak mampu bersaing dengan modal asing yang lebih besar, sehingga banyak usaha kecil dan menengah gulung tikar. Pembukaan pasar yang terlalu lebar membuat produk impor membanjiri pasar domestik, mengancam industri lokal. PHK terjadi di sektor-sektor yang sebelumnya dilindungi kebijakan proteksionisme. Kesenjangan ekonomi antara pemodal besar dan rakyat kecil semakin melebar.</p>
                    <p class="font-semibold text-green-400 mt-2 mb-2">✅ Dampak Positif</p>
                    <p class="mb-2">Terjadi peningkatan investasi asing langsung (FDI) mulai tahun 2002, dari 5 miliar USD menjadi 15 miliar USD pada 2008. Efisiensi ekonomi nasional meningkat secara signifikan. Harga barang menjadi lebih kompetitif karena hilangnya monopoli dan kartel. Birokrasi investasi menjadi lebih sederhana dengan sistem perizinan satu pintu. Indonesia kembali masuk ke pasar global setelah sempat terisolasi akibat krisis, ditandai dengan peningkatan ekspor non-migas yang signifikan, terutama dari sektor manufaktur dan pertanian.</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- TOKOH BAB 2 -->
    <div><p class="font-semibold text-amber-300 mb-2"><i class="fas fa-users mr-2"></i>Tokoh utama <span class="text-xs text-gray-400">(geser & klik untuk detail)</span></p>
        <div class="scroll-horizontal flex gap-4 pb-2">
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Ginandjar Kartasasmita', 'Prof. Dr. Ginandjar Kartasasmita - Menteri Koordinator Ekonomi 1998. Menginisiasi paket deregulasi pasca-IMF, menghapus berbagai monopoli dan kartel warisan Orde Baru. Membangun fondasi liberalisasi ekonomi Indonesia.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/nNqtzsTF/Screenshot-20260510-162141-Google-1.jpg" alt="Ginandjar" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Ginandjar</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Rizal Ramli', 'Rizal Ramli - Menteri Koordinator Ekonomi 2000-2001. Melanjutkan deregulasi, membongkar berbagai kartel di sektor pangan dan distribusi. Dikenal sebagai anggota The Dream Team ekonomi era Gus Dur.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/7JvrGj25/Rizal-Ramli-Coordinating-Minister-of-Maritime-2015.jpg" alt="Rizal Ramli" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Rizal Ramli</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Dorodjatun Kuntjoro-Jakti', 'Dorodjatun Kuntjoro-Jakti - Menteri Koordinator Ekonomi 2001-2004. Melanjutkan program deregulasi dan stabilisasi ekonomi pasca-IMF. Fokus pada pemulihan kepercayaan investor asing.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/tPw9DtZp/Dorodjatun-Kuntjoro-Jakti-Duta-Besar-RI-untuk-Amerika-Serikat-cropped.jpg" alt="Dorodjatun" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Dorodjatun</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
        </div>
    </div>
    
    <div class="flex justify-end"><button @click="nextBab(2)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">Selanjutnya →</button></div>
</div>

    <!-- ==================== BAB 3 ==================== -->
<div id="bab3" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">3</span></div>
        <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">💰 Reformasi Fiskal & Anggaran Negara</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div><img src="https://i.ibb.co.com/KcdCs0X4/sunset-policy-135q-dom.jpg" class="event-img w-full border border-amber-500/30" title="Sunset Policy 2008 program pengampunan pajak"><p class="text-xs text-gray-400 mt-1">🖼️ Hover Gambar </p></div>
        
        <!-- TOGGLE BAB 3 -->
        <div class="space-y-3">
            
            <!-- Latar Belakang -->
            <div class="toggle-card" @click="bab3.toggleLB = !bab3.toggleLB">
                <i class="fas fa-info-circle text-amber-400 mr-2"></i>
                <span class="font-semibold">📜 Latar Belakang</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab3.toggleLB ? 'rotate-180' : ''"></i>
                <div x-show="bab3.toggleLB" x-collapse class="toggle-content">
                    Defisit APBN membengkak pasca krisis moneter karena pendapatan negara turun drastis, sementara belanja negara terutama untuk subsidi BBM dan listrik membengkak hingga 30 persen dari total belanja negara. Utang luar negeri mencapai 100 persen dari PDB pada tahun 1999-2000. Rasio pajak atau tax ratio hanya sekitar 8 persen dari PDB, salah satu yang terendah di Asia Tenggara.
                </div>
            </div>
            
            <!-- Permasalahan -->
            <div class="toggle-card" @click="bab3.togglePM = !bab3.togglePM">
                <i class="fas fa-exclamation-triangle text-amber-400 mr-2"></i>
                <span class="font-semibold">⚠️ Permasalahan</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab3.togglePM ? 'rotate-180' : ''"></i>
                <div x-show="bab3.togglePM" x-collapse class="toggle-content">
                    Utang negara membengkak drastis dari 60 miliar USD pada 1997 menjadi lebih dari 150 miliar USD pada 2000. Kebocoran anggaran terjadi di berbagai kementerian dan lembaga karena lemahnya sistem pengawasan. Penerimaan pajak sangat rendah, jauh di bawah rata-rata negara ASEAN yang mencapai 15-20 persen. Subsidi BBM tidak tepat sasaran, lebih dari 60 persen subsidi dinikmati oleh 40 persen rumah tangga terkaya. Defisit APBN melebar hingga 6 persen dari PDB pada tahun 2000.
                </div>
            </div>
            
            <!-- Penyelesaian -->
            <div class="toggle-card" @click="bab3.togglePY = !bab3.togglePY">
                <i class="fas fa-handshake text-amber-400 mr-2"></i>
                <span class="font-semibold">🤝 Penyelesaian</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab3.togglePY ? 'rotate-180' : ''"></i>
                <div x-show="bab3.togglePY" x-collapse class="toggle-content">
                    Pemerintah melakukan penghapusan subsidi BBM dan listrik secara bertahap pada tahun 2001, 2005, dan 2008 dengan kompensasi berupa BLT (Bantuan Langsung Tunai) untuk masyarakat miskin. Reformasi perpajakan besar-besaran dilakukan melalui program Sunset Policy (pengampunan pajak) pada tahun 2008. Digitalisasi penerimaan negara melalui e-billing, e-filing, dan e-tax. Subsidi yang dihapus dialihkan menjadi bantuan sosial yang lebih tepat sasaran seperti PKH, BOS, dan Jamkesmas. Pemberlakuan Undang-Undang Keuangan Negara yang mengatur disiplin fiskal, termasuk batasan defisit maksimal 3 persen PDB.
                </div>
            </div>
            
            <!-- Dampak (Negatif + Positif) -->
            <div class="toggle-card" @click="bab3.toggleDP = !bab3.toggleDP">
                <i class="fas fa-chart-line text-amber-400 mr-2"></i>
                <span class="font-semibold">📊 Dampak</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab3.toggleDP ? 'rotate-180' : ''"></i>
                <div x-show="bab3.toggleDP" x-collapse class="toggle-content">
                    <p class="font-semibold text-red-400 mt-2 mb-2">⚠️ Dampak Negatif</p>
                    <p class="mb-4">Penghapusan subsidi BBM menyebabkan harga bahan bakar melonjak drastis, yang berdampak pada kenaikan harga barang kebutuhan pokok dan biaya transportasi. Masyarakat miskin dan kelas menengah bawah merasakan tekanan ekonomi yang berat karena biaya hidup meningkat tajam. Kebijakan ini memicu gelombang demonstrasi dan ketidakpuasan publik pada tahun 2005 dan 2008. Banyak usaha kecil yang bergantung pada subsidi energi terpaksa gulung tikar.</p>
                    <p class="font-semibold text-green-400 mt-2 mb-2">✅ Dampak Positif</p>
                    <p class="mb-2">APBN menjadi lebih sehat dan transparan setelah berbagai reformasi. Tax ratio meningkat signifikan dari 8 persen menjadi 12 persen pada tahun 2009. Defisit anggaran terkendali di bawah 3 persen dari PDB. Subsidi menjadi lebih tepat sasaran melalui program BLT, PKH, beras miskin, dan bantuan sosial lainnya yang menjangkau 40 persen penduduk terbawah. Rasio utang terhadap PDB turun drastis dari puncak 100 persen menjadi sekitar 30 persen pada akhir dekade 2000-an. Peringkat utang Indonesia mulai membaik dari "junk" menjadi "investment grade" oleh lembaga pemeringkat internasional.</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- TOKOH BAB 3 -->
    <div><p class="font-semibold text-amber-300 mb-2"><i class="fas fa-users mr-2"></i>Tokoh utama <span class="text-xs text-gray-400">(geser & klik untuk detail)</span></p>
        <div class="scroll-horizontal flex gap-4 pb-2">
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Sri Mulyani Indrawati', 'Dr. Sri Mulyani Indrawati - Menteri Keuangan 2005-2010. Memimpin reformasi perpajakan historis (Sunset Policy 2008), menaikkan tax ratio dari 8% menjadi 12% dalam 5 tahun. Arsitek kebijakan fiskal pasca-2005. Kemudian menjadi Direktur Pelaksana Bank Dunia (2010-2016) dan kembali menjadi Menteri Keuangan (2016-sekarang).')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/kTGr9NS/Screenshot-20260511-072802-Google-1.jpg" alt="Sri Mulyani" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Sri Mulyani</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Bambang Sudibyo', 'Bambang Sudibyo - Menteri Keuangan 2004-2005. Menginisiasi penghapusan subsidi BBM pertama di era reformasi (2005) dan mengalihkannya ke BLT (Bantuan Langsung Tunai) untuk masyarakat miskin. Kebijakan ini sangat kontroversial namun menjadi fondasi pengalihan subsidi menjadi bantuan sosial.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/nMhFHnw7/KPN-Bambang-Sudibyo.png" alt="Bambang Sudibyo" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Bambang S</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Boediono', 'Boediono - Menteri Keuangan 2001-2004. Memimpin reformasi perpajakan awal dan pengurangan subsidi BBM di era awal reformasi. Menerapkan kebijakan anggaran yang lebih hati-hati (prudent fiscal policy). Kemudian menjadi Gubernur BI (2008-2013) dan Wakil Presiden RI (2009-2014).')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/0pRSMBJ9/IMG-20260510-WA0031.jpg" alt="Boediono" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Boediono</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
        </div>
    </div>
    
    <div class="flex justify-end"><button @click="nextBab(3)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">Selanjutnya →</button></div>
</div>

    <!-- ==================== BAB 4 ==================== -->
<div id="bab4" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">4</span></div>
        <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">🏭 Reformasi BUMN & Privatisasi</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <div><img src="https://i.ibb.co.com/Y7Rv8CG9/Screenshot-20260510-093818-Google-1.jpg" class="event-img w-full border border-amber-500/30" title="Privatisasi BUMN strategis: BNI, Mandiri, Indosat, Telkom"><p class="text-xs text-gray-400 mt-1">🖼️ Hover / tap gambar</p></div>
        
        <!-- TOGGLE BAB 4 -->
        <div class="space-y-3">
            
            <!-- Latar Belakang -->
            <div class="toggle-card" @click="bab4.toggleLB = !bab4.toggleLB">
                <i class="fas fa-info-circle text-amber-400 mr-2"></i>
                <span class="font-semibold">📜 Latar Belakang</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab4.toggleLB ? 'rotate-180' : ''"></i>
                <div x-show="bab4.toggleLB" x-collapse class="toggle-content">
                    Sebagian besar BUMN Indonesia pada era sebelum reformasi merugi secara kronis, tidak efisien, dan menjadi beban berat APBN. Dari sekitar 160 BUMN pada 1998, lebih dari 60 persen di antaranya merugi setiap tahun. Manajemen BUMN birokratis dan sarat praktik KKN, dengan direksi dan komisaris diisi oleh orang-orang dekat kekuasaan, bukan profesional. Banyak BUMN yang insolven atau hutang lebih besar dari aset akibat mismanajemen dan intervensi politik.
                </div>
            </div>
            
            <!-- Permasalahan -->
            <div class="toggle-card" @click="bab4.togglePM = !bab4.togglePM">
                <i class="fas fa-exclamation-triangle text-amber-400 mr-2"></i>
                <span class="font-semibold">⚠️ Permasalahan</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab4.togglePM ? 'rotate-180' : ''"></i>
                <div x-show="bab4.togglePM" x-collapse class="toggle-content">
                    Subsidi terus mengucur tanpa perbaikan kinerja, setiap tahun pemerintah membuang triliunan rupiah untuk menambal kerugian BUMN. Layanan publik buruk: listrik padam bergilir di mana-mana, air ledeng tidak bersih dan tidak merata, transportasi kereta api lambat dan tidak tepat waktu. Banyak BUMN menjadi 'sapi perah' politik untuk kepentingan kelompok tertentu. Manajemen tidak profesional dan terjadi korupsi di tubuh BUMN yang merugikan negara. Tidak ada transparansi dalam pengelolaan keuangan BUMN.
                </div>
            </div>
            
            <!-- Penyelesaian -->
            <div class="toggle-card" @click="bab4.togglePY = !bab4.togglePY">
                <i class="fas fa-handshake text-amber-400 mr-2"></i>
                <span class="font-semibold">🤝 Penyelesaian</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab4.togglePY ? 'rotate-180' : ''"></i>
                <div x-show="bab4.togglePY" x-collapse class="toggle-content">
                    Pemerintah melakukan privatisasi bertahap BUMN strategis seperti Indosat (dijual ke Qatar Telecom), Semen Gresik (dijual ke HeidelbergCement Jerman), Bank BNI dan Bank Mandiri (IPO dan penjualan saham ke publik), serta PT Telkom (IPO dan pencatatan di NYSE). Program restrukturisasi BUMN non-privatisasi dengan profesionalisme manajemen, mengangkat direksi dari kalangan profesional independen. Penerapan GCG (Good Corporate Governance) yang ketat. Pengurangan campur tangan politik melalui UU BUMN. Peningkatan transparansi laporan keuangan yang diaudit oleh kantor akuntan publik internasional.
                </div>
            </div>
            
            <!-- Dampak (Negatif + Positif) -->
            <div class="toggle-card" @click="bab4.toggleDP = !bab4.toggleDP">
                <i class="fas fa-chart-line text-amber-400 mr-2"></i>
                <span class="font-semibold">📊 Dampak</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab4.toggleDP ? 'rotate-180' : ''"></i>
                <div x-show="bab4.toggleDP" x-collapse class="toggle-content">
                    <p class="font-semibold text-red-400 mt-2 mb-2">⚠️ Dampak Negatif</p>
                    <p class="mb-4">Privatisasi BUMN menuai kontroversi karena dianggap menjual aset negara kepada asing dengan harga murah. Banyak karyawan BUMN yang terkena PHK akibat efisiensi pasca privatisasi. Muncul kekhawatiran bahwa sektor-sektor strategis seperti telekomunikasi dan semen akan dikuasai asing. Masyarakat khawatir layanan publik akan menjadi lebih mahal setelah privatisasi karena orientasi BUMN berubah dari pelayanan menjadi profit.</p>
                    <p class="font-semibold text-green-400 mt-2 mb-2">✅ Dampak Positif</p>
                    <p class="mb-2">BUMN menjadi lebih efisien dan profesional, sebagian besar BUMN mencetak laba setelah restrukturisasi, dari 60 persen BUMN merugi menjadi hanya 10 persen yang masih merugi. Layanan publik meningkat signifikan: listrik lebih stabil dengan rasio elektrifikasi meningkat dari 55 persen menjadi 80 persen, air bersih lebih merata, transportasi kereta api lebih baik. Beban APBN berkurang drastis karena subsidi BUMN turun hingga 70 persen. Beberapa BUMN menjadi perusahaan kelas dunia, seperti Telkom yang terdaftar di NYSE, Bank Mandiri menjadi bank dengan aset terbesar di Indonesia, dan BRI menjadi bank mikro terbesar di dunia.</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- TOKOH BAB 4 -->
    <div><p class="font-semibold text-amber-300 mb-2"><i class="fas fa-users mr-2"></i>Tokoh utama <span class="text-xs text-gray-400">(geser & klik untuk detail)</span></p>
        <div class="scroll-horizontal flex gap-4 pb-2">
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Laksamana Sukardi', 'Laksamana Sukardi - Menteri BUMN 2000-2004. Memimpin privatisasi Bank BNI, Bank Mandiri, dan Indosat. Mengurangi beban APBN dari subsidi BUMN hingga 70% dalam 4 tahun. Mengubah paradigma pengelolaan BUMN dari birokratis menjadi profesional.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/38NMvtt/KPN-Laksamana-Sukardi.png" alt="Laksamana Sukardi" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Laksamana</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Sofyan Djalil', 'Sofyan Djalil - Menteri BUMN 2004-2007. Melanjutkan privatisasi dan menerapkan profesionalisme di BUMN non-privatisasi. Memperkenalkan konsep BUMN berkelas dunia (world class SOEs). Mendorong transparansi dan good governance.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/3myVh8K0/KIM-Sofyan-Djalil.jpg" alt="Sofyan Djalil" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Sofyan Djalil</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Sugiharto', 'Sugiharto - Menteri BUMN 2007-2009. Meneruskan privatisasi dan restrukturisasi BUMN, memperkuat pengawasan dan tata kelola BUMN melalui penerapan key performance indicators (KPI) yang ketat.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/9khMFHcb/KIB-Sugiharto.jpg" alt="Sugiharto" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Sugiharto</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
        </div>
    </div>
    
    <div class="flex justify-end"><button @click="nextBab(4)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">Selanjutnya →</button></div>
</div>

    <!-- ==================== BAB 5 ==================== -->
<div id="bab5" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">5</span></div>
        <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">⚖️ Pemberantasan Korupsi & Praktik Tidak Sehat</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <!-- GAMBAR KPK 2002 -->
        <div><img src="https://i.ibb.co.com/MkXfrDRx/massa-aksi-anarkistis-terjadi-di-depan-gedung-kpk-jakarta-selatan-jumat-139-foto-fathan-sinagajpnnco.jpg" class="event-img w-full border border-amber-500/30" title="Aksi massa di depan gedung KPK"><p class="text-xs text-gray-400 mt-1">🖼️ Hover / tap gambar</p></div>
        
        <!-- TOGGLE BAB 5 -->
        <div class="space-y-3">
            
            <!-- Latar Belakang -->
            <div class="toggle-card" @click="bab5.toggleLB = !bab5.toggleLB">
                <i class="fas fa-info-circle text-amber-400 mr-2"></i>
                <span class="font-semibold">📜 Latar Belakang</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab5.toggleLB ? 'rotate-180' : ''"></i>
                <div x-show="bab5.toggleLB" x-collapse class="toggle-content">
                    Korupsi, kolusi, dan nepotisme atau KKN sistemik di era Orde Baru menjadi salah satu akar utama krisis ekonomi Indonesia. Praktik suap, mark-up anggaran proyek-proyek pemerintah, dan monopoli usaha sudah mengakar dalam sistem birokrasi, legislatif, dan yudikatif. Indeks Persepsi Korupsi Indonesia saat itu termasuk terburuk di dunia, berada di peringkat 5 terbawah dari sekitar 180 negara.
                </div>
            </div>
            
            <!-- Permasalahan -->
            <div class="toggle-card" @click="bab5.togglePM = !bab5.togglePM">
                <i class="fas fa-exclamation-triangle text-amber-400 mr-2"></i>
                <span class="font-semibold">⚠️ Permasalahan</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab5.togglePM ? 'rotate-180' : ''"></i>
                <div x-show="bab5.togglePM" x-collapse class="toggle-content">
                    Kasus BLBI merugikan negara hingga Rp600 triliun dan hingga saat ini belum terselesaikan sepenuhnya. Rendahnya kepercayaan investor asing karena praktik tidak sehat dan ketidakpastian hukum. Birokrasi yang korup menjadi hambatan investasi, dengan biaya pungli mencapai 20-30 persen dari total biaya proyek. Ketidakadilan hukum terjadi dimana orang kecil dihukum berat sementara koruptor besar bebas. Praktik suap merajalela di lembaga peradilan, legislatif, dan eksekutif.
                </div>
            </div>
            
            <!-- Penyelesaian -->
            <div class="toggle-card" @click="bab5.togglePY = !bab5.togglePY">
                <i class="fas fa-handshake text-amber-400 mr-2"></i>
                <span class="font-semibold">🤝 Penyelesaian</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab5.togglePY ? 'rotate-180' : ''"></i>
                <div x-show="bab5.togglePY" x-collapse class="toggle-content">
                    Pembentukan Komisi Pemberantasan Korupsi (KPK) pada tahun 2002 melalui Undang-Undang Nomor 30 Tahun 2002. KPK memiliki kewenangan luar biasa: penyadapan, penangkapan, penahanan, dan penyidikan tanpa izin atasan. Pengadilan tindak pidana korupsi (Tipikor) dibentuk khusus dengan hakim-hakim ad hoc. Program clean government dan pemberlakuan e-budgeting, e-procurement, dan e-audit untuk transparansi anggaran. Pelaporan harta kekayaan pejabat negara (LHKPN) setiap tahun. Kerja sama dengan lembaga internasional untuk melacak aset koruptor di luar negeri.
                </div>
            </div>
            
            <!-- Dampak (Negatif + Positif) -->
            <div class="toggle-card" @click="bab5.toggleDP = !bab5.toggleDP">
                <i class="fas fa-chart-line text-amber-400 mr-2"></i>
                <span class="font-semibold">📊 Dampak</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab5.toggleDP ? 'rotate-180' : ''"></i>
                <div x-show="bab5.toggleDP" x-collapse class="toggle-content">
                    <p class="font-semibold text-red-400 mt-2 mb-2">⚠️ Dampak Negatif</p>
                    <p class="mb-4">Pemberantasan korupsi seringkali berjalan lambat karena banyaknya kepentingan politik yang melindungi para koruptor. KPK sendiri sering mendapat serangan balik dari pihak-pihak yang tidak senang dengan upaya pemberantasan korupsi, termasuk upaya pelemahan kewenangan KPK melalui revisi undang-undang. Beberapa kasus besar seperti BLBI belum tuntas hingga saat ini. Korupsi masih tetap terjadi meskipun dengan modus yang lebih canggih. Indeks persepsi korupsi Indonesia masih tergolong rendah dibandingkan negara tetangga.</p>
                    <p class="font-semibold text-green-400 mt-2 mb-2">✅ Dampak Positif</p>
                    <p class="mb-2">Berdirinya KPK dan pengadilan Tipikor menjadi lembaga antikorupsi paling disegani di Asia Tenggara, bahkan menjadi rujukan bagi negara-negara lain. Indeks persepsi korupsi Indonesia meningkat secara bertahap dari skor 1.8 pada 2004 menjadi 3.8 pada 2023. Kepercayaan investor asing dan lembaga internasional terhadap pemerintahan Indonesia meningkat, ditandai dengan peningkatan peringkat utang dan investasi asing. Kesadaran publik antikorupsi mulai terbentuk melalui pendidikan antikorupsi di sekolah dan kampus. Puluhan koruptor kelas kakap, termasuk menteri, gubernur, bupati, dan anggota DPR, berhasil dipenjara. Sistem pengadaan barang dan jasa menjadi lebih transparan melalui e-procurement.</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- TOKOH BAB 5 -->
    <div><p class="font-semibold text-amber-300 mb-2"><i class="fas fa-users mr-2"></i>Tokoh utama <span class="text-xs text-gray-400">(geser & klik untuk detail)</span></p>
        <div class="scroll-horizontal flex gap-4 pb-2">
            
            <!-- Taufiequrachman Ruki -->
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Taufiequrachman Ruki', 'Taufiequrachman Ruki - Pimpinan KPK pertama 2003-2007. Membangun fondasi lembaga antirasuah dari nol, memproses kasus-kasus korupsi pertama pasca-reformasi seperti kasus Wisma Atlet SEA Games dan kasus dugaan suap DPR.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/FLKFNrdG/Taufiequrachman-Ruki-Official-Portrait.jpg" alt="Taufiequrachman Ruki" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Taufieq Ruki</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <!-- Antasari Azhar -->
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Antasari Azhar', 'Antasari Azhar - Pimpinan KPK 2007-2009. Memproses kasus korupsi tingkat tinggi, termasuk kasus Bank Century (Rp8,4 triliun), kasus dugaan suap Mahkamah Konstitusi, dan berbagai kasus gubernur/bupati.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/xK4sX36j/Screenshot-20260511-131522-Google-1.jpg" alt="Antasari Azhar" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Antasari</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <!-- Busyro Muqoddas (placeholder karena link error) -->
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Busyro Muqoddas', 'Busyro Muqoddas - Pimpinan KPK 2011-2015. Melanjutkan pemberantasan korupsi dengan pendekatan hukum yang tegas, memproses kasus-kasus besar seperti korupsi SKK Migas, korupsi Hambalang, dan korupsi e-KTP.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://placehold.co/90x90/1e293b/d4af37?text=Busyro+Muqoddas" alt="Busyro Muqoddas" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Busyro</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
        </div>
    </div>
    
    <div class="flex justify-end"><button @click="nextBab(5)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">Selanjutnya →</button></div>
</div>

    <!-- ==================== BAB 6 ==================== -->
<div id="bab6" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">6</span></div>
        <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">🤝 Perlindungan Sosial & Dampak Krisis</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-6">
        <!-- GAMBAR BLT RASKIN PKH -->
        <div><img src="https://i.ibb.co.com/9m6wxYbj/blt-rp900-ribu-cair-untuk-kpm-di-desil-1-hingga-4-simak-cara-cek-status-penerima-melalui-situs-resmi.jpg" class="event-img w-full border border-amber-500/30" title="Program BLT, Raskin, PKH"><p class="text-xs text-gray-400 mt-1">🖼️ Hover / tap gambar</p></div>
        
        <!-- TOGGLE BAB 6 -->
        <div class="space-y-3">
            
            <!-- Latar Belakang -->
            <div class="toggle-card" @click="bab6.toggleLB = !bab6.toggleLB">
                <i class="fas fa-info-circle text-amber-400 mr-2"></i>
                <span class="font-semibold">📜 Latar Belakang</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab6.toggleLB ? 'rotate-180' : ''"></i>
                <div x-show="bab6.toggleLB" x-collapse class="toggle-content">
                    Krisis ekonomi 1998 menghancurkan daya beli masyarakat, terutama kelas bawah dan menengah. PHK massal mencapai 20-25 juta orang pada periode 1998-1999. Harga kebutuhan pokok melonjak 300-500 persen dalam hitungan bulan karena inflasi yang tidak terkendali mencapai 77 persen. Kemiskinan ekstrem meningkat drastis dari 11 persen menjadi 24 persen hanya dalam dua tahun. Akses kesehatan dan pendidikan terhambat karena biaya yang semakin mahal.
                </div>
            </div>
            
            <!-- Permasalahan -->
            <div class="toggle-card" @click="bab6.togglePM = !bab6.togglePM">
                <i class="fas fa-exclamation-triangle text-amber-400 mr-2"></i>
                <span class="font-semibold">⚠️ Permasalahan</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab6.togglePM ? 'rotate-180' : ''"></i>
                <div x-show="bab6.togglePM" x-collapse class="toggle-content">
                    Angka kemiskinan melonjak dari 11 persen menjadi 24 persen, secara absolut jumlah penduduk miskin bertambah lebih dari 20 juta jiwa. Lebih dari 20 juta orang kehilangan pekerjaan dan kesulitan mencari kerja baru. Gizi buruk pada anak-anak meningkat menjadi 30 persen di beberapa daerah. Angka putus sekolah melonjak karena orang tua tidak mampu membayar biaya pendidikan. Akses kesehatan masyarakat miskin sangat terbatas karena tidak mampu membayar biaya berobat. Banyak keluarga tidak mampu membeli beras sehingga terpaksa mengonsumsi makanan pengganti.
                </div>
            </div>
            
            <!-- Penyelesaian -->
            <div class="toggle-card" @click="bab6.togglePY = !bab6.togglePY">
                <i class="fas fa-handshake text-amber-400 mr-2"></i>
                <span class="font-semibold">🤝 Penyelesaian</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab6.togglePY ? 'rotate-180' : ''"></i>
                <div x-show="bab6.togglePY" x-collapse class="toggle-content">
                    Program Jaring Pengaman Sosial atau JPS tahun 1998-2000 mencakup Raskin (beras untuk masyarakat miskin), operasi pasar untuk stabilisasi harga, program padat karya untuk menyerap tenaga kerja, dan program pemberdayaan masyarakat. Bantuan Langsung Tunai (BLT) tahun 2005-2008 diberikan sebagai kompensasi kenaikan BBM. Program Keluarga Harapan (PKH) untuk ibu hamil, balita, dan anak sekolah dengan bantuan tunai bersyarat. Jamkesmas untuk layanan kesehatan gratis bagi masyarakat miskin. BOS (Bantuan Operasional Sekolah) untuk meringankan biaya pendidikan. Kredit Usaha Rakyat (KUR) untuk menggerakkan UMKM.
                </div>
            </div>
            
            <!-- Dampak (Negatif + Positif) -->
            <div class="toggle-card" @click="bab6.toggleDP = !bab6.toggleDP">
                <i class="fas fa-chart-line text-amber-400 mr-2"></i>
                <span class="font-semibold">📊 Dampak</span>
                <i class="fas fa-chevron-down text-xs ml-2" :class="bab6.toggleDP ? 'rotate-180' : ''"></i>
                <div x-show="bab6.toggleDP" x-collapse class="toggle-content">
                    <p class="font-semibold text-red-400 mt-2 mb-2">⚠️ Dampak Negatif</p>
                    <p class="mb-4">Program bantuan sosial seperti BLT seringkali tidak tepat sasaran karena data penerima yang kurang akurat, sehingga bantuan tidak sampai ke masyarakat yang benar-benar membutuhkan. Praktik korupsi dalam penyaluran bantuan sosial masih terjadi di berbagai daerah, mengurangi efektivitas program. Program padat karya tidak mampu menyerap seluruh pengangguran karena anggaran yang terbatas. Ketergantungan masyarakat terhadap bantuan sosial meningkat, mengurangi motivasi untuk mencari kerja mandiri.</p>
                    <p class="font-semibold text-green-400 mt-2 mb-2">✅ Dampak Positif</p>
                    <p class="mb-2">Angka kemiskinan turun secara bertahap dari puncak 24 persen pada 1999 menjadi 14 persen pada tahun 2009, dan terus menurun hingga 9 persen pada 2019. Kematian ibu dan anak menurun drastis karena akses kesehatan yang lebih baik melalui Jamkesmas, sehingga target MDG untuk kesehatan anak dan ibu dapat tercapai pada 2015. Partisipasi sekolah meningkat hingga mencapai 95 persen berkat program BOS yang menghilangkan biaya pendidikan. Angka gizi buruk pada anak turun dari 30 persen menjadi 17 persen. UMKM mendapatkan akses kredit yang lebih mudah melalui KUR, mendorong pertumbuhan ekonomi berbasis rakyat. Program perlindungan sosial menjadi program berkelanjutan hingga saat ini dan terus diperluas cakupannya.</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- TOKOH BAB 6 -->
    <div><p class="font-semibold text-amber-300 mb-2"><i class="fas fa-users mr-2"></i>Tokoh utama <span class="text-xs text-gray-400">(geser & klik untuk detail)</span></p>
        <div class="scroll-horizontal flex gap-4 pb-2">
            
            <!-- Khofifah Indar Parawansa -->
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Khofifah Indar Parawansa', 'Khofifah Indar Parawansa - Menteri Sosial 1999-2004. Menginisiasi program Jaring Pengaman Sosial (JPS) dan pemberdayaan masyarakat miskin pasca krisis. Pelopor program Raskin (beras untuk miskin) dan PKH (Program Keluarga Harapan).')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/n8jxrqZL/Khofifah-Indar-Parawansa-Official-Potrait-2025.png" alt="Khofifah Indar Parawansa" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Khofifah</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <!-- Jusuf Kalla -->
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Jusuf Kalla', 'Jusuf Kalla - Wakil Presiden 2004-2009. Menginisiasi BLT (Bantuan Langsung Tunai) dan program perlindungan sosial skala besar sebagai kompensasi kenaikan BBM 2005 dan 2008. Memperluas program Raskin, PKH, BOS, Jamkesmas.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/jvC7hzzX/Jusuf-Kalla-official-vice-presidential-portrait-2014.jpg" alt="Jusuf Kalla" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">Jusuf Kalla</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
            <!-- SBY -->
            <div class="tokoh-card p-2 w-32 text-center" @click="openModal('Susilo Bambang Yudhoyono', 'SBY - Presiden 2004-2014. Meneruskan dan memperluas program perlindungan sosial (BLT, PKH, Jamkesmas, BOS, Raskin) menjadi program nasional berkelanjutan. Berhasil menurunkan angka kemiskinan secara signifikan.')">
                <div class="tokoh-img mx-auto overflow-hidden">
                    <img src="https://i.ibb.co.com/LhPTXNFG/Susilo-Bambang-Yudhoyono-official-presidential-portrait-2009.jpg" alt="Susilo Bambang Yudhoyono" class="w-full h-full object-cover">
                </div>
                <p class="text-sm font-semibold mt-1">SBY</p>
                <p class="text-xs text-gray-400">Klik detail</p>
            </div>
            
        </div>
    </div>
    
    <div class="flex justify-end"><button @click="nextBab(6)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">Selanjutnya →</button></div>
</div>

    <!-- ==================== BAB 7: DIAGRAM INFLASI ==================== -->
    <div id="bab7" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
        <div class="flex items-center gap-3"><div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold">7</span></div><h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">📉 Diagram Inflasi Indonesia (1997 - 2024)</h2></div>
        <div class="bg-overlay p-4 rounded-xl"><canvas id="inflasiChartFinal" width="800" height="400" class="w-full h-auto"></canvas><p class="text-xs text-gray-400 italic text-center mt-4">*Data inflasi tahunan berdasarkan BPS dan Bank Indonesia</p></div>
        <div class="p-4 bg-amber-900/20 rounded-xl space-y-2">
            <p class="text-sm"><span class="font-bold text-amber-300">📌 Keterangan:</span> Inflasi tertinggi 1998 (77%) akibat krisis moneter. Setelah reformasi, inflasi berangsur turun ke 3-6% di era 2010-an.</p>
            <p class="text-sm"><span class="font-bold text-amber-300">✅ Kesimpulan:</span> Era reformasi berhasil membawa inflasi ke level lebih terkendali, meskipun masih rentan terhadap gejolak eksternal.</p>
            <p class="text-sm"><span class="font-bold text-amber-300">📊 Analisis:</span> Penurunan inflasi pasca-1998 tidak lepas dari kebijakan moneter ketat BI, penurunan subsidi BBM bertahap, serta peningkatan kapasitas produksi dalam negeri.</p>
        </div>
    </div>

 <div class="flex justify-end pt-4">
    <button @click="nextBab(7)" class="btn-next px-6 py-2 rounded-full text-white font-semibold">
        Selanjutnya →
    </button>
</div>

    <!-- ==================== BAB 8: KOLOM KOMENTAR ==================== -->
    <div id="bab8" class="bab-item glass-card p-6 md:p-8 space-y-6" style="opacity:0;transform:translateY(40px)">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center">
                <span class="text-amber-400 font-bold">💬</span>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold border-l-4 border-amber-500 pl-4">
                Kolom Pendapat & Komentar
            </h2>
        </div>

        <form @submit.prevent="submitComment" class="space-y-4 bg-overlay p-5 rounded-xl">
            <div>
                <label class="block text-sm font-semibold mb-1">Nama Kamu</label>
                <input type="text" x-model="commentName" required
                    class="w-full px-4 py-2 rounded-lg bg-black/30 border border-amber-500/30 focus:border-amber-500 outline-none"
                    placeholder="Masukkan namamu...">
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Pesan *</label>
                <textarea x-model="commentMessage" rows="3" required
                    class="w-full px-4 py-2 rounded-lg bg-black/30 border border-amber-500/30 focus:border-amber-500 outline-none"
                    placeholder="Tulis pendapat atau komentarmu di sini..."></textarea>
            </div>
            <div>
                <label class="block text-sm font-semibold mb-1">Foto Profil (opsional)</label>
                <input type="file" @change="handlePhotoChange" accept="image/*" class="text-sm">
                <template x-if="photoPreview">
                    <div class="mt-2"><img :src="photoPreview" class="w-16 h-16 rounded-full object-cover border-2 border-amber-500"></div>
                </template>
                <p class="text-xs text-gray-400 mt-1">Maksimal ukuran file: 5MB (JPG/PNG)</p>
            </div>
            <button type="submit" :disabled="submitting" class="btn-next px-6 py-2 rounded-full text-white font-semibold disabled:opacity-50" x-text="submitting ? 'Mengirim...' : 'Kirim Komentar →'"></button>
        </form>

        <div class="space-y-4 max-h-96 overflow-y-auto pr-2">
            <template x-if="loadingComments"><p class="text-center text-gray-400">Memuat komentar...</p></template>
            <template x-if="!loadingComments && comments.length === 0"><div class="text-center py-8 text-gray-400"><p>✨ Belum ada komentar. Jadi yang pertama beri pendapat!</p></div></template>
            <template x-for="comment in comments" :key="comment.id">
                <div class="bg-overlay p-4 rounded-xl flex gap-4">
                    <div class="flex-shrink-0">
                        <template x-if="comment.photo_url"><img :src="comment.photo_url" class="w-12 h-12 rounded-full object-cover border border-amber-500"></template>
                        <template x-if="!comment.photo_url"><div class="w-12 h-12 rounded-full bg-amber-500/20 flex items-center justify-center"><span class="text-amber-400 font-bold text-lg" x-text="comment.name.charAt(0).toUpperCase()"></span></div></template>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 flex-wrap"><p class="font-semibold text-amber-300" x-text="comment.name"></p><p class="text-xs text-gray-400" x-text="new Date(comment.created_at).toLocaleDateString('id-ID')"></p></div>
                        <p class="text-sm mt-1" x-text="comment.message"></p>
                    </div>
                </div>
            </template>
        </div>

        <div class="bg-amber-500/10 border border-amber-500/30 rounded-xl p-4">
            <div class="flex gap-3"><div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center"><span class="text-white font-bold">⭐</span></div><div><p class="font-semibold text-amber-400">Admin Website (K)</p><p class="text-xs text-gray-400">Selaku Pembuat Website</p><p class="text-sm mt-1">Halooo terima kasih sudah berkunjung di website kami 🌟 Jangan sungkan untuk memberikan saran dan kritikan karena saran kalian juga dibutuhkan untuk pengembangan website inii🌷</p></div></div>
        </div>
    </div>

    <!-- MODAL POP-UP UNTUK TOKOH -->
    <div x-show="modalOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 modal-overlay" x-transition.opacity.duration.200>
        <div class="glass-card max-w-lg w-full p-6 relative shadow-2xl">
            <button @click="modalOpen=false" class="absolute top-3 right-4 text-2xl text-gray-300 hover:text-white transition">&times;</button>
            <h3 class="text-xl font-bold text-amber-400 mb-3" x-text="modalTitle"></h3>
            <p class="text-gray-300 text-sm leading-relaxed" x-html="modalDesc"></p>
            <button @click="modalOpen=false" class="mt-5 btn-next px-4 py-2 rounded-full text-white w-full">Tutup</button>
        </div>
    </div>

    <!-- ==================== FOOTER ==================== -->
    <footer class="text-center text-sm py-8 border-t border-amber-800/30 space-y-3">
        <div class="dekorasi"></div>
        <p><i class="fas fa-school mr-1"></i> SMK Negeri 7 Semarang</p>
        <p>⚓ Developer: <span class="text-amber-400 font-semibold">ZyeDev</span> | <a href="mailto:mizumizukaii@gmail.com" class="hover:text-amber-400 transition">mizumizukaii@gmail.com</a> | <a href="https://github.com/ZyeeCeleste" target="_blank" class="hover:text-amber-400 transition"><i class="fab fa-github"></i> GitHub</a></p>
        <p class="text-xs">© 2025 - Tugas Ekonomi Indonesia pada Masa Reformasi | Data ilustrasi untuk pembelajaran berdasarkan BPS, BI, LPEM UI, IMF, World Bank</p>
        <p class="text-xs">Referensi: Jurnal Ekonomi Reformasi (UI), Kajian BPPN 2003, Laporan Tahunan IMF 1998-2004, Data BPS 1997-2024</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script>
    // SUPABASE CONFIG (GANTI DENGAN MILIKMU)
    const SUPABASE_URL = 'https://tsuqvefhfnxzollpzelk.supabase.co';
    const SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InRzdXF2ZWZoZm54em9sbHB6ZWxrIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NzkwMTQ5NDUsImV4cCI6MjA5NDU5MDk0NX0._iAHSgVYak1hKEJ6eO6T0aycB4HiIHLF3tAXMJS52Hg';
    const supabaseClient = supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

    function toggleTheme() {
        const body = document.body;
        const themeText = document.getElementById('theme-text');
        if(body.classList.contains('dark-mode')) {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            themeText.textContent = 'Light';
        } else {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            themeText.textContent = 'Dark';
        }
    }
    
    function app() {
        return {
            bab1: { toggleLB: false, togglePM: false, togglePY: false, toggleDP: false },
            bab2: { toggleLB: false, togglePM: false, togglePY: false, toggleDampak: false },
            bab3: { toggleLB: false, togglePM: false, togglePY: false, toggleDP: false },
            bab4: { toggleLB: false, togglePM: false, togglePY: false, toggleDP: false },
            bab5: { toggleLB: false, togglePM: false, togglePY: false, toggleDP: false },
            bab6: { toggleLB: false, togglePM: false, togglePY: false, toggleDP: false },
            modalOpen: false,
            modalTitle: '',
            modalDesc: '',
            comments: [],
            commentName: '',
            commentMessage: '',
            photoFile: null,
            photoPreview: '',
            submitting: false,
            loadingComments: true,
            
            openModal(title, desc) {
                this.modalTitle = title;
                this.modalDesc = desc;
                this.modalOpen = true;
            },
            
           nextBab(current) {
    let nextId = `bab${current+1}`;
    let nextEl = document.getElementById(nextId);
    if(nextEl) {
        nextEl.style.opacity = '1';
        nextEl.style.transform = 'translateY(0px)';
        setTimeout(() => nextEl.scrollIntoView({ behavior: 'smooth', block: 'start' }), 100);
    }
},
            
            async loadComments() {
                this.loadingComments = true;
                const { data, error } = await supabaseClient
                    .from('comments')
                    .select('*')
                    .order('created_at', { ascending: false });
                if (!error && data) this.comments = data;
                this.loadingComments = false;
            },
            
            async uploadPhoto(file) {
                const fileName = `${Date.now()}-${file.name}`;
                const { data, error } = await supabaseClient.storage
                    .from('comment-photos')
                    .upload(fileName, file);
                if (error) return null;
                const { data: urlData } = supabaseClient.storage.from('comment-photos').getPublicUrl(fileName);
                return urlData.publicUrl;
            },
            
            handlePhotoChange(e) {
                const file = e.target.files[0];
                if (file) {
                    if (file.size > 5 * 1024 * 1024) {
                        alert('Ukuran file maksimal 5MB!');
                        return;
                    }
                    this.photoFile = file;
                    this.photoPreview = URL.createObjectURL(file);
                }
            },
            
            async submitComment() {
                if (!this.commentName.trim() || !this.commentMessage.trim()) {
                    alert('Nama dan pesan harus diisi!');
                    return;
                }
                this.submitting = true;
                let photoUrl = null;
                if (this.photoFile) {
                    photoUrl = await this.uploadPhoto(this.photoFile);
                }
                const { error } = await supabaseClient
                    .from('comments')
                    .insert([{ name: this.commentName, message: this.commentMessage, photo_url: photoUrl }]);
                if (!error) {
                    this.commentName = '';
                    this.commentMessage = '';
                    this.photoFile = null;
                    this.photoPreview = '';
                    this.loadComments();
                } else {
                    alert('Gagal mengirim komentar: ' + error.message);
                }
                this.submitting = false;
            },
            
            init() {
                const cover = document.getElementById('coverSection');
                if(cover) { cover.style.opacity = '1'; cover.style.transform = 'translateY(0)'; }
                const ctx = document.getElementById('inflasiChartFinal').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022','2023','2024'],
                        datasets: [{
                            label: 'Inflasi (%) Tahunan',
                            data: [11,77,20,9,12,10,6.5,6.5,17,6.6,6.2,11.1,2.8,5.1,3.8,4.3,6.4,8.4,3.4,3.0,3.6,3.1,2.7,1.9,1.6,5.5,2.6,2.5],
                            borderColor: '#d4af37',
                            backgroundColor: 'rgba(212,175,55,0.1)',
                            borderWidth: 3,
                            pointBackgroundColor: '#fbbf24',
                            pointBorderColor: '#0f172a',
                            pointRadius: 5,
                            pointHoverRadius: 7,
                            tension: 0.3,
                            fill: true
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: { legend: { labels: { color: '#e2e8f0', font: { size: 12 } } }, tooltip: { callbacks: { label: (ctx) => `${ctx.raw}%` } } },
                        scales: { y: { grid: { color: '#334155' }, ticks: { color: '#cbd5e1', callback: (v) => v + '%' } }, x: { grid: { color: '#334155' }, ticks: { color: '#cbd5e1', rotation: 45, maxRotation: 45, autoSkip: true, maxTicksLimit: 12 } } }
                    }
                });
                this.loadComments();
            }
        }
    }
</script>
</body>
</html>
