<template>
    <header class="header">
        <nav class="nav-col">
            <div class="container">
                <div class="h-wrap">
                    <div class="logo">
                        <router-link :to="{ name: 'home' }">
                            <img
                                src="../../../public/img/logo1.png"
                                alt="logo"
                            />
                        </router-link>
                    </div>
                    <div class="navigation-menu">
                        <div class="menu-wrap">
                            <div class="menu-left">
                                <ul>
                                    <li class="active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li><a href="#albums">Albums</a></li>
                                    <li><a href="#about">About Us</a></li>
                                    <li><a href="#upcoming">Videos</a></li>
                                </ul>
                            </div>
                            <div class="menu-right">
                                <ul>
                                    <li><a href="#galleries">Gallery</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li>
                                        <router-link :to="{ name: 'contact' }">
                                            Contact Us</router-link
                                        >
                                    </li>
                                    <li>
                                        <a href="tel:123 456 789">Call Me</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="toggle-btn">
                        <div class="toggle-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="toggle-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="toggle-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
      <!-- Mobile Menu -->
        <div id="mySidenav" class="sidenav">
            <div class="mobile-logo">
                <a href="index.html"><img src="img/logo.png" alt="logo"></a>
                <a href="javascript:void(0)" id="close-btn" class="closebtn">&times;</a>
            </div>
            <div class="no-bdr1">
                <ul id="menu1">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#albums">Albums</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#upcoming">Videos</a></li>
                    <li><a href="#galleries">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="tel:123 456 789">Call Me</a></li>
                </ul>
            </div>
        </div>
        <!-- Mobile Menu End -->
</template>

<script>
export default {
    name: "navbar",
};
</script>

<style></style>
