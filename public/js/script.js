$(function() {

    // Finding Tombol Tambah
    $('.tombolTambahData').on('click', function() {

        // Finding Form Label
        $('#tambahDataMahasiswaLabel').html('Tambah Data Mahasiswa');

        // Finding button
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    // Finding Element 
    $('.tampilModalUbah').on('click', function() {
        
        // Finding Form Label
        $('#tambahDataMahasiswaLabel').html('Ubah Data Mahasiswa');
        
        // Finding button
        $('.modal-footer button[type=submit]').html('Ubah Data');

        // Finding form
        $('.modal-body form').attr('action', 'http://localhost/simple_mvc_with_php/public/mahasiswa/update');

        const id = $(this).data('id');

        // Running Ajax
        $.ajax({
            url: 'http://localhost/simple_mvc_with_php/public/mahasiswa/getDetail', // Url
            data: {id: id}, // Data yang dikirim
            method: 'post', // Method yang dipake
            dataType: 'json', //data yang diharapkan
            success: function(data){ //Kalau berhasil

                // Fill the name
                $('#id').val(data.id);

                // Fill the name
                $('#nama').val(data.nama);

                // Fill the npm
                $('#npm').val(data.npm);

                // Fill the email
                $('#email').val(data.email);

                // Fill the jurusan
                $('#jurusan').val(data.jurusan);
            }

        });

    });

});