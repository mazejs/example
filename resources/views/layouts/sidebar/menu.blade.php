<section class="bg-gray-800 xl:w-64" :class="{ 'hidden': !isOpen, 'block': isOpen }">
    <div class="xl:block xl:h-full xl:flex xl:flex-col xl:justify-between">
        <div class="lg:flex xl:block xl:overflow-y-auto">
            <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 lg:border-l xl:w-full">
                <a class="block text-sm font-semibold text-gray-500">Dashboard</a>
                <div class="block sm:-mx-2 lg:block lg:mx-0">
                    <label class="mt-3 sm:w-1/4 sm:px-2 flex items-center lg:w-full lg:px-0">
                        <a href="/home" class="ml-2 text-white hover:text-green-400">Home</a>
                    </label>
                </div>
            </div>
            <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 lg:border-l xl:w-full">
                <a class="block text-sm font-semibold text-gray-500">System admin</a>
                <div class="block sm:-mx-2 lg:block lg:mx-0">
                    <label class="mt-3 sm:w-1/4 sm:px-2 flex items-center lg:w-full lg:px-0">
                        <a href="/users" class="ml-2 text-white hover:text-green-400">Users</a>
                    </label>
                </div>
            </div>
            <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 lg:border-l xl:w-full">
                <a class="block text-sm font-semibold text-gray-500">Your settings</a>
                <div class="block sm:-mx-2 lg:block lg:mx-0">
                    <label class="mt-3 sm:w-1/4 sm:px-2 flex items-center lg:w-full lg:px-0">
                        <a href="/profile" class="ml-2 text-white hover:text-green-400">Profile</a>
                    </label>
                    <label class="mt-3 sm:w-1/4 sm:px-2 flex items-center lg:w-full lg:px-0">
                        <a href="/security" class="ml-2 text-white hover:text-green-400">Security</a>
                    </label>
                    <label class="mt-3 sm:w-1/4 sm:px-2 flex items-center lg:w-full lg:px-0">
                        <a href="{{ route('logout') }}"
                           class="ml-2 text-white hover:text-green-400"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </label>
                </div>
            </div>
            <div class="px-4 py-4 border-t border-gray-900 lg:w-1/3 lg:border-l xl:w-full">
                <a class="block text-sm font-semibold text-gray-500">Information</a>
                <div class="block sm:-mx-2 lg:block lg:mx-0">
                    <label class="mt-3 sm:w-1/4 sm:px-2 flex items-center lg:w-full lg:px-0">
                        <a href="/help" class="ml-2 text-white hover:text-green-400">Help</a>
                    </label>
                </div>
            </div>
        </div>
        @auth()
        <div class="overflow-x-auto flex flex-col items-start justify-between border-t-2 border-gray-600 bg-gray-900 sm:text-left">
            <div class="flex p-3 ">
                <span class="block h-12 w-12 mx-0 mr-2 overflow-hidden rounded-full">
                    <svg class="fill-current text-green-500 h-full w-full object-cover" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path>
                    </svg>
                </span>
                <div class="text-left flex flex-col justify-around">
                    <h2 class="text-white text-lg">{{ auth()->user()->name }}</h2>
                    <div class="text-gray-400 text-sm">{{ auth()->user()->email }}</div>
                </div>
            </div>
        </div>
        @endauth
    </div>
</section>
