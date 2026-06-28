<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Guru Diterima - Kerja Sama</title>
    <style>
            body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, #fff1f2 0%, #fef2f2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #581c1c;
        }
        .email-wrapper {
            width: 100%;
            padding: 30px 16px;
        }
        .email-content {
            max-width: 640px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 22px 45px rgba(120, 24, 24, 0.14);
            border: 1px solid #fca5a5;
        }
        .email-header {
            padding: 28px 26px;
            background: linear-gradient(90deg, #7f1d1d 0%, #b91c1c 100%);
            color: #ffffff;
            text-align: left;
            padding-left: 34px;
        }
        .email-header h1 {
            margin: 6px 0 2px;
            font-size: 22px;
            letter-spacing: 0.2px;
            font-weight: 800;
        }
        .email-header p {
            margin: 0;
            font-size: 13px;
            opacity: 0.9;
        }
        .email-body {
            padding: 28px 30px 32px;
        }
        .email-body p {
            margin: 16px 0;
            line-height: 1.7;
            font-size: 15px;
        }
        .badge {
            display: inline-flex;
            padding: 8px 14px;
            background: #fee2e2;
            color: #991b1b;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
        }
        .details {
            background: #fff1f2;
            border: 1px solid #fecaca;
            border-radius: 14px;
            padding: 22px;
            margin: 22px 0;
        }
        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px 24px;
        }
        .details-item b {
            display: block;
            margin-bottom: 6px;
            color: #7f1d1d;
            font-weight: 700;
            font-size: 14px;
        }
        .details-item span {
            color: #831843;
            font-size: 14px;
            word-break: break-word;
        }
        .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 14px 22px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            text-align: center;
            min-width: 160px;
        }
        .button.primary {
            background: #b91c1c;
            color: #ffffff;
        }
        .button.secondary {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        .button:hover {
            opacity: 0.95;
        }
        .note {
            background: #fee2e2;
            border-left: 4px solid #b91c1c;
            padding: 16px 18px;
            border-radius: 12px;
            margin-top: 18px;
            color: #7f1d1d;
            font-size: 14px;
        }
        .email-footer {
            padding: 22px 30px;
            text-align: center;
            font-size: 13px;
            color: #7f1d1d;
            background: #fff1f2;
        }
        .footer-links {
            margin-top: 10px;
        }
        .footer-links a {
            color: #b91c1c;
            text-decoration: none;
            margin: 0 8px;
        }
        @media screen and (max-width: 620px) {
            .email-content { border-radius: 0; }
            .email-body { padding: 20px; }
            .details-grid { grid-template-columns: 1fr; }
            .button-group { flex-direction: column; }
            .button { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <div class="email-header">
                <h1>Booking Ditolak oleh Guru</h1>
                <p>Notifikasi bahwa bookingan Anda ditolak oleh guru</p>
            </div>
            <div class="email-body">
                <p>Halo {{ $order->user->name }},</p>
                <p>Maaf, bookingan Anda untuk <strong>{{ $order->guru->user->name }}</strong> belum dapat diterima. Silakan coba memesan guru lain yang tersedia.</p>
                <span class="badge">Status: Booking Ditolak</span>
                <div class="details">
                    <div class="details-grid">
                        <div class="details-item">
                            <b>Nama Siswa</b>
                            <span>{{ $order->user->name }}</span>
                        </div>
                        <div class="details-item">
                            <b>Email</b>
                            <span>{{ $order->user->email }}</span>
                        </div>
                        <div class="details-item">
                            <b>Nama Guru</b>
                            <span>{{ $order->guru->user->name }}</span>
                        </div>
                        <div class="details-item">
                            <b>Mapel</b>
                            <span>{{ $order->guru->MataPelajarans->pluck("nama_mapel")->join(" , ") }}</span>
                        </div>
                        <div class="details-item">
                            <b>Jadwal</b>
                            <span>{{ $order->jadwal_belajar }}</span>
                        </div>
                        <div class="details-item">
                            <b>Metode belajar yang di pilih</b>
                            <span>{{ $order->metode_belajar }}</span>
                        </div>
                        <div class="details-item">
                            <b>Total Bayar</b>
                            <span>Rp{{number_format($order->tarif,0,",",)}}</span>
                        </div>
                   
                    </div>
                </div>
                <div class="button-group">
                    <a href="{{ config('app.url').'guru' }}" class="button primary">Cari Guru Lain</a>
                    <a href="{{ config('app.url').'login' }}" class="button secondary">Masuk ke Akun</a>
                </div>

                <div class="note">
                    <p>Catatan: Anda dapat mencari dan membooking guru lain melalui tautan "Cari Guru Lain" di atas.</p>
                </div>
            </div>
            <div class="email-footer">
                <p>Private education - Sistem Pembelajaran Private</p>
                <div class="footer-links">
                    <a href="#">Dukungan</a>
                    <a href="#">Dasbor Rekrutmen</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
