
<footer class="footer">
    <div class=" container-fluid ">
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        {{ config('app.name', 'Hindurashtra') }}
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy; {{ now()->year }}, Designed by <a href="#"
                target="_blank">{{ config('app.name', 'Hindurashtra') }}</a>.
        </div>
    </div>
</footer>