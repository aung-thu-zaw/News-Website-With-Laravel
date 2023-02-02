<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsPost>
 */
class NewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "sub_category_id"=>$this->faker->numberBetween(1, 47),
            "user_id"=>$this->faker->numberBetween(1, 6),
            "title"=>$this->faker->sentence(),
            "slug"=>$this->faker->slug(),
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor, velit eu maximus sagittis, eros neque euismod quam, non ultrices velit nisi non dolor. Quisque nec felis congue, imperdiet nunc nec, ultricies nisi. Mauris pretium ut urna sit amet sollicitudin. Duis semper maximus mollis. Nulla massa sapien, fringilla ut bibendum eu, porttitor ut turpis. Proin a rutrum est. Nullam blandit suscipit viverra. Suspendisse sed tincidunt justo. Etiam hendrerit lacus diam, quis pulvinar dolor condimentum ornare. Nunc convallis nibh ut fringilla sollicitudin. Donec quis tellus id nulla vulputate volutpat. Ut lacinia in enim hendrerit vulputate. Duis condimentum molestie eros, ut venenatis est euismod a. Morbi eget tristique quam, nec tempor eros.

            Mauris vitae sapien urna. Curabitur ut elit sed orci consectetur luctus. Proin suscipit sapien erat, vel bibendum quam interdum in. Cras nec arcu a nunc sagittis fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed maximus ex nec est ultricies, a mollis elit tempor. Curabitur sed quam vitae ipsum tincidunt ullamcorper non id libero. Mauris ac sodales elit. Integer laoreet ac lorem condimentum gravida. Curabitur euismod lectus in orci pretium sagittis. Nunc et tellus nunc. Morbi in feugiat augue. Integer lectus nibh, lobortis sed dictum eget, lobortis vel ante. In non magna lectus. Nulla efficitur sapien eu turpis egestas volutpat et pellentesque dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

            In sed sem nec neque condimentum sagittis faucibus eget eros. Fusce nec augue urna. Aenean venenatis felis ac condimentum dapibus. Mauris cursus volutpat aliquam. Sed ornare turpis vitae ante vulputate, non egestas orci tincidunt. Pellentesque lacinia dignissim finibus. Proin id neque arcu. Suspendisse est dolor, posuere et magna eu, consequat sollicitudin urna. Mauris elementum magna ultricies ante fermentum, in varius leo placerat. In lacinia mi libero, eget elementum arcu vehicula non. Integer eget ante eros. Fusce quis magna porta, vulputate arcu non, aliquam augue.

            Etiam blandit quis mauris faucibus sollicitudin. Pellentesque ultrices felis eu felis maximus, vel sagittis nisi blandit. Proin venenatis a tellus dapibus rutrum. Sed porta velit id aliquam auctor. Praesent rhoncus ac mauris quis semper. Praesent at tellus dolor. Integer dignissim sapien in ligula dapibus, vel malesuada dui consequat. Phasellus tristique odio urna. Nulla vitae nulla euismod, rutrum ligula a, rhoncus purus. Donec eu rhoncus nulla. Donec ac venenatis lorem. Curabitur ac tempor dui, a eleifend quam.

            Mauris consectetur fringilla nisi, at lobortis ipsum tempor a. Integer commodo lectus ac tortor porttitor, eu auctor lacus auctor. Nam eget ligula quis ligula scelerisque varius. Pellentesque sed odio mattis erat lobortis finibus eu a lacus. Donec sit amet aliquam neque, in sagittis nisi. Duis vel consectetur neque, vel malesuada lacus. Donec nec orci ut nisl bibendum aliquam. Sed porttitor, lectus bibendum ullamcorper tincidunt, lectus massa malesuada tellus, a posuere ante est sit amet velit. Donec mollis velit sit amet metus tincidunt, id ullamcorper ex tristique. Etiam euismod ultricies leo, at dictum nisl accumsan elementum. In id pretium nisi, et lacinia tortor. Cras lacus ante, faucibus non consequat a, laoreet id ligula. Nulla tempor leo lectus, eget imperdiet sem aliquet sit amet. Etiam eget odio consequat, posuere neque et, rhoncus arcu. Aenean non luctus metus, bibendum gravida nunc.

            Donec tincidunt et ligula sit amet varius. Etiam malesuada fringilla odio ut commodo. Integer est urna, accumsan eget sollicitudin hendrerit, viverra id tortor. Ut in vehicula massa, quis dapibus elit. Sed eu euismod risus. Suspendisse laoreet, massa vitae malesuada efficitur, lacus dolor pulvinar sapien, nec pharetra ipsum nulla sed turpis. Curabitur a lectus sed massa pulvinar euismod in at ipsum. Suspendisse congue, dui at tempor sollicitudin, sem enim molestie odio, at vestibulum augue magna vitae mauris. Pellentesque ut nisl nec diam viverra mattis. Nullam accumsan augue ac ex gravida lobortis. Fusce ex purus, dignissim eu nunc a, eleifend venenatis dolor. Suspendisse malesuada quam sit amet nulla convallis, id semper quam lacinia. Etiam sit amet sapien blandit, laoreet eros pretium, cursus risus.

            Suspendisse varius eleifend vestibulum. Fusce nulla ex, aliquam et volutpat faucibus, pellentesque finibus ligula. Vivamus aliquam dui id augue hendrerit, vitae fringilla elit ornare. Cras blandit enim suscipit ullamcorper faucibus. Praesent convallis lorem egestas congue consectetur. Nam volutpat felis in mauris faucibus interdum. Mauris egestas nunc lorem, sit amet tincidunt lectus lacinia et. Cras feugiat euismod vehicula. Mauris cursus velit a mauris posuere, ut tristique massa gravida. Quisque euismod purus ac nulla elementum, sed rhoncus quam sodales.

            Integer a quam sit amet odio rhoncus dignissim in eget sapien. Vestibulum id fringilla lorem, quis rhoncus nisi. Integer eros lorem, maximus non lorem nec, efficitur hendrerit diam. Cras bibendum lacus est, ac iaculis urna egestas et. Maecenas quis lectus turpis. Fusce feugiat, sapien vitae luctus pellentesque, urna nisl rutrum dolor, id ultrices libero magna sed quam. Sed eleifend turpis ante, vitae eleifend augue sollicitudin at. Maecenas sed eleifend libero. Nullam et lorem tincidunt tellus ornare consectetur. Quisque sed leo eget nibh mattis tincidunt hendrerit vitae elit. Nam sollicitudin felis a nisl accumsan elementum. Integer et dui elementum, dapibus mi a, ultricies nunc. Morbi facilisis semper eros, ac tempus enim.

            ",
            "thumbnail"=>$this->faker->randomElement([
                "africa-1.jpg",
                "africa-2.jpg",
                "africa-3.jpg",
                "africa-4.jpg",
                "africa-5.jpg",
                "africa-6.jpg",
                "africa-7.jpg",
                "africa-8.jpg",
                "africa-9.jpg",
                "africa-10.jpg",
                "asian-1.jpg",
                "asian-2.jpg",
                "asian-3.jpg",
                "asian-4.jpg",
                "asian-5.jpg",
                "asian-6.jpg",
                "asian-7.jpg",
                "asian-8.jpg",
                "asian-9.jpg",
                "asian-10.jpg",
                "civil-war-1.jpg",
                "civil-war-2.jpg",
                "civil-war-3.jpg",
                "civil-war-4.jpg",
                "civil-war-5.jpg",
                "civil-war-6.jpg",
                "civil-war-7.jpg",
                "civil-war-8.jpg",
                "civil-war-9.jpg",
                "civil-war-10.jpg",
                "football-1.jpg",
                "football-2.jpg",
                "football-3.jpg",
                "football-4.jpg",
                "football-5.jpg",
                "football-6.jpg",
                "football-7.jpg",
                "football-8.jpg",
                "football-9.jpg",
                "football-10.jpg",
                "life-1.jpg",
                "life-2.jpg",
                "life-3.jpg",
                "life-4.jpg",
                "life-5.jpg",
                "life-6.jpg",
                "life-7.jpg",
                "life-8.jpg",
                "life-9.jpg",
                "life-10.jpg",
                "revolution-1.jpg",
                "revolution-2.jpg",
                "revolution-3.jpg",
                "revolution-4.jpg",
                "revolution-5.jpg",
                "revolution-6.jpg",
                "revolution-7.jpg",
                "revolution-8.jpg",
                "revolution-9.jpg",
                "revolution-10.jpg",
                "tech-1.jpg",
                "tech-2.jpg",
                "tech-3.jpg",
                "tech-4.jpg",
                "tech-5.jpg",
                "tech-6.jpg",
                "tech-7.jpg",
                "tech-8.jpg",
                "tech-9.jpg",
                "tech-10.jpg",
            ]),
            "visitors"=>0,
            'created_at' => $this->faker->dateTimeBetween("-30days", now()),
        ];
    }
}


// 'skills'=>$this->faker->randomElement(["Laravl","PHP 8","Wordpress","HTML-5","CSS-3","VueJs"], mt_rand(1, 6)),
