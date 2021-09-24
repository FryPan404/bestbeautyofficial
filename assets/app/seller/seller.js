$(document).ready( function () {
    LoadData();
});
function LoadData(){
    $('#user_table').DataTable({
        "pageLength": 10,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "destroy": true,
        "order": [[0, "desc"]], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": base_url+"/app/seller/ajax_list",
            "type": "POST"
        }, 
        //Set column definition initialisation properties.
        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
        ],
    });

}

