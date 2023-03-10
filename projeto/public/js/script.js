function removeMsg(){
    setTimeout(function(){
        var msg = document.getElementById("apagar_msg");
        if(msg.parentNode){
            msg.parentNode.removeChild(msg);
        }
    }, 10000)
}
removeMsg();