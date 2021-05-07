$(document).ready(function(){
    $("#season").html($("#first").html())
})

function multiCollapseButton(idWrite, idRead){
    idWrite = "#" + idWrite
    idRead = "#" + idRead
    $(document).ready(function(){
        $(idWrite).hide()
        $(idWrite).html($(idRead).html())
        $(idWrite).fadeIn(500)
    })
}
function selectYear(selection){
    newSelect = selection.split("-");
    for (let o=0; o< newSelect.length;o++){
        newSelect[o]= parseInt(newSelect[o]);
    }
    let listCompete = document.getElementById("compete");
    let competitions = listCompete.getElementsByTagName("div");
    /*
    let subtitle = document.getElementById("select");
    subtitle.innerHTML = '('+selection[1]+')';
    */
    for (let i=0; i< competitions.length; i++){
        
        let txtValue = competitions[i].getElementsByClassName("date")[0].innerHTML;
        txtValue = parseInt(a.substring(a.length-4));
        
        if (txtValue>newSelect[0] && txtValue<newSelect[1]) { //The test if the research and the title match
            competitions[i].classList.remove("hide");
        } else {
            competitions[i].classList.add("hide");
        }
    }
}

