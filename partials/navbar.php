<?php require('partials/connection.php'); ?>
<nav class="block bg-white border-gray-200 dark:bg-gray-900 shadow-lg pb-3">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="index.php" class="flex items-center">
            <img src="slideImages/logo.png" class="h-24 mr-5 ml-3 my-1" alt="Logo" />
            <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white flex flex-row">
                <p class="text-blue-800 mr-2">BIRPROTIK TARAMAN BIBI HALL </p>
            </span>
        </a>
        <div class="w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="index.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="adminLogin.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Admin Login</a>
                </li>
                <li>
                    <a href="studentLogin.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Student Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>