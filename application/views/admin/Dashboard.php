<?php echo $this->session->userdata('emp_firstname').' '.$this->session->userdata('emp_lastname'); ?>
<!-- <div class="nav">
    <?php
    //  echo $this->session->userdata('role_id');
    //  echo $this->session->userdata('emp_id');
    $username = $this->session->userdata('user_name');
    $firstname = $this->session->userdata('emp_firstName');
    // echo $firstname;
    $lastname = $this->session->userdata('emp_lastName');
    $fullname = $firstname . " " . $lastname; 
    ?>
    <a class="logo" href="<?php echo base_url(); ?>">
        <span class="logo-icon"></span>
        <span class="logo-text"></span>
    </a>
    <div class="menu">
        <div class="bar one"></div>
        <div class="bar two"></div>
        <div class="bar three"></div>
    </div>
    <div class="main-nav">
        <a href="<?php echo base_url(); ?>Employee">Employee</a>
        <a href="<?php echo base_url(); ?>Setup">Setting</a>
        <a href="<?php echo base_url(); ?>login/logout" class="user_logout">Logout</a>
    </div>
</div> -->

<div class="head">
    <div class="header">
        <div class="header__menu menu">
            <div class="menu__lineContainer">
                <div class="menu__line"></div>
                <div class="menu__line"></div>
                <div class="menu__line"></div>
            </div>
        </div>
        <div class="header__logo">
            <img class="header__logoPic" src="<?php echo base_url() ?>/assets/images/logopic.png" alt="">
            <img class="header__logoText" src="<?php echo base_url() ?>/assets/images/logotext.png" alt="">
        </div>
        <div class="header__user user">
            <div class="user__avatar"></div>
            <div class="user__dropdown dropdown">
                <ul class="dropdown__unorderedlist">
                    <li class="dropdown__list listName">
                        <div class="dropdown__name">
                            <span class="fullname"><?php echo $fullname?></span>
                            <span class="username">@<?php echo $username ?></span>
                        </div>
                    </li>
                    <li class="dropdown__separator"></li>
                    <li class="dropdown__list">
                        <a class="dropdown__anchor"href="#">Account Settings</a>
                    </li>
                    <li class="dropdown__list">
                        <a class="dropdown__anchor"href="<?php echo base_url(); ?>login/logout">Log Out</a>
                    </li>
                    <li class="dropdown__separator"></li>
                    <li class="dropdown__list">
                        <a id="nightmode_toggle" class="dropdown__anchor"href="#">Night Mode</a>
                    </li>
                </ul>
            </div>
            <!-- <span></span> -->
        </div>
    </div>
</div>

<div class="navigation">
    <ul>
        <li>Payroll</li>
        <li>Timesheet</li>
        <li>Employee</li>
        <li>Setup</li>
    </ul>
</div>


<script src="<?php echo base_url() ?>assets/js/jquery.js"></script> 
<script src="<?php echo base_url() ?>assets/js/outclick.min.js"></script> 
<script>
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
            // alert("hi");
            $(".user__dropdown").removeClass("dropdown-show");
        })
        $(".header__menu").click(()=>{
            $(".navigation").toggleClass("navigation-show");
        })
        $(".navigation").outclick(()=>{
            $(".navigation").removeClass("navigation-show");

        })

        $("#nightmode_toggle").click((e)=>{
            e.preventDefault();
            const link = $('link[rel="stylesheet"]');
            if(link.attr('nm') === "1"){
                link.attr('href', base_url()+"/assets/css/style.css");
                link.attr('nm', "0");
                pass_mode(0);
            }
            else if(link.attr('nm') === "0"){
                link.attr('href', base_url()+"/assets/css/style_nightmode.css");
                link.attr('nm', "1");
                pass_mode(1);
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
                    alert('request failed');
                }
            });
        }

    })
</script>