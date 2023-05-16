<?php

use App\Models\PostModel;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostModel::create([
            'title' => "hola Amorfo",
            'slug' => "primer-post",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'Esto es una prueba del markdawn desde el seed'
        ]);

        PostModel::create([
            'title' => "segundo pasado",
            'slug' => "segundo-pasado",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 's pulvinar diam duis est. In eros fames quis pulvinar rutrum porttitor taciti eu, torquent phasellus blandit semper volutpat curae primis, conubia rhoncu'
        ]);
        PostModel::create([
            'title' => "sabas en streaming",
            'slug' => "sabas-streaming",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'isque vehicula parturient interdum pretium imperdiet, montes fermentum ligula gravida cum aliquet pharetra conubia maecenas.'
        ]);
        PostModel::create([
            'title' => "amd sigue reinando en ventas de CPU",
            'slug' => "amd-reinando-ventas-cpu",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'phasellus blandit semper volutpat curae primis, conubia rhoncus arcu netus facilisis tristique neque varius, ultricies mattis accums'
        ]);
        PostModel::create([
            'title' => "xiaomi reinando en la gama media",
            'slug' => "xiaomi-reinando-gama-media",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'Metus imperdiet lacus tempor sociosqu a quis pharetra erat, nisl curae id non eros vel gravida, auctor lobortis felis sociis libero ligula hendrerit.'
        ]);
        PostModel::create([
            'title' => "nintendo Switch Pro a la vuelta de la esquina",
            'slug' => "nintendo-switch-pro-vuelta-esquina",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'or again is there anyone who loves'
        ]);
        PostModel::create([
            'title' => "ofertas de Steam de verano",
            'slug' => "ofertas-stream-verano",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'Sociosqu etiam vel sagittis magnis sem ante hendrerit, potenti vitae curabitur fusce primis tempus, porta nibh molestie tristique penatibus fringilla.'
        ]);
        PostModel::create([
            'title' => "netflix sigue reinando en rentas de streaming",
            'slug' => "netflix-reinando-rentas-streaming",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'Sociosqu pharetra tortor quisque montes sodales sapien sagittis viverra erat, justo vehicula aliquet vel luctus lacus tempus congue'
        ]);
        PostModel::create([
            'title' => "todos los secretos de la tienda de league of legends",
            'slug' => "secretos-tienda-league-legends",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
            'content_md' => 'Metus imperdiet lacus tempor sociosqu a quis pharetra erat'
        ]);
        PostModel::create([
            'title' => "nvidia las mejores graficas de todos los tiempos",
            'slug' => "nvidia-mejores-graficas-todos-tiempos",
            'content' => "Lorem ipsum dolor sit amet consectetur adipiscing elit montes vestibulum, pulvinar inceptos nostra consequat hac eu tempus mauris lectus, venenatis eget cursus potenti sapien dis hendrerit etiam. Sapien suscipit eu mollis id venenatis maecenas magnis mattis felis morbi lectus ut, vulputate pulvinar nam arcu nisi luctus ligula porttitor vestibulum est. Cras aptent nisi pulvinar at vehicula ligula pharetra fermentum justo posuere, morbi aenean massa pellentesque tempus fusce cursus diam fames, natoque non enim metus ac phasellus dictumst sagittis facilisis.",
        ]);
    }
}
