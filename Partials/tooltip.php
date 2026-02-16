<script>
  const containers = [...document.querySelectorAll('.head .cell.bg')]

  const showTooltip = () => {
    for (let container of containers) {
      container.addEventListener('click', () => {
        container.classList.toggle('active')
      })
    }
  }

  const loadHelper = () => {
    showTooltip()
  }

  window.addEventListener('load', loadHelper)
</script>