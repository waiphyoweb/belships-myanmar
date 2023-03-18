<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-gray-600 dark:text-gray-200">

            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Our Vision & Mission</h1>
                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 md:p-8">
                {{-- Our Vision --}}
                <div class="mt-12 flex flex-col lg:flex-row space-y-6 lg:space-x-6 text-justify">
                    <div class="lg:w-1/2 mx-auto flex items-center">
                        <img src="{{ asset('images/belfriend.jpg') }}" alt="Belfriend" class="rounded-md">
                    </div>
                    <div class="lg:w-1/2 mx-auto">
                        <h1 class="p-3 text-5xl font-bold font-serif">Our Vision</h1>
                        <ul class="mt-6 p-3 text-2xl list-disc list-inside">
                            <li class="leading-loose">We strive to be a reputable and preferred company for shipmanagement services catering to customers worldwide, commanding their trust and confidence.</li>
                            <li class="leading-loose">
                                With a team of dedicated and well trained ship and shore staff, we will  achieve excellence in Health, Safety and Security, Quality and Environmental performance.
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Our Mission --}}
                <div class="flex flex-col-reverse lg:flex-row space-y-6 lg:space-x-6 mt-8 text-justify">
                    <div class="lg:w-1/2 mx-auto">
                        <h1 class="p-3 text-5xl font-bold font-serif">Our Mission</h1>
                        <ul class="mt-6 p-3 text-2xl list-disc list-inside">
                            <li class="leading-loose">
                                To expand our customer base with Ship owners of various nationalities and different types of vessels.</li>
                            <li class="leading-loose">
                                To train our ship and shore staff well, so as to build a stronger and cohesive team.
                            </li>
                            <li class="leading-loose">
                                To maintain a high level of customers' satisfaction.
                            </li>
                            <li class="leading-loose">
                                To meet our HSQE targets with continual improvement programs.
                            </li>
                            <li class="leading-loose">
                                To comply with the company's Corporate Code of  Conduct based on high ethical standard and business code.                           
                            </li>
                        </ul>
                    </div>
                    
                    <div class="lg:w-1/2 mx-auto flex items-center">
                        <img src="{{ asset('images/belknight.jpeg') }}" alt="Belknight" class="rounded-md">
                    </div>
                </div>

                <div class="max-w-2xl mx-auto lg:max-w-6xl">
                    <div class="mt-8  grid grid-cols-1 gap-12 lg:grid-cols-2 p-6 md:p-8">
                        <img src="{{ asset('images/certificate1.jpg')}}" class="w-full h-full" alt="Certificate-One">
                        <img src="{{ asset('images/certificate2.jpg')}}" class="w-full h-full" alt="Certificate-Two">
                        <img src="{{ asset('images/certificate3.jpg')}}" class="w-full h-full" alt="Certificate-Three">
                        <img src="{{ asset('images/certificate4.jpg')}}" class="w-full h-full" alt="Certificate-Four">
                        <img src="{{ asset('images/certificate5.jpg')}}" class="w-full h-full" alt="Certificate-Five">
                        <img src="{{ asset('images/certificate6.jpg')}}" class="w-full h-full" alt="Certificate-Six">
                        <img src="{{ asset('images/certificate7.jpg')}}" class="w-full h-full" alt="Certificate-Seven">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>