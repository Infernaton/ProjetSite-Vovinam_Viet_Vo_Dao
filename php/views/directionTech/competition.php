<link rel="stylesheet" href="css/directionTech.css">

<div class="container mt-5">
    <br>
    <div class="text-center"><h1 class="content-title-blue">Compétitions</h1></div>
    
    <!--Drawer for all season-->
    <div class="inline">
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'first')">A venir</a>
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'second')">Précédente compétitions</a>
            <!--Apply the information from the button we push-->
    </div>
    <div class="container pt-2 my-3 border">
        <div id="season"></div>
        </div>
        <div class="hide">
            <div id="first">
                <h3 id = "venir" > Compétitions à venir</h3>
                <div class = "compet_new" id ="new-1">
                    <h4>Compétition 1</h4>
                    <p class = "date"> 22 mai 2022 - 23 mai 2022 </p>
                    <p class= "lieux"> Paris</p>
                </div>
                <br>
                <div class = "compet_new" id ="new-2">
                    <h4>Compétition 2</h4>
                    <p class = "date"> 04 mai 2023 - 05 mai 2023 </p>
                    <p class= "lieux"> Bordeaux</p>
                </div>
            </div>
            <div id="second">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="deroulantb" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Année</button>
                        <div class="dropdown-menu" aria-labelledby="deroulantb">
                            <button class="dropdown-item" type="button"onclick="selectYear('2016-2020')">2016-2020</button>
                            <button class="dropdown-item" type="button"onclick="selectYear('2011-2015')">2011-2015</button>
                            <button class="dropdown-item" type="button"onclick="selectYear('2005-2010')">2005-2010</button>
                            <button class="dropdown-item" type="button"onclick="selectYear('2000-2004')">2000-2004</button>
                        </div>
                </div>
                <h3 id = "venir" >Précédente compétitions</h3>
                <div class="compete">
                    <div class = "listCompete">
                        <h4>Compétition 1</h4>
                        <p class = "date"> 04/05/2017 - 05/05/2017</p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 1</h4>
                        <p class = "date"> 05/05/2017 - 05/05/2017 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 1</h4>
                        <p class = "date"> 05/05/2017 - 05/05/2017 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 1</h4>
                        <p class = "date"> 05/05/2017 - 05/05/2017 </p>
                        <p class= "lieux"> Bordeaux</p>

                        <h4>Compétition 2</h4>
                        <p class = "date"> 05/05/2013 - 05/05/2013 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 2</h4>
                        <p class = "date"> 05/05/2013 - 05/05/2013 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 2</h4>
                        <p class = "date"> 05/05/2013 - 05/05/2013 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 2</h4>
                        <p class = "date"> 05/05/2013 - 05/05/2013 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 2</h4>
                        <p class = "date"> 05/05/2013 - 05/05/2013 </p>
                        <p class= "lieux"> Bordeaux</p>

                        <h4>Compétition 3</h4>
                        <p class = "date"> 05/05/2007 - 05/05/2007 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 3</h4>
                        <p class = "date"> 05/05/2007 - 05/05/2007 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 3</h4>
                        <p class = "date"> 05/05/2007 - 05/05/2007 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 3</h4>
                        <p class = "date"> 05/05/2007 - 05/05/2007 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 3</h4>
                        <p class = "date"> 05/05/2007 - 05/05/2007 </p>
                        <p class= "lieux"> Bordeaux</p>

                        <h4>Compétition 4</h4>
                        <p class = "date"> 05/05/2003 - 05/05/2003 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 4</h4>
                        <p class = "date"> 05/05/2003 - 05/05/2003 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 4</h4>
                        <p class = "date"> 05/05/2003 - 05/05/2003 </p>
                        <p class= "lieux"> Bordeaux</p>
                        <h4>Compétition 4</h4>
                        <p class = "date"> 05/05/2003 - 05/05/2003 </p>
                        <p class= "lieux"> Bordeaux</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>