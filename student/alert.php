<style>
    .swal2-popup {
        font-size: 12px !important;
    }
</style>

<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script>
        Swal.fire({

            icon: '<?php echo $_SESSION['icon'] ?>',
            text: '<?php echo $_SESSION['text'] ?>',
            showConfirmButton: false,
            timer: 13800,

        })
    </script>
<?php
    unset($_SESSION['status']);
}
?>