<script>
    import { useForm } from "@inertiajs/svelte";
    import { LogInIcon } from "svelte-feather-icons";

    export let loginPost;

    let frmData = useForm({
        username: "",
        password: "",
    });

    function performLogin() {
        $frmData.post(loginPost, {
            preserveScroll: true,
            onSuccess: () => {
                $frmData.reset();
            },
            onError: (err) => {
                if (err["0"]) {
                    alert(err[0]);
                }
                console.log(err);
            }
        });
    }
</script>

<main class="h-screen bg-slate-200 flex">
    <div class="m-auto bg-white p-5 rounded-lg shadow-lg shadow-slate-300 w-10/12 md:w-6/12 lg:w-4/12">
        <form on:submit|preventDefault={performLogin}>
            <div class="mb-3">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    bind:value={$frmData.username}
                    required
                />
                {#if $frmData.errors.username}
                    <div class="form-error">
                        {$frmData.errors.username}
                    </div>
                {/if}
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    bind:value={$frmData.password}
                    required
                />
                {#if $frmData.errors.password}
                    <div class="form-error">
                        {$frmData.errors.password}
                    </div>
                {/if}
            </div>
            <button class="btn-primary float-right" type="submit">Login <LogInIcon class="inline w-4 h-4" /></button>
        </form>
    </div>
</main>
