<x-app-layout>
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update product</h2>
        <form action="{{ route('guru.update', $gurjut->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class=" gap-4 mb-4  sm:gap-6 sm:mb-5">
               
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">PILIHKEUN JUT</option>
                        <option value="sedang dalam tinjauan">Sedang ditinjau jut</option>
                        <option value="done">Done</option>
                        
                    </select>
                </div>
               
            <div class="flex items-center space-x-4">
                <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Update data
                </button>
            </div>
        </form>
    </div>
  </section>
</x-app-layout>