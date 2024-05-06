<footer aria-labelledby="footer-heading" class="relative">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-4 lg:px-8">
        <div class="border-t border-white/10 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2 text-gray-400">
                <x-social-links/>
                <x-email-link/>
            </div>
            <p class="flex mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">
                &copy; 2024 {{ config('rune.ticker') }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
