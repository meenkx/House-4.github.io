$(document).ready( function ()
    {
      $('#table_cust').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": false,
        "responsive": true,
        "autoWidth": false,
        "pageLength": 10,
        "ajax": {
          "url": "data.php",
          "type": "POST"
        },
        "columns": [
		{ "data": "No" },
		
        { "data": "Username" },
        { "data": "Name" },
        { "data": "Lastname" },
			{ "data": "House" },
        { "data": "University" },
        { "data": "Faculty" },
        { "data": "Note" },
        { "data": "button" },
        ]
      });


    });
    $(document).on("click","#btnadd",function(){
        $("#modalcust").modal("show");
        $("#txtUsername").focus();
		$("#txtNo").val("");
        $("#txtName").val("");
        $("#txtLastname").val("");
        $("#cboUniversity").val("");
        $("#txtFaculty").val("");
        $("#txtNote").val("");
        $("#crudmethod").val("N");
        $("#txtid").val("0");
    });
    $(document).on( "click",".btnhapus", function() {
      var id = $(this).attr("id");
      var Name = $(this).attr("Name");
      swal({
        title: "Delete member?",
        text: "Delete member : "+Name+" ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Delete",
        closeOnConfirm: true },
        function(){
          var value = {
            id: id
          };
          $.ajax(
          {
            url : "delete.php",
            type: "POST",
            data : value,
            success: function(data, textStatus, jqXHR)
            {
              var data = jQuery.parseJSON(data);
              if(data.result ==1){
                $.notify('Successfull delete member');
                var table = $('#table_cust').DataTable();
                table.ajax.reload( null, false );
              }else{
                swal("Error","Can't delete member data, error : "+data.error,"error");
              }

            },
            error: function(jqXHR, textStatus, errorThrown)
            {
             swal("Error!", textStatus, "error");
            }
          });
        });
    });
    $(document).on("click","#btnsave",function(){
      var No = $("#txtNo").val();
      var Username = $("#txtUsername").val();
      var Name = $("#txtName").val();
      var Lastname = $("#txtLastname").val();
      var University = $("#cboUniversity").val();
      var Faculty = $("#txtFaculty").val();
      var Note = $("#txtNote").val();
      var crud=$("#crudmethod").val();
      if(Note == '' || Note == null ){
        swal("Warning","Please fill data [ Note ]","warning");
        $("#txtName").focus();
        return;
      }
      var value = {
		  
        No: No,
        Username:Username,
        Name: Name,
        Lastname: Lastname,
        University:University,
        Faculty:Faculty,
        Note:Note,
        crud:crud
      };
      $.ajax(
      {
        url : "save.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          if(data.crud == 'N'){
            if(data.result == 1){
              $.notify('Successfull save data');
              var table = $('#table_cust').DataTable();
              table.ajax.reload( null, false );
				$("#txtNo").val("");
              $("#txtUsername").val("");
              $("#txtName").val("");
              $("#txtLastname").val("");
              $("#cboUniversity").val("");
              $("#txtFaculty").val("");
              $("#txtNote").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
              $("#txtnama").focus();
            }else{
              swal("Error","Can't save member data, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Successfull update data');
              var table = $('#table_cust').DataTable();
              table.ajax.reload( null, false );
              $("#txtName").focus();
            }else{
             swal("Error","Can't update member data, error : "+data.error,"error");
            }
          }else{
            swal("Error","invalid order","error");
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
           swal("Error!", textStatus, "error");
        }
      });
    });
    $(document).on("click",".btnedit",function(){
      var Username=$(this).attr("Username");
      var value = {
        Username: Username
      };
      $.ajax(
      {
        url : "get_cust.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          $("#crudmethod").val("E");
		  $("#txtNo").val(data.No);
          $("#txtUsername").val(data.Username);
          $("#txtName").val(data.Name);
          $("#txtLastname").val(data.Lastname);
          $("#cboUniversity").val(data.University);
          $("#txtFaculty").val(data.Faculty);
          $("#txtNote").val(data.Note);

          $("#modalcust").modal('show');
          $("#txtName").focus();
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
          swal("Error!", textStatus, "error");
        }
      });
    });
    $.notifyDefaults({
      type: 'success',
      delay: 500
    });
