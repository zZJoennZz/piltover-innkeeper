<script>
    import {
        SaveIcon,
        LoaderIcon,
        AlertCircleIcon,
    } from "svelte-feather-icons";

    export let isLoading = false;
    export let isError = false;
    export let errorMsg = "";
    export let btnText = "Submit";
</script>

<button
    type="submit"
    class="{isLoading || isError
        ? 'bg-gray-400 text-white'
        : 'bg-cyan-500 text-white hover:bg-cyan-400'} pr-4 uppercase shadow-slate-300 hover:shadow-none shadow-lg transition-all ease-in-out duration-200 flex items-center justify-center rounded-lg"
    disabled={isLoading || isError}
    ><div class="border-r-2 mr-3 pl-3 pr-2 py-2">
        {#if isLoading}
            <LoaderIcon class="inline w-4 h-4 animate-spin m-auto" />
        {:else if isError}
            <AlertCircleIcon class="inline w-4 h-4 m-auto" />
        {:else}
            <SaveIcon class="inline w-4 h-4 m-auto" />
        {/if}
    </div>
    <div>
        {#if isLoading}
            Loading...
        {:else}
            {isError ? errorMsg : btnText}
        {/if}
    </div>
</button>
