<?php require_once 'php/init.php';?>

<link rel="stylesheet" href="css/maitre.css">
<style>
.dirr {
    display: flex;
    justify-content: center;
}
.carousel-control-next, .carousel-control-prev {
    position: relative;
    width: auto;
    z-index: 1;
    align-items: center;
    color: black;
    text-align: center;
    transition: opacity .15s ease;
}
.tooltip-inner{
    max-width: 500px; 
}
</style>
<div class="container mt-5">
        <!-- Titre de la page -->
        <div class="text-center">
            <div style="padding-bottom: 50px;">
                <h1 class="content-title-blue">Le Maître fondateur</h1>
            </div>
        </div>
        <!-- Photo du ME Fondateur -->
        <div class="row">
            <div class="col-sm-4">
                <img style="width: 85%; margin-top:5px" src="assets/img/Maitres/ME_Fondateur.png" alt="">
            </div>
            <!-- Carte avec un effet de rotation -->
            <div class="col-sm-8">
                <div class="card-container manual-flip">
                    <div class="card">
                        <!-- Coté frontal de la carte -->
                        <div class="front">
                            <div class="header"> 
                                <h3 class="name">Maitre Nguyễn Lộc <small class="profession">1912-1960</small></h3>
                            </div>
                            <div class="content">
                                <!-- Contenu de la carte -->
                                <?php
                                    $note = [
                                        "Le 8 avril de l'année Nham Ty, (année du Rat), selon le calendrier lunaire.",
                                        "Actuellement Ha Tay.",
                                        "La famille du maître Nguyễn Lộc est composée de: <ol> <li>Nguyễn Lộc,</li> <li>Nguyễn Thị Kim Thái,</li> <li>Nguyễn Văn Dần,</li> <li>Nguyễn Quang Hải,</li> <li>Nguyễn Thị Bích Hà.</li></ol>",
                                        "Entre 1912 et 1938, le Vietnam est encore sous la domination française. Il existe de très nombreux mouvements et des organisations révolutionnaires et résistances contre le gouvernement colonial français.",
                                        "L'Homme dans le sens universel.",
                                        "Plus tard, ces valeurs sont devenues les Codes d'Honneur des Maîtres d’où les dix principes fondamentaux du Vovinam-Viet Vo Dao établis par le premier Conseil des Maîtres du Vovinam-Viet Vo Dao en 1964, puis transformés en neuf principes fondamentaux internationaux par le 7ème Congrès Mondial du Vovinam-Viet Vo Dao en mai 2012 à Paris.",
                                        "Niveau moyen, équivalent de la ceinture jaune ou noire de notre époque.",
                                        "Réf:",
                                        "A l'époque les arts martiaux sont encore interdits par le gouvernement colonial.",
                                        "Parmi les 1ers pratiquants figurent : Nguyễn Dần (jeune frère du maître fondateur), Nguyễn Đăng Hiển, mademoiselle Nguyễn Thị Minh et Tạ Quang Bửu. Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 17 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
                                        "Monsieur Tạ Quang Bửu (1910-1986), représente la ligue Vietminh au moment de la signature des accords de Genève le 20 juillet 1954, qui séparent le Vietnam en deux parties, avec les ministres des affaires étrangères, à savoir John Foster Dulles (États-Unis), Molotov (Union soviétique), Anthony Eden (Royaume Uni), George Bidaut (France), Chu En-lai (Chine populaire).",
                                        "",
                                        "Le nom du docteur Đặng Vũ Hỷ a été évoqué plusieurs fois dans les textes historiques du Vovinam, dont Revue Interne – Centre de formation Vovinam, 1965, page 4 (Nội san – Trung tâm huấn luyện Vovinam, 1965) et Introduction au Viet Vo Dao, édition Fédération de Formation Vovinam-VVĐ, 1969, page 15 à 26 (Việt Võ Đạo Nhập Môn, Tổng cục huấn luyện Vovinam-VVĐ, 1969). Il est l'un des dignitaires de l'éducation physique du gouvernement colonial français.",
                                        "A partir de 1940, le gouvernement colonial commence à assouplir sa politique concernant les arts martiaux (cf. annexe 6), mais la plupart des écoles restent méfiantes, continuent à pratiquer dans la clandestinité.",
                                        "L'École Normale, rue Do Huu Vi, Hanoï. Aujourd'hui appelée école Phan Dinh Phung, située au 67B rue Cua Bac, district Ba Dinh, à Hanoï.",
                                        "Ces maîtres sont aujourd'hui Ceintures Blanches Suprêmes et membres du Conseil Suprême des Maîtres de la Fédération Mondiale de Vovinam-Viet Vo Dao.",
                                        "Trần Trọng Kim (1883-1953) est un enseignant, un historien de renom et un homme politique vietnamien. Son gouvernement est formé le 17 avril 1945 et démissionne le 8 août 1945.",
                                        "Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, pages 23, 24 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001) : « … Les pratiquants de Vovinam ont spécialement en charge d’éliminer les groupes de jeu et de voleurs dans la ville de Hanoï… Un groupe de jeunes composés de pratiquants de Vovinam, de Scouts de Hanoï et d’étudiants, récoltent des dons… Nous participons à l'organisation de la commémoration des deux sœur Trưng… Nous participons aussi à la commémoration des fondateurs Hùng Vương… ». Témoignage de Monsieur Nghiêm Văn Thạch (1929-2016), ancien Vice-commissaire général des Scouts au Vietnam. En 1945, il est âgé de 16 ans, membre des Scouts à Hanoï. Monsieur Nghiêm Văn Thạch confirme qu'il existe une collaboration entre l'Association du scoutisme au Tonkin et le Vovinam pour réaliser des actions sociales et caritatives.",
                                        "La dynastie des rois Hung Vuong est une dynastie de 17 rois entre 2888 av. J.-C. et 258 av. J.-C. Considérés comme les fondateurs du pays et célébrés chaque année le dixième jour du troisième mois lunaire (au mois d'avril du calendrier grégorien).",
                                        "Trưng Trắc et Trưng Nhị (12-43 après J.C.) sont deux personnages historiques qui se sont opposés victorieusement à la domination chinoise au Viêt Nam. Elles sont vénérées comme des héroïnes nationales, instigatrices du premier mouvement de résistance antichinois, après 247 ans de domination. Beaucoup de temples leur sont dédiés et un jour de congé annuel est accordé en février pour commémorer leur disparition. Un district de Hanoï porte leur nom, tout comme de nombreuses rues et de nombreuses écoles à travers le pays.",
                                        "École Buoi, aujourd'hui appelée École Chu Van An, située au 10 rue Thuy Khue, District Ba Dinh, à Hanoï.",
                                        "Actuellement le Palais culturel de l'enfant, situé au 36 rue Ly Thai To, Hanoï.",
                                        "Actuellement l'Université Polytechnique, Hanoï.",
                                        "Le Parti démocratique est créé le 30 juin 1944, aidé par le parti communiste indochinois. Il rassemble des progressistes, des patriotes et des personnes issues du milieu intellectuel, des petits bourgeois, des commerçants et des personnes issus de la bourgeoisie. (Jean Lacouture, Hồ Chí Minh, Seuil, Paris, 1969).",
                                        "Monsieur Dương Đức Hiền, ancien pratiquant du Vovinam, membre du Parti démocratique, a participé plusieurs fois en tant que Ministre de la Jeunesse au gouvernement révolutionnaire provisoire du 29 août 1945 et du gouvernement d'union de la résistance du 1er janvier 1946.",
                                        "Monsieur Cù Huy Cận, (né en 1919), poète, ancien pratiquant du Vovinam, membre du parti Communiste, a participé plusieurs fois au gouvernement révolutionnaire provisoire du 29 août 1945 (Ministre sans portefeuille), au gouvernement d'union de la résistance du 1er janvier 1946 (Secrétaire d'État à l'agriculture), et au gouvernement d'union du 3 novembre 1946 (Secrétaire d’État à l'agriculture, puis Secrétaire d’État à la sécurité intérieure et Secrétaire d’État à l'économie).",
                                        "Monsieur Xuân Diệu, (né en 1916), ancien pratiquant du Vovinam, membre du parti Communiste, est un poète de renom au Vietnam.",
                                        "Monsieur Phan Mỹ, ancien pratiquant du Vovinam, membre du parti Communiste, est le petit frère de Monsieur Phan Anh, Ministre de la jeunesse du gouvernement de Trần Trọng Kim.",
                                        "Đỗ Khánh et Vũ Văn Thức sont morts au combat lors de la lutte contre l’Armée Française au Sud du Vietnam.",
                                        "Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 25 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
                                        "Actuellement le Palais des sports My Dinh, Hanoï.",
                                        "Actuellement le Palais culturel Russo-vietnamien, Hanoï.",
                                        "Actuellement le marché de Bac Qua, Hanoï.",
                                        "Appelée aussi la guerre d’Indochine, c'est un conflit armé qui s’est déroulé de 1946 à 1954 entre la France et le Viêt Minh. Le conflit s’achève après la défaite de l'armée française à Dien Bien Phu et aboutit aux accords de Genève. La France (George Bidault, ministre des affaires étrangères) a signés (20 juillet 1954) avec le Vietnam (Tạ Quang Bửu) et les ministres des affaires étrangères : John Foster Dulles (États-Unis), Molotov (Union Soviétique), Anthony Eden (Royaume Uni) et Chu En-lai (Chine Populaire). Ces accords partagent le Vietnam en deux États rivaux, ayant pour frontière le 17ème parallèle. Le Nord est gouverné par Hồ Chí Minh qui établit le régime communiste ; le Sud est gouverné par Bảo Đại sous un régime Républicain monarchique. La France renonce à ses intentions colonialistes et se retire de l'Indochine. Cette guerre compte plus de 500 000 victimes.",
                                        "Bui Chu et Phat Diem sont des villes proches de la province de Nam Dinh, près de la mer, à côté de l'embouchure Ba Lat où se jette le Fleuve Rouge.",
                                        "L'évêque Anselmo Thaddeus Lê Hữu Từ (1896-1967) est né le 28 octobre 1896 dans le village de Di Loan, province de Quang Tri, dans une famille de dix frères et sœurs, dont cinq (trois frères et deux sœurs) deviendront des religieux. Devenu prêtre le 22 décembre 1928 à l'âge de 32 ans, il obtient la gouvernance du diocèse de Phat Diem ; le 1er octobre 1945, il est sacré Monseigneur le 29 octobre 1945. Il décède en 1967 à l'âge de 71 ans.",
                                        "L'évêque Phạm Ngọc Chi (1909-1988) est né le 14 mai 1909 à Ton Dao, district de Kim Son, ville de Phat Diem, province de Ninh Binh, Nord Vietnam. En 1920, il s’inscrit à l'École de Tap Ba Lang (Thanh Hoa). Il est ensuite envoyé à l'Université pontificale au Vatican (Rome) en 1927. Le 23 décembre 1933, il devient prêtre. Très cultivé, il obtient plusieurs diplômes : Doctorat ès philosophie, Maîtrise de théologie, Maîtrise des lois épiscopales de l'Université de Paris en 1935. En 1947 il est promu directeur du séminaire de Phat Diem. En 1950 il devient Monseigneur du diocèse de Bui Chu, en 1960 Monseigneur du diocèse de Qui Nhon, enfin en 1963, Monseigneur du diocèse de Danang.",
                                        "",
                                        "Actuellement l'École de Mac Dinh Chi-Nguyen Cong Tru, situé au 8 Nguyen Truong To, District de Ba Dinh, à Hanoï.",
                                        "Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 34 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
                                        "Selon le témoignage du grand maître Ngô Hữu Liễn (Texas, États-Unis): Phan Dương Bình (Vietnam), Lê Sáng (Vietnam), Bùi Thiện Nghĩa (Australie), Nguyễn Dần (États-Unis), Phạm Văn Vận (États-Unis, grand frère de maître Phạm Hữu Độ), Ngô Quốc Phong (États-Unis), Hà Trọng Thịnh (Canada) et Trần Đức Hợp (États-Unis).",
                                        "Cette salle du 52 rue Frères Louis, devient rue Vo Tanh, puis rue Nguyen Trai, près du carrefour Nga Sau à Saigon. C’est l'endroit où le maître Trần Huy Phong est venu s’entraîner avec maître Nguyễn Lộc.",
                                        "Le club Thu Khoa Huan, rue Aviateur Garros, devient rue Thu Khoa Huan. Aujourd'hui cette salle n'existe plus, devenant l'hôtel Tan Hoang Ngoc, situé au 52 rue Thu Khoa Huan, à Saigon. « … En entrant dans la salle d’entraînement Vovinam à Thu Khoa Huan à Saigon, je ne suis plus maladroit comme les premiers jours d'initiation à la salle d’entraînement à Hang Voi, à Hanoï… Le Têt (le nouvel an du calendrier lunaire) à Nguyen Khac Nhu. Ce jour-là, il y a : Tuấn (Nguyễn Gia Tuấn), Hien, Độ (Phạm Hữu Độ), Thông (Nguyễn Văn Thông), Phúc (Nguyễn Văn Nuôi), Bách (Trần Huy Phong)… tous sont venus pour la fête… ». Maître Nguyễn Văn Thư, Những ngày học võ với cố võ sư sáng tổ » (Les jours d’entraînement avec le défunt maître fondateur), Revue spéciale Vovinam-Viet Vo Dao, mai 1971, pages 79-81).",
                                        "L'Académie militaire Thu Duc ou Thu Duc Martial Arts Inter-School, également connue sous le nom de Thu Duc Infantry School, une école de formation d'officiers de l'armée de la République du Sud Vietnam.",
                                        "Building Everest, rue Dinh Cong Trang, actuellement situé au 8 rue Nguyễn Văn Tráng, 1er district, à Saigon. Dans les années 1958-1960, maître Nguyễn Lộc est venu ici pour se reposer en convalescence et y décède. De 1966 à 1975, ce lieu est devenu l’Université de médecine et des sciences humaines Minh Duc. C'est ici qu'un club de Vovinam-Viet Vo Dao a été inauguré sous l'encadrement des maîtres Phan Quỳnh et Vũ Kim Trọng. Il est maintenant devenu une École d'économie.",
                                        "De 1938 à 1964, le titre de maître patriarche n'existait pas encore. Lorsque maître Nguyễn Lộc était encore en vie, il se présentait comme maître fondateur du Vovinam.",
                                        "La pensée confucéenne est basée sur un classement hiérarchisé de l'ensemble des normes qui composent le système d'un État divin : Empereur, Maître, Père (Quân, Sư, Phụ), pour garantir la cohérence et maintenir la rigueur de la société. La pensée confucéenne est fondée sur le principe que cette hiérarchie doit être respectée à la lettre (de manière aveuglement) et être mise en œuvre comme les codes de la vie. A l'opposé, maître Nguyễn Lộc préconise l'évolution permanente « … Vous devez changer vos méthodes de travail pour vous adapter à toutes les situations, innover pour que le Vovinam soit plus scientifique, plus moderne. Si vous vous apercevez que mon enseignement n'est pas encore performant, votre devoir est de l’améliorer pour qu'il devienne meilleur. Si ma méthode présente quelques lacunes, n'hésitez pas à la compléter. Ce faisant, vos contributions sont bénéfiques pour que le Vovinam puisse devenir un art martial national… ». Extrait des mémoires du grand maître Lê Văn Phúc: « Mémoires des jours de pratique avec le maître fondateur », revue spéciale du Vovinam-Viet Vo Dao, 1971, pages 76, 77 (Hồi ký những ngày theo học võ sư sáng tổ, đặc san Vovinam-Viet Vo Dao, 1971).",
                                        "Cette façon d’appeler est confirmée par la quasi-totalité de ses disciples directs comme Monsieur Nguyễn Đăng Hiển, maître Phan Dương Bình, Lê Sáng, Trần Huy Phong, Nguyễn Dần, Hà Trọng Thịnh, Phạm Hữu Độ, Lê Trọng Hiệp, Ngô Hữu Liễn, Trần Đức Hợp, Lê Văn Phúc, etc. D'après le récit de maître Lê Văn Phúc dans « Mémoires des jours de pratique avec le maître fondateur », revue spéciale du Vovinam-Viet Vo Dao, 1971, page 76 (Hồi ký những ngày theo học võ sư sáng tổ, đặc san Vovinam-Viet Vo Dao, 1971). « … A l'époque où nous nous entraînions, nous étions autorisés à appeler maître Nguyễn Lộc, « Grand frère »…. Cette appellation est également relatée dans l'éloge funèbre du maître Nguyễn Lộc.",
                                        "Témoignage de Monsieur Phan Nhật Hùng (Californie, États-Unis), beau-frère du maître Nguyễn Lộc, noté par grand maître Ngô Hữu Liễn (Houston, Texas, États-Unis): « … Dans l'esprit du maître Nguyễn Lộc, le Vovinam n'appartient pas à sa famille. Il laisse à ses disciples le soin de le développer et de l’enrichir, et surtout de ne pas se limiter dans quelque domaine que ce soit, y compris technique… ».",
                                        "D’après les témoignages et confirmations des maîtres Trần Huy Phong, Lê Sáng et Phan Dương Bình.",
                                        "Le 4 avril de l'année du rat du calendrier lunaire.",
                                        "Sous la domination française (1862-1945).",
                                    ]
                                ?>
                                <div class="main">
                                    <p>Monsieur Nguyễn Lộc est né <span class="hint" rel="tooltip" title="<?php echo $note[0]?>">le 24 mai 1912<span class="note">1</span></span> dans le village de Huu Bang, district de Thach That, province de <span class="hint" rel="tooltip" data-placement="auto" title="<?php echo $note[1]?>"> Son Tay<span class="note">2</span></span>, 
                                    au Nord du Vietnam. Fils de Monsieur Nguyễn Đình Xuyến et de Madame Nguyễn Thị Hoà, il est l'aîné d'une famille de trois frères et <span class="hint" rel="tooltip" data-placement="auto"title="<?php echo $note[2]?>">deux sœurs<span class="note">3</span></span>. 
                                    Pour des raisons économiques, sa famille a déménagé ensuite à Hanoï, capitale du Vietnam.</p>
                                    <p>Maître Nguyễn Lộc a grandit dans un pays sous domination coloniale française depuis cinquante ans (1862-1912) [cf. annexe 1], où les tensions sociales sont au <span class="hint" rel="tooltip" title="<?php echo $note[3]?>">plus haut<span class="note">4</span></span>. 
                                    D’un côté, les révolutionnaires incitent la population et en particulier les jeunes à commettre des actions violentes contre le gouvernement colonial français, de l'autre, les colonialistes utilisent toutes les ruses et manœuvres pour réprimer, 
                                    terroriser ou endormir la population par des courants mondains, romantiques et dévergondés afin que les patriotes vietnamiens ne disposent de soutien dans la population pour étendre la révolution contre la puissance dominatrice...</p>
                                </div>
                                <!-- Boutton pour retourner la carte  onclick="rotateCard(this)"-->
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" data-toggle="modal" data-target="#fondator">En savoir +</button>
                            </div>
                        </div> <!-- Fin du coté frontal -->

                        <!-- Dos de la carte -->
                        <div class="back">
                            <div class="header">
                                <h5>Suite ...</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"> 1.
                                                <p>Face à cette situation, maître Nguyễn Lộc a pris conscience de ces courants opposés qui tiraillent le pays. Il cherche une autre voie dans le but de surpasser ces deux tendances et de développer une nouvelle orientation, pouvant conduire les jeunes vietnamiens dans une voie plus pacifique et plus noble.</p>
                                                <p>D'un côté, maître Nguyễn Lộc condamne avec fermeté la politique colonialiste et de l'autre, il désapprouve les méthodes violentes préconisées par les révolutionnaires de l'époque.</p>
                                                <p>Selon lui, l'Homme doit être au centre de toute réflexion. Il prône la révolution du corps et de l’esprit [cf. annexe 2] pour guider la jeunesse sur trois plans : l’Esprit, le Corps et la Voie. Il considère que le fait d'être humain est une bonne chose, mais devenir <span rel="tooltip" title="<?php echo $note[4]?>">l'Homme Vrai<span class="note">5</span></span> est encore plus noble. </p>
                                            </div>
                                            <div class="carousel-item"> 
                                                <p>Pour lui, l'Homme Vrai doit être ouvert au dialogue, indépendant, pacifique, énergique, courageux, tolérant, généreux, pur, respectueux, déterminé, cultivé, intègre, fort, utile et avoir le <span rel="tooltip" title="<?php echo $note[5]?>">sens de l’honneur<span class="note">6</span></span>. L'Homme Vrai se doit aussi de cultiver un corps robuste, solide, résistant et tenace pour se défendre et pour être utile à la société.</p>
                                                <p>Avec ces valeurs, il veut, d’une part, aider les jeunes à s’échapper de l'intoxication du régime colonial et, d’autre part, réveiller ceux qui se sont engagés dans la voie violente afin d’éviter des tueries et de la haine.</p>
                                                <p>Maître Nguyễn Lộc pense que la société humaine est durable, alors que le régime colonial ou les violences révolutionnaires ne sont que temporaires. Il ne veut pas que les générations futures subissent les conséquences d’une politique d'intoxication ou de violence. Ainsi, son souhait est de laisser au peuple vietnamien et à l'humanité un modèle de vie, une méthode permettant de se perfectionner par l’art de cultiver son corps et son esprit avec un art martial moderne, inspiré de la tradition des arts martiaux vietnamiens plusieurs fois millénaires.</p>
                                            </div>
                                            <div class="carousel-item"> 
                                                <p>Nourri par cette grande aspiration, outre la perfection de la culture et de la vertu, il étudie et s'entraîne à la plupart des arts martiaux vietnamiens. Grâce à sa force physique hors du commun et à son grand talent, il progresse de manière exceptionnelle. Pour enrichir d’avantage ses connaissances, il voyage beaucoup et visiter de nombreuses salles d’entraînement pour s’entretenir avec d’anciens officiers de l'armée impériale et des grands maîtres de renom dans le milieu des arts martiaux vietnamiens.</p>
                                                <p>Il a longuement étudié les caractéristiques respectives de chaque discipline martiale. Il a ainsi remarqué que chaque art martial possède ses avantages et ses inconvénients et qu'en pratiquant une seule discipline, il est difficile d’obtenir rapidement des résultats souhaités. De plus, pour atteindre un <span rel="tooltip" title="<?php echo $note[6]?>">bon niveau<span class="note">7</span></span>, le pratiquant doit s'engager dans la durée, souvent plus de dix ans.</p>
                                            </div>
                                            <div class="carousel-item"> 
                                                <p>Maître Nguyễn Lộc cherche donc à développer une nouvelle méthode d’entraînement qui permettrait d'atteindre un bon niveau dans un délai plus raisonnable. Pour y arriver, il commence par codifier sa méthode d'apprentissage en prenant la lutte et les arts martiaux traditionnels vietnamiens comme fondement, qu’il complète progressivement en s’inspirant des points forts des autres disciplines pour donner naissance, en 1938, à une nouvelle discipline qu’il nomme <span rel="tooltip" title="<?php echo $note[7]?>">Vovinam<span class="note">8</span></span>.
                                                <p>Il décide ensuite d'expérimenter cette méthode en entraînant <span rel="tooltip" title="<?php echo $note[8]?>">en secret<span class="note">9</span></span> certains de ses <span rel="tooltip" title="<?php echo $note[9]?>">proches<span class="note">10</span></span>.Durant cette période expérimentale et d’après le témoignage de Monsieur Nguyễn Đăng Hiển, l'un de ses premiers élèves, maître Nguyễn Lộc accorde beaucoup d'importance aux techniques de base telles que les positions (Tấn), les coups de poing (Đấm), les coups de pied (Đá), les tranchants de la main (Chém), les parades (Gạt), les coudes (Chỏ), les genoux (Gối), etc. Il ajoute également un système pragmatique de techniques de clés et de dégagements (Khoá Gỡ), de techniques de lutte traditionnelle (Vật), de techniques de ciseaux (Đòn Chân) et surtout de techniques d’entraînement avec un partenaire (Song Luyện).</p>
                                            </div>
                                            <div class="carousel-item"> 2.
                                                <p>Après une année expérimentale réussie, qui dépasse largement ses prévisions, maître Nguyễn Lộc prend la décision de présenter le Vovinam au public.</p>
                                                <p>A l'automne 1939, maître Nguyễn Lộc emmène ses premiers élèves [cf. annexe 3] au Grand Théâtre de Hanoï [cf. annexe 4] pour effectuer la première démonstration de l'histoire du Vovinam. Parmi les élèves ayant participé à cette démonstration historique, figurent Mademoiselle Nguyễn Thị Minh [cf. annexe 5], <span rel="tooltip" title="<?php echo $note[10]?>">Monsieur Tạ Quang Bửu<span class="note">11</span></span> et Monsieur Nguyễn Đăng Hiển (D'après les témoignages de Madame Nguyễn Lộc et des maîtres Nguyễn Dần, Lê sáng, Phan Dương Bình et Trần Huy Phong).</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p>Par cette démonstration, il veut également mesurer l'accueil de la population et évaluer à travers ses pratiquants, les valeurs martiales qu'il a étudiées durant des années.</p>
                                                <p>---Photo D'archive---</p>
                                            </div>
                                            <div class="carousel-item">
                                                <p>Après cette démonstration, le Vovinam est chaleureusement accueilli par tous les milieux sportifs et d'arts martiaux à Hanoï, devenant ainsi le flambeau éclatant des arts martiaux nationaux pour la jeunesse. En effet, pendant plus de 75 ans (1862-1940), le gouvernement colonial français a interdit toutes les activités d'arts martiaux au Vietnam. Maître Nguyễn Lộc est le premier à redonner vie aux arts martiaux nationaux, lançant ainsi un appel pour réveiller les consciences vietnamiennes plongées dans un sommeil profond depuis plus d’un demi-siècle.</p>
                                                <p>Il redonne ainsi la confiance et la fierté aux jeunes oscillant encore entre les courants romantiques occidentaux et les idées haineuses.</p>
                                            </div>
                                            <div class="carousel-item">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)"><- Retour</button>
                                    <div class="dirr">
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                            <span class="carousel-control-prev-icon" style="background-color:black;"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                            <span class="carousel-control-next-icon"style="background-color:black;"></span>
                                        </a>
                                    </div>
                            </div>
                        </div> <!-- Fin du dos de la carte -->
                    </div> <!-- Fin de la carte -->
                </div>
            </div>
        </div>
        <!-- Titre -->
        <div class="text-center">
            <div style="padding: 50px;">
                <h1 class="content-title-blue">Les grands maîtres</h1>
            </div>
        </div> 
        <?php 
        $greatMastersBeforeFetch = $db->query('SELECT * FROM specialist');
        $greatMasters = $greatMastersBeforeFetch->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($greatMasters);
        ?>
        <!-- Carte des grands ME -->
        <div class="row">
            <?php
            for ($i=0;$i<count($greatMasters);$i++){
            ?>
            <div class="col-sm-6">
                <!-- Une carte -->
                <div class="card-container manual-flip" >
                    <div class="card">
                        <!-- Coté frontal -->
                        <div class="front">
                            <div class="content">
                                <!-- Photo -->
                                <div class="user">
                                    <img class="img-circle" src=" assets/img/Maitres/ME_Fondateur.png"/>
                                </div>
                                <!-- Contenu -->
                                <div class="main">
                                    <h3 class="name" style="display:inline-block">Maître <?php echo $greatMasters[$i]['name']?></h3>
                                    <p class="profession" style="padding-bottom: 10px;display:inline-block;"><?php echo $greatMasters[$i]['birthday'].' - '.$greatMasters[$i]['deathDate']?></p>
                                    <?php 
                                    $functions = explode(',', $greatMasters[$i]["function"]);
                                    for ($a=0; $a<count($functions); $a++){
                                        echo '<p>'.$functions[$a].'</p>';
                                    }
                                    ?>
                                </div>
                                <!-- Boutton de rotation -->
                                <div class="footer" style="float: right;">
                                    <button class="btn btn-simple" onclick="rotateCard(this)">
                                        En savoir +
                                    </button>
                                </div>
                            </div>
                        </div> <!-- Fin du coté frontal -->
                        <!-- Coté dos de la carte -->
                        <div class="back">
                            <!-- Titre -->
                            <div class="header">
                                <h5><b>Biographie de <?php echo $greatMasters[$i]['name']?></b></h5>
                            </div>
                            <!-- Contenu -->
                            <div class="content">
                                <div class="main">
                                    <p><?php echo $greatMasters[$i]['biography']?></p>
                                </div>
                            </div>
                            <!-- Boutton de rotation -->
                            <div class="footer">
                                <button class="btn btn-simple" rel="tooltip" title="Retourner la carte" onclick="rotateCard(this)">
                                    <- Retour
                                </button>
                            </div>
                        </div> <!-- Fin du dos de la carte -->
                    </div> <!-- Fin d'une carte -->
                </div>
            </div>
            <?php 
            } ?>
        </div>
    </div>

                        <div class="modal fade" id="fondator">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h3 class="modal-title">Maitre Nguyễn Lộc <small class="profession">1912-1960</small></h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="subtitle pl-3">
                                            <h4> I - La jeunesse et la période préliminaire à la création</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>Monsieur Nguyễn Lộc est né <span class="hint" rel="tooltip" title="<?php echo $note[0]?>">le 24 mai 1912<span class="note">1</span></span> dans le village de Huu Bang, district de Thach That, province de <span class="hint" rel="tooltip" data-placement="auto" title="<?php echo $note[1]?>"> Son Tay<span class="note">2</span></span>, 
                                                au Nord du Vietnam. Fils de Monsieur Nguyễn Đình Xuyến et de Madame Nguyễn Thị Hoà, il est l'aîné d'une famille de trois frères et <span class="hint" rel="tooltip" data-placement="auto"title="<?php echo $note[2]?>">deux sœurs<span class="note">3</span></span>. 
                                                Pour des raisons économiques, sa famille a déménagé ensuite à Hanoï, capitale du Vietnam.</p>
                                            <p>Maître Nguyễn Lộc a grandit dans un pays sous domination coloniale française depuis cinquante ans (1862-1912) [cf. annexe 1], où les tensions sociales sont au <span class="hint" rel="tooltip" title="<?php echo $note[3]?>">plus haut<span class="note">4</span></span>. 
                                                D’un côté, les révolutionnaires incitent la population et en particulier les jeunes à commettre des actions violentes contre le gouvernement colonial français, de l'autre, les colonialistes utilisent toutes les ruses et manœuvres pour réprimer, 
                                                terroriser ou endormir la population par des courants mondains, romantiques et dévergondés afin que les patriotes vietnamiens ne disposent de soutien dans la population pour étendre la révolution contre la puissance dominatrice...</p>
                                            <p>Face à cette situation, maître Nguyễn Lộc a pris conscience de ces courants opposés qui tiraillent le pays. Il cherche une autre voie dans le but de surpasser ces deux tendances et de développer une nouvelle orientation, pouvant conduire les jeunes vietnamiens dans une voie plus pacifique et plus noble.</p>
                                            <p>D'un côté, maître Nguyễn Lộc condamne avec fermeté la politique colonialiste et de l'autre, il désapprouve les méthodes violentes préconisées par les révolutionnaires de l'époque.</p>
                                            <p>Selon lui, l'Homme doit être au centre de toute réflexion. Il prône la révolution du corps et de l’esprit [cf. annexe 2] pour guider la jeunesse sur trois plans : l’Esprit, le Corps et la Voie. Il considère que le fait d'être humain est une bonne chose, mais devenir <span class="hint" rel="tooltip" title="<?php echo $note[4]?>">l'Homme Vrai<span class="note">5</span></span> est encore plus noble. </p>
                                            <p>Pour lui, l'Homme Vrai doit être ouvert au dialogue, indépendant, pacifique, énergique, courageux, tolérant, généreux, pur, respectueux, déterminé, cultivé, intègre, fort, utile et avoir le <span class="hint" rel="tooltip" title="<?php echo $note[5]?>">sens de l’honneur<span class="note">6</span></span>. L'Homme Vrai se doit aussi de cultiver un corps robuste, solide, résistant et tenace pour se défendre et pour être utile à la société.</p>
                                            <p>Avec ces valeurs, il veut, d’une part, aider les jeunes à s’échapper de l'intoxication du régime colonial et, d’autre part, réveiller ceux qui se sont engagés dans la voie violente afin d’éviter des tueries et de la haine.</p>
                                            <p>Maître Nguyễn Lộc pense que la société humaine est durable, alors que le régime colonial ou les violences révolutionnaires ne sont que temporaires. Il ne veut pas que les générations futures subissent les conséquences d’une politique d'intoxication ou de violence. Ainsi, son souhait est de laisser au peuple vietnamien et à l'humanité un modèle de vie, une méthode permettant de se perfectionner par l’art de cultiver son corps et son esprit avec un art martial moderne, inspiré de la tradition des arts martiaux vietnamiens plusieurs fois millénaires.</p>
                                            <p>Nourri par cette grande aspiration, outre la perfection de la culture et de la vertu, il étudie et s'entraîne à la plupart des arts martiaux vietnamiens. Grâce à sa force physique hors du commun et à son grand talent, il progresse de manière exceptionnelle. Pour enrichir d’avantage ses connaissances, il voyage beaucoup et visiter de nombreuses salles d’entraînement pour s’entretenir avec d’anciens officiers de l'armée impériale et des grands maîtres de renom dans le milieu des arts martiaux vietnamiens.</p>
                                            <p>Il a longuement étudié les caractéristiques respectives de chaque discipline martiale. Il a ainsi remarqué que chaque art martial possède ses avantages et ses inconvénients et qu'en pratiquant une seule discipline, il est difficile d’obtenir rapidement des résultats souhaités. De plus, pour atteindre un <span class="hint" rel="tooltip" title="<?php echo $note[6]?>">bon niveau<span class="note">7</span></span>, le pratiquant doit s'engager dans la durée, souvent plus de dix ans.</p>
                                            <p>Maître Nguyễn Lộc cherche donc à développer une nouvelle méthode d’entraînement qui permettrait d'atteindre un bon niveau dans un délai plus raisonnable. Pour y arriver, il commence par codifier sa méthode d'apprentissage en prenant la lutte et les arts martiaux traditionnels vietnamiens comme fondement, qu’il complète progressivement en s’inspirant des points forts des autres disciplines pour donner naissance, en 1938, à une nouvelle discipline qu’il nomme <span class="hint" rel="tooltip" title="<?php echo $note[7]?>">Vovinam<span class="note">8</span></span>.
                                            <p>Il décide ensuite d'expérimenter cette méthode en entraînant <span class="hint" rel="tooltip" title="<?php echo $note[8]?>">en secret<span class="note">9</span></span> certains de ses <span class="hint" rel="tooltip" title="<?php echo $note[9]?>">proches<span class="note">10</span></span>.Durant cette période expérimentale et d’après le témoignage de Monsieur Nguyễn Đăng Hiển, l'un de ses premiers élèves, maître Nguyễn Lộc accorde beaucoup d'importance aux techniques de base telles que les positions (Tấn), les coups de poing (Đấm), les coups de pied (Đá), les tranchants de la main (Chém), les parades (Gạt), les coudes (Chỏ), les genoux (Gối), etc. Il ajoute également un système pragmatique de techniques de clés et de dégagements (Khoá Gỡ), de techniques de lutte traditionnelle (Vật), de techniques de ciseaux (Đòn Chân) et surtout de techniques d’entraînement avec un partenaire (Song Luyện).</p>
                                        </div>
                                        <div class="subtitle pl-2">
                                            <h4> II - La période de création (1939-1945)</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>Après une année expérimentale réussie, qui dépasse largement ses prévisions, maître Nguyễn Lộc prend la décision de présenter le Vovinam au public.</p>
                                            <p>A l'automne 1939, maître Nguyễn Lộc emmène ses premiers élèves [cf. annexe 3] au Grand Théâtre de Hanoï [cf. annexe 4] pour effectuer la première démonstration de l'histoire du Vovinam. Parmi les élèves ayant participé à cette démonstration historique, figurent Mademoiselle Nguyễn Thị Minh [cf. annexe 5], <span class="hint" rel="tooltip" title="<?php echo $note[10]?>">Monsieur Tạ Quang Bửu<span class="note">11</span></span> et Monsieur Nguyễn Đăng Hiển (D'après les témoignages de Madame Nguyễn Lộc et des maîtres Nguyễn Dần, Lê sáng, Phan Dương Bình et Trần Huy Phong).</p>
                                            <p>Par cette démonstration, il veut également mesurer l'accueil de la population et évaluer à travers ses pratiquants, les valeurs martiales qu'il a étudiées durant des années.</p>
                                            <p><b>---Photo D'archive--- (Photo 2: le Grand Théâtre de Hanoï, 1900. Source: Jean Noury, l'indochine en cartes postales avant l'ouragan, Publi-fusion, 1992)</b></p>
                                            <p>Après cette démonstration, le Vovinam est chaleureusement accueilli par tous les milieux sportifs et d'arts martiaux à Hanoï, devenant ainsi le flambeau éclatant des arts martiaux nationaux pour la jeunesse. En effet, pendant plus de 75 ans (1862-1940), le gouvernement colonial français a interdit toutes les activités d'arts martiaux au Vietnam. Maître Nguyễn Lộc est le premier à redonner vie aux arts martiaux nationaux, lançant ainsi un appel pour réveiller les consciences vietnamiennes plongées dans un sommeil profond depuis plus d’un demi-siècle.</p>
                                            <p>Il redonne ainsi la confiance et la fierté aux jeunes oscillant encore entre les courants romantiques occidentaux et les idées haineuses.</p>
                                            <p>L'affection et l'estime de la population de Hanoï pour le Vovinam sont une grande surprise pour les autorités coloniales, dont Monsieur Maurice Ducoroy, Commissaire général de la Jeunesse et des Sports en Indochine [cf. annexe 6]. Par l'intermédiaire du <span class="hint" rel="tooltip" title="<?php echo $note[12]?>">docteur Đặng Vũ Hỷ<span class="note">13</span></span>, président de l'Association sportive de Hanoï, Monsieur Maurice Ducoroy invite maître Nguyễn Lộc à <span class="hint" rel="tooltip" title="<?php echo $note[13]?>">enseigner le Vovinam<span class="note">14</span></span>à <span class="hint" rel="tooltip" title="<?php echo $note[14]?>">l'école Normale de Hanoï<span class="note">15</span></span>. Maître Nguyễn Lộc accepte et commence officiellement l’enseignement du Vovinam en 1940.</p>
                                            <p>Par la suite, plusieurs clubs de Vovinam ouvrent dans différents quartiers de Hanoi, accueillant de nombreux jeunes issus de tous les milieux sociaux (lycéens, étudiants, employés et ouvriers). On découvre alors dans le Vovinam, non seulement des techniques simples, efficaces et faciles à pratiquer, mais aussi une philosophie de vie, basée sur </p>
                                            <p><b>---Photo D'archive--- (Photo 3: Maître Nguyễn Lộc entouré de ses élèves, Hanoï, 1948. G/D: Trần Đức Hợp, Nguyễn Cao Hách, Phan Dương Bình, Nguyễn Lộc, Bùi Thiện Nghĩa, Nguyễn Dần)</b></p>
                                            <p>l’idéal de l'Homme Vrai en harmonie avec les valeurs millénaires des arts martiaux traditionnels du Vietnam. </p>
                                            <p>Dès lors, le nom du Vovinam, ainsi que celui du maître Nguyễn Lộc deviennent connus au sein de la population. Le Vovinam devient un art martial populaire, et est enseigné dans tous les quartiers intra et extra-muros de Hanoï.</p>
                                            <p>Durant cette période, le maître fondateur forme de nombreux élèves, dont certains deviendront plus tard des maîtres célèbres comme <span class="hint" rel="tooltip" title="<?php echo $note[15]?>">Phan Dương Bình, Lê Sáng, Trần Đức Hợp, Nguyễn Dần, Lê Văn Phúc, Nguyễn Văn Thông, Lê Trọng Hiệp et Hà Trọng Thịnh<span class="note">16</span></span>. D’autres deviendront des personnalités historiques du Vovinam comme Messieurs Nguyễn Mỹ, Nguyễn Khải, Nguyễn Đăng Hiển, Nguyễn Bích, Nguyễn Đình Lan, Đỗ Đình Bách, Đặng Bỉnh, Đặng Văn Bảy, Trịnh Cự Quý, Đỗ Khánh, Vũ Văn Thức, Nguyễn Đôn, Nguyễn Nhân, Lê Như Hàm, Lê Đình Nhâm, Nguyễn Cao Hách, etc. </p>
                                        </div>
                                        <div class="subtitle pl-1">
                                            <h4> III - La période de l'indépendance du Vietnam</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>Le 9 mars 1945, l'armée japonaise renverse le gouvernement colonial français en Indochine, arrête le gouverneur colonial, Jean Decoux, [cf. annexe 7] et rend l’indépendance au Vietnam. Le surlendemain, 11 mars 1945, l’empereur Bảo Đại [cf. annexe 8] proclame l'indépendance, abolit tous les traités signés avec la France depuis 1884 et met fin à 83 ans de domination française.</p>
                                            <p>Ce brusque changement est une surprise et en l’absence de préparation, laisse le pays dans le chaos et le désordre. En effet, la plupart des institutions jusqu’alors gérées par les Français, à savoir l'économie, la politique, l'armée, la police, l'éducation, l'administration, etc., se retrouvent subitement sans commandement. Le premier gouvernement indépendant, le gouvernement <span class="hint" rel="tooltip" title="<?php echo $note[16]?>">Trần Trọng Kim<span class="note">17</span></span>, ne dure que quatre mois. Raison pour laquelle toutes les personnalités connues et compétentes sont invitées à entrer au gouvernement. Maître Nguyễn Lộc, avec son prestige de fondateur d'un grand mouvement à Hanoï est invité à y entrer. Cependant, il décline formellement l’offre car selon lui, le Vovinam n’est pas un parti politique et n'a donc pas vocation à s'engager dans la politique pour imposer ses idées. Maître Nguyễn Lộc laisse néanmoins ses pratiquants libres de participer à la vie politique, le Vovinam ne portant pas atteinte à la liberté de ses pratiquants.</p>
                                            <p>En revanche, le Vovinam œuvre pour la société. Ainsi lorsque la situation le réclame, le Vovinam participe et apporte son concours aux pouvoirs politiques pour effectuer des actions sociales, caritatives et humanitaires dans un esprit d'altruisme et non lucratif. Animé par cette vision, maître Nguyễn Lộc, tout en déclinant l’offre d’entrer au gouvernement, accepte en revanche de l’aider dans les actions sociales et caritatives.</p>
                                            <p>C’est ainsi que pendant cette période d’instabilité, les pratiquants du Vovinam sont enthousiastes et assurent la sécurité dans les quartiers intra et extra-muros de Hanoï. En outre, maître Nguyễn Lộc collabore avec <span class="hint" rel="tooltip" title="<?php echo $note[17]?>">d'autres collectivités<span class="note">18</span></span> pour organiser les fêtes nationales, telles que la commémoration des <span class="hint" rel="tooltip" title="<?php echo $note[18]?>">rois Hùng Vương<span class="note">19</span></span>, des <span class="hint" rel="tooltip" title="<?php echo $note[19]?>">deux sœurs Trưng<span class="note">20</span></span>. Ils participent également à l’organisation d’actions humanitaires dans le cadre du programme d'aide à la terrible famine qui a ravagé le Nord du Vietnam et tué environ deux millions de personnes en 1945 [cf. annexe 9].</p>
                                            <p>Ainsi, maître Nguyễn Lộc utilise les actions sociales plutôt que la politique pour réaliser son idéal : celui de former une génération de jeunes utiles à la société. Il crée successivement des cours d'auto-défense dans différents endroits : à l'École Normale, à <span class="hint" rel="tooltip" title="<?php echo $note[20]?>">l'École Buoi<span class="note">21</span></span>, au <span class="hint" rel="tooltip" title="<?php echo $note[21]?>">Parc de Au Tri Vien<span class="note">22</span></span>, au Parc de Septo et au Parc de Nha Den.</p>
                                            <p>Il a notamment ouvert des cours Vovinam à la <span class="hint" rel="tooltip" title="<?php echo $note[22]?>">Cité universitaire<span class="note">23</span></span> du Vietnam, cours destinés non seulement aux étudiants mais aussi à la population. Dans ce centre, outre l'enseignement de techniques martiales, il a particulièrement œuvré à la transmission du savoir et de la connaissance, comme l'esprit de l'Homme Vrai. Plusieurs pratiquants de ses cours deviendront plus tard des cadres du <span class="hint" rel="tooltip" title="<?php echo $note[23]?>">Parti Démocratique<span class="note">24</span></span> et du parti Communiste comme <span class="hint" rel="tooltip" title="<?php echo $note[24]?>">Dương Đức Hiền<span class="note">25</span></span>, <span class="hint" rel="tooltip" title="<?php echo $note[25]?>">Cù Huy Cận<span class="note">26</span></span>, <span class="hint" rel="tooltip" title="<?php echo $note[26]?>">Xuân Diệu<span class="note">27</span></span> et <span class="hint" rel="tooltip" title="<?php echo $note[27]?>">Phan Mỹ<span class="note">28</span></span>.</p>
                                            <p>Parallèlement, pour répondre aux besoins des jeunes, il crée deux groupements de jeunesse :</p>
                                            <ul>
                                                <li>L'association des pratiquants engagés (Đoàn Võ Sĩ Cảm Tử), qui comprend des jeunes pratiquants robustes et actifs.</li>
                                                <li>L'association des héros de demain (Đoàn Anh Hùng Ngày Mai), qui comprend des adolescents de moins de 18 ans.</li>
                                            </ul>
                                            <p>En avril 1945, des enseignants du Vovinam sont envoyés par vagues successives dans tout le pays pour développer le Vovinam :</p>
                                            <ul>
                                                <li>Đỗ Khánh dans le Sud du Vietnam,</li>
                                                <li><span class="hint" rel="tooltip" title="<?php echo $note[28]?>">Vũ Văn Thức à Thanh Hoa<span class="note">29</span></span>,</li>
                                                <li>Nguyễn Đôn à Hung Yen,</li>
                                                <li>Nguyễn Lan à Hai Duong,</li>
                                                <li>Lê Đình Nhâm à Bac Giang,</li>
                                                <li>Nguyễn Nhân à Hai Phong,</li>
                                                <li>Lê Như Hàm à Phu Ly.</li>
                                            </ul>
                                            <p>En septembre 1945 (<small>après la chute du gouvernement Trần Trọng Kim et l'installation du premier gouvernement révolutionnaire provisoire de la Ligue Viet Minh, dirigé par Hồ Chí Minh</small>), sous l’impulsion de Monsieur Dương Đức Hiền, ancien pratiquant, ministre de la</p>
                                            <p>Jeunesse, maître Nguyễn Lộc accepte l'invitation et envoie des maîtres et enseignants pour enseigner le Vovinam au sein <span class="hint" rel="tooltip" title="<?php echo $note[29]?>">d’institution gouvernementales<span class="note">30</span></span> tels que :</p>
                                            <ul>
                                                <li>Đỗ Đình Bách et Nguyễn Mỹ qui donnent des cours destinés aux cadres de la jeunesse à <span class="hint" rel="tooltip" title="<?php echo $note[30]?>">l'hippodrome San Quan Ngua<span class="note">31</span></span></li>
                                                <li>Nguyễn Khải, Nguyễn Bích, Nguyễn Đình Lan et Nguyễn Đăng Hiển qui sont responsables des cours d'auto-défense de combat et d'auto-défense en ville au <span class="hint" rel="tooltip" title="<?php echo $note[31]?>">parc d'exposition Khu Dau Xao<span class="note">32</span></span></li>
                                                <li>Trịnh Cự Quí, Lê Sáng, Đặng Bỉnh et Đặng Văn Bảy qui s'occupent des cours réservés aux commandos de la police au <span class="hint" rel="tooltip" title="<?php echo $note[32]?>">terrain de Bac Qua<span class="note">33</span></span>et des cours destinés aux jeunes au parc de Septo à Hang Bay.</li>
                                            </ul>
                                        </div>
                                        <div class="subtitle pl-1">
                                            <h4> IV - Le Vovinam pendant la guerre franco-vietnamienne</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>En 1946, la <span class="hint" rel="tooltip" title="<?php echo $note[33]?>">guerre franco-vietnamienne<span class="note">34</span></span> éclate officiellement lorsque l’armée française tente de reprendre progressivement le contrôle de l’Indochine (Laos, Cambodge et Vietnam). Les Viet Minh entrent en guérilla, toutes les ressources humaines et matérielles sont monopolisées pour la guerre. Tous les cours d'arts martiaux et les promotions issues des années 1939 à 1946 sont suspendus car la plupart des pratiquants du Vovinam sont engagés dans la résistance, ce qui entraîne une grande dispersion. Parmi les pratiquants engagés dans la résistance, quelques-uns sont devenus plus tard des officiers de haut rang tels que Nguyễn Khải, Nguyễn Bích, Nguyễn Đăng Hiển, Đỗ Đình Bách, etc.</p>
                                            <p>Maître Nguyễn Lộc et ses élèves les plus proches quittent Hanoï et se divisent en deux groupes:</p>
                                            <ul>
                                                <li>Le premier groupe, dirigé par maître Nguyễn Lộc, remonte vers la haute région (suivant l'amont du Fleuve Rouge, au Nord-Ouest de Hanoï). Ce groupe comprend Trịnh Cự Quí, Lê Sáng, Lê Văn Tiên, Lê Trình, Nguyễn Dần, Nguyễn Ngọ, Nguyễn Thịnh, Võ Văn Cải, etc.</li>
                                                <li>Le second groupe, guidé par Nguyễn Mỹ, descend vers la plaine (au Sud-est de Hanoï, suivant l'aval du Fleuve Rouge). Ce groupe comprend Lê Như Hàm, Đặng Bỉnh, Đặng Bảy, Lê Tâm, Nguyễn Điện, Trần Văn Quang, Hoàng Văn Quý, etc.</li>
                                            </ul>
                                            <p>Après s'être séparé du groupe de Nguyễn Mỹ, maître Nguyễn Lộc emmène son groupe dans son village natal de Huu Bang, district de Thach That, province de Son Tay. Là-bas, il ouvre des cours d'arts martiaux élémentaires pour les jeunes de Thach That et envoie ses disciples entraîner les élèves officiers à l'École politico-militaire de Tran Quoc Tuan. Autrefois, cette école était dans la province de Son Tay, mais à cause de la guerre, elle est déplacée dans le district de Thach That.</p>
                                            <p>Quelques temps plus tard, Dương Đức Hiền, ancien élève du maître Nguyễn Lộc à la Cité universitaire, qui n'est plus Ministre de la Jeunesse mais devenu commandant général de la guérilla et de la milice populaire dans le district de Quoc Oai. Il apprend que maître Nguyễn Lộc est revenu au village de Huu Bang ; il l’informe que la guerre approche et lui conseille de s’en fuir à nouveau vers une région plus sûre.</p>
                                            <p>Suivant ses conseils, maître Nguyễn Lộc et ses disciples se remettent en route. Partout où ils s’arrêtent, la résistance locale leur demande d’enseigner les arts martiaux aux jeunes et à la milice populaire. Cependant, ils ne restent jamais plus de trois mois à chaque endroit. Durant un an d’exil dans la région montagneuse, maître Nguyễn Lộc et ses disciples dispensent de nombreux cours de Vovinam dans les villages de Chue Luu, Am Thuong, Thanh Huong, Dan Ha, Dan Phu, etc. Malheureusement, ces entraînements restent épars et sporadiques à cause du manque de moyens de transport et de communication, mais surtout à cause de la guerre, source d’une grande incertitude.</p>
                                            <p>Lassé par ces déplacements et par la guerre, maître Nguyễn Lộc descend vers Dong Quan où il retrouve le groupe de Nguyễn Mỹ qui revient de Thanh Hoa. Il conseille à ses disciples de retourner auprès de leurs familles. Il pense en effet qu’en développant leur enseignement chacun à des endroits différents, ils pourront aider plus efficacement la résistance. Il se sépare donc une nouvelle fois de ses disciples.</p>
                                            <p>Quelque temps après, maître Nguyễn Lộc s'installe dans la zone contrôlée par la milice catholique à <span class="hint" rel="tooltip" title="<?php echo $note[34]?>">Bui Chu et Phat Diem<span class="note">35</span></span>, une zone autonome peuplée de catholiques, dirigée par les évêques <span class="hint" rel="tooltip" title="<?php echo $note[35]?>">Lê Hữu Từ<span class="note">36</span></span> et <span class="hint" rel="tooltip" title="<?php echo $note[36]?>">Phạm Ngọc Chi<span class="note">37</span></span>. Faisant suite à l'invitation de Monsieur Trần Thiện, commandant général de la milice catholique de cette zone, maître Nguyễn Lac envoie ses disciples enseigner les arts martiaux aux militaires et aux jeunes de cette zone [cf. annexe 10].</p>
                                            <p>En août 1948, maître Nguyễn Lac retourne à Hanoï. Il se retrouve dans une situation difficile, mais malgré cela, il continue à ouvrir des cours Vovinam et à former de nouveaux élèves. Cependant, ses élèves ne restent pas longtemps, soit pour des raisons économiques, soit pour s’engager dans la guerre franco-vietnamienne. Parmi les disciples qui l’ont suivi à Hanoï, maître Lê Sáng demande lui aussi à suspendre ses activités pour des raisons économiques pendant six ans (cf. annexe 16). Le seul enseignant resté auprès de</p>
                                            <p><b>---Photo D'archive--- (Photo 4 : Hanoï 1990. Les retrouvailles des anciens après 36 ans de séparation (1954-1990) G/D : Phan Dương Bình, Lê Sáng, Nguyễn Mỹ, Trịnh Cự Quí, Đặng Văn Bảy Extrait de la revue Vovinam-Viet Vo Dao, États-Unis, 1991)</b></p>
                                            <p>maître Nguyễn Lộc est maître Phan Dương Bình, l’un de ses meilleurs élèves et le disciple le plus efficace durant cette période difficile. Maître Bình l’aide à enseigner le Vovinam au club de Hang Trong et à <span class="hint" rel="tooltip" title="<?php echo $note[38]?>">l'École Hang Than<span class="note">39</span></span>. Parmi les élèves de cette période, Lê Văn Phúc, deviendra plus tard un grand maître du Vovinam [cf. annexe 11].</p>
                                            <p>En 1951, maître Nguyễn Lộc et d’autres personnalités de Hanoï créent l'association des experts <span class="hint" rel="tooltip" title="<?php echo $note[39]?>">d'Arts Martiaux Vietnamiens<span class="note">40</span></span> (Việt Nam Võ Sĩ Đoàn). Cette association relance le mouvement Vovinam avec des entraînements de masse à l'École Hang Than, à Hanoï. Néanmoins, en 1954, la guerre franco-vietnamienne arrivant dans une phase cruciale, maître Nguyễn Lộc doit à nouveau suspendre toutes ses activités.</p>
                                            <p>En juin 1954, l’armée française est vaincue à Dien Bien Phu. Les accords de Genève sont signés le 20 juillet 1954, mettant fin à la guerre. Le Vietnam est alors séparé en deux, le Nord dirigé par Hồ Chí Minh, qui établit le régime Communiste et le Sud est gouverné par Bảo Đại sous un régime Républicain monarchique.</p>
                                        </div>
                                        <div class="subtitle pl-2">
                                            <h4> V - Le Vovinam au Vietnam du Sud (1954-1960)</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>En août 1954, en raison du partage Nord-Sud du Vietnam, maître Nguyễn Lộc et sa famille décident de migrer au Sud, à Saigon, avec quelques-uns de ses disciples les plus <span class="hint" rel="tooltip" title="<?php echo $note[40]?>">proches<span class="note">41</span></span>, notamment Phan Dương Bình, Nguyễn Dần et Trần Đức Hợp. Dans le même temps, d'autres disciples migrent eux aussi à Saigon comme Lê Sáng, Bùi Thiện Nghĩa, Hà Trọng Thịnh, Nguyễn Văn Thông, Lê Trọng Hiệp, Lê Văn Phúc, Ngô Hữu Liễn, etc</p>
                                            <p>Maître Nguyễn Lộc arrive au Sud Vietnam dans une situation politique brûlante et chaotique, laissant derrière lui tous ses biens afin de poursuivre son idéal : former une génération de jeunes pour la société et pour l'humanité.</p>
                                            <p>La première salle d’entraînement de Vovinam inaugurée au Sud Vietnam se situe au <span class="hint" rel="tooltip" title="<?php echo $note[41]?>">51 rue Frères Louis à Saigon<span class="note">42</span></span>. Par la suite, elle déménage à la rue Aviateur Garros, appelée <span class="hint" rel="tooltip" title="<?php echo $note[42]?>">club de Thu Khoa Huan<span class="note">43</span></span>. Ce club est le centre d’entrainement de Vovinam le plus importante du maître Nguyễn Lộc. Les pratiquants se comptent par centaine, parmi les pratiquants formés dans ce club, il y a Trần Huy Phong, Phạm Hữu Độ, Nguyễn Văn Thư, Ngô Hữu Liễn, Trần Thế Phượng, Nguyễn Văn Nuôi, Nguyễn Gia Tuấn, etc.</p>
                                            <p><b>---Photo D'archive--- (Photo 5 : en 1955, Maître Nguyễn Lộc enseigne à l'École National de la Gendarmerie du Vietnam)</b></p>
                                            <p>Par ailleurs, le Vovinam est invité par les autorités de la République du Sud Vietnam à enseigner à l’École des Officiers de la <span class="hint" rel="tooltip" title="<?php echo $note[43]?>">Gendarmerie Nationale de Thu Duc<span class="note">44</span></span> (photo 5 et 6) et à un certain nombre d'unités du régiment du génie de l’armée.</p>
                                            <p>Malheureusement, en 1957, la santé de maître Nguyễn Lộc se dégrade subitement. Il est forcé d’arrêter l’enseignement et déménage chez son jeune frère Nguyễn Hải au <span class="hint" rel="tooltip" title="<?php echo $note[44]?>">Building Everest<span class="note">45</span></span> où il continue d'étudier les arts martiaux et perfectionne le système philosophique du Vovinam. Il autorise ses disciples Lê Sáng, Trần Huy Phong, Nguyễn Gia Tuấn, Nguyễn Văn Nuôi et Nguyễn Văn Thư, à ouvrir d’autres salles d’entraînement, tandis qu’il se retire comme conseiller. Ceux-ci créer le centre d’entraînement central du Vovinam, dont le siège est installé à l'avenue Tran Hung Dao, dans le 5ème district de Saigon [cf. annexe 12] et les succursales situées rue Tran Khanh Du, rue Su Van Hanh et rue Phan Dinh Phung.</p>
                                            <p>C’est à cette époque que maître Lê Sáng, étant le plus âgé et ayant le plus d’ancienneté dans la discipline, est appelé <span class="hint" rel="tooltip" title="<?php echo $note[45]?>">Maître Aîné (võ sư trưởng)<span class="note">46</span></span>.</p>
                                        </div>
                                        <div class="subtitle pl-1">
                                            <h4> VI - La personnalité de maître Nguyễn Lộc et son enseignement</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>Maître Nguyễn Lộc est une personne très sérieuse, ouverte d’esprit et désintéressée. Il préconise le perfectionnement dans tous les domaines et le développement d’un comportement vertueux. Il refuse toute corruption et obéissance aveugle à la hiérarchie prônée par la <span class="hint" rel="tooltip" title="<?php echo $note[46]?>">pensée confucéenne<span class="note">47</span></span>.</p>
                                            <p>Il refuse que ses disciples lui adressent des marques de supériorité comme l’appeler « Vénérable Maître », comme cela se faisait dans la plupart des écoles d’arts martiaux de l’époque, ou bien qu’ils lui font des courbettes, se prosternent et lui obéissent aveuglement. Dans son idéal, il a fondé le Vovinam pour former une génération de jeunes courageux, fiers et utiles à la société. C'est pourquoi il considère ses élèves comme ses compagnons.</p>
                                            <p>En effet, il demande à ses disciples de l'appeler <span class="hint" rel="tooltip" title="<?php echo $note[47]?>">« grand frère »<span class="note">48</span></span>, d'être sincères, sérieux, accessibles, généreux, audacieux, travailleurs, courageux, dignes d'un pratiquant des arts martiaux.</p>
                                            <p>Cet esprit moderne est visible dans la plupart des photos, où l'on peut voir maître Nguyễn Lộc en tenue de ville et ses élèves le saluant debout, en se tenant droit et le regardant en face. Cet esprit a fait du Vovinam-Viet Vo Dao un art martial populaire, ouvert à tous les milieux sociaux. Le Vovinam n'a rien à cacher, n’est ni mystérieux, ni sélectif, ni réservé à une élite minoritaire comme dans la plupart des écoles d'arts martiaux de l’époque. C’est grâce à cet esprit a permit au vovinam de continuer de progresser malgré les guerres et les interdictions et de se développé jusqu’à devenir un art martial mondial.</p>
                                            <p>Sur le plan d’organisationnel, maître Nguyễn Lộc n'est pas obnubilé par la hiérarchie, ni par une gestion complexe. Il préfère la simplicité et privilégie les actions efficaces afin d'atteindre facilement l’objectif. Par conséquent, durant toute la période d'édification de 1938 à 1960, le Vovinam n'a pas de patriarche. Maître Nguyễn Lộc se contente d’être reconnu comme le maître fondateur.</p>
                                            <p>Bien qu’ayant fondé le Vovinam par ses efforts personnels, il persiste à considérer que cette œuvre doit être dédiée à la société et à l'humanité, conformément à l'idéal qu'il poursuit. Selon ses souhaits, le Vovinam ne doit pas être considéré comme son œuvre personnelle ou celle de <span class="hint" rel="tooltip" title="<?php echo $note[48]?>">sa famille<span class="note">49</span></span>, mais comme un héritage de la culture des arts martiaux vietnamiens, une œuvre collective à laquelle tous les maîtres et pratiquants ont le droit de contribuer et poursuivre comme dans une grande famille.</p>
                                            <p>Sa façon d’enseigner est très minutieuse ; il s'occupe de chaque pratiquant en fonction de leurs aptitudes techniques et niveaux culturels. Lui seul peut enseigner les nouvelles techniques et ses assistants ont le devoir de les faire réviser en <span class="hint" rel="tooltip" title="<?php echo $note[49]?>">son absence<span class="note">50</span></span>. Plus tard, cette méthode deviendra « La méthode » d’enseignement du Vovinam-Viet Vo Dao, une « méthode non codifiée », mais que tous les maîtres appliquent encore de nos jours.</p>
                                            <p><b>---Photo D'archive--- (Photo 6 : en 1955, Devant l'École Nationale de la Gendarmerie du Vietnam – de gauche à droite Nguyễn Văn Thông, Trần Đức Hợp, Lê Sáng, Nguyễn Lộc, Bùi Thiện Nghĩa, Nguyễn Cao Hách, Nguyễn Dần) </b></p>
                                            <p>Quant aux disciples ayant un bon niveau culturel et une aptitude au management, maître Nguyễn Lộc les forme plus particulièrement dans les domaines sociaux, politiques, psychologiques et de gestion. Il encourage souvent ses élèves à participer aux activités collectives et sociales en dehors des cours d'arts martiaux. Grâce à cela, la plupart des maîtres qu’il a formés ont acquis des compétences aussi bien sur le plan technique qu’intellectuel et obtiennent souvent une bonne position dans la société.</p>
                                        </div>
                                        <div class="subtitle">
                                            <h4> VII- Le décès du maître Nguyễn Lộc</h4>
                                        </div>
                                        <div class="content pl-5 pr-5">
                                            <p>Maître Nguyễn Lộc décède le <span class="hint" rel="tooltip" title="<?php echo $note[50]?>">29 avril 1960<span class="note">51</span></span> à Saigon [cf. annexe 13] et est inhumé dans le cimetière de Mac Dinh Chi [cf. annexe 14]. Il laisse neuf enfants, trois garçons et six filles. Il n’a vécu que 48 ans mais a laissé aux arts martiaux vietnamiens et à l’humanité une œuvre extraordinaire : le Vovinam-Viet Vo Dao.</p>
                                            <p>Il laisse également une génération de jeunes bien formés, pleins d'idéaux, capables de lui succéder pour atteindre l’objectif dont il a tant rêvé, celui de populariser le Vovinam-Viet Vo Dao au niveau national avec comme idéal, « Être Fort Pour Être Utile » et être « l’Homme Vrai ». Ses disciples réaliseront beaucoup d’avancées vers cet objectif durant la période entre 1960 et 1975, mais ils considèrent toujours cette œuvre comme inachevée.</p>
                                            <p>Aujourd'hui, le Vovinam-Viet Vo Dao est devenu un symbole de la culture vietnamienne, largement répandu à travers le monde, sans distinction d'appartenance ethnique, de pays, de religion ou d'opinion politique.</p>
                                        </div>
                                        <div class="subtitle">
                                            <h4> VIII - Éloge funèbre du maître Nguyễn Lộc</h4>
                                            <h4 class="praise-sub"><small>Lu par Maître Aîné Lê Sáng lors de la cérémonie d'enterrement du fondateur Nguyễn Lộc au cimetière de Mac Dinh Chi à Saigon, avril 1960.</small></h4>
                                        </div>
                                        <div class="praise pl-5 pr-5">
                                            <!--
                                            <p>Grand frère Nguyễn Lộc !</p>
                                            -->
                                            <div class="catch-phrase"></div>
                                            <p>La vie et la mort, tout le monde doit passer par là, mais nous même, comme tous les pratiquants du Vovinam, ne pensons pas que ce moment douloureux est arrivé si tôt.</p>
                                            <p>Rappelle-toi de l’époque où le pays était encore sous <span class="hint" rel="tooltip" title="<?php echo $note[51]?>">le joug de l'esclavage<span class="note">52</span></span>. Animé d’une passion débordante, tu as quitté tes amis insouciants pour t'engager personnellement dans une noble voie.</p>
                                            <p>Avec talent, tu as pu harmoniser la quintessence des arts martiaux anciens et modernes de l'Asie pour concevoir une discipline au service de la nation.</p>
                                            <p>Au fil des ans, tu as développé le fruit de ton invention en transmettant une force intense à la jeunesse pour une vie meilleure, confiante, fière et utile.</p>
                                            <p>Grâce à toi, la patrie est resplendissante !</p>
                                            <p>Grâce à toi, la jeunesse n'est plus désorientée !</p>
                                            <p>Ainsi, tu es devenu célèbre dans tout le pays, du Nord au Sud, à travers des millions de pratiquants.</p>
                                            <p>Sous la domination française, les colonialistes te craignaient. Ils ont tout essayé mais n'ont pas pu te corrompre. Sous la domination japonaise, les fascistes n’ont pas réussi à t’ébranler par l'argent ou la gloire. Pendant toute la période où le pays était en mouvement, tu as su donner au peuple l'arme la plus tranchante pour être confiant dans la lutte et pour défendre notre chère patrie. Comme toujours, tu es resté en dehors de tout endoctrinement pour être indépendant, la tête haute, et avec un seul objectif : former des générations de jeunes en bonne santé physique et mentale.</p>
                                            <p>Pourquoi le destin si capricieux t’a-t-il emporté trop tôt, laissant à ceux qui restent beaucoup de regrets et d’affection.</p>
                                            <div class="catch-phrase"></div>
                                            <p>Émus au point de ne pouvoir te faire d'éloge funèbre, voici tes proches en sanglots qui n’arrêtent pas de pleurer, voilà tes élèves qui sont venus te dire adieu, le cœur serré.</p>
                                            <p>Nous te pleurons en te remerciant des liens affectueux maître-élèves qui nous unissent ; nous te pleurons et t’adressons notre profonde gratitude. Tu nous as considérés comme les membres de ta famille, tu nous as traités comme tes frères de sang.</p>
                                            <p>Aujourd’hui, tu n'es plus sur Terre ; ton corps est parti, mais ton esprit reste encore, et restera pour toujours dans le cœur des générations futures et dans l'histoire.</p>
                                            <p>Toujours fidèles à notre idéal, nous nous engageons à suivre ton exemple, à être dignes de ta confiance et à poursuivre la voie de l'art martial Vovinam.</p>
                                            <div class="catch-phrase"></div>
                                            <p>De ton vivant, tu as glorifié notre pays. Ta mort signifie simplement que tu nous as transmis ta force, et maintenant, c'est à notre tour de retransmettre cette énergie au peuple et aux générations futures.</p>
                                            <p>S'associant avec l'âme sacrée du pays, nous sommes convaincus que tu resteras toujours à nos côtés pour nous guider et nous rappeler à remplir notre devoir.</p>
                                            <div class="catch-phrase"></div>
                                            <p>En ce moment réunis ici, nous nous inclinons devant ton cercueil pour te dire adieu et prions pour toi, pour que ton âme soit libre dans l'au-delà.</p>
                                            <div class="source"></div>
                                        </div>
                                        
                                    </div>

                                    <script>
                                        fondatorModal = document.getElementById('fondator');
                                        catchPhrase = fondatorModal.getElementsByClassName('catch-phrase');
                                        for (i=0;i<catchPhrase.length;i++){
                                            catchPhrase[i].innerHTML = "<p>Grand frère Nguyễn Lộc !</p>";
                                        }
                                    </script>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script>
    $().ready(function(){
        $('[rel="tooltip"]').tooltip({html: true, placement: "top"});
    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>
