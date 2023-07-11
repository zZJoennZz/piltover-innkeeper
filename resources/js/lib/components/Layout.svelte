<script>
    import TopNavigation from "./TopNavigation.svelte";
    import Footer from "./Footer.svelte";
</script>

<TopNavigation />

<main class="-translate-y-8">
    <slot />
</main>
<Footer />
