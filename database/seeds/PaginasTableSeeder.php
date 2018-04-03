<?php

use Illuminate\Database\Seeder;

class PaginasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('paginas')->delete();
        
        \DB::table('paginas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'Philosophie',
                'slug' => 'philosophie-2',
                'contenido' => '<p>V<strong>ous satisfaire et réussir.</strong> Lorsque nous recevons un projet, nous mettons tout en œuvre pour apporter une réponse appropriée à chaque demande. Toute l’équipe d’Arici est impliquée, l’ensemble de ses compétences mobilisé&nbsp;: ingénieurs, conducteurs de travaux, chefs de chantier, chefs d’équipe et compagnons expérimentés, etc. <br></p><p>Ce savoir-faire et ce savoir-être font partie de notre ADN depuis un demi-siècle. Ils sont l’héritage d’un homme, <strong>Robert Arici.</strong> Le fondateur de l’entreprise veille d’ailleurs à leur transmission lorsqu’il passe le témoin en 1999 au comptable de la société, <strong>Jean-Bernard Maron</strong>, et au directeur de travaux, <strong>Bernard Dartiailh</strong>. <br></p><p>En 2010, la nomination à la direction générale de <strong>Janick Grass</strong>i et <strong>Éric Bordes</strong>, conducteurs de travaux depuis plus de 15 ans chez Arici, confirme cette volonté de préserver le caractère familial et responsable de l’entreprise tout en l’inscrivant dans le futur.</p><br><br><h4><font color="#005499">Vidéo "LA PROGRESSION D\'UN CHANTIER"</font></h4><p>
<iframe src="https://www.youtube.com/embed/AliJwPvO3v4?feature=oembed" allowfullscreen="allowfullscreen" width=" 480" height="270" frameborder="0"></iframe>
</p>',
                'leyenda' => '<p>Depuis 50 ans,<strong><br></strong></p><p><strong>bâtir ensemble</strong></p>',
                'created_at' => '2018-02-22 22:30:52',
                'updated_at' => '2018-03-27 18:52:16',
            ),
            1 => 
            array (
                'id' => 2,
                'titulo' => 'Prestations',
                'slug' => 'restations',
                'contenido' => '<p>P<strong>olyvalence et remise en question</strong> permettent à Arici de répondre à toutes les problématiques&nbsp;: <strong>construction, rénovation, restauration ou restructuration</strong>. L’entreprise se positionne sur les marchés de gros-œuvre ou en entreprise générale, en mobilisant un encadrement spécialisé et des compétences spécifiques. <br></p><p>L’expertise de son équipe, des employés du bureau d’étude en amont au personnel de chantier en aval, permet à Arici de travailler à la réalisation de bâtiments industriels, de logements ou d’équipements publics tels que des établissements d’hébergement pour personnes âgées dépendantes et des crèches. <br></p><p>
Grâce à son implantation à Marmande, à proximité des grandes voies de circulation, Arici intervient en <strong>Nouvelle-Aquitaine</strong> et en <strong>Occitanie</strong>.</p>',
                'leyenda' => '<p>De l\'<strong>étude</strong></p><p>à la <strong>réalisation…</strong></p>',
                'created_at' => '2018-02-22 22:30:52',
                'updated_at' => '2018-03-18 20:52:05',
            ),
            2 => 
            array (
                'id' => 3,
                'titulo' => 'Organisation',
                'slug' => 'organisation-2',
                'contenido' => '<p>A<strong>dministrations, comptabilité, gestion des chantiers, bureau d’études, chefs de chantier, chefs d’équipe, personnel de chantier…</strong> La performance d’Arici s’appuie sur les qualités humaines et professionnelles de ses collaborateurs.</p><p>Ils sont parties prenantes des projets et de la réussite d’Arici. La direction s’engage naturellement en faveur de leur <strong>formation</strong>, pour se conformer aux impératifs légaux et réglementaires mais aussi pour répondre aux aspirations d’évolution professionnelle de ses collaborateurs. <br></p><p>
Janick Grassi et Éric Bordes, qui dirigent la société depuis 2010, inscrivent ces politiques dans la continuité perpétuant ainsi <strong>la pratique responsable de l’entreprise</strong> depuis sa fondation par Robert Arici.</p>',
                'leyenda' => '<p>Assurer</p><p>le <strong>contact</strong> et l\'<strong>efficacité…</strong></p>',
                'created_at' => '2018-02-22 22:30:52',
                'updated_at' => '2018-03-18 20:52:21',
            ),
            3 => 
            array (
                'id' => 4,
                'titulo' => 'Contact',
                'slug' => 'contact-2',
                'contenido' => '<p>A<strong>rici est installé à Marmande, au cœur du Sud-Ouest, entre Bordeaux et Toulouse</strong>. 

La proximité des grands axes de communication, l’autoroute et le train, place idéalement l’entreprise au plus près de vos intérêts.</p>',
                'leyenda' => NULL,
                'created_at' => '2018-02-22 22:30:53',
                'updated_at' => '2018-03-07 17:40:28',
            ),
        ));
        
        
    }
}