$("#menu-vertical nav ul li span").hide();
TriggerClick = 0;
$('#menu-vertical').click(function(){
    //alert("alo");
    if(TriggerClick==0){
        TriggerClick=1;

        //$('#left-menu').show();
        //$('#menu-vertical').animate({width:'25%'}, 2);
        $('#menu-vertical').addClass('open-menu-vertical');

        $(window).resize(function() {
            $('#body').height($(window).height());
        });
        $(window).trigger('resize');
    }else{
        TriggerClick=0;
        $('#menu-vertical').removeClass('open-menu-vertical');
        //$('#content-wrapper').animate({marginLeft:'0%'}, 200);
        $(window).resize(function() {
            $('#body').height('auto');
        });
        $(window).trigger('resize');
    };

    return false;
});
