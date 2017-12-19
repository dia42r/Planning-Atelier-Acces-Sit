$('[data-showpass]').on('change', function () {
    const id = $(this).data('showpass');
    $('#' + id).attr('type', this.checked ? 'text' : 'password');
});


