<script>
    export let value = 0;
    export let className = "";
    export let name = "";
    export let id = "";
    function validateNumberInput(event) {
        const charCode = event.which ? event.which : event.keyCode;
        const input = event.target.value + String.fromCharCode(charCode);
        if (!/^\d*\.?\d*$/.test(input)) {
            event.preventDefault();
        }
    }
</script>

<input
    type="text"
    bind:value
    class={className}
    {name}
    {id}
    on:keypress={validateNumberInput}
/>
