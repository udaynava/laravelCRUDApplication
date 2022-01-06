$(document).ready(function() {

    if ($('#companyTable').length) {
        var table = $('#companyTable').DataTable({
            "pageLength": 50
        });
    }

    $(document).on('click', '#deleteButton', function(){
        if (confirm("Are you sure you want to delete this company?")) {
            var row = $(this).parents('tr'),
                comp_id = $(this).data('comp_id');

            $.ajax({
                url: window.location.href + '/' + comp_id + '/delete',
                type: 'POST',
            }).done(function() {
            table.row(row).remove().draw(false);
            });
        }
    });
});

function addCompany() {
    location.href = window.location.href + '/' + 'add'
}

function addUsersToComp(comp_id) {
    location.href = window.location.href + '/' + 'usersToComp' + '/' + comp_id
}

function editCompany(comp_id) {
    location.href = window.location.href + '/' + comp_id
}