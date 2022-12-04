# fullstack-16
#### Project ini dibuat untuk memenuhi tugas akhir course Full Stack Development dari mitra BISA AI Academy pada program Magang dan Studi Independen Bersertifikat (MSIB) batch 3. 
#### Project ini bernama GuitarProject yang diwujudkan dalam bentuk situs Toko Alat Musik yang memiliki 4 kategori produk, yaitu Bass, Drum, Gitar, dan Amplifier. 
#### Untuk Frontend kami menggunakan HTML + CSS + Bootstrap4, sedangkan untuk Backend kami menggunakan CodeIgniter3 + MySQL.

## GUIDE:

`save folder inside \xampp\htdocs\`

`create database db_fullstack16 and import db_fullstack16.sql`

## Group Member
		
	Frontend:
		Wiga Audi		@wigaaudi
		Bagus PN		@BagusPN
	Backend:
		Naufal Fawwazi		@naufalfawwazi
		Michael Indrawan	@michaelindrawan
		Raka Ari Priambodo	@rakaarip

## Database Design's Structure

    db_fullstack16
    .
    ├── tbl_user
    |   ├── id_user			[INT PRIMARY KEY AUTO INCREMENT NOT NULL]
    │   ├── nama_user		[VARCHAR(100) NOT NULL]
    │   ├── email_user		[VARCHAR(100) NOT NULL]
    │   └── password_user		[VARCHAR(16) NOT NULL]
    ├── tbl_produk
    |   ├── id_produk		[INT PRIMARY KEY AUTO INCREMENT NOT NULL]
    |   ├── jenis_produk		[VARCHAR(10) NOT NULL]
    |   ├── foto_produk 		[VARCHAR(255) NOT NULL]
    |   ├── nama_produk		[VARCHAR(100) NOT NULL]
    |   ├── harga_produk		[INT UNSIGNED NOT NULL]
    |   └── deskripsi_produk	[TEXT NOT NULL]
    ├── tbl_keranjang
    |   ├── id_keranjang		[INT PRIMARY KEY AUTO INCREMENT NOT NULL]
    |   ├── id_user			[INT NOT NULL]
    |   ├── id_produk		[INT NOT NULL]
    |   ├── jumlah_produk		[INT UNSIGNED NOT NULL]
    |   ├── total_harga		[INT UNSIGNED NOT NULL]
    |   ├── nama_produk		[VARCHAR(100) NOT NULL]
    |   └── nama_user		[VARCHAR(100) NOT NULL]
    └── tbl_riwayat
        ├── id_riwayat		[INT PRIMARY KEY AUTO INCREMENT NOT NULL]
        ├── id_user			[INT NOT NULL]
        ├── nama_user		[VARCHAR(100) NOT NULL]
        ├── total_order		[INT UNSIGNED NOT NULL]
        └── tanggal_order		[DATE NOT NULL]

## Credit: 
`github.com/naufalfawwazi/fullstack-16`
