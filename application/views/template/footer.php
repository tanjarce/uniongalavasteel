</div>
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script> 
<script src="<?php echo base_url() ?>assets/js/outclick.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/functions.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.pjax.js"></script> 
<script>
    // $(".mainnav__anchor").click(function(e){
    //     e.preventDefault();
    //     const page = $(this).attr("id");
    //     const href = $(this).attr("href");
    //     $(".mainnav__container_item").removeClass("mainnavItem-active");
    //     $(this).find('.mainnavItem').addClass("mainnavItem-active");
    //     // console.log(href + " " + page);
    //     history.pushState(page, null, href);
        
    //     // console.log(base_url() + "/"+ page +"/"+ page +"_view")
    //     getpage(page);
    // })

    // function getpage(p){
    //     $.ajax({
    //         type: "GET",
    //         url: base_url() + "/"+ p +"/"+ p +"_view",
    //         success: function(data){
    //             $(".main").html(data);
    //         },
    //         error: function(xhr, textStatus, errorThrown){
    //             window.location.reload(true);
    //         }
    //     })
    // }

    // window.addEventListener('popstate', function(e) {
    //     // console.log(e.state);
    //     var page = e.state;

    //     if (page == null) {
    //         // removeCurrentClass();
    //         // textWrapper.innerHTML = " ";
    //         // content.innerHTML = " ";
    //         // document.title = defaultTitle;
    //     } else {
    //         // updateText(character);
    //         getpage(page);
    //         // addCurrentClass(character);
    //         // document.title = "Ghostbuster | " + character;

    //     }
    // });


</script>
</body>
</html>