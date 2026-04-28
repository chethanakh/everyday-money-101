<div class="bg-[#eceef0] rounded-xl p-6 flex flex-col gap-4 font-['Public_Sans'] text-sm">
    <div class="mb-4">
        <h4 class="text-[#154231] font-['Newsreader'] text-xl font-bold">Categories</h4>
        <p class="text-[#515f74] text-xs">Browse by Topic</p>
    </div>
    <nav class="flex flex-col gap-2">
        <a class="flex items-center gap-3 p-3 transition-transform hover:bg-[#e6e8ea] text-[#515f74] group"
            href="#">
            <span class="material-symbols-outlined text-lg">trending_up</span>
            <span>Investing</span>
        </a>
        <a class="flex items-center gap-3 p-3 transition-transform hover:bg-[#e6e8ea] text-[#515f74] group"
            href="#">
            <span class="material-symbols-outlined text-lg">account_balance_wallet</span>
            <span>Budgeting</span>
        </a>
        <a class="flex items-center gap-3 p-3 transition-transform hover:bg-[#e6e8ea] text-[#515f74] group"
            href="#">
            <span class="material-symbols-outlined text-lg">savings</span>
            <span>Savings</span>
        </a>
        <a class="flex items-center gap-3 p-3 transition-transform hover:bg-[#e6e8ea] text-[#515f74] group"
            href="#">
            <span class="material-symbols-outlined text-lg">credit_card</span>
            <span>Credit</span>
        </a>
    </nav>
    {{-- TODO #2 Create all category pages and link these to the appropriate routes --}}
    <button class="mt-6 w-full bg-primary text-white py-3 rounded-lg font-bold hover:opacity-90 transition-opacity" onclick="location.href=`{{ route('blog.archive') }}`">
        Explore All Topics
    </button>
</div>
