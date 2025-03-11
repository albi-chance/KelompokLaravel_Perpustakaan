<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Berdasarkan Genre</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: rgb(161, 255, 255);
            text-align: center;
            padding: 50px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .book-container {
            width: 50%;
            background: white;
            padding: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        h1 {
            color: rgb(0, 21, 255);
        }
        .genre-buttons button {
            margin: 5px;
            padding: 10px 20px;
            cursor: pointer;
            background-color: rgb(19, 41, 139);
            color: white;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .genre-buttons button:hover {
            background-color: rgb(3, 255, 234);
        }
        .book-list {
            margin-top: 20px;
            text-align: left;
        }
        .book-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
            padding: 10px;
            background-color: #f0e6d6;
            border-radius: 5px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }
        .book-item img {
            width: 50px;
            height: 70px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 5px;
        }
        .book-item button {
            padding: 5px 10px;
            cursor: pointer;
            background-color: rgb(19, 41, 139);
            color: white;
            border: none;
            border-radius: 5px;
        }
        .book-item button:hover {
            background-color: rgb(3, 255, 234);
        }
        /* Layout detail */
        .book-detail {
            width: 30%;
            background: white;
            padding: 20px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
            display: none;
        }
        .book-detail img {
            width: 100px;
            height: 140px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .book-detail h2 {
            margin: 0;
            font-size: 20px;
        }
        .book-detail p {
            font-size: 14px;
            margin: 10px 0;
        }
        .book-detail button {
            padding: 10px 15px;
            background-color: rgb(19, 41, 139);
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            float: right;
        }
        .book-detail button:hover {
            background-color: rgb(3, 255, 234);
        }
        h5{
            margin-left:30%
        }
    </style>
</head>
<body>

<div class="book-container">
    <h1>Pilih Genre Buku</h1>
    <div class="genre-buttons">
        <button onclick="tampilkanBuku('Action')">Fiksi</button>
        <button onclick="tampilkanBuku('isekai')">Non-Fiksi</button>
        <button onclick="tampilkanBuku('fantasi')">Fantasi</button>
        <button onclick="tampilkanBuku('horor')">Horor</button>
        <button onclick="tampilkanBuku('misteri')">Misteri</button>
        <button onclick="tampilkanBuku('romantis')">Romantis</button>
    </div>

    <div class="book-list" id="book-list">
       <h5>pilih genre buku yang anda ingin kan</h5>
    </div>
</div>

<div class="book-detail" id="book-detail">
    <!-- Detail buku muncul di sini -->
</div>

<script>
    const dataBuku = {
        'Action': [
            {judul: 'Jujur Kasian', gambar: 'img/petrik.jpg', deskripsi: 'Buku ini menceritakan tentang petualangan seru.'},
            {judul: 'Chainsaw Man', gambar: 'img/petrik.jpg', deskripsi: 'Buku tentang pemburu iblis yang punya kekuatan gergaji mesin.'},
            {judul: 'Record of Ragnarok', gambar: 'img/petrik.jpg', deskripsi: 'Pertarungan antara dewa dan manusia.'}
        ],
       'isekai': [
            {judul: 'overlord', gambar: 'img/petrik.jpg', deskripsi: 'Buku ini menceritakan tentang overlord yang ingin menguasai dunia.'},
            {judul: 'youjo senki', gambar: 'img/petrik.jpg', deskripsi: 'Buku tentang pria karyawan yang terisekai akibat di dorong oleh mantan pegawainya.'},
            {judul: 'sentouin hakanes', gambar: 'img/petrik.jpg', deskripsi: 'Pertarungan antara dewa dan manusia.'}
        ],
        'fantasi': [
            {judul: 'rezero', gambar: 'img/petrik.jpg', deskripsi: 'Buku ini menceritakan tentang petualangan seru.'},
            {judul: 'guardian of galaxsi', gambar: 'img/petrik.jpg', deskripsi: 'Buku tentang pemburu iblis yang punya kekuatan gergaji mesin.'},
            {judul: 'tensura', gambar: 'img/petrik.jpg', deskripsi: 'Pertarungan antara dewa dan manusia.'}
        ],
        'horor': [
            {judul: 'ganteng serigala', gambar: 'img/petrik.jpg', deskripsi: 'Buku ini menceritakan tentang petualangan seru.'},
            {judul: 'budhi si pedagang somay', gambar: 'img/petrik.jpg', deskripsi: 'Buku tentang pemburu iblis yang punya kekuatan gergaji mesin.'},
            {judul: 'Es campur saat sore hari di ramadhan', gambar: 'img/petrik.jpg', deskripsi: 'Pertarungan antara dewa dan manusia.'}
        ],
       'misteri': [
            {judul: 'dark gathering', gambar: 'img/petrik.jpg', deskripsi: 'Buku ini menceritakan tentang petualangan seru.'},
            {judul: 'kenapa kalo kita nyari barang ga nemu', gambar: 'img/petrik.jpg', deskripsi: 'Buku tentang pemburu iblis yang punya kekuatan gergaji mesin.'},
            {judul: 'tapi kalo ema yang nyari ketemu', gambar: 'img/petrik.jpg', deskripsi: 'Pertarungan antara dewa dan manusia.'}
        ],
        'romantis': [
            {judul: 'azab kubur', gambar: 'img/petrik.jpg', deskripsi: 'Buku ini menceritakan tentang petualangan seru.'},
            {judul: '100 tusuk sate', gambar: 'img/petrik.jpg', deskripsi: 'Buku tentang pemburu iblis yang punya kekuatan gergaji mesin.'},
            {judul: 'prank ojek online', gambar: 'img/petrik.jpg', deskripsi: 'Pertarungan antara dewa dan manusia.'}
        ],
    };

    function tampilkanBuku(genre) {
        const bookList = document.getElementById('book-list');
        bookList.innerHTML = '';
        document.getElementById('book-detail').style.display = 'none';

        const bukuGenre = dataBuku[genre] || [];
        if (bukuGenre.length > 0) {
            bukuGenre.forEach((buku, index) => {
                const item = document.createElement('div');
                item.className = 'book-item';

                const img = document.createElement('img');
                img.src = buku.gambar;
                img.alt = buku.judul;

                const judul = document.createElement('span');
                judul.innerText = buku.judul;

                const btn = document.createElement('button');
                btn.innerText = 'Melihat';
                btn.onclick = () => tampilkanDetailBuku(buku);

                item.appendChild(img);
                item.appendChild(judul);
                item.appendChild(btn);

                bookList.appendChild(item);
            });
        } else {
            bookList.innerHTML = '<p>Tidak ada buku di genre ini.</p>';
        }
    }

    function tampilkanDetailBuku(buku) {
        const detail = document.getElementById('book-detail');
        detail.innerHTML = `
            <img src="${buku.gambar}" alt="${buku.judul}">
            <h2>${buku.judul}</h2>
            <p>${buku.deskripsi}</p>
            <button>Meminjam</button>
        `;
        detail.style.display = 'block';
    }
</script>

</body>
</html>
