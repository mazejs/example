<div class="px-2 py-3 border-b border-t border-gray-800 sm:flex sm:border-b-0 sm:border-t-0 sm:py-0 sm:px-0">
    <notification
        inline-template
        key="notification-toggle"
    >
        <button 
            @click="toggled('notification')" 
            class="block px-3 py-1 font-semibold text-white hover:text-green-400 focus:outline-none focus:text-green-400 sm:mt-0 sm:text-sm sm:px-2 sm:ml-2 xl:text-gray-900"
        >Notifications</button>
    </notification>
</div>
<div class="relative px-5 py-5 sm:py-0 sm:ml-3 sm:px-0">
    @auth()
    <div class="flex items-center sm:hidden">
        <span class="block h-8 w-8 overflow-hidden rounded-full">
            <svg class="fill-current text-green-500 h-full w-full object-cover" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
        </span>
        <span class="ml-4 font-semibold text-gray-200 sm:hidden">{{ auth()->user()->name }}</span>
    </div>
    @endauth
    <div class="mt-5 sm:hidden">
        <a href="/profile" class="py-2 block text-gray-400 hover:text-green-400 sm:hover:text-white md:hover:text-white lg:hover:text-white">Profile</a>
        <a href="/security" class="py-2 block text-gray-400 hover:text-green-400 sm:hover:text-white md:hover:text-white lg:hover:text-white">Security</a>
        <a href="{{ route('logout') }}"
           class="py-2 block text-gray-400 hover:text-green-400 sm:hover:text-white md:hover:text-white lg:hover:text-white"
           onclick="event.preventDefault(); document.getElementById('logout-form-right').submit();">{{ __('Logout') }}</a>
        <form id="logout-form-right" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
        </form>
    </div>
    <dropdown class="hidden sm:block">
        <template #trigger="{ hasFocus, isOpen }">
            <span class="block h-8 w-8 overflow-hidden rounded-full"
                  :class="[(hasFocus || isOpen) ? 'border-white xl:border-green-500' : 'border-gray-600 xl:border-gray-300']"
            >
                <svg class="fill-current text-green-500 hover:text-green-400 h-full w-full object-cover" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                    <path
                        fill="currentColor"
                        d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"
                    ></path>
                </svg>
            </span>
        </template>
        <template #dropdown>
            <div class="mt-3 bg-white xl:border rounded-lg w-48 py-2 shadow-xl">
                <a href="/profile" class="block hover:text-green-400 sm:hover:text-white md:hover:text-white lg:hover:text-white text-gray-800 px-4 py-2 hover:bg-green-500">Profile</a>
                <a href="/security" class="block hover:text-green-400 sm:hover:text-white md:hover:text-white lg:hover:text-white text-gray-800 px-4 py-2 hover:bg-green-500">Security</a>
                <a href="{{ route('logout') }}"
                   class="block hover:text-green-400 sm:hover:text-white md:hover:text-white lg:hover:text-white text-gray-800 mt-0 px-4 py-2 hover:bg-green-500"
                   onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">{{ __('Logout') }}</a>
                <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </div>
        </template>
    </dropdown>
</div>
