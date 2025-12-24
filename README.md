# crud-php-mysql

## 📦 CRUD Barang (Pagination & Pencarian Data)
### 📌 Pendahuluan

Project ini merupakan implementasi gabungan Praktikum 13 (Pagination) dan Praktikum 14 (Pencarian Data) yang saling terhubung.
Pagination digunakan untuk membagi data barang ke dalam beberapa halaman agar tampilan lebih rapi dan efisien, sedangkan fitur pencarian data digunakan untuk memfilter data berdasarkan nama barang yang dicari oleh user.

Data barang yang digunakan berjumlah minimal 10 dan maksimal 15 data, sesuai dengan ketentuan praktikum.
Seluruh fitur diimplementasikan dalam satu halaman web berbasis PHP dan MySQL, serta dilengkapi dengan CSS gradasi biru agar tampilan lebih menarik dan user-friendly 🎨💙 (tampilan warna sesuka hati user).

---
## 🛠️ Tools & Teknologi yang Digunakan

Berikut tools dan teknologi yang digunakan dalam pengerjaan project ini:

* PHP → Bahasa pemrograman server-side untuk logika aplikasi

* MySQL → Database untuk menyimpan data barang

* phpMyAdmin → Manajemen database (membuat database, tabel, dan data)
XAMPP → Web server lokal (Apache & MySQL)

* HTML → Struktur tampilan halaman

* CSS → Desain tampilan (gradasi biru, tabel, pagination)

* Browser (Chrome / Edge) → Menjalankan aplikasi di localhost


---
## 🗂️ Struktur Folder Project

Struktur folder project disusun sederhana dan rapi sebagai berikut:

crud_barang/
├── index.php        → Halaman utama (tampilan data, pagination, pencarian)
├── koneksi.php      → File koneksi database
└── assets/
    └── style.css    → File CSS (WAJIB, untuk tampilan)

📌 Catatan:
Penggunaan CSS bersifat wajib, bukan opsional, untuk memenuhi standar tampilan aplikasi web dan kebutuhan penilaian praktikum.


---
## 🧱 Struktur Database

* Nama Database: db_barang
* Nama Tabel: data_barang

Struktur Tabel data_barang:
