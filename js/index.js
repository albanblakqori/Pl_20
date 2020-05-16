function openTableModal(row){
    $('#exampleModal').modal();
    console.log(row);
}

function clickRow(row) {
    let id = row.getElementsByTagName('td')[0].innerHTML;

    document.location = `?id=${id}`;
}

function registerBtn(){
    document.location = `signup.php`;
}