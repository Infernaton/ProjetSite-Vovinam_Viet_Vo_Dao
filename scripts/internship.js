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
