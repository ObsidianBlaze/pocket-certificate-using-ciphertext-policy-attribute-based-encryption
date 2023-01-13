<script>
    function toggleMenu (btn) {
        const el = btn.parentElement.querySelector('.subMenu')
        el.classList.toggle('hidden')
    }
    const btn = document.querySelector('.hasSubMenu')
    btn.addEventListener('click', function(){
        toggleMenu(btn)
    })

</script>
