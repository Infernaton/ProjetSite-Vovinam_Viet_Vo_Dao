<?php 
require_once 'php/init.php';

$greatMastersBeforeFetch = $db->query('SELECT * FROM specialist ORDER BY id');
$greatMastersDB = $greatMastersBeforeFetch->fetchAll(PDO::FETCH_ASSOC);

//var_dump($greatMasters);

$path = 'assets/img/Maitres';
$greatMasters = ['
    {
        "id":0,
        "name":"Maître Nguyễn Lộc",
        "date":"1912-1960",
        "note": [
            "Le 8 avril de l\'année Nham Ty, (année du Rat), selon le calendrier lunaire.",
            "Actuellement Ha Tay.",
            "La famille du maître Nguyễn Lộc est composée de: <ol> <li>Nguyễn Lộc,</li> <li>Nguyễn Thị Kim Thái,</li> <li>Nguyễn Văn Dần,</li> <li>Nguyễn Quang Hải,</li> <li>Nguyễn Thị Bích Hà.</li></ol>",
            "Entre 1912 et 1938, le Vietnam est encore sous la domination française. Il existe de très nombreux mouvements et des organisations révolutionnaires et résistances contre le gouvernement colonial français.",
            "L\'Homme dans le sens universel.",
            "Plus tard, ces valeurs sont devenues les Codes d\'Honneur des Maîtres d’où les dix principes fondamentaux du Vovinam-Viet Vo Dao établis par le premier Conseil des Maîtres du Vovinam-Viet Vo Dao en 1964, puis transformés en neuf principes fondamentaux internationaux par le 7ème Congrès Mondial du Vovinam-Viet Vo Dao en mai 2012 à Paris.",
            "Niveau moyen, équivalent de la ceinture jaune ou noire de notre époque.",
            "A l\'époque les arts martiaux sont encore interdits par le gouvernement colonial.",
            "Parmi les 1ers pratiquants figurent : Nguyễn Dần (jeune frère du maître fondateur), Nguyễn Đăng Hiển, mademoiselle Nguyễn Thị Minh et Tạ Quang Bửu. Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 17 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
            "Monsieur Tạ Quang Bửu (1910-1986), représente la ligue Vietminh au moment de la signature des accords de Genève le 20 juillet 1954, qui séparent le Vietnam en deux parties, avec les ministres des affaires étrangères, à savoir John Foster Dulles (États-Unis), Molotov (Union soviétique), Anthony Eden (Royaume Uni), George Bidaut (France), Chu En-lai (Chine populaire).",
            "Le nom du docteur Đặng Vũ Hỷ a été évoqué plusieurs fois dans les textes historiques du Vovinam, dont Revue Interne – Centre de formation Vovinam, 1965, page 4 (Nội san – Trung tâm huấn luyện Vovinam, 1965) et Introduction au Viet Vo Dao, édition Fédération de Formation Vovinam-VVĐ, 1969, page 15 à 26 (Việt Võ Đạo Nhập Môn, Tổng cục huấn luyện Vovinam-VVĐ, 1969). Il est l\'un des dignitaires de l\'éducation physique du gouvernement colonial français.",
            "A partir de 1940, le gouvernement colonial commence à assouplir sa politique concernant les arts martiaux (cf. annexe 6), mais la plupart des écoles restent méfiantes, continuent à pratiquer dans la clandestinité.",
            "L\'École Normale, rue Do Huu Vi, Hanoï. Aujourd\'hui appelée école Phan Dinh Phung, située au 67B rue Cua Bac, district Ba Dinh, à Hanoï.",
            "Ces maîtres sont aujourd\'hui Ceintures Blanches Suprêmes et membres du Conseil Suprême des Maîtres de la Fédération Mondiale de Vovinam-Viet Vo Dao.",
            "Trần Trọng Kim (1883-1953) est un enseignant, un historien de renom et un homme politique vietnamien. Son gouvernement est formé le 17 avril 1945 et démissionne le 8 août 1945.",
            "Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, pages 23, 24 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001) : « … Les pratiquants de Vovinam ont spécialement en charge d’éliminer les groupes de jeu et de voleurs dans la ville de Hanoï… Un groupe de jeunes composés de pratiquants de Vovinam, de Scouts de Hanoï et d’étudiants, récoltent des dons… Nous participons à l\'organisation de la commémoration des deux sœur Trưng… Nous participons aussi à la commémoration des fondateurs Hùng Vương… ». Témoignage de Monsieur Nghiêm Văn Thạch (1929-2016), ancien Vice-commissaire général des Scouts au Vietnam. En 1945, il est âgé de 16 ans, membre des Scouts à Hanoï. Monsieur Nghiêm Văn Thạch confirme qu\'il existe une collaboration entre l\'Association du scoutisme au Tonkin et le Vovinam pour réaliser des actions sociales et caritatives.",
            "La dynastie des rois Hung Vuong est une dynastie de 17 rois entre 2888 av. J.-C. et 258 av. J.-C. Considérés comme les fondateurs du pays et célébrés chaque année le dixième jour du troisième mois lunaire (au mois d\'avril du calendrier grégorien).",
            "Trưng Trắc et Trưng Nhị (12-43 après J.C.) sont deux personnages historiques qui se sont opposés victorieusement à la domination chinoise au Viêt Nam. Elles sont vénérées comme des héroïnes nationales, instigatrices du premier mouvement de résistance antichinois, après 247 ans de domination. Beaucoup de temples leur sont dédiés et un jour de congé annuel est accordé en février pour commémorer leur disparition. Un district de Hanoï porte leur nom, tout comme de nombreuses rues et de nombreuses écoles à travers le pays.",
            "École Buoi, aujourd\'hui appelée École Chu Van An, située au 10 rue Thuy Khue, District Ba Dinh, à Hanoï.",
            "Actuellement le Palais culturel de l\'enfant, situé au 36 rue Ly Thai To, Hanoï.",
            "Actuellement l\'Université Polytechnique, Hanoï.",
            "Le Parti démocratique est créé le 30 juin 1944, aidé par le parti communiste indochinois. Il rassemble des progressistes, des patriotes et des personnes issues du milieu intellectuel, des petits bourgeois, des commerçants et des personnes issus de la bourgeoisie. (Jean Lacouture, Hồ Chí Minh, Seuil, Paris, 1969).",
            "Monsieur Dương Đức Hiền, ancien pratiquant du Vovinam, membre du Parti démocratique, a participé plusieurs fois en tant que Ministre de la Jeunesse au gouvernement révolutionnaire provisoire du 29 août 1945 et du gouvernement d\'union de la résistance du 1er janvier 1946.",
            "Monsieur Cù Huy Cận, (né en 1919), poète, ancien pratiquant du Vovinam, membre du parti Communiste, a participé plusieurs fois au gouvernement révolutionnaire provisoire du 29 août 1945 (Ministre sans portefeuille), au gouvernement d\'union de la résistance du 1er janvier 1946 (Secrétaire d\'État à l\'agriculture), et au gouvernement d\'union du 3 novembre 1946 (Secrétaire d’État à l\'agriculture, puis Secrétaire d’État à la sécurité intérieure et Secrétaire d’État à l\'économie).",
            "Monsieur Xuân Diệu, (né en 1916), ancien pratiquant du Vovinam, membre du parti Communiste, est un poète de renom au Vietnam.",
            "Monsieur Phan Mỹ, ancien pratiquant du Vovinam, membre du parti Communiste, est le petit frère de Monsieur Phan Anh, Ministre de la jeunesse du gouvernement de Trần Trọng Kim.",
            "Đỗ Khánh et Vũ Văn Thức sont morts au combat lors de la lutte contre l’Armée Française au Sud du Vietnam.",
            "Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 25 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
            "Actuellement le Palais des sports My Dinh, Hanoï.",
            "Actuellement le Palais culturel Russo-vietnamien, Hanoï.",
            "Actuellement le marché de Bac Qua, Hanoï.",
            "Appelée aussi la guerre d’Indochine, c\'est un conflit armé qui s’est déroulé de 1946 à 1954 entre la France et le Viêt Minh. Le conflit s’achève après la défaite de l\'armée française à Dien Bien Phu et aboutit aux accords de Genève. La France (George Bidault, ministre des affaires étrangères) a signés (20 juillet 1954) avec le Vietnam (Tạ Quang Bửu) et les ministres des affaires étrangères : John Foster Dulles (États-Unis), Molotov (Union Soviétique), Anthony Eden (Royaume Uni) et Chu En-lai (Chine Populaire). Ces accords partagent le Vietnam en deux États rivaux, ayant pour frontière le 17ème parallèle. Le Nord est gouverné par Hồ Chí Minh qui établit le régime communiste ; le Sud est gouverné par Bảo Đại sous un régime Républicain monarchique. La France renonce à ses intentions colonialistes et se retire de l\'Indochine. Cette guerre compte plus de 500 000 victimes.",
            "Bui Chu et Phat Diem sont des villes proches de la province de Nam Dinh, près de la mer, à côté de l\'embouchure Ba Lat où se jette le Fleuve Rouge.",
            "L\'évêque Anselmo Thaddeus Lê Hữu Từ (1896-1967) est né le 28 octobre 1896 dans le village de Di Loan, province de Quang Tri, dans une famille de dix frères et sœurs, dont cinq (trois frères et deux sœurs) deviendront des religieux. Devenu prêtre le 22 décembre 1928 à l\'âge de 32 ans, il obtient la gouvernance du diocèse de Phat Diem ; le 1er octobre 1945, il est sacré Monseigneur le 29 octobre 1945. Il décède en 1967 à l\'âge de 71 ans.",
            "L\'évêque Phạm Ngọc Chi (1909-1988) est né le 14 mai 1909 à Ton Dao, district de Kim Son, ville de Phat Diem, province de Ninh Binh, Nord Vietnam. En 1920, il s’inscrit à l\'École de Tap Ba Lang (Thanh Hoa). Il est ensuite envoyé à l\'Université pontificale au Vatican (Rome) en 1927. Le 23 décembre 1933, il devient prêtre. Très cultivé, il obtient plusieurs diplômes : Doctorat ès philosophie, Maîtrise de théologie, Maîtrise des lois épiscopales de l\'Université de Paris en 1935. En 1947 il est promu directeur du séminaire de Phat Diem. En 1950 il devient Monseigneur du diocèse de Bui Chu, en 1960 Monseigneur du diocèse de Qui Nhon, enfin en 1963, Monseigneur du diocèse de Danang.",
            "Actuellement l\'École de Mac Dinh Chi-Nguyen Cong Tru, situé au 8 Nguyen Truong To, District de Ba Dinh, à Hanoï.",
            "Mémoires du patriarche Lê Sáng, édition Copyrico, 2001, page 34 (Hồi ký Chưởng môn Vovinam Lê Sáng, Copyrico, 2001).",
            "Selon le témoignage du grand maître Ngô Hữu Liễn (Texas, États-Unis): Phan Dương Bình (Vietnam), Lê Sáng (Vietnam), Bùi Thiện Nghĩa (Australie), Nguyễn Dần (États-Unis), Phạm Văn Vận (États-Unis, grand frère de maître Phạm Hữu Độ), Ngô Quốc Phong (États-Unis), Hà Trọng Thịnh (Canada) et Trần Đức Hợp (États-Unis).",
            "Cette salle du 52 rue Frères Louis, devient rue Vo Tanh, puis rue Nguyen Trai, près du carrefour Nga Sau à Saigon. C’est l\'endroit où le maître Trần Huy Phong est venu s’entraîner avec maître Nguyễn Lộc.",
            "Le club Thu Khoa Huan, rue Aviateur Garros, devient rue Thu Khoa Huan. Aujourd\'hui cette salle n\'existe plus, devenant l\'hôtel Tan Hoang Ngoc, situé au 52 rue Thu Khoa Huan, à Saigon. « … En entrant dans la salle d’entraînement Vovinam à Thu Khoa Huan à Saigon, je ne suis plus maladroit comme les premiers jours d\'initiation à la salle d’entraînement à Hang Voi, à Hanoï… Le Têt (le nouvel an du calendrier lunaire) à Nguyen Khac Nhu. Ce jour-là, il y a : Tuấn (Nguyễn Gia Tuấn), Hien, Độ (Phạm Hữu Độ), Thông (Nguyễn Văn Thông), Phúc (Nguyễn Văn Nuôi), Bách (Trần Huy Phong)… tous sont venus pour la fête… ». Maître Nguyễn Văn Thư, Những ngày học võ với cố võ sư sáng tổ » (Les jours d’entraînement avec le défunt maître fondateur), Revue spéciale Vovinam-Viet Vo Dao, mai 1971, pages 79-81).",
            "L\'Académie militaire Thu Duc ou Thu Duc Martial Arts Inter-School, également connue sous le nom de Thu Duc Infantry School, une école de formation d\'officiers de l\'armée de la République du Sud Vietnam.",
            "Building Everest, rue Dinh Cong Trang, actuellement situé au 8 rue Nguyễn Văn Tráng, 1er district, à Saigon. Dans les années 1958-1960, maître Nguyễn Lộc est venu ici pour se reposer en convalescence et y décède. De 1966 à 1975, ce lieu est devenu l’Université de médecine et des sciences humaines Minh Duc. C\'est ici qu\'un club de Vovinam-Viet Vo Dao a été inauguré sous l\'encadrement des maîtres Phan Quỳnh et Vũ Kim Trọng. Il est maintenant devenu une École d\'économie.",
            "De 1938 à 1964, le titre de maître patriarche n\'existait pas encore. Lorsque maître Nguyễn Lộc était encore en vie, il se présentait comme maître fondateur du Vovinam.",
            "La pensée confucéenne est basée sur un classement hiérarchisé de l\'ensemble des normes qui composent le système d\'un État divin : Empereur, Maître, Père (Quân, Sư, Phụ), pour garantir la cohérence et maintenir la rigueur de la société. La pensée confucéenne est fondée sur le principe que cette hiérarchie doit être respectée à la lettre (de manière aveuglement) et être mise en œuvre comme les codes de la vie. A l\'opposé, maître Nguyễn Lộc préconise l\'évolution permanente « … Vous devez changer vos méthodes de travail pour vous adapter à toutes les situations, innover pour que le Vovinam soit plus scientifique, plus moderne. Si vous vous apercevez que mon enseignement n\'est pas encore performant, votre devoir est de l’améliorer pour qu\'il devienne meilleur. Si ma méthode présente quelques lacunes, n\'hésitez pas à la compléter. Ce faisant, vos contributions sont bénéfiques pour que le Vovinam puisse devenir un art martial national… ». Extrait des mémoires du grand maître Lê Văn Phúc: « Mémoires des jours de pratique avec le maître fondateur », revue spéciale du Vovinam-Viet Vo Dao, 1971, pages 76, 77 (Hồi ký những ngày theo học võ sư sáng tổ, đặc san Vovinam-Viet Vo Dao, 1971).",
            "Cette façon d’appeler est confirmée par la quasi-totalité de ses disciples directs comme Monsieur Nguyễn Đăng Hiển, maître Phan Dương Bình, Lê Sáng, Trần Huy Phong, Nguyễn Dần, Hà Trọng Thịnh, Phạm Hữu Độ, Lê Trọng Hiệp, Ngô Hữu Liễn, Trần Đức Hợp, Lê Văn Phúc, etc. D\'après le récit de maître Lê Văn Phúc dans « Mémoires des jours de pratique avec le maître fondateur », revue spéciale du Vovinam-Viet Vo Dao, 1971, page 76 (Hồi ký những ngày theo học võ sư sáng tổ, đặc san Vovinam-Viet Vo Dao, 1971). « … A l\'époque où nous nous entraînions, nous étions autorisés à appeler maître Nguyễn Lộc, « Grand frère »…. Cette appellation est également relatée dans l\'éloge funèbre du maître Nguyễn Lộc.",
            "Témoignage de Monsieur Phan Nhật Hùng (Californie, États-Unis), beau-frère du maître Nguyễn Lộc, noté par grand maître Ngô Hữu Liễn (Houston, Texas, États-Unis): « … Dans l\'esprit du maître Nguyễn Lộc, le Vovinam n\'appartient pas à sa famille. Il laisse à ses disciples le soin de le développer et de l’enrichir, et surtout de ne pas se limiter dans quelque domaine que ce soit, y compris technique… ».",
            "D’après les témoignages et confirmations des maîtres Trần Huy Phong, Lê Sáng et Phan Dương Bình.",
            "Le 4 avril de l\'année du rat du calendrier lunaire.",
            "Sous la domination française (1862-1945)."
        ],
        "content": [
            {
                "title":"I - La jeunesse et la période préliminaire à la création",
                "paragraphes": [
                    "Monsieur Nguyễn Lộc est né le [24 mai 1912] dans le village de Huu Bang, district de Thach That, province de [Son Tay], au Nord du Vietnam. Fils de Monsieur Nguyễn Đình Xuyến et de Madame Nguyễn Thị Hoà, il est l\'aîné d\'une famille de trois frères et [deux sœurs]. Pour des raisons économiques, sa famille a déménagé ensuite à Hanoï, capitale du Vietnam.",
                    "Maître Nguyễn Lộc a grandit dans un pays sous domination coloniale française depuis cinquante ans (1862-1912) (cf. annexe 1), où les tensions sociales sont au [plus haut]. D’un côté, les révolutionnaires incitent la population et en particulier les jeunes à commettre des actions violentes contre le gouvernement colonial français, de l\'autre, les colonialistes utilisent toutes les ruses et manœuvres pour réprimer, terroriser ou endormir la population par des courants mondains, romantiques et dévergondés afin que les patriotes vietnamiens ne disposent de soutien dans la population pour étendre la révolution contre la puissance dominatrice.",
                    "Face à cette situation, maître Nguyễn Lộc a pris conscience de ces courants opposés qui tiraillent le pays. Il cherche une autre voie dans le but de surpasser ces deux tendances et de développer une nouvelle orientation, pouvant conduire les jeunes vietnamiens dans une voie plus pacifique et plus noble.",
                    "D\'un côté, maître Nguyễn Lộc condamne avec fermeté la politique colonialiste et de l\'autre, il désapprouve les méthodes violentes préconisées par les révolutionnaires de l\'époque.",
                    "Selon lui, l\'Homme doit être au centre de toute réflexion. Il prône la révolution du corps et de l’esprit (cf. annexe 2) pour guider la jeunesse sur trois plans : l’Esprit, le Corps et la Voie. Il considère que le fait d\'être humain est une bonne chose, mais devenir [l\'Homme Vrai] est encore plus noble.",
                    "Pour lui, l\'Homme Vrai doit être ouvert au dialogue, indépendant, pacifique, énergique, courageux, tolérant, généreux, pur, respectueux, déterminé, cultivé, intègre, fort, utile et avoir le [sens de l’honneur]. L\'Homme Vrai se doit aussi de cultiver un corps robuste, solide, résistant et tenace pour se défendre et pour être utile à la société.",
                    "Avec ces valeurs, il veut, d’une part, aider les jeunes à s’échapper de l\'intoxication du régime colonial et, d’autre part, réveiller ceux qui se sont engagés dans la voie violente afin d’éviter des tueries et de la haine.",
                    "Maître Nguyễn Lộc pense que la société humaine est durable, alors que le régime colonial ou les violences révolutionnaires ne sont que temporaires. Il ne veut pas que les générations futures subissent les conséquences d’une politique d\'intoxication ou de violence. Ainsi, son souhait est de laisser au peuple vietnamien et à l\'humanité un modèle de vie, une méthode permettant de se perfectionner par l’art de cultiver son corps et son esprit avec un art martial moderne, inspiré de la tradition des arts martiaux vietnamiens plusieurs fois millénaires.",
                    "Nourri par cette grande aspiration, outre la perfection de la culture et de la vertu, il étudie et s\'entraîne à la plupart des arts martiaux vietnamiens. Grâce à sa force physique hors du commun et à son grand talent, il progresse de manière exceptionnelle. Pour enrichir d’avantage ses connaissances, il voyage beaucoup et visiter de nombreuses salles d’entraînement pour s’entretenir avec d’anciens officiers de l\'armée impériale et des grands maîtres de renom dans le milieu des arts martiaux vietnamiens.",
                    "Il a longuement étudié les caractéristiques respectives de chaque discipline martiale. Il a ainsi remarqué que chaque art martial possède ses avantages et ses inconvénients et qu\'en pratiquant une seule discipline, il est difficile d’obtenir rapidement des résultats souhaités. De plus, pour atteindre un [bon niveau], le pratiquant doit s\'engager dans la durée, souvent plus de dix ans.",
                    "Maître Nguyễn Lộc cherche donc à développer une nouvelle méthode d’entraînement qui permettrait d\'atteindre un bon niveau dans un délai plus raisonnable. Pour y arriver, il commence par codifier sa méthode d\'apprentissage en prenant la lutte et les arts martiaux traditionnels vietnamiens comme fondement, qu’il complète progressivement en s’inspirant des points forts des autres disciplines pour donner naissance, en 1938, à une nouvelle discipline qu’il nomme Vovinam.",
                    "Il décide ensuite d\'expérimenter cette méthode en entraînant [en secret] certains de ses [proches]. Durant cette période expérimentale et d’après le témoignage de Monsieur Nguyễn Đăng Hiển, l\'un de ses premiers élèves, maître Nguyễn Lộc accorde beaucoup d\'importance aux techniques de base telles que les positions (Tấn), les coups de poing (Đấm), les coups de pied (Đá), les tranchants de la main (Chém), les parades (Gạt), les coudes (Chỏ), les genoux (Gối), etc. Il ajoute également un système pragmatique de techniques de clés et de dégagements (Khoá Gỡ), de techniques de lutte traditionnelle (Vật), de techniques de ciseaux (Đòn Chân) et surtout de techniques d’entraînement avec un partenaire (Song Luyện)."
                ]
            },
            {
                "title": "II - La période de création (1939-1945)",
                "paragraphes": [
                    "Après une année expérimentale réussie, qui dépasse largement ses prévisions, maître Nguyễn Lộc prend la décision de présenter le Vovinam au public.",
                    "A l\'automne 1939, maître Nguyễn Lộc emmène ses premiers élèves (cf. annexe 3) au Grand Théâtre de Hanoï (cf. annexe 4) pour effectuer la première démonstration de l\'histoire du Vovinam. Parmi les élèves ayant participé à cette démonstration historique, figurent Mademoiselle Nguyễn Thị Minh (cf. annexe 5), [Monsieur Tạ Quang Bửu] et Monsieur Nguyễn Đăng Hiển (D\'après les témoignages de Madame Nguyễn Lộc et des maîtres Nguyễn Dần, Lê sáng, Phan Dương Bình et Trần Huy Phong).",
                    "Par cette démonstration, il veut également mesurer l\'accueil de la population et évaluer à travers ses pratiquants, les valeurs martiales qu\'il a étudiées durant des années.",
                    "/archive/photo2.png&Photo2: Le Grand Théâtre de Hanoï, 1900. Source: Jean Noury, l\'indochine en cartes postales avant l\'ouragan, Publi-fusion, 1992",
                    "Après cette démonstration, le Vovinam est chaleureusement accueilli par tous les milieux sportifs et d\'arts martiaux à Hanoï, devenant ainsi le flambeau éclatant des arts martiaux nationaux pour la jeunesse. En effet, pendant plus de 75 ans (1862-1940), le gouvernement colonial français a interdit toutes les activités d\'arts martiaux au Vietnam. Maître Nguyễn Lộc est le premier à redonner vie aux arts martiaux nationaux, lançant ainsi un appel pour réveiller les consciences vietnamiennes plongées dans un sommeil profond depuis plus d’un demi-siècle.",
                    "Il redonne ainsi la confiance et la fierté aux jeunes oscillant encore entre les courants romantiques occidentaux et les idées haineuses.",
                    "L\'affection et l\'estime de la population de Hanoï pour le Vovinam sont une grande surprise pour les autorités coloniales, dont Monsieur Maurice Ducoroy, Commissaire général de la Jeunesse et des Sports en Indochine (cf. annexe 6). Par l\'intermédiaire du [docteur Đặng Vũ Hỷ], président de l\'Association sportive de Hanoï, Monsieur Maurice Ducoroy invite maître Nguyễn Lộc à [enseigner le Vovinam] à l\'[école Normale de Hanoï]. Maître Nguyễn Lộc accepte et commence officiellement l’enseignement du Vovinam en 1940.",
                    "Par la suite, plusieurs clubs de Vovinam ouvrent dans différents quartiers de Hanoi, accueillant de nombreux jeunes issus de tous les milieux sociaux (lycéens, étudiants, employés et ouvriers). On découvre alors dans le Vovinam, non seulement des techniques simples, efficaces et faciles à pratiquer, mais aussi une philosophie de vie, basée sur",
                    "/archive/photo3.png&Photo 3: Maître Nguyễn Lộc entouré de ses élèves, Hanoï, 1948. G/D: Trần Đức Hợp, Nguyễn Cao Hách, Phan Dương Bình, Nguyễn Lộc, Bùi Thiện Nghĩa, Nguyễn Dần",
                    "l’idéal de l\'Homme Vrai en harmonie avec les valeurs millénaires des arts martiaux traditionnels du Vietnam.",
                    "Dès lors, le nom du Vovinam, ainsi que celui du maître Nguyễn Lộc deviennent connus au sein de la population. Le Vovinam devient un art martial populaire, et est enseigné dans tous les quartiers intra et extra-muros de Hanoï.",
                    "Durant cette période, le maître fondateur forme de nombreux élèves, dont certains deviendront plus tard des maîtres célèbres comme [Phan Dương Bình, Lê Sáng, Trần Đức Hợp, Nguyễn Dần, Lê Văn Phúc, Nguyễn Văn Thông, Lê Trọng Hiệp et Hà Trọng Thịnh]. D’autres deviendront des personnalités historiques du Vovinam comme Messieurs Nguyễn Mỹ, Nguyễn Khải, Nguyễn Đăng Hiển, Nguyễn Bích, Nguyễn Đình Lan, Đỗ Đình Bách, Đặng Bỉnh, Đặng Văn Bảy, Trịnh Cự Quý, Đỗ Khánh, Vũ Văn Thức, Nguyễn Đôn, Nguyễn Nhân, Lê Như Hàm, Lê Đình Nhâm, Nguyễn Cao Hách, etc."
                ]
            },
            {
                "title": "III - La période de l\'indépendance du Vietnam",
                "paragraphes": [
                    "Le 9 mars 1945, l\'armée japonaise renverse le gouvernement colonial français en Indochine, arrête le gouverneur colonial, Jean Decoux, (cf. annexe 7) et rend l’indépendance au Vietnam. Le surlendemain, 11 mars 1945, l’empereur Bảo Đại (cf. annexe 8) proclame l\'indépendance, abolit tous les traités signés avec la France depuis 1884 et met fin à 83 ans de domination française.",
                    "Ce brusque changement est une surprise et en l’absence de préparation, laisse le pays dans le chaos et le désordre. En effet, la plupart des institutions jusqu’alors gérées par les Français, à savoir l\'économie, la politique, l\'armée, la police, l\'éducation, l\'administration, etc., se retrouvent subitement sans commandement. Le premier gouvernement indépendant, le gouvernement [Trần Trọng Kim], ne dure que quatre mois. Raison pour laquelle toutes les personnalités connues et compétentes sont invitées à entrer au gouvernement. Maître Nguyễn Lộc, avec son prestige de fondateur d\'un grand mouvement à Hanoï est invité à y entrer. Cependant, il décline formellement l’offre car selon lui, le Vovinam n’est pas un parti politique et n\'a donc pas vocation à s\'engager dans la politique pour imposer ses idées. Maître Nguyễn Lộc laisse néanmoins ses pratiquants libres de participer à la vie politique, le Vovinam ne portant pas atteinte à la liberté de ses pratiquants.",
                    "En revanche, le Vovinam œuvre pour la société. Ainsi lorsque la situation le réclame, le Vovinam participe et apporte son concours aux pouvoirs politiques pour effectuer des actions sociales, caritatives et humanitaires dans un esprit d\'altruisme et non lucratif. Animé par cette vision, maître Nguyễn Lộc, tout en déclinant l’offre d’entrer au gouvernement, accepte en revanche de l’aider dans les actions sociales et caritatives.",
                    "C’est ainsi que pendant cette période d’instabilité, les pratiquants du Vovinam sont enthousiastes et assurent la sécurité dans les quartiers intra et extra-muros de Hanoï. En outre, maître Nguyễn Lộc collabore avec [d\'autres collectivités]pour organiser les fêtes nationales, telles que la commémoration des [rois Hùng Vươn], des [deux sœurs Trưng]. Ils participent également à l’organisation d’actions humanitaires dans le cadre du programme d\'aide à la terrible famine qui a ravagé le Nord du Vietnam et tué environ deux millions de personnes en 1945 (cf. annexe 9).",
                    "Ainsi, maître Nguyễn Lộc utilise les actions sociales plutôt que la politique pour réaliser son idéal : celui de former une génération de jeunes utiles à la société. Il crée successivement des cours d\'auto-défense dans différents endroits : à l\'École Normale, à [l\'École Buoi], au [Parc de Au Tri Vien], au Parc de Septo et au Parc de Nha Den.",
                    "Il a notamment ouvert des cours Vovinam à la [Cité Universitaire] du Vietnam, cours destinés non seulement aux étudiants mais aussi à la population. Dans ce centre, outre l\'enseignement de techniques martiales, il a particulièrement œuvré à la transmission du savoir et de la connaissance, comme l\'esprit de l\'Homme Vrai. Plusieurs pratiquants de ses cours deviendront plus tard des cadres du [Parti Démocratique] et du partie Communiste comme [Dương Đức Hiền], [Cù Huy Cận], [Xuân Diệu] et [Phan Mỹ].",
                    "Parallèlement, pour répondre aux besoins des jeunes, il crée deux groupements de jeunesse : <ul><li>L\'association des pratiquants engagés (Đoàn Võ Sĩ Cảm Tử), qui comprend des jeunes pratiquants robustes et actifs.</li><li>L\'association des héros de demain (Đoàn Anh Hùng Ngày Mai), qui comprend des adolescents de moins de 18 ans.</li></ul>",
                    "En avril 1945, des enseignants du Vovinam sont envoyés par vagues successives dans tout le pays pour développer le Vovinam :<ul><li>Đỗ Khánh dans le Sud du Vietnam,</li><li>[Vũ Văn Thức à Thanh Hoa,]</li><li>Nguyễn Đôn à Hung Yen,</li><li>Nguyễn Lan à Hai Duong,</li><li>Lê Đình Nhâm à Bac Giang,</li><li>Nguyễn Nhân à Hai Phong,</li><li>Lê Như Hàm à Phu Ly.</li></ul>",
                    "En septembre 1945 (après la chute du gouvernement Trần Trọng Kim et l\'installation du premier gouvernement révolutionnaire provisoire de la Ligue Viet Minh, dirigé par Hồ Chí Minh), sous l’impulsion de Monsieur Dương Đức Hiền, ancien pratiquant, ministre de la Jeunesse, maître Nguyễn Lộc accepte l\'invitation et envoie des maîtres et enseignants pour enseigner le Vovinam au sein [d’institution gouvernementales] tels que : <ul><li>Đỗ Đình Bách et Nguyễn Mỹ qui donnent des cours destinés aux cadres de la jeunesse à [l\'hippodrome San Quan Ngua]</li><li>Nguyễn Khải, Nguyễn Bích, Nguyễn Đình Lan et Nguyễn Đăng Hiển qui sont responsables des cours d\'auto-défense de combat et d\'auto-défense en ville au [parc d\'exposition Khu Dau Xao]</li><li>Trịnh Cự Quí, Lê Sáng, Đặng Bỉnh et Đặng Văn Bảy qui s\'occupent des cours réservés aux commandos de la police au [terrain de Bac Qua] et des cours destinés aux jeunes au parc de Septo à Hang Bay.</li></ul>"
                ]
            },
            {
                "title": "IV - Le Vovinam pendant la guerre franco-vietnamienne",
                "paragraphes": [
                    "En 1946, la [guerre franco-vietnamienne] éclate officiellement lorsque l’armée française tente de reprendre progressivement le contrôle de l’Indochine (Laos, Cambodge et Vietnam). Les Viet Minh entrent en guérilla, toutes les ressources humaines et matérielles sont monopolisées pour la guerre. Tous les cours d\'arts martiaux et les promotions issues des années 1939 à 1946 sont suspendus car la plupart des pratiquants du Vovinam sont engagés dans la résistance, ce qui entraîne une grande dispersion. Parmi les pratiquants engagés dans la résistance, quelques-uns sont devenus plus tard des officiers de haut rang tels que Nguyễn Khải, Nguyễn Bích, Nguyễn Đăng Hiển, Đỗ Đình Bách, etc.",
                    "Maître Nguyễn Lộc et ses élèves les plus proches quittent Hanoï et se divisent en deux groupes: <ul><li>Le premier groupe, dirigé par maître Nguyễn Lộc, remonte vers la haute région (suivant l\'amont du Fleuve Rouge, au Nord-Ouest de Hanoï). Ce groupe comprend Trịnh Cự Quí, Lê Sáng, Lê Văn Tiên, Lê Trình, Nguyễn Dần, Nguyễn Ngọ, Nguyễn Thịnh, Võ Văn Cải, etc.</li><li>Le second groupe, guidé par Nguyễn Mỹ, descend vers la plaine (au Sud-est de Hanoï, suivant l\'aval du Fleuve Rouge). Ce groupe comprend Lê Như Hàm, Đặng Bỉnh, Đặng Bảy, Lê Tâm, Nguyễn Điện, Trần Văn Quang, Hoàng Văn Quý, etc.</li></ul>",
                    "Après s\'être séparé du groupe de Nguyễn Mỹ, maître Nguyễn Lộc emmène son groupe dans son village natal de Huu Bang, district de Thach That, province de Son Tay. Là-bas, il ouvre des cours d\'arts martiaux élémentaires pour les jeunes de Thach That et envoie ses disciples entraîner les élèves officiers à l\'École politico-militaire de Tran Quoc Tuan. Autrefois, cette école était dans la province de Son Tay, mais à cause de la guerre, elle est déplacée dans le district de Thach That.",
                    "Quelques temps plus tard, Dương Đức Hiền, ancien élève du maître Nguyễn Lộc à la Cité universitaire, qui n\'est plus Ministre de la Jeunesse mais devenu commandant général de la guérilla et de la milice populaire dans le district de Quoc Oai. Il apprend que maître Nguyễn Lộc est revenu au village de Huu Bang ; il l’informe que la guerre approche et lui conseille de s’en fuir à nouveau vers une région plus sûre.",
                    "Suivant ses conseils, maître Nguyễn Lộc et ses disciples se remettent en route. Partout où ils s’arrêtent, la résistance locale leur demande d’enseigner les arts martiaux aux jeunes et à la milice populaire. Cependant, ils ne restent jamais plus de trois mois à chaque endroit. Durant un an d’exil dans la région montagneuse, maître Nguyễn Lộc et ses disciples dispensent de nombreux cours de Vovinam dans les villages de Chue Luu, Am Thuong, Thanh Huong, Dan Ha, Dan Phu, etc. Malheureusement, ces entraînements restent épars et sporadiques à cause du manque de moyens de transport et de communication, mais surtout à cause de la guerre, source d’une grande incertitude.",
                    "Lassé par ces déplacements et par la guerre, maître Nguyễn Lộc descend vers Dong Quan où il retrouve le groupe de Nguyễn Mỹ qui revient de Thanh Hoa. Il conseille à ses disciples de retourner auprès de leurs familles. Il pense en effet qu’en développant leur enseignement chacun à des endroits différents, ils pourront aider plus efficacement la résistance. Il se sépare donc une nouvelle fois de ses disciples.",
                    "Quelque temps après, maître Nguyễn Lộc s\'installe dans la zone contrôlée par la milice catholique à [Bui Chu et Phat Diem], une zone autonome peuplée de catholiques, dirigée par les évêques [Lê Hữu Từ] et [Phạm Ngọc Chi]. Faisant suite à l\'invitation de Monsieur Trần Thiện, commandant général de la milice catholique de cette zone, maître Nguyễn Lac envoie ses disciples enseigner les arts martiaux aux militaires et aux jeunes de cette zone (cf. annexe 10)",
                    "En août 1948, maître Nguyễn Lac retourne à Hanoï. Il se retrouve dans une situation difficile, mais malgré cela, il continue à ouvrir des cours Vovinam et à former de nouveaux élèves. Cependant, ses élèves ne restent pas longtemps, soit pour des raisons économiques, soit pour s’engager dans la guerre franco-vietnamienne. Parmi les disciples qui l’ont suivi à Hanoï, maître Lê Sáng demande lui aussi à suspendre ses activités pour des raisons économiques pendant six ans (cf. annexe 16). Le seul enseignant resté auprès de",
                    "/archive/photo4.png&Photo 4: Hanoï 1990. Les retrouvailles des anciens après 36 ans de séparation (1954-1990) G/D: Phan Dương Bình, Lê Sáng, Nguyễn Mỹ, Trịnh Cự Quí, Đặng Văn Bảy Extrait de la revue Vovinam-Viet Vo Dao, États-Unis, 1991",
                    "maître Nguyễn Lộc est maître Phan Dương Bình, l’un de ses meilleurs élèves et le disciple le plus efficace durant cette période difficile. Maître Bình l’aide à enseigner le Vovinam au club de Hang Trong et à [l\'École Hang Than]. Parmi les élèves de cette période, Lê Văn Phúc, deviendra plus tard un grand maître du Vovinam (cf. annexe 11).",
                    "En 1951, maître Nguyễn Lộc et d’autres personnalités de Hanoï créent l\'association des experts [d\'Arts Martiaux Vietnamiens] (Việt Nam Võ Sĩ Đoàn). Cette association relance le mouvement Vovinam avec des entraînements de masse à l\'École Hang Than, à Hanoï. Néanmoins, en 1954, la guerre franco-vietnamienne arrivant dans une phase cruciale, maître Nguyễn Lộc doit à nouveau suspendre toutes ses activités.",
                    "En juin 1954, l’armée française est vaincue à Dien Bien Phu. Les accords de Genève sont signés le 20 juillet 1954, mettant fin à la guerre. Le Vietnam est alors séparé en deux, le Nord dirigé par Hồ Chí Minh, qui établit le régime Communiste et le Sud est gouverné par Bảo Đại sous un régime Républicain monarchique."
                ]
            },
            {
                "title": "V - Le Vovinam au Vietnam du Sud (1954-1960)",
                "paragraphes": [
                    "En août 1954, en raison du partage Nord-Sud du Vietnam, maître Nguyễn Lộc et sa famille décident de migrer au Sud, à Saigon, avec quelques-uns de ses disciples les plus [proches], notamment Phan Dương Bình, Nguyễn Dần et Trần Đức Hợp. Dans le même temps, d\'autres disciples migrent eux aussi à Saigon comme Lê Sáng, Bùi Thiện Nghĩa, Hà Trọng Thịnh, Nguyễn Văn Thông, Lê Trọng Hiệp, Lê Văn Phúc, Ngô Hữu Liễn, etc",
                    "Maître Nguyễn Lộc arrive au Sud Vietnam dans une situation politique brûlante et chaotique, laissant derrière lui tous ses biens afin de poursuivre son idéal : former une génération de jeunes pour la société et pour l\'humanité.",
                    "La première salle d’entraînement de Vovinam inaugurée au Sud Vietnam se situe au [51 rue Frères Louis à Saigon]. Par la suite, elle déménage à la rue Aviateur Garros, appelée [club de Thu Khoa Huan]. Ce club est le centre d’entrainement de Vovinam le plus importante du maître Nguyễn Lộc. Les pratiquants se comptent par centaine, parmi les pratiquants formés dans ce club, il y a Trần Huy Phong, Phạm Hữu Độ, Nguyễn Văn Thư, Ngô Hữu Liễn, Trần Thế Phượng, Nguyễn Văn Nuôi, Nguyễn Gia Tuấn, etc.",
                    "/archive/photo5.png&Photo 5: en 1955, Maître Nguyễn Lộc enseigne à l\'École National de la Gendarmerie du Vietnam",
                    "Par ailleurs, le Vovinam est invité par les autorités de la République du Sud Vietnam à enseigner à l’École des Officiers de la [Gendarmerie Nationale de Thu Duc] (photo 5 et 6) et à un certain nombre d\'unités du régiment du génie de l’armée.",
                    "Malheureusement, en 1957, la santé de maître Nguyễn Lộc se dégrade subitement. Il est forcé d’arrêter l’enseignement et déménage chez son jeune frère Nguyễn Hải au [Building Everest] où il continue d\'étudier les arts martiaux et perfectionne le système philosophique du Vovinam. Il autorise ses disciples Lê Sáng, Trần Huy Phong, Nguyễn Gia Tuấn, Nguyễn Văn Nuôi et Nguyễn Văn Thư, à ouvrir d’autres salles d’entraînement, tandis qu’il se retire comme conseiller. Ceux-ci créer le centre d’entraînement central du Vovinam, dont le siège est installé à l\'avenue Tran Hung Dao, dans le 5ème district de Saigon (cf. annexe 12) et les succursales situées rue Tran Khanh Du, rue Su Van Hanh et rue Phan Dinh Phung.",
                    "C’est à cette époque que maître Lê Sáng, étant le plus âgé et ayant le plus d’ancienneté dans la discipline, est appelé [Maître Aîné (võ sư trưởng)]."
                ]
            },
            {
                "title": "VI - La personnalité de maître Nguyễn Lộc et son enseignement",
                "paragraphes": [
                    "Maître Nguyễn Lộc est une personne très sérieuse, ouverte d’esprit et désintéressée. Il préconise le perfectionnement dans tous les domaines et le développement d’un comportement vertueux. Il refuse toute corruption et obéissance aveugle à la hiérarchie prônée par la [pensée confucéenne].",
                    "Il refuse que ses disciples lui adressent des marques de supériorité comme l’appeler « Vénérable Maître », comme cela se faisait dans la plupart des écoles d’arts martiaux de l’époque, ou bien qu’ils lui font des courbettes, se prosternent et lui obéissent aveuglement. Dans son idéal, il a fondé le Vovinam pour former une génération de jeunes courageux, fiers et utiles à la société. C\'est pourquoi il considère ses élèves comme ses compagnons.",
                    "En effet, il demande à ses disciples de l\'appeler [« grand frère »], d\'être sincères, sérieux, accessibles, généreux, audacieux, travailleurs, courageux, dignes d\'un pratiquant des arts martiaux.",
                    "Cet esprit moderne est visible dans la plupart des photos, où l\'on peut voir maître Nguyễn Lộc en tenue de ville et ses élèves le saluant debout, en se tenant droit et le regardant en face. Cet esprit a fait du Vovinam-Viet Vo Dao un art martial populaire, ouvert à tous les milieux sociaux. Le Vovinam n\'a rien à cacher, n’est ni mystérieux, ni sélectif, ni réservé à une élite minoritaire comme dans la plupart des écoles d\'arts martiaux de l’époque. C’est grâce à cet esprit a permit au vovinam de continuer de progresser malgré les guerres et les interdictions et de se développé jusqu’à devenir un art martial mondial.",
                    "Sur le plan d’organisationnel, maître Nguyễn Lộc n\'est pas obnubilé par la hiérarchie, ni par une gestion complexe. Il préfère la simplicité et privilégie les actions efficaces afin d\'atteindre facilement l’objectif. Par conséquent, durant toute la période d\'édification de 1938 à 1960, le Vovinam n\'a pas de patriarche. Maître Nguyễn Lộc se contente d’être reconnu comme le maître fondateur.",
                    "Bien qu’ayant fondé le Vovinam par ses efforts personnels, il persiste à considérer que cette œuvre doit être dédiée à la société et à l\'humanité, conformément à l\'idéal qu\'il poursuit. Selon ses souhaits, le Vovinam ne doit pas être considéré comme son œuvre personnelle ou celle de [sa famille], mais comme un héritage de la culture des arts martiaux vietnamiens, une œuvre collective à laquelle tous les maîtres et pratiquants ont le droit de contribuer et poursuivre comme dans une grande famille.",
                    "Sa façon d’enseigner est très minutieuse ; il s\'occupe de chaque pratiquant en fonction de leurs aptitudes techniques et niveaux culturels. Lui seul peut enseigner les nouvelles techniques et ses assistants ont le devoir de les faire réviser en [son absence]. Plus tard, cette méthode deviendra « La méthode » d’enseignement du Vovinam-Viet Vo Dao, une « méthode non codifiée », mais que tous les maîtres appliquent encore de nos jours.",
                    "/archive/photo6.png&Photo 6: en 1955, Devant l\'École Nationale de la Gendarmerie du Vietnam – de gauche à droite Nguyễn Văn Thông, Trần Đức Hợp, Lê Sáng, Nguyễn Lộc, Bùi Thiện Nghĩa, Nguyễn Cao Hách, Nguyễn Dần",
                    "Quant aux disciples ayant un bon niveau culturel et une aptitude au management, maître Nguyễn Lộc les forme plus particulièrement dans les domaines sociaux, politiques, psychologiques et de gestion. Il encourage souvent ses élèves à participer aux activités collectives et sociales en dehors des cours d\'arts martiaux. Grâce à cela, la plupart des maîtres qu’il a formés ont acquis des compétences aussi bien sur le plan technique qu’intellectuel et obtiennent souvent une bonne position dans la société."
                ]
            },
            {
                "title": "VII - Le décès du maître Nguyễn Lộc",
                "paragraphes": [
                    "Maître Nguyễn Lộc décède le [29 avril 1960] à Saigon (cf. annexe 13) et est inhumé dans le cimetière de Mac Dinh Chi (cf. annexe 14). Il laisse neuf enfants, trois garçons et six filles. Il n’a vécu que 48 ans mais a laissé aux arts martiaux vietnamiens et à l’humanité une œuvre extraordinaire : le Vovinam-Viet Vo Dao.",
                    "Il laisse également une génération de jeunes bien formés, pleins d\'idéaux, capables de lui succéder pour atteindre l’objectif dont il a tant rêvé, celui de populariser le Vovinam-Viet Vo Dao au niveau national avec comme idéal, « Être Fort Pour Être Utile » et être « l’Homme Vrai ». Ses disciples réaliseront beaucoup d’avancées vers cet objectif durant la période entre 1960 et 1975, mais ils considèrent toujours cette œuvre comme inachevée.",
                    "Aujourd\'hui, le Vovinam-Viet Vo Dao est devenu un symbole de la culture vietnamienne, largement répandu à travers le monde, sans distinction d\'appartenance ethnique, de pays, de religion ou d\'opinion politique."
                ]
            },
            {
                "title": "VIII - Éloge funèbre du maître Nguyễn Lộc <br> <small class=\"praise-sub\">Lu par Maître Aîné Lê Sáng lors de la cérémonie d\'enterrement du fondateur Nguyễn Lộc au cimetière de Mac Dinh Chi à Saigon, avril 1960.</small>",
                "paragraphes": [
                    "<div class=\"catch-phrase\"></div>",
                    "La vie et la mort, tout le monde doit passer par là, mais nous même, comme tous les pratiquants du Vovinam, ne pensons pas que ce moment douloureux est arrivé si tôt.",
                    "Rappelle-toi de l’époque où le pays était encore sous le [joug de l\'esclavage]. Animé d’une passion débordante, tu as quitté tes amis insouciants pour t\'engager personnellement dans une noble voie.",
                    "Avec talent, tu as pu harmoniser la quintessence des arts martiaux anciens et modernes de l\'Asie pour concevoir une discipline au service de la nation.",
                    "Au fil des ans, tu as développé le fruit de ton invention en transmettant une force intense à la jeunesse pour une vie meilleure, confiante, fière et utile.",
                    "Grâce à toi, la patrie est resplendissante !",
                    "Grâce à toi, la jeunesse n\'est plus désorientée !",
                    "Ainsi, tu es devenu célèbre dans tout le pays, du Nord au Sud, à travers des millions de pratiquants.",
                    "Sous la domination française, les colonialistes te craignaient. Ils ont tout essayé mais n\'ont pas pu te corrompre. Sous la domination japonaise, les fascistes n’ont pas réussi à t’ébranler par l\'argent ou la gloire. Pendant toute la période où le pays était en mouvement, tu as su donner au peuple l\'arme la plus tranchante pour être confiant dans la lutte et pour défendre notre chère patrie. Comme toujours, tu es resté en dehors de tout endoctrinement pour être indépendant, la tête haute, et avec un seul objectif : former des générations de jeunes en bonne santé physique et mentale.",
                    "Pourquoi le destin si capricieux t’a-t-il emporté trop tôt, laissant à ceux qui restent beaucoup de regrets et d’affection.",
                    "<div class=\"catch-phrase\"></div>",
                    "Émus au point de ne pouvoir te faire d\'éloge funèbre, voici tes proches en sanglots qui n’arrêtent pas de pleurer, voilà tes élèves qui sont venus te dire adieu, le cœur serré.",
                    "Nous te pleurons en te remerciant des liens affectueux maître-élèves qui nous unissent ; nous te pleurons et t’adressons notre profonde gratitude. Tu nous as considérés comme les membres de ta famille, tu nous as traités comme tes frères de sang.",
                    "Aujourd’hui, tu n\'es plus sur Terre ; ton corps est parti, mais ton esprit reste encore, et restera pour toujours dans le cœur des générations futures et dans l\'histoire.",
                    "Toujours fidèles à notre idéal, nous nous engageons à suivre ton exemple, à être dignes de ta confiance et à poursuivre la voie de l\'art martial Vovinam.",
                    "<div class=\"catch-phrase\"></div>",
                    "De ton vivant, tu as glorifié notre pays. Ta mort signifie simplement que tu nous as transmis ta force, et maintenant, c\'est à notre tour de retransmettre cette énergie au peuple et aux générations futures.",
                    "S\'associant avec l\'âme sacrée du pays, nous sommes convaincus que tu resteras toujours à nos côtés pour nous guider et nous rappeler à remplir notre devoir.",
                    "<div class=\"catch-phrase\"></div>",
                    "En ce moment réunis ici, nous nous inclinons devant ton cercueil pour te dire adieu et prions pour toi, pour que ton âme soit libre dans l\'au-delà."
                ]
            }
        ]
    }',
    '{
        "id": 1,
        "note": [
            "Maître Trần Huy Phong est le 4ème enfant d’une famille de sept enfants dans l’ordre suivant : <ol><li>Trần Thị Nguyệt (1931-2015),</li><li>Trần Bản Quế (Ceinture Blanche Suprême),</li><li>Trần Thế Tùng (niveau ceinture jaune – 1965),</li><li>Trần Huy Phong (1938-1997) (Patriarche),</li><li>Trần Huy Quyền (1945-2001) (Ceinture Blanche Suprême),</li><li>Trần Thiện Cơ (Ceinture jaune – 1971),</li><li>Trần Nguyên Đạo (Ceinture Blanche Suprême).</li></ol>",
            "Le grand général Trần Hưng Đạo (Trần Quốc Tuấn) (1228-1300) est une grande figure historique du Vietnam. Il a vaincu trois fois la grande armée de l\'empire Mongol de Gengis Khan, établissant ainsi la grande dynastie des Tran, laquelle a gouverné le Vietnam (12 empereurs) pendant 175 ans (1226-1400)",
            "Appeler aussi la guerre d’Indochine",
            "La distance de Nam Dinh à Cam Pha est d‘environ 180 km",
            "Les ciseaux volants du n° 1 au n° 11 ont été développés et enseignés par le maître fondateur Nguyễn Lộc",
            "A l\'époque les combats « sportifs » (compétition) n\'existent pas encore",
            "Neveu du maître fondateur, fils de maître Nguyễn Dần",
            "Fils du maître fondateur.",
            "Ou l\'Homme Vrai",
            "Décret n° 2395/QD-TCCB, le 3 novembre 1993.",
            "Viet Vo Dao International Central Office. Cette structure est créée par le Conseil des Maîtres, Réf : N°09/74/HDLD du 20 mars 1974.",
            "Institut Gustave Roussy, 1er centre de lutte contre le cancer en Europe, 114, rue Édouard Vaillant, 94800 Villejuif, France."
        ],
        "content": [
            {
                "title": "",
                "paragraphes": [
                    "<ul><li>1960-1964 : il a assumé la direction du Vovinam-Viet Vo Dao après le décès du maître fondateur.</li><li>1964-1967 : adjoint du maître patriarche, président de la Commission d\'Études et de Développement.</li><li>1967-1973 : président de la Fédération de la Jeunesse Viet Vo Dao.</li><li>1973-1975 : président de la Fédération de Formation et Président du cabinet de développement du Viet Vo Dao mondial.</li><li>1986-1990 : patriarche du Vovinam-Viet Vo Dao.</li><li>1996-1997 : fondateur du Conseil Mondial des Maîtres et de la Fédération Mondiale de Vovinam-Viet Vo Dao.</li></ul>"
                ]
            },
            {
                "title": "Jeunesse",
                "paragraphes": [
                    "Maître Trần Huy Phong est né le 28 décembre 1938 dans la ville de Quan Phuong Trung, district Hai Hau, province Nam Dinh, au Nord Vietnam. De son vrai nom Trần Trọng Bách, modifié plus tard en Trần Quốc Huy, il est le quatrième d’une famille [de sept enfants]",
                    "Fils de Monsieur Trần Văn Bảng (1898-1975) et de Madame Trần Thị Nhạn (1913-1993), il est issu d’une famille dotée d\'une tradition martiale depuis le XIIème siècle. Il est le 27ème descendant du grand [Trần Hưng Đạo (1228-1300)]",
                    "Ayant grandi dans une période où le Vietnam était encore sous la domination française, il a eu la chance de vivre sur les terres de la famille Tran à Nam Dinh et a pu recevoir les enseignements selon les traditions martiales de la famille. Tous les jours, son grand-père, Monsieur Trần Văn Khiêm (1879-1949), lui a dispensé des cours d\'arts martiaux, d’acupuncture, de stratégies, de techniques de lutte, de techniques d’équitation ainsi que l’art de diriger et de commander.",
                    "Cette formation a forgé en lui la générosité, un noble esprit et un caractère énergique, prêt à défendre les causes justes.",
                    "/tranhuyphong/photo1.png&Photo 1 - 1991, Couverture du livre "Esprit Trần Huy Phong" Commémoration du 20ème anniversaire de son décès (1997-2017)",
                    "Son courage et sa volonté se remarquent déjà à l’adolescence. En 1950, à l’âge de 12 ans, sa famille s’est retrouvée dans une pauvreté extrême en raison de la guerre franco-vietnamienne (1946-1954) [] et sa mère est tombée gravement malade. Sa famille a perdu tout contact avec son père qui occupait un poste de responsable dans la province Cam Pha (près de la frontière chinoise), il a décidé alors d’emmener son petit frère Trần Huy Quyền, 5 ans, pour franchir à pied quelques [centaines de kilomètres] afin de retrouver leur père. Lors de leurs retrouvailles, le père de maître Trần Huy Phong, très ému, a pris la décision de démissionner de son poste pour rentrer avec ses deux enfants afin de sauver sa femme.",
                    "En 1954, à la suite aux accords de Genève, maître Trần Huy Phong a suivi sa famille dans le Sud du Vietnam. A l’âge de 16 ans, il a rencontré le maître Nguyễn Lộc avec qui il a débuté le Vovinam-Viet Vo Dao en 1954 au club Thu Khoa Huan à Saigon.",
                    "Ayant déjà acquis une base solide en arts martiaux et possédant de grandes capacités, il a progressé très rapidement pour devenir un des disciples éminents du maître fondateur Nguyễn Lộc."
                ]
            },
            {
                "title": "Maître Trần Huy Phong et la période obscure 1960-1964",
                "paragraphes": [
                    "En 1960 - l’année du décès du maître fondateur Nguyễn Lộc - le gouvernement Ngô Đình Diệm a interdit les activités du Vovinam-Viet Vo Dao (1960-1964). A cette époque, son condisciple, maître Lê Sáng, est parti à Quảng Đức pour son activité économique. Seul, maître Trần Huy Phong a continué à développer en secret le Vovinam-Viet Vo Dao. Il a créé le mouvement « le Vovinam pour une jeunesse forte » (Thanh Niên Khỏe Luyện Tập Vovinam) avec pour objectif la formation des enseignants et des pratiquants sur les trois plans : esprit, vertu et corps.",
                    "/tranhuyphong/photo2.png&Photo 2 – Les élèves du Maître Trần Huy Phong, Saigon 1964. De gauche à droite: Trần Văn Bé, Nguyễn Văn Hoàn, Dương Hoành San, Trần Văn Trung, Trần Huy Phong, Phan Quỳnh, Nguyễn Văn Lễ, Trần Huy Quyền et Lê Công Danh",
                    "Profitant de son statut de professeur de mathématiques dans les lycées de Saigon, il a réussi à faire accepter l’enseignement du Vovinam dans le milieu scolaire. Il a donc ouvert plusieurs clubs dans les lycées où il enseignait. De ce fait, en dépit de l’interdiction, le mouvement du Vovinam-Viet Vo Dao a connu un développement exceptionnel durant cette période. Les effectifs n’ont cessé d’augmenter. Il a également formé de nombreux jeunes instructeurs enthousiastes qui ont constitué par la suite un socle solide durant la période de grande expansion du Vovinam-Viet Vo Dao dans les années 1964-1975.",
                    "Les centres d’entraînement comme Ho Vu, Anh Sang, Saint Thomas, Thang Long, Tri Duc, le temple Duc Thanh Tran etc. sont considérés comme des lieux historiques du Vovinam-Viet Vo Dao. Ils symbolisent la persévérance, la volonté de vaincre les difficultés ainsi que la capacité d’adaptation du Vovinam-Viet Vo Dao durant cette période obscure de son histoire. Le Vovinam-Viet Vo Dao n’a pas disparu pendant la période d’interdiction. Au contraire, il s\'est développé très largement dans toutes les couches sociales, attirant de nombreux pratiquants et devenant l\'une des organisations civiles utiles à la société grâce à son objectif de servir l’homme et son prochain.",
                    "/tranhuyphong/photo3.png&Photo 3 – Saigon 1964 Maître Trần Huy Phong",
                    "Pour le Vovinam, c’est une période difficile mais également exceptionnelle grâce au maître Trần Huy Phong. Il a fait évoluer le Vovinam-Viet Vo Dao d’une situation de quelques centres d’entraînement à une grande institution qui a acquis ses lettres de noblesse dans les années 1964-1975, et dont tous les pratiquants actuels continuent à profiter."                   
                ]
            },
            {
                "title": "La période d\'expansion extraordinaire (1964-1975)",
                "paragraphes": [
                    "Au début de l’année 1964, après la suite au second coup d\'État, un nouveau gouvernement est créé. Les droits fondamentaux de l\'Homme et de la société sont rétablis et le Vovinam a reçu l’autorisation de reprendre ses activités.",
                    "Devant l’essor rapide du Vovinam, la création d’une structure s’impose. Maître Trần Huy Phong et les maîtres de l’époque (Lê Sáng, Mạnh Hoàng, Nguyễn Văn Thư, Ngô Hữu Liễn, Phan Quỳnh, Trần Bản Quế, Nguyễn Văn Cường et Nguyễn Văn Thông), ont établi un projet pour structurer et légaliser l’organisation du Vovinam. Ainsi, une Direction Centrale (le Conseil des Maîtres) a vu le jour. Maître Lê Sáng est élu à la fonction de patriarche et maître Trần Huy Phong en qualité d’assistant du patriarche, directeur technique ainsi que Président de la Commission de Développement du Vovinam-Viet Vo Dao.",
                    "C’est un projet d’envergure annonçant une période d\'expansion importante dans l’histoire du Vovinam-Viet Vo Dao.",
                    "Sur le plan de l`\'organisation et du développement du Vovinam-Viet Vo Dao, maître Trần Huy Phong, avec l’aide des maîtres de l’époque, a apporté sa contribution par les actions suivantes :",
                    "<h5>Création des structures fondamentales</h5><ul><li>Création d’une fédération nationale.</li><li>Établissement des statuts (appelé statuts 1964).</li><li>Définition et création de la fonction de patriarche.</li><li>Création de la Direction Centrale (le premier Conseil des Maîtres).</li></ul>",
                    "<h5>Création des programmes></h5><ul><li>Élaboration du programme d\'enseignement national.</li><li>Définition du système d\'examen.</li><li>Élaboration du système des grades.</li><li>Rédaction d’un programme philosophique et pédagogique.</li><li>Élaboration des dix principes fondamentaux.</li></ul>",
                    "<h5>Création des fonctionnements de base</h5><ul><li>Création des soutenances de thèse de maître.</li><li>Changement du « Vovinam » en « Vovinam-Viet Vo Dao ».</li><li>Esquisse de la tenue officielle.</li><li>Création de l\'écusson.</li><li>Élaboration des cérémonies et des rituels du Vovinam-Viet Vo Dao.</li>",
                    "<h5>Dans le domaine technique</h5><ol><li>Les techniques de ciseaux volants supplémentaires, du [n° 12 au 21] pour les niveaux moyens (ceinture jaune).</li><li>Les vingt premières techniques de stratégie de combats (Chien Luoc), fondées sur les enseignements du maître fondateur Nguyễn Lộc.</li><li>La codification des quinze techniques de lutte (Vat), inspirées des entraînements de combats codifiés en duo (Song Luyen Vat).</li><li>Les techniques de contre-attaque du 2ème au 7ème niveau.</li><li>Un éventail de techniques de combats à mains nues contre les armes blanches comme le cimeterre (Ma Tau), la hache (Bua), la baïonnette (Sung Luoi Le), le bâton (Gay).</li><li>Le système de combats encadrés (compétition) : règles, procédure, sécurité, équipement, arbitrage, etc. Il faut savoir qu’avant 1964, le Vovinam-Viet Vo Dao n’est pas encore doté d\'un système de combats, ni de règles de compétitions. Grâce à la contribution de maître Trần Huy Phong, le Vovinam-Viet Vo Dao dispose encore aujourd’hui d\'un système de [combats règlementés] pour les examens et les compétitions.</li>",
                    "<h5>Dans les domaines philosophiques et pédagogiques</h5>Maître Trần Huy Phong a :<ol><li>Développement de la théorie de l\'harmonie entre la force et la souplesse, utilisant le bambou comme symbole pour illustrer cette philosophie.</li><li>Utilisation des sciences physiques et mathématiques pour démontrer et interpréter les méthodes de chutes et de roulades.</li><li>Mise en œuvre de l’art de vivre avec « cinq principes de méditation et quatre méthodes de progression » (Năm Tu Bốn Tiến) pour le programme de formation des fonctionnaires du Vietnam.</li><li>Démonstration du caractère traditionnel du Vovinam-Viet Vo Dao.</li><li>Démonstration de l’aspect moderne du Vovinam-Viet Vo Dao.</li><li>Démonstration du caractère éducatif du Vovinam-Viet Vo Dao.</li><li>Démonstration des méthodes et l\'art du management pour la formation des maîtres et des dirigeants.</li><li>Démonstration de la théorie de la Révolution du Corps et de l\'Esprit (Chủ thuyết Cách Mạnh Tâm Thân).</li><li>Élaboration le programme de pédagogie du Corps et de l’Esprit (Tâm Thể) destiné à être enseigné à l’université.</li><li>Élaboration des théories et les méthodes d’enseignement de l’énergie interne (Nội Công Tâm Pháp), Khí Công, Bát Thủ Pháp, pour les niveaux supérieurs.</li></ol>",
                ]
            },
            {
                "title": "Le Vovinam-Viet Vo Dao au sein de l’Éducation Nationale",
                "paragraphes": [
                    "En 1965, le Vovinam-Viet Vo Dao a participé au programme d’enseignement des arts martiaux au sein de l’Éducation Nationale. A cette époque, les maîtres Mạnh Hoàng et Trần Huy Phong sont enseignants dans des lycées de Saigon. Grâce à leurs connaissances, ils ont obtenu des autorisations et effectué des démonstrations qui ont permis d’ouvrir de nombreux centres d’entraînement dans les lycées Chu Van An, Trung Vuong, Cao Thang, Gia Long et Pétrus Ký, totalisant plus de 8 000 inscriptions.",
                    "En 1966, maître Trần Huy Phong et maître Mạnh Hoàng ont créé le centre d’entraînement Hoa Lư, au numéro 2 bis rue Đinh Tiên Hoàng, dans le 1er district de Saigon. Maître Trần Huy Phong occupe la fonction de directeur de ce centre. De 1966 à 1975, maître Trần Huy Phong gère et développe ce centre pour en faire le lieu d\'entraînement le plus grand et le plus prestigieux du Vovinam-Viet Vo Dao au Vietnam. Des milliers de pratiquants y sont formés. Parmi eux, certains sont devenus maîtres, grands maîtres ou enseignants et ont contribués à la diffusion du Vovinam-Viet Vo Dao dans le monde :",
                    "<b>Au Vietnam</b>: Vũ Kim Trọng, Nguyễn Văn Chi, Mai Văn Hiệp, Trần Đức Hùng, Khâu Thanh Danh, Hoàng Việt Quý, Ng<b>uyễn Văn Lộc, Nguyễn Văn Vang, Nguyễn Văn Khải, Lê Hoàng Ngân, Tô Văn Thiện, Nguyễn Công Văn, Nguyễn Xu, Nguyễn Xong Danh, Trần Quyền, Huỳnh Văn Hoa, Nguyễn Ngọc Thơ, Phạm Công Đệ.",
                    "<b>Aux États-Unis</b>: Phùng Mạnh Tâm, Nguyễn Xuân Ngọc, Phạm Đình Phúc, Trần Văn Bé, Nguyễn Văn Đông, Nguyễn Thế Hùng, Nguyễn Bá Dương, Phạm Thị Cúc, Nguyễn Gia Đức, Nguyễn Tiến Hoá, Phạm Văn Bảo, Phạm Phú Thành, Nguyễn Văn Lương, [Nguyễn Quân], [Nguyễn Chính], Tạ Văn Lương Việt, Bùi Khắc Hùng, Nguyễn Trung Thành, Nguyễn Thị Lài, Nguyễn Thế Tài, Thái Thanh Xuân, Lê Quang Liêm.",
                    "<b>Au Canada</b>: Trần Văn Trung, Phạm Đình Tự, Nguyễn Ngọc Thanh, Lê Minh Thiền, Huỳnh Lâm, Lê Hữu Phước, Khúc Thị Ngọc Hậu.",
                    "<b>En Europe</b>: Trần Nguyên Đạo, Nguyễn Điện, Nguyễn Thị Huệ, Nguyễn Tiến Hội, Sudorruslan Mohamed.",
                    "<b>En Australie</b>: Trần Huy Quyền, Nguyễn Văn Thông, Lê Công Danh, Phạm Thị Loan, Lê Thành Nhân, Trần Thiện Cơ, Trần Quang Sơn.",
                    "En 1967, maître Trần Huy Phong a créé la Fédération de la jeunesse de Viet Vo Dao, dont il est le président. Cette organisation a pour objectif de développer l\'esprit [Viet Vo Si] chez les pratiquants de Vovinam-Viet Vo Dao en dehors des heures d\'entraînement, selon la philosophie de « l\'Homme Vrai » du Vovinam-Viet Vo Dao afin de bâtir des générations de jeunes utiles à la société.",
                    "En tant que de président de la Fédération de la Jeunesse de Viet Vo Dao (1967-1973), maître Trần Huy Phong a ouvert de nombreux centres dans tout le Sud du Vietnam ainsi que des cours pour les corps de l’État comme la Police Nationale, le Ministère du Développement Rural, le 81ème Bataillon de Commandos Parachutistes, l’État-major de l’armée, le 4ème Corps d\'Armée au centre d’entraînement de Cai Von, le 3ème régiment de la Police Militaire, l’université Minh Đức à Saigon, le Séminaire Cường Để, le Campus universitaire Minh Mạng et les villes Bien Hoa, Vinh Long, Thu Duc, Vung Tau, Can Tho, etc."
                ]
            },
            {
                "title": "Contribution sociale et humanitaire",
                "paragraphes": [
                    "De 1961 à 1965, avec ses amis enseignants comme Mạnh Hoàng, Hoàng Quân, Đinh Đức Mậu, Nguyễn Văn Cường, Phan Quỳnh, Nguyễn Xuân Thiều et Mai Trung Hoa, il a crée le centre pédagogique pour le grand public afin de dispenser des cours gratuits de révision pour les examens scolaires ainsi que des entraînements de self défense pour les élèves issus des familles modestes de Saigon, Cholon et Gia Dinh.",
                    "Au début de l’année 1968, après les combats meurtriers de la fête du nouvel an, le Vovinam-Viet Vo Dao a organisé de grandes opérations d’assistance et de secours aux victimes de la guerre. Ainsi, il a œuvré à la gestion de dizaines de milliers de personnes dans des écoles devenues centres de réfugiés situés à Saigon dans les 5ème, 6ème et 8ème districts et divers endroits de la ville notamment les lycées Pham Dinh Ho, Minh Phung, Khai Tu, Hong Bang, Binh Tay etc., afin que ces réfugiés puissent trouver un hébergement et de la nourriture pendant la période difficile. Par ces opérations humanitaires et sociales, le Vovinam est très connu et apprécié du grand public.",
                    "Au début de l’année 1970, maître Trần Huy Phong a créé la Communauté Viet Vo Dao au hameau de Tan Tao, district Binh Chanh, province Gia Dinh, sur une superficie de 3 km2. Il a fait creuser des dizaines de kilomètres de canaux, installer des systèmes de purification de l’eau, construire plus de mille logements pour les pratiquants et sympathisants à un prix modique. Parallèlement, avec des amis, ils ont créé une Coopérative Agricole Viet Vo Dao pour l’exploitation des produits. Après le 30 avril 1975, le nouveau régime politique du Vietnam a confisqué ce lieu pour le transformer en nouvelle zone économique de Duong Minh Xuan."
                ]
            },
            {
                "title": "Contribution culturelle et universitaire",
                "paragraphes": [
                    "S’agissant des actions culturelles, maître Trần Huy Phong organise chaque année des cérémonies à l’échelle nationale pour commémorer l\'anniversaire de l\'empereur Hung Vuong, fondateur du Vietnam, ainsi que la fête de la fondation du Vovinam-Viet Vo Dao, en hommage à maître Nguyễn Lộc. A chaque fois, de nombreuses personnalités politiques ainsi que des représentants des communautés religieuses et des disciplines amies sont présents lors de ces cérémonies.",
                    "En 1970, maître Trần Huy Phong a créé un Comité de Mobilisation pour la construction du temple de l\'ancêtre Hung Vuong avec la collaboration de plusieurs associations et communautés religieuses du Sud Vietnam (bouddhiste, catholique, protestante, Hoa Hao et Caodaïste). Le siège de ce Comité est situé au Centre Hoa Lu.",
                    "/tranhuyphong/photo4.png&Photo 4: Le Programme d\'Enseignement du Vovinam-Viet Vo Dao, 1996. Faculté de l\'Éducation du Corps et de l\'Esprit de l\'université, Hung Vuong",
                    "L\'activité culturelle la plus significative correspondant au vœu le plus cher de maître Trần Huy Phong est la création de l\'Université Hung Vuong dans laquelle le Vovinam-Viet Vo Dao serait l\'une des matières enseignées. En 1974, avec les intellectuels du Sud Vietnam de l\'époque (Ngô Gia Hy, Nguyễn Huy, Hoàn Xuân Định, Nguyễn Trí Văn, Nguyễn Nhã, Lê Linh Thảo, Nguyễn Thượng Nam, et Nguyễn Văn Thức), il a créé la 1ère Université privée Hung Vuong. L\'autorisation a été délivrée mais ce projet n\'a jamais vu le jour car le régime du Sud Vietnam fut renversé le 30 avril 1975.",
                    "Cette aspiration est relancée en 1991 dès la réouverture du pays avec l’aide de Messieurs Ngô Gia Hy, Nguyễn Chung Tú, Phan Tấn Chức, Nguyễn Nhã et Hà Bính Thân. Le 3 novembre 1993, son souhait est exaucé : le Ministère de l\'Éducation et de la Formation délivre l\'autorisation de création de l\'[Université privée Hung Vuong], dont le siège est situé au domicile du maître Trần Huy Phong, 97 rue Hoang Van Thu, Ho Chi Minh Ville.",
                    "Dans un premier temps, cette Université a trois facultés : informatique, médecine et économie. Quant au domaine de l\'éducation du corps et de l\'esprit du Vovinam-Viet Vo Dao, malgré l\'achèvement du programme (photo 4), la faculté ne sera jamais mise en place car personne n’a pu reprendre ce projet après le décès de maître Trần Huy Phong en 1997. Pourtant, l\'Université Hung Vuong est toujours active et forme chaque année des centaines d\'étudiants, contribuant à l\'œuvre éducative du Vietnam."
                ]
            },
            {
                "title": "Développement du Vovinam-Viet Vo Dao à l\'international",
                "paragraphes": [
                    "En 1973, maître Trần Huy Phong occupait le poste de Président de la Fédération de Formation du Vovinam-Viet Vo Dao, en même temps que celui de Président du cabinet de développement du [Viet Vo Dao Mondial] (Viet Vo Dao International Central Office - photo 5). C’est l\'homme qui a posé la première pierre au développement du Vovinam-Viet Vo Dao à l’étranger, en organisant des stages en 1973 et 1974 et en reconnaissant la Fédération Française de Viet Vo Dao (professeur Phan Hoàng). Il a également envoyé officiellement deux enseignants en France : Trần Nguyên Đạo et Nguyễn Thị Huệ. Ces derniers ont eu pour mission de développer le Vovinam-Viet Vo Dao en Europe. C’est à partir de ce moment que le Vovinam-Viet Vo Dao est officiellement enseigné en Europe et en Afrique.",
                    "/tranhuyphong/photo5.png&Photo 5 – Centre de Hoa Lu, 1974. G/D, Maîtres : Phan Quỳnh, Trần Huy Phong, professeur Phan Hoàng et Monsieur Bùi Thế Thông"
                ]
            },
            {
                "title": "Maître Trần Huy Phong dans les années noires 1975-1990",
                "paragraphes": [
                    "En 1975, la situation politique au Vietnam a radicalement changé. Le Vovinam-Viet Vo Dao est de nouveau interdit par le nouveau régime politique pendant quinze ans (1975-1990). A cette époque, maître Trần Huy Phong, tout comme le maître patriarche Lê Sáng ainsi que la grande majorité des maîtres dirigeants ont été emprisonnés pendant années dans des camps de rééducation.",
                    "Une fois libéré, maître Trần Huy Phong a continué à enseigner le Vovinam-Viet Vo Dao dans le plus grand secret. Il a également organisé discrètement le départ à l’étranger des centaines d’enseignants et maîtres pour la liberté et le développement du Vovinam-Viet Vo Dao dans le monde. Grâce à son action, de nombreux maîtres de haut niveau ont pu continuer à enseigner le Vovinam-Viet Vo Dao en s’installant dans différents pays comme les États-Unis d’Amérique, le Canada, l’Australie et divers pays en Europe.",
                    "En 1986, maître Trần Huy Phong a occupé la fonction de patriarche de 3ème génération du Vovinam-Viet Vo Dao dans la clandestinité. En 1990, il a retransmis cette responsabilité à maître Lê Sáng pour se consacrer à la recherche.",
                    "En 1992, il a créé le centre d’entraînement de Vovinam-Viet Vo Dao dans le district Binh Thanh, à Ho Chi Minh Ville, baptisé « Vo Dao Quan Cay Tre », qui est le premier centre privé du Vovinam-Viet Vo Dao après quinze ans d’interdiction. Il a également organisé le premier championnat de Vovinam-Viet Vo Dao au niveau de la ville de Saigon (1992) et au niveau national (1993).",
                    "/tranhuyphong/photo6.png&Photo 6 : Võ Đạo Quán Cây Tre, 1993 – Maître patriarche Trần Huy Phong et la délégation Vovinam-Viet Vo Dao France"
                ]
            },
            {
                "title": "La santé du maître Trần Huy Phong",
                "paragraphes": [
                    "En 1994, maître Trần Huy Phong est atteint d’une maladie grave. Son jeune frère, maître Trần Nguyên Đạo l\'a fait venir en France pour être soigné. Malgré la maladie, il a réussi à terminer son livre : « La théorie de la Révolution du Corps et de l’Esprit » (Cách Mạng Tâm Thân) qu’il voulait léguer aux générations futures comme un précieux héritage culturel et philosophique du Vovinam-Viet Vo Dao.",
                    "Sachant qu’il lui reste peu de temps à vivre et conscient de l’importance de sa position pour le rétablissement de l’organe de direction du Vovinam-Viet Vo Dao, maître Trần Huy Phong a lancé le 19 mars 1995 un appel depuis son lit d’hôpital [Gustave Roussy] aux maîtres dans monde pour les inciter à se réunir rapidement afin de trouver une solution pour l’avenir du Vovinam-Viet Vo Dao.",
                    "Cet appel a suscité beaucoup d’émotion chez les maîtres qui ont répondu positivement. Six mois plus tard, le 16 septembre 1995, maître Trần Huy Phong et les maîtres aînés ont publié une déclaration pour créer officiellement le Conseil Provisoire des Maîtres du Vovinam-Viet Vo Dao à l’étranger. Par la même occasion, maître Trần Nguyên Đạo a pour mission d’organiser le 2ème Congrès Mondial du Vovinam-Viet Vo Dao afin d’officialiser cette décision.",
                    "Les 16 et 17 août 1996, le 2ème Congrès a eu lieu à Paris, France, sous la présidence du maître Trần Huy Phong avec une participation massive des maîtres du monde entier. Lors de ce congrès, deux organes de direction du Vovinam-Viet Vo Dao ont été créés et continuent encore aujourd’hui leur activité : <h5>Le Conseil Mondial des Maîtres de Vovinam-Viet Vo Dao.</h5><h5>La Fédération Mondiale de Vovinam-Viet Vo Dao.</h5>",
                    "En juillet 1997, maître Trần Huy Phong est retourné au Vietnam auprès de sa famille et de ses fidèles disciples. Le 13 décembre 1997, il s’éteint à Saigon, Vietnam. Avant de quitter ce monde, il a demandé à ses disciples de poursuivre son œuvre. Il a également laissé un testament, de précieux livres et documents à maître Trần Nguyên Đạo, son exécuteur testamentaire.",
                    "Maître Trần Huy Phong a laissé une grande œuvre pour le Vovinam-Viet Vo Dao et pour les générations futures. Il a formé de nombreux disciples qui continuent aujourd’hui à perpétuer la noble œuvre de leur maître, contribuant ainsi à la culture martiale du Vietnam.",
                    "Chaque année, au jour d’anniversaire de décès du maître, ses disciples de tous les coins du globe organisent des cérémonies de commémoration en son honneur pour la reconnaissance du grand travail et de l’héritage que le patriarche Trần Huy Phong a laissé."
                ]
            },
            {
                "title": "La personnalité du maître Trần Huy Phong",
                "paragraphes": [
                    "Extrait de la lettre manuscrite du maître patriarche Lê Sáng:",
                    "« …Maître Trần Huy Phong est le meilleur parmi mes frères-condisciples ; il possède des qualités de cœur que j\'ai pu détecter dès mes premiers jours à la direction de l\'École. Il a été mon assistant le plus compétent depuis près de 30 ans, avec moi, il a dirigé l\'École et m’a remplacé quand je suis absent. Il est fidèle et loyal au Vovinam-Viet Vo Dao ; son amour et son affection pour les condisciples est sans limite ; il se comporte de façon juste envers son prochain et protège le bon déroulement de la fraternité.",
                    "Il est imprégné de l’esprit du Viet Vo Dao, représentant clairement les trois principes de vie du Viet Vo Dao : vivre, laisser les autres vivre et vivre pour les autres. Il a un esprit d\'engagement, de courage, la capacité d’assumer des responsabilités. Il n’a pas peur de prendre des risques, il a la foi, la confiance, la persévérance et une réactivité hors pair.",
                    "Sa vie est simple, honnête et sincère. Il se montre toujours désintéressé pour servir l’idéal du Vovinam-Viet Vo Dao. Il possède une personnalité hors du commun, la vertu, une volonté de progresser, une grande connaissance des arts martiaux, la compétence, un grand charisme, c’est un grand dirigeant. Il a un niveau élevé en techniques martiales, une connaissance générale profonde ; je pense qu\'il pourra porter l\'École au sommet du processus de développement du Vovinam-Viet Vo Dao pour l\'humanité… ».",
                    "/tranhuyphong/photo7.png&Photo 7: Võ Đạo Quán Cây Tre 1992 – Maître patriarche Trần Huy Phong. G/D: Nguyễn Trung Thành, Vũ Kim Trọng, Trần Nguyên Đạo, Trần Đức Hùng, Mai Văn Hiệp, Ngô Kim Tuyền, Bá Thiên, Phạm Đình Tự, Trương Quang An",                    
                ]
            }
        ]
    }',
    '{
        "id": 2,
        "note": [],
        "content": [
            {
                "title": "",
                "paragraphes": [
                    "Grand maître Mạnh Hoàng, de son vrai nom Phùng Mạnh Chữ, a débuté la pratique des arts martiaux par le Judo sous la direction du maître Phạm Lợi, l’un des pionniers ayant implanté le Judo au Vietnam. Ce dernier a participé à de nombreux championnats au Vietnam dans les années 1950 ; il a fait partie des célébrités de l’univers des arts martiaux au Vietnam.",
                    "/manhhoang/photo1.png&Photo 1: Saigon 1957. Me. Mạnh Hoàng (droite), Me Trần Huy Phong (gauche)",
                    "En 1960, motivé par son collègue et meilleur ami maître Trần Huy Phong, maître Mạnh Hoàng a commencé à pratiquer le Vovinam-Viet Vo Dao. Grâce à ses bases très solides en Judo et aux enseignements directs de maître Trần Huy Phong, maître Mạnh Hoàng a progressé rapidement pour devenir l\'un des maîtres emblématiques du Vovinam-Viet Vo Dao.",
                    "En dehors de ses activités dans les arts martiaux, il a enseigné les mathématiques et la physique/chimie dans les lycées de Saigon. De ce fait, avec plusieurs collègues enseignants comme Trần Huy Phong, Hoàng Quân, Đinh Đức Mậu, Nguyễn Văn Cường, Phan Quỳnh, Nguyễn Xuân Thiều et Mai Trung Hoa. Ils ont créé le Centre d\'Enseignement Populaire pour le grand public en 1961.",
                    "Il s’agit d’une organisation pédagogique et sociale ayant pour objectif de développer et de propager la culture autant que l’art martial vietnamien. Dans le cadre de cette structure, maître Mạnh Hoàng a ouvert de nombreux centres et y enseigne gratuitement où moyennant une cotisation symbolique aux élèves issus des milieux modestes de Saigon et de Gia Dinh. Il a dispensé des cours de révision des programmes d’examens du brevet et du baccalauréat. Il a également enseigné le soir des cours de Vovinam-Viet Vo Dao.",
                    "Pendant la période d\'interdiction du Vovinam (1960-1964) par le gouvernement de Ngô Đình Diệm, il a activement participé aux cours spéciaux réservés à la formation des enseignants sous la direction du maître Trần Huy Phong. Au début, ces cours se sont déroulés au lycée Anh Sang, rue Phan Dinh Phung. Puis avec le développement, d’autres centres ont vu le jour dans les lycées Tran Quoc Tuan (rue Tran Qui Cap), Saint Thomas (rue Truong Minh Giang), Tri Duc (rue Cao Thang), Vietnam Hoc Duong (rue Dang Tat).",
                    "Maître Mạnh Hoàng travaille méthodiquement pour éviter toute perte de temps. Ses actions ont donné de très bons résultats. Il s’est occupé de ses élèves avec sincérité en les considérants comme membres de sa famille.",
                    "Maître Mạnh Hoàng était aussi très généreux. Il a consacré une partie de son salaire d’enseignant pour développer le Vovinam-Viet Vo Dao et aider ses disciples dans des moments difficiles.",
                    "Orateur hors pair, sincère et doté d’un grand charisme, maître Mạnh Hoàng est aimé de tous ses élèves, tant dans le milieu scolaire que dans celui du Vovinam-Viet Vo Dao.",
                    "Sur le plan du développement, maître Mạnh Hoàng a toujours conseillé et encouragé ses élèves du milieu scolaire à pratiquer le Vovinam-Viet Vo Dao. Grâce à lui, le Vovinam-Viet Vo Dao a connu un grand essor dans les lycées pendant la période d’interdiction par le régime Ngô Đình Diệm. Ainsi, le Vovinam-Viet Vo Dao a pu former des maîtres et enseignants issus du milieu scolaire qui sont devenus par la suite des maîtres éminents comme Trần Huy Quyền, Nguyễn Xuân Ngọc, Lê Công Danh, Trần Văn Bé, Nguyễn Văn Thông, Nguyễn Văn Hoàn, Trần Văn Trung, Phùng Mạnh Tâm, etc., tous sont des élèves des cours de mathématiques et de physique/chimie des professeurs Mạnh Hoàng et Trần Huy Phong dans les années 1960.",
                    "Sur le plan social, en 1961, maître Mạnh Hoàng est l\'une des personnages clés lors des démonstrations de Vovinam-Viet Vo Dao destinées à recueillir des fonds afin d’aider les victimes des inondations des régions du Sud-est du Vietnam. Toutes ces activités ont couronnées de succès et ont reçu d’innombrables éloges des médias, donnant ainsi une bonne image du Vovinam-Viet Vo Dao auprès du grand public du Sud Vietnam.",
                    "En 1964, lorsque le Vovinam-Viet Vo Dao a reçu l’autorisation de reprendre ses activités, maître Mạnh Hoàng a créé une organisation appelée : « La jeunesse sur la voie des arts martiaux vietnamiens » (Thanh Niên Võ Đạo Việt Nam), dont le but est d’effectuer des démonstrations et de développer le Vovinam dans tout le pays. Le nom de cette organisation « Võ Đạo » a inspiré la transformation du Vovinam pour devenir plus tard Vovinam-Viet Vo Dao.",
                    "/manhhoang/photo2.png&Photo2: Maître Mạnh Hoàng - Saigon 1964",
                    "En 1964, maître Mạnh Hoàng occupait la fonction de Président de la Commission des Relations Extérieures de la Direction Centrale (le Conseil des maîtres) du Vovinam-Viet Vo Dao. Très diplomate, humble, déterminé et bienveillant, il a noué de bonnes relations avec les responsables d\'organisations connues comme le Lions Club, le Rotary Club, le syndicat des Écoles (Hội Liên Trường), la Franc-maçonnerie ainsi que d’autres associations.",
                    "En 1966, maître Mạnh Hoàng a introduit le Vovinam-Viet Vo Dao dans le programme scolaire du Ministère de l’Éducation Nationale, en commençant par quatre lycées pilotes de Saigon : Chu Văn An, Trung Vuong, Gia Long et Pétrus Ký, puis plus tard dans d’autres lycées publics comme Cao Thang, Nguyen Trai, Vo Truong Toan, Le Van Duyet, Tran Luc, Ho Ngoc Can et Mac Dinh Chi. C’est également grâce à ses efforts que le Vovinam-Viet Vo Dao est enseigné au sein la Police Nationale du Sud Vietnam en 1966.",
                    "C’est encore grâce à sa diplomatie que maître Mạnh Hoàng a pu implanter en 1965 un grand centre pour le Vovinam-Viet Vo Dao afin d’y établir le Centre Hoa Lư  au stade Hoa Lư dans le 1er district de Saigon.",
                    "A la fin de l’année 1967, maître Mạnh Hoàng décède subitement. Au début, ayant de la fièvre de façon irrégulière, il pense qu’il s’agissait d’un coup de fatigue et ne prête que peu d’attention. Il est parti se reposer en bord de mer, au Cap Saint-Jacques (Vung Tau), pensant que l’air marin lui fera du bien par rapport aux fortes chaleurs de Saigon qui, selon lui, sont la cause de sa fièvre. Les maîtres Trần Huy Phong, Phan Quỳnh et un de ses amis, Monsieur Nguyễn Văn Tụ, l’ont accompagné. Mais, sur place, son état s’est aggravé, si bien que maître Trần Huy Phong décide de l’emmener aux urgences de l’hôpital militaire australien du Cap Saint-Jacques. Pendant les examens médicaux, il est tombé dans le coma et décède le 15 décembre 1967. Par la suite, les médecins ont fait savoir que maître Mạnh Hoàng souffre de la fièvre typhoïde et de diabète aigu, qui n’ont pas été pris en charge suffisamment tôt.",
                    "Maître Mạnh Hoàng est décédé très jeune, avant l’âge de 30 ans. Il nous a toutefois laissé une grande empreinte au Vovinam-Viet Vo Dao. C’était un patriote doté d’une grande passion pour notre art martial. Grâce à ses talents diplomatiques, il a pu rassembler de grandes personnalités du Vietnam pour aider au développement du Vovinam-Viet Vo Dao. Son décès a fait l’objet de grands articles médiatiques relatant toutes ses importantes contributions.",
                    "/manhhoang/photo3.png&Photo 3 : Club de Vinh Vien, Saigon, 1964. G/D - En haut : Phan Quỳnh, Mạnh Hoàng, Lê Công Danh, Trịnh Ngọc Minh. G/D - en bas : Trần Văn Trung, Đặng Đình Phúc, Trần Văn Bé",
                    "Ses funérailles sont célébrées selon les rituels du Vovinam-Viet Vo Dao en présence de nombreuses personnalités des différents milieux (scolaires, arts martiaux, religieux, associations, amicales) du Vietnam comme de l’étranger.",
                    "Maître Mạnh Hoàng est une étoile brillante du Vovinam-Viet Vo Dao. Sa disparition est une grande perte pour le monde des arts martiaux et pour la société vietnamienne.",
                    "Lors du 2ème Congrès Mondial du Vovinam-Viet Vo Dao à Paris en 1996, pour exprimer la reconnaissance et honorer sa mémoire, le Congrès a décidé de le promouvoir au titre de Grand Maître, Ceinture Blanche Suprême, membre de tradition du Vovinam-Viet Vo Dao.",
                    "<b>Témoignage du maître Nguyễn Văn Thông</b> (Melbourne, Australie):",
                    "« ... Maître Mạnh Hoàng est la personne qui a le plus de mérite dans les années 1960, car c\'est grâce à lui que le Vovinam-Viet Vo Dao a connu un essor considérable.",
                    "C’était un homme chaleureux, tolérant et simple, qui nous considérait comme ses frères. C\'était également un diplomate habile, sachant s’attirer la sympathie de tous ceux qui le rencontraient. Malheureusement, il est parti trop tôt rejoindre le maître Fondateur alors qu\'il n\'avait pas encore 30 ans.",
                    "Les maîtres Mạnh Hoàng et Trần Huy Phong formaient un duo de maîtres talentueux. C\'est maître Mạnh Hoàng qui a introduit le Vovinam-Viet Vo Dao dans les établissements scolaires et dans la Police Nationale. A cette époque, nous comparons maître Mạnh Hoàng et maître Trần Huy Phong à deux grands génies protecteurs qui se complètent l\'un et l\'autre, comme le Yin et le Yang.",
                    "Maître Manh Hoang nous emmenait partout pour effectuer des démonstrations et promouvoir le Vovinam-Viet Vo Dao. Je me rappelle toujours quelques-unes de ses maximes : « Les vietnamiens pratiquent les arts martiaux vietnamiens » ou « Affronter la douleur pour maîtriser la douleur ». Le tee-shirt avec les mots « Viet Vo Dao » dans le dos est apparu le jour où il nous a emmenés faire des démonstrations dans la région Sud-ouest du Vietnam, avec la délégation d\'artistes venus de Saigon pour secourir les victimes des intempéries... »."
                ]
            }
        ]
    }',
    '{
        "id": 3,
        "note": [
            "Équivalent à la ceinture noire. Selon les règles du Vovinam-Viet Vo Dao, pour se présenter aux examens de niveau moyen (ceinture jaune), il faut être majeur (18 ans).",
            "Changement du régime politique, la dissolution du Vovinam-Viet Vo Dao, plus de contact avec les maîtres au Vietnam, le décès de son père et tous ses frères sont emprisonnés.",
            "Diplôme d’Études Supérieures Spécialisées."
        ],
        "content": [
            {
                "title": "",
                "paragraphes": [
                    "/trannguyendao/photo1.png&Photo 1: Paris, 2016",
                    "Maître Trần Nguyên Đạo a débuté le Vovinam-Viet Vo Dao en 1964 à Ban Me Thuot, Vietnam, sous l\'enseignement de son grand frère, maître Trần Huy Quyền (1945-2001).",
                    "Issu d\'une famille très attachée aux arts martiaux par une très longue tradition familiale remontant au XIIe siècle, maître Dao est le benjamin de six frères qui ont tous atteint un haut niveau dans le Vovinam-Viet Vo Dao.",
                    "/trannguyendao/photo2.png&Photo 2: Limoges, France, 1975. 12e Tech de ciseau du Vovinam-Veit Vo Dao",
                    "En 1965, il s’entraîne au centre de Vinh Vien, puis en 1967 au légendaire centre de Hoa Lu à Saigon, où de très nombreux maîtres ont été formés. A 16 ans, il obtient la permission de passer la [ceinture jaune]. Il anime déjà plusieurs cours et forme plusieurs centaines de pratiquants avant de partir en mission pour l\'Europe en 1975.",
                    "Dans le Centre Hoa Lu, l’enseignement ne se limite pas aux techniques. Maître Dao suit également des formations théoriques sur les arts martiaux, la philosophie, l’histoire, les sciences politiques, la médecine traditionnelle, l\'art de diriger, les méthodes de développement, la musique, la peinture, etc.",
                    "Il a bénéficié de l’enseignement des maîtres les plus prestigieux du Vovinam-Viet Vo Dao : grand maître Trần Huy Quyền (1945-2001), grand maître Vũ Kim Trọng, maître patriarche Trần Huy Phong (1938-1997), maître patriarche Lê Sáng (1920-2010) et grand maître Phan Dương Bình (1929-2020), l’un des derniers disciples du maître fondateur Nguyễn Lộc au Vietnam, décédé le 15 mai 2020.",
                    "/trannguyendao/photo3.png&Photo 3: Lyon, France, 1977.",
                    "En 1974, maître Dao est le premier enseignant officiellement missionné par le Vovinam-Viet Vo Dao du Vietnam pour développer cet art martial à l’étranger.",
                    "Arrivé en France en 1975, son parcours « civil » est très difficile dès ses premiers jours à Limoges (France). Sa vie d’étudiant est bouleversée par la situation politique de son pays natal, le [Vietnam]. Il effectue des « petits boulots » tout en poursuivant ses études supérieures : Université de Limoges, Université de Sorbonne, Conservatoire National des Arts et Métiers de Paris et enfin [DESS] en Informatique Industrielle et Optoélectronique à l’Institut National Polytechnique de Lorraine, promotion 1987.",
                    "Malgré les difficultés, il consacre l’essentiel de son temps à la mission qui lui est confiée.",
                    "/trannguyendao/photo4.png&Photo 4: Hanoï, Vietnam, 2019. Maître Huỳnh Hữu Quý (G), maître Trần Nguyên Đạo (D)",
                    "Marié en 1985, il est père de quatre enfants : un fils adoptif et trois enfants biologiques, dont un garçon et deux filles.",
                    "Il est fondateur de plusieurs mouvements et fédérations de Vovinam-Viet Vo Dao en France, Belgique, Canada, Algérie, Maroc, Sénégal, Burkina-Faso, Mali, Biélorussie, Ukraine, etc. Il contribue également à la création de différentes institutions telles que : la Fédération Européenne (1990), la Fédération Africaine (2005), la Fédération Mondiale et le Conseil Mondial des Maîtres de Vovinam-Viet Vo Dao (1996).",
                    "<h5>Il a assumé plusieurs hautes fonctions :</h5><ul><li>1985- 2000 : président du Conseil des Maîtres de France.</li><li>1990-1992 : président du Conseil des Maîtres d’Europe.</li><li>2000-2004 : président de la Fédération Mondiale de Vovinam-Viet Vo Dao.</li><li>2004-2016 : secrétaire général du Conseil Mondial des Maîtres de Vovinam-Viet Vo Dao (3 mandats successifs)</li><li>Depuis 2004 : président de la Commission Technique Internationale.</li><li>Depuis 2015 : président du Conseil Consultatif de la Fédération Mondiale Vocotruyen (WFVV).</li></ul>",
                    "/trannguyendao/photo5.png&Photo 5: Ecole Polythechnique de Palaiseau, France, 1976.",
                    "<h5>Maître Dao en quelques chiffres</h5>Dans le cadre de sa mission de développement du Vovinam-Viet Vo Dao, maître Trần Nguyên Đạo a contribué à former environ 95 maîtres dans le monde:",
                    "<ul><li>2 ceintures blanches suprêmes (10ème Dang).</li><li>2 ceintures rouges 3ème degré (7ème Dang).</li><li>8 ceintures rouges 2ème degré (6ème Dang).</li><li>10 ceintures rouges 1er degré (5ème Dang).</li><li>Environ 73 ceintures rouges (4ème Dang).</li><ul>",
                    "/trannguyendao/photo6.png&Photo 6: Bruxelles, Belgique, 1984.",
                    "Respectant la tradition du Vovinam-Viet Vo Dao, maître Trần Nguyên Đạo a présenté cinq fois des thèses d’arts martiaux (1977, 1990, 1998, 2005 et 2016). Il est promu au titre de Grand Maître, Ceinture Blanche Suprême, par le Conseil Mondial des Maîtres lors du 8ème Congrès Mondial de Vovinam-Viet Vo Dao en 2016 en Californie (États-Unis), après avoir dirigé le Conseil Mondial des Maîtres pendant 12 ans.",
                    "En 2015, maître Trần Nguyên Đạo reçoit la reconnaissance de l\'État vietnamien, par l’intermédiaire du Comité Olympique du Vietnam et de la Fédération Mondiale Vocotruyen, pour sa contribution à la culture des arts martiaux vietnamiens. A cette occasion, il est promu au titre de Grand Maître International (10ème Dang)."
                ]
            }
        ]
    }',
    '{
        "id": 4,
        "note": [
            "1er centre d’entraînement du Vovinam après le décès du maître fondateur Nguyễn Lộc."
        ],
        "content": [
            {
                "title": "",
                "paragraphes": [
                    "Maître Trịnh Ngọc Minh, de son vrai nom Trịnh Văn Mão, est le bâtisseur du Vovinam-Viet Vo Dao dans la région Centre du Vietnam.",
                    "/trinhngocminh/photo1.png&Photo 1: Maître Trịnh Ngọc Minh (1939-1998)",
                    "Maître Trịnh Ngọc Minh est né le 5 août 1939 à Hanoï, au Nord du Vietnam. Sa famille a migré dans le Sud du Vietnam en 1940 et s\'est installée à Phu Nhuan, Saigon. A la fin de l’année 1954, son père a rejoint le Nord Vietnam, laissant la famille dans le Sud.",
                    "Malgré son jeune âge, Maître Trịnh Ngọc Minh vit de manière autonome en travaillant pour subvenir aux besoins de sa famille. Cette expérience de vie lui a procuré des vertus comme la confiance, la persévérance et l’amour du travail. C’est un homme joyeux, ouvert et actif. Il s’est marié en 1957 avec Madame Võ Thị Mới.",
                    "En 1959, il a débuté le Vovinam-Viet Vo Dao au centre d’entraînement de la [Trần Hưng Đạo], sous la direction des maîtres Lê Sáng et Trần Huy Phong. Durant la période d\'interdiction par le gouvernement Ngô Đình Diệm (1960-1964), il a continué à s\'entraîner dans la clandestinité au club de Ho Vu avec maître Trần Huy Phong et ses condisciples Trần Huy Quyền, Cao Văn Cát, Liên Quốc, Tô Cẩm Minh et Lý Phúc Thái.",
                    "Maître Trịnh Ngọc Minh a contribué au développement du Vovinam-Viet Vo Dao à partir de 1966 avec le programme d’enseignement des arts martiaux au sein de l’Éducation Nationale dans les lycées de Saigon Chu Văn An, Trung Vuong, Cao Thang, Gia Long et Pétrus Ký.",
                    "Maître Trịnh Ngọc Minh est nommé enseignant responsable au lycée technique Cao Thắng, puis responsable technique au centre d’entraînement Trần Hưng Đạo, à Saigon, assisté de maître Ngô Kim Tuyền.",
                    "En 1967, lorsque le Vovinam-Viet Vo Dao est introduit dans la Police Nationale, maître Trịnh Ngọc Minh est l’un des assistants du maître patriarche Lê Sáng durant les cours de formation.",
                    "/trinhngocminh/photo2.png&Photo 2: Cérémonie de remise de ceinture rouge, Centre Hoa Lu, 1970, 4ème Dang pour maître Ngô Kim Tuyền (2) et 6ème Dang pour maître Trịnh Ngọc Minh (1) Maîtres : Lê Sáng (3), Trần Huy Phong (4), Nguyễn Văn Thông (5), Trần Bản Quế (6)",
                    "En août 1967, maître Trịnh Ngọc Minh a reçu la mission de développer le Vovinam-Viet Vo Dao à Nha Trang et plus tard dans toute la région du Centre. Il s’est installé avec sa famille au 93 rue Nguyễn Hoàng, à Nha Trang (actuellement rue Ngô Gia Tự), et a utilisé son domicile personnel comme siège du bureau de liaison du Vovinam-Viet Vo Dao de la région du Centre.",
                    "Sur place, il a reçu l’aide active du grand maître Lê Trọng Hiệp, pour développer le Vovinam-Viet Vo Dao dans plusieurs villes de la région du Centre (Phu Yen, Cam Ranh, Quy Nhơn, Da Lat, Phan Rang, Phan Thiet, Ban Me Thuot, Pleiku, Da Nang etc.).",
                    "Maître Trịnh Ngọc Minh a ouvert le premier centre d’entraînement au 4bis Hoang Hoa Tham, à Nha Trang, siège des anciens combattants de Khanh Hoa avec l’assistance des instructeurs Voeng Long et Nguyễn Văn Thái. Ce centre a rencontré beaucoup de succès auprès de la population. En outre, il a mis en place des cours accélérés destinés à former des instructeurs afin de répondre à la demande de la population de Khanh Hoa ainsi qu’aux autres villes de la région du Centre et des hauts plateaux.",
                    "Avec le soutien du grand maître Lê Trọng Hiệp, maître Trịnh Ngọc Minh a ouvert les premiers centres d’entraînement pour les officiers et élèves officiers de l’Armée de l’Air et de la Marine Nationale. D\'autres centres ont ensuite été ouverts dans la marine et auprès des commandos à Dong Ba Thin.",
                    "/trinhngocminh/photo3.png&Photo 3: Centre de Formation de l\'Armée de l\'Air, Nha Trang, 1968. A droite : Maître Trịnh Ngọc Minh (1) en costume, Maître Lê Trọng Hiệp (2) en uniforme militaire",
                    "Avec ses meilleurs disciples, maître Trịnh Ngọc Minh a développé le Vovinam-Viet Vo Dao à Nha Trang. Plusieurs clubs ont ainsi vu le jour rue Nguyễn Hoàng, rue Le Loi, rue Van Kiep ainsi que des salles d\'entraînement dans des lycées et écoles Bá Ninh, Giuse, Tan Phuoc, La San Binh Tan, l’école catholique de Hon Chong et le centre de formation des cadres du Ministère du Développement Rural.",
                    "De 1969 à 1973, avec le soutien actif du grand maître Phạm Hữu Độ, sous-préfet de la province Binh Dinh, et du grand maître Nguyễn Văn Cường, sous-préfet de la province Lam Dong, le Vovinam-Viet Vo Dao a connu un essor fulgurant dans toute la région du Centre et des hauts plateaux du Vietnam. Maître Trịnh Ngọc Minh a nommé ses meilleurs disciples pour assumer la responsabilité des centres d’entraînement suivants :",
                    "<ul><li>Le Centre Vovinam-Viet Vo Dao de Tuy Hoa, province Phu Yen, sous la direction de l’enseignant Trần Văn Phước.</li><li>Le Centre Vovinam-Viet Vo Dao de Da Lat, province Tuyen Duc, sous la direction de l’enseignant Lâm Quang Lân.</li><li>Le Centre Vovinam-Viet Vo Dao de Qui Nhon, province Binh Dinh, sous la responsabilité du maître Nguyễn Văn Chiếu.</li><li>Le Centre Vovinam-Viet Vo Dao de Phan Rang, province Ninh Thuan, dirigé par les enseignants Nguyễn Châu Hùng, Đặng Ngọc Thọ, puis placé sous la direction du maître Đặng Hữu Hào.</li><li>Le Centre Vovinam-Viet Vo Dao de Da Nang créé et dirigé par maître Trần Tấn Vũ.</li><li>Le Centre Vovinam-Viet Vo Dao de Ban Me Thuot sous la direction de l’enseignant Nguyễn văn Bính.</li></ul>",
                    "Au début de l’année 1971, le Vovinam-Viet Vo Dao est présent dans la majorité des provinces du Centre du Vietnam, de Phan Thiet en remontant vers Phan Rang, Ninh Thuan, Khanh Hoa, Tuy Hoa, Binh Dinh, Lam Dong, Da Lat, Ban Me Thuot, Pleiku, Kontum, Dac Lac, etc. De nombreux maîtres et enseignants du Vovinam-Viet Vo Dao sont issus de ces centres :",
                    "<ul><li><b>Au Vietnam: </b>Nguyễn Bá Thuận (1950-1992), Nguyễn Văn Chiến, Tăng Hữu Cảnh, Trầm Kiết, Phạm Văn Nguyên, Nguyễn Lương Bằng, Lương Công Anh Tuấn, Trần Thọ Thảo, Trần Công Lý, Đoàn Văn Làm, Võ Hải, Đặng Ngọc Thọ, Phạm Văn  n, Nguyễn Trương Hoạt, Mai Xuân Tú, Đoàn Trị, Đinh Điện, Lê Kim Tường, Lý Văn Lục, Phan Chánh Tiêu, Đỗ Đình Thạnh, Nguyễn Văn Nhâm, Nguyễn Hùng Việt, Trần Văn Phước, Đặng Ngọc Thọ, Lư Quang Đức (1953-2017), Hồ Hữu Vui, Hoàng Tiến Đăng, Nguyễn Tấn Nghị, Trương Sĩ Anh</li><li><b>En Suisse: </b>Hà Chí Thành</li><li><b>En Belgique: </b>Huỳnh Hữu Quý</li><li><b>Au Canada :</b> Nguyễn Cao Khanh</li><li>Aux États-Unis :</li> Tôn Thất Lăng, Nguyễn Văn Phụng, Lâm Quang Lân, Lê Huy Chương, Trần Mỹ Đức, Hoàng Minh Đức, Trần Văn Hoài, Nguyễn Văn Giàu, Võ Ước</li></ul>",
                    "En avril 1975, lorsque le Vovinam-Viet Vo Dao a été interdit par le nouveau régime politique, maître Trịnh Ngọc Minh est retourné vivre à Saigon en laissant à ses disciples Nguyễn Bá Thuận et Trần Công Lý le soin d’assurer la gestion des centres d’entraînement de Nha Trang. Avant son départ, il leur a demandé de continuer à développer le Vovinam-Viet Vo Dao dès que possible.",
                    "En 1995, après la suite d’une hausse de tension artérielle, il est partiellement paralysé. Toutefois, sa santé s\'est améliorée grâce à sa volonté et à l’entraînement.",
                    "Maître Trịnh Ngọc Minh décède le 30 décembre 1998, à l’âge de 60 ans à son domicile, suites à un accident vasculaire cérébral.",
                    "Sa crémation a eu lieu au cimetière An Duong Dia Binh Hung Hoa. Une partie de ses cendres est placée à la pagode Dong Hiep, Go Vap et une autre partie a été dispersée dans la mer à Nha Trang par ses disciples, conformément à son souhait.",
                    "Le décès du maître Trịnh Ngọc Minh a provoqué beaucoup d’émotions et de regrets à sa famille ainsi qu’à tous les pratiquants du Vovinam-Viet Vo Dao au Vietnam comme à l’étranger. C’est un disciple loyal, fidèle, un maître respectueux du Vovinam-Viet Vo Dao.",
                    "Ses cinq enfants (trois garçons et deux filles) pratiquent le Vovinam-Viet Vo Dao et ont réussi dans leur vie professionnelle. Ses disciples sont réputés tant au Vietnam qu’à l’étranger.",
                    "Lors du 6ème Congrès mondial du Vovinam-Viet Vo Dao à Paris en mai 2008, sur proposition du Secrétaire Général du Conseil Mondial des Maîtres, maître Trần Nguyên Đạo, il a été honoré et promu au titre posthume de Grand Maître, Ceinture Blanche Suprême par le Conseil Mondial des Maîtres."
                ]
            }
        ]
    }',
    '{
        "id": 5,
        "note": [
            "Même jour et même promotion.",
            "Niveau débutant.",
            "Niveau ceinture jaune ou noire.",
            "Maître fondateur Nguyễn Lộc, de son vivant, demande à ses disciples de l’appeler « Anh » (grand frère) au lieu de « Thầy » (maître).",
            "Les gardes royaux",
            "Actuellement en activité à Vancouver, Canada.",
            "Disciple direct du maître Fondateur et/ou membre du premier Conseil des Maîtres en 1964."
        ],
        "content": [
            {
                "title": "",
                "paragraphes": [
                    "Le grand Maître Trần Đức Hợp est né le 3 septembre 1931 à Phuc Yen, au Nord du Vietnam. C’est l\'un des meilleurs disciples du maître Nguyễn Lộc. Il a débuté le Vovinam-Viet Vo Dao en 1948 au club de la rue Hang Than à Hanoi, en même temps que le grand maître [Phan Dương Bình].",
                    "Selon maître Hợp, il y a une centaine de pratiquants au début de sa promotion. Puis ce nombre a diminué avec le temps par manque de persévérance. Parmi les élèves qui ont abandonné, nombreux sont ceux qui ayant tout juste le niveau nécessaire pour [se défendre]. A la fin, il ne reste qu’une dizaine de pratiquants atteignant le [niveau moyen], dont maîtres Trần Đức Hợp et Phan Dương Bình.",
                    "Quelques temps plus tard, maître Nguyễn Lộc a transféré les cours à son domicile à rue Hang Trong. Maître Hợp raconte : « ... [Frère Lộc] nous a dit de venir nous entraîner chez lui à la rue de Hang Trong. Comme des culturistes faisant de la musculation à Septo viennent aussi s’entraîner avec nous, frère Lộc nous a demandé d’aller à Au Tri Vien (parc réservé pour les enfants) pour avoir de la place. Après quelque temps de pratique, les culturistes ont abandonné car ils ne peuvent pas supporter le rythme. Il ne reste donc que frère Binh et moi-même. Quand frère Lộc a déménagé à la rue Hang Voi, frère Bình et moi avons continué à venir nous entraîner aux heures où frère Lộc n’est pas occupé avec ses nouveaux centres... »",
                    "En 1953, quand maître Trần Đức Hợp a quitté Hanoi pour s’installer à Dalat, au Sud Vietnam, maître Nguyễn Lộc lui a donné l’autorisation d’enseigner le Vovinam au centre de formation des [Mousquetaires] de l\'empereur Bảo Đại. En 1954, il s’est engagé dans l’armée, puis en 1955, il est chargé d’enseigner à l’école militaire des officiers à Thu Duc. Il a également enseigné aux officiers et aux pupilles de la nation avec le maître fondateur. En 1960, il est transféré chez les rangers de la ville de Tay Ninh pour enseigner le Vovinam-Viet Vo Dao.",
                    "/tranduchop/photo1.png&Photo 1: Hanoi, 1948. De gauche à droite : Trần Đức Hợp, Nguyễn Cao Hách, Phan Dương Bình, Nguyễn Lộc, Bùi Thiện Nghĩa, Nguyễn Dần",
                    "En 1968, il est transféré à Long Khanh, à la 18ème Division d\'Infanterie, où il enseigne le Vovinam aux régiments et aux bataillons des corps comme : l’infanterie, l’artillerie, le génie et les transmissions. De temps en temps il se rend à la province de Binh Tuy pour enseigner le Vovinam aux parachutistes jusqu’en 1975.",
                    "En 1969, maître [Trần Văn Trung] lui a apporté une aide considérable après avoir fini ses classes à l’école militaire des officiers de Thu Duc. Grâce à ce renfort, le Vovinam-Viet Vo Dao a pu se développer rapidement, d’abord au centre de la jeunesse de Long Khanh, puis dans les provinces avoisinantes.",
                    "Après la chute de Saigon en 1975, maître Hợp est emprisonné dans un camp de rééducation comme la plupart des maîtres et des militaires de l\'époque. En 1988, grâce à son fils, il a réussi à quitter le pays pour se réfugier dans le Massachusetts, aux États-Unis. A partir de cette date, il participe activement aux activités du Vovinam-Viet Vo Dao aux États-Unis, notamment à la Fédération Américaine de Vovinam-Viet Vo Dao.",
                    "Le 16 septembre 1995, en réponse à l’appel du maître patriarche Trần Huy Phong, maître Trần Đức Hợp et les maîtres de l\'ancien Conseil des Maîtres en 1964, ont publié la déclaration de création officielle du Conseil Provisoire des Maîtres à l’étranger. Ce conseil est l’organe précurseur du Conseil Mondial des Maîtres et de la Fédération Mondiale de Vovinam-Viet Vo Dao créés lors du 2ème Congrès Mondial en 1996 à Paris.",
                    "/tranduchop/photo2.png&Photo 2: Centre Hoa Lu, 1967. Maîtres : Trần Huy Phong (1), Trần Đức Hợp (2), Trần Bản Quế (3), Phan Quỳnh (4), Trần Thế Phượng (5), Lý Phúc Thái (6), Quỳnh Kỳ (7), Trần Tấn Vũ (8), Ngô Kim Tuyền (9)",
                    "A partir de cette date, maître Trần Đức Hợp fait partie du Conseil Suprême des Maîtres, promu au titre de Grand Maître, Ceinture Blanche Suprême, approuvé par le Congrès Mondial en 1996 comme étant un [membre de la tradition du Vovinam-Viet Vo Dao].",
                    "Maître Trần Đức Hợp est décédé le 30 mars 2000 à 69 ans, à la suite d’une opération chirurgicale du cœur. Il est marié, père de quatre enfants qui vivent actuellement aux États-Unis.",
                    "Le décès du maître Trần Đức Hợp a provoqué une grande tristesse dans le monde du Vovinam-Viet Vo Dao et laissé beaucoup de chagrin pour sa famille. C’est un disciple loyal, fidèle, un maître respectueux du Vovinam-Viet Vo Dao, une étoile brillante dans le ciel de la culture martiale du Vietnam."
                ]
            }
        ]
    }',
    '{
        "id": 6,
        "note": [
            "Maître Trần Huy Quyền est le 5ème enfant d’une famille de sept enfants dans l’ordre suivant : <ol><li>Trần Thị Nguyệt (1931-2015),</li><li>Trần Bản Quế (Ceinture Blanche Suprême),</li><li>Trần Thế Tùng (niveau ceinture jaune – 1965),</li><li>Trần Huy Phong (1938-1997) (Patriarche),</li><li>Trần Huy Quyền (1945-2001) (Ceinture Blanche Suprême),</li><li>Trần Thiện Cơ (Ceinture jaune – 1971),</li><li>Trần Nguyên Đạo (Ceinture Blanche Suprême).</li></ol>",
            "Appelée aussi la guerre d’Indochine.",
            "Premier Song Luyện avec son condisciple Nguyễn Văn Thái.",
            "La dynastie des rois Hung Vuong est une dynastie de 17 rois entre 2888 av. J.-C. et 258 av. J.-C. Considérés comme les fondateurs du pays et célébrés chaque année le dixième jour du troisième mois lunaire (au mois d\'avril du calendrier grégorien).",
            "Trưng Trắc et Trưng Nhị (12-43 après J.C.) sont deux personnages historiques qui se sont opposés victorieusement à la domination chinoise au Viêt Nam. Elles sont vénérées comme des héroïnes nationales, instigatrices du premier mouvement de résistance antichinois, après 247 ans de domination. Beaucoup de temples leur sont dédiés et un jour de congé annuel est accordé en février pour commémorer leur disparition. Un district de Hanoï porte leur nom, tout comme de nombreuses rues et de nombreuses écoles à travers le pays.",
            "« Việt Nam Thời Nay » est le 1er journal quotidien en langue vietnamienne, subventionné par l\'État de Victoria.",
            "
        ],
        "content": [
            {
                "title": "",
                "paragraphes": [
                    "Grand maître Trần Huy Quyền, de son vrai nom Trần Ích Quyền, né le 24 décembre 1945 à Quan Phuong Trung, dans le district Hai Hau, province Nam Dinh, Nord du Vietnam, il est le cinquième d’une famille de [sept enfants].",
                    "/tranhuyquyen/photo1.png&Photo 1:",
                    "Il a grandi dans un pays déchiré par des guerres : la guerre entre les révolutionnaires et le gouvernement colonial français (1884-1945), puis la lutte contre la domination japonaise (1940-1945), puis [la guerre entre les Việt Minh et les français (1946-1954)], et enfin la guerre entre le Nord et le Sud Vietnam (1954-1975).",
                    "Il n’a pas eu beaucoup de chance dans sa jeunesse. Sa mère lui a donné naissance sur le chemin pour la maternité, au pied du banyan à l’entrée du village. En l’absence de son père, sa mère a dû se débrouiller toute seule pour couper le cordon ombilical et le ramener à la maison.",
                    "A cette époque, sa famille est très pauvre. Pour l’anniversaire de ses 8 ans, il n’a qu’un seul vêtement et rêve de pouvoir manger une orange. Pour exaucer son vœu, sa sœur a vendu ses vêtements et la famille a renoncé à manger ce jour-là pour pouvoir lui acheter une orange.",
                    "L’année de ses 9 ans (1954), sa famille s’est déplacée à Danang, au Centre du Vietnam, et quelque temps plus tard, son père est transféré à Ban Me Thuot pour des raisons professionnelles. De ce fait, il a suivi ses frères à Saigon où ils sont hébergés chez des connaissances de la famille. Depuis ce jour, il a perdu le bonheur de vivre dans le cocon familial, obligé de se débrouiller jusqu’à sa majorité.",
                    "/tranhuyquyen/photo2.png&Photo 2:",
                    "En 1960, maître Trần Huy Quyền a débuté le Vovinam-Viet Vo Dao au centre d’entraînement situé dans la rue [Trần Hưng Đạo, à Saigon]. Dont l’enseignement est dispensé par les maîtres Lê Sáng et Trần Huy Phong.",
                    "Très talentueux, il est sélectionné après seulement un an de pratique pour faire partie de l’[équipe de démonstration] à la salle Olympique de Saigon, à l’occasion d’une collecte de fonds en faveur des victimes des inondations dans le Sud-est du Vietnam.",
                    "En 1963, il est revenu à Ban Me Thuot pour rendre visite à ses parents. Là-bas, il a ouvert son premier club dans un village réservé aux familles de militaires et de fonctionnaires pour aider les jeunes à développer leurs capacités d’auto-défense. Parmi les pratiquants de ce club, se trouve son jeune frère, qui deviendra plus tard : maître Trần Nguyên Đạo.",
                    "En 1965, maître Trần Huy Quyền est l’un des premiers disciples du Vovinam-Viet Vo Dao à être promu au titre d\'instructeur au centre d’entraînement de la rue Vinh Vien par maître Trần Huy Phong. Parmi les condisciples de sa promotion également promus en tant qu’instructeurs, figurent les maîtres Nguyễn Văn Thái, Lê Công Danh, Trần Văn Bé, Trần Văn Trung et Nguyễn Văn Thông.",
                    "Entre 1965 et 1975, il a enseigné dans les centres suivants : centre de formation de Cai Von, club de la province de Vinh Long, 81ème Bataillon de Commandos Parachutistes. Il a également créé le centre d’entraînement du lycée Hieu Nghia à Saigon, où il occupe le poste de professeur de mathématiques et de directeur du centre d’entraînement de Vovinam-Viet Vo Dao.",
                    "En plus de son activité de professeur de mathématiques, il est en service actif chez les rangers dans l\'armée pendant de nombreuses années.",
                    "En 1974, il s’est marié avec Madame Trần Thị  n. De cette union ont vu le jour Trần Thị Quỳnh Anh (1975) et Trần Huy Quang (1986).",
                    "En 1975, comme tous les maîtres, il est emprisonné dans des camps de rééducation durant six longues années (1975-1981). Il est d’abord enfermé pendant trois ans dans la prison de Chi Hoa (Saigon) avec le maître patriarche Lê Sáng, puis il est transféré à un autre endroit. Il s’évade en 1981 et vit ensuite dans la clandestinité.",
                    "En 1982, grâce à l’organisation de son frère, maître Trần Huy Phong, il a réussi à quitter le pays avec sa famille et un groupe de condisciples. En octobre 1984, il s’est installé avec sa famille à Melbourne, dans l’État de Victoria, en Australie.",
                    "A peine arrivé en Australie, il commence à développer le Vovinam-Viet Vo Dao et participe activement aux activités de la communauté vietnamienne dans tous les domaines : culturel, médias, caritatif, artistique.",
                    "La première salle d’entraînement de Vovinam-Viet Vo Dao en Australie se trouve chez lui avec une dizaine de disciples. Puis le nombre d’élèves et de salles se sont multipliés dans tout le territoire de l’État de Victoria.",
                    "/tranhuyquyen/photo3.png&Photo 3:",
                    "Il a également rassemblé les autres maîtres d’Australie pour former la direction du Vovinam-Viet Vo Dao afin de gérer des milliers de pratiquants à travers l’Australie. Cette organisation compte notamment les maîtres Nguyễn Văn Thông, Lê Thành Nhân, Diệp Khôi à Melbourne, maître Phạm Thị Loan à Adelaïde et maître Lê Công Danh à Sydney.",
                    "En 1986, il créé la Fédération Australienne de Vovinam-Viet Vo Dao. Dix ans plus tard, cette fédération fait partie des six fédérations fondatrices de la Fédération Mondiale de Vovinam-Viet Vo Dao en 1996 à Paris, dont il est élu vice-président.",
                    " Parallèlement au Vovinam-Viet Vo Dao, il participe aussi aux activités de la communauté vietnamienne comme les cérémonies de commémoration de l’empereur [Hung Vuong], des deux [Sœurs Trưng] et les célébrations des fêtes des différents peuples (Moomba).",
                    "Il est aussi rédacteur en chef du journal [« Vietnam aujourd\'hui »] sous différents pseudonymes littéraires comme Bao Bất Đồng, Chu Văn, Vương Ngọc Yến, etc., et responsable des programmes de radio FM 97.4 sous les noms de Đông A Cư Sĩ, Mộ Dung Tiên Sinh, Trần Huy et Trần Văn.",
                    "A travers ses activités culturelles, il a dynamisé les forums sur la démocratie vietnamienne, acquérant ainsi le respect de nombreuses personnalités politiques australiennes qui lui demandent souvent son avis sur les problématiques relatives au Vietnam.",
                    "Le 12 janvier 2001, maître Trần Huy Quyền est décédé à son domicile, dans la commune de Sprinvale, état de Victoria, Australie, à l’âge de 56 ans.",
                    "Sa disparition a créé un grand vide et de vives émotions, laissant derrière lui l’image d’un maître joyeux, plein de vie, humble et dynamique.",
                    "Maître Trần Huy Quyền est une étoile brillante du Vovinam-Viet Vo Dao. Il est entré dans l’histoire et devenu un des modèles de la culture martiale Vovinam-Viet Vo Dao.",
                    "/tranhuyquyen/photo4.png&Photo 4:",
                    "En 2008, lors du 6ème Congrès mondial du Vovinam-Viet Vo Dao à Paris du 5 au 8 mai, sur proposition du Secrétaire Général du Conseil Mondial des Maîtres, maître Trần Nguyên Đạo, il a été honoré et promu à titre posthume au grade de Grand Maître, Ceinture Blanche suprême, par le Conseil Mondial des Maîtres."
                ]
            }
        ]
    }',
    '{
        "id": 7,
        "note": [
            " Appeler aussi la guerre d’Indochine.",
            "cf. chapitre II, page 57."
        ],
        "content": [
            {
                "title": "La naissance",
                "paragraphes": [
                    "Maître Lê Sáng est né en automne 1920 à Hanoï, Vietnam. Fils de Monsieur Lê Văn Hiển (1887-1959) et de Madame Nguyễn Thị Mùi (1887-1993), il a deux sœurs, Lê Thị Xuất et Lê Thị Dư, dont il est l’aîné.",
                    "Il a grandi dans une famille imprégnée par le confucianisme paternel et le catholicisme maternel. Il a choisi une vie de célibat pour pouvoir se consacrer pleinement à l’art martial.",
                    "En 1939, à l’âge de 19 ans, il est paralysé partiellement suite à un grave maladie, et a rencontré des difficultés pour marcher. Grâce aux soins intensifs reçus durant une année, il réussit à retrouver tout doucement sa force mais éprouve encore des difficultés pour marcher. Pour remédier à ce problème et sur les conseils de ses parents, il décide de chercher un maître pour apprendre les arts martiaux. Avec ses deux amis Đặng Bảy et Đặng Bỉnh, le hasard les a amenés au cours de Vovinam à l’École Normale de Hanoï, où enseigne le maître fondateur Nguyễn Lộc.",
                    "/lesang/photo1.png&Photo 1:",
                    "Possédant une grande force physique, talentueux et persévérant, maître Lê Sáng a très vite retrouvé la santé et progressé de façon fulgurante dans la pratique du Vovinam.",
                    "Cinq ans plus tard, en 1945, le maître fondateur l’a nommé enseignant aux côtés de ses aînés Nguyễn Mỹ, Nguyễn Khải et Nguyễn Bích pour dispenser des entraînements à Hanoï, au centre Bac Qua, à la maison Dau Sao et au centre Quan Ngua. Ensuite, il a souvent accompagné le maître fondateur pour parcourir de nombreuses provinces du Nord du Vietnam telles que Hai Phong, Thach That (Son Tay), Phu Tho, Che Luu, Dan Ha, Dan Thuong, Me Doi, Phat Diem.",
                    "En 1948, la [guerre franco-vietnamienne] (1946-1954) faisant rage, il a provisoirement arrêté le Vovinam pour s’orienter vers des activités économiques. Toutefois, il est toujours resté disponible à chaque fois que le maître fondateur a besoin de lui."
                    "/lesang/photo2.png&Photo 2:"
                ]
            },
            {
                "title": "Migration au Sud",
                "paragraphes": [
                    "En juillet 1954, à la suite du traité de Genève, maître Lê Sáng migre au Sud du Vietnam quelques mois après le maître fondateur Nguyễn Lộc. A son arrivée, il prend contact avec maître Nguyễn Lộc et l’aide de temps en temps. En 1955, il remplace maître Phan Dương Bình (assistante du maître fondateur), lorsque ce dernier doit retourner au Nord pour des motifs familiaux.",
                    "En 1957, le maître fondateur Nguyễn Lộc est tombé malade. Il a autorisé ses disciples à créer de nouveaux centres pour enseigner. Toutes les nouvelles salles sont placées sous la direction des maîtres Lê Sáng et Trần Huy Phong. Maître Lê Sáng décide alors d’arrêter toutes ses activités économiques pour se consacrer uniquement au Vovinam.",
                    "Le 29 Avril 1960, le maître fondateur Nguyễn Lộc est décédé, ne laissant pas de testament et sans désigner de successeur. Maître Lê Sáng, étant le plus âgé parmi les maîtres, est désigné par ses pairs comme « Maître Aîné ».",
                    "Le 11 novembre 1960, le coup d’État contre le gouvernement Ngô Đình Diệm au Sud du Vietnam s’est soldé par un échec. Plusieurs personnalités du monde des arts martiaux sont parmi les insurgés, dont les plus connus sont maître Phạm Lợi (Judo) et maître Tám Kiểng (arts martiaux traditionnels). Les sanctions sont sans appel : l’ensemble des arts martiaux dans le Sud du Vietnam est interdit.",
                    "Maître Lê Sáng s’est donc retrouvé dans l’impossibilité d’enseigner. Il décide de partir dans la province de Quang Duc avec Monsieur Nguyễn Hải, jeune frère du maître fondateur, pour exploiter le bois et créer une plantation d\'hévéas. Cette activité a duré quatre ans (1961-1964).",
                    "Pendant cette période d’interdiction, contrairement à maître Lê Sáng, maître Trần Huy Phong décide de reprendre le flambeau en continuant à développer le Vovinam dans le [plus grand secret]. A la fin de l’année 1963, un deuxième coup d’état éclate, cette fois-ci avec succès et les écoles d’arts martiaux ont de nouveau autorisées à enseigner."
                ]
            },
            {
                "title": "Le patriarche",
                "paragraphes": [
                    "Après quatre années de commerce du bois sans succès, maître Lê Sáng a dû faire face à des difficultés financières. En avril 1964, il décide alors de retourner à Saigon. Ayant appris son retour, les maîtres dirigeants l’ont invité à les rejoindre. A partir de cette date, maître Lê Sáng participe de nouveau au développent du Vovinam-Viet Vo Dao aux côtés des maîtres dirigeants comme Trần Huy Phong, Mạnh Hoàng, Nguyễn Văn Thư, Trần Đức Hợp, Ngô Hữu Liễn, Phan Quỳnh, Trần Bản Quế, Nguyễn Văn Cường, Nguyễn Văn Thông etc. Ils établissent un programme pour institutionnaliser le Vovinam-Viet Vo Dao ainsi qu’un grand projet de développement à l’échelle nationale. C’est la grande époque de renaissance du Vovinam-Viet Vo Dao (1964-1975). C’est à ce moment-là que la fonction de patriarche est créée et maître Lê Sáng est élu à cette fonction par le premier Conseil des Maîtres du Vovinam-Viet Vo Dao.",
                    "/lesang/photo3.png&Photo 3:"
                ]
            },
            {
                "title": "Le centre de Hung Vuong (To Duong)",
                "paragraphes": [
                    "En 1968, maître Lê Sáng a acheté une maison situé au 31 rue Su Van Hanh, dans le 10ème district de Saigon et créé le centre de Vovinam-Viet Vo Dao Hung Vuong. A cette adresse, le rez-de-chaussée est réservé aux bureaux et aux logements, l’étage est utilisé comme salle d’entraînements. Le siège de la Fédération de Formation du Vovinam-Viet Vo Dao est également installé à cette adresse jusqu’en 1975. La majorité des pratiquants du centre Vinh Vien a rejoint ce lieu. ",
                    "Plusieurs maîtres renommés du Vovinam-Viet Vo Dao sont issus de ce centre :",
                    "<b>Vietnam :</b> Nguyễn Văn Sen, Nguyễn Anh Dũng, Lưu Thăng, Nguyễn Tôn Khoa, Nguyễn Chánh Tứ, Võ Văn Tuấn, Phạm Thành Nam, Trần Văn Mỹ, Trần Văn Nhiêu, Tô Văn Vượng, Thái Quí Hưng et Nguyễn Hồng Tâm.",
                    "<b>États-Unis :</b> Dương Viết Hùng, Nguyễn Văn Đỏ.",
                    "<b>Allemagne :</b> Đặng Hữu Hào, Nguyễn Văn Nhàn."
                ]
            },
            {
                "title": "Maître Lê Sáng dans les années noires 1975-1990",
                "paragraphes": [
                    "En 1975, la situation politique au Vietnam a radicalement changé, le régime communiste vietnamien du Nord ayant vaincu le régime Républicain du Sud. Par la suite, le Vovinam-Viet Vo Dao est interdit pendant quinze ans (1975-1990). Comme la plupart des maîtres, maître Lê Sáng est emprisonné dans des camps de rééducation durant treize ans (1975-1988).",
                    "/lesang/photo4.png&Photo 4:",
                    "En 1986, lorsque maître Lê Sáng est encore dans des camps de rééducation, il pense être trop âgé et n\'avait plus l’espoir d\'être libéré. Alors qu’il décide de transmettre la fonction de patriarche à maître Trần Huy Phong. Le 28 septembre 1990, dans une lettre adressée à maître Lê Sang, maître Trần Huy Phong a formulé ses vœux de lui remettre la fonction de patriarche pour prendre du recul et se consacrer à la recherche.",
                    "En 2002, à l’occasion de la visite du maître Lê Sáng en Californie, États-Unis, le grand maître Nguyễn Văn Cường, Secrétaire Général du Conseil Mondial des Maîtres, a réuni le 4 février 2002, un Conseil Mondial des Maîtres extraordinaire afin de procéder à l’installation de maître Lê Sáng au poste de Président du Conseil Mondial des Maîtres."
                ]
            },
            {
                "title": "Les contributions du maître Lê Sáng",
                "paragraphes": [
                    "En qualité de patriarche, maître Lê Sáng a apporté sa contribution à l’enrichissement du Vovinam-Viet Vo Dao dans les domaines techniques et philosophiques suivants :",
                    "<h5>Dans le domaine technique</h5><ol><li>Les techniques de stratégie de combat (Chien Luoc) n° 21 à 30.</li><li>Les techniques de lutte (Vat) n° 16 à 28.</li><li>Les recherches et études des Quyen comme le Long Ho Quyen (le Dragon et le Tigre), le Lao Mai Quyen (le Vieux Prunier), le Ngoc Tran Quyen (la coupe de jade), les Quyen de Sabre, de Bâton long et d\'Hallebarde.</li></ol>",
                    "/lesang/photo5.png&Photo 5:",
                    "<h5>Dans les domaines philosophique et pédagogique<h5>Maître Lê Sáng est à l\'origine des livres et des revues du Vovinam de 1965 à 1975. Les plus représentatives sont les dix revues publiées et diffusées dans le Vovinam-Viet Vo Dao, toujours conservées de nos jours par de très nombreux maîtres et pratiquants. Ces documents contiennent des essais, des études théoriques, de la philosophie, des orientations, des idées de développement, etc., Ils sont rédigés par des maîtres de renom tels que Lê Sáng, Trần Huy Phong, Nguyễn Văn Thư, Lê Văn Phúc, Phan Quỳnh, Ngô Hữu Liễn Trịnh Ngọc Minh, etc. S’y trouvent également des articles sur le théâtre, des poèmes, des récits et des mémoires des pratiquants, enseignants et sympathisants."
                ]
            },
            {
                "title": "La personnalité du maître Lê Sáng",
                "paragraphes": [
                    "Extrait du texte de maître Nguyễn Hồng Tâm, Vietnam:",
                    "« … Au-delà du pratiquant modèle de Vovinam-Viet Vo Dao qui s’entraîne pour vaincre les bassesses de l’âme et les faiblesses du corps pour se construire une vie meilleure, maître Lê Sáng se donne comme responsabilité d’aider les autres, prêt à se sacrifier pour servir le Vovinam-Viet Vo Dao et la société… De plus, grâce à ses travaux de recherche incessants, il a enrichi le système technique du Vovinam- Viet Vo Dao afin de répondre aux nécessités d’un développement international commencé en France en 1973…",
                    "… Compétent dans les arts martiaux, bon commercial, excellent dirigeant, maître Lê Sáng est aussi un grand poète. Ses poèmes reflètent beaucoup d’émotion et d’esprit chevaleresque. Certains de ses poèmes sont transformés en chansons. Dans la vie, c’est un homme simple, vrai, utile pour son entourage, tolérant et patient avec les disciples, disponible pour ses parents…",
                    "… Après une période de maladie, maître Lê Sáng a quitté ce monde à 3 heures du matin (heure du Vietnam) le 27 septembre 2010, correspondant au 20 Août de l’année du Tigre (Canh Dan), à 91 ans (âge vietnamien). La disparition du maître Lê Sáng est une grande perte pour le monde des arts martiaux et pour tous les pratiquants du Vovinam- Viet Vo Dao dans le monde… »."
                ]
            }
        ]
    }',
    '{
        "id": 8,
        "note": [],
        "content": [
            {
                "title": "",
                "paragraphes": []
            }
        ]
    }',
    '{
        "id": 9,
        "note": [],
        "content": [
            {
                "title": "",
                "paragraphes": []
            }
        ]
    }',
    '{
        "id": 10,
        "note": [],
        "content": [
            {
                "title": "",
                "paragraphes": []
            }
        ]
    }',
    '{
        "id": 11,
        "note": [],
        "content": [
            {
                "title": "",
                "paragraphes": []
            }
        ]
    }',
    '{
        "id":12,
        "note": [],
        "content": [
            {
                "title": "",
                "paragraphes": []
            }
        ]
    }'
];

function str_replace_first($from, $to, $content)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $content, 1);
}

for ($i=0;$i<count($greatMasters);$i++){
    $greatMasters[$i] = json_decode($greatMasters[$i], true, JSON_UNESCAPED_UNICODE);
}
$fondatorData = $greatMasters[0];
?>

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
                                <h3 class="name"><?php echo $fondatorData['name'] ?><small class="profession"> <?php echo $fondatorData['date']?></small></h3>
                            </div>
                            <div class="content">
                                <!-- Contenu de la carte -->
                                <div class="main">
                                    <?php 
                                    /*<span class="hint" rel="tooltip" title="<?php echo $note[0]?>">$le_message<span class="note">$nb</span></span>*/
                                    $hint = 0;
                                    for ($i=0;$i<2;$i++){
                                        $sentence = $fondatorData['content'][0]['paragraphes'][$i];
                                        for ($a=0;$a<strlen($sentence);$a++){
                                            if ($sentence[$a] == '['){
                                                $sentence = str_replace_first("[","<span class=\"hint\" rel=\"tooltip\" title=\"".$fondatorData['note'][$hint]."\">",$sentence);
                                                $sentence = str_replace_first("]","</span>","$sentence");
                                                $hint++;
                                            }
                                        }
                                        echo '<p>'.$sentence.'</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" data-toggle="modal" data-target="#fondator">En savoir +</button>
                            </div>
                        </div> <!-- Fin du coté frontal -->
                    </div> <!-- Fin de la carte -->
                </div>
            </div>
        </div>
        <div class="modal fade" id="fondator">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title"><?php echo $fondatorData['name']?><small class="profession"> <?php echo $fondatorData['date']?></small></h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <?php 
                        $hint =0;
                        for ($i=0;$i<count($fondatorData['content']);$i++){
                            $part = $fondatorData['content'][$i];
                        ?>
                        <div id=<?php echo $i?>>
                            <div class="subtitle pl-3">
                                <h4><?php echo $part['title']?></h4>
                            </div>
                            <div class="content pl-4 pr-4">
                            <?php 
                            foreach ($part['paragraphes'] as $sentence){
                                if ($sentence[0] == '/'){
                                    $sentence = explode("&",$sentence);
                                    echo '<img src="#">';
                                    $sentence = $sentence[1];
                                    echo '<p> <b>'.$sentence.'</b> </p>';
                                    continue;
                                }
                                for ($a=0;$a<strlen($sentence);$a++){
                                    if ($sentence[$a] == '['){
                                        $sentence = str_replace_first("[","<span class=\"hint\" rel=\"tooltip\" title=\"".$fondatorData['note'][$hint]."\">",$sentence);
                                        $sentence = str_replace_first("]","</span>","$sentence");
                                        $hint++;
                                    }
                                }
                                echo '<p>'.$sentence.'</p>';
                            }
                            ?>  
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <script>
                        fondatorModal = document.getElementById('fondator');
                        catchPhrase = fondatorModal.getElementsByClassName('catch-phrase');
                        catchPhrase[0].parentElement.classList.add("praise");
                        for (i=0;i<catchPhrase.length;i++){
                            catchPhrase[i].innerHTML = "<p>Grand frère Nguyễn Lộc !</p>";
                        }
                    </script>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <p class="praise"><small>Extrait du livre « Histoire du Vovinam-Viet Vo Dao » rédigé et publié par le Grand-maitre TRAN Nguyen Dao.</small></p>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Titre -->
        <div class="text-center">
            <div style="padding: 50px;">
                <h1 class="content-title-blue">Les grands maîtres</h1>
            </div>
        </div> 
        <!-- Carte des grands ME -->
        <div class="row">
            <?php
            for ($i=0;$i<count($greatMastersDB);$i++){
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
                                    <h3 class="name" style="display:inline-block">Maître <?php echo $greatMastersDB[$i]['name']?></h3>
                                    <p class="profession" style="padding-bottom: 10px;display:inline-block;"><?php echo $greatMastersDB[$i]['birthday'].' - '.$greatMastersDB[$i]['deathDate']?></p>
                                    <?php 
                                    $functions = explode(',', $greatMastersDB[$i]["function"]);
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
                                <h5><b>Biographie de <?php echo $greatMastersDB[$i]['name']?></b></h5>
                            </div>
                            <!-- Contenu -->
                            <div class="content">
                                <div class="main">
                                    <p><?php echo $greatMastersDB[$i]['biographyShort']?></p>
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
