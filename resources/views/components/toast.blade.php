@if ($toast = Session::get('toast'))
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const type = '{{ $toast['type'] }}'
      const message = '{{ $toast['message'] }}'

      notyf.open({
        type: type,
        message: message
      });
    })
  </script>
@endif
