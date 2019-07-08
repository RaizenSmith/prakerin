$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "api/siswa";

    // Get Data Siswa
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            console.log(berhasil);
            $.each(berhasil.data, function(key, value) {
                $(".data-siswa").append(
                    `
                    <li>${value.nama}</li>
                    `
                );
            });
        }
    });

    // Simpan Data
    $(".tombol-simpan").click(function(simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=namasiswa]").val();
        // console.log(nama)
        $.ajax({
            url: alamat,
            method: "POST",
            dataType: "json",
            data: {
                namasiswa: variable_isian_nama
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
