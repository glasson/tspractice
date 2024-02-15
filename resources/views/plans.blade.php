<x-app-layout>
  <div class="container ">
    <section>
      <div class="container py-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 row text-center ml-10 mr-10"> <!--ряд блоков-->
          <div class="bg-white p-5 rounded-lg shadow border">
            <h1 class="text-lg font-semibold mb-4">Start Up</h1>
              <h2 class="text-4xl font-bold mb-2">$10<span class="text-sm font-normal ml-2">/ free</span></h2>

              <div class="border-b border-primary my-4"></div>

              <ul class="list-inside text-sm list-none">
                <li class="mb-2">     
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>           
                  <i class="fas fa-check text-primary mr-2"></i> Lorem ipsum dolor sit amet
                </li>
                <li class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>   
                  <i class="fas fa-check text-primary mr-2"></i> Sed ut perspiciatis
                </li>
                <li class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>       
                  <i class="fas fa-check text-primary mr-2"></i> At vero eos et accusamus
                </li>

                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>                
                  <i class="fas fa-times mr-2"></i> Nam libero tempore
                </li>
                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                  <i class="fas fa-times mr-2"></i> Sed ut perspiciatis
                </li>
                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>

                  <i class="fas fa-times mr-2"></i> Sed ut perspiciatis
                </li>
              </ul>
              <a href="{{ route('plans.show', 'startup') }}" class="inline-block max-w-32 bg-blue-500 text-white rounded-lg py-3 px-6 mt-4 shadow-md hover:bg-blue-700 transition-colors duration-200">Buy Now</a>    
          </div>
          <div class="bg-white p-5 rounded-lg shadow border">
            <h1 class="text-lg font-semibold mb-4">Small Business</h1>
              <h2 class="text-4xl font-bold mb-2">$50<span class="text-sm font-normal ml-2">/ free</span></h2>

              <div class="border-b border-primary my-4"></div>

              <ul class="list-inside text-sm list-none">
                <li class="mb-2">     
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>           
                  <i class="fas fa-check text-primary mr-2"></i> Lorem ipsum dolor sit amet
                </li>
                <li class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>   
                  <i class="fas fa-check text-primary mr-2"></i> Sed ut perspiciatis
                </li>
                <li class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>       
                  <i class="fas fa-check text-primary mr-2"></i> At vero eos et accusamus
                </li>

                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>                
                  <i class="fas fa-times mr-2"></i> Nam libero tempore
                </li>
                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                  <i class="fas fa-times mr-2"></i> Sed ut perspiciatis
                </li>
                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>

                  <i class="fas fa-times mr-2"></i> Sed ut perspiciatis
                </li>
              </ul>
              <a href="{{ route('plans.show', 'small-business') }}" class="inline-block max-w-32 bg-blue-500 text-white rounded-lg py-3 px-6 mt-4 shadow-md hover:bg-blue-700 transition-colors duration-200">Buy Now</a>    
          </div>
          <div class="bg-white p-5 rounded-lg shadow border">
            <h1 class="text-lg font-semibold mb-4">Enterprise</h1>
              <h2 class="text-4xl font-bold mb-2">$100<span class="text-sm font-normal ml-2">/ free</span></h2>

              <div class="border-b border-primary my-4"></div>

              <ul class="list-inside text-sm list-none">
                <li class="mb-2">     
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>           
                  <i class="fas fa-check text-primary mr-2"></i> Lorem ipsum dolor sit amet
                </li>
                <li class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>   
                  <i class="fas fa-check text-primary mr-2"></i> Sed ut perspiciatis
                </li>
                <li class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-700 w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>       
                  <i class="fas fa-check text-primary mr-2"></i> At vero eos et accusamus
                </li>

                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>                
                  <i class="fas fa-times mr-2"></i> Nam libero tempore
                </li>
                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                  <i class="fas fa-times mr-2"></i> Sed ut perspiciatis
                </li>
                <li class="mb-2 text-gray-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>

                  <i class="fas fa-times mr-2"></i> Sed ut perspiciatis
                </li>
              </ul>
              <a href="{{ route('plans.show', 'enterprise') }}" class="inline-block max-w-32 bg-blue-500 text-white rounded-lg py-3 px-6 mt-4 shadow-md hover:bg-blue-700 transition-colors duration-200">Buy Now</a>    
          </div>

        </div>
      </div>
    </section>
  </div>
  
</x-app-layout>