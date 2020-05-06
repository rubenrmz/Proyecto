$( document ).ready(function() {

    $("input[type='radio']").change(function(){
        let op1 = $("input[name='pais']:checked").val();
        let op2 = $("input[name='calc']:checked").val();
        if(op1 == 'ssa'){
            $("#dina-spe").show();
        }else{
            $("#dina-spe").hide();
        }

        if(op2 == 'gtms'){
            $("#dina-gtms").show();
        }else{
            $("#dina-gtms").hide();
        }
    });

    $("#form").submit((e) =>{ 
        e.preventDefault();
        let data = new FormData(form);

        fetch("back.php", {
            method: "POST",
            body: data
        }).then(Res => Res.json())
        .then(Res => {
            console.log(Res);
        });
        
    });
});