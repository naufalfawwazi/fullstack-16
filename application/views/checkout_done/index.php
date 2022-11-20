  <!-- header section ends -->

    <!-- about section starts  -->
    <div class="success text-center mt-5 text-white">
      <i class="fa-solid fa-circle-check fa-7x"></i>
      <h2 class="mt-3 text-white">Thank you for your purchase</h2>
      <p>
        We'll email you an order confirmation with details and tracking info
      </p>
      <!-- <a href="gitar.html" class="btnn mt-1">Continue Shopping</a> -->
    </div>
<script>
    function sleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function demo() {
      console.log('Taking a break...');
      await sleep(2000);
      console.log('Two second later');
      window.location.href = "<?= base_url('user/keranjang') ?>";
    }

    demo();
</script>
