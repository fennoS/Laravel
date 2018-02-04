$(function () {
    $('input.rememberMeBox').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
    });
});

$(function () {
    $('#DataTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "columnDefs": [
            {orderable: false, targets: 'noSort'},
            {type: 'date-eu', targets: 'dateSort'}
        ],
        "aaSorting": []
    });
});