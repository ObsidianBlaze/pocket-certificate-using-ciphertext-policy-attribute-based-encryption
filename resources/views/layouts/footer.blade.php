
<footer style="background-color: gray" class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
    <span style="color: black;" class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Laspotech™. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0" style="color: black;">
        <li>
            <a href="{{url('/about')}}" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="{{url('/#news')}}" class="mr-4 hover:underline md:mr-6">News</a>
        </li>
        <li>
            <a href="{{url('/contact')}}" class="hover:underline">Contact</a>
        </li>
    </ul>
</footer>


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
