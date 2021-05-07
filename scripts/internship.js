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
    newSelect = selection.split("/");
    //Console: ["aaaa","aaaa"]
    let a, txtValue;

    let second = document.getElementById("compete");
    let compete = second.getElementsByClassName("date");
    
    let subtitle = document.getElementById("select");
    subtitle.innerHTML = '('+selection[1]+')';

    for (let i=0; i< compete.length; i++){
        
        a = compete[i].getElementsByClassName("date")[0];
        newSelect = field [3];

        if (txtValue.indexOf(selection[0]) <= -1) { //The test if the research and the title match
            compete[i].classList.add("hide");
        } else {
            compete[i].classList.remove("hide");
        }
    }
}

