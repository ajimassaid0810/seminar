
<?php include '../includes/header.php'; ?>


    <section class="relative top-[-20px] bg-black text-white">
  <!-- Background Image -->
  <div class="absolute inset-0">
    <img src="https://www.news-medical.net/images/news/ImageForNews_808838_17461258694907356.jpg" 
         alt="Rasa Nusantara" 
         class="w-full h-full object-cover opacity-70">
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/20"></div>
  </div>

  <!-- Content -->
  <div class="relative max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-10 items-center">

    <!-- Left Content -->
    <div>
      <span class="inline-block bg-blue-600/20 text-blue-400 px-4 py-1 rounded-full text-sm mb-4">
        PREMIUM DINING EXPERIENCE
      </span>

      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
        Cita Rasa <br>
        <span class="text-blue-500">Otentik Nusantara</span>
      </h1>

      <p class="text-gray-300 mb-8 max-w-lg">
        Experience professional service and modern Indonesian dining in every bite, bringing heritage flavors to the contemporary table.
      </p>

      <div class="flex flex-wrap gap-4">
        <a href="services.php"
           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition">
          Explore Menu
        </a>
        <a href="contact.php"
           class="border border-white/40 hover:bg-white/10 px-6 py-3 rounded-lg font-medium transition">
          Reservation
        </a>
      </div>
    </div>

  </div>
</section>

<!-- About Our Resto -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- Image -->
    <div class="relative">
      <img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee?q=80&w=1200&auto=format&fit=crop" 
           alt="About Resto"
           class="rounded-2xl shadow-xl w-full h-[420px] object-cover">
      <div class="absolute -bottom-6 -right-6 bg-blue-600 text-white px-6 py-4 rounded-xl shadow-lg">
        <p class="text-2xl font-bold">10+</p>
        <p class="text-sm">Years Experience</p>
      </div>
    </div>

    <!-- Content -->
    <div>
      <span class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm mb-4">
        ABOUT OUR RESTAURANT
      </span>

      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
        Menghadirkan Warisan Rasa Nusantara
      </h2>

      <p class="text-gray-600 mb-6 leading-relaxed">
        Rasa Nusantara adalah destinasi kuliner premium yang menghadirkan kelezatan autentik Indonesia 
        dengan sentuhan modern. Kami mengutamakan bahan berkualitas, resep tradisional, dan pelayanan 
        profesional untuk menciptakan pengalaman bersantap yang tak terlupakan.
      </p>

      <div class="grid grid-cols-2 gap-6 mb-8">
        <div>
          <h3 class="text-2xl font-bold text-blue-600">50+</h3>
          <p class="text-gray-500 text-sm">Menu Pilihan</p>
        </div>
        <div>
          <h3 class="text-2xl font-bold text-blue-600">5★</h3>
          <p class="text-gray-500 text-sm">Customer Rating</p>
        </div>
      </div>

      <a href="about.php"
         class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition">
        Learn More
      </a>
    </div>

  </div>
</section>


<?php include '../includes/footer.php'; ?>
