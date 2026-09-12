<head>
    <title>TeachLine مدرسه آنلاین</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="TeachLine مدرسه آنلاین">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function (theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if(el !== 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })

    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/teachline/assets/images/logo_teachline.svg">

    <link rel="stylesheet" type="text/css" href="/teachline/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/teachline/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/teachline/assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="/teachline/assets/vendor/glightbox/css/glightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/teachline/assets/css/style-rtl.css">
    <script src="https://cdn.jsdeliver.net/npm/sweetalert2@11"></script>

</head>
