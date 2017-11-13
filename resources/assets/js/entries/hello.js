/**
 * Created by Administrator on 2017/7/9 0009.
 */

import Vue from 'vue';
import Hello from '../components/Hello.vue';

//Vue.config.debug = true;
new Vue({
        el: "#app",
        render:h => h ( Hello )
    }
);