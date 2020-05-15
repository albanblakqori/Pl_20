$(document).ready(() => {
    $('.eventTable').click((x)=>{
        console.log();
    });
});

function clickRow(row) {
    let id = row.getElementsByTagName('td')[0].innerHTML;

    document.location = `?id=${id}`;
}