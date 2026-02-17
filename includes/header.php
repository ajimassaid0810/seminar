<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Company Profile</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50 text-gray-800">

<header class="bg-white shadow fixed top-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    
    <!-- Logo -->
    <a href="index.php" class="text-xl font-bold text-red-600">
      Rasa Nusantara
    </a>

    <!-- Desktop Menu -->
    <nav class="hidden md:flex space-x-8 font-medium">
      <a href="index.php" class="hover:text-red-600 transition">Home</a>
      <a href="about.php" class="hover:text-red-600 transition">About</a>
      <a href="services.php" class="hover:text-red-600 transition">Menu</a>
      <a href="contact.php" class="hover:text-red-600 transition">Contact</a>
    </nav>

    <!-- Mobile Button -->
    <button id="menuBtn" class="md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg">
    <nav class="flex flex-col p-4 space-y-3 font-medium">
      <a href="index.php" class="hover:text-red-600">Home</a>
      <a href="about.php" class="hover:text-red-600">About</a>
      <a href="services.php" class="hover:text-red-600">Menu</a>
      <a href="contact.php" class="hover:text-red-600">Contact</a>
    </nav>
  </div>
</header>

<!-- Spacer -->
<div class="h-20"></div>

<script>
const btn = document.getElementById('menuBtn');
const menu = document.getElementById('mobileMenu');

btn.addEventListener('click', () => {
  menu.classList.toggle('hidden');
});
</script>
