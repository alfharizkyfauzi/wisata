$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#newMenuModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Add Data');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#newMenuModalLabel').html('Edit Data Menu');
        $('.modal-footer button[type=submit]').html('Edit Data');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/wpu-login/menu/editmenu',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
            }
        });
    });
});