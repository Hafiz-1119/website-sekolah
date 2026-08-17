<footer class="footer">

    <div class="container footer-grid">

        <div class="footer-brand">

            <h3>
                SMP NEGERI 2 PENAWANGAN
            </h3>

            <p>
                Membangun Generasi Berilmu & Berakhlak
            </p>

            <p>
                Jl. Raya Penawangan No. 45, Kecamatan Penawangan,
                Kabupaten Grobogan, Jawa Tengah, Indonesia.
            </p>

        </div>


        <div>

            <h4>
                Tautan Cepat
            </h4>

            <a href="/profil">Profil Sekolah</a>
            <a href="/berita">Berita Terbaru</a>
            <a href="/galeri">Galeri Foto</a>
            <a href="/kontak">Hubungi Kami</a>

        </div>


        <div>

            <h4>
                Kontak
            </h4>

            <p>
                (0292) 427189
            </p>

            <p>
                info@smpn2penawangan.sch.id
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        © {{ date('Y') }} SMP Negeri 2 Penawangan.
        Semua Hak Cipta Dilindungi.

    </div>

</footer>


<style>

    .footer {
        background: #123c69;
        color: white;
        margin-top: 0;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 50px;
        padding: 55px 0;
    }

    .footer h3 {
        margin-bottom: 10px;
    }

    .footer h4 {
        margin-bottom: 15px;
    }

    .footer p {
        color: #dbeafe;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .footer a {
        display: block;
        color: #dbeafe;
        font-size: 14px;
        margin-bottom: 8px;
    }

    .footer a:hover {
        color: white;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255,255,255,0.15);
        padding: 20px;
        text-align: center;
        color: #dbeafe;
        font-size: 13px;
    }

    @media (max-width: 700px) {

        .footer-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

    }

</style>