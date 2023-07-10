<script setup></script>

<template>
    <body class="h-full">
        <div class="min-h-full">
            <main
                class="custom-bg flex min-h-screen flex-col justify-center py-12 sm:px-6 lg:px-8"
            >
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="flex flex-col items-center">
                        <h2 class="text-3xl font-extrabold text-stone-300">
                            Business Management System
                        </h2>

                        <h6 class="mt-4 text-xs font-medium text-stone-300">
                            Office of Research, Extension,
                            and Innovation
                        </h6>
                    </div>
                </div>
                <slot />
            </main>
        </div>
    </body>
</template>

<style>
.custom-bg {
    background: linear-gradient(
            to bottom,
            rgba(255, 255, 255, 0.2) 0%,
            rgba(255, 255, 255, 0.2) 100%
        ),
        url(images/bg.jpg);
    background-size: cover;
}
</style>
