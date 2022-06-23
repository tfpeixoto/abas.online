<script defer>
  function timer(duration, time, description) {
    let timer = duration;
    
    setInterval(() => {
      time.textContent = "0" + timer;
      description.textContent = "segundos";
      
      if (timer == 1) {
        description.textContent = "segundo";
      }

      if (--timer < 0) {
        timer = 0;
        window.location = "https://app.abas.online/login?redirect=signup";
      }
    }, 1000);
  }

  window.onload = () => {
    const time = document.querySelector("#time");
    const description = document.querySelector("#description");
    let duration = 4;

    timer(duration, time, description);
  }
</script>
<?php wp_footer(); ?>
</body>

</html>