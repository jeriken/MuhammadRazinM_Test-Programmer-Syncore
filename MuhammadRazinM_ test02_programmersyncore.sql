
/* 1. Menampilkan data member yang berada pada provinsi sumatera utara dan dalam satu kabupaten */
SELECT * FROM mst_member group by id_kabupaten having COUNT(id_kabupaten > 1);

/* 2 Menampilkan data provinsi yang tidak ada dalam data member */
SELECT * FROM mst_provinsi AS p JOIN mst_member AS m WHERE p.kode_propinsi NOT IN (SELECT m.id_provinsi FROM mst_member WHERE m.id_provinsi = p.kode_propinsi);

/* 3 Menampilkan data kabupaten  yang tidak ada dalam data member */
SELECT * FROM mst_kabupaten AS k JOIN mst_member AS m WHERE k.kode_kabupaten NOT IN (SELECT m.id_kabupaten FROM mst_member WHERE m.id_kabupaten = k.kode_kabupaten);

/* 4 Menampilkan data kecamatan  yang tidak ada dalam data member */
SELECT * FROM mst_kecamatan AS p JOIN mst_member AS m WHERE p.kode_kecamatan NOT IN (SELECT m.id_kecamatan FROM mst_member WHERE m.id_kecamatan = k.kode_kecamatan);

/* 5 Menampilkan nama member yang terdapat di Kab. Simalungun */
SELECT nama FROM mst_member WHERE id_kabupaten = '12.08';

/* 6 Menampilkan jumlah data instansi pada Kab. Bireuen dan Kab. Bener Meriah */
SELECT COUNT(IF(kode_kabupaten = '11.11', kode_kabupaten, NULL)) AS bireuen, COUNT(IF(kode_kabupaten = '11.17', kode_kabupaten, NULL)) AS bener FROM mst_instansi;

/* 7 Menampilkan data member yang berawalan huruf “M” */
SELECT * FROM mst_member WHERE nama LIKE 'M%';

/* 8 Menampilkan alamat email yang mempunyai karakter “no” dan terdapat di provinsi Sumatera Utara */
SELECT * FROM mst_member WHERE email LIKE '%no%' AND id_provinsi = '12'

/* 9 Menampilkan data member yang mempunyai kode instansi “2004” */
SELECT * FROM mst_member WHERE kode_instansi LIKE '%2004';

/* 10 Menampilkan data member yang mempunyai karakter kode kecamatan “.08.” */
SELECT * FROM mst_member WHERE kode_instansi LIKE '__.08.';