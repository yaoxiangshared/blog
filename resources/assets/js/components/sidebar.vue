<template>
    <div class="skin-blue ">
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../../img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p v-text="sider_username"></p>
                    <a href="#"><i class="fa fa-circle text-success"></i>已登录</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li v-for="(firstMenu ,firstMenuIndex) in menuList" class="treeview" v-bind:class=" {  active:firstMenu.active,'menu-open':firstMenu.is_open } ">
                    <a href="javascript:void 0" v-on:click="sidebarToggle(firstMenuIndex,'','',1)">
                        <i class="fa fa-gamepad"></i>
                        <span v-text="firstMenu.name"></span>
                        <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                    </a>
                    <ul class="treeview-menu">
                        <li v-for="(secondMenu,secondMenuIndex) in firstMenu.child_menu" class="treeview" v-bind:class=" {  active:secondMenu.active,'menu-open':secondMenu.is_open } ">
                            <a href="javascript:void 0" v-bind:class=" { active:secondMenu.active} " v-on:click="sidebarToggle(firstMenuIndex,secondMenuIndex,'',2)">{{secondMenu.name}}
                                <span v-if="secondMenu.child_menu.length" class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li v-for="(thirdMenu,thirdMenuIndex) in secondMenu.child_menu">
                                    <a href="javascript:void 0" v-bind:class=" { active:thirdMenu.active} " v-on:click="sidebarToggle(firstMenuIndex,secondMenuIndex,thirdMenuIndex,3)">{{thirdMenu.name}}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
        </div>
</template>
<script >
    import Vue from "vue";
    export default {
        name:'sy-sidebar',
        data:function () {
            return {
                menuList:[],
                firstMenuIndex:null,
                secondMenuIndex:null,
                thirdMenuIndex:null
            }
        },
        props:["sider_username"],
        methods:{
            getMenuList:function () {
                var _th=this;

                $.getJSON(
                    "/api/user/get_menu",
                    function (res) {
                        if(res.code===1){
                            _th.menuList=res.msg.menu_list;
                            _th._menuTreeInit(_th.menuList);
                            console.log(_th.menuList);
                            _th.init();
                        }
                    }
                )
            },
            sidebarToggle:function (firstMenuIndex,secondMenuIndex,thirdMenuIndex,level) {
                switch (level){
                    case 1:{
                        if(!this.menuList[firstMenuIndex].is_open) {
                            this._menuTreeInit(this.menuList);
                        }
                        this.menuList[firstMenuIndex].active = !this.menuList[firstMenuIndex].active;
                        this.menuList[firstMenuIndex].is_open = !this.menuList[firstMenuIndex].is_open;
                        if(typeof (this.menuList[firstMenuIndex].url)!=='undefined'){
                            sessionStorage.setItem('level',1);
                            sessionStorage.setItem('firstMenuIndex',firstMenuIndex);
                            sessionStorage.removeItem('secondMenuIndex');
                            sessionStorage.removeItem('thirdMenuIndex');
                            this._notifyBreadCrumb(firstMenuIndex,'','',level);
                            location.href=this.menuList[firstMenuIndex].url;
                        }
                        break;
                    }
                    case 2:{

                        if(!this.menuList[firstMenuIndex].child_menu[secondMenuIndex].is_open){
                            this._menuTreeInit( this.menuList[firstMenuIndex].child_menu);
                        }
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].active = !this.menuList[firstMenuIndex].child_menu[secondMenuIndex].active;
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].is_open = !this.menuList[firstMenuIndex].child_menu[secondMenuIndex].is_open;
                        if(typeof (this.menuList[firstMenuIndex].child_menu[secondMenuIndex].url)!=='undefined'){
                            sessionStorage.setItem('level',1);
                            sessionStorage.setItem('firstMenuIndex',firstMenuIndex);
                            sessionStorage.setItem('secondMenuIndex',secondMenuIndex);
                            sessionStorage.removeItem('thirdMenuIndex');
                            this._notifyBreadCrumb(firstMenuIndex,secondMenuIndex,'',level);
                            location.href=this.menuList[firstMenuIndex].child_menu[secondMenuIndex].url;
                        }
                        break;
                    }
                    case 3:{

                        if(typeof (this.menuList[firstMenuIndex].child_menu[secondMenuIndex].child_menu[thirdMenuIndex].url)!=='undefined'){
                            sessionStorage.setItem('level',2);
                            sessionStorage.setItem('firstMenuIndex',firstMenuIndex);
                            sessionStorage.setItem('secondMenuIndex',secondMenuIndex);
                            sessionStorage.setItem('thirdMenuIndex',thirdMenuIndex);
                            this._notifyBreadCrumb(firstMenuIndex,secondMenuIndex,thirdMenuIndex,level);
                            location.href=this.menuList[firstMenuIndex].child_menu[secondMenuIndex].child_menu[thirdMenuIndex].url;
                        }
                        break;
                    }

                }

            },
            init:function () {

                let firstMenuIndex=sessionStorage.getItem('firstMenuIndex');
                let secondMenuIndex=sessionStorage.getItem('secondMenuIndex');
                let thirdMenuIndex=sessionStorage.getItem('thirdMenuIndex');
                let level=parseInt(sessionStorage.getItem('level'));
                console.log(firstMenuIndex);
                console.log(secondMenuIndex);
                console.log(thirdMenuIndex);
                console.log(level);
                switch (level){
                    case 1:{
                        this.menuList[firstMenuIndex].active = true;
                        this.menuList[firstMenuIndex].is_open = true;
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].active = true;
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].is_open = true;
                        break;
                    }
                    case 2:{
                        this.menuList[firstMenuIndex].active = true;
                        this.menuList[firstMenuIndex].is_open = true;
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].active = true;
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].is_open = true;
                        this.menuList[firstMenuIndex].child_menu[secondMenuIndex].child_menu[thirdMenuIndex].active=true;
                        break;
                    }

                }

            },
            _menuTreeInit:function (menuTree) {
                if(Array.isArray(menuTree)) {
                    for (let i = 0; i < menuTree.length; i++) {
                        this.$set(menuTree[i], 'active', false);
                        this.$set(menuTree[i], 'is_open', false);
                        this._menuTreeInit(menuTree[i].child_menu)
                    }
                }
            },
            _notifyBreadCrumb:function (firstMenuIndex,secondMenuIndex,thirdMenuIndex,level) {

                let breadCrumbList=[];
                switch (level){
                    case 1:{

                        break;
                    }
                    case 2:{
                        breadCrumbList=[
                            {
                                'name':this.menuList[firstMenuIndex].name
                            },
                            {
                                'name':this.menuList[firstMenuIndex].child_menu[secondMenuIndex].name,
                                'url':this.menuList[firstMenuIndex].child_menu[secondMenuIndex].url
                            }
                        ];
                        break;
                    }
                    case 3:{
                        breadCrumbList=[
                            {
                                'name':this.menuList[firstMenuIndex].name
                            },
                            {
                                'name':this.menuList[firstMenuIndex].child_menu[secondMenuIndex].name,
                            },
                            {
                                'name':this.menuList[firstMenuIndex].child_menu[secondMenuIndex].child_menu[thirdMenuIndex].name,
                                'url': this.menuList[firstMenuIndex].child_menu[secondMenuIndex].child_menu[thirdMenuIndex].url
                            }
                        ];
                        break;
                    }
                }
                sessionStorage.setItem('breadCrumbList',JSON.stringify(breadCrumbList));

            }
        },
        created:function () {
        },
        mounted:function () {
            this.getMenuList();
        }

    }
</script>
