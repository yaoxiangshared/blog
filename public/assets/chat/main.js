/**
 * Created by Administrator on 2017/6/7.
 */
$(function(){


    function Chat(mConn){
        this.conn=mConn;
    }
    var chat=null;
    $('#start_button').click(function(){

        var chatContent=new Vue({
            el:'#chat_message',
            data:{
                demo:'he',
                sentences:[
                    {speaker:'me',content:'hello'},
                    {speaker:'stranger',content:'hello too'}
                ]
            }
        });

        var conn = new WebSocket('ws://192.168.124.128:8080');
        chat=new Chat(conn);

        chat.conn.onopen = function(e) {
            console.log("Connection established!");
        };

        chat.conn.onmessage = function(e) {
            console.log(e.data);
        };

        console.log('sss');
        $('.main').css('height',"calc(100% - 50px)");
        $('.sendBox').show();
        $('.message').show()
    });

    $('#sendMsg').click(function(){
        var msg=$('#msg').val();
       chat.conn.send(msg);
    })

});