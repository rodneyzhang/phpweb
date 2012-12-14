define(["sina"], function (sina) {
    var response = {
            ack:    1,
            container: "",
            callback:  "",
            data:       "",
            error:      "",
        };
    
     alert("Test Module");
     alert(sina.callback);
     alert(sina.container);
    
    return response;
})
