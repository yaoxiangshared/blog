/**
 * Created by Administrator on 2017/11/10 0010.
 */
// let Vue=require("vue");
// let Util=require("../../../commonUtil");
import Vue from "vue";
// import { Button,Notification } from 'element-ui';
// import 'element-ui/lib/theme-default/index.css';
// import Util from "../../../commonUtil";
//import Child from "../../../../components/child.vue";
// import Header from "../../../../components/header.vue";
// import Footer from "../../../../components/footer.vue";
// import Sidebar from "../../../../components/sidebar.vue";
import App from "../../../components/app.vue";
// import 'font-awesome/css/font-awesome.css'
import '../../../../css/style.css';
// import '../../../../css/skin-blue.css'

// require.ensure(
//     ["../../../first.js","../../../commonUtil.js"],
//     function () {
//         let first=require("../../../first.js");
//         let commonUtil=require("../../../commonUtil.js");
//         console.log(commonUtil.getOs());
//     },
//     "common");
// Util.console("index1");
Vue.config.debug=true;
new Vue({
    el:"#container",
    components:{
        "sy-app":App,
    },
    data:function () {
        return{

        }
    },
    methods:{

    },
    created:function () {

    },
    mounted:function () {
    }

});