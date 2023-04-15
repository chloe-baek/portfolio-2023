</main>
<footer class="footer">
    <p class="footer__para">&copy; 2022-
        <script>
        document.write(new Date().getFullYear())
        </script> by Chloe Jewon Baek. All rights reserved.
    </p>
</footer>
<!-- <div class="loading">
        <div class="loading__reveal"></div>
        <div class="loading__pre block">
            <div class="loading__page--wrapper">
                <div class="loading__page"></div>
            </div>
        </div>
    </div> -->
<div class="circle"></div>
<script src="./script/bgcolor.js"></script>
<script src="./script/scroll.js"></script>
<script src="./script/home.js"></script>
<!-- <script src="./script/bgcolor.js"></script> -->
<!-- <script>
        const header = document.querySelector('.header');
        const nav = document.querySelector('.header__nav')
        const navHeight = nav.getBoundingClientRect().height;

        console.log(navHeight);

        const stickyNav = function (entries) {
            const [entry] = entries;
            if (!entry.isIntersecting) nav.classList.add('sticky')
            else nav.classList.remove('sticky');
        }

        const headerObserver = new IntersectionObserver(stickyNav, {
            root: null,
            threshold: 0,
            rootMargin: `-${navHeight}px`,
        });
        headerObserver.observe(header);
    </script> -->

</body>

</html>