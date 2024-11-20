<h5>Menampilkan data ide</h5>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Menu</th>
            </tr>
            <?php

            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * from ideas");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['judul']; ?></td>
                    <td><?= $d['deskripsi']; ?></td>
                    <td class="menu">
                        <a href="lihat.php?id=<?= $d['id']; ?>">
                            <img src="img/lihat.png" alt="Lihat">
                            Lihat
                        </a>
                        <a href="edit.php?id=<?= $d['id']; ?>">
                            <img src="img/edit.png" alt="Edit">
                            Edit
                        </a>
                        <a href="#" onclick="confirmDelete('<?= $d['judul']; ?>', '<?= $d['id']; ?>')" class="delete">
                            <img src="img/hapus.png" alt="Hapus">
                            Hapus
                        </a>
                    </td>

                    <script>
                        function confirmDelete(judul, id) {
                            if (confirm("Apakah Anda yakin ingin menghapus data karya dengan judul karya " + judul + "?")) {
                                window.location.href = "hapus.php?id=" + id;
                            }
                        }
                    </script>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>