$("#js-search").keyup(function(){
    _this = this;
    $.each($(".js-table tbody tr td"), function() {
        if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
        else
            $(this).show();
    });
});