<script>
    import { ChevronUpIcon } from "svelte-feather-icons";
    import Layout from "../lib/components/Layout.svelte";
    import { router } from "@inertiajs/svelte";

    let values = {
        uuid: "uuid",
        number: "number",
        name: "name",
        description: "description",
        room_types_id: "room_types_id",
        rate: "rate",
        max_capacity: "max_capacity",
        is_smoking_allowed: "is_smoking_allowed",
        is_pet_allowed: "is_pet_allowed",
        isEnabled: true,
        users_id: "users_id",
    };

    function handleSubmit() {
        console.log(values);
    }
</script>

<Layout>
    <div class="wrapper grid grid-cols-1 md:grid-cols-4 gap-x-1">
        <div class="stat-box">
            <div class="stat-title">Pending Appointments</div>
            <div class="stat-number mb-5">32</div>
            <div class="text-center">
                <a
                    href="/"
                    class="text-cyan-600 border px-3 py-1 rounded-md text-sm border-gray-300"
                    >View All</a
                >
            </div>
        </div>
        <div class="stat-box">
            <div class="stat-title">Reservations Today</div>
            <div class="stat-number mb-5">11</div>
            <div class="text-center">
                <a
                    href="/"
                    class="text-cyan-600 border px-3 py-1 rounded-md text-sm border-gray-300"
                    >View All</a
                >
            </div>
        </div>
        <div class="stat-box">
            <div class="stat-title">Available Rooms</div>
            <div class="stat-number mb-5">22</div>
            <div class="text-center">
                <a
                    href="/"
                    class="text-cyan-600 border px-3 py-1 rounded-md text-sm border-gray-300"
                    >View All</a
                >
            </div>
        </div>
        <div class="stat-box">
            <div class="stat-title">Revenue vs Yesterday</div>
            <div class="stat-number relative mb-5">
                <span class="text-2xl text-gray-400">₱</span>6,762<span
                    class="text-2xl text-gray-400">...</span
                >
                <div class="absolute -top-3 right-4 text-green-600">
                    <ChevronUpIcon />
                </div>
            </div>
            <div class="text-center">
                <a
                    href="/"
                    class="text-cyan-600 border px-3 py-1 rounded-md text-sm border-gray-300"
                    >View Report</a
                >
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="flex flex-col items-center text-center space-y-4">
            <h1 class="block mt-4 font-bold text-4xl">dwasd</h1>
        </div>
    </div>
</Layout>

<style>
    .stat-box {
        @apply bg-white p-4 rounded-md;
    }

    .stat-title {
        @apply uppercase text-xs text-slate-600 mb-2;
    }

    .stat-number {
        @apply text-5xl text-center font-bold text-cyan-700;
    }
</style>
