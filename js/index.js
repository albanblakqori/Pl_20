function reserveTable(event_id, table_id){
    $.ajax({
        url: "./components/rezervo.php",
        data:{
            command: 'reserve_table',
            event_id: event_id,
            table_id: table_id,
        } ,
        type: 'POST',
        async:true,

        success: function (data) {
            let res = JSON.parse(data);

            console.log(data);
        },
        error: function ()
        {

        }
    });
}

function openTableModal(row, event_id) {
    var id = row.getElementsByTagName('td')[0].innerHTML;
    var karrigat = row.getElementsByTagName('td')[1].innerHTML;
    var statusi = row.getElementsByTagName('td')[2].innerHTML;



    $.ajax({
        url: "./components/rezervo.php",
        data:{
            command: 'get_table',
            event_id: event_id,
            Id: id,
        } ,
        type: 'POST',
        async:true,
        success: function (data) {
            let res = JSON.parse(data);

            let tavolinat = res['tavolinat'][0];
            let event = res['event'];

            let html_data = "";

            if(tavolinat.tStatus === 'Free'){
                reserveTable(event, tavolinat['idTavolinat']);
                html_data += "<p color='green'>You have successfully reserved this table</p>"
                row.getElementsByTagName('td')[2].innerHTML = "Reserved";
            }else{
                html_data += "<p color='red'>This table has already been reserved, please choose another one.</p>"
            }

            $(".modal-body").html(html_data);
            $(".modal").modal();
        },
        error: function ()
        {

        }
    });

}








function clickRow(row) {
    let id = row.getElementsByTagName('td')[0].innerHTML;

    document.location = `?id=${id}`;
}

function registerBtn(){
    document.location = `signup.php`;
}





