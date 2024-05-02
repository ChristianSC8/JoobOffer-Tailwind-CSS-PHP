<?php
session_start();
include_once("../../../layouts/head.php");
define("routeMain", "http://localhost/joboffer-project/");
?>

<nav class="w-full mx-auto bg-white shadow fixed z-40 top-0 data">
    <div class="container px-6 justify-between h-16 flex items-center lg:items-stretch mx-auto">
        <div class="h-full flex items-center">
            <div class="mr-10 flex items-center">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_Grey_background-svg1.svg" alt="logo">
            </div>

            <div class="pr-12 xl:flex items-center h-full hidden">

                <?php
                if (isset($_SESSION['id_rol_user']) && $_SESSION['id_rol_user'] == 1) : ?>
                    <a href="<?php echo routeMain; ?>src/components/dashboard/dashboard.php" class="active text-gray-500 hover:text-indigo-700 cursor-pointer h-full flex items-center text-lg tracking-normal border-b-[2px] tab-button transition-colors duration-300 ease-in-out border-transparent font-medium font-sans">Dashboard</a>
                    <a href="../joboffer/joboffer-start.php" class="hover:text-indigo-700 cursor-pointer h-full flex items-center text-lg text-gray-500 mx-10 tracking-normal tab-button border-b-[2px] transition-colors duration-300 ease-in-out border-transparent font-medium font-sans">Ofertas</a>
                    <a href="../users/users-start.php" class="hover:text-indigo-700 cursor-pointer h-full flex items-center text-lg text-gray-500 mr-10 tracking-normal tab-button border-b-[2px] transition-colors duration-300 ease-in-out border-transparent font-medium font-sans">Usuarios</a>
                    <a href="../users/users-start.php" class="hover:text-indigo-700 cursor-pointer h-full flex items-center text-lg text-gray-500 mr-10 tracking-normal tab-button border-b-[2px] transition-colors duration-300 ease-in-out border-transparent font-medium font-sans">Empresas</a>
                <?php endif; ?>

                <?php
                if (isset($_SESSION['id_rol_company']) && $_SESSION['id_rol_company'] == 2) : ?>
                    <a href="<?php echo routeMain; ?>src/components/dashboard/dashboard.php" class="active text-gray-500 hover:text-indigo-700 cursor-pointer h-full flex items-center text-lg tracking-normal border-b-[2px] tab-button transition-colors duration-300 ease-in-out border-transparent font-medium font-sans">Dashboard</a>
                    <a href="../joboffer/joboffer-start.php" class="hover:text-indigo-700 cursor-pointer h-full flex items-center text-lg text-gray-500 mx-10 tracking-normal tab-button border-b-[2px] transition-colors duration-300 ease-in-out border-transparent font-medium font-sans">Ofertas</a>
                <?php endif; ?>


            </div>

        </div>
        <div class="h-full xl:flex items-center justify-end hidden">
            <div class="w-full h-full flex items-center ">
                <button class="mr-5 flex  items-center">
                    <ion-icon name="settings-outline" class="text-[25px]"></ion-icon>
                </button>
                <button class="mr-5 flex  items-center">
                    <ion-icon name="mail-outline" class="text-[28px]"></ion-icon>
                </button>
                <?php
                if (isset($_SESSION['id_rol_company']) && $_SESSION['id_rol_company'] == 2) : ?>
                    <div class="flex">
                        <div class="flex items-center">
                            <img class="rounded-full h-10 w-10" src="https://loremflickr.com/g/600/600/boy">
                            <div class="ml-2 flex flex-col">
                                <div class="leading-snug text-sm text-gray-900 font-bold"><?php echo $_SESSION["company_name"] ?></div>
                                <div class="leading-snug text-xs text-gray-600"><?php echo $_SESSION["name_rol_company"] ?></div>
                            </div>
                        </div>
                        <!-- -------------------- -->
                        <div class="hs-dropdown relative inline-flex">
                            <button id="btn-dorpdown-open" class="ml-4 py-3 px-1 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-white text-gray-800 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="flex-none size-6 text-gray-600 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1" />
                                    <circle cx="12" cy="5" r="1" />
                                    <circle cx="12" cy="19" r="1" />
                                </svg>
                            </button>

                            <div id="dropdown-menu" class="dropdown-menu hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200">
                                <div class="py-2 first:pt-0 last:pb-0">
                                    <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                        Settings
                                    </span>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                        </svg>
                                        Newsletter
                                    </a>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="8" cy="21" r="1" />
                                            <circle cx="19" cy="21" r="1" />
                                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                        </svg>
                                        Purchases
                                    </a>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                            <path d="M12 12v9" />
                                            <path d="m8 17 4 4 4-4" />
                                        </svg>
                                        Downloads
                                    </a>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                        Team Account
                                    </a>
                                </div>
                                <div class="py-2 first:pt-0 last:pb-0">
                                    <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                        Contacts
                                    </span>
                                    <a href="../../services/auth-service/logout-service.php" class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                            <line x1="9" x2="15" y1="10" y2="10" />
                                            <line x1="12" x2="12" y1="7" y2="13" />
                                        </svg>
                                        Contact support
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                if (isset($_SESSION['id_rol_user']) && $_SESSION['id_rol_user'] == 1) : ?>
                    <div class="flex">
                        <div class="flex items-center">
                            <img class="rounded-full h-10 w-10" src="https://loremflickr.com/g/600/600/boy">
                            <div class="ml-2 flex flex-col">
                                <div class="leading-snug text-sm text-gray-900 font-bold"><?php echo $_SESSION["username_user"] ?></div>
                                <div class="leading-snug text-xs text-gray-600"><?php echo $_SESSION["name_rol_user"] ?></div>
                            </div>
                        </div>
                        <!-- -------------------- -->
                        <div class="hs-dropdown relative inline-flex">
                            <button id="btn-dorpdown-open" class="ml-4 py-3 px-1 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-white text-gray-800 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="flex-none size-6 text-gray-600 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="1" />
                                    <circle cx="12" cy="5" r="1" />
                                    <circle cx="12" cy="19" r="1" />
                                </svg>
                            </button>

                            <div id="dropdown-menu" class="dropdown-menu hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200">
                                <div class="py-2 first:pt-0 last:pb-0">
                                    <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                        Settings
                                    </span>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                                        </svg>
                                        Newsletter
                                    </a>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="8" cy="21" r="1" />
                                            <circle cx="19" cy="21" r="1" />
                                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                        </svg>
                                        Purchases
                                    </a>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                            <path d="M12 12v9" />
                                            <path d="m8 17 4 4 4-4" />
                                        </svg>
                                        Downloads
                                    </a>
                                    <a class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                        Team Account
                                    </a>
                                </div>
                                <div class="py-2 first:pt-0 last:pb-0">
                                    <span class="block py-2 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                        Contacts
                                    </span>
                                    <a href="../../services/auth-service/logout-service.php" class="btn-items flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                            <line x1="9" x2="15" y1="10" y2="10" />
                                            <line x1="12" x2="12" y1="7" y2="13" />
                                        </svg>
                                        Contact support
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- --------- -->
            </div>
        </div>
        <div class="visible xl:hidden flex items-center">
            <div>
                <button id="menu" class="text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_Grey_background-svg7.svg" alt="toggler">
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile -->
<div id="mobile-nav" class="w-full xl:hidden h-full absolute z-50">
    <div id="overlay" class="bg-gray-800 opacity-50 inset-0 fixed w-full h-full"></div>
    <div class="w-64 z-20 absolute left-0 z-40 top-0 bg-white shadow flex-col justify-between transition duration-150 ease-in-out h-full">
        <div class="flex flex-col justify-between h-full">
            <div class="px-6 pt-4 overflow-y-auto">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_Grey_background-svg1.svg" alt="logo">
                        <p class="text-bold md:text2xl text-base pl-3 text-gray-800">The North</p>
                    </div>
                    <button id="cross" class="hidden text-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 rounded">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_Grey_background-svg2.svg" alt="cross">
                    </button>
                </div>
                <ul class="f-m-m">
                    <li class="text-white pt-8">
                        <div class="flex items-center">
                            <div class="md:w-6 md:h-6 w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path d="M7.16667 3H3.83333C3.3731 3 3 3.3731 3 3.83333V7.16667C3 7.6269 3.3731 8 3.83333 8H7.16667C7.6269 8 8 7.6269 8 7.16667V3.83333C8 3.3731 7.6269 3 7.16667 3Z" stroke="#667EEA" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.16667 11.6667H3.83333C3.3731 11.6667 3 12.0398 3 12.5V15.8333C3 16.2936 3.3731 16.6667 3.83333 16.6667H7.16667C7.6269 16.6667 8 16.2936 8 15.8333V12.5C8 12.0398 7.6269 11.6667 7.16667 11.6667Z" stroke="#667EEA" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.1667 11.6667H12.8333C12.3731 11.6667 12 12.0398 12 12.5V15.8334C12 16.2936 12.3731 16.6667 12.8333 16.6667H16.1667C16.6269 16.6667 17 16.2936 17 15.8334V12.5C17 12.0398 16.6269 11.6667 16.1667 11.6667Z" stroke="#667EEA" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.1667 3H12.8333C12.3731 3 12 3.3731 12 3.83333V7.16667C12 7.6269 12.3731 8 12.8333 8H16.1667C16.6269 8 17 7.6269 17 7.16667V3.83333C17 3.3731 16.6269 3 16.1667 3Z" stroke="#667EEA" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="../users/users-start.php" class="text-indigo-500 ml-3 text-lg">Dashboard</a>
                        </div>
                    </li>

                    <li class="text-gray-800 pt-8">
                        <div class="flex items-center">
                            <div class="md:w-6 md:h-6 w-5 h-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                                    <path d="M6.66667 13.3333L8.33334 8.33334L13.3333 6.66667L11.6667 11.6667L6.66667 13.3333Z" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="#" class="text-gray-800 ml-3 text-lg">Performance</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-full">
                <div class="border-t border-gray-300">
                    <div class="w-full flex items-center justify-between px-4 pt-1">
                        <div class="flex items-center">
                            <img class="rounded-full h-10 w-10" src="https://loremflickr.com/g/600/600/boy">
                            <div class="ml-2 flex flex-col">
                                <div class="leading-snug text-sm text-gray-900 font-bold">john doe</div>
                                <div class="leading-snug text-xs text-gray-600">@john</div>
                            </div>
                        </div>
                        <ul class="flex gap-4 h-16">
                            <button class=" flex  items-center">
                                <ion-icon name="settings-outline" class="text-[23px]"></ion-icon>
                            </button>
                            <button class=" flex  items-center">
                                <ion-icon name="mail-outline" class="text-[25px]"></ion-icon>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .dropdown-menu {
        position: absolute;
        top: 50px;
        right: 16px;
    }

    .dropdown-menu.drop {
        display: block;
        opacity: 1;
    }

    .tab-button.active {
        background-color: #fff;
        color: rgb(67 56 202);
        border-color: rgb(67 56 202);
    }
</style>
<script>
    let btnDropdownOpen = document.getElementById('btn-dorpdown-open');
    let dropdownMenu = document.getElementById('dropdown-menu');
    btnDropdownOpen.addEventListener('click', () => {
        dropdownMenu.classList.toggle('drop');
    });

    let btnItems = document.querySelectorAll('.btn-items');
    btnItems.forEach(itembtn => {
        itembtn.addEventListener('click', () => {
            dropdownMenu.classList.remove('drop');
        })
    })


    const tabButtons = document.querySelectorAll('.tab-button');

    const storedButton = localStorage.getItem('select-btn');
    if (storedButton) {
        tabButtons.forEach(btn => {
            if (btn.textContent.trim() === storedButton) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            localStorage.setItem('select-btn', button.textContent.trim());
        });
    });


    let sideBar = document.getElementById("mobile-nav");
    let menu = document.getElementById("menu");
    let cross = document.getElementById("cross");
    let overlay = document.getElementById("overlay");
    sideBar.style.transform = "translateX(-100%)";
    menu.addEventListener('click', () => {
        sidebarHandler(true)
    });
    cross.addEventListener('click', () => {
        sidebarHandler(false)
    });
    overlay.addEventListener('click', () => {
        sidebarHandler(false)
    });
    const sidebarHandler = (check) => {
        if (check) {
            sideBar.style.transform = "translateX(0px)";
            menu.classList.add("hidden");
            cross.classList.remove("hidden");
        } else {
            sideBar.style.transform = "translateX(-100%)";
            menu.classList.remove("hidden");
            cross.classList.add("hidden");
        }
    };
</script>