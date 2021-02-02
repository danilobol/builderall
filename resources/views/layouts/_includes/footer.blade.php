
    <script type="text/javascript">
        $(document).ready(function(){
            Materialize.updateTextFields();
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>

{{--    <script src="{{asset('js/app.js')}}"></script>--}}

</body>
</html>
