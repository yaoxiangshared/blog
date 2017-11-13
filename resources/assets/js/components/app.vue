<template>
    <div class="sidebar-mini" v-bind:class="{'sidebar-collapse':is_collapse}">
        <sy-header ref="header" v-on:toggleCollapseEvent="toggleSidebar" v-bind:header_username="userName" v-bind:header_userip="userIp" ></sy-header>
        <sy-sidebar v-bind:sider_username="userName" v-bind:sider_userip="userIp"></sy-sidebar>
        <div class="content-wrapper"  v-bind:style=" { 'min-height' : mHeight+'px' }  " >
            <section class="content-header">
                <ol class="breadcrumb">
                    <li v-for="breadCrumb in breadCrumbList"><a v-bind:href="breadCrumb.url" v-bind:class=" { active:typeof (breadCrumb.url)!=='undefined'} ">{{breadCrumb.name}}</a></li>
                </ol>
            </section>
            <div class="content">
                <slot>没有添加内容模块</slot>
            </div>
        </div>
        <sy-footer ref="footer"></sy-footer>
    </div>
</template>
<script>
    import Vue from "vue";
    // import { Button,Notification } from 'element-ui';
    // import 'element-ui/lib/theme-default/index.css';
    import Util from "../js/commonUtil";
    import Header from "./header.vue";
    import Footer from "./footer.vue";
    import Sidebar from "./sidebar.vue";
    import 'bootstrap/dist/css/bootstrap.css'
    import 'font-awesome/css/font-awesome.css'
    import '../css/admin-lte.css';
    import '../css/skin-blue.css'
    // require.ensure(
    //     ["../../../first.js","../../../commonUtil.js"],
    //     function () {
    //         let first=require("../../../first.js");
    //         let commonUtil=require("../../../commonUtil.js");
    //         console.log(commonUtil.getOs());
    //     },
    //     "common");
    // Util.console("index1");
//    Vue.config.debug=true;
    export default{
//        el:"sy-app",
        name:"sy-app",
        components:{
            "sy-header":Header,
            "sy-sidebar":Sidebar,
            "sy-footer":Footer
        },
        data:function () {
            return {
                mHeight:500,
                is_collapse:false,
                userName:"",
                userIp:"",
                breadCrumbList:[]
            }
        },
        methods:{
            layoutFix:function () {
                this.mHeight=document.body.clientHeight-this.$refs.header.$el.clientHeight-this.$refs.footer.$el.clientHeight;
            },
            toggleSidebar:function () {
                this.is_collapse=!this.is_collapse;
            },
            init:function () {
                var _th=this;

                this.layoutFix();
                $(window).resize(function () {//高度自适应
                        _th.layoutFix();
                    }
                );


                this.login();
                this.getBreadcrumb();
            },
            getBreadcrumb:function () {
                let breadCrumbList=sessionStorage.getItem('breadCrumbList');
                this.breadCrumbList=JSON.parse(breadCrumbList);
            },
            login:function () {
                var _th=this;
                $.getJSON(
                    "/api/user/get_user_info",
                    function (res) {
                        _th.userName=res.msg.user_name;
                        _th.userIp=res.msg.ip;
                    }
                )
            }

        },
        created:function () {

        },
        mounted:function () {
            this.init();
        },

    };


</script  >
<style scoped lang="css">
    .breadcrumb > li >a.active{
        color: #11999E;
    }
</style>
