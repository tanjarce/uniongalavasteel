</div>
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script> 
<script src="<?php echo base_url() ?>assets/js/outclick.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/functions.js"></script> 
<script src="<?php echo base_url() ?>assets/js/jquery.pjax.js"></script> 
<script>
$(document).ready(function(){
    if ($.support.pjax) {
        // console.log('pjax active')
        $(document).pjax('[mainnav] a, a[mainnav]', '#maincontainer', {
            "target": $(document).on('pjax:send', function() {
                NProgress.configure({ minimum: 0.7 });
                NProgress.configure({ showSpinner: false });
                NProgress.configure({ easing: 'ease', speed: 2000 });
                // NProgress.configure({ trickleSpeed: 100 });
                NProgress.start(); 
                NProgress.configure({ easing: 'ease', speed: 100 });
            }),
            "target": $(document).on('pjax:complete', function() { 
                NProgress.done(); 
            }),
            "target":  $(document).on('pjax:timeout', function(event) { event.preventDefault(); }),
            "target": $(document).on('pjax:end', function(){  
                var link = window.location.pathname.split("/").pop();
                if ( link == '' ) {
                    link = 'Main';
                }
                // alert("#"+link+"-mainnav")
                var target = $("#"+link+"-mainnav");
                // Add active class to target link
                $(".mainnav__container_item").removeClass("mainnavItem-active");
                target.find('.mainnavItem').addClass('mainnavItem-active');
            }),
        })
    }
});
</script>
</body>
</html>