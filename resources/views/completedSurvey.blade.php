@extends('layouts.structure')
@section('content')
<script>
    Swal.fire({

    title: '<strong>User Demographic Information</strong>',
    type: 'success',
    html:
        'Thanks For Sharing Your Experience With Us',
    // showCloseButton: true,
    focusConfirm: false,
    confirmButtonText:
        '<a style="color:#fff;"  href="/"><i class="fa fa-thumbs-up"></i>Continue To MyIUDExperience.com</a>',
    // confirmButtonAriaLabel: 'Thumbs up, great!',
    })
</script>
@endsection