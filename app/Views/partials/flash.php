<?php
$flash = getFlash();

if ($flash):
    ?>

    <script>
        Swal.fire({
            icon: <?= json_encode($flash['type']) ?>,
            text: <?= json_encode($flash['message']) ?>,
            confirmButtonText: 'باشه'
        });
    </script>

<?php endif; ?>