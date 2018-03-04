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
                <svg viewBox="0 0 24 24" style="height: 100%; width: 100%">
                    <g>
                        <path d="m1.071 19.501h21.858v-2.429h-21.858v2.429zm0-6.287h21.858v-2.428h-21.858v2.428zm0-8.715v2.429h21.858v-2.429h-21.858z" class="menu_icon"/>
                    </g>
                </svg>
            </div>
        </div>

       
        <div class="header__logo">
            <div class="header__logoPic">
                <svg viewBox="0 0 50 20" style="height: 100%; width: 100%">
                    <g>
                        <path d="m12.633 0.479-6.174 19.042h-4l6.175-19.042h3.999zm4.97 0-6.175 19.042h-3.898l6.191-19.042h3.882zm4.97 0-6.175 19.042h-3.898l6.191-19.042h3.882zm4.953 0-6.158 19.042h-3.899l6.191-19.042h3.866z" class="ugs_red_icon"/>
                        <path d="m47.539 0.479-6.191 19.042h-18.926l6.192-19.042h18.925z" class="ugs_green_icon"/>
                    </g>
                </svg>
            </div>
            <!-- <div class="header__logoText">
                <svg viewBox="0 0 240.66 20" style="height: 100%; width: 100%">
                    <g fill-rule="evenodd">
                        <path d="m0 0.012h3.371v14.538q0.555 2.237 2.374 2.237t7.739 0v-16.775h3.371v17.698q-0.418 2.266-3.371 2.266-2.952 0-7.5 0-5.984-0.463-5.984-5.426t0-14.538zm20.279 19.964v-17.592q0.549-2.419 3.348-2.372t5.219 0q8.018-0.285 8.018 6.215t0 13.749h-3.369v-13.844q0.095-3.131-2.419-3.131-2.515 0-7.449 0v16.975h-3.348zm47.03 0.012v-17.592q0.548-2.42 3.348-2.372 2.799 0.047 5.218 0 8.018-0.285 8.018 6.215t0 13.749h-3.368v-13.844q0.095-3.131-2.42-3.131-2.514 0-7.448 0v16.975h-3.348zm-26.744-19.976h3.034v19.964h-3.034v-19.964zm6.686 6.405q0.45-6.405 5.731-6.405t5.169 0q5.45 0.787 5.45 6.405t0 6.967q0.224 6.592-6.349 6.592-6.574 0-4.888 0-5.113-1.142-5.113-6.592t0-6.967zm3.259 7.304v-8.147q0.168-2.562 2.697-2.573 2.528-0.011 4.944 0 2.247 0.326 2.247 2.573 0 2.248 0 8.147 0.337 3.066-2.809 3.066t-4.326 0q-2.753-0.088-2.753-3.066z" class="ugs_icon"/>
                        <path d="m100.35 2.384v-2.36h-9.18q-4.201 0.3-4.201 6.108t0 8.418q-0.052 5.426 4.201 5.426t6.276 0.012q4.097-0.528 4.097-4.677t0-6.69h-7.417v2.334h5.135v4.045q0.207 2.71-2.697 2.71t-5.394 0q-1.711-0.272-1.711-1.984 0-1.711 0-11.721 0.311-1.609 2.437-1.609 2.127 0 8.454-0.012zm1.193 17.592 6.327-17.58q0.882-2.384 1.971-2.384t3.734 0.012l7.261 19.964-2.749-0.012-2.075-5.426h-10.009l-1.815 5.438-2.645-0.012zm5.393-7.725 3.371-9.855h1.401l3.423 9.855h-8.195zm38.043 7.737 6.328-17.58q0.881-2.384 1.97-2.384t3.734 0.012l7.261 19.964-2.749-0.012-2.074-5.426h-10.01l-1.815 5.438-2.645-0.012zm5.394-7.725 3.371-9.855h1.4l3.423 9.855h-8.194zm-29.537-12.251 2.748 0.012v14.526q-0.311 3.16 2.438 3.16t7.987 0v2.266h-8.091q-5.082-0.016-5.082-5.426t0-14.538zm106.64 0.024 2.749 0.012v14.526q-0.312 3.16 2.437 3.16t7.987 0v2.266h-8.091q-5.082-0.016-5.082-5.426t0-14.538zm-96.06-0.024 2.59 0.012 5.673 16.206 5.789-16.206h2.828l-7.114 19.964h-2.829l-6.937-19.976zm47.749 0v2.396l-7.978-0.024q-3.315-0.228-3.315 1.621 0 1.85 0 1.569-0.113 1.686 0.786 2.023t8.54 2.697q2.697 0.737 2.697 1.969 0 1.233 0 3.143-0.674 4.57-4.326 4.57t-9.945 0v-2.266h10.675q1.405-0.397 1.405-3.148 0.143-2.016-0.936-2.299-1.08-0.282-8.896-2.808-2.248-0.615-2.248-3.038t0-2.727q0.734-3.678 3.882-3.678 3.147 0 9.659 0zm2.398 0v2.396l6.07-0.012v17.604h2.186v-17.592h6.135v-2.372l-14.391-0.024zm28.835 0v2.396h-8.218q-2.849-0.202-2.849 2.614 0 2.815 0 3.896h9.987v2.037h-9.987v4.045q0.016 2.71 2.595 2.71t8.472 0v2.266h-8.644q-4.747-0.548-4.747-5.426 0-4.879 0-8.976-0.107-5.562 5.627-5.562t7.764 0zm15.25 0.024v2.396h-8.219q-2.848-0.202-2.848 2.613 0 2.816 0 3.897h9.986v2.037h-9.986v4.045q0.016 2.71 2.594 2.71 2.579 0 8.473 0v2.266h-8.644q-4.748-0.548-4.748-5.426 0-4.879 0-8.976-0.106-5.562 5.628-5.562t7.764 0z" class="ugs_green_icon"/>
                    </g>
                </svg>
            </div> -->
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
                                            <path d="m20.921 13.176c0.048-0.384 0.084-0.768 0.084-1.176s-0.036-0.792-0.084-1.176l2.52-1.98c0.24-0.18 0.3-0.504 0.156-0.768l-2.4-4.152c-0.144-0.264-0.48-0.36-0.72-0.264l-3 1.2c-0.624-0.48-1.296-0.876-2.04-1.176l-0.444-3.18c-0.072-0.288-0.324-0.504-0.6-0.504h-4.8c-0.324 0-0.576 0.216-0.6 0.504l-0.48 3.18c-0.72 0.3-1.404 0.72-2.04 1.176l-2.976-1.2c-0.276-0.12-0.6 0-0.72 0.264l-2.4 4.152c-0.168 0.264-0.096 0.6 0.12 0.768l2.544 1.98c-0.048 0.384-0.084 0.78-0.084 1.176s0.024 0.792 0.072 1.176l-2.52 1.98c-0.24 0.18-0.3 0.504-0.156 0.768l2.4 4.152c0.144 0.264 0.48 0.36 0.72 0.264l3-1.2c0.624 0.48 1.296 0.876 2.04 1.176l0.444 3.18c0.048 0.288 0.3 0.504 0.6 0.504h4.8c0.3 0 0.552-0.216 0.6-0.504l0.444-3.18c0.72-0.3 1.404-0.72 2.04-1.176l2.976 1.2c0.276 0.12 0.6 0 0.72-0.264l2.4-4.152c0.156-0.264 0.096-0.6-0.12-0.768l-2.544-1.98h0.048zm-8.916 3.024c-2.316 0-4.2-1.884-4.2-4.2s1.884-4.2 4.2-4.2 4.2 1.884 4.2 4.2-1.884 4.2-4.2 4.2z" class="ugs_icon"/>
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
                                            <path d="m9.453 16.787 1.88 1.88 6.667-6.667-6.667-6.667-1.88 1.88 3.44 3.454h-12.893v2.666h12.893l-3.44 3.454zm11.88-16.787h-18.666c-1.48 0-2.667 1.2-2.667 2.667v5.333h2.667v-5.333h18.666v18.666h-18.666v-5.333h-2.667v5.333c0 1.467 1.187 2.667 2.667 2.667h18.666c1.467 0 2.667-1.2 2.667-2.667v-18.666c0-1.467-1.2-2.667-2.667-2.667z" class="ugs_icon"/>
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
                                            <path d="m14.759 0.258c-0.784-0.173-1.599-0.258-2.434-0.258-6.623 0-12 5.377-12 12s5.377 12 12 12c5.262 0 9.737-3.394 11.35-8.111-1.293 0.705-2.774 1.111-4.35 1.111-4.967 0-9-4.033-9-9 0-3.298 1.778-6.184 4.434-7.742z" class="ugs_icon"/>
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
            <li class="mainnav__topList">
                <div id="mainNav_toggle" class="mainnav__togglebutton">
                    <svg viewBox="0 0 24 24">
                        <g>
                            <path d="m0.89 12.023 6.189-7.935v15.87l-6.189-7.935zm10.091-5.095h11.948v-2.429h-11.948v2.429zm0 6.286h11.948v-2.428h-11.948v2.428zm0 6.287h11.948v-2.429h-11.948v2.429z" class="menu_icon"/>
                        </g>
                    </svg>
                </div>
                <div id="mainNav_toggleLabel" class="mainnav__togglebuttonLabel">
                    <svg viewBox="0 0 24 24" style="height: 100%; width: 100%">
                        <g>
                            <path d="m7.487 19.501h15.488v-2.429h-15.488v2.429zm0-6.287h15.488v-2.428h-15.488v2.428zm0-8.715v2.429h15.488v-2.429h-15.488zm-6.353 15.002h2.905v-2.429h-2.905v2.429zm0-6.287h2.905v-2.428h-2.905v2.428zm0-8.715v2.429h2.905v-2.429h-2.905z" class="menu_icon"/>
                        </g>
                    </svg>
                </div>
            </li>    
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem mainnavItem-active">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m0.868 11.595v2.222c0 1.436 2.98 2.601 6.651 2.601 3.67 0 6.65-1.165 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.222zm0 3.79v2.223c0 1.436 2.98 2.601 6.651 2.601 3.67 0 6.65-1.165 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.223zm0 3.791v2.223c0 1.435 2.98 2.601 6.651 2.601 3.67 0 6.65-1.166 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.223zm0-9.149c0-1.436 2.98-2.602 6.651-2.602 3.67 0 6.65 1.166 6.65 2.602 0 1.435-2.98 2.601-6.65 2.601-3.671 0-6.651-1.166-6.651-2.601zm8.963-7.426c0 1.436 2.98 2.601 6.65 2.601 3.671 0 6.651-1.165 6.651-2.601 0-1.435-2.98-2.601-6.651-2.601-3.67 0-6.65 1.166-6.65 2.601zm5.367 11.324c0.419 0.032 0.851 0.048 1.293 0.048 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.436-2.98 2.602-6.651 2.602-0.438 0-0.867-0.017-1.283-0.049v-2.601zm0 3.791c0.419 0.032 0.851 0.048 1.293 0.048 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.436-2.98 2.601-6.651 2.601-0.438 0-0.867-0.016-1.283-0.048v-2.601zm0-7.581c0.419 0.031 0.851 0.048 1.293 0.048 3.339 0 6.113-0.942 6.641-2.174v2.174c0 1.435-2.98 2.601-6.651 2.601-0.438 0-0.867-0.017-1.283-0.049v-2.6zm-5.35-3.548c-0.011-0.065-0.017-0.13-0.017-0.195v-2.223c0.475 1.257 3.278 2.223 6.66 2.223 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.435-2.98 2.601-6.651 2.601-0.477 0-0.943-0.02-1.404-0.045-0.451-1.11-2.494-2.017-5.229-2.361z" class="ugs_icon"/>
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
                                    <path d="m12 1.131c-5.976 0-10.869 4.893-10.869 10.869s4.893 10.869 10.869 10.869 10.869-4.893 10.869-10.869-4.893-10.869-10.869-10.869zm4.567 15.436-5.65-3.484v-6.524h1.631v5.663l4.893 2.936-0.874 1.409z" class="ugs_icon"/>
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
                                    <path d="m16.864 8.895c-0.103-1.528-0.935-2.857-2.159-3.629 0.241-1.596 1.619-2.815 3.281-2.815 1.839 0 3.329 1.49 3.329 3.329 0 1.837-1.49 3.328-3.329 3.328-0.396 0-0.776-0.07-1.122-0.213zm2.352 9.141c1.249-0.116 2.652-0.375 4.198-0.857l0.238-0.075 9e-3 -0.054v-3.454c0-1.854-1.191-3.436-2.854-4.007-0.784 0.594-1.762 0.94-2.82 0.94-0.438 0-0.863-0.06-1.262-0.18-0.147 0.63-0.426 1.207-0.804 1.705 1.933 0.792 3.296 2.709 3.295 4.941v1.041zm-11.746-9.148c0.104-1.517 0.928-2.837 2.141-3.609-0.237-1.602-1.618-2.828-3.284-2.828-1.839 0-3.329 1.49-3.329 3.329 0 1.837 1.49 3.328 3.329 3.328 0.404 0 0.791-0.073 1.143-0.22zm-2.353 9.149c-1.254-0.114-2.664-0.373-4.218-0.858l-0.238-0.075-9e-3 -0.054v-3.454c0-1.854 1.191-3.436 2.854-4.007 0.784 0.594 1.762 0.94 2.82 0.94 0.445 0 0.877-0.062 1.282-0.184 0.147 0.631 0.426 1.211 0.805 1.71-1.933 0.791-3.296 2.708-3.296 4.94v1.042zm4.281-5.029c-1.69 0.556-2.905 2.151-2.905 4.025v3.454l9e-3 0.054 0.238 0.074c2.242 0.701 4.191 0.935 5.794 0.935 3.133 0 4.948-0.893 5.06-0.95l0.222-0.113h0.024v-3.454c1e-3 -1.874-1.214-3.469-2.904-4.025-0.771 0.578-1.731 0.914-2.769 0.914s-1.997-0.335-2.769-0.914zm2.769-0.464c1.839 0 3.329-1.491 3.329-3.329s-1.49-3.328-3.329-3.328c-1.838 0-3.329 1.49-3.329 3.328 0 1.839 1.491 3.329 3.329 3.329z" class="ugs_icon"/>
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
                                    <path d="m13.253 9.288v-7.961h-2.506v7.961c-1.129 0.486-1.921 1.609-1.921 2.916s0.792 2.431 1.921 2.917v7.552h2.506v-7.552c1.129-0.486 1.921-1.61 1.921-2.917s-0.792-2.43-1.921-2.916zm-2.506 2.916c0-0.691 0.561-1.253 1.253-1.253 0.691 0 1.253 0.562 1.253 1.253 0 0.692-0.562 1.253-1.253 1.253-0.692 0-1.253-0.561-1.253-1.253zm-5.386-4.787v15.256h-2.505v-15.256c-1.13-0.486-1.921-1.609-1.921-2.916 0-1.752 1.422-3.174 3.174-3.174 1.751 0 3.173 1.422 3.173 3.174 0 1.307-0.791 2.43-1.921 2.916zm-2.505-2.916c0-0.692 0.561-1.253 1.253-1.253 0.691 0 1.252 0.561 1.252 1.253 0 0.691-0.561 1.253-1.252 1.253-0.692 0-1.253-0.562-1.253-1.253zm18.239 12.082v-15.256h-2.505v15.256c-1.13 0.486-1.921 1.609-1.921 2.916 0 1.752 1.422 3.174 3.173 3.174 1.752 0 3.174-1.422 3.174-3.174 0-1.307-0.791-2.43-1.921-2.916zm-2.505 2.916c0-0.691 0.561-1.253 1.252-1.253 0.692 0 1.253 0.562 1.253 1.253 0 0.692-0.561 1.253-1.253 1.253-0.691 0-1.252-0.561-1.252-1.253z" class="ugs_icon" fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Setup</div>
                    </div>             
                </a>
            </li>
            <!-- <li id="toggle_pin-sidebar" class="mainnav__list mainnav__pinside">
                <div class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m22.673 2.346c0-0.562-0.457-1.019-1.02-1.019h-19.307c-0.562 0-1.019 0.457-1.019 1.019v19.308c0 0.562 0.457 1.019 1.019 1.019h19.307c0.563 0 1.02-0.457 1.02-1.019v-19.308zm-2.42 2.095c0-0.44-0.262-0.798-0.584-0.798h-11.061c-0.322 0-0.584 0.358-0.584 0.798v15.118c0 0.44 0.262 0.798 0.584 0.798h11.061c0.322 0 0.584-0.358 0.584-0.798v-15.118z" class="ugs_icon"  fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text"></div>
                    </div>             
                </div>
            </li> -->
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