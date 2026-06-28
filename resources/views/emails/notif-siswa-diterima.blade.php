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
            background: linear-gradient(180deg, #eef4fb 0%, #f9fbff 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1f2a38;
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
            box-shadow: 0 22px 45px rgba(31, 42, 56, 0.12);
            border: 1px solid #e2e8f0;
        }
        .email-header {
            padding: 28px 26px;
            background: linear-gradient(90deg, #0f1724 0%, #1f2937 100%);
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
            opacity: 0.85;
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
            background: #e8f0ff;
            color: #2f80ed;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
        }
        .details {
            background: #f8fbff;
            border: 1px solid #dfe7f4;
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
            color: #12243f;
            font-weight: 700;
            font-size: 14px;
        }
        .details-item span {
            color: #475569;
            font-size: 14px;
            word-break: break-word;
        }
        .profile-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid #e3eaf4;
            padding: 22px;
            margin: 18px 0;
        }
        .profile-card h2 {
            margin: 0 0 14px;
            font-size: 18px;
            color: #12243f;
        }
        .profile-card p {
            margin: 0;
            font-size: 14px;
            color: #475569;
            line-height: 1.7;
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
            background: #2f80ed;
            color: #ffffff;
        }
        .button.secondary {
            background: #eef3ff;
            color: #2f80ed;
            border: 1px solid #cbd7f4;
        }
        .button:hover {
            opacity: 0.95;
        }
        .note {
            background: #fff7e6;
            border-left: 4px solid #f0ad4e;
            padding: 16px 18px;
            border-radius: 12px;
            margin-top: 18px;
            color: #5f4b1f;
            font-size: 14px;
        }
        .email-footer {
            padding: 22px 30px;
            text-align: center;
            font-size: 13px;
            color: #6b7a8c;
            background: #f5f7ff;
        }
        .footer-links {
            margin-top: 10px;
        }
        .footer-links a {
            color: #2f80ed;
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
                <h1>Booking Diterima oleh Guru</h1>
                <p>Nontifikasi bookingan di terima oleh guru</p>
            </div>
            <div class="email-body">
                <p>Halo Nama Siswa,</p>
                <p>Bookingan Anda telah <strong>dikonfirmasi</strong> oleh <strong>Nama Guru</strong>. Untuk mengamankan jadwal, silakan segera melakukan pembayaran dengan masuk ke akun siswa Anda.</p>
                <span class="badge">Status: Booking Diterima</span>
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
              
                
                <div class="note">
                    <p>Catatan: Silakan segera <a href="{{ config("app.name").'/login' }}">masuk ke akun siswa</a> dan lakukan pembayaran untuk mengonfirmasi bookingan Anda.</p>
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
