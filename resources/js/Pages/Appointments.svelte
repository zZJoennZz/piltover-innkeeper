<script>
    import { HomeIcon, ChevronsRightIcon } from "svelte-feather-icons";
    import AppointmentCalendar from "../lib/components/AppointmentCalendar.svelte";
    import Layout from "../lib/components/Layout.svelte";

    let currentYear = new Date().getFullYear();
    let currentMonth = new Date().getMonth();
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
        <AppointmentCalendar year={currentYear} month={currentMonth} />
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
