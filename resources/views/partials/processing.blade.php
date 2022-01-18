<script>
    function submitForm(button) {
        let btn = $("#"+button);
        btn.prop('disabled', true);
        btn.text('Loading...');
    }
</script>