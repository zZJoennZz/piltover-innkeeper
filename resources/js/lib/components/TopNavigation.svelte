<script>
    import { Link } from "@inertiajs/svelte";
    import {
        ChevronDownIcon,
        BoxIcon,
        BellIcon,
        LogOutIcon,
        SettingsIcon,
        UserIcon,
        MenuIcon,
    } from "svelte-feather-icons";

    let isMobileMenuOpen = false;
</script>

<div class="top-nav">
    <nav class="wrapper">
        <div
            class="mt-10 md:mt-0 float-right flex flex-row items-center pt-2 text-white cursor-pointer group relative"
        >
            <div
                class="bg-yellow-500 w-8 h-8 rounded-full mr-2 flex items-center justify-center"
            >
                <UserIcon />
            </div>
            Hello, Joenn! <ChevronDownIcon />
            <div
                class="scale-0 w-full group-hover:scale-100 origin-top group-hover:p-2 rounded-md bg-white overflow-hidden top-11 absolute duration-300 transition-all text-sm z-50"
            >
                <div class="flex pb-1 mb-2 border-b">
                    <div class="text-gray-300 flex-grow">
                        <BellIcon />
                    </div>
                    <div class="text-cyan-600">Notifications</div>
                </div>
                <div class="flex pb-1 mb-2 border-b">
                    <div class="text-gray-300 flex-grow">
                        <SettingsIcon />
                    </div>
                    <div class="text-cyan-600">Settings</div>
                </div>
                <div class="flex">
                    <div class="text-gray-300 flex-grow">
                        <LogOutIcon />
                    </div>
                    <div class="text-cyan-600">Logout</div>
                </div>
            </div>
        </div>
        <div
            class="pt-2 text-2xl md:text-3xl font-bold text-white tracking-widest"
        >
            <BoxIcon /> Piltover Innkeeper
        </div>
        <div>
            <div class="md:hidden absolute top-1 right-2 z-50">
                <button on:click={() => (isMobileMenuOpen = !isMobileMenuOpen)}>
                    <MenuIcon
                        class="w-10 h-10 {isMobileMenuOpen
                            ? 'text-cyan-700'
                            : 'text-white'}"
                    />
                </button>
            </div>
            <ul class="{isMobileMenuOpen ? 'open' : ''} nav-menu-links">
                <li class="nav-menu-link"><Link href="/">Dashboard</Link></li>
                <li class="nav-menu-link">
                    <Link href="/">Appointments</Link>
                </li>
                <li class="nav-menu-link">
                    <Link href="/">Transactions</Link>
                </li>
                <li class="nav-menu-link"><Link href="/">Clients</Link></li>
                <li class="nav-menu-link"><Link href="/">Reports</Link></li>
            </ul>
        </div>
    </nav>
</div>

<style lang="scss">
    .top-nav {
        min-height: 200px;
        @apply bg-cyan-700;
    }

    .nav-menu-links {
        @apply md:mt-8 md:z-auto md:relative md:inset-y-auto md:right-auto md:w-auto md:bg-transparent md:border-none md:transition-none md:translate-x-0 z-40 fixed inset-y-0 right-0 w-64 bg-white border-l transition-transform translate-x-full origin-top-right duration-300 ease-in-out pt-12 pr-5 pl-5 pb-5 md:p-0;
    }

    .nav-menu-links.open {
        @apply translate-x-0;
    }

    .nav-menu-links > li {
        @apply mb-4 md:inline md:mb-0 md:mr-6;
    }

    .nav-menu-links > li:last-child {
        @apply mb-0 md:mr-0;
    }

    .nav-menu-link {
        @apply text-white px-4 py-2 bg-cyan-600 rounded-3xl cursor-pointer transition-all ease-in-out duration-150;
    }

    .nav-menu-link:hover {
        @apply bg-cyan-500;
    }
</style>
