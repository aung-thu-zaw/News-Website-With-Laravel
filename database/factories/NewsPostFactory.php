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
            "language_id"=>1,
            "user_id"=>$this->faker->numberBetween(1, 6),
            "title"=>$this->faker->sentence(),
            "slug"=>$this->faker->slug(),
            "body"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
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
