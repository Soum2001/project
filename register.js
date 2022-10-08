// $("#form").submit(function(e) {

//     e.preventDefault(); // avoid to execute the actual submit of the form.

//     var form = $(this);
//     var data = form.serialize();
//     $.ajax({
//         type: "POST",
//         url: "operation.php",
//         data: {"data" : data}, // serializes the form's elements.
//         // success: function(data)
//         // {
//         //   alert(data); // show response from the php script.
//         // }
//     });
    
// });

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#profile_img')
                .attr('src', e.target.result);
            $('#sidebar_img')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    } 
    
}
function add(){
    var form = $('#form');
    var id=$("#hidden_id").val().trim();
    if(!id)
    {
        $.ajax({
            url: "operation.php",
            type:'POST', 
            data:form.serialize(),
            success:function(response){
                console.log(response);
                var jsonData = JSON.parse(response);
    
                if(jsonData.success){
                    alert(jsonData.msg);
                    window.location.reload();
                }else{
                    alert(jsonData.msg);
                }
            }
        })
    }else{
        $.ajax({
            url: "edit_data.php",
            type:'POST', 
            data:form.serialize(),
            success:function(response){
                console.log(response);
                var jsonData = JSON.parse(response);
    
                if(jsonData.success){
                    alert(jsonData.msg);
                }else{
                    alert(jsonData.msg);
                }
            }
        })
    } 
}
function edit_data(id){
    var id=id;
    $.ajax({
        url: "edit.php",
        type:'POST', 
        data:{'id':id}, 
        success:function(response){
            var jsonData = JSON.parse(response);

            if(jsonData.success){
                var userDetails = jsonData.data;
                $("#hidden_id").val(id);
                $("#username").val(userDetails.user_name);
                $("#email").val(userDetails.email);
                $("#address").val(userDetails.address);
                $("#phn_no").val(userDetails.phone_no);
                $("#password").val(userDetails.password);
                $("#re_password").val(userDetails.password);
                $("#register").html('edit');
                $("#exampleModalCenter .modal-title").html('EDIT');
                $("#exampleModalCenter").modal("show");
            }else{
                alert(jsonData.msg);
            }
            
        }
        });

}
function delete_data(id){
    var id=id;
    $.ajax({
        url: "delete.php",
        type:'POST', 
        data:{'id':id}, 
        success:function(response){
            console.log(response);
            var jsonData = JSON.parse(response);

            if(jsonData.success){
                alert(jsonData.msg);
                window.location.reload();
            }else{
                alert(jsonData.msg);
            }
            
        }
        });
}
$(document).ready(function(){
    $("#add").click(function(){
        $("#username").val();
        $("#email").val('');
        $("#address").val();
        $("#phn_no").val();
        $("#password").val('');
        $("#re_password").val();
        $("#register").html('add');
        $("#exampleModalCenter .modal-title").html('ADD');
        $("#exampleModalCenter").modal("show");
      });
});