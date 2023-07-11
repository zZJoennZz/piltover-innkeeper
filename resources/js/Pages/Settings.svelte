<script>
    import { HomeIcon, ChevronsRightIcon } from "svelte-feather-icons";
    import { useForm } from "@inertiajs/svelte";

    import Layout from "../lib/components/Layout.svelte";
    import DecimalInput from "../lib/components/DecimalInput.svelte";
    import SubmitBtn from "../lib/components/SubmitBtn.svelte";

    //form data
    let frmData = useForm({
        typeName: "",
        defaultRate: 0,
        defaultMaxCapacity: 0,
    });
    //form submit button modes
    let isSubmitLoading = $frmData.processing;
    let isSubmitError = false;
    let submitErrMsg = "";

    function postRoomType() {
        isSubmitLoading = true;
        $frmData.post("/room-type", {
            preserveScroll: true,
            onSuccess: () => {
                $frmData.reset();
                isSubmitLoading = false;
            },
            onError: (err) => {
                isSubmitLoading = false;
            },
        });
    }
</script>

<Layout>
    <div class="wrapper page-content">
        <ul class="breadcrumbs">
            <li><HomeIcon class="inline w-5 h-5" /></li>
            <li class="breadcrumb-arrow">
                <ChevronsRightIcon class="inline w-3 h-3" />
            </li>
            <li>Settings</li>
        </ul>
        <div>
            <div class="uppercase text-sm text-slate-500 mb-3">
                Add Room Type
            </div>
            <form on:submit|preventDefault={postRoomType}>
                <div class="mb-3">
                    <label for="type-name">Name</label>
                    <input
                        bind:value={$frmData.typeName}
                        type="text"
                        id="type-name"
                        name="type-name"
                    />
                    {#if $frmData.errors.typeName}
                        <div class="form-error">
                            {$frmData.errors.typeName}
                        </div>
                    {/if}
                </div>
                <div class="mb-3">
                    <label for="default-rate">Default Rate (in peso)</label>
                    <DecimalInput
                        bind:value={$frmData.defaultRate}
                        id="default-rate"
                        name="default-rate"
                    />
                    {#if $frmData.errors.defaultRate}
                        <div class="form-error">
                            {$frmData.errors.defaultRate}
                        </div>
                    {/if}
                </div>
                <div class="mb-3">
                    <label for="default-max-capacity"
                        >Default Max Capacity</label
                    >
                    <input
                        type="number"
                        bind:value={$frmData.defaultMaxCapacity}
                        id="default-max-capacity"
                        name="default-max-capacity"
                        min={0}
                    />
                    {#if $frmData.errors.defaultMaxCapacity}
                        <div class="form-error">
                            {$frmData.errors.defaultMaxCapacity}
                        </div>
                    {/if}
                </div>
                <div>
                    <SubmitBtn
                        isLoading={isSubmitLoading}
                        isError={isSubmitError}
                        errorMsg={submitErrMsg}
                        btnText="Save"
                    />
                </div>
            </form>
        </div>
    </div>
</Layout>

<style lang="scss">
    .page-content {
        @apply rounded-md bg-white p-4 text-slate-700;
    }

    .breadcrumbs {
        @apply flex items-center justify-start border-b pb-2 mb-4;
        > li {
            @apply flex items-center justify-center;
        }
        .breadcrumb-arrow {
            @apply mr-2 ml-2;
        }
    }
</style>
