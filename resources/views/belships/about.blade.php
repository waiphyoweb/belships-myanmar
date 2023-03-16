<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
            {{-- Our Vision --}}
            <div class="flex flex-col lg:flex-row space-y-6 lg:space-x-6 text-justify">
                <div class="lg:w-1/2 mx-auto flex items-center h-full w-full">
                    <img src="{{ asset('images/belwood.jpg') }}" alt="Belwood" class="rounded-md">
                </div>
                <div class="lg:w-1/2">
                    <div class="px-3 text-gray-600 dark:text-gray-200">
                        <h1 class="text-6xl font-bold font-serif">Our Vision</h1>
                    </div>
                    <div class="p-3 text-gray-600 dark:text-gray-200 text-2xl">
                        <ul class="list-disc list-inside">
                            <li class="leading-loose">We strive to be a reputable and preferred company for shipmanagement services catering to customers worldwide, commanding their trust and confidence.</li>
                            <li class="leading-loose">
                                With a team of dedicated and well trained ship and shore staff, we will  achieve excellence in Health, Safety and Security, Quality and Environmental performance.
                            </li>
                        </ul>                  
                    </div>
                </div>
            </div>

            {{-- Our Mission --}}
            <div class="flex flex-col-reverse lg:flex-row space-y-6 lg:space-x-6 my-8 text-justify">
                <div class="lg:w-1/2">
                    <div class="p-3 text-gray-600 dark:text-gray-200">
                        <h1 class="text-6xl font-bold font-serif">Our Mission</h1>
                    </div>
                    <div class="p-3 text-gray-600 dark:text-gray-200 text-2xl">
                        <ul class="list-disc list-inside">
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
                </div>
                
                <div class="lg:w-1/2 mx-auto flex items-center h-full w-full">
                    <img src="{{ asset('images/Belpareil.jpg') }}" alt="Belpareil" class="rounded-md lg:h-full">
                </div>
            </div>

            {{-- Certificates --}}
            <div class="flex flex-col">
                <div class="flex flex-col lg:flex-row p-6 lg:p-8 mx-auto space-x-52">
                    <img src="{{ asset('images/certificate1.jpg')}}" class="p-3" alt="Certificate-One">
                    <img src="{{ asset('images/certificate2.jpg')}}" class="p-3" alt="Certificate-Two">
                </div>
                <div class="flex flex-col lg:flex-row p-6 lg:p-8 mx-auto space-x-52">
                    <img src="{{ asset('images/certificate3.jpg')}}" class="p-3" alt="Certificate-Three">
                    <img src="{{ asset('images/certificate4.jpg')}}" class="p-3" alt="Certificate-Four">
                </div>
                <div class="flex flex-col lg:flex-row p-6 lg:p-8 mx-auto space-x-52">
                    <img src="{{ asset('images/certificate5.jpg')}}" class="p-3" alt="Certificate-Five">
                    <img src="{{ asset('images/certificate6.jpg')}}" class="p-3" alt="Certificate-Six">
                </div>
                <div class="flex flex-col lg:flex-row p-6 lg:p-8 mx-auto space-x-52">
                    <img src="{{ asset('images/certificate7.jpg')}}" class="p-3" alt="Certificate-Seven">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>