if ($("ul.tabs li")) {
    $("ul.tabs li").click(function () {
        let skill = $(this).attr('data-skill');
        $('.tab_container').hide();
        $('.tab_container[data-skill='+skill+']').show();
        $("ul.tabs li").removeClass('active');
        $(this).addClass('active');
    });
    $("ul.tabs li:first-child").trigger('click');
}

