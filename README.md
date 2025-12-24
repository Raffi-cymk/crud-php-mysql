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
| Kolom | Tipe Data    | Keterangan                  |
| ----- | ------------ | --------------------------- |
| id    | INT          | Primary Key, Auto Increment |
| nama  | VARCHAR(100) | Nama barang                 |
| harga | INT          | Harga barang                |

Jumlah data: 10–15 data barang (contoh: pulpen, pensil, buku tulis, crayon, dll).

---
## 📸 Dokumentasi Screenshot (SS1 – SS8)

### 🖼️ Screenshot 1 – Pembuatan Database & Tabel

Menampilkan proses pembuatan database dan tabel menggunakan SQL Query di phpMyAdmin, termasuk perintah CREATE DATABASE, CREATE TABLE, dan INSERT INTO

### 🖼️ Screenshot 2 – Struktur Database

Menampilkan database db_barang yang telah berhasil dibuat dan hanya memiliki satu tabel, yaitu data_barang.

### 🖼️ Screenshot 3 – Struktur Tabel

Menampilkan struktur tabel data_barang yang terdiri dari kolom id, nama, dan harga.

## 🖼️ Screenshot 4 – Browse Data Tabel

Menampilkan isi data barang pada menu Browse di phpMyAdmin, seperti Pulpen, Pensil, Buku Tulis, beserta harga masing-masing.

## 🖼️ Screenshot 5 – Halaman Pertama (Pagination)

Menampilkan halaman pertama pada aplikasi di localhost, berisi data ID 1–5, lengkap dengan tombol pagination (1, 2, 3) dan tombol Next.

## 🖼️ Screenshot 6 – Halaman Kedua (Pagination)

Menampilkan halaman kedua yang berisi data ID 6–10, serta tombol Previous dan Next yang berfungsi dengan baik.

## 🖼️ Screenshot 7 – Halaman Ketiga (Pagination)

Menampilkan halaman terakhir (halaman ke-3) yang berisi data ID 11–12.
Pada halaman ini hanya tersedia tombol Previous, karena sudah berada di halaman paling akhir.

## 🖼️ Screenshot 8 – Fitur Pencarian Data

Menampilkan fitur pencarian data, di mana user mengetik nama barang (contoh: crayon), kemudian sistem menampilkan data yang sesuai beserta ID-nya.


---
## ✅ Kesimpulan

Dengan project ini, dapat disimpulkan bahwa:

* Pagination (Praktikum 13) dan Pencarian Data (Praktikum 14) berhasil diimplementasikan dan saling terhubung.

* Data dapat ditampilkan secara bertahap per halaman.

* User dapat mencari data barang dengan mudah.

* Tampilan aplikasi dibuat lebih menarik menggunakan CSS gradasi biru.

* Project memenuhi seluruh ketentuan praktikum yang diberikan.
