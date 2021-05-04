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
                <h5>Compétitions à venir</h5>
                <p>-LOREM IPSUM-</p>
                <br>
            </div>
            <div id="second">
                <h5>Précédente compétitions</h5>
                <p>-LOREM IPSUM-</p>
                <br>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="scripts/internship.js"></script>