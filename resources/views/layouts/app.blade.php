<nav class="bg-white shadow px-6 py-4 mb-8">
    <div class="container mx-auto flex justify-between items-center">
  
      <!-- Logo o nombre del blog -->
      <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">Mi Blog</a>
  
      <!-- Enlaces principales -->
      <div class="flex items-center space-x-4">
        <a href="{{ route('home') }}" class="text-gray-800 hover:text-indigo-600">Inicio</a>
  
        <!-- Dropdown de categorías -->
        <div class="relative group">
          <button class="text-gray-800 hover:text-indigo-600 focus:outline-none">
            Categorías
          </button>
          <div
            class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity"
          >
            @foreach($navCategories as $category)
              <a
                href="{{ route('categories.show', $category) }}"
                class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
              >
                {{ $category->name }}
              </a>
            @endforeach
          </div>
        </div>
  
        <a href="{{ route('login') }}" class="text-gray-800 hover:text-indigo-600">Login</a>
        <a href="{{ route('logout') }}" class="text-gray-800 hover:text-indigo-600">Logout</a>
      </div>
  
    </div>
  </nav>
  