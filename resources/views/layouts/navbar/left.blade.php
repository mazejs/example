<div class="border-t border-gray-800 sm:border-0">
    <sidebar
        inline-template
        name="toggle-sidebar"
        key="toggle-sidebar"
    >
        <div class="flex justify-between p-2 sm:p-0">
            <button @click="toggled('sidebar')" type="button" class="hidden sm:block px-2 text-gray-500 sm:hover:text-green-400 focus:outline-none sm:focus:text-green-400">
                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
            <button type="button" class="block sm:hidden px-3 py-2 items-center text-white md:text-black hover:text-green-400 focus:outline-none"
                    @click="toggled('sidebar')"
                >
                Menu
            </button>
        </div>
    </sidebar>
</div>
