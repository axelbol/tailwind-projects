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
  <div>
    <div> <!-- left -->
      <h2>Welcome to my website</h2>
      <p>I am learning Tailwind CSS</p>

      <a href="#">Learn More</a>
      <a href="#">Get Started</a>
    </div>
    <div> <!-- right -->
      <img src="" alt="">
    </div>
  </div>

  <!-- features -->
  <div>
    <div>
      <img src="" alt="">
      <p>Php</p>
    </div>
    <div>
      <img src="" alt="">
      <p>Vue</p>
    </div>
    <div>
      <img src="" alt="">
      <p>Laravel</p>
    </div>
    <div>
      <img src="" alt="">
      <p>JS</p>
    </div>
  </div>

  <!-- footer -->
  <div>
    <div> <!-- left -->
      <h3>Join the newsletter</h3>
      <form action="#"></form>
    </div>

    <div> <!-- right -->
      Copyright &copy; Dot Coding 2021
    </div>
  </div>
</x-guest-layout>