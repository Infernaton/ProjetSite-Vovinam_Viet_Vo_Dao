<link rel="stylesheet" href="css/directionTech.css">

<div class="container mt-5">
    <br>
    <div class="text-center"><h1 class="content-title-blue">Compétitions</h1></div>
    
    <!--Drawer for all season-->
    <div class="inline">
        <h4><b>Saison</b></h4>
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'first')">20XX-2015</a>
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'second')">2015-2020</a>
        <a class="btn btn-outline-secondary" onclick="multiCollapseButton('season', 'third')">2020-Aujourd'hui</a>
            <!--Apply the information from the button we push-->
    </div>
    <div class="container pt-2 my-3 border">
        <div id="season"></div>
        </div>
        <div class="hide">
            <div id="first">
                <h5>20XX-2015</h5>
                <p>-LOREM IPSUM-</p>
                <br>
            </div>
            <div id="second">
                <h5>2015-2020</h5>
                <p>-LOREM IPSUM-</p>
                <br>
            </div>
            <div id="third">
                <h5>2020-Aujourd'hui</h5>
                <p>-LOREM IPSUM-</p>
                <br>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>