<style>
    html,
       body {
           font-family: 'Open Sans';
       }

       img {
           padding: 5px;
           border: 1px solid #ccc;
       }
</style>
<x-layouts.app>
  <x-navbar/>

  <div class="hero-body">
   <div class="container has-text-centered">
       <div class="columns is-vcentered">
           <div class="column is-5">
               <figure class="image is-4by3">
                   <img src="{{ $course->course_img }}" alt="Description">
               </figure>
           </div>
           <div class="column is-6 is-offset-1">
               <h1 class="title is-2">
                  {{ $course->slug }}
               </h1>
               <h2 class="subtitle is-4">
                  {{ $course->description }}
               </h2>
               <br>

           </div>
       </div>
   </div>
</div>


</x-layouts.app>


