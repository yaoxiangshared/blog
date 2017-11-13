<template>
    <div class="skin-blue " >
    <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>SY</b>admin</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">手游平台管理系统</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" v-on:click="toggleSidebar">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs" v-text="header_username" ></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    用户名:<span v-text="header_username"></span>
                                    <small>IP:<span v-text="header_userip"></span></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div >
                                    <a href="#" class="btn btn-default  btn-block">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    </div>
</template>

<script >
    import Vue from "vue";
    import $ from "jquery";
    export default {
        name:'head',
        data:function () {
            return {
                toggleElement:"",
            }
        },
        props:['header_username','header_userip'],
        methods:{
            toggleSidebar:function () {
                this.$emit('toggleCollapseEvent');
            },


        },
        created:function () {
        },
        mounted:function () {

        }
    }
</script>
