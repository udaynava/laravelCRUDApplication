$(document).ready(function() {

    if ($('#userTable').length) {
        var table = $('#userTable').DataTable({
            "pageLength": 50
        });
    }

    $(document).on('click', '#deleteButton', function(){
        if (confirm("Are you sure you want to delete this user?")) {
            var row = $(this).parents('tr'),
                user_id = $(this).data('user_id');
            console.log("Delete button clicked");

            $.ajax({
                url: window.location.href + '/' + user_id + '/delete',
                type: 'POST',
            }).done(function() {
            table.row(row).remove().draw(false);
            });
        }
    });
});

function addUser() {
    location.href = window.location.href + '/' + 'add'
}

function editUser(uid) {
    console.log("Edit user called");
    location.href = window.location.href + '/' + uid
}