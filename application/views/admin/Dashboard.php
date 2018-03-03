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

        $set_mode = $this->session->userdata('mode'); 
        if($set_mode == 1){
            $switch = "listItem__nightmode_switch-on";
        }
        if($set_mode == 0){
            $switch = "listItem__nightmode_switch-off";
        }


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
            <div class="header__logoPic">
                <svg viewBox="0 0 50 21.121" style="height: 100%; width: 100%">
                    <g>
                        <path d="m11.284 0-6.848 21.121h-4.436l6.849-21.121h4.435z" class="ugs_red_icon"/>
                        <path d="m16.797 0-6.849 21.121h-4.324l6.867-21.121h4.306z" class="ugs_red_icon"/>
                        <path d="m22.309 0-6.849 21.121h-4.324l6.867-21.121h4.306z" class="ugs_red_icon"/>
                        <path d="m27.803 0-6.83 21.121h-4.325l6.867-21.121h4.288z" class="ugs_red_icon"/>
                        <path d="m50 0-6.867 21.121h-20.991l6.867-21.121h20.991z" class="ugs_green_icon"/>
                    </g>
                </svg>
            </div>
            <!-- <img class="header__logoPic" src="<?php echo base_url() ?>/assets/images/logopic.png" alt=""> -->
            <!-- <img class="header__logoText" src="<?php echo base_url() ?>/assets/images/logotext.png" alt=""> -->
        </div>
        <div class="header__user user">
            <div class="user__avatar"></div>
            <div class="user__dropdown dropdown">
                <ul class="dropdown__unorderedlist">
                    <li class="dropdown__list_name">
                        <div class="dropdown__name">
                            <span class="fullname"><?php echo $fullname?></span>
                            <span class="username">@<?php echo $username ?></span>
                        </div>
                    </li>
                    <li class="dropdown__separator"></li>
                    <li class="dropdown__list">
                        <a class="dropdown__anchor"href="#">
                            <div class="dropdown__containerlist_item listItem">
                                <div class="listItem__icon">
                                    <svg viewBox="0 0 24 24">
                                        <g>
                                            <path d="m20.921 13.176c0.048-0.384 0.084-0.768 0.084-1.176s-0.036-0.792-0.084-1.176l2.52-1.98c0.24-0.18 0.3-0.504 0.156-0.768l-2.4-4.152c-0.144-0.264-0.48-0.36-0.72-0.264l-3 1.2c-0.624-0.48-1.296-0.876-2.04-1.176l-0.444-3.18c-0.072-0.288-0.324-0.504-0.6-0.504h-4.8c-0.324 0-0.576 0.216-0.6 0.504l-0.48 3.18c-0.72 0.3-1.404 0.72-2.04 1.176l-2.976-1.2c-0.276-0.12-0.6 0-0.72 0.264l-2.4 4.152c-0.168 0.264-0.096 0.6 0.12 0.768l2.544 1.98c-0.048 0.384-0.084 0.78-0.084 1.176s0.024 0.792 0.072 1.176l-2.52 1.98c-0.24 0.18-0.3 0.504-0.156 0.768l2.4 4.152c0.144 0.264 0.48 0.36 0.72 0.264l3-1.2c0.624 0.48 1.296 0.876 2.04 1.176l0.444 3.18c0.048 0.288 0.3 0.504 0.6 0.504h4.8c0.3 0 0.552-0.216 0.6-0.504l0.444-3.18c0.72-0.3 1.404-0.72 2.04-1.176l2.976 1.2c0.276 0.12 0.6 0 0.72-0.264l2.4-4.152c0.156-0.264 0.096-0.6-0.12-0.768l-2.544-1.98h0.048zm-8.916 3.024c-2.316 0-4.2-1.884-4.2-4.2s1.884-4.2 4.2-4.2 4.2 1.884 4.2 4.2-1.884 4.2-4.2 4.2z" fill="#888"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="listItem__string">Account Settings</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown__list">
                        <a class="dropdown__anchor"href="<?php echo base_url(); ?>login/logout">
                            <div class="dropdown__containerlist_item listItem">
                                <div class="listItem__icon">
                                    <svg viewBox="0 0 24 24">
                                        <g>
                                            <path d="m9.453 16.787 1.88 1.88 6.667-6.667-6.667-6.667-1.88 1.88 3.44 3.454h-12.893v2.666h12.893l-3.44 3.454zm11.88-16.787h-18.666c-1.48 0-2.667 1.2-2.667 2.667v5.333h2.667v-5.333h18.666v18.666h-18.666v-5.333h-2.667v5.333c0 1.467 1.187 2.667 2.667 2.667h18.666c1.467 0 2.667-1.2 2.667-2.667v-18.666c0-1.467-1.2-2.667-2.667-2.667z" fill="#888"/>
                                        </g>
                                    </svg>

                                </div>
                                <div class="listItem__string">Log out</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown__separator"></li>
                    <li class="dropdown__list">
                        <a id="nightmode_toggle" class="dropdown__anchor" href="#">
                            <div class="dropdown__containerlist_item listItem">
                                <div class="listItem__icon">
                                    <svg viewBox="0 0 24 24" height="100%" width="100%">
                                        <g>
                                            <path d="m14.759 0.258c-0.784-0.173-1.599-0.258-2.434-0.258-6.623 0-12 5.377-12 12s5.377 12 12 12c5.262 0 9.737-3.394 11.35-8.111-1.293 0.705-2.774 1.111-4.35 1.111-4.967 0-9-4.033-9-9 0-3.298 1.778-6.184 4.434-7.742z" fill="#888"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="listItem__string">Night mode</div>
                                <div id="nightmode-switch" class="listItem__nightmode_switch <?php echo $switch?>">
                                    <div class="switch__controller"></div>
                                </div>     
                            </div>
                        </a>
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
                $("#nightmode-switch").removeClass("listItem__nightmode_switch-on").addClass("listItem__nightmode_switch-off");
                // $("#switch-controller").removeClass("switch__controller-right").addClass("switch__controller-left");
            }
            else if(link.attr('nm') === "0"){
                link.attr('href', base_url()+"/assets/css/style_nightmode.css");
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
                    alert('request failed');
                }
            });
        }

    })
</script>