<footer aria-labelledby="footer-heading" class="relative pt-12">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-4 lg:px-8">
        <div class="border-t border-gray-600 text-lime-600 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2">
                <x-github-link/>
                <x-social-links/>
                <x-email-link/>
            </div>
            <p class="flex mt-8 text-xs text-gray-600 leading-5 md:order-1 md:mt-0">
                &copy; 2024 {{ config('rune.ticker') }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
