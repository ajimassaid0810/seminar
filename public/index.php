
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

<!-- Featured Menu -->
<section class="bg-gray-50 py-20">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Heading -->
    <div class="text-center mb-14">
      <span class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-sm mb-4">
        OUR SPECIAL MENU
      </span>
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
        Menu Favorit Pilihan
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Nikmati hidangan terbaik Nusantara yang dipilih langsung oleh chef kami dengan cita rasa autentik dan tampilan modern.
      </p>
    </div>

    <!-- Menu Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Item 1 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="https://images.unsplash.com/photo-1604908176997-431e1c2c8e9c?q=80&w=1200&auto=format&fit=crop"
             alt="Rendang"
             class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex justify-between items-center mb-2">
            <h3 class="font-bold text-lg text-gray-900">Rendang Premium</h3>
            <span class="text-blue-600 font-semibold">Rp45k</span>
          </div>
          <p class="text-gray-500 text-sm mb-4">
            Daging sapi pilihan dimasak dengan rempah khas Minang yang kaya rasa.
          </p>
          <a href="services.php" class="text-blue-600 font-medium hover:underline text-sm">
            Order Now →
          </a>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="https://images.unsplash.com/photo-1562967916-eb82221dfb92?q=80&w=1200&auto=format&fit=crop"
             alt="Sate Ayam"
             class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex justify-between items-center mb-2">
            <h3 class="font-bold text-lg text-gray-900">Sate Ayam Madura</h3>
            <span class="text-blue-600 font-semibold">Rp30k</span>
          </div>
          <p class="text-gray-500 text-sm mb-4">
            Sate ayam empuk dengan bumbu kacang legit khas Nusantara.
          </p>
          <a href="services.php" class="text-blue-600 font-medium hover:underline text-sm">
            Order Now →
          </a>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="https://images.unsplash.com/photo-1625944230945-1b7dd3b6f4c7?q=80&w=1200&auto=format&fit=crop"
             alt="Nasi Goreng"
             class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="flex justify-between items-center mb-2">
            <h3 class="font-bold text-lg text-gray-900">Nasi Goreng Spesial</h3>
            <span class="text-blue-600 font-semibold">Rp28k</span>
          </div>
          <p class="text-gray-500 text-sm mb-4">
            Nasi goreng klasik dengan topping lengkap dan aroma menggoda.
          </p>
          <a href="services.php" class="text-blue-600 font-medium hover:underline text-sm">
            Order Now →
          </a>
        </div>
      </div>

    </div>

    <!-- Button -->
    <div class="text-center mt-12">
      <a href="services.php"
         class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition">
        View Full Menu
      </a>
    </div>

  </div>
</section>




<?php include '../includes/footer.php'; ?>
