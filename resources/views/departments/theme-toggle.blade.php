<script>
    document.getElementById('toggle-theme').addEventListener('click', function() {
        document.body.classList.toggle('light-mode');
    });
</script>

<style>
    body { background-color: #121212; color: white; }
    .theme-bg { background-color: #121212; }
    .text-theme { color: white; }
    .border-theme { border-color: white !important; }

    .light-mode { background-color: #f8f9fa !important; color: black !important; }
    .light-mode .theme-bg { background-color: white !important; }
    .light-mode .text-theme { color: black !important; }
    .light-mode .border-theme { border-color: black !important; }
</style>
