</main>
<footer class="footer">
    <p class="footer__para">&copy; 2022-
        <script>
        document.write(new Date().getFullYear())
        </script> by Chloe Jewon Baek. All rights reserved.
    </p>
</footer>

<div class="circle"></div>
<script src="./script/bgcolor.js" defer></script>
<script>
document.querySelector('.header__toggle').addEventListener('click', () => {
    document.querySelector('.header__ul').classList.toggle('show');
    document.querySelector('.main').classList.toggle('filter');

});
</script>