<script setup>
import { RouterLink } from "vue-router";
</script>

<template>
    <header>
        <nav class="blue-bg text-white px-2 py-2.5 h-20 flex items-center">
            <div
                class="container flex flex-wrap justify-between items-center mx-auto"
            >
                <a href="/" class="flex items-center">
                    <img
                        src="@/assets/logo.png"
                        class="mr-3 h-6 sm:h-9"
                        alt="Logo"
                    />
                </a>
                <button
                    data-collapse-toggle="navbar-default"
                    type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <div
                    class="hidden w-full md:block md:w-auto"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
                    >
                        <li>
                            <RouterLink to="/">Home</RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/products">Products</RouterLink>
                        </li>
                        <li>
                            <RouterLink to="/counter">Categories</RouterLink>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
