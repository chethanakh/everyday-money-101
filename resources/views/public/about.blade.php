@extends('layouts.public')

@section('content')
    <main class="pt-32 pb-20">
        <!-- Hero Section -->
        <section class="max-w-7xl mx-auto px-8 mb-24">
            <div class="grid lg:grid-cols-12 gap-12 items-end">
                <div class="lg:col-span-7">
                    <span class="text-secondary font-label text-xs uppercase tracking-[0.2em] mb-4 block">The
                        Heritage</span>
                    <h1 class="text-6xl md:text-8xl font-headline tracking-tighter leading-[0.9] text-primary mb-8">
                        The Story Behind <br /> Everyday Money.
                    </h1>
                </div>
                <div class="lg:col-span-5 pb-4">
                    <p class="text-xl leading-relaxed text-secondary font-body">
                        We believe that financial literacy shouldn't be a luxury. It started with a single notebook and
                        a desire to demystify the complex world of capital for the everyday earner.
                    </p>
                </div>
            </div>
            <div
                class="mt-16 w-full aspect-[21/9] rounded-xl overflow-hidden grayscale hover:grayscale-0 transition-all duration-700 bg-surface-container">
                <img alt="high-end minimalist office desk with financial journals, a classic fountain pen, and soft morning sunlight casting long shadows"
                    class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1cfQO6Qr1pQTCL9m0CZps7mAnWjgb8NQXQ6nXPqXZ2TtohiWBIMTGAuFBSLBAD-ej12VvJDssDluDbXrA_tHkx22dObhqozyl7lDk6_nIpR8ChGWZxaAYdS22eYl7hNK-J0_lmLuQEDowsJy2loH3FcElbH6sLoSH8oNTkAmLLItesJ0hnYKY-LjSC9lT9YfRw0xY6iT3uUHlxpWbj_53C2dX19Vh9HOO__BwaUh_gVMm-4IwRw_qA4RDzV_VGgEyH6xUTrMrM8J0" />
            </div>
        </section>
        <!-- Mission Insight Block -->
        <section class="max-w-5xl mx-auto px-8 mb-32">
            <div class="bg-tertiary-container text-on-tertiary-container p-12 md:p-20 rounded-xl relative overflow-hidden">
                <div class="relative z-10">
                    <span class="text-on-tertiary-container/70 font-label text-xs uppercase tracking-widest mb-6 block">Our
                        Mission</span>
                    <h2 class="text-4xl md:text-6xl font-headline leading-tight mb-8">
                        Making money management simple for everyone.
                    </h2>
                    <p class="text-lg opacity-90 max-w-2xl font-body leading-relaxed">
                        Complexity is the enemy of action. By stripping away the jargon and focusing on editorial
                        clarity, we empower our readers to build generational wealth through simple, repeatable habits.
                    </p>
                </div>
                <span
                    class="material-symbols-outlined absolute -right-8 -bottom-8 text-[200px] opacity-5 pointer-events-none">auto_graph</span>
            </div>
        </section>
        <!-- Author & Authority -->
        <section class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-24 items-center mb-32">
            <div class="order-2 lg:order-1">
                <h2 class="text-4xl font-headline text-primary mb-6">A Note from the Editor</h2>
                <div class="space-y-6 text-secondary leading-relaxed text-lg">
                    <p>
                        After a decade in corporate finance, I realized the most impactful advice wasn't found in
                        boardroom decks, but in the simple decisions families make every day at their kitchen tables.
                    </p>
                    <p>
                        I founded Everyday Money 101 to bridge the gap between "high finance" and "real life." My goal
                        is to be your digital curator—sifting through the noise to bring you only what matters for your
                        bottom line.
                    </p>
                </div>
                <div class="mt-10 pt-10 border-t border-outline-variant/20">
                    <p class="font-headline text-2xl italic text-primary">Julianne Sterling</p>
                    <p class="text-sm font-label text-secondary uppercase tracking-widest">Founder &amp; Lead Curator
                    </p>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="relative aspect-square max-w-md mx-auto">
                    <div
                        class="absolute -top-4 -right-4 w-full h-full bg-primary-fixed-dim rounded-xl -z-10 translate-x-4 translate-y-4">
                    </div>
                    <img alt="professional portrait of a confident woman editor in a minimal studio setting with warm natural lighting and soft shadows"
                        class="w-full h-full object-cover rounded-xl grayscale shadow-xl"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDlnwtBlB-8ogB3EM7MZ9XlaVqZQP_gYQnGjNXfF-qVyikWGfPeRFIvCq6wWnbeBQBTBMZLMQJQiNdWYmoxXazIKbetO7u2l46WFULutWQqG2TJwxJXBaSpwMYgWTcSTl_Z_X42mvBJzk_yyd4UXjWrwIzXDgrF6BCNe7-E1KLE0q_GVwn3iBrTXRrXjiBbnr8eixM96MAKjucZ1zgrhmuxqAXovuFOyqeQYZxRaj6ObkA7RU7xTxG7dhpCZDk5_Czsfe1s94i4Sec" />
                </div>
            </div>
        </section>
        <!-- Social Proof / As Seen In -->
        <section class="bg-surface-container py-24 mb-32">
            <div class="max-w-7xl mx-auto px-8">
                <p class="text-center font-label text-xs uppercase tracking-[0.3em] text-secondary mb-12">Institutional
                    Authority</p>
                <div
                    class="flex flex-wrap justify-center items-center gap-16 opacity-50 grayscale hover:grayscale-0 transition-all">
                    <span class="text-2xl font-headline font-bold text-primary">Financial Journal</span>
                    <span class="text-2xl font-headline italic text-primary">The Modern Daily</span>
                    <span class="text-2xl font-headline tracking-tighter text-primary">ECONOMY+</span>
                    <span class="text-2xl font-headline font-medium text-primary">Capital Trust</span>
                </div>
            </div>
        </section>
        <!-- Contact & Connection -->
        <section class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-16">
            <div>
                <h2 class="text-4xl font-headline text-primary mb-6">Stay in Touch</h2>
                <p class="text-secondary mb-8 text-lg">Whether you have a question about an article or a proposal for
                    collaboration, our door is always open.</p>
                <div class="flex gap-4">
                    <a class="p-3 bg-surface-container-lowest rounded-full text-primary hover:bg-primary hover:text-white transition-all shadow-sm"
                        href="#">
                        <span class="material-symbols-outlined">alternate_email</span>
                    </a>
                    <a class="p-3 bg-surface-container-lowest rounded-full text-primary hover:bg-primary hover:text-white transition-all shadow-sm"
                        href="#">
                        <span class="material-symbols-outlined">share</span>
                    </a>
                    <a class="p-3 bg-surface-container-lowest rounded-full text-primary hover:bg-primary hover:text-white transition-all shadow-sm"
                        href="#">
                        <span class="material-symbols-outlined">campaign</span>
                    </a>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-10 rounded-xl">
                {{-- TODO: #1 update form action and method when backend is ready --}}
                <form class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-label uppercase tracking-wider text-secondary">Full Name</label>
                            <input
                                class="w-full bg-surface border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/10"
                                type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-label uppercase tracking-wider text-secondary">Email
                                Address</label>
                            <input
                                class="w-full bg-surface border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/10"
                                type="email" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-label uppercase tracking-wider text-secondary">Message</label>
                        <textarea class="w-full bg-surface border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary/10" rows="4"></textarea>
                    </div>
                    <button
                        class="w-full bg-gradient-to-br from-primary to-primary-container text-white py-4 rounded-lg font-label uppercase tracking-widest text-sm hover:opacity-90 transition-opacity">
                        Send Inquiry
                    </button>
                </form>
            </div>
        </section>
    </main>
@endsection
