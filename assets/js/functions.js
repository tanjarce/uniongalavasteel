function base_url() {
    var pathparts = location.pathname.split('/');
    if (location.host == 'localhost') {
        var url = location.origin+'/'+pathparts[1].trim('/')+'/'; 
    }else{
        var url = location.origin;
    }
    return url;
}
$(document).ready(()=>{
    $('.user__avatar').on('click',(e)=>{
        e.stopPropagation();
            $(".user__dropdown").toggleClass("dropdown-show");
    })
    $('.header__user').outclick(()=>{
        $(".user__dropdown").removeClass("dropdown-show");
    })
    
    // menu sa header toggle
    $(".header__menu").click(()=>{
        $(".navigation").removeClass("navigation-show")
        $(".navigation").removeClass("navigation-pinside");
        let position = $(".navigation").css("left");
        if(position === "0px"){
            $(".navigation").addClass("navigation-hide").remove("navigation-show");
        }
        else{
            $(".navigation").addClass("navigation-show").removeClass("navigation-hide");
        }
    })
    // tago pag pindot sa labas
    $(".navigation").outclick(()=>{
        $(".navigation").removeClass("navigation-show");
    })
    // eto yung nasa nav na pangtago ng nav
    $("#mainNav_toggle").click(()=>{
        $(".navigation").removeClass("navigation-show");
    });
    // toggle label
    $("#mainNav_toggleLabel").click(()=>{
        $(".navigation").toggleClass("navigation-showlabel");
    })
    // tago label pag pindot sa labas
    $("#mainNav_toggleLabel").outclick(()=>{
        $(".navigation").removeClass("navigation-showlabel");
    })
    
    $("#nightmode_toggle").click((e)=>{
        e.preventDefault();
        const link = $('link[id="theme"]');
        if(link.attr('nm') === "1"){
            link.attr('href', base_url()+"/assets/css/theme.css");
            link.attr('nm', "0");
            pass_mode(0);
            $("#nightmode-switch").removeClass("listItem__nightmode_switch-on").addClass("listItem__nightmode_switch-off");
            // $("#switch-controller").removeClass("switch__controller-right").addClass("switch__controller-left");
        }
        else if(link.attr('nm') === "0"){
            link.attr('href', base_url()+"/assets/css/theme-dark.css");
            link.attr('nm', "1");
            pass_mode(1);
            $("#nightmode-switch").removeClass("listItem__nightmode_switch-off").addClass("listItem__nightmode_switch-on");
            // $("#switch-controller").removeClass("switch__controller-left").addClass("switch__controller-right");
        }
    
    })
    function pass_mode(set_mode){
        $.ajax({
            type: 'POST',
            url: base_url() + "/main/set_mode",
            data: {'mode': set_mode},
            success: function(data){
                // console.log(data);
            },
            error: function(xhr, textStatus, errorThrown){
                window.location.reload(true);
            }
        });
    }

    
    $(".mainnav__anchor").click(function(e){
        e.preventDefault();
        $(".mainnav__container_item").removeClass("mainnavItem-active");
        $(this).find('.mainnavItem').addClass("mainnavItem-active");

    })
})