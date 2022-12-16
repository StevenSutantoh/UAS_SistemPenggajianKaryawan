Nama : Steven Sutantoh
Student ID : 03081200017

SOAL :
Lakukan pengembangan terhadap web aplikasi yang telah anda buat pada final
project, dengan ketentuan :
1. Tambahkan satu buah table pada web aplikasi kemudian buatlah halaman 
CRUD dengan menggunakan CRUD generator, serta tambahkan menu untuk 
mengakses table tersebut pada sidebar (30 poin).
Jb. php artisan crud:generate department --fields='name#string; department#string; jabatan#string; level#string' --view-path=admin --controller-namespace=App\Http\Controllers\Admin --route-group=admin --form-helper=html

2. Buatlah sebuah view untuk melakukan analisis data yang relevan dengan topik 
final project anda, simpan query view tersebut kedalam file queryUAS.sql (20
poin)
Jb. CREATE VIEW datakaryawan AS
    SELECT emp.name,emp.identification_no,emp.address,emp.marriage_status,emp.gender,dpt.department,dpt.jabatan,dpt.level
       FROM employees emp 
    INNER JOIN departments dpt ON dpt.employee_id=emp.id

3. Buatlah sebuah antarmuka untuk menampilkan view pada soal 2, kemudian 
tambahkan tombol untuk mencetaknya kedalam format laporan pdf. Sertakan 
logo UPH dan nama berserta studentID anda pada header laporan (30)
Jb. Lampiran PDF

4. Buat validasi data untuk halaman insert dan update soal nomor 1 (10 Poin)

5. Simpan kode program beserta queryUAS.sql ke public repository github, 
tambahkan file readme.md yang berisikan (10 Poin):
o Nama dan StudentID
Steven Sutantoh dan 03081200017
o Soal dan penjelasan solusi untuk setiap soal beserta nama file yang 
berubah.