<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoCoir Creations</title>
    <link rel="shortcut icon" type="image/png" href="/assets/coir_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('/assets/coco_background.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto Slab', serif;
        }

        /* OVERLAY UPDATED TO BROWN EARTH TONES */
        .overlay {
            background: linear-gradient(rgba(104, 96, 77, 0.4), rgba(139, 115, 85, 0.5));
        }

        /* PRIMARY COIR - BROWN */
        .custom-neutral {
            background-color: #68604D;
        }

        .header-title,
        h1,
        h2,
        h3,
        h4,
        .heading {
            font-family: "Righteous", sans-serif;
            font-weight: 400;
        }

        button,
        a.btn-main,
        .card-hover {
            transition: all 0.3s ease;
        }

        /* ORANGE SHADOW GLOW */
        button:hover,
        a.btn-main:hover,
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(73, 48, 42, 0.3);
        }

        input:focus,
        .focus-ring:focus {
            transition: all 0.3s ease;
            transform: scale(1.02);
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">

    <div class="flex flex-col min-h-screen overlay">
        <?= view('components/header.php') ?>

        <main class="flex-grow">

            <!-- Hero Section -->
            <section class="flex justify-center items-center py-32 text-center">
                <div class="bg-white/10 backdrop-blur-sm mx-auto p-8 px-4 rounded-2xl max-w-4xl">

                    <!-- ICON CIRCLE -->
                    <div class="flex justify-center items-center bg-[#68604D] mx-auto mb-6 rounded-full w-20 h-20 text-white text-3xl">
                        🥥
                    </div>

                    <h2 class="drop-shadow-2xl mb-8 font-bold text-white text-5xl md:text-7xl header-title">
                        Discover Sustainable Coconut Coir Products
                    </h2>

                    <p class="mb-12 text-[#F1EAD8] text-xl md:text-3xl leading-relaxed">
                        Explore eco-friendly coconut coir collections for home, farm, and craft projects.
                    </p>

                    <a href="/loginPage"
                        class="inline-block bg-[#D5C7AD] hover:bg-[#68604D] shadow-xl px-10 py-5 rounded-full font-semibold text-white text-xl md:text-2xl">
                        Browse Products
                    </a>
                </div>
            </section>

            <!-- Welcome + EcoCoir Mission -->
            <section id="about" class="bg-white/90 backdrop-blur-sm py-24 text-[#514d4d]">
                <div class="mx-auto px-4 max-w-6xl text-center">

                    <h3 class="mb-8 font-bold text-[#68604D] text-5xl header-title">
                        Welcome to EcoCoir Creations
                    </h3>

                    <p class="mx-auto mb-6 max-w-3xl text-[#5b5346] text-2xl md:text-3xl leading-relaxed">
                        EcoCoir Creations is your sustainable online shop for handcrafted coconut coir solutions.
                        We transform coconut husk waste into eco-friendly essentials—plant pots, doormats, soil enhancers,
                        and biodegradable packaging—helping you live greener with renewable, natural materials.
                    </p>

                    <div class="gap-8 grid md:grid-cols-3 mt-10">
                        <div class="bg-[#F1EAD8] shadow-sm p-6 border-[#D5C7AD] border-2 rounded-xl">
                            <h4 class="mb-3 font-semibold text-[#68604D] text-2xl">Sustainable Roots</h4>
                            <p class="text-lg">Coconut coir is renewable, plastic-free, and compostable—designed for better gardens and planet health.</p>
                        </div>
                        <div class="bg-[#F1EAD8] shadow-sm p-6 border-[#D5C7AD] border-2 rounded-xl">
                            <h4 class="mb-3 font-semibold text-[#68604D] text-2xl">Handcrafted Quality</h4>
                            <p class="text-lg">Each product is crafted from recycled coir fibers to deliver durability and natural performance.</p>
                        </div>
                        <div class="bg-[#F1EAD8] shadow-sm p-6 border-[#D5C7AD] border-2 rounded-xl">
                            <h4 class="mb-3 font-semibold text-[#68604D] text-2xl">Green Lifestyle</h4>
                            <p class="text-lg">From home decor to garden essentials, pick products that support reduced waste and practice circular living.</p>
                        </div>
                    </div>

                </div>
            </section>


            <!-- CTA Section -->
            <section id="cta-section" class="bg-white/90 backdrop-blur-sm py-32 w-full text-[#68604D]">
                <div class="text-center">
                    <?= view('components/cta', [
                        'heading' => 'Build with Natural Coconut Coir',
                        'sub' => 'Find eco-friendly DIY, grow, and home solutions.',
                        'primary' => ['label' => 'Shop Coir Products', 'href' => '/loginPage'],
                    ]) ?>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="bg-white/90 backdrop-blur-sm py-20 text-[#68604D]">
                <div class="mx-auto px-4 max-w-4xl text-center">

                    <h3 class="mb-8 font-bold text-[#68604D] text-4xl header-title">
                        Contact Us
                    </h3>

                    <div class="flex justify-center items-center bg-[#D5C7AD] mx-auto mb-6 rounded-full w-16 h-16 text-[#68604D] text-2xl">
                        📧
                    </div>

                    <p class="mb-4 text-lg">
                        Email:
                        <a href="mailto:support@ecocoircreations.com"
                            class="font-semibold text-[#68604D] hover:text-[#D5C7AD] underline">
                            support@ecocoircreations.com
                        </a>
                    </p>

                    <p>
                        For inquiries, partnerships, or bulk orders, reach out anytime!
                    </p>

                </div>
            </section>

            <?= view('components/footer') ?>

        </main>
    </div>

</body>

</html>