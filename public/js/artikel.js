$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "api/ajaxartikel";

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".data-artikel").append(
                    `
                    <tr>
                    <td>${value.judul}</td>
                    <td>${value.slug}</td>
                    <td>${value.konten}</td>
                    <td>${value.id_user}</td>
                    <td>${value.id_kategori}</td>
                    <td>${value.foto}</td>
                    <td><button class="btn btn-danger btn-sm hapus-data" data-id="${
                        value.id
                    }">Hapus</button></td>
                    </tr>
                    `
                );
            });
        }
    });

    // Simpan Data
    $(".tombol-simpan").click(function(simpan) {
        simpan.preventDefault();
        var judul = $("input[name=judul]").val();
        var konten = $("input[name=konten]").val();
        var id_user = $("input[name=id_user]").val();
        var id_kategori = $("input[name=id_kategori]").val();
        var foto = $("input[name=foto]").val();
        // console.log(nama)
        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "json",
            data: {
                judul: judul,
                konten: konten,
                id_user: id_user,
                id_kategori: id_kategori,
                foto: foto,
                slug: variable_isian_nama
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // Hapus Data
    $(".data-kategori").on("click", ".hapus-data", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });
});
