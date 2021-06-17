<?php
    $json_file = "assets/json/faq.json";
    $faq = json_decode(file_get_contents($json_file), true, JSON_UNESCAPED_UNICODE);

    function printQuestion($cardContent){
        ?>
        <div class="QnA">
            <div class="header">
                <h4><?php echo $cardContent['ask'];?></h4>
            </div>
            <div class="body">
                <p><?php echo $cardContent['rep']."</mark></del></ins></i></b>";?></p>
            </div>
        </div>
        <?php
    }
?>
<div class="container">
    <div class="text-center">
        <h1 class="content-title-blue">FAQ</h1>
    </div>
    <hr>
    <div class="" id="threadFAQ">
        <div class="row">
            <div class="col-12 col-md-6">
            <?php
            for ($i=0; $i < count($faq); $i+=2) { 
                echo printQuestion($faq[$i]);
            }
            ?>
            </div>
            <div class="col-12 col-md-6">
            <?php
            for ($i=1; $i < count($faq); $i+=2) { 
                echo printQuestion($faq[$i]);
            }
            ?>
            </div>
        </div>
    </div>
</div>