<div class="bg-surface-container-lowest p-6 rounded-xl transition-colors hover:bg-surface-container-high group">
    <span class="text-[10px] font-bold uppercase tracking-widest text-secondary mb-3 block">{{ $category }}</span>
    <h4 class="text-xl serif-tight font-semibold mb-3 text-on-surface">{{ $title }}</h4>
    <p class="text-sm text-on-surface-variant leading-relaxed mb-6">{{ Str::limit(strip_tags($description), 100) }}</p>
    <img alt="{{ $category }}" class="w-full h-40 object-cover rounded-lg mb-4 opacity-90"
        data-alt="close up of a high quality paper budget planner with elegant handwriting and a wooden pencil on a textured surface"
        src="{{ $featureImage }}" />
</div>
