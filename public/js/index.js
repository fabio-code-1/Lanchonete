$(document).ready(function() {
    if (sessionStorage.getItem('modalOpened') == 'true') {
        $('#exampleModal').modal('show');
    }

    $('.link-card').click(function() {
        sessionStorage.setItem('modalOpened', 'true');
    });

    $('.close').click(function() {
        sessionStorage.setItem('modalOpened', 'false');
    });

    $('.modal').on('hidden.bs.modal', function () {
        sessionStorage.setItem('modalOpened', 'false');
    });
});
