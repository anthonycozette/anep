$(document).ready(function() {
    $('#master2').on('click', function(e) {
        if ($(this).is(':checked', true)) {
            $('.sub_chk2').prop('checked', true);
        } else {
            $('.sub_chk2').prop('checked', false);
        }
    });
});

function myFunction2() {
    var input, filter, table, tr, td, i;

    input = document.getElementById('myInput2');
    filter = input.value.toUpperCase();
    table = document.getElementById('myTable2');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[2];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
}