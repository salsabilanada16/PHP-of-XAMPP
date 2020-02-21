<?php
// mencetak tulisan ke layar
// bisa pake kutip 1 ataupun kutip 2
    echo "<h1>Hello World!</h1>";
    echo "<hr>";

// kalau angka tidak usah pake kutip dan kalau menuliskan operasi matematika maka yang akan ditampilkan adalah hasil dari operasi tersebut
// perintah echo adalah untuk mencetak ke layar kalau tidak ditulis maka tidak ditampilkan
    echo (1 + 2) * (3 - 4);
    echo '<hr>';

// VARIABEL
// --> tempat untuk menyimpan nilai
// aturan variabel boleh ada angkanya tapi tidak boleh diawali dengan angka
$nama = 'Salsabila';
$email = '193040050.salsabila@mail.unpas.ac.id';
// yang ditampilin hanya email
echo $email;
echo '<br>';
echo '<hr>';


// OPERATOR
// sesuatu yang berada di antara dua nilai atau operan
// Operator Aritmatika / Matematika (+, -, *, /, %(sisa bagi))
echo 10 % 9;
echo '<hr>';

// Operator Assignment / Penugasan (=, +=, -=, *=, /=, .=(ini dipake untuk menumpuk stringnya))
$x = 1;
$y = 2;
$z = $x;
echo $z;
echo '<hr>';

    // kalau ada yang sama maka yang paling terakhir yang ditampilkan, tapi kalau begini maka 1 - 5
$a = 1;
$a -= 5;
echo $a;

// Operator Increment / Decrement ( ++, -- )
// kalau seperti ini maka 1 ditambah 1 lagi ditambah 1 lagi dikurang 1
// operator increment bisa disimpan di depan dolar tapi tidak bisa dua-duanya (depan belakang)
$x = 1;
$x++;
$x++;
$x--;
++$x; 
echo $x;
echo '<br>';
echo $x++;
echo '<hr>';

// Operator String / Concat / Penggabung String ( . )
$nama_depan = 'Salsabila';
$nama_belakang = 'Nada';
    // untuk menambahkan spasi tambahkan saja kutip kosong karna itu bagian dari string juga
echo $nama_depan . ' ' . $nama_belakang;
echo '<hr>';
    // bisa menggabung pake cara ini bisa juga yang di atas
$nama = 'Salsabila';
$nama .= ' ';
$nama .= 'Nada';
$nama .= ' ';
$nama .= 'Adzani';
echo $nama;
echo '<hr>';


// STANDAR OUTPUT
// echo, print
// '', ""
    // ini pake kutip 2 karena di assalamu'alaikum pake kutip 1
$salam = "Assalamu'alaikum";
    // ini pake kutip 1 karena di percakapan itu pake kutip 2
$percakapan = 'A : "Hallo, apa kabar?"';
    // $percakapan = 'A : "' . $salam . '"'; --> ini kalo assalamu'alaikum ditulis sebagai percakapan. yang bacanya itu dimatikan dulu lalu $salam trus dinyalakan lagi
    // $percakapan = 'A : "Assalamu\'alaikum"'; --> ini cara lain yang memerintahkan \ bahwa kutip ' bukan penutup percakapan
    // $percakapan = "A : \"Assalamu'alaikum\""; --> ini cara lain kalau awalnya itu mau pake kutip 2
echo $salam;
echo '<br>';
echo $percakapan;


?>