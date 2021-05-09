<?php get_header() ?>

    <div class="h-full border1 flex flex-wrap content-center">
        <div class="inline-block border mx-auto text-center px-8 py-4 rounded-3xl shadow-xl">
            <h1 class="text-4xl font-bold text-black">Hello World!</h1>
            <h2 class="text-xl font-bold text-black">Wordpress Theme rapid development using Vite & Tailwindcss JIT</h2>
            <div class="text-md mt-4">
                <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-purple-700 hover:opacity-90" href="https://vitejs.dev/" target="_blank">ViteJS</a>
                <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-green-600 hover:opacity-90" href="https://tailwindcss.com/" target="_blank">TailwindCSS</a>
            </div>
            <p class="mt-3 text-sm">After starting Vite dev server (npm run dev) this page should be formated in the middle of the screen.<br>Feel free to edit index.php (this example) to see how fast it is.</p>
            <p class="mt-3 text-sm font-bold italic">Note: Loading assets from <?php echo (@IS_VITE_DEVELOPMENT) ? 'Vite dev server.' : 'theme dist folder.' ?></p>
        </div>
    </div>

<?php get_footer() ?>