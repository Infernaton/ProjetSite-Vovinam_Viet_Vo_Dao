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
    newSelect = selection.split("-"); //Make an Array from the year input which look like this: '2000-2005'
    for (let o=0; o< newSelect.length;o++){
        newSelect[o]= parseInt(newSelect[o]); //make all the value into an integer, for the comparison l.30
    }
    let listCompete = document.getElementById("compete");
    let competitions = listCompete.getElementsByTagName("div"); //Get the list of all Competition from the document
    /*
    let subtitle = document.getElementById("select");
    subtitle.innerHTML = '('+selection[1]+')';
    */
    for (let i=0; i< competitions.length; i++){
        
        let txtValue = competitions[i].getElementsByClassName("date")[0].innerHTML;
        txtValue = parseInt(txtValue.substring(txtValue.length-4));
        
        if (txtValue>newSelect[0] && txtValue<newSelect[1]) { //The test if the research and the title match
            competitions[i].classList.remove("hide");
        } else {
            competitions[i].classList.add("hide");
        }
    }
}