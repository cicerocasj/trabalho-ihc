$('#home').on('swiperight', function(){
    $("#navpanel-left").panel("open");
});
$('#home').on('swipeleft', function(){
    //if ($('#navpanel').panel().attr('class').indexOf('ui-panel-open') == -1) {
        $("#navpanel").panel("open");
    //}
});
