<nav class="fixed top-0 left-0 right-0 z-50 border-b border-gray-200 bg-white">
    <div class="max-w-screen-lg mx-auto flex flex-wrap items-center justify-between p-2">
        <a href="/index.php" class="font-medium flex items-center p-2 rounded-lg">
            <img src="/assets/images/JOIN DE COMMUNITY(1).png" class="h-12 max-h-12 w-auto" alt="TechTraject Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-4 rtl:space-x-reverse md:mt-0">
                <li>
                    <a href="Projecten.php" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Projecten</a>
                </li>
                <li>
                    <a href="Todos.php" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">To Do's</a>
                </li>
                <li>
                    <a href="equipment.php" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Equipment</a>
                </li>
                <li>
                    <a href="Contact.php" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="pt-[70px]">
    <!-- Je overige pagina-inhoud hier -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const navLinks = document.querySelectorAll('ul a');
        const currentUrl = window.location.href;

        navLinks.forEach((link) => {
            if (link.href === currentUrl) {
                link.classList.add('text-blue-700');
            } else {
                link.classList.add('text-gray-900');
            }
        });
    });
</script>