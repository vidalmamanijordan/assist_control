@extends('dashboard')

@section('work_area')
    @livewire('admin.list-participants', ['participants' => $participants, 'total' => $total])
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session('message') == 'El participante ha sido eliminado satisfactoriamente')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'EL participante se eliminado con éxito.',
                'success'
            )
        </script>
    @endif
    <script>
        $('.formulario-eliminar').submit(function(e) {
            /* Capturo el evento en e */
            e.preventDefault(); /* Detengo el envio del formulario */

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡Este participante se eliminará definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        })
    </script>
    <script>
        function llamarMetodo() {
            $.ajax({
                url: "{{ route('adminparticipants.export') }}", // Reemplaza 'ruta.nombre' con la ruta a tu método
                method: 'GET', // O el método HTTP que desees usar (GET, POST, etc.)
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    console.log(response);
                },
                error: function(error) {
                    // Manejar errores aquí
                    console.error(error);
                }
            });
        }
    </script>
@endsection
