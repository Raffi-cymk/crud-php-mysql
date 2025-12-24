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
├── index.php
├── koneksi.php
└── assets/
    └── style.css

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
<img width="1347" height="522" alt="Screenshot 2025-12-24 102326" src="https://github.com/user-attachments/assets/b67cfdaa-6e40-40a8-baad-d94836d0da86" />

### 🖼️ Screenshot 2 – Struktur Database

Menampilkan database db_barang yang telah berhasil dibuat dan hanya memiliki satu tabel, yaitu data_barang.
<img width="1363" height="309" alt="Screenshot 2025-12-24 103840" src="https://github.com/user-attachments/assets/184776ee-5ab2-4a13-99d2-dc41c89a7dc3" />

### 🖼️ Screenshot 3 – Struktur Tabel

Menampilkan struktur tabel data_barang yang terdiri dari kolom id, nama, dan harga.
<img width="1347" height="506" alt="Screenshot 2025-12-24 103540" src="https://github.com/user-attachments/assets/78897d91-650b-4b1f-b160-303f76bd0836" />

## 🖼️ Screenshot 4 – Browse Data Tabel

Menampilkan isi data barang pada menu Browse di phpMyAdmin, seperti Pulpen, Pensil, Buku Tulis, beserta harga masing-masing.
<img width="1265" height="564" alt="Screenshot 2025-12-24 102503" src="https://github.com/user-attachments/assets/baf46e32-aa05-4c91-bb75-36c0a3381374" />

## 🖼️ Screenshot 5 – Halaman Pertama (Pagination)

Menampilkan halaman pertama pada aplikasi di localhost, berisi data ID 1–5, lengkap dengan tombol pagination (1, 2, 3) dan tombol Next.
<img width="1349" height="677" alt="Screenshot 2025-12-24 102729" src="https://github.com/user-attachments/assets/61d20d5b-fef3-41ba-bca7-3ce93250ff57" />

## 🖼️ Screenshot 6 – Halaman Kedua (Pagination)

Menampilkan halaman kedua yang berisi data ID 6–10, serta tombol Previous dan Next yang berfungsi dengan baik.
<img width="1349" height="584" alt="Screenshot 2025-12-24 102743" src="https://github.com/user-attachments/assets/32125c14-e539-4076-96c1-7e4e521b0b0e" />

## 🖼️ Screenshot 7 – Halaman Ketiga (Pagination)

Menampilkan halaman terakhir (halaman ke-3) yang berisi data ID 11–12.
Pada halaman ini hanya tersedia tombol Previous, karena sudah berada di halaman paling akhir.
<img width="1350" height="579" alt="Screenshot 2025-12-24 102758" src="https://github.com/user-attachments/assets/0815160b-c8bc-4b8a-a59c-8c5ce2822013" />

## 🖼️ Screenshot 8 – Fitur Pencarian Data

Menampilkan fitur pencarian data, di mana user mengetik nama barang (contoh: crayon), kemudian sistem menampilkan data yang sesuai beserta ID-nya.
<img width="1227" height="432" alt="Screenshot 2025-12-24 102906" src="https://github.com/user-attachments/assets/d7b1f730-bf64-4bfe-82eb-24039cb55df1" />


---
## ✅ Kesimpulan

Dengan project ini, dapat disimpulkan bahwa:

* Pagination (Praktikum 13) dan Pencarian Data (Praktikum 14) berhasil diimplementasikan dan saling terhubung.

* Data dapat ditampilkan secara bertahap per halaman.

* User dapat mencari data barang dengan mudah.

* Tampilan aplikasi dibuat lebih menarik menggunakan CSS gradasi biru.

* Project memenuhi seluruh ketentuan praktikum yang diberikan.
