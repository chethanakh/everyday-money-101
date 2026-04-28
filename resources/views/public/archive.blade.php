@extends('layouts.public')

@section('content')
    <main class="pt-24 pb-20 max-w-7xl mx-auto px-8">
        <!-- Hero Section -->
        <header class="py-12 md:py-20 lg:py-24 text-center max-w-4xl mx-auto">
            <span class="label-md uppercase tracking-widest text-secondary text-xs mb-4 block font-label">The Digital
                Curator</span>
            <h1 class="text-5xl md:text-7xl serif-tight font-light text-primary leading-tight mb-8">
                Master your money with simple, <span class="italic">actionable</span> advice.
            </h1>
            <p class="text-lg md:text-xl text-secondary max-w-2xl mx-auto leading-relaxed">
                We distill complex financial systems into clear, editorial insights for the modern investor and everyday
                saver.
            </p>
        </header>
        <!-- Main Content Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left: Featured Content & Grid -->
            <div class="lg:col-span-8 space-y-16">
                <!-- Featured Article -->
                <article class="relative group">
                    <div class="aspect-[16/9] w-full overflow-hidden rounded-xl bg-surface-container">
                        <img alt="Featured Financial Insight"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuACKhu-CeTP_0crGREi-NG1xsVswY9fBz5WI-zA2ohiO7BBfvnqXmgjF35A4f78FtcMU7W4TMpBZ-tKGI7UMI4JxfHhNMgOMbPRTEP9vlRr1FtNemz9X4I1GlrNxcEnR31zS2vNZ49y-XZHF9iR7AMssFP0MCOhf0-4vI3fLfr9VRyBWUF6vAGFGMcFKkeLFDxVf3lfwq99-4QyMY8PUooTN-CbRiKpETcj8aSikyyobH9Ryi1rYqCtnrGFocs-3I8bdoDRMpmK-9Gv" />
                    </div>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4">
                            <span class="text-xs font-bold text-primary uppercase tracking-widest font-label">Deep
                                Dive</span>
                            <span class="text-xs text-secondary font-label">12 Min Read</span>
                        </div>
                        <h2
                            class="text-3xl md:text-4xl serif-tight font-medium text-on-surface group-hover:text-primary transition-colors">
                            The Psychology of Compound Interest: Why Your Brain Struggles with Long-Term Growth
                        </h2>
                        <p class="text-secondary leading-relaxed text-lg line-clamp-3">
                            Understand the cognitive biases that prevent us from seeing the true power of time. We explore
                            how to rewire your financial mindset for decades of success rather than days of speculation.
                        </p>
                        <a class="inline-flex items-center gap-2 text-primary font-bold hover:gap-4 transition-all"
                            href="#">
                            Read the Archive <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </article>
                <!-- Article Grid -->
                <section>
                    <div class="flex justify-between items-end mb-8">
                        <h3 class="text-2xl serif-tight font-medium text-primary">Recent Observations</h3>
                        <a class="text-sm text-secondary hover:text-primary underline font-label" href="#">View all
                            posts</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Card 1: Budgeting -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl transition-colors hover:bg-surface-container-high group">
                            <span
                                class="text-[10px] font-bold uppercase tracking-widest text-secondary mb-3 block">Budgeting</span>
                            <h4 class="text-xl serif-tight font-semibold mb-3 text-on-surface">The 50/30/20 Rule: A Modern
                                Re-evaluation</h4>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">Adapting classic budgeting
                                frameworks for high-inflation environments and digital spending habits.</p>
                            <img alt="Budgeting" class="w-full h-40 object-cover rounded-lg mb-4 opacity-90"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiFoKpku1kmhXnpP0SXBWYkPzQj8f9iVQrja_zhUV6lQxlNtvota2JQwnrvaDvIaFhfPjiSx8ejwEAyp3K3cGM9PQ1dC0mZYsLlVfLgNSj5e7RSkzdrFUfPsj3hL6s_Mi6LJNsBhQnGQQ-kjE8oTbuDAywaEqJYmB6ir2_8ulca-7b8K_qSvTPD9T5LPlA1WpP5Qw8yYKXhB1nZ4MbJ_YwIVR8_wZ6RWfQW7WTwVULJ0ps1wR3FKe8Bm5nCvVbI7W8tXYLVQ_WqWJK" />
                        </div>
                        <!-- Card 2: Investing -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl transition-colors hover:bg-surface-container-high group">
                            <span
                                class="text-[10px] font-bold uppercase tracking-widest text-secondary mb-3 block">Investing</span>
                            <h4 class="text-xl serif-tight font-semibold mb-3 text-on-surface">The Invisible Cost of Index
                                Fund Fees</h4>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">How a fraction of a percent can
                                erode a lifetime of savings, and what to look for in your portfolio.</p>
                            <img alt="Investing" class="w-full h-40 object-cover rounded-lg mb-4 opacity-90"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm0ls4TsTJD1_cNsOYwSkbnFRqHaXatuNx6rdqqkKdEsUK04Pbs8FwJoZQQDeS_7ct_3OZObdm9BLqtUQuSlD3OWNR3wCukihXtvGuGeNSibyAA_nE5gzxmRN3gWCDrMzO7hHX_wMJUR5aGIMBlIY6ZG7Y9A5AZRAUwS5krwFoCYJNY7mW5DWx4aQakXk8d2H3HA9ggYrGr5ln7H0qniMeZxqd0Mcxy78kbCFqKAyq-cT2vwbi1W5e3l-AuZYE94kVzhP734Y4t2s2" />
                        </div>
                        <!-- Card 3: Savings -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl transition-colors hover:bg-surface-container-high group">
                            <span
                                class="text-[10px] font-bold uppercase tracking-widest text-secondary mb-3 block">Savings</span>
                            <h4 class="text-xl serif-tight font-semibold mb-3 text-on-surface">Emergency Funds in the Age of
                                Volatility</h4>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">Why the 3-month rule might be
                                outdated and how to build a resilient safety net today.</p>
                            <img alt="Savings" class="w-full h-40 object-cover rounded-lg mb-4 opacity-90"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjVUt3v6rMYvketsl69S0waJ2fNtzbCTo0IaOZWDsmq8wSiT0Otj_3vLSxJkZzimUGKBxVz05v0swKRjkKjWJM01K_hal2qMgYT6smcxgg4cFjOOk1NDApTJ0ypcmA6RvCorCU7XBcpUSOIUNdmn1WzExRWHOvvlzjcdsPw4qYSATi1mqWSIjkH3IiGBvARKey4l1ewOiY4GpLF0LhUYrjn80kbUGrB_f2u179kcItYYRmPbgUllgXvyF7sMwpzln_WsGqX_WeXSlV" />
                        </div>
                        <!-- Card 4: Credit -->
                        <div
                            class="bg-surface-container-lowest p-6 rounded-xl transition-colors hover:bg-surface-container-high group">
                            <span
                                class="text-[10px] font-bold uppercase tracking-widest text-secondary mb-3 block">Credit</span>
                            <h4 class="text-xl serif-tight font-semibold mb-3 text-on-surface">Strategic Leverage: When Debt
                                is an Asset</h4>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">An editorial look at using
                                credit as a tool for expansion rather than a trap for consumption.</p>
                            <img alt="Credit" class="w-full h-40 object-cover rounded-lg mb-4 opacity-90"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkfYF8wu6mGeN7vxb9A_MxCekqsgR7_eRp48vJ1lhxEfj1BuiZO1Bc6FkPBaGbxFnGwHs7LG1JxAhp8DolP1SoWZ2lxpqoULmKgdyW9vZvcx5XHrS6VRJ9BAUaLr5tI-6tvDQt7abAwVOhgU-i_j243_RjKH7NQlc6JJd05FiuFKcCLJBmeJjTT7RDY1ADggmNKqsWwhHG-cZkIh2hT8zjtZWlvMhWxPbCAOIkUt4A6SEODKUJTWJ1nvfx4GUzuHG127sW8EF5j5sM" />
                        </div>
                    </div>
                </section>
                <!-- Insight Block -->
                <section class="bg-tertiary-container p-10 rounded-xl text-on-tertiary-container">
                    <div class="max-w-2xl">
                        <span class="material-symbols-outlined mb-4 text-4xl" data-weight="fill">lightbulb</span>
                        <h3 class="text-2xl serif-tight font-medium mb-4">Financial Insight of the Week</h3>
                        <p class="text-lg opacity-90 leading-relaxed italic">
                            "The single most important factor in your financial success isn't your rate of return, it's your
                            rate of savings. Control the variables that are within your reach."
                        </p>
                        <div class="mt-6 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-tertiary"></div>
                            <span class="text-sm font-bold font-label">Editorial Board</span>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right: Sidebar (SideNavBar Implementation from ) -->
            <aside class="lg:col-span-4 sticky top-24 space-y-8">
                <x-category-box/>
                <x-newsletter-card />
                <x-curator-profile />
            </aside>
        </div>
    </main>
@endsection
