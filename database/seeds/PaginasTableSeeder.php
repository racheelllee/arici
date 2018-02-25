<?php

use Illuminate\Database\Seeder;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paginas')->insert([
            'id' => 1,
            'titulo' => 'philosophie',
            'slug' => str_slug('philosophie', '-'),
            'contenido' => 'Vous satisfaire et réussir. Lorsque nous recevons un projet, nous mettons tout en œuvre pour apporter une réponse appropriée à chaque demande. Toute l’équipe d’Arici est impliquée, l’ensemble de ses compétences mobilisé : ingénieurs, conducteurs de travaux, chefs de chantier, chefs d’équipe et compagnons expérimentés, etc.

				Ce savoir-faire et ce savoir-être font partie de notre ADN depuis un demi-siècle. Ils sont l’héritage d’un homme, Robert Arici. Le fondateur de l’entreprise veille d’ailleurs à leur transmission lorsqu’il passe le témoin en 1999 à l’un des comptables de la société, Jean-Bernard Maron, et à l’un de ses dessinateurs-métreurs, Bernard Dartiailh.

				En 2010, la nomination à la direction générale de Janick Grassi et Éric Bordes, conducteurs de travaux depuis plus de 15 ans chez Arici, confirme cette volonté de préserver le caractère familial et responsable de l’entreprise tout en l’inscrivant dans le futur.',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);

        DB::table('paginas')->insert([
            'id' => 2,
            'titulo' => 'prestations',
            'slug' => str_slug('prestations', '-'),
            'contenido' => 'Polyvalence et remise en question permettent à Arici de répondre à toutes les problématiques : construction, rénovation, restauration ou restructuration. L’entreprise se positionne sur les marchés des collectivités et de tout corps d’État, en mobilisant un encadrement spécialisé dans différents métiers et des compétences spécifiques.

				L’expertise de son équipe, des employés du bureau d’étude en amont au personnel de chantier en aval, permet à Arici de travailler à la réalisation de bâtiments industriels, de logements ou d’équipements publics tels que des établissements d’hébergement pour personnes âgées dépendantes et des crèches.

				Grâce à son implantation à Marmande, à proximité des grandes voies de circulation, Arici intervient en Nouvelle-Aquitaine et en Occitanie.',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);

        DB::table('paginas')->insert([
            'id' => 3,
            'titulo' => 'organisation',
            'slug' => str_slug('organisation', '-'),
            'contenido' => 'Administrations, comptabilité, gestion des chantiers, bureau d’études, chefs de chantier, chefs d’équipe, personnel de chantier, dépôt, installation et maintenance… La performance d’Arici s’appuie sur les qualités humaines et professionnelles de ses collaborateurs.

				Ils sont parties prenantes des projets et de la réussite d’Arici. La direction et le conseil d’administration s’engagent naturellement en faveur de leur formation et d’une prévention « Santé, Hygiène et Sécurité ».
		
				Janick Grassi et Éric Bordes, qui dirigent la société depuis 2010, inscrivent ces politiques dans la continuité perpétuant ainsi la pratique responsable de l’entreprise depuis sa fondation par Robert Arici.',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);

        DB::table('paginas')->insert([
            'id' => 4,
            'titulo' => 'contact',
            'slug' => str_slug('contact', '-'),
            'contenido' => "Formulaire de Contact

					Parce que le contact est important, chez Arici nous mettons un trait d'honneur à ce que vous puissiez nous contacter facilement et rapidement. Voila pourquoi nous mettons à votre disposition le formulaire de contact ci-dessous.

					Vous pouvez également nous joindre par téléphone du lundi au vendredi de 8h à 12h et de 14h à 18h au 05 53 64 02 75.",
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);

        DB::table('imagenes_paginas')->insert([
            'id' => 1,
            'imagen' => 'imagenes_paginas/1-5a76406c67a42.png',
            'leyenda' => 'Depuis 50 ans, bâtir ensemble',
            'paginas_id' => 1,
            'created_at' => new DateTime(),
			'updated_at' => new DateTime()

        ]);
        DB::table('imagenes_paginas')->insert([
            'id' => 2,
            'imagen' => 'imagenes_paginas/2-5a7640c1af3d2.png',
            'leyenda' => "De l'étude à la réalisation...",
            'paginas_id' => 2,
            'created_at' => new DateTime(),
			'updated_at' => new DateTime()

        ]);
        DB::table('imagenes_paginas')->insert([
            'id' => 3,
            'imagen' => 'imagenes_paginas/4-5a7640ededbb1.png',
            'leyenda' => 'Des femmes, des hommes, une équipe...',
            'paginas_id' => 3,
            'created_at' => new DateTime(),
			'updated_at' => new DateTime()

        ]);
        DB::table('imagenes_paginas')->insert([
            'id' => 4,
            'imagen' => 'imagenes_paginas/5-5a7641033ace6.png',
            'leyenda' => "Mettre en oeuvre le contact et l'efficacité",
            'paginas_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
