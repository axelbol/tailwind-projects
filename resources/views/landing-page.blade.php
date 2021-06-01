<x-guest-layout>
  <!-- header -->
  <div class="bg-gradient-to-r from-red-400 via-red-500 to-green-500 p-6 flex justify-between
    items-center">
    <div class="flex items-center"> <!--left-->
      <img src="{{ asset('img/github.png') }}" alt="github" class="w-14 h-14 mr-8 ml-8 rounded-full">
      <a href="#" class="inline-block p-2 text-green-800 hover:text-green-400 mr-2 uppercase
        font-bold">Home</a>
      <a href="#" class="inline-block p-2 text-green-800 hover:text-green-400 uppercase
        font-bold">About</a>
    </div>
    <div> <!-- right -->
      <a href="#" class="inline-block p-2 text-pink-800 hover:text-pink-200 mr-2 uppercase font-bold">Login</a>
      <a href="#" class="inline-block py-2 px-4 text-green-200 bg-red-400 hover:bg-blue-300
        hover:text-blue-700 rounded-full transition ease-in duration-150 uppercase font-bold">Register</a>
    </div>
  </div>

  <!-- hero section -->
  <div class="flex justify-between py-20 px-10 bg-indigo-600 text-indigo-200">
    <div class="mb-10"> <!-- left -->
      <h2 class="text-6xl uppercase text-yellow-400 mb-6">Welcome to my website</h2>
      <p class="mb-6 text-lg">I am learning Tailwind CSS</p>

      <a href="#" class="inline-block py-3 px-6 text-lg bg-gray-500 text-gray-800
        hover:bg-gray-200 rounded mr-4">Learn More</a>
      <a href="#" class="inline-block py-3 px-6 text-lg bg-yellow-500 text-yellow-800
        hover:bg-yellow-200 rounded">Get Started</a>
    </div>
    <div> <!-- right -->
      <img src="https://images.unsplash.com/photo-1622495548455-b13f040084da?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="hero"
        class="w-full rounded shadow-2xl">
    </div>
  </div>

  <!-- features -->
  <div class="flex bg-indigo-800 py-16 px-10 text-indigo-300 text-center">
    <div class="mr-2">
      <img class="w-full mb-4 rounded-2xl border-solid border-4 border-yellow-700"
        src="https://images.unsplash.com/photo-1593642532781-03e79bf5bec2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" alt="one">
      <p class="uppercase">Php</p>
    </div>
    <div class="mr-2 mt-8">
      <img class="w-full mb-4 rounded-2xl border-solid border-4 border-yellow-700"
        src="https://images.unsplash.com/photo-1593642634367-d91a135587b5?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="two">
      <p class="uppercase">Vue</p>
    </div>
    <div class="mr-2">
      <img class="w-full mb-4 rounded-2xl border-solid border-4 border-yellow-700"
      src="https://images.unsplash.com/photo-1593642531955-b62e17bdaa9c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="three">
      <p class="uppercase">Laravel</p>
    </div>
    <div class="mr-2 mt-8">
      <img class="w-full mb-4 rounded-2xl border-solid border-4 border-yellow-700"
      src="https://images.unsplash.com/photo-1471897488648-5eae4ac6686b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=334&q=80" alt="four">
      <p class="uppercase">JS</p>
    </div>
  </div>

  <!-- footer -->
  <div class="p-10 bg-gray-300 text-gray-800 flex justify-between">
    <div> <!-- left -->
      <h3 class="text-lg mb-2">Join the newsletter</h3>
      <form action="#" class="flex">
        <input type="email" name="email" class="w-full rounded-l py-3 px-4 focus:ring-offset-0
          focus:ring-green-300 focus:bg-green-100">
        <button class="bg-red-300 hover:bg-red-500 rounded-r px-4">Join</button>
      </form>
    </div>

    <div class="flex items-center"> <!-- right -->
      Copyright &copy; Dot Coding 2021
    </div>
  </div>
</x-guest-layout>