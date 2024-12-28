<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Dec 2024 23:25:45 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Spike TailwindCSS HTML Admin Template</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class=" bg-surface">
    <main>
        <!--start the project-->
        <div id="" class=" flex p-5 xl:pr-0">


            <aside class="fixed top-0 bottom-0 left-0 w-[270px] h-screen my-4 mx-4 bg-blue-400 rounded-3xl">
                <!-- Fixed Dashboard Section -->
                <div class="sticky top-0 bg-blue-300 px-4 py-2">
                    Dashboard
                </div>

                <!-- Scrollable Content Section -->
                <div class="overflow-y-auto px-2 py-6 h-full">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error esse enim odit nisi magnam! In
                    vitae,
                    consectetur perferendis esse delectus, vero facere recusandae repellat dolor saepe dolores
                    dignissimos sed adipisci ad, hic nemo accusamus maiores blanditiis tenetur sit debitis libero
                    ab.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus aspernatur dolorum asperiores
                    animi omnis similique reprehenderit aliquam consequuntur commodi beatae illum hic atque soluta,
                    quasi tempora iure corporis quaerat qui eligendi assumenda ad quibusdam dolor minima! Ab amet
                    vitae
                    dolorem ratione magnam eaque tenetur maiores repellendus vero necessitatibus? Sunt sint quasi
                    vel,
                    dolorum laudantium, debitis delectus architecto recusandae atque ab dicta blanditiis! Ea in
                    maiores
                    accusantium animi laborum sint neque impedit excepturi cupiditate sapiente incidunt eos aliquam,
                    voluptatem doloremque eaque, alias hic assumenda. Temporibus, perspiciatis at ipsum nihil
                    asperiores
                    sint? Ducimus reiciendis veniam recusandae? Sed consequatur cum iure doloremque ex?
                    <!-- Add the rest of your content here -->
                </div>

                <div class="sticky bottom-0 bg-blue-300 px-4 py-2">
                    Legout
                </div>
            </aside>
            <div class=" w-full page-wrapper xl:px-6 px-0">

                <!-- Main Content -->
                <main class="pl-64 h-full  max-w-full">
                    <div class="container full-container p-0 flex flex-col gap-6">
                        <!--  Header Start -->
                        <header class="sticky top-2 bg-white shadow-md rounded-md w-full text-sm py-4 px-6">


                            <nav class=" w-ful flex items-center justify-between" aria-label="Global">
                                <ul class="icon-nav flex items-center gap-4">
                                    <li class="relative xl:hidden">
                                        <a class="text-xl  icon-hover cursor-pointer text-heading" id="headerCollapse"
                                            data-hs-overlay="#application-sidebar-brand"
                                            aria-controls="application-sidebar-brand" aria-label="Toggle navigation"
                                            href="javascript:void(0)">
                                            <i class="ti ti-menu-2 relative z-1"></i>
                                        </a>
                                    </li>

                                    <li class="relative">

                                        <div
                                            class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:hover]">
                                            <a class="relative hs-dropdown-toggle inline-flex hover:text-gray-500 text-gray-300"
                                                href="#">
                                                <i class="ti ti-bell-ringing text-xl relative z-[1]"></i>
                                                <div
                                                    class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
                                                </div>
                                            </a>
                                            <div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[300px] hidden z-[12]"
                                                aria-labelledby="hs-dropdown-custom-icon-trigger">
                                                <div>
                                                    <h3 class="text-gray-500 font-semibold text-base px-6 py-3">
                                                        Notification</h3>
                                                    <ul class="list-none  flex flex-col">
                                                        <li>
                                                            <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                                                                <p class="text-sm text-gray-500 font-medium">Roman
                                                                    Joined the Team!</p>
                                                                <p class="text-xs text-gray-400 font-medium">
                                                                    Congratulate him</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                                                                <p class="text-sm text-gray-500 font-medium">New
                                                                    message received</p>
                                                                <p class="text-xs text-gray-400 font-medium">Salma sent
                                                                    you new message</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                                                                <p class="text-sm text-gray-500 font-medium">New
                                                                    Payment received</p>
                                                                <p class="text-xs text-gray-400 font-medium">Check your
                                                                    earnings</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                                                                <p class="text-sm text-gray-500 font-medium">Jolly
                                                                    completed tasks</p>
                                                                <p class="text-xs text-gray-400 font-medium">Assign her
                                                                    new tasks</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="py-3 px-6 block hover:bg-gray-200">
                                                                <p class="text-sm text-gray-500 font-medium">Roman
                                                                    Joined the Team!</p>
                                                                <p class="text-xs text-gray-400 font-medium">
                                                                    Congratulate him</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                                <div class="flex items-center gap-4">
                                    <a href="https://www.wrappixel.com/templates/spike-free-tailwind-admin-template/"
                                        class=" text-base bg-blue-600 py-2 px-2 rounded-lg text-white font-medium hover:bg-blue-700"
                                        target="_blank" aria-current="page">Download </a>
                                    <div
                                        class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
                                        <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
                                            <img class="object-cover w-9 h-9 rounded-full"
                                                src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/images/profile/user-1.jpg"
                                                alt="" aria-hidden="true">
                                        </a>
                                        <div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[12]"
                                            aria-labelledby="hs-dropdown-custom-icon-trigger">
                                            <div class="card-body p-0 py-2">
                                                <a href="javscript:void(0)"
                                                    class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                                                    <i class="ti ti-user  text-xl "></i>
                                                    <p class="text-sm ">My Profile</p>
                                                </a>
                                                <a href="javscript:void(0)"
                                                    class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                                                    <i class="ti ti-mail  text-xl"></i>
                                                    <p class="text-sm ">My Account</p>
                                                </a>
                                                <a href="javscript:void(0)"
                                                    class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                                                    <i class="ti ti-list-check  text-xl "></i>
                                                    <p class="text-sm ">My Task</p>
                                                </a>
                                                <div class="px-4 mt-[7px] grid">
                                                    <a href="https://bootstrapdemos.wrappixel.com/pages/authentication-login.html"
                                                        class="btn-outline-primary font-medium text-[15px] w-full hover:bg-blue-600 hover:text-white">Logout</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </nav>

                            <!-- ========== END HEADER ========== -->
                        </header>
                        <!--  Header End -->

                        <div class="">

                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa aperiam, quia ullam
                            necessitatibus consequuntur iusto? Aspernatur repellat corrupti quisquam sit tempore,
                            soluta, dolor maiores eveniet nihil non delectus asperiores quae, eum harum molestiae
                            voluptate consequatur molestias est perspiciatis at distinctio odio accusantium itaque!
                            Reprehenderit itaque iusto alias laborum quam magni provident, eligendi, suscipit cumque
                            voluptatibus quod ea explicabo fugit similique pariatur saepe assumenda, aliquid ipsam
                            aperiam unde odit dignissimos fuga commodi? Enim reprehenderit optio quod quaerat maiores
                            minima, blanditiis architecto nihil ipsam nam delectus sed error quo mollitia praesentium
                            expedita sunt odit ipsa labore! Cum consequatur aliquid blanditiis maiores quidem? Quae
                            accusantium reprehenderit a illo voluptates modi beatae? Fugiat voluptatum obcaecati labore
                            qui? Id laboriosam delectus porro et eius rem perferendis quae molestiae? Cumque quas,
                            tempora soluta accusantium quibusdam quis nulla eligendi natus illum fuga minima nemo
                            deleniti ex! Esse, enim a quae, animi aut omnis accusamus architecto magnam tempora natus
                            illum. Quisquam nemo ad velit qui dignissimos, earum beatae ut odit ipsum laborum
                            reprehenderit recusandae sapiente nulla ea magnam fugiat tempore hic. Maiores illo soluta
                            error rem vel eveniet harum, blanditiis odio ab, cum natus impedit? Quasi accusantium
                            obcaecati cum et possimus eligendi, minima enim nesciunt dolor ex, quis voluptatem autem
                            laboriosam porro vitae assumenda, sit nobis animi labore vero fuga provident aspernatur ad
                            molestiae. Quisquam, eaque velit molestias voluptas distinctio nisi laborum omnis error quis
                            voluptates sint aliquam commodi quod quasi debitis fugit asperiores. Quis, ad pariatur sed
                            id, eveniet placeat quod non doloribus quasi animi saepe dolorum voluptates. Pariatur
                            dolores quibusdam a magnam hic facere repellendus distinctio nostrum ipsam dolore! Facere
                            nulla sequi, quis quisquam nostrum et voluptatem harum saepe architecto culpa enim totam
                            minima soluta. Numquam quam blanditiis quia nam rerum, voluptas facilis incidunt beatae
                            recusandae aspernatur tenetur quis ea debitis officiis praesentium eum temporibus aliquid
                            optio dolorem minima obcaecati perferendis impedit. Quod vel doloribus aliquam qui. Ipsam
                            optio, quibusdam quisquam perspiciatis eligendi accusantium fuga sed eos distinctio libero
                            laboriosam iste a aliquam. Inventore eum, doloremque quibusdam cum aperiam a aliquam omnis
                            explicabo nostrum nemo voluptatibus ducimus placeat ullam modi amet natus, dolores
                            perspiciatis tenetur cupiditate magnam corporis, culpa quidem incidunt accusamus! Expedita
                            odio adipisci doloribus, vel blanditiis nihil illum ipsum, fuga numquam aperiam labore
                            perferendis qui, soluta placeat in dolorem non repellendus aliquid ab nam exercitationem
                            dolores aspernatur. Dicta voluptates quos facilis dolorem pariatur aut, accusantium deserunt
                            temporibus explicabo libero labore nesciunt sed voluptas dolores suscipit reprehenderit
                            similique beatae tenetur sequi nulla necessitatibus dignissimos. Doloribus numquam rerum
                            quis, magnam sapiente atque. Iusto a sapiente, quos reiciendis laudantium esse hic repellat
                            alias. Necessitatibus possimus cum ut enim recusandae inventore quo officia modi assumenda
                            vel, tempore quis dolores eius vitae tenetur dolorum eaque quaerat ipsam ex. Autem
                            voluptates consectetur natus obcaecati delectus, nulla quis atque quas nam rem, cumque nihil
                            ullam id quae, quidem pariatur quisquam eligendi dolore? Velit, quidem voluptatum maiores
                            consequatur aliquid quis suscipit sequi odit nisi ex, ratione consectetur temporibus
                            asperiores, beatae repellat in vero quia? Ipsam ad porro nulla suscipit consequatur modi
                            quia illo, minima quos quaerat minus, dolores provident soluta fugiat, hic libero itaque
                            dolorum error consequuntur eveniet cumque veniam. Voluptatibus fugit aperiam blanditiis
                            repudiandae eius iure facilis, similique dolorem consequatur officiis tempora voluptatem?
                            Error, aut inventore? Adipisci dolores facere reiciendis fugiat obcaecati, laboriosam
                            voluptas consequatur repellendus excepturi fuga, modi, quibusdam aliquam earum! Aspernatur
                            natus, numquam praesentium eaque molestiae consequuntur excepturi veniam ab quibusdam. Rem
                            maiores cum expedita ad quo ipsum consequuntur pariatur suscipit vero! Quae provident fuga
                            cupiditate? Quas tenetur facilis reiciendis nam illum nemo iste beatae, sed fuga amet vitae,
                            earum voluptatum nisi. Maiores enim repellat impedit sunt aliquam? Voluptatibus architecto
                            eum amet, ea vero, perferendis quis earum inventore ut et mollitia. Quam assumenda aliquid
                            aliquam. Debitis ipsa harum voluptas saepe ut nesciunt placeat nisi dolores hic magnam fuga
                            consequuntur, quae in, reprehenderit minima aperiam, eligendi tempore perspiciatis sint quos
                            est laboriosam. Vitae atque quis harum perferendis rerum accusantium ad deleniti enim
                            similique quibusdam eos excepturi doloremque exercitationem perspiciatis saepe
                            necessitatibus velit, voluptatibus fugit eaque est sapiente aut ipsa praesentium veritatis.
                            Porro, dignissimos quis sint id suscipit architecto? Ducimus numquam repellendus accusamus
                            aut. Repellat ab ut quisquam delectus sit, magni vitae quasi fugiat cum vel minus esse
                            autem, repellendus sed facilis fugit, quos eum explicabo perferendis. Quasi, nobis adipisci
                            aspernatur, impedit iure, expedita fugit repellendus quos modi et magnam voluptate. Quam
                            dolorem doloremque corrupti nostrum ducimus doloribus ipsam aliquam a veritatis cupiditate
                            voluptatibus porro nesciunt unde iure iste perferendis, necessitatibus reiciendis illo
                            fugiat earum aspernatur voluptates ullam aperiam blanditiis? Rem quas eveniet, voluptates
                            molestias sint ratione itaque. Ipsum debitis sed quis exercitationem soluta earum quo quod
                            ipsam minima, aliquam nesciunt placeat necessitatibus tempora! Corrupti voluptates minima,
                            dignissimos maiores qui quos veniam reiciendis velit eligendi? Minus autem atque saepe animi
                            illo. Dolorem voluptatibus rem debitis molestiae autem tempore vel nihil est? Qui nemo
                            facere, asperiores numquam molestias dicta voluptatibus aliquid alias natus culpa nesciunt
                            vitae beatae ab labore. Deserunt asperiores, labore inventore itaque, voluptatem maiores
                            consequuntur tempore harum accusamus totam voluptatum laudantium nihil, assumenda esse!
                            Voluptas architecto deserunt quaerat aliquam velit et totam quae aliquid placeat, quo fugit
                            modi nobis veritatis nam, distinctio fugiat ex vitae, qui quasi debitis aperiam? Explicabo
                            nam consequuntur deleniti sint, voluptas aspernatur odio labore impedit! Vero nam molestiae
                            earum, culpa quae eum nemo et dolorum animi sit voluptate quibusdam soluta incidunt nesciunt
                            corrupti praesentium, quod, perferendis nobis non tenetur recusandae perspiciatis accusamus
                            placeat! Quibusdam consectetur vitae, ipsa fugit ex dolore sunt perspiciatis repudiandae
                            voluptate reprehenderit modi, accusantium, nam ut voluptates. Ipsam repellat, explicabo
                            corrupti labore ad iste nemo aut dolore amet dolorum tenetur praesentium, inventore sequi.
                            Cupiditate, ducimus rerum provident voluptas voluptate quis recusandae perferendis repellat,
                            alias ut fugiat. Rerum alias sit ipsa et laudantium non, commodi saepe illo similique
                            asperiores tempora suscipit molestiae quam, sed nihil doloremque, quis eos ducimus ullam ab
                            omnis magnam odit. Molestias veritatis exercitationem excepturi dolores, facilis aliquid
                            repellendus consequuntur maxime dicta placeat iusto veniam at, quia deserunt obcaecati atque
                            ad dolore? Illum ipsa esse pariatur, eos impedit animi expedita. Dolorum?
                        </div>

                    </div>


                </main>
                <!-- Main Content End -->

            </div>
        </div>
        <!--end of project-->
    </main>



    {{-- <script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
<script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/libs/@preline/dropdown/index.js"></script>
<script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/libs/@preline/overlay/index.js"></script>
<script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/js/sidebarmenu.js"></script>
 --}}

    {{-- 
	<script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/assets/js/dashboard.js"></script>
</body> --}}


    <!-- Mirrored from bootstrapdemos.wrappixel.com/spike-free-tailwind/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 22 Dec 2024 23:25:45 GMT -->

</html>
