# Tugas Praktikum DPBO #8

Dibuat untuk menyelesaikan TP8 Desain Pemrograman Berorientasi Objek (DPBO)

## Janji

Saya Willsoon Tulus Parluhutan Simanjuntak dengan NIM 2404756 mengerjakan evaluasi Tugas Praktikum 8 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 

Aamiin.

## Desain program

Program ini merupakan program CRUD berbasis antarmuka web dengan arsitektur Model-View-Controller (MVC) berbasis PHP dengan sistem basis data PHP Data Objects untuk mengelola artikel yang dipublikasikan, beserta dosen dan mahasiswa yang terkait.

Satu controller bisa mengarah ke berbagai macam View, tergantung dengan parameter page yang diminta. Jika tidak ada parameter page atau parameter page adalah `home` maka website akan mengarahkan ke homepage controller. Sedangkan jika ada page yang tersedia, maka website akan mengarahkan ke controller yang terkait masing-masing page.

### Diagram UML (Basis Data):

![UML Diagram](Dokumentasi/db_uml_diagram.svg)

### Deskripsi desain basis data:

- Tabel `lecturers` menampung data dosen yang berupa ID, nama, NIDN, nomor telepon, dan tanggal pendaftaran.
- Tabel `students` menampung data mahasiswa yang berupa ID, nama, NIM, nomor telepon, tanggal pendaftaran, dan ID dosen wali.
- Tabel `articles` menampung data artikel yang berupa ID, nama, deskripsi, DOI, ID mahasiswa, ID dosen pengampu, dan tanggal pembuatan artikel. Untuk atribut `description` menggunakan tipe data MEDIUMTEXT agar dapat menyimpan teks dengan jumlah kata yang lebih banyak, maupun teks dengan lebih dari satu kalimat.

Program ini juga memanfaatkan fungsi JOIN pada database SQL untuk menggabungkan data dari tabel lain dalam satu output tabel, seperti:
- Menampilkan nama dosen disamping ID dosen dalam tampilan tabel mahasiswa
- Menampilkan nama dosen serta nama penulis disamping masing-masing ID yang terkait dalam tampilan tabel artikel

## Alur jalan program

Program ini menyediakan antarmuka berupa webpage yang bisa dibuka oleh user (misal: manager kumpulan artikel publikasi universitas). Konfigurasi koneksi terhadap database dapat dilakukan dengan mengubah file `Database.php` pada folder `models`.

Halaman awal webpage menampilkan tombol-tombol untuk mengelola tabel yang tersedia, yaitu `lecturers`, `students`, dan `articles` Masing-masing tabel telah mendukung CRUD, yaitu membuat data baru, membaca kumpulan data dalam tabel, merubah / memperbaharui data yang ada, serta menghapus data yang ada.

Untuk tabel `articles`, pengguna dapat melihat keseluruhan atribut dari suatu data secara individu, dikarenakan atribut `description` yang dapat mengandung jumlah kata yang cukup banyak.

## Preview operasional program

https://github.com/user-attachments/assets/4453ecd6-9e0d-4fb9-9910-bfc343e3a204



