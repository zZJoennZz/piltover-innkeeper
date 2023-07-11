<script>
    import { useForm } from "@inertiajs/svelte";
    import SubmitBtn from "../lib/components/SubmitBtn.svelte";

    let frmData = useForm({
        username: "",
        password: "",
    });
</script>

<main class="h-screen">
    <div class="m-auto">
        <form action="">
            <div class="mb-3">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Username"
                    required
                />
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    required
                />
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</main>
