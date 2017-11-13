<template>
    <div class="pagination">
        <el-pagination
                v-on:size-change="sizeChange"
                v-on:current-change="currentChange"
                layout="total,prev, pager, next,jumper"
                :total="total"
                :current-page="currentPage"
                :page-size="pageSize"

        >
        </el-pagination>
    </div>
</template>
<script>
    import Vue from "vue";
    import {Pagination} from 'element-ui';
    Vue.use(Pagination);
    export default {
        name:"sy-pagination",
        data:function () {
            return{
                currentPage:1
            }
        },
        props:{
            total:{ type:Number,default:1},
            "pageSize":{type:Number,default:20}
        },
        methods:{
            sizeChange:function(pageSize){
                console.log("sizeChange"+pageSize);
                this.$emit('sy-page-change-event',pageSize);
            },
            currentChange:function (currentPage) {
                console.log("currentChange"+currentPage);
                console.log("pagesize"+this.pageSize);
                this.currentPage=currentPage;
                this.$emit('sy-page-current-change',{"currentPage":currentPage,"pageSize":this.pageSize})
            }
        },
        created:function () {

        },
        mounted:function () {

        }
    }
</script>
<style scoped >
    .pagination{
        width: 100%;
        text-align: center;
    }
</style>