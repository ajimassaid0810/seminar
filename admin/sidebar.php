<aside class="w-64 bg-gray-900 min-h-screen text-white flex flex-col">
  
  <div class="p-6 text-2xl font-bold border-b border-gray-700">
    Admin Panel
  </div>

  <nav class="flex-1 p-6 space-y-4 text-sm">
    <a href="dashboard.php"
       class="block px-3 py-2 rounded hover:bg-gray-800 transition">
       Dashboard
    </a>

    <a href="product-list.php"
       class="block px-3 py-2 rounded hover:bg-gray-800 transition">
       Produk
    </a>

    <a href="logout.php"
       class="block px-3 py-2 rounded text-red-400 hover:bg-gray-800 transition">
       Logout
    </a>
  </nav>

  <div class="p-4 text-xs text-gray-400 border-t border-gray-700">
    &copy; <?= date('Y'); ?> Rasa Nusantara
  </div>

</aside>
