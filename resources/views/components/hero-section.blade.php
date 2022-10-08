<div class="welcome text-center p-12 text-3xl  m-4">
    <h1 class="text-3x">
        SSCE  <span class="welcome-logo">Results  out search for yours </span>and
    </h1>
    <h2 class="text-xl m-1">
        congration in advance
    </h2>


</div>
{{-- this the search and the dropdown --}}
<div class="seacrh-wrapper flex justify-around m-24">

    <div class="search-form">
<form method="GET" action="#">
    <input type="text" name="search" placeholder="search by index number" class=" rounded-xl text-center ">
</form>
    </div>
    <!-- this is the dropdown code -->
    <div class="flex flex-wrap  mb-4">
        <div class="w-full sm:w-6/12 md:w-4/12 px-4">
          <div class="relative inline-flex align-middle w-full">
            <button  class=" btn text-white font-bold uppercase text-sm px-6 py-3 rounded-3xl shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 bg-emerald-700 ease-linear transition-all duration-150" type="button" onclick="openDropdown(event,'dropdown-id')">
          section
            </button>
            <div class="  hidden bg-white  text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mb-1" id="dropdown-id">
              <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
             Science Section
              </a>
              <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
             Arts section
              </a>

              <div class="h-0 my-2 border border-solid border-t-0 border-slate-800 opacity-25"></div>
              <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-slate-700">
               seacrh by the section
              </a>
            </div>
          </div>
        </div>
      </div>
      <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
      <script>
        function openDropdown(event,dropdownID){
          let element = event.target;
          while(element.nodeName !== "BUTTON"){
            element = element.parentNode;
          }
          var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
            placement: 'top-end'
          });
          document.getElementById(dropdownID).classList.toggle("hidden");
          document.getElementById(dropdownID).classList.toggle("block");
        }
      </script>
</div>
