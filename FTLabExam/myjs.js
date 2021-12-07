$(document).ready(function(){
    $("form").submit(function(e){
        e.preventDefault();
        
    });
    $("#searchBtn").click(function()
    {
        $("#hidden").val("");
        $("#username").val("");
        $("#department").val("");
        $("#date").val("");
        $("#salary").val("");
        $("#telephone").val("");


        let searchID= $("#searchID").val();
        if(searchID!="")
        {
            $.ajax({
                url:"http://localhost/Web_Sec_H/FTLabExam/getid.php",
                method: 'POST',
                data:{
                    ID:searchID
                },
                success: function(data) {
                    console.log(JSON.parse(data));
                    let val= JSON.parse(data);
                    $("#hidden").val(val.ID);
                    $("#username").val(val.Name);
                    $("#department").val(val.Department);
                    $("#date").val(val.Date);
                    $("#salary").val(val.Salary);

                },
                failure: function(data) {
                    console.log("failed ",data);
                },
            });
        }
        else{
            alert("search ID can't be empty !");
        }
    
    });

    $("#update").click(function(){
         $.ajax({
            url:"http://localhost/Web_Sec_H/FTLabExam/update.php",
            method: 'POST',
            data:{
                id:$("#hidden").val(),
                Name:$("#username").val(),
                Address:$("#department").val(),
                Email:$("#date").val(),
                Password:$("#salary").val(),
            },
            success: function(vals) {
                console.log("rows affected ",vals);
            }
        }); 
    });
});