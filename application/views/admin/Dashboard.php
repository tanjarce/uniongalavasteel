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

<div class="scrim"></div>
<div class="navigation">
    <div class="mainnav">
        <ul class="mainnav__unorderedlist">
            <li class="mainnav__togglebutton"></li>    
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m0.868 11.595v2.222c0 1.436 2.98 2.601 6.651 2.601 3.67 0 6.65-1.165 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.222zm0 3.79v2.223c0 1.436 2.98 2.601 6.651 2.601 3.67 0 6.65-1.165 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.223zm0 3.791v2.223c0 1.435 2.98 2.601 6.651 2.601 3.67 0 6.65-1.166 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.223zm0-9.149c0-1.436 2.98-2.602 6.651-2.602 3.67 0 6.65 1.166 6.65 2.602 0 1.435-2.98 2.601-6.65 2.601-3.671 0-6.651-1.166-6.651-2.601zm8.963-7.426c0 1.436 2.98 2.601 6.65 2.601 3.671 0 6.651-1.165 6.651-2.601 0-1.435-2.98-2.601-6.651-2.601-3.67 0-6.65 1.166-6.65 2.601zm5.367 11.324c0.419 0.032 0.851 0.048 1.293 0.048 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.436-2.98 2.602-6.651 2.602-0.438 0-0.867-0.017-1.283-0.049v-2.601zm0 3.791c0.419 0.032 0.851 0.048 1.293 0.048 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.436-2.98 2.601-6.651 2.601-0.438 0-0.867-0.016-1.283-0.048v-2.601zm0-7.581c0.419 0.031 0.851 0.048 1.293 0.048 3.339 0 6.113-0.942 6.641-2.174v2.174c0 1.435-2.98 2.601-6.651 2.601-0.438 0-0.867-0.017-1.283-0.049v-2.6zm-5.35-3.548c-0.011-0.065-0.017-0.13-0.017-0.195v-2.223c0.475 1.257 3.278 2.223 6.66 2.223 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.435-2.98 2.601-6.651 2.601-0.477 0-0.943-0.02-1.404-0.045-0.451-1.11-2.494-2.017-5.229-2.361z" fill="#888"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Payroll</div>
                    </div>
                </a>
            </li>
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m12 1.131c-5.976 0-10.869 4.893-10.869 10.869s4.893 10.869 10.869 10.869 10.869-4.893 10.869-10.869-4.893-10.869-10.869-10.869zm4.567 15.436-5.65-3.484v-6.524h1.631v5.663l4.893 2.936-0.874 1.409z" fill="#888"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Timesheet</div>
                    </div>                
                </a>
            </li>
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m8.061 9.509c0.071 1.051 0.538 1.995 1.255 2.683-2.089 0.621-3.617 2.558-3.618 4.846v1.043c-1.394-0.082-3-0.341-4.799-0.902l-0.238-0.075-9e-3 -0.054v-3.454c0-2.146 1.595-3.928 3.665-4.214 0.595 0.331 1.281 0.52 2.01 0.52 0.621 0 1.211-0.137 1.734-0.393zm-1.734-0.401c0.651 0 1.257-0.19 1.77-0.514 0.163-1.064 0.734-1.994 1.548-2.627 4e-3 -0.063 0.01-0.124 0.01-0.187 0-1.839-1.491-3.329-3.328-3.329-1.839 0-3.329 1.49-3.329 3.329 0 1.837 1.49 3.328 3.329 3.328zm8.021-3.38c1.049 0.658 1.785 1.772 1.919 3.064 0.428 0.2 0.903 0.315 1.407 0.315 1.838 0 3.328-1.49 3.328-3.328 0-1.839-1.49-3.329-3.328-3.329-1.821 1e-3 -3.298 1.464-3.326 3.278zm1.917 3.917c-0.103 0.996-0.561 1.888-1.247 2.547 2.088 0.621 3.617 2.558 3.617 4.846v1.064c2.767-0.101 4.362-0.886 4.467-0.938l0.222-0.113h0.024v-3.455c0-2.146-1.595-3.927-3.664-4.214-0.595 0.33-1.28 0.519-2.008 0.519-0.497 0-0.974-0.088-1.411-0.256zm-6.107 3.173c-2.07 0.287-3.665 2.068-3.665 4.215v3.454l9e-3 0.054 0.238 0.074c2.242 0.701 4.191 0.935 5.794 0.935 3.133 0 4.948-0.893 5.06-0.95l0.222-0.113h0.024v-3.454c1e-3 -2.147-1.594-3.928-3.663-4.215-0.596 0.331-1.28 0.52-2.01 0.52-0.729 0-1.414-0.189-2.009-0.52zm2.009-0.274c1.839 0 3.329-1.491 3.329-3.329s-1.49-3.328-3.329-3.328c-1.838 0-3.329 1.49-3.329 3.328 0 1.839 1.491 3.329 3.329 3.329z" fill="#888"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Employees</div>
                    </div>             
                </a>
            </li>
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m21.095 16.583v-15.256h-2.505v15.256c-1.13 0.486-1.921 1.609-1.921 2.916 0 1.752 1.422 3.174 3.173 3.174 1.752 0 3.174-1.422 3.174-3.174 0-1.307-0.791-2.43-1.921-2.916zm-2.505 2.916c0-0.691 0.561-1.253 1.252-1.253 0.692 0 1.253 0.562 1.253 1.253 0 0.692-0.561 1.253-1.253 1.253-0.691 0-1.252-0.561-1.252-1.253zm-13.18-12.082v15.256h-2.505v-15.256c-1.13-0.486-1.921-1.609-1.921-2.916 0-1.752 1.422-3.174 3.174-3.174 1.751 0 3.173 1.422 3.173 3.174 0 1.307-0.791 2.43-1.921 2.916zm-2.505-2.916c0-0.692 0.561-1.253 1.253-1.253 0.691 0 1.252 0.561 1.252 1.253 0 0.691-0.561 1.253-1.252 1.253-0.692 0-1.253-0.562-1.253-1.253zm10.348 4.787v-7.961h-2.506v7.961c-1.129 0.486-1.921 1.609-1.921 2.916s0.792 2.431 1.921 2.917v7.552h2.506v-7.552c1.129-0.486 1.921-1.61 1.921-2.917s-0.792-2.43-1.921-2.916zm-2.506 2.712c0-0.691 0.561-1.253 1.253-1.253 0.691 0 1.253 0.562 1.253 1.253 0 0.692-0.562 1.253-1.253 1.253-0.692 0-1.253-0.561-1.253-1.253z" fill="#888"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Setup</div>
                    </div>             
                </a>
            </li>
        </ul>
    </div>
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