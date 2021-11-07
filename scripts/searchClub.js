function selectClub(selection){
    let a, txtValue;

    let listClubs = document.getElementById("listClub");
    let clubs = listClubs.getElementsByClassName("club");

    let subtitle = document.getElementById("select");
    subtitle.innerHTML = '('+selection[1]+')';

    for (let i=0; i< clubs.length; i++){
        
        a = clubs[i].getElementsByClassName("comite")[0];
        txtValue = a.textContent || a.innerText; //To get the complete title of the object

        if (txtValue.indexOf(selection[0]) <= -1) { //The test if the research and the title match
            clubs[i].classList.add("hide");
        } else {
            clubs[i].classList.remove("hide");
        }
    }
}