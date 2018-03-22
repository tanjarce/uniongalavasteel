

$(document).ready(()=>{
    // kunin ang baseUrl
    function base_url() {
        var pathparts = location.pathname.split('/');
        if (location.host == 'localhost') {
            var url = location.origin+'/'+pathparts[1].trim('/')+'/'; 
        }else{
            var url = location.origin;
        }
        return url;
    }
    // animations
    setTimeout(() => {
        logo_animation()
    }, 250);
    
    function logo_animation(){
        $(".logo_piece").each(function(n){
            setTimeout(() => {
                $(".logo_piece").eq(n).css({
                    'transform': 'translateX(-'+ n*8 +'px)',
                    'opacity': 1
                })
                
            }, 250 * (n+1))
            if(n >= 4){
                setTimeout(()=>{
                    $(".piece").css({
                        'transition': 'all 0.2s ease-in-out',
                        'transform': 'translateX(0.5px)',
                    })
                    $(".logo__text").css({'transition': 'all 0.2s ease-in-out'}).addClass('logo__text-isup')
                    // $('#input_user').focus();
                }, 370 * (n+1))
            }
            
        })
    }
    
    $('.loginForm__input').focus(function(){
        var error = $(this).attr('error');
        $(this).siblings('.loginForm__placeholder').addClass('loginForm__placeholder-isup')
        if(error === 'error'){
            $(this).siblings('.loginForm__placeholder').css({'color': 'rgb(230, 28, 47)'});
        }
        else{
            $(this).siblings('.loginForm__placeholder').css({'color': 'rgb(0, 95, 39)'});
        }
    })
    
    $('.loginForm__input').blur(function(){
        var error = $(this).attr('error');
        if($(this).val().trim() !== ""){
            $(this).siblings('.loginForm__placeholder').css({'color': 'rgb(180, 180, 180)'})
        }
        else{
            $(this).siblings('.loginForm__placeholder').removeClass('loginForm__placeholder-isup').css({'color': 'rgb(180, 180, 180)'})
        }
    })
    function add_loading(){
        $('#login_container').append('<div class="loading"><div class="loading__bar"></div></div>')
    }
    function remove_loading(){
        $('.loading').remove();
    }

    $('#signin_btn').on('click', (e)=>{
        e.preventDefault();
        // console.log('hi');
        $('.loginForm__input').attr('error', '');
        $('.loginForm__underline').removeClass('loginForm__underline-error');
        $('.loginForm__errormessage').text("");
        let error = false;
        $('.loginForm__input').each((n)=>{
            if($('.loginForm__input').eq(n).val().trim() === ""){
                error = true;
                let input = $('.loginForm__input').eq(n).attr('name');
                $('.loginForm__input').eq(n).attr('error', 'error');
                $('.loginForm__input').eq(n).siblings('.loginForm__underline').addClass('loginForm__underline-error');
                $('.loginForm__input').eq(n).siblings('.loginForm__errormessage').text("Please enter a "+ input);
                
                if($('.loginForm__input').eq(n).is(':focus')){
                    if($('.loginForm__input').eq(n).attr('error') === 'error'){
                        $('.loginForm__input').eq(n).siblings('.loginForm__placeholder').css({'color': 'rgb(230, 28, 47)'});
                    }
                    else{
                        $('.loginForm__input').eq(n).siblings('.loginForm__placeholder').css({'color': 'rgb(180, 180, 180)'});
                    }
                }
            }
            else{
                if($('.loginForm__input').eq(n).is(':focus')){
                    if($('.loginForm__input').eq(n).attr('error') === 'error'){
                        $('.loginForm__input').eq(n).siblings('.loginForm__placeholder').css({'color': 'rgb(230, 28, 47)'});
                    }
                    else{
                        $('.loginForm__input').eq(n).siblings('.loginForm__placeholder').css({'color': 'rgb(0, 95, 39)'});
                    }
                }
                else{
                    if($('.loginForm__input').eq(n).attr('error') === 'error'){
                        $('.loginForm__input').eq(n).siblings('.loginForm__placeholder').css({'color': 'rgb(230, 28, 47)'});
                    }
                    else{
                        $('.loginForm__input').eq(n).siblings('.loginForm__placeholder').css({'color': 'rgb(180, 180, 180)'});
                    }
                }                    
            }
        });
        
        if(error === false){
            login();
        }
    })
    
    function login(){
        let input_user = $('#input_user').val();
        let input_pass = $('#input_pass').val();
        let input_submit = $('#signin_btn').val();
        add_loading();
        $.ajax({
            type: 'POST',
            url: base_url() + "/login/login_validation",
            data: {user: input_user, pass: input_pass, signin: input_submit},
            success: function(data){
                console.log(data);
                if(data === 'failed'){
                    $('.loginForm__input').attr('error', 'error');
                    $('.loginForm__underline').addClass('loginForm__underline-error');
                    $('.loginForm__errormessage').eq(0).text("Invalid username and password combination");
                    $('.loginForm__input').eq(1).blur().val('');   
                    $('.loginForm__input').eq(0).focus();
                    remove_loading();
                }
                else{
                    // console.log('success');
                    // alert(base_url());
                    window.location.replace(base_url());
                    // remove_loading();
                }
                
            }
        })
    }


    
    
    $('#input_user').focus();
})