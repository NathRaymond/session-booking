<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sessionTypeSelect = document.getElementById('sessionType');
        const sessionPriceInput = document.getElementById('sessionPrice');

        sessionTypeSelect.addEventListener('change', function () {
            // Get selected option
            const selectedOption = this.options[this.selectedIndex];
            // Get the session price from data-price attribute
            const price = selectedOption.getAttribute('data-price');
            // Update the session-price input field with the selected price
            sessionPriceInput.value = price;
        });
    });
</script>
