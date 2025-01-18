![alt text](Foto_Laporan/cover.png?raw=true)
![alt text](Foto_Laporan/kataPengantar.png?raw=true)

## BAB I Pendahuluan


## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website Profile Company UMKM Babe Thai Tea”. Dokumen ini dibuat untuk memudahkan user dalam menggunakan dan memahami website nantinya”.


## 1.2 Lingkup
Website UMKM Babe Thai Tea ini dibuat untuk menyebarkan usaha melalui bidang digital agar semakin luas dan dikenal UMKM

## 1.3 Akronim, singkatan, definisi
| Istilah | Definisi |
| ------ | ------ |
|   SRS     |    Software Requirement Specification    |
|    Login    | Digunakan untuk mengakses aplikasi       |
|   Software Requirement Specification     | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna       |
|    Use Case    | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda       |

## 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah :

-https://chatime.co.id/



## 1.5 Overview
Bab selanjutnya yaitu menjelaskan sistem yang diterapkan pada website. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada website yang dibuat.



## BAB II GAMBARAN UMUM
Babe Thai Tea merupakan suatu UMKM yang bergerak pada bidan minuman.Dalam project ini,kami merancang website company profile dari Babe Thai Tea yang bertujuan untuk menampilkan informasi dan product minuman dari  Babe Thai Tea ini.Selain itu,pada website ini juga menyediakan berbagai fitur lainya seperti menu, kontak, promo,dan juga customer dapat Memberikan Testimoni .Berikut adalah penjelasan dari fitur - fitur yang kami sediakan.

**Fitur Halaman Utama:**
- View Home (Slider, About Us, Menu, Promo, Footer)
- View About Us
- View Informasi
- View Testimoni
- View Menu
- View Promo
- View Contact

**Fitur Dashboard:**
- Login
- View Dashboard
- CRUD Slider (Input, Edit, Delete)
- CRUD Menu (Input, Edit, Delete)
- CRUD Promo (Input, Edit, Delete)
- CRUD Testimoni (Input, Edit, Delete)
- CRUD Informasi (Input, Edit, Delete)
- Edit About Us
- Edit Contact


## 2.1 Perspektif produk
Sistem Babe Thai Tea adalah sebuah sistem yang menyediakan informasi dan product minuman  yang diaplikasikan pada website. Terdapat 2 user yaitu admin dan Customer. Data pada website  dikelola oleh admin dan pengunjung hanya dapat melihat informasi dan melakukan Testimoni  pada website

**2.1.1 Antarmuka Sistem**

![alt text](Foto_Laporan/antarmuka.png?raw=true)

Sistem UMKM Babe Thai Tea memiliki 2 pengguna yaitu admin dan Customer. Admin bisa mengelola data Website dan Customer bisa melihat dan mengunjungi website serta memberi testimoni.

**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
| Gambar | Penjelasan |
| ------ | ------ |
| ![alt text](Foto_Laporan/login.jpeg?raw=true) | Dibagian ini user (admin) dapat melakukan login dengan tujuan untuk meakukan pensettingan data dari website yang ditampilkan dihalaman company profile.   |
| ![alt text](Foto_Laporan/dashboard.jpeg?raw=true)   | Ini merupakan halaman utama jika user sudah bisa melakukan login.   |
| ![alt text](Foto_Laporan/slider.jpeg?raw=true) | Ini adalah menu CRUD Slider, Admin dapat melakukan tambah data, edit data, dan hapus data.    |
| ![alt text](Foto_Laporan/antarmuka.png?raw=true) | Ini adalah menu CRUD Menu, Admin dapat melakukan tambah data, edit data, dan hapus data.   |
| ![alt text](Foto_Laporan/promo.jpeg?raw=true)    | Ini adalah menu CRUD Promo, Admin dapat melakukan tambah data, edit data, dan hapus data.  |
| ![alt text](Foto_Laporan/informasi.jpeg?raw=true)  | Ini adalah menu CRUD Informasi, Admin dapat melakukan tambah data, edit data, dan hapus data.   |
| ![alt text](Foto_Laporan/testimoni.jpeg?raw=true)  | Ini adalah menu CRUD Testimoni, Admin dapat melakukan tambah data, edit data, dan hapus data.   |
| ![alt text](Foto_Laporan/about.jpeg?raw=true) | Ini adalah menu dari About Us, disini tidak menggunakan CRUD, tetapi hanya menggunakan update atau edit data, sehingga data-data yang sudah diinput sebelumnya diubah menjadi yang baru   |
| ![alt text](Foto_Laporan/contact.jpeg?raw=true)    | Contact juga seperti itu, mengedit atau mengupdate data yang ada.   |
| ![alt text](Foto_Laporan/antarmuka.png?raw=true)   | Ini merupakan halaman luaran dari website yang nantinya sebagai tampilan yang bisa dilihat oleh customer. |


**Halaman User**
| Gambar | Penjelasan |
| ------ | ------ |
| ![alt text](Foto_Laporan/antarmuka.png?raw=true)|  Ini merupakan tampilan luaran yang ada pada website yang bisa dijelajahi oleh pengunjung.   |
| ![alt text](Foto_Laporan/aboutCust.jpeg?raw=true)   | Tampilan About Us menampilkan tentang UMKM ini berjalan.   |
| ![alt text](Foto_Laporan/informasiCust.jpeg?raw=true) |  Tampilan Informasi menampilkan informasi terbaru dari UMKM |
| ![alt text](Foto_Laporan/testimoniCust.jpeg?raw=true) | Tampilan testimoni menampilkan customer yang memberikan review kepada produk UMKM  |
| ![alt text](Foto_Laporan/menu.jpeg?raw=true)    | Tampilan Menu menampilkan semua menu atau produk dari UMKM nya  |
| ![alt text](Foto_Laporan/promo.jpeg?raw=true)  | Tampilan Promo menampilkan semua promo yang tersedia dari UMKM nya   |
| ![alt text](Foto_Laporan/contactCust.jpeg?raw=true)  |Tampilan Contact untuk menunjukkan lokasi serta informasi media sosial dari UMKM nya.   |


**2.1.3 Antarmuka perangkat keras**
![alt text](Foto_Laporan/PerangkatKeras.png?raw=true)

Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Babe Thai Tea  yaitu : 

- PC / Laptop Untuk menjalankan Aplikasi ini.

**2.1.4 Antarmuka perangkat lunak**

tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Informasi Parenting antara lain :

- PC
- wifi/Jaringan

**2.1.6 Batasan Memori**

tidak ada

**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
| Login | Digunakan untuk mengakses aplikasi    |
| Tambah Data    |    Digunakan untuk memasukkan data-data    |
| Kembali |  Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data|
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Submit      |     Digunakan untuk menyimpan data   |

**2.1.1 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Foto_Laporan/diagramAdmin.png?raw=true)

Deskripsi Singkat 
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login. 

Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.

Xref: Bagian 3.2.1, Login Admin

**2.2.2 Admin Input Menu**

Use Case: Input Data Menu

Diagram:

![alt text](Foto_Laporan/diagramMenu.png?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman input menu dan Admin menginputkan menu

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data menu.
2. Admin dapat melihat,menambahkan, dan mengupload nama menu , harga dan foto menu.
3. Sistem akan menyimpan ke database.
4. sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.

Xref: Bagian 3.2.2, Input Data Menu

**2.2.3 Admin Input Slider**

Use Case: Input Data Slider

Diagram:
![alt text](Foto_Laporan/diagramSlider.jpeg?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman slider dan Admin menginputkan slider.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data slider.
2. Admin dapat melihat,menambahkan, dan mengupload gambar slider.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.

Xref: Bagian 3.2.3, Input Data Slider

**2.2.4 Admin Input Promo**

Use Case: Input data Promo

Diagram:![alt text](Foto_Laporan/diagramPromo.jpeg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman promo dan Admin menginputkan promo.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data promo.
2. Admin dapat melihat,menambahkan, dan mengupload foto promo dan deskripsi.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.

Xref: Bagian 3.2.3, Input Data Promo

**2.2.5 Admin Input Informasi**

Use Case: Input data Informasi

Diagram:![alt text](Foto_Laporan/diagramInformasi.jpeg?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman informasi dan Admin menginputkan informasi.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data informasi.
2. Admin dapat melihat,menambahkan, dan mengupload  judul, deskripsi dan gambar.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.


Xref: Bagian 3.2.3, Input Data Informasi

**2.2.6 Admin Input Testimini**

Use Case: Input Data Testimoni

Diagram:![alt text](Foto_Laporan/diagramTestimoni.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman informasi dan Admin menginputkan testimoni.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data testimoni.
2. Admin dapat melihat,menambahkan, dan mengupload  judul, deskripsi dan gambar.
3. Sistem akan menyimpan ke database.
4. Sudah disimpan sistem akan menampilkan notifikasi data berhasil ditambahkan.


Xref: Bagian 3.2.3, Input data Testimoni


**2.2.7 pengunjung Mengunjungi website**

Use Case: Mengunjungi website

Diagram:
![alt text](Foto_Laporan/diagramPengunjung.png?raw=true)

Deskripsi Singkat 
Sistem dapat menampilkan halaman company profile yaitu (Home, About Us, Informasi, Testimoni, Menu, Promo, Contact) dan pengunjung dapat melihat semua informasi yang tersedia di website.

Deskripsi Langkah-Langkah
1. Sistem akan menampilkan tampilan halaman utama
2. Pengunjung dapat melihat tampilan home, about us, informasi, testimoni, menu, promo, contact dan juga melakukan testimoni


Xref: Bagian 3.2.7, Mengunjugi Website

## 2.3 Spesifikasi kebutuhan non-fungsional
- tabel kebutuhan non-fungsional

| no | deskripsi |
| ------ | ------ |
|     1   |   Semua interface dan fungsi menggunakan Bahasa Indonesia     |
|     2   |   Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, pengunjung )     |

## 2.4 Karakteristik Pengguna
Pengguna berinteraksi langsung dengan website, mulai dari melihat tampilan company profile, dan kemudian untuk admin bisa melakukan login untuk mensetting semua data-data UMKM nya (CRUD) 

## 2.5 Batasan-batasan
tidak ada

## 2.6 Asumsi-asumsi
tidak ada

## 2.7 Kebutuhan Penyeimbang
tidak ada

## BAB III Requirement Specification


## 3.1 Persyaratan Antarmuka Eksternal
Untuk admin yang akan mengakses website ini diperlukan login terlebih dahulu, kemudian akan memasukkan username dan password, lalu sistem akan validasi login. Setelah login berhasil Admin dapat melihat tampilan admin yang ada di website tersebut. Untuk pengunjung hanya perlu membuka halaman website, kemudian pengunjung dapat melihat informasi dan data product yang ada di website tersebut.

## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi         | Login                                  |
| ------------------- | -------------------------------------- |
| Xref                | Bagian 2.2.1 Admin Login             |
| Trigger             | Admin Membuka Website Babe Thai Tea|
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|        |         2. Sistem melakukan validasi login. |
|        | 3. Bila sukses, sistem akan mengarahkan ke home admin.  |
|        | 4. Bila gagal, sistem akan menampilkan peringatan. |
|     Alternative       |                   Tidak Ada                   |
| Post Condition     |                  admin dapat login dan mengakses webiste sistem informasi parenting                   |
|         Exception Push          |                  Username dan password salah                   |

**3.2.2 Admin Input Informasi Artikel Parenting**
| Nama Fungsi | Input Informasi Parenting |
| ------ | ------ |
| Xref       | Bagian 3.2.2, Input data artikel parenting       |
| Triger       | Membuka website sistem informasi parenting        |
| Precondition | Menginput data artikel parenting |
| Basic Path | 1. Sistem akan menampilkan tampilan input artikel. |
|            | 2. Admin dapat melihat,menambahkan, dan mengupload kegiatan. |
|            | 3. Sistem akan menyimpan ke database. |
|            | 4. Jika sudah disimpan sistem akan menampilkan peringatan. |
| Alternative | Tidak ada |     
| Post Condition | Admin mengelola artikel
| Exception Push | Tidak ada koneksi |


**3.2.3 Input Dokumentasi Kegiatan**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.3 Admin Input Dokumentasi Kegiatan                     |
| Trigger            | admin dapat menginputkan data Dokumentasi Kegiatan |
| Precondition       | Admin menginputkan Data dokumentasi Kegiatan ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan publikasi kegiatan. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload kegiatan.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.4 Input data tentang BP3AM**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.4 Admin Input data tentang BP3AM                     |
| Trigger            | admin dapat menginputkan data tentang BP3AM |
| Precondition       | Admin menginputkan data tentang BP3AM ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data tentang BP3AM. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data tentang BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.5 Input data contact BP3AM**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.5 Admin Input data contact BP3AM                     |
| Trigger            | admin dapat menginputkan data contact BP3AM |
| Precondition       | Admin menginputkan data contact BP3AM ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data contact BP3AM. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data contact BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Input data team BP3AM**

| Nama Fungsi        | Input Informasi Website                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Admin Input data team BP3AM                     |
| Trigger            | admin dapat menginputkan data team BP3AM |
| Precondition       | Admin menginputkan data team BP3AM ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan data team BP3AM. |
|                    | 2. Admin dapat melihat,menambahkan, dan mengupload data team BP3AM.   |
|                    | 3. Sistem akan menyimpan ke database.   |
|                    | 4. Jika sudah disimpan sistem akan menampilkan peringatan.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin Dapat menginputkan data seputar website seperti alamat, pengelola, dan contact person.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Mengunjungi website**

| Nama Fungsi        |    pengunjung  Mengunjungi website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Pengunjung Mengunjungi website             |
| Trigger            |pengunjung Dapat mengunjungi website dan melihat informasi yang ada pada website seperti informasi seputar website serta informasi parenting yang telah tersedia |
| Precondition       |pengunjung Mengunjungi website |
| Basic Path         | 1. Sistem akan menampilkan halaman-halaman konten. |
|                    |  2.pengunjung melihat informasi yang ada pada website seperti informasi seputar website atau informasi parenting serta juga dapat memberikan komentar pada konten parenting yang tersedia    |
|                    | 3.pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.    |
| Alternative        |   Halaman Konten    |
| Post Condition     |   pengunjung mengunjungi website dan melihat informasi yang ada pada website     |
| Exception Push     |    Jika ada kesalahan server atau gangguan teknis, sistem akan menampilkan pesan kesalahan kepada pengguna. Pengguna dapat mencoba kembali atau menghubungi dukungan teknis.    |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Foto_Laporan/3.3.png?raw=true)
**3.3.1 Logika Struktur Data**
Struktur data logika pada sistem informasi parenting terdapat struktur Database yang dijelaskan menggunakan ERD.

**Tabel Admin**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id_Admin|int|Auto-increment dari Id_Admin|
|username|varchar|Berisi username admin untuk mengakses sistem|
|Password|varchar|Berisi password admin untuk mengakses sistem|
|level|varchar|untuk membedakan level saat login antara admin dan pengunjung|

**Tabel Artikel**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_Artikel|int|Auto-increment dari Id_artikel|
|gambar|varchar|Berisi gambar didalam artikel sistem|
|deskripsi|text|Berisi deskripsi artikel sistem|
|judul|varchar|Berisi judul pada artikel sistem|
|kategori|varchar|Berisi kategori pada artikel sistem|

**Tabel Kegiatan**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_kegiatan|int|Auto-increment dari Id_kegiatan|
|gambar|varchar|Berisi gambar didalam kegiatan sistem|
|deskripsi|text|Berisi deskripsi kegiatan sistem|
|judul|varchar|Berisi judul pada kegiatan sistem|
|tanggal|varchar|Berisi tanggal pada kegiatan sistem|

**Tabel about**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_about|int|Auto-increment dari id_about|
|gambar|varchar|Berisi gambar didalam about sistem|
|deskripsi|text|Berisi deskripsi about sistem|

**Tabel contact**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_contact|int|Auto-increment dari id_contact|
|judul|varchar|Berisi judul pada contact sistem|
|isi|text|Berisi isi contact sistem|

**Tabel team**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id_team|int|Auto-increment dari Id_team|
|gambar|varchar|Berisi gambar didalam team sistem|
|nama|text|Berisi nama team sistem|
|jabatan|varchar|Berisi jabatan pada team sistem|



## Pembagian tugas
BAB 1 ->Nindy

BAB 2 
2.1
  
  2.1.1 -> Nindy
  
  2.1.2 -> Nindy
  
  2.1.3 -> Ariyan
  
  2.1.4 -> Ariyan
 
  2.1.5 -> Ariyan
  
  2.1.6 -> Raditya
  
  2.1.7 -> Raditya
  
  2.1.8 -> Raditya

2.2 semua poin-poin (nindy)

BAB 3 

3.1 nindy

3.2 nindy

3.3 Nindy
