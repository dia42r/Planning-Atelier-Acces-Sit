if ($("ul.tabs li")) {
    $("ul.tabs li").click(function () {
        let skill = $(this).attr('data-skill');
        const $skill = $(this);
        $('.tab_container').hide();
        $('.tab_container[data-skill='+skill+']').show();
        $("ul.tabs li").removeClass('active');
        $(this).addClass('active');
        const $inputskill = document.querySelector('input.skill');
        const data_skill = $skill.attr("data-skill");

        $inputskill.setAttribute("value", data_skill);
    });
    $("ul.tabs li:first-child").trigger('click');
}

