<x-layout>
<x-page-header/>
<x-hero-section/>
@foreach ($students as $student )

@if ($students->count() < 1)
      <p>no student with such index number</p>
@elseif (count($students) > 1)
    {{-- <p>Search for your result</p> --}}


@else
 </div>
<div class="student-details flex justify-center">
   <div class="bg-gray-200 student-card p-4 rounded-md shadow-xl mt-4 mb-12">

   <img class="image w-28 h-28 rounded-full bg-black m-auto shadow-md" src="https://media.istockphoto.com/photos/mother-and-daughter-using-laptop-at-swimming-pool-area-picture-id1383996226?b=1&k=20&m=1383996226&s=170667a&w=0&h=727JsG9jGfSyisxh2y5ONI9PfuTqhjGep11IhOycOWs=" alt="">


  <div class="mt-8">
   <a href="/student/{{$student->id}}">
    <p class="mt-2 mb-4 ml-4 "><span class="font-bold text-xl  ">  Full Name:</span> <span class="text-gray-600 leading-5 font-semibold ml-14"> {{$student->Full_Name}}</span></p>
    <p class="mt-2 mb-4 ml-4"><span class="font-bold text-xl  ">  Index Number:</span><span class="text-gray-600 leading-5 font-semibold ml-4">{{$student->index_number}}</span></p>
    <p class="mt-2 mb-4 ml-4"><span class="font-bold text-xl  ">  Section:</span><span class="text-gray-600 leading-5 font-semibold ml-20"> Science </span></p>

</a>
  </div>
   </div>

</div>
@endif


@endforeach

</x-layout>
<style>
    .student-card:hover{
        border: 3px solid rgb(102, 41, 0);

    }
</style>
