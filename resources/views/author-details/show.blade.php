<x-app-layout>


    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div>
                <img src="{{ asset('storage/avatars/'.$author->avatar) }}" alt=""
                    class="img-fluid img-thumbnail rounded-circle mb-5"
                    style="width: 200px; height: 200px; object-fit: cover" />
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h2 class="mb-3">{{ $author->name }}</h2>
                <small class="text-secondary">
                    <i class="fa-solid fa-pen-nib me-2"></i>
                    Role - {{ Str::ucfirst($author->role) }}
                </small>

                <div class="d-flex alignt-items-center justify-content-center my-3">
                    <a href="#" class="me-3"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="me-3"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="me-3"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="me-3"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="my-3">
            <h3 class="text-center text-secondary p-3 border-bottom">About Of {{ $author->name }}</h3>
            {{-- <p>
                {!! $author->about !!}
            </p> --}}

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum earum ut laboriosam, labore quaerat
                quasi odio dolores beatae dolorem, culpa perspiciatis voluptate, nam reiciendis quos quisquam iure id
                porro sed odit delectus nemo ducimus? Rerum magnam ab maxime ducimus amet quidem mollitia cumque sed
                vitae provident? Quos quidem provident quis dolore, inventore cupiditate, minus reiciendis sit
                asperiores adipisci dicta nostrum possimus quia soluta sed dolorum omnis odit nam. Architecto aperiam,
                deserunt provident modi harum quam vitae officiis tenetur rerum vero ipsam in sequi, voluptas optio
                doloribus magnam facere incidunt libero! Itaque at dolores quibusdam, accusamus voluptas voluptate nam
                libero fugiat.
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est dolorum illo. Optio magni,
                praesentium, error tempora doloribus non molestias provident ducimus soluta et vitae dolorem autem, est
                repellat veritatis odit? Rerum nobis optio quos beatae. In pariatur dolorem nesciunt repellendus
                reiciendis quae ipsa facere, laboriosam praesentium amet ex quidem exercitationem architecto accusantium
                eveniet nihil minus provident! Sit dicta beatae eos quos porro maxime dolor voluptatum rerum. Minus
                tempore ut odio animi commodi natus, reprehenderit porro sequi fugit molestiae, neque sint possimus id
                incidunt, deleniti necessitatibus ad quos. Fugit nam ea sequi deserunt quaerat ipsum qui maiores
                distinctio laborum voluptatibus illum quod asperiores eum alias iure ullam, laudantium quidem
                consequuntur natus pariatur nobis consequatur nostrum ex! Adipisci ad fugiat tempore eveniet atque,
                autem doloremque quos cupiditate dolorem odio error at nobis quod possimus iure nihil accusantium unde
                voluptas. Repellendus laudantium rem possimus, fuga quos eos aliquid vero quis dignissimos dolorum velit
                ullam voluptas quisquam nisi pariatur accusamus necessitatibus facere. Ut recusandae magnam animi odit
                pariatur non earum id accusantium suscipit voluptates, eligendi, ullam distinctio aut sunt fugit dolores
                enim maxime incidunt, laudantium totam commodi ipsum deserunt et deleniti! Architecto iusto asperiores
                quas reprehenderit modi animi aliquam, quasi id totam mollitia.

            </p>

            <p>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. A deleniti autem molestiae, ut porro asperiores
                perferendis qui enim possimus accusantium commodi voluptate. Provident rem officia iusto exercitationem
                aliquam accusamus quibusdam quisquam alias explicabo, nam quia eligendi fuga qui, quos praesentium ex
                aut non. Sequi ipsum enim, exercitationem facere sint temporibus consequatur nobis eveniet perspiciatis
                optio ex? Iusto cupiditate repudiandae nam nihil perspiciatis recusandae nulla reiciendis blanditiis
                perferendis corporis, earum, voluptate deleniti asperiores odio, qui quis libero dolore ipsum? Obcaecati
                repellat quod molestiae saepe, id, rem cumque voluptate temporibus at nam dolore. Voluptas suscipit
                quidem cupiditate praesentium, sequi quae voluptatum, laudantium in officia, corporis nostrum vitae.
                Assumenda modi consectetur dolorem molestias, recusandae, unde dolores maiores iste error ullam
                blanditiis temporibus. Aliquid nam aliquam saepe, corporis quibusdam consectetur laborum eligendi
                nostrum repellendus molestiae voluptatem sed recusandae. Eaque, sequi maxime. Architecto, veniam quaerat
                quisquam dolor a sapiente nihil iure minus animi aspernatur deleniti saepe nam blanditiis repudiandae
                ratione itaque sunt unde expedita reprehenderit consequuntur tempora cumque nisi, fugit distinctio.
                Corporis porro adipisci iure, earum laboriosam aliquam minima facere id quae pariatur nostrum vel
                voluptate magni placeat reiciendis necessitatibus temporibus, ut quisquam ducimus eveniet vitae modi
                quibusdam sint. Laboriosam, tempore? Reiciendis dolorem non laboriosam aut et vitae omnis officia sunt,
                voluptas vero odit ipsa eum excepturi dicta labore ipsam quibusdam, hic similique sapiente! Doloribus
                deleniti est eos sunt, vero possimus saepe, explicabo, ullam vitae enim dignissimos cupiditate. Eaque
                illo quidem, voluptatem ducimus facilis, velit doloremque suscipit atque odio nisi laudantium.
                Necessitatibus ex, harum praesentium natus est debitis, aspernatur suscipit veniam accusamus fugiat,
                enim reiciendis aut consectetur libero recusandae hic cum illum similique neque. Omnis ducimus
                praesentium necessitatibus tempora voluptatibus odio eos ratione, consectetur provident. Placeat maxime,
                porro sapiente aliquid doloribus vero nostrum illo? Recusandae voluptate expedita facere, corporis ab
                optio similique magni laborum quis modi repudiandae incidunt a praesentium nostrum? Sit quaerat id ea,
                asperiores, facere optio ipsum at eos tempore eligendi rerum inventore sed, iusto suscipit! Dolores
                distinctio eveniet sit voluptate, cum incidunt expedita facilis ullam, autem, eos ipsum iusto commodi
                enim totam reiciendis rerum necessitatibus. Cupiditate ipsum consectetur eos voluptas nisi mollitia
                tempore optio sapiente explicabo laboriosam. Esse saepe, omnis consequatur maiores autem quis velit
                harum ex ducimus accusantium ab veritatis blanditiis numquam minima nisi est optio libero illo, sapiente
                architecto molestias a maxime. Est asperiores corporis, sunt vitae ullam adipisci tenetur, atque
                repellendus odio sint facilis similique, maiores quos voluptatibus temporibus? Fugit beatae facilis quas
                sit magni deleniti doloribus ratione quos maiores possimus ipsam cumque dignissimos molestias iste,
                dolorem vitae autem est fugiat rerum accusamus reprehenderit facere quis! Culpa quas harum aut
                reprehenderit a, expedita, quam necessitatibus ea consequatur alias error maiores consectetur sunt, eum
                atque vero quod? Iste eveniet itaque ex magni facilis fuga praesentium vitae commodi libero, illo,
                cumque quaerat modi illum distinctio reiciendis exercitationem dolor dolore error? Facere, odio neque
                nobis repudiandae aut ipsum voluptatibus. Voluptates, at dolores! Eius voluptatem temporibus atque natus
                provident ratione, aspernatur qui, exercitationem rerum unde repudiandae iusto impedit, beatae autem
                officiis? Modi, libero?
            </p>
        </div>


        <div>
            <h3 class="border-bottom py-3 my-3">
                {{ request("type")=="articles"? "Article News" : "Video News" }}
            </h3>
        </div>

        <x-filter-search-form />

        @if (request("type")=="articles")
        <x-search-news-posts-result :posts="$newsPosts" :author="$author" />
        @endif

        @if (request("type")=="videos")
        <x-search-video-posts-result :posts="$videoNewsPosts" :author="$author" />
        @endif


    </div>
    </div>

</x-app-layout>
