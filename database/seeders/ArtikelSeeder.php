<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::create([
            'admin_id' => '1',
            'judul' => 'Mengenal Perawatan Rambut Keratin, Apakah Itu?',
            'slug' => 'Mengenal-Perawatan-Rambut-Keratin',
            'isi' => 'Rambut menjadi mahkota wanita yang mampu melengkapi tampilan sehingga dapat menarik perhatian. Tanpa perawatan, rambut bisa rusak dan tidak sehat. Selain menggunakan beberapa bahan alami, merawat rambut pun termasuk menjaga kandungan alami yang terdapat di dalamnya.eratin pun bisa hilang. Beberapa faktor penyebabnya bisa karena paparan faktor eksternal, seperti matahari, polusi, atau bahan kimia. Selain itu, perubahan gaya hidup pun bisa mengakibatkan hilangnya keratin pada rambut seseorang. Pada akhirnya timbul beberapa masalah rambut, seperti rambut terasa kering, rusak, dan kusut.'
        ]);

	Artikel::create([
            'admin_id' => '1',
            'judul' => 'Kak Seto Ungkap Asal Usul Rambut Poni, Gara-Gara Jatuh Sampai Dijahit',
            'slug' => 'Kak-Seto-Ungkap-Asal-Usul-Rambut',
            'isi' => 'Kak Seto hingga hari ini kerap menjadi perhatian publik lantaran di usia yang sudah memasuki 70, ia masih terlihat sangat bugar. Selain itu, penampilan Kak Seto pun terbilang konsisten sejak awal dikenal publik hingga sekarang. Ia memiliki model rambut poni yang menutupi dahi. Banyak yang belum mengetahui secara pasti mengenai alasan pemilik nama Seto Mulyadi itu memiliki rambut poni. Namun belum lama ini, ia membeberkannya di hadapan Vincent Rompies dan Desta Mahendra.'
        ]);

	Artikel::create([
            'admin_id' => '1',
            'judul' => 'Deddy Corbuzier Ngaku Masih Tumbuh Rambut, Ungkap Alasan Sebenarnya Tampil Plontos',
            'slug' => 'Deddy-Corbuzier-Ngaku-Masih-Tumbuh-Rambut',
            'isi' => 'Deddy Corbuzier beberapa tahun ini selalu terlihat plontos. Bahkan, ia beberapa kali mengaku bahwa alasannya tampil seperti itu lantaran rambutnya sudah tak bisa tumbuh lagi. Namun saat mengundang Lesti Kejora dan Rizky Billar di video podcast kanal YouTube miliknya, Deddy pun menyampaikan fakta sebenarnya soal penampilannya itu. Rupanya, Deddy mengaku bahwa rambut di kepalanya masih bisa tumbuh. Bahkan, kekasih Sabrina Chairunnisa ini mengungkapkan bahwa pernyataan sebelumnya soal rambut yang tak bisa tumbuh hanyalah candaan semata.'
        ]);

	Artikel::create([
            'admin_id' => '1',
            'judul' => 'Apa Itu Alopesia, Masalah Rambut yang Menimpa Banyak Lelaki?',
            'slug' => 'Apa-Itu-Alopesia',
            'isi' => '"Hilangnya folikel rambut ini dapat disebabkan karena dia tidak terbentuk atau pembentukannya tidak normal, ataupun rusak folikel rambutnya," ujar dr. Eyleny dalam ZAP Premiere Virtual Media Meet Up: Laser Treatment Solusi Ampuh Mengatasi Rambut Pitak, Senin, 31 Agustus 2021. Alopesia ini tidak hanya terjadi pada rambut kepala, tetapi dapat juga terjadi pada ketiak, alis, bulu mata, ataupun area genital. Penyakit ini juga dapat memengaruhi psikososial seseorang karena dapat menghilangkan kepercayaan diri, social phobia, hingga Depresi.'
        ]);

	Artikel::create([
            'admin_id' => '1',
            'judul' => 'Kisah Jatuh Bangun Bisnis Pomade Lokal Bangkit dari Kebangkrutan',
            'slug' => 'Kisah-Jatuh-Bangun-Bisnis-Pomade',
            'isi' => 'Bagi kebanyakan pria, rambut merupakan bagian tubuh yang menjadi indikasi kepercayaan diri. Sebuah penelitian sosial di Kanada bahkan menyimpulkan jika laki-laki cenderung berkonsentrasi pada tampilan rambutnya untuk meningkatkan daya tarik serta menciptakan kesan lebih muda. Style awareness yang dimiliki pria untuk selalu menyempurnakan tampilan rambut menjadi peluang bisnis menjanjikan bagi produk hair styling kaum adam.'
        ]);

	Artikel::create([
            'admin_id' => '6',
            'judul' => 'Charly Van Houten Ubah Gaya Rambut, Nyaris Tak Dikenal Karena Hilangkan Model Belah Tengah dan Dicat Pirang',
            'slug' => 'Charly-Van-Houten-Ubah-Gaya-Rambut',
            'isi' => 'Siapa sangka Charly Van Houten sudah tak lagi berambut panjang. Vokalis grup Setia Band ini memangkas rambutnya menjadi lebih pendek. Tak hanya itu, penampilan Charly Eks ST12 semakin berbeda dengan rambut pendek yang dicat dengan warna pirang. Melalui akun Instagram terverifikasinya, Charly mengunggah potret dirinya tengah memainkan smartphone. Yang menarik, tak ada yang menyangka jika foto pria yang diunggahnya ke Instagram adalah Charly Van Houten. Charly Van Houten menampilkan bentuk rambutnya yang kini pendek dan berwarna pirang. Tak hanya itu, belahan rambut vokalis Setia Band juga berubah, bukan belah tengah seperti biasa saat dirinya tampil menghibur banyak orang di atas panggung.'
        ]);
    }
}
